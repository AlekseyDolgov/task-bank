@extends('layouts.site')
@section('content')

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <a class="btn btn-outline-success" href="{{ route('add_task.block') }}?id={{ $_GET['id'] }}">Добавить задание</a>
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
                    @forelse  ($tasks->sortByDesc('id') as $row)
                        <tr>
                            <th style="width: 50px" scope="row">{{$row->id}}</th>
                            <td><p class="card-text">{{ $row->name }}</p></td>
                            <td><p style="width: 300px" class="card-text">{{$row->description}}</p></td>
                            <td style="width: 400px"><a class="btn btn-outline-warning" href="{{route('addOtvet')}}">Добавить решение</a>
                                <a class="btn btn-outline-info" href="/tasks/show/{{$row->id}}">Просмотр</a>
                            </td>
                        </tr>
                    @empty
                        <p>Пока что здесь ничего нет.</p>
                    @endforelse
                    </tbody>
                </table>
        </div>
    </div>


@endsection
