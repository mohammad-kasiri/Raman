<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSession;
use Illuminate\Http\Request;

class DoctorSessionController extends Controller
{
    public function index(User $doctor)
    {
        $sessions = $doctor->userSessions()->latest()->paginate(UserSession::PAGINATION_LIMIT);

        return view('admin.users.doctors.sessions.index')
            ->with(['doctor'   => $doctor])
            ->with(['sessions' => $sessions]);
    }
}
