@extends('layouts.site')
@section('content')

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse  ($blosks->sortByDesc('id') as $block)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{asset('storage/' . $block->img) }}" class="card-img-top img-fluid aspect-ratio-square @if($block->imageIsSmaller()) img-cover @endif" alt="">
                        <div class="card-body">
                            <a href="tasks/index?id={{$block->id}}">{{ $block->name }}</a>
                            <p class="card-text">{{ $block->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Пока что здесь ничего нет.</p>
            @endforelse
        </div>
    </div>

@endsection
