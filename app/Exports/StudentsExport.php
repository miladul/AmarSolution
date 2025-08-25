<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Student::select('id','name','image','email','phone','address','dob','password','class','section')->get();
    }

    public function headings(): array
    {
        return ['id', 'name', 'image', 'email', 'phone', 'address', 'dob', 'password', 'class', 'section'];
    }
}
