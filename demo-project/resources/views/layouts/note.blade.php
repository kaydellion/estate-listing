@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$note->note_title}}</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $note->content}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection