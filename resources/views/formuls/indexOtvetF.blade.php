@extends('layouts.site')
@section('content')

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Формулы</th>
                    <th scope="col">Решения</th>
                </tr>
                </thead>
                <tbody>
                @forelse  ($of->sortByDesc('id') as $row)
                    <tr>
                        <th style="width: 50px" scope="row">{{$row->id}}</th>
                        <td><p class="card-text">{{ $row->formul_id }}</p></td>
                        <td><p class="card-text">{{$row->otvet_id}}</p></td>
                    </tr>
                @empty
                    <p>Пока что здесь ничего нет.</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>


@endsection
