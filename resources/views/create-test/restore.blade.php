<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restore</title>
</head>
<body>
@php
    $tests = \App\Test::onlyTrashed()->get();
@endphp
<form action="{{route("test.restore")}}" method="POST">
    @csrf
    @foreach($tests as $test)
        <label for="tests[{{$test->test_id}}]">{{$test->nom}}</label>
        <input type="checkbox" name="tests[{{$test->test_id}}]" value="{{$test->test_id}}"/>
    @endforeach
    <button type="button" class="restore">Restore</button>
    <button type="button" class="force-delete">Force Delete</button>
</form>
</body>
</html>
<script src="/managetest/lib/jquery/jquery.min.js"></script>
<script>
    $(".restore").click(function() {
        $(this).closest("form").attr("action", "{{route("test.restore")}}");
        $("form").submit();
    });
    $(".force-delete").click(function() {
        $(this).closest("form").attr("action", "{{route("test.forceDelete")}}");
        $("form").submit();
    });
</script>
