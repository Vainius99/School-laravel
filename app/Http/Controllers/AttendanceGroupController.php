<?php

namespace App\Http\Controllers;

use App\Models\AttendanceGroup;
use Illuminate\Http\Request;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendance_groups = AttendanceGroup::all();
        return view("attendanceGroup.index",['attendance_groups' =>$attendance_groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendanceGroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendanceGroup = new AttendanceGroup;
        $attendanceGroup->name = $request->attendanceGroup_name;
        $attendanceGroup->description = $request->attendanceGroup_description;
        $attendanceGroup->difficulty = $request->attendanceGroup_difficulty;
        $attendanceGroup->school_id = $request->attendanceGroup_school_id;

        $attendanceGroup->save();

        return redirect()->route('attendanceGroup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceGroup $attendanceGroup)
    {
        return view("attendanceGroup.show", ["attendanceGroup" => $attendanceGroup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendanceGroup $attendanceGroup)
    {
        return view("attendanceGroup.edit", ["attendanceGroup"=> $attendanceGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttendanceGroup $attendanceGroup)
    {
        $attendanceGroup->name = $request->attendanceGroup_name;
        $attendanceGroup->description = $request->attendanceGroup_description;
        $attendanceGroup->difficulty = $request->attendanceGroup_difficulty;
        $attendanceGroup->school_id = $request->attendanceGroup_school_id;

        $attendanceGroup->save();

        return redirect()->route('attendanceGroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendanceGroup $attendanceGroup)
    {
        $attendanceGroup->delete();
        return redirect()->route('attendanceGroup.index');
    }
}
