<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Gender;
use PDF;
use DB;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $students = Student::all();
        $students = Student::orderBy('id', 'asc')->get();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'number' => 'required',
            'birth_date' => 'required',
            'age' => 'required'
        ]);

        $student = new Student;
        $student->last_name = $request->input('last_name');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->number = $request->input('number');
        $student->birth_date = $request->input('birth_date');
        $student->age = $request->input('age');
        
        $student->save();

        return redirect('/students')->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'number' => 'required',
            'birth_date' => 'required',
            'age' => 'required'
        ]);

        $student = Student::find($id);
        $student->last_name = $request->input('last_name');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->gender = $request->input('gender');
        $student->address = $request->input('address');
        $student->number = $request->input('number');
        $student->birth_date = $request->input('birth_date');
        $student->age = $request->input('age');
        
        $student->save();

        return redirect('/students')->with('success', 'Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students')->with('success', 'Successfully Removed');
    }

    public function generatePDF($id)
    {
        $student = Student::find($id);
        $pdf = PDF::loadView('students.pdf', ['students' => $student])->setPaper('a4', 'portrait');
  
        return $pdf->download('student.pdf');
        // $fileName = $student->last_name;
        // return $pdf->stream($fileName . '.pdf');
    }
}
