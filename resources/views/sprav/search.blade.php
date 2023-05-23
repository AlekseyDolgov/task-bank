@extends('layouts.site')
@section('content')

    <form method="get" action="{{route('search')}}">
        <div class="form-row">
            <div class="form-group col-md-10">
                <input type="text" class="form-control" id="s" name="s" placeholder="Search...">
            </div>
            <div class="form-group col-md-2">
                <button type="submit">Search</button>
            </div>
        </div>
    </form>
    @forelse  ($sprav->sortByDesc('id') as $row)
        <div class="card-body">
            <table class="table">
                <td><a href="/sprav/show/{{$row->id}}"> class="card-title">{{ $row->name }}</a></td>>
                {{--                    <td><p class="card-text">{{ $sprav->description }}</p></td>--}}
            </table>
        </div>

    @empty
        <p>Пока что здесь ничего нет.</p>
    @endforelse
    {{$sprav->appends(['s' => request()->s])->links()}}


@endsection
