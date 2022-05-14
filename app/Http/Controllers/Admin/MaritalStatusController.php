<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MaritalStatus;
use Illuminate\Http\Request;

class MaritalStatusController extends Controller
{
    public function api(Request $request)
    {
        $statuses = MaritalStatus::query()->where('title' , 'LIKE' , '%'.$request->title.'%')->take(5)->get();
        return response()->json($statuses);
    }
}
