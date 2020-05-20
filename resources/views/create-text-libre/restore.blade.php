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
    $text_libres = \App\Text_libre::onlyTrashed()->get();
@endphp
<form action="{{route("text-libre.restore")}}" method="POST">
    @csrf
    @foreach($text_libres as $text_libre)
        <label for="questions[{{$text_libre->question_id}}]">{{$text_libre->question_text}}</label>
        <input type="checkbox" name="questions[{{$text_libre->question_id}}]" value="{{$text_libre->question_id}}"/>
    @endforeach
    <button type="button" class="restore">Restore</button>
    <button type="button" class="force-delete">Force Delete</button>
</form>
</body>
</html>
<script src="/managetest/lib/jquery/jquery.min.js"></script>
<script>
    $(".restore").click(function() {
        $(this).closest("form").attr("action", "{{route("qcm.restore")}}");
        $("form").submit();
    });
    $(".force-delete").click(function() {
        $(this).closest("form").attr("action", "{{route("qcm.forceDelete")}}");
        $("form").submit();
    });

</script>
