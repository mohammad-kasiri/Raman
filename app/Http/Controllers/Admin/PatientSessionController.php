<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSession;
use Illuminate\Http\Request;

class PatientSessionController extends Controller
{
    public function index(User $patient)
    {
        $sessions = $patient->userSessions()->latest()->paginate(UserSession::PAGINATION_LIMIT);

        return view('admin.users.patients.sessions.index')
            ->with(['patient'  => $patient])
            ->with(['sessions' => $sessions]);
    }
}
