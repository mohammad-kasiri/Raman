<?php

namespace App\Observers;

use App\Models\Career;
use App\Models\Degree;
use App\Models\MaritalStatus;
use App\Models\Patient;
use App\Models\StudyField;
use App\Models\User;

class PatientObserver
{
    public function creating(User $user)
    {
        isset($user->patient->marital_status) &&  MaritalStatus::UpdateAutoComplete($user->marital_status);
        isset($user->patient->career)         &&  Career::UpdateAutoComplete($user->career);
        isset($user->patient->degree)         &&  Degree::UpdateAutoComplete($user->degree);
        isset($user->patient->study_field)    &&  StudyField::UpdateAutoComplete($user->study_field);
    }

    public function updating(User $user)
    {
        isset($user->patient->marital_status) &&  MaritalStatus::UpdateAutoComplete($user->marital_status);
        isset($user->patient->career)         &&  Career::UpdateAutoComplete($user->career);
        isset($user->patient->degree)         &&  Degree::UpdateAutoComplete($user->degree);
        isset($user->patient->study_field)    &&  StudyField::UpdateAutoComplete($user->study_field);
    }
}
