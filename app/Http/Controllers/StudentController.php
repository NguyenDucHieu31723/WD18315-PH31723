<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function listStudents()
    {
        $data = [
            [
                'id'=>'1',
                'name'=>'Nguyen Duc Hieu',
                'age'=>'18',
                'address'=>'Bac Giang',
            ],
            [
                'id'=>'2',
                'name'=>'Nguyen Duc Hieu',
                'age'=>'18',
                'address'=>'Bac Giang',
            ],
            [
                'id'=>'3',
                'name'=>'Nguyen Duc Hieu',
                'age'=>'18',
                'address'=>'Bac Giang',
            ],
        ];
        return view('list-students',compact('data'));
    }
}
