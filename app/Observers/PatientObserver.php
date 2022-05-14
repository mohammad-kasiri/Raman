<?php

namespace App\Observers;

use App\Models\Career;
use App\Models\MaritalStatus;
use App\Models\Patient;

class PatientObserver
{
    public function created(Patient $patient)
    {
        !is_null($patient->marital_status) &&  MaritalStatus::UpdateAutoComplete($patient->marital_status);
        !is_null($patient->career)         &&  Career::UpdateAutoComplete($patient->career);
    }

    public function updated(Patient $patient)
    {
        !is_null($patient->marital_status) &&  MaritalStatus::UpdateAutoComplete($patient->marital_status);
        !is_null($patient->career)         &&  Career::UpdateAutoComplete($patient->career);
    }
}
