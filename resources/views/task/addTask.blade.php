@extends('layouts.site')

@section('content')

    <form action="/test" method="post">
        @csrf
        <script>
            const mfe = new MathfieldElement();
            mfe.value = document.body.appendChild(mfe);

            // Функция для изменения значения input перед отправкой формы
            function updateInputValue() {
                document.getElementById("expression-input").value = mfe.value;
            }
        </script>
        <input type="text" name="test_input" id="expression-input">
        <button type="submit" onclick="updateInputValue()">отправить</button>
    </form>

@endsection
