@extends('layouts.site')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header">Добавить решение</div>

                    <div class="card-body">
                        <form method="POST" action="/otvet" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="body">Описание:</label>
                                <textarea name="description" id="description" class="form-control"
                                          rows="8" required>{{ old('description') }}</textarea>
                            </div>
                            <!-- фото-->
                            <div class="form-group bmd-form-group is-focused file-input">
                                <label for="img">Выберите изображение:</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                            </div>
                            <div class="form-group mb-3">
                                <select  id="task-dropdown" class="form-control" name="task_id">
                                    <option value="">-- Задание --</option>
                                    @foreach ($tasks as $task)
                                        <option value="{{$task->id}}">
                                            {{$task->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" value="0" name="status" type="hidden" checked>
                                <input class="form-check-input" value="1" name="status" type="checkbox" id="status" checked="checked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Статус</label>
                            </div>
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
