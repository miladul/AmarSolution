<?php

namespace App\Http\Controllers\API;

use App\Exports\StudentsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImportStudentRequest;
use App\Imports\StudentsImport;
use App\Traits\ApiResponse;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    use ApiResponse;
    public function import(ImportStudentRequest $request)
    {
        Excel::import(new StudentsImport, $request->file('file'));

        return $this->success('Students imported successfully');
    }
    public function export()
    {
        return Excel::download(new StudentsExport, 'students-list.xlsx');
    }
}
