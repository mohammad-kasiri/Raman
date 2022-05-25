<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreRequest;
use App\Http\Requests\Doctor\UpdateRequest;
use App\Models\Province;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::query()->doctors()->latest()->paginate(User::PAGINATION_LIMIT);;
        return view('admin.users.doctors.index')->with(['doctors' => $doctors]);
    }

    public function create()
    {
        $subjects = Subject::query()->orderBy('title' , 'DESC')->get();
        return view('admin.users.doctors.create')->with(['subjects' => $subjects]);
    }

    public function store(StoreRequest $request)
    {
        User::query()->create();
        return redirect()->route('');
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
}
