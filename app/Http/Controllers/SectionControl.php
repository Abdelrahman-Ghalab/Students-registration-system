<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Student;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SectionControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $sect)
    {

      $section = Section::where('section_ID', $sect);
      $student = new Student;
      $sid = $request->sid;
      $stud  =Student::where('sid',$sid )->get();
      if($stud != '[]'){
          return view('re_register', compact('request'));
      }
    else{
      $student->sid = $request->sid;
      $student->sname = $request->sname;
      $student->email = $request->email;
      $student->section_ID = $sect;
      $student->save();
      return \Redirect::to('/');
      }
    }
    public function re_register(Request $request, $sect)
    {
      if($request->decision=="keep")
        return \Redirect::to('/');
      else{
      $section = Section::where('section_ID', $sect);
      $student = new Student;
      $sid = $request->sid;
      $stud  =Student::where('sid',$sid )->delete();
      $student->sid = $request->sid;
      $student->sname = $request->sname;
      $student->email = $request->email;
      $student->section_ID = $sect;
      $student->save();
      return \Redirect::to('/');
      }
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sect)
    {
        $students = Student::where('section_ID',$sect)->get();
        return view('show', compact('students'));

    }

    public function slots(){
      $no1 =8- Student::where('section_ID','1')->get()->count();
      $no2 = 8-Student::where('section_ID','2')->get()->count();
      $no3 = 8-Student::where('section_ID','3')->get()->count();
      $no4 = 8-Student::where('section_ID','4')->get()->count();
      $no = array($no1, $no2, $no3, $no4);
      return view('start', compact('no'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
