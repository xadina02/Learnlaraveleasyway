<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Http\Resources\StudentResourceCollection;

use Illuminate\Http\Request;
use App\Models\Student;

class APIController extends Controller
{
    public function __invoke(Request $request)
    {
        // $student = Student::first();
        // $students = Student::select(['id', 'name'])->get();
        $students = Student::all();

        // return $students->keyBy->id;

        return (new StudentResourceCollection($students))->additional([
            'meta' => [
                'a' => 1,
                'b' => 2,
            ]
        ]);

        return new StudentResource($students);
        // return new StudentResourceCollection($students);
        // return StudentResource::collection($students);

        // return 'wow!';
    }
}
