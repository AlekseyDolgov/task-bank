@extends('layouts.site')
@section('content')

    <script>
        var data = @json($test);

        document.body.appendChild(data);

    </script>

@endsection


