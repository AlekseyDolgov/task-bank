@extends('layouts.site')
@section('content')


@forelse  ($sprav->sortByDesc('id') as $sprav)
            <div class="card-body">
                <table class="table">
                    <td><a href="#"> class="card-title">{{ $sprav->name }}</a></td>>
                    <td><p class="card-text">{{ $sprav->description }}</p></td>
                </table>
            </div>
@empty
    <p>Пока что здесь ничего нет.</p>
@endforelse


@endsection

