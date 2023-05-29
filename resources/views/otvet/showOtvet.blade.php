@extends('layouts.site')
@section('content')
    <br>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Описание</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @forelse  ($otvet->sortByDesc('id') as $row)
        <tr>
            <th style="width: 50px" scope="row">{{$row->id}}</th>
            <td><p class="card-text">{{ $row->name }}</p></td>
            <td><p style="width: 300px" class="card-text">{{$row->description}}</p></td>
            <td style="width: 200px">
                <a class="btn btn-outline-info" href="/otvet/show/{{$row->id}}">Просмотр</a>
            </td>
        </tr>
        @empty
        <p>Пока что здесь ничего нет.</p>
        @endforelse
        </tbody>
    </table>
@endsection
