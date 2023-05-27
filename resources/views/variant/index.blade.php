@extends('layouts.site')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header link-secondary">Сформировать вариант</div>

                    <div class="card-body">
                        <form method="POST" action="formirovanie-varianta" enctype="multipart/form-data">
                            @csrf {{--Важная штука !!!НЕ ТРОГАТЬ!!!--}}
                            <label for="title">Название:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="{{ old('name') }}" required>
                            ===

                            <label for="sprav_id">Выберите сраночник:</label>


                            <select id="task-dropdown-1" class="form-control" name="task_1">
                                <option value="">-- Задание 1  --</option>
                                @foreach ($tasks->where('block_id', 1) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======


                            <select id="task-dropdown-2" class="form-control" name="task_2">
                                <option value="">-- Задание 2  --</option>
                                @foreach ($tasks->where('block_id', 2) as $task)
                                    <option value="{{ $task->id }}">
                                        {{ $task->name }}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-3" class="form-control" name="task_3">
                                <option value="">-- Задание 3  --</option>
                                @foreach ($tasks->where('block_id', 3) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-4" class="form-control" name="task_4">
                                <option value="">-- Задание 4  --</option>
                                @foreach ($tasks->where('block_id', 4) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-5" class="form-control" name="task_5">
                                <option value="">-- Задание 5  --</option>
                                @foreach ($tasks->where('block_id', 5) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-6" class="form-control" name="task_6">
                                <option value="">-- Задание 6  --</option>
                                @foreach ($tasks->where('block_id', 6) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-7" class="form-control" name="task_7">
                                <option value="">-- Задание 7  --</option>
                                @foreach ($tasks->where('block_id', 7) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-8" class="form-control" name="task_8">
                                <option value="">-- Задание 8  --</option>
                                @foreach ($tasks->where('block_id', 8) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-9" class="form-control" name="task_9">
                                <option value="">-- Задание 9  --</option>
                                @foreach ($tasks->where('block_id', 9) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-10" class="form-control" name="task_10">
                                <option value="">-- Задание 10  --</option>
                                @foreach ($tasks->where('block_id', 10) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-11" class="form-control" name="task_11">
                                <option value="">-- Задание 11  --</option>
                                @foreach ($tasks->where('block_id', 11) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-12" class="form-control" name="task_12">
                                <option value="">-- Задание 12  --</option>
                                @foreach ($tasks->where('block_id', 12) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-13" class="form-control" name="task_13">
                                <option value="">-- Задание 13  --</option>
                                @foreach ($tasks->where('block_id', 13) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-14" class="form-control" name="task_14">
                                <option value="">-- Задание 14  --</option>
                                @foreach ($tasks->where('block_id', 14) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-15" class="form-control" name="task_15">
                                <option value="">-- Задание 15  --</option>
                                @foreach ($tasks->where('block_id', 15) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-16" class="form-control" name="task_16">
                                <option value="">-- Задание 16  --</option>
                                @foreach ($tasks->where('block_id', 16) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            =======

                            <select id="task-dropdown-17" class="form-control" name="task_17">
                                <option value="">-- Задание 17  --</option>
                                @foreach ($tasks->where('block_id', 17) as $task)
                                    <option value="{{$task->id}}">
                                        {{$task->name}}
                                    </option>
                                @endforeach
                            </select>
                            ======


                            <script>
                                $(document).ready(function() {
                                    $('#task-dropdown-1').select2();
                                    $('#task-dropdown-2').select2();
                                    $('#task-dropdown-3').select2();
                                    $('#task-dropdown-4').select2();
                                    $('#task-dropdown-5').select2();
                                    $('#task-dropdown-6').select2();
                                    $('#task-dropdown-7').select2();
                                    $('#task-dropdown-8').select2();
                                    $('#task-dropdown-9').select2();
                                    $('#task-dropdown-10').select2();
                                    $('#task-dropdown-11').select2();
                                    $('#task-dropdown-12').select2();
                                    $('#task-dropdown-13').select2();
                                    $('#task-dropdown-14').select2();
                                    $('#task-dropdown-15').select2();
                                    $('#task-dropdown-16').select2();
                                    $('#task-dropdown-17').select2();
                                });
                            </script>




{{--                            <input type="hidden" name="block_id" value="{{$_GET['id']}}">--}}
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Опубликовать</button>
                            </div>

                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
