@extends('layouts.site')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header link-secondary">Добавить задание материал</div>

                    <div class="card-body">
                        <form method="POST" action="/tasks/index?id={$block->id}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group mb-3">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" name="name">

                                <label for="formula">Формула:</label>
                                <script>
                                    const mfe = new MathfieldElement();
                                    mfe.value = document.body.appendChild(mfe);

                                    // Функция для изменения значения input перед отправкой формы
                                    function updateInputValue() {
                                        document.getElementById("expression-input").value = mfe.value;
                                    }
                                </script>
                                <input type="text" class="form-control" id="expression-input" name="formula"
                                       value="{{ old('name') }}" required>


                                <button type="submit" onclick="updateInputValue()">добавить</button>
                            </div>

                            <div class="form-group mb-3">
                                <label for="body">Описание:</label>
                                <textarea name="description" id="description" class="form-control"
                                          rows="8" required>{{ old('description') }}</textarea>
                            </div>
                            <label for="sprav_id">Выберите сраночник:</label>
                            <select  id="task-dropdown" class="form-control" name="sprav_id">
                                <option value="">-- Справочник --</option>
                                    @foreach ($spravs as $sprav)
                                        <option value="{{$sprav->id}}">
                                            {{$sprav->name}}
                                        </option>
                                    @endforeach
                            </select>

                            <!-- фото-->
                            <div class="form-group bmd-form-group is-focused file-input">
                                <label for="img">Выберите изображение:</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                            </div>

                            <input type="hidden" name="block_id" value="{{$_GET['id']}}">
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
