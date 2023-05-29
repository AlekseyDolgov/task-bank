@extends('layouts.site')
@section('content')
    <style>
        .header-h1 h1 {
            position: relative;
            padding-bottom: .5rem;
            font-size: 1.5rem;
            text-transform: uppercase;
            text-align: center;
            color: #00838f;
        }
        .header-h1 h1::before {
            content: "";
            position: absolute;
            border-bottom: 2px solid #00838f;
            bottom: .25rem;
            left: 50%;
            width: 30%;
            transform: translateX(-50%);
        }
        .header-h1 h1::after {
            content: "";
            position: absolute;
            border-bottom: 2px solid #00838f;
            bottom: 0;
            left: 50%;
            width: 15%;
            transform: translateX(-50%);
        }
        p {
            margin: 0;
            text-indent: 3ch;
        }

        p.pilcrow {
            text-indent: 0;
            display: inline;
        }
        p.pilcrow + p.pilcrow::before {
            content: " ¶ ";
        }
    </style>
    <div class="container my-4">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
            <div class="header-h1">
                <h1 class="h2">{{$task->id}}. {{$task->name}}</h1>
            </div>
{{--            Номер задания: {{$task->id}} <br>--}}
{{--            Название: {{$task->name}} <br>--}}

            <div class="card-body">
                <p class="card-text">Условие:</p>
                <p class="card-text">{{$task->description}}</p>
                <br>
                <p class="card-text">Формулы/функции:</p>
                <p class="card-text">{{$task->formula}}</p>
                <br>
                <math-field></math-field>
{{--                <p><script>--}}
{{--                        const mfe = new MathfieldElement();--}}
{{--                        mfe.value = '{{$task->formula}}';--}}
{{--                        document.body.appendChild(mfe);--}}
{{--                    </script></p>--}}
                <p class="card-text">Картинка к задаче:</p>
                <img src="{{asset('storage/'.$task->img)}}" class="" style="max-width: 100%; height: auto; margin: 20px 0;">
            </div>
            <div>
                <a class="btn btn-outline-success" href="/otvet/showOtvet?id={{$task->id}}">Решение</a>
                <a class="btn btn-outline-danger" href="/task/show/{{$task->id}}/del">Удалить</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                <tr>
                    <th>№</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th style="width: 50px" scope="row">{{$task->sprav_id}}</th>
                    <td style="width: 20px"><a class="btn btn-outline-info" href="/sprav/show/{{$task->sprav_id}}">Просмотр</a></td>
                </tr>
                </tbody>
            </table>
{{--            Условие: {{$task->description}} <br><br>--}}
{{--            <img src="{{asset('storage/'.$task->img)}}" class="" style="max-width: 100%; height: auto; margin: 20px 0;">--}}
            </div>
        </div>
    </div>

@endsection
