<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Student([
            'name'  => $row['name']??null,
            'image' => $row['image'] ?? null,
            'email' => $row['email']??null,
            'phone' => $row['phone'] ?? null,
            'address' => $row['address'] ?? null,
            'dob' => $row['dob'] ?? null,
            'password' => $row['password']??null,
            'class'=> $row['password']??null,
            'section'=> $row['section']??null,
        ]);
    }
}
