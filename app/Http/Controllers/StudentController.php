<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller {
    public static function index(){
        return view ('studentlist', [
            'students' => Student::all(),
            'activeStudent' => 'active'
        ]);
    }

    public static function show($nim){
        $student = Student::find($nim);

        return view ('studentdetail', [
            'student' => $student
        ]);
    }
}

?>