@extends('layouts.site')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header">Добавить справочный материал</div>

                    <div class="card-body">
                        <form method="POST" action="/otvet" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group mb-3">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="body">Описание:</label>
                                <textarea name="description" id="description" class="form-control"
                                          rows="8" required>{{ old('description') }}</textarea>
                                <math-field></math-field>
                            </div>
                            <!-- фото-->
                            <div class="form-group bmd-form-group is-focused file-input">
                                <label for="photo">Выберите изображение:</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                            </div>
                            <div class="form-group mb-3">
                                <select  id="task-dropdown" class="form-control">
                                    <option value="">-- Select Task --</option>
{{--                                    @foreach ($data as $task)--}}
{{--                                        <option value="{{$task->id}}">--}}
{{--                                            {{$task->name}}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>
                            <div>
                                <label for="check">Статус</label>
                                <input type="hidden" name="status" value="0" />
                                <input type="checkbox" id="status" value="1" name="status" checked="checked">
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
