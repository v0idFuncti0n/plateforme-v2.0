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
    $bins = \App\binaire::onlyTrashed()->get();
@endphp
<form action="{{route("bin.restore")}}" method="POST">
    @csrf
    @foreach($bins as $bin)
        <label for="questions[{{$bin->question_id}}]">{{$bin->question_text}}</label>
        <input type="checkbox" name="questions[{{$bin->question_id}}]" value="{{$bin->question_id}}"/>
    @endforeach
    <button type="button" class="restore">Restore</button>
    <button type="button" class="force-delete">Force Delete</button>
</form>
</body>
</html>
<script src="/managetest/lib/jquery/jquery.min.js"></script>
<script>
    $(".restore").click(function() {
        $(this).closest("form").attr("action", "{{route("bin.restore")}}");
        $("form").submit();
    });
    $(".force-delete").click(function() {
        $(this).closest("form").attr("action", "{{route("bin.forceDeleteMass")}}");
        $("form").submit();
    });

</script>
