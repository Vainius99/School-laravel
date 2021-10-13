@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>
                    <form class="white form-group" action="{{route('student.update', [$student])}}" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="student_name" class="col-md-4 col-form-label text-md-right"> Name: </label>
                            <input class="gray form-control col-md-6" type="text" name="student_name" placeholder="Enter client name" />
                        </div>
                        <div class="form-group row">
                            <label for="student_surname" class="col-md-4 col-form-label text-md-right"> Surname: </label>
                            <input class="gray form-control col-md-6" type="text" name="student_surname" placeholder="Enter Surname" />
                        </div>
                        <div class="form-group row">
                            <label for="student_group_id" class="col-md-4 col-form-label text-md-right"> Group: </label>
                            <input class="gray form-control col-md-6" type="text" name="student_group_id" placeholder="Enter Group" />
                        </div>
                        <div class="form-group row ">
                            <label for="student_image_url" class="col-md-4 col-form-label text-md-right"> Image: </label>
                            <input class="gray form-control col-md-6" type="file" name="student_image_url" placeholder="Enter image url" />
                            <img class='col-md-12' src="{{$student->image_url}}" alt='{{$student->name}}' />
                        </div>
                    @csrf
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Edit Student</button>
                </form>
                    <a class="btn btn-link"style="color: red" href="{{ url('/students')}}">Back</a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
