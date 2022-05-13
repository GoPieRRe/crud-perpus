<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\{rayon, rombel};
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = students::latest()->paginate('5');
        return view('students.index',compact('student'))->with('i', (request()->input('page', 1) -1 ) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rayons = rayon::all();
        $rombel = rombel::all();
        return view('students.create',compact('rayons','rombel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jk' => 'required',
        ]);
        students::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $student)
    {
        $rayons = rayon::all();
        $rombel = rombel::all();
        return view('students.edit',compact('student','rayons','rombel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $student)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jk' => 'required',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student was updated');

    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $student)
    {
        
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student was Deleted');
    }
}
