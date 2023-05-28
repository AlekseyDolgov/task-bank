@extends('layouts.site')

@section('content')

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <td>№</td>
        <td>Название</td>
        <td>Описание</td>
        <td>Действие</td>
        </thead>
        <tbody>
        @foreach  ($tasks_1 as $row_1)
            <tr>
                <th style="width: 50px" scope="row">1</th>
                <td><p class="card-text">{{ $row_1->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_1->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_1->id}}">Просмотр</a>
                </td>
            </tr>
        @endforeach
        @foreach ($tasks_2 as $row_2)
            <tr>
                <th style="width: 50px" scope="row">2</th>
                <td><p class="card-text">{{ $row_2->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_2->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_2->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_3 as $row_3)
            <tr>
                <th style="width: 50px" scope="row">3</th>
                <td><p class="card-text">{{ $row_3->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_3->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_3->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach ($tasks_4 as $row_4)
            <tr>
                <th style="width: 50px" scope="row">4</th>
                <td><p class="card-text">{{ $row_4->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_4->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_4->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_5 as $row_5)
            <tr>
                <th style="width: 50px" scope="row">5</th>
                <td><p class="card-text">{{ $row_5->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_5->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_5->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_6 as $row_6)
            <tr>
                <th style="width: 50px" scope="row">6</th>
                <td><p class="card-text">{{ $row_6->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_6->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_6->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_7 as $row_7)
            <tr>
                <th style="width: 50px" scope="row">7</th>
                <td><p class="card-text">{{ $row_7->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_7->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_7->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_8 as $row_8)
            <tr>
                <th style="width: 50px" scope="row">8</th>
                <td><p class="card-text">{{ $row_8->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_8->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_8->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_9 as $row_9)
            <tr>
                <th style="width: 50px" scope="row">9</th>
                <td><p class="card-text">{{ $row_9->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_9->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_9->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_10 as $row_10)
            <tr>
                <th style="width: 50px" scope="row">10</th>
                <td><p class="card-text">{{ $row_10->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_10->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_10->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_11 as $row_11)
            <tr>
                <th style="width: 50px" scope="row">11</th>
                <td><p class="card-text">{{ $row_11->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_11->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_11->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_12 as $row_12)
            <tr>
                <th style="width: 50px" scope="row">12</th>
                <td><p class="card-text">{{ $row_12->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_12->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_12->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_13 as $row_13)
            <tr>
                <th style="width: 50px" scope="row">13</th>
                <td><p class="card-text">{{ $row_13->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_13->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_13->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_14 as $row_14)
            <tr>
                <th style="width: 50px" scope="row">14</th>
                <td><p class="card-text">{{ $row_14->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_14->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_14->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_15 as $row_15)
            <tr>
                <th style="width: 50px" scope="row">15</th>
                <td><p class="card-text">{{ $row_15->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_15->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_15->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_16 as $row_16)
            <tr>
                <th style="width: 50px" scope="row">16</th>
                <td><p class="card-text">{{ $row_16->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_16->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_16->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        @foreach  ($tasks_17 as $row_17)
            <tr>
                <th style="width: 50px" scope="row">17</th>
                <td><p class="card-text">{{ $row_17->name }}</p></td>
                <td><p style="width: 300px" class="card-text">{{$row_17->description}}</p></td>
                <td style="width: 150px">
                    <a class="btn btn-outline-info" href="/tasks/show/{{$row_17->id}}">Просмотр</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
