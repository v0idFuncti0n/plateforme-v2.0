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
    $qcms = \App\QCM::onlyTrashed()->get();
@endphp
<form action="{{route("qcm.restore")}}" method="POST">
    @csrf
    @foreach($qcms as $qcm)
        <label for="questions[{{$qcm->question_id}}]">{{$qcm->question_text}}</label>
        <input type="checkbox" name="questions[{{$qcm->question_id}}]" value="{{$qcm->question_id}}"/>
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
