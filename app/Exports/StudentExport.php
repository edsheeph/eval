<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    // https://laravel-news.com/five-hidden-features-of-the-laravel-excel-package

    public function headings(): array
    {
        return [
            'Student Number',
            'Last Name',
            'First Name',
            'Middle Name',
            'Gender',
            'Address',
            'Contact Number',
            'Birthday',
            'Age',
        ];
    }

    public function map($student): array
    {
        return [
            $student->id,
            strtoupper($student->last_name),
            // '=UPPER(B2:B24)',
            strtoupper($student->first_name),
            strtoupper($student->middle_name),
            ucfirst(trans($student->gender)),
            $student->address,
            $student->number,
            date("F j, Y", strtotime($student->birth_date)),
            $student->age,
        ];
    }
}
