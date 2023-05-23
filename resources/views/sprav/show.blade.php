@extends('layouts.site')
@section('content')

        <div class="card-body">
            <h>{{$sprav->name}}</h>
            <p class="card-text">{{$sprav->description}}</p>
            <img src="{{asset('storage/' . $sprav->img) }}" class="card-img-top img-fluid aspect-ratio-square @if($sprav->imageIsSmaller()) img-cover @endif" alt="">
        </div>



@endsection
