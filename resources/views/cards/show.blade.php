@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h1>{{$card -> title}}</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <ul class="list-group">
            @foreach($card->notes as $note)
                <li class="list-group-item">{{$note->body}}</li>
            @endforeach
            <li class="list-group-item"><a href="index">Back to all cards</a></li>
        </ul>
    </div>
    <div class="row ">
        <div class="col-md-12 d-flex justify-content-center">

            <h3>Add a note</h3>

        </div>
    </div>
    <div class="row ">
        <div class="col-md-12 d-flex justify-content-center">
            <form method="POST" action="/cards/{{$card->id}}/notes">
                <div class="form-group">
                    <textarea name="body" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add notes</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
            </form>
        </div>
    </div>
@stop