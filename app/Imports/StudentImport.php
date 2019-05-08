<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'last_name' => $row[1],
            'first_name' => $row[2],
            'middle_name' => $row[3],
            'gender' => $row[4],
            'address' => $row[5],
            'number' => $row[6],
            'birth_date' => $row[7],
            'age' => $row[8],
        ]);
    }
}
