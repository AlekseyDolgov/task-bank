@extends('layouts.site')
@section('content')

    @forelse  ($sprav as $row)
        <div class="card-body">
            <h>{{$row->name}}</h>
            <p class="card-text">{{$row->description}}</p>
            <img src="{{asset('storage/'.$row->img)}}" class="card-img-top img-fluid aspect-ratio-square @if($row->imageIsSmaller()) img-cover @endif" alt="">
        </div>
    @empty
        <p>Пока что здесь ничего нет.</p>
    @endforelse


@endsection
