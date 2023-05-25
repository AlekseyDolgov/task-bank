@extends('layouts.site')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="level">


                        </div>
                    </div>
                    <div class="card-body">
                        {{$sprav->name}}
                    </div>
                </div>

    <div class="card-body">
        <p class="card-text">{{$sprav->description}}</p>
        <img src="{{asset('storage/'.$sprav->img)}}" class="" alt="gkjbdsf;l" style="max-width: 100%; height: auto; margin: 20px 0;">
    </div>
            </div></div></div>



@endsection
