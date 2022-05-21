<?php

namespace App\Http\Controllers\Admin;

use App\Functions\Date;
use App\Http\Controllers\Controller;
use App\Http\Requests\Patient\StoreRequest;
use App\Http\Requests\Patient\UpdateRequest;
use App\Models\Career;
use App\Models\MaritalStatus;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use JetBrains\PhpStorm\ArrayShape;


class PatientController extends Controller
{
    public function index()
    {
        $patients = User::query()->patients()->latest()->paginate(User::PAGINATION_LIMIT);
        return view('admin.users.patients.index')->with(['patients' => $patients]);
    }

    public function show($patient_id)
    {
        $patient = User::query()->with(['userSessions' => function ($query) {
            return $query->select('created_at', 'ip_address', 'platform', 'browser', 'user_id')->latest()->take(User::PROFILE_SESSION_LIMIT)->get();
        }])->withCount('userSessions')->findOrFail($patient_id);

        return view('admin.users.patients.show')->with([
            'patient' => $patient
        ]);
    }

    public function create()
    {
        $cities = Province::query()->cities()->get();
        return view('admin.users.patients.create')
            ->with(['cities' => $cities]);
    }

    public function store(StoreRequest $request)
    {
        $user = User::query()->create(
            array_merge($this->userInputs($request),
                [
                    'mobile' => $request->validated('mobile'),
                    'password' => Hash::make($request->validated('password')),
                ]
            )
        );
        $user->patient()->create($this->patientInputs($request));
        Session::flash('message', 'بیمار جدید با موفقیت اضافه شد.');
        return redirect()->route('admin.patients.index');
    }

    public function edit($patient)
    {
        $patient = User::findOrFail($patient);
        $cities = Province::query()->cities()->get();

        return view('admin.users.patients.edit')
            ->with(['patient' => $patient])
            ->with(['cities' => $cities]);
    }

    public function update(UpdateRequest $request, User $patient)
    {
        $patient->update($this->userInputs($request));
        $patient->patient->update($this->patientInputs($request));
        Session::flash('message', 'تغییرات با موفقیت انجام شد');
        return redirect()->route('admin.patients.show', $patient->id);
    }

    private function userInputs($request)
    {
        return [
            'first_name' => $request->validated('first_name'),
            'last_name'  => $request->validated('last_name'),
            'gender'     => $request->validated('gender'),
            'email'      => $request->validated('email'),
        ];
    }

    private function patientInputs($request)
    {
        return [
            'career'         => $request->validated('career'),
            'city_id'        => $request->validated('city_id'),
            'address'        => $request->validated('address'),
            'birthdate'      => Date::format($request->validated('birthdate')),
            'marital_status' => $request->validated('marital_status'),
            'degree'         => $request->validated('degree'),
            'study_field'    => $request->validated('study_field'),
        ];
    }
}

