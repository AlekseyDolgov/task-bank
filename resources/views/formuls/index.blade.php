@extends('layouts.site')
@section('content')

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Заголовок</th>
                    <th scope="col">Расшифратор</th>
                </tr>
                </thead>
                <tbody>
                @forelse  ($formuls->sortByDesc('id') as $row)
                    <tr>
                        <th style="width: 50px" scope="row">{{$row->id}}</th>
                        <td><p class="card-text">{{ $row->name }}</p></td>
                        <td><math-field></math-field></td>
                    </tr>
                @empty
                    <p>Пока что здесь ничего нет.</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>


@endsection
