@extends('layouts.site')
@section('content')

    @forelse  ($otvet->sortByDesc('id') as $otvet)
        <div class="card-body">
            <table class="table">
                <td><a href="/otvet">{{ $otvet->name }}</a></td>
                {{--                    <td><p class="card-text">{{ $sprav->description }}</p></td>--}}
            </table>
        </div>
    @empty
        <p>Пока что здесь ничего нет.</p>
    @endforelse


@endsection

