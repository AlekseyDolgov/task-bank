@extends('layouts.site')
@section('content')
<br>
            <form method="get" action="{{route('search')}}">
                <div class="form-row">
                    <div class="input-group mb-10">
                        <input type="text" class="form-control" id="s" name="s" placeholder="Поиск...">
                        <button type="submit" class="btn btn-primary" aria-pressed="false">
                            Искать!
                        </button>
                    </div>
                </div>
            </form>
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
                @forelse  ($sprav->sortByDesc('id') as $row)
                    <tr>
                        <th style="width: 50px" scope="row">{{$row->id}}</th>
                        <td style="width: 400px"><p class="card-text">{{ $row->name }}</p></td>
                        <td><p class="card-text">{{$row->description}}</p></td>
                        <td style="width: 300px"><a class="btn btn-outline-danger">Удалить</a> {{--Не работает--}}
                            <a class="btn btn-outline-info" href="/sprav/show/{{$row->id}}">Просмотр</a>
                        </td>
                    </tr>
                @empty
                    <p>Пока что здесь ничего нет.</p>
                @endforelse
                </tbody>
            </table>

            {{$sprav->links()}}

@endsection

