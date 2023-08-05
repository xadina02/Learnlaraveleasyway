<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Collection;

class StudentController extends Controller
{
    public function students()
    {
        // Assume we are pulling list of students from the database

        // $students = [
        //     ['id' => 1, 'name' => 'Mosongo Adina', 'score' => 34],
        //     ['id' => 2, 'name' => 'Formasit Chijoh', 'score' => 2],
        //     ['id' => 3, 'name' => 'Fongoh Martin', 'score' => 50],
        //     ['id' => 4, 'name' => 'Ndalegh Noela', 'score' => 10],
        //     ['id' => 5, 'name' => 'Nkwetakem Bruno', 'score' => 24],
        //     ['id' => 6, 'name' => 'Mbi-Enow Appelgryn', 'score' => 37],
        //     ['id' => 7, 'name' => 'Taylor Ottwell', 'score' => 19]
        // ];

        // $students = Student::all();
        $students = Student::where('score', '>', 10)
                ->orderBy('id', 'desc')
                ->get();

                // ->take(2)
                // ->cursor();
        // $students = $student->fresh();
        // $students = Student::cursor();

        return view('students', compact('students'));
    }
    public function details($id)
    {
        return view('studentsdetails')
            ->with('studentId', $id)
        ;
    }

    public function create()
    {
        // echo 'We are creating a new record';
        // $student = new Student;
        // $student->name = 'Joe Biden Philip';
        // $student->score = 10;
        // $student->save(); //key to running the query

        // // $student = Student::create(['name' => 'Abonga Christelle',]);

        // echo '<br> Student record created asuccessfully';

        return view('students.create');

    }

    public function update()
    {
        echo 'We are trying to update some student records';
        // $student = Student::find(8);
        // $student->name = 'Mosongo Mende';
        // $student->save();

        $student = Student::where('id', 8)
                ->update(['name'=> 'OMG soo good']);

        echo '<br>We have successfully updated the student record';
    }

    public function delete()
    {
        echo 'We are trying to delete some student records from the database';

        // $student = Student::destroy(11);

        $student = Student::where('id', 10)->delete();
        echo '<br> Student record have been successfully deleted';
    }

    public function store(Request $request)
    {
        // echo 'We are storing!';

        $request->validate([

            'name'=>'required',
            'score'=>'required',

        ]);
        $data = $request->all();
        // dd($data);

        $student = new Student;
        $student->name = $data['name'];
        $student->score = $data['score'];
        $student->save();

        // echo 'Student saved successfully';
        return redirect()->route('students');
    }
}
