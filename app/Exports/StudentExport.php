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
}
