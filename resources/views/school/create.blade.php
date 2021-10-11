@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Create') }}</div>
                <form class="white form-group" action="{{route('school.store')}}" method="post">
                    <div class="form-group row">
                        <label for="attendanceGroup_name" class="col-md-4 col-form-label text-md-right"> Name: </label>
                        <input class="gray form-control col-md-6" type="text" name="school_name" placeholder="Enter School Name" />
                    </div>
                    <div class="form-group row">
                        <label for="school_description" class="col-md-4 col-form-label text-md-right"> Description: </label>
                        <input class="gray form-control col-md-6" type="text" name="school_description" placeholder="Enter School Description" />
                    </div>
                    <div class="form-group row">
                        <label for="school_place" class="col-md-4 col-form-label text-md-right"> Place: </label>
                        <input class="gray form-control col-md-6" type="text" name="school_place" placeholder="Enter School Place" />
                    </div>
                    <div class="form-group row">
                        <label for="school_phone" class="col-md-4 col-form-label text-md-right"> Phone: </label>
                        <input class="gray form-control col-md-6" type="text" name="school_phone" placeholder="Enter School Phone Nunber" />
                    </div>
                    @csrf
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Create School</button>
                </form>
                            <a class="btn btn-link" style="color: red" href="{{ url('/schools')}}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
