@extends('layouts.site')
@section('content')

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <h3><a href="{{ route('add_task') }}">Добавить задание</a></h3>
            @forelse  ($tasks->sortByDesc('id') as $task)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{asset('storage/' . $task->img) }}" class="card-img-top img-fluid aspect-ratio-square @if($task->imageIsSmaller()) img-cover @endif" alt="">
                        <div class="card-body">
                            <a href="tasks/{{$task->name}}"><h5 class="card-title">{{ $task->name }}</h5></a>
                            <p class="card-text">{{ $task->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Пока что здесь ничего нет.</p>
            @endforelse
        </div>
    </div>

@endsection
