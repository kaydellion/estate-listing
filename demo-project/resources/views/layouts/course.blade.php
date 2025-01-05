@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Courses</h1>
    <div class="row">
    @foreach($courses as $course)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->course}}</h5>
                    <p class="card-text">{{ $course->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection