@extends('layouts.site')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card mb-3">
                    <div class="card-header">Добавить формулы</div>

                    <div class="card-body">
                        <form method="POST" action="/formuls" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group mb-3">
                                <label for="formula">Формула:</label>
                                <script>
                                    const mfe = new MathfieldElement();
                                    mfe.value = document.body.appendChild(mfe);
                                    // Функция для изменения значения input перед отправкой формы
                                    function updateInputValue() {
                                        document.getElementById("expression-input").value = mfe.value;
                                    }
                                </script>
                                <input type="text" class="form-control" id="expression-input" name="name"
                                       value="{{ old('name') }}" required>

                                <button type="submit" onclick="updateInputValue()">Добавить</button>
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
