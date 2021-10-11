@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>
                    <form class="white form-group" action="{{route('attendanceGroup.store')}}" method="post">
                        <div class="form-group row">
                            <label for="attendanceGroup_name" class="col-md-4 col-form-label text-md-right"> Name: </label>
                            <input class="gray form-control col-md-6" type="text" name="attendanceGroup_name" placeholder="Enter Groups Letter" />
                        </div>
                        <div class="form-group row">
                            <label for="attendanceGroup_description" class="col-md-4 col-form-label text-md-right"> Description:  </label>
                            <input class="gray form-control col-md-6" type="text" name="attendanceGroup_description" placeholder="Enter Description" /><br>
                        </div>
                        <div class="form-group row">
                            <label for="attendanceGroup_difficulty" class="col-md-4 col-form-label text-md-right"> Difficulty: </label>
                            <input class="gray form-control col-md-6" type="text" name="attendanceGroup_difficulty" placeholder="Easy, Hard , Medium"/><br>
                        </div>
                        <div class="form-group row">
                            <label for="attendanceGroup_school_id" class="col-md-4 col-form-label text-md-right"> School ID </label>
                            <input class="gray form-control col-md-6" type="text" name="attendanceGroup_school_id" placeholder="Enter School ID Number" /><br>
                        </div>
                        @csrf
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Create Group</button>
                    </form>
                                <a class="btn btn-link" style="color: red" href="{{ url('/attendanceGroup')}}">Back</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
        @endsection
