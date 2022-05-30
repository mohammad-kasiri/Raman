<?php

namespace App\Http\Controllers\Admin;

use App\Functions\Date;
use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Requests\Doctor\UpdateRequest;
use App\Models\Province;
use App\Models\SocialMedia;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::query()->doctors()->latest()->paginate(User::PAGINATION_LIMIT);;
        return view('admin.users.doctors.index')->with(['doctors' => $doctors]);
    }

    public function create()
    {
        $subjects     = Subject::query()->orderBy('title' , 'ASC')->get();
        $socialMedias = SocialMedia::query()->get();
        return view('admin.users.doctors.create')
            ->with(['socialMedias' => $socialMedias])
            ->with(['subjects'     => $subjects]);
    }

    public function store(StoreRequest $request)
    {
        $user = User::query()->create(
            array_merge($this->userInputs($request),
                [
                    'mobile'   => $request->validated('mobile'),
                    'password' => Hash::make($request->validated('password')),
                ]
            )
        );

        if(isset($request->socialMedia) && count($request->socialMedia) > 0)
        {
            foreach (array_filter($request->socialMedia) as $key => $social)
            {
                $user->socialMedias()->attach($key ,  ['link' => $social]);
            }
        }

        $user->doctor()->create($this->doctorInputs($request));

        if(isset($request->subjects) && is_array($request->subjects) && count($request->subjects) > 0)
        {
            $user->doctor->subjects()->attach($request->subjects);
        }

        Session::flash('message', 'پزشک جدید با موفقیت اضافه شد.');
        return redirect()->route('admin.doctors.index');

    }

    public function edit($doctor)
    {
        $doctor = User::findOrFail($doctor);
        $cities = Province::query()->cities()->get();

        return view('admin.users.patients.edit')
            ->with(['doctor' => $doctor])
            ->with(['cities' => $cities]);
    }

    public function update(UpdateRequest $request , User $doctor)
    {
        $doctor->update();
        return redirect()->route('admin.doctor.show', $doctor->id);
    }


    private function userInputs($request)
    {
        return [
            'level'             => 'doctor',
            'first_name'        => $request->validated('first_name'),
            'last_name'         => $request->validated('last_name'),
            'gender'            => $request->validated('gender'),
            'email'             => $request->validated('email'),
            'email_verified_at' => !is_null($request->validated('email')) ? now() : null,
            'mobile_verified_at'=> now()
        ];
    }

    private function doctorInputs($request)
    {
        return [
            'educational_background'    => $request->validated('educational_background'),
            'working_background'        => $request->validated('working_background'),
            'bio'                       => $request->validated('bio'),
            'price_per_minute'          => $request->validated('price_per_minute'),
            'is_visible'                => $request->validated('is_visible'),
            'first_day_of_work'         => Date::format($request->validated('first_day_of_work')),
        ];
    }
}
