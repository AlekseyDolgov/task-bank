@extends('layouts.site')
@section('content')

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <h3><a href="{{ route('add_task.block') }}?id={{ $_GET['id'] }}">Добавить задание</a></h3>
            @forelse  ($tasks->sortByDesc('id') as $task)
                номер задания: {{$task->id}} <br>
                name: {{$task->name}} <br>
                <script>
                    const mfe = new MathfieldElement();
                    mfe.value = '{{$task->formula}}';
                    document.body.appendChild(mfe);
                </script>
                description: {{$task->description}} <br>

                img: <img src="{{asset('storage/' . $task->img) }}" alt=""> <br>



            @empty
                <p>Пока что здесь ничего нет.</p>
            @endforelse
        </div>
    </div>

@endsection
