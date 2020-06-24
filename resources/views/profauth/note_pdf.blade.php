
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>
</head>
<body>
<img src="{{ base_path() }}/public/logo.PNG" alt="logo.png"/>
<br>

<h1 style="text-align: center;border-style: dashed">Etudiant notes : {{$test->nom}}</h1><br>


<table cellpadding="10" align="center" border="2">
    <thead>
    <tr>
        <!--<th>ID</th>-->
        <th>Nom</th>
        <th>Prénom</th>
        <th>Username</th>
        <th>Password</th>
        <th>addresse ip</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sessions as $s)
        @php
            $note = \App\Resultat::query()->where('session_id',$s->session_id)->first();
           $etudiant = \App\Etudiant::query()->where('etudiant_id',$s->etudiant_id)->first();
        @endphp
        @php
        if($note != null){
            if($note->note_total > ($test->note / 2 )){
                echo "<tr style=\"background-color : #1ee898\">
                <td>$etudiant->nom</td>
                <td>$etudiant->prenom</td>
                <td>$s->username</td>
                <td>$s->password</td>
                 <td>$s->ip_address</td>
                <td>$note->note_total</td>
                </tr>";
            }else{
                echo "<tr style=\"background-color : #ff3547\">
                <td>$etudiant->nom</td>
                <td>$etudiant->prenom</td>
                <td>$s->username</td>
                <td>$s->password</td>
                <td>$s->ip_address</td>
                <td>$note->note_total</td>
                </tr>";
            }
        }else{
            echo "<tr style=\"background-color : #ff3547\">
                <td>$etudiant->nom</td>
                <td>$etudiant->prenom</td>
                <td>$s->username</td>
                <td>$s->password</td>
                <td>$s->ip_address</td>
                <td>0</td>
                </tr>";
        }

        @endphp

    @endforeach
    </tbody>
</table>
</body>
</html>


