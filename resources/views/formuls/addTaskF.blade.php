@extends('layouts.site')
@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header link-secondary">Добавить формулу к задаче</div>
                    <div class="card-body">
                        <form method="POST" action="/formuls/indexTaskF" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group mb-3">
                                <label for="formul_id">Выберите формулу:</label>
                                <select id="task-dropdown" class="form-control" name="formul_id">
                                    <option value="">-- Формулы --</option>
                                    @foreach ($formuls as $formul)
                                        <option value="{{$formul->id}}">
                                            {{$formul->name}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="task_id">Выберите сраночник:</label>
                                <select id="task-dropdown" class="form-control" name="task_id">
                                    <option value="">-- Справочники --</option>
                                    @foreach ($tasks as $task)
                                        <option value="{{$task->id}}">
                                            {{$task->name}}
                                        </option>
                                    @endforeach
                                </select>
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
