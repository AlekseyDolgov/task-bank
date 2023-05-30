@extends('layouts.site')
@section('content')
    <div class="container my-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Заголовок</th>
                        <th scope="col">Расшифратор</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($formuls->sortByDesc('id') as $row)
                        <tr>
                            <th style="width: 50px" scope="row">{{$row->id}}</th>
                            <td><p class="card-text">{{ $row->name }}</p></td>
                            <td><math-field></math-field></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
