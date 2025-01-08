@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Notes</h1>
    <div class="row">
    @foreach($notes as $note)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $note->note_title}}</h5>
                    <p class="card-text">{{ $note->created_at}}</p>
                    <p><a href="{{ url('note/' . $note->note_id) }}" class="btn btn-primary">View Note</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection