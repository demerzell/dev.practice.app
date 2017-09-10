@extends('layout.layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <h1>All Cards</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($cards as $card)
                    <a href="/cards/{{$card->id}}">{{$card->title}}</a>
                    </br>
                @endforeach
            </div>
        </div>
    </div>
@stop