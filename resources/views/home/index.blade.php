@extends('layouts.main')
@section('title', 'HomeEvents')
@section('content')
    <div id="bloco_cards">
    @foreach($events as $event)
        <div class="card" style="width: 18rem;">
            <img src="/img/banner.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-text"> {{$event->descrption}}</p>
                <a href="#" class="btn btn-primary">Ver evento</a>
            </div>
        </div>
    @endforeach
    </div>
@endsection
