@extends('layouts.site')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header link-secondary">Добавить формулу к ответу</div>

                    <div class="card-body">
                        <form method="POST" action="/formuls/indexOtvetF" enctype="multipart/form-data">
                            {{ csrf_field() }}

                                <label for="otvet_id">Выберите решение:</label>
                                <select id="task-dropdown" class="form-control" name="otvet_id">
                                    <option value="">-- Решения --</option>
                                    @foreach ($otvets as $otvet)
                                        <option value="{{$otvet->id}}">
                                            {{$otvet->name}}
                                        </option>
                                    @endforeach
                                </select>
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
