<?php

namespace App\Imports;

use App\Models\PatientInfo;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PatientInfo([
            //
           'fullname'     => $row[0],
           'patient_id'    => $row[1], 
           'phone'    => $row[2], 
            'gender'    => $row[3], 
            'datee'    => $row[4], 
             'street'    => $row[5], 
            //   'occupation'    => $row[7], 
            //    'age'    => $row[8], 
        //    'password' => Hash::make($row[2]),
        ]);
    }


    // return new PatientInfo([
    //         //
    //        'fullname'     => $row[0],
    //        'patient_id'    => $row[1], 
    //        'phone'    => $row[2], 
    //         'gender'    => $row[3], 
    //         'datee'    => $row[4], 
    //          'street'    => $row[5], 
    //           'occupation'    => $row[6], 
    //            'age'    => $row[7], 
    //     //    'password' => Hash::make($row[2]),
    //     ]);
}
