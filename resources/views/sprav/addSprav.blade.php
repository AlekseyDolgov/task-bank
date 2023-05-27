@extends('layouts.site')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header">Добавить справочный материал</div>

                    <div class="card-body">
                        <form method="POST" action="/sprav" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group mb-3">
                                <label for="title">Название:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="body">Описание:</label>
                                <textarea name="description" id="test_input" class="form-control"
                                          rows="8" required>{{ old('description') }}</textarea>
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


                                <button type="submit" onclick="updateInputValue()">Добавить</button>
                            </div>

                            <!-- фото-->
                            <div class="form-group bmd-form-group is-focused file-input">
                                <label for="photo">Выберите изображение:</label>
                                <input type="file" name="img" id="img" class="form-control-file">
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
