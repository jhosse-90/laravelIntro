@extends('notes.layout')

@section('content-notes')
    <div>
        <h2>Show Note</h2>
        <div class="item">
            <strong>Title: </strong><br>
            {{ $note->title }}
        </div>
        <div class="item">
            <strong>Content: </strong><br>
            {{ $note->content }}
        </div>
    </div>
@endsection