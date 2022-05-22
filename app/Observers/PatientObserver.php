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
    public function created(Patient $patient)
    {
        isset($patient->marital_status) &&  MaritalStatus::UpdateAutoComplete($patient->marital_status);
        isset($patient->career)         &&  Career::UpdateAutoComplete($patient->career);
        isset($patient->degree)         &&  Degree::UpdateAutoComplete($patient->degree);
        isset($patient->study_field)    &&  StudyField::UpdateAutoComplete($patient->study_field);
    }

    public function updated(Patient $patient)
    {
        isset($patient->marital_status) &&  MaritalStatus::UpdateAutoComplete($patient->marital_status);
        isset($patient->career)         &&  Career::UpdateAutoComplete($patient->career);
        isset($patient->degree)         &&  Degree::UpdateAutoComplete($patient->degree);
        isset($patient->study_field)    &&  StudyField::UpdateAutoComplete($patient->study_field);
    }
}
