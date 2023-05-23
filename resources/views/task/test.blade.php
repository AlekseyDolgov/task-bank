@extends('layouts.site')
@section('content')



    <script>
        var phpVariable = "<?php echo $test; ?>";
        const mfe = new MathfieldElement();
        mfe.value = phpVariable;
        document.body.appendChild(mfe);

    </script>

@endsection


