<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Dashboard 3</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Fontfaces CSS-->
    <link href="/managetest/css/font-face.css" rel="stylesheet" media="all">
    <link href="/managetest/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <!-- Main CSS-->
    <link href="/managetest/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset("/managetest/css/stylemodal.css")}}">
    <link rel="stylesheet" href="/managetest/css/stylechoice.css">
    <link rel="stylesheet" href="/managetest/css/selectStyle.css">

    <link rel="stylesheet" href="/managetest/css/style.css">

    <style>
        $
        green: #2ecc71
        ;
        $
        red: #e74c3c
        ;
        $
        blue: #3498db
        ;
        $
        yellow: #f1c40f
        ;
        $
        purple: #8e44ad
        ;
        $
        turquoise: #1abc9c
        ;
        h1 {
            color: $ yellow;
            font-size: 4rem;
            text-transform: uppercase;
            display: block;
            width: 100%;
            text-align: center;
        @media screen and (max-width: 600px) {
            font-size:
        3rem
        ;
        }
        }
        p {
            color: $ yellow;
            font-size: 1.2rem;
        / / text-transform: uppercase;
            width: 100%;
            padding: 20px;
            text-align: center;
        }
        /
        /
        Basic Button Style
        .btn {
            box-sizing: border-box;
            appearance: none;
            background-color: transparent;
            border: 2px solid $ red;
            border-radius: 0.6em;
            color: $ red;
            cursor: pointer;
            display: flex;
            align-self: center;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1;
            margin: 20px;
            padding: 1.2em 2.8em;
            text-decoration: none;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        &
        :hover,
        &
        :focus {
            color: #fff;
            outline: 0;
        }
        }
        /
        /
        BUTTON
        1
        .first {
            transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
        &
        :hover {
            box-shadow: 0 0 40px 40px $ red inset;
        }
        }
        /
        /
        BUTTON
        2
        .second {
            border-radius: 3em;
            border-color: $ turquoise;
            color: #fff;
        background: {
            image: linear-gradient(to right,
            transparentize($ turquoise, 0.4),
            transparentize($ turquoise, 0.4) 5%,
            $ turquoise 5%,
            $ turquoise 10%,
            transparentize($ turquoise, 0.4) 10%,
            transparentize($ turquoise, 0.4) 15%,
            $ turquoise 15%,
            $ turquoise 20%,
            transparentize($ turquoise, 0.4) 20%,
            transparentize($ turquoise, 0.4) 25%,
            $ turquoise 25%,
            $ turquoise 30%,
            transparentize($ turquoise, 0.4) 30%,
            transparentize($ turquoise, 0.4) 35%,
            $ turquoise 35%,
            $ turquoise 40%,
            transparentize($ turquoise, 0.4) 40%,
            transparentize($ turquoise, 0.4) 45%,
            $ turquoise 45%,
            $ turquoise 50%,
            transparentize($ turquoise, 0.4) 50%,
            transparentize($ turquoise, 0.4) 55%,
            $ turquoise 55%,
            $ turquoise 60%,
            transparentize($ turquoise, 0.4) 60%,
            transparentize($ turquoise, 0.4) 65%,
            $ turquoise 65%,
            $ turquoise 70%,
            transparentize($ turquoise, 0.4) 70%,
            transparentize($ turquoise, 0.4) 75%,
            $ turquoise 75%,
            $ turquoise 80%,
            transparentize($ turquoise, 0.4) 80%,
            transparentize($ turquoise, 0.4) 85%,
            $ turquoise 85%,
            $ turquoise 90%,
            transparentize($ turquoise, 0.4) 90%,
            transparentize($ turquoise, 0.4) 95%,
            $ turquoise 95%,
            $ turquoise 100%);
            position: 0 0;
            size: 100%;
        }
        transition: background
        300
        ms ease-in-out
        ;
        &
        :hover {
            background-position: 100px;
        }
        }
    </style>

    <style>
        .dataTables_wrapper .dataTables_filter {
            float: left;
            text-align: left;
            margin-left: 450px;
            margin-top:120px;
        }
        .dataTables_wrapper .dataTables_length {
            float: left;
            margin-top:170px;
            position: relative;
            top:10px;
            z-index: 999;
        }
    </style>
    <style>
        .d-none{display:none!important}
        .d-lg-block{display:block!important}
        .d-block{display:block!important}
        @media (min-width:992px){.d-lg-none{display:none!important}}

    </style>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
            padding: 2px 16px;
            color: white;
        }
    </style>
</head>
<body>





<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                    </a>
                </div>

                <div class="header__tool">
                    <div class="header-button">
                        <div class="noti-wrap account-item--style2 ">
                            <div class="content noti__item ">
                                <a class="js-acc-btn" href="{{ route('profauth.test') }}" >Accueil</a>
                            </div>
                            <div class="content noti__item ">
                                <a class="js-acc-btn" href="{{ route("create-test.index",$prof->professeur_id)}}">Créer test</a>
                            </div>
                            <div class="content noti__item ">
                                <a class="js-acc-btn redactive" href="{{ route('manager-test',$prof) }}">Gérer les tests</a>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="/managetest/images/icon/avatar-01.jpg" alt="John Doe" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ $prof->nom ." ". $prof->prenom }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="/managetest/images/icon/avatar-01.jpg" alt="John Doe" />

                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ $prof->nom ." ". $prof->prenom }}</a>
                                        </h5>
                                        <span class="email">{{ $prof->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{route('profauth.logout')}}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->


    <div class="page-content--bgf7">

        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">Vous êtes ici:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="{{ route('profauth.test') }}">Accueil</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Gérer les tests</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->


        <section class="welcome p-t-10">
            <div class="container">
                <div  class="section-header" >
                    <a href=""><h3 class="section-title">Gérer test</h3></a>
                <div class="row">
                    <div  style="margin-left: 20px;margin-right: 20px;margin-top: -90px" >
                    <div class="table-wrapper" >
                        <table id="myTable" class="table table-bordered"  style="color: black;"  >


                            <thead>
                            <tr>
                                <th>Identifiant</th>
                                <th>Test</th>
                                <th>Description</th>
                                <th>Liste d'étudiant</th>
                                <th>La date de création du test</th>
                                <th>La date de prévue du test</th>
                                <th>Activer session</th>
                                <th style="width: 180px;">Actions</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            use App\Matiere;
                            use App\Matiere_prof;
                            //$tests = DB::table('test')->where('professeur_id', '=', $prof->professeur_id)->get();
                            $tests = App\Test::withoutTrashed()->get();
                            $key = 0;
                            ?>
                            @foreach($tests as $test)

                                @php
                                    $sess = App\Session::query()->where('test_id','=',$test->test_id)->first();
                                        if ( $sess->active == 0){
                                            $value = 0;
                                        }else{
                                            $value = 1;
                                        }
                                @endphp
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$test->nom}}</td>
                                    <td>{{$test->discription}}</td>
                                    <td><a href="/reponses/{{$test->test_id}}" style="font-weight: bold;color: #43c4da">Vers la
                                            liste</a></td>
                                    <td>{{$test->created_at}}</td>
                                    <td>{{$test->date}}</td>
                                    <td>
                                        <div style="text-align:center;">

                                            <form action="{{action('TestController@setSession')}}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                                @if($value == 0)
                                                    <button class="btn btn-success" name="active" value="0">Activer</button>
                                                @endif
                                                @if($value == 1)
                                                    <button class="btn btn-danger" name="active" value="1">disactiver</button>
                                                @endif
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <a data-test_id="{{$test->test_id}}" onclick="getTestId({{$test->test_id}});getSelectionnerTestId()"
                                           class="view modal-button"
                                           title="ajouter question" data-toggle="tooltip"><i
                                                class="material-icons">note_add</i></a>
                                        <a data-test_id="{{$test->test_id}}"
                                           data-nom="{{$test->nom}}"
                                           data-note="{{$test->note}}"
                                           data-duree="{{$test->duree}}"
                                           data-salle="{{$test->salle}}"
                                           data-date="{{$test->date}}"
                                           data-discription="{{$test->discription}}"
                                           data-professeur_id="{{$test->professeur_id}}"
                                           data-matiere_id="{{$test->matiere_id}}"
                                           data-d1="{{$test->d1}}"
                                           data-d2="{{$test->d2}}"
                                           data-d3="{{$test->d3}}"
                                           data-d4="{{$test->d4}}"
                                           data-d5="{{$test->d5}}"
                                           class="edit" title="modifier" href="" data-toggle="modal"
                                           data-target="#exampleModal-edit"><i
                                                class="material-icons">&#xE254;</i></a>
                                        <a data-test_id="{{$test->test_id}}" class="delete" title="supprimer" href=""
                                           data-target="#exampleModal-delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
                                        <a href="{{route('test.pdf',$test->test_id)}}" class="" title="exporter session"
                                           data-toggle="tooltip"><i
                                                class="material-icons" style="color:#5cb85c">save_alt</i></a>
                                        <a href="{{route('note.pdf',$test->test_id)}}" class="" title="exporter les notes"
                                           data-toggle="tooltip"><i
                                                class="material-icons" style="color:black">save</i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <?php
        if(isset($test)){
        ?>
        <section>
            <div class="modal1">
                <div class="modal1-container">
                    <div class="modal1-left">
                        <div class="cd-panel cd-panel--from-right js-cd-panel-main" >
                            <header class="cd-panel__header" style="margin-top: 131px;">
                                <h1 id="hh3">Valider les questions</h1>
                                <a href="#0" class="cd-panel__close js-cd-close">Close</a>
                            </header>

                            <div class="cd-panel__container" style="height: 72%;margin-top: 131px;">
                                <div class="cd-panel__content">
                                  @php

                                     $question['question']=DB::table('question_temp')->get();
                                     @endphp
                                     <form action="{{ route('question.validationOf') }}" method="POST">
                                        @csrf
                                     @foreach($question['question'] as $item)

                                           <label class="switcher" style="margin-left:10px;">
                                               <input name="questions[]" type="checkbox" value="{{$item->question_id}}"/>
                                                  <div class="switcher__indicator"></div>
                                                 <span class="butttext">{{$item->question_text}}</span>

                                                   </label><br>

<br>
  @endforeach
                                                <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                                <input type="submit" class="btn btn-info" value="valider">

                                            </form>
                                </div> <!-- cd-panel__content -->
                            </div> <!-- cd-panel__container -->
                        </div> <!-- cd-panel -->

                        <div class="input-block">
                            <input type="radio" id="al" class="sty" name="select" value="1">
                            <label for="al" class="stl">
                                <h2>Aléatoire</h2>
                                <p>les question seront ajouter d'une maniére aléatoire</p>
                            </label>
                            <div class="contental">
                                <form action="{{action('question@RandomStoring')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="test_id" id=random-test_id>
                                    <div class="form__group field " style="margin-left: 150px">
                                        <input type="number" class="form__field" placeholder="question" name="nombre"
                                               id='nombre' style="font-weight: bold" min="1"/>
                                        <label for="name" class="form__label">Nombre question: </label>
                                    </div>
                                    <div class="form__group field" style="margin-left: 150px">
                                        <label for="name" class="form__label" >Difficulté</label>

                                        <select class="form__field"name="difficulty"
                                                id='difficulty' style="margin-top: 5px;font-weight: bold"
                                        >
                                            <option style="font-weight: bold" value="1">Trés facile</option>
                                            <option style="font-weight: bold"  value="2">Facile</option>
                                            <option style="font-weight: bold" value="3">Moyenne</option>
                                            <option style="font-weight: bold" value="4">Difficile</option>
                                            <option style="font-weight: bold" value="5">Trés difficile</option>
                                        </select>

                                    </div>
                                    <br>
                                    <label style="font-size: 18px">Type de question:</label>
                                    <br>
                                    <br>
                                    <div class="switch" style="margin-left: 175px">
                                        <input name="type" id="one" type="radio" checked value="1"/>
                                        <label for="one" class="switch__label">QCM</label>
                                        <input name="type" id="two" type="radio" value="2"/>
                                        <label for="two" class="switch__label">Binaire</label>
                                        <input name="type" id="three" type="radio" value="3"/>
                                        <label for="three" class="switch__label">Text</label>
                                        <div class="switch__indicator"/>
                                    </div>

                                    <button id="random" class="btn btn-info">Ajouter les questions</button>
                                    <a href="#0"  class="btn btn-info js-cd-panel-trigger" class="" style="width: 20rem" data-panel="main">valider</a>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="input-block">
                        <input type="radio" id="se" name="select" class="sty" value="2">
                        <label for="se" class="stl">
                            <h2>sélectioner</h2>
                            <p>vous pouvez sélectioner vos ancienne questions </p>
                        </label>
                        <div class="contentse">
                            <?php $matiere_idd = $test->matiere_id; ?>
                            <?php $professeur_idd = $test->professeur_id; ?>
                            <?php $testss = DB::table('test')->where('matiere_id', $matiere_idd)->where('professeur_id', $professeur_idd)->get();?>
                            @php
                                $matiere_idd = $test->matiere_id;
                                $professeur_idd = $test->professeur_id;
                                $testss = DB::table('test')->where('matiere_id', $matiere_idd)->where('professeur_id', $professeur_idd)->get();
                                $count = 0;
                                foreach ($testss as $t){
                                $countqcm = \App\QCM::query()->where('test_id','=',$t->test_id)->count();
                                $countbin = \App\binaire::query()->where('test_id','=',$t->test_id)->count();
                                $counttext = \App\Text_libre::query()->where('test_id','=',$t->test_id)->count();
                                $count = $countqcm + $countbin + $counttext;
                        }
                            @endphp
                            <br>
                            <a id="selectionner" href="/select-question/{{$test->test_id}}">
                                <button class="btn btn-info">Selectionner</button>
                            </a>
                            <br>
                            <br>


                        </div>
                    </div>

                    <div class="input-block">
                        <input type="radio" id="cr" class="sty" name="select" value="3">
                        <label for="cr" class="stl">
                            <h2>Créer</h2>
                            <p>créer des nouvelles questions</p>
                        </label>
                        <div class="contentcr">
                            <label style="font-size: 18px">Type de question:</label>
                            <br>
                            <br>
                            <div class="switch3" style="margin-left: 175px">
                                <input onclick="teleport1();" name="switch3" id="one3" type="radio" checked/>
                                <label for="one3" class="switch__label3">QCM</label>
                                <input onclick="teleport1();" name="switch3" id="two3" type="radio"/>
                                <label for="two3" class="switch__label3">Binaire</label>
                                <input onclick="teleport1();" name="switch3" id="three3" type="radio"/>
                                <label for="three3" class="switch__label3">Text</label>
                                <div class="switch__indicator3"/>
                            </div>

                            <a id="teleport-a" href="/create-qcm1/{{$test->test_id}}">
                                <button id="teleport" class="btn btn-info">ajouter QCM</button>
                            </a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('question.validation') }}" method="POST">
                    @csrf
                    <input type="hidden" name="test_id" id="validation">
                </form>
                <form action="{{ route('question.discard') }}" method="POST">
                    @csrf
                    <input type="hidden" name="test_id" id="discardAll">
                </form>
            </div>

            <button class="icon-button close-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path
                        d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
                </svg>
            </button>
        </section>
        <div class="modal fade-left" id="exampleModal-edit" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-lg modal-right modal-warning" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">modifier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{action('TestController@update1')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="test_id" id="test_id">
                            <div class="form-group">
                                <label for="nom" >Nom de test</label>

                                <input class="form-control" style="color:black;" type="text" pattern=".[a-zA-Z0-9]{1,255}"
                                       title="aucun caractère spécial n'est autorisé 1 - 255 max" name="nom" id="nom"
                                       required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="discription" >Discription </label>

                                <textarea rows="5" cols="33" style="color:black;" name="discription" id="discription"
                                          class="form-control"
                                          required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="note" > Barème </label>

                                <input type="number" style="color:black;" name="note" id="note" class="form-control" min="1"
                                       required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="duree">
                                    Duree(minute) </label>
                                <input type="number" style="color:black;" name="duree" id="duree" class="form-control"
                                       min="1" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="salle" >
                                    Salle</label>
                                <input pattern="[a-zA-Z0-9]{1,255}" style="color:black;"
                                       title="aucun caractère spécial n'est autorisé 1 - 255 max"
                                       type="text" name="salle" id="salle" class="form-control" required>

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="date"  >
                                    Date</label>
                                <input type="date" name="date" id="date" style="color:black;"
                                       class="form-control" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="matiere_id"  >
                                    Matiere </label>

                                <?php
                                $id = [];
                                $i = 0;
                                $mtrs = DB::table('matiere_prof')->where('professeur_id', $prof->professeur_id)->get();?>
                                @foreach($mtrs as $mtr)
                                    <?php $id[$i] = $mtr->matiere_id;
                                    $i++;
                                    ?>
                                @endforeach
                                <?php   $matiere = DB::table('matiere')->whereIn('matiere_id', $id)->get();?>

                                <select class="form-control" size="1" style='color:black;' id="matiere_id"
                                        name="matiere_id">
                                    @foreach ($matiere as $m)
                                        <?php $matiere_id = intval($m->matiere_id);?>
                                        <option value="{{$matiere_id}}">{{$m->nom_matiere}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="d1"  >
                                    Trés facile </label>

                                <input type="number" style="color:black;" name="d1" id="d1" class="form-control" min="0"
                                       required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="d2"  >
                                    facile </label>
                                <input type="number" style="color:black;" name="d2" id="d2" class="form-control" min="0"
                                       required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="d3"  >
                                    Moyenne </label>
                                <input type="number" style="color:black;" name="d3" id="d3" class="form-control" min="0"
                                       required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="d4"  >
                                    Difficile </label>

                                <input type="number" style="color:black;" name="d4" id="d4" class="form-control" min="0"
                                       required>

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="d5"  >
                                    Trés difficile  </label>

                                <input type="number" name="d5" id="d5" style="color:black;" class="form-control" min="0"
                                       required>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                                <button type="submit" class="btn btn-warning">modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal delete -->
        <div class="modal fade-left" id="exampleModal-delete" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-lg modal-right modal-danger" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">supprimer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{route('test.destroy')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input required type="hidden" name="test_id" id="test_id">
                            <p class="text-center textsupp" > vous etes sûre que vous voulez supprimer ce
                                test</p>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">supprimer</button>
                        </form>
                        <form action="{{action("TestController@forceDelete",['test_id'=>$test->test_id])}}" method="POST">
                            @csrf
                            <input required type="hidden" name="force_test_id" id="force_test_id">
                            <button type="submit"  class="btn btn-danger supp">supprimer définitivement</button>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>

<?php }?>
<!-- Modal Restore -->
    <div class="modal fade-left" id="exampleModal-restore" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Restaurer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @php
                        $tests = \App\Test::onlyTrashed()->get();
                    @endphp
                    <form id="form" action="{{route("test.restore")}}" method="POST">
                        @csrf
                        @foreach($tests as $test)
                            <label style="font-size: 15px" class="switcher">
                                {{$test->nom}}
                                <input type="checkbox" name="tests[{{$test->test_id}}]" value="{{$test->test_id}}"/>
                                <div class="switcher__indicator"></div>
                            </label>
                        @endforeach
                        <div class="modal-footer">
                            <button type="button" id="restore" class="btn btn-success">restaurer</button>
                            <button type="button" id="force-delete" class="btn btn-danger">supprimer définitivement</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script>
    var test_id;
    function getSelectionnerTestId(){
        let anchor = document.getElementById('selectionner');
        anchor.href = "/select-question/"+ test_id;
    }
    function getTestId(id) {
        let random = document.getElementById('random-test_id');
        random.value = id;
        test_id = id;

        let validation = document.getElementById("validation");
        validation.value = test_id;
        let discardAll = document.getElementById("discardAll");
        discardAll.value = test_id;
        firstRun(test_id);
    }
    $('#exampleModal-edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var test_id = button.data('test_id')
        var nom = button.data('nom')
        var note = button.data('note')
        var duree = button.data('duree')
        var salle = button.data('salle')
        var date = button.data('date')
        var discription = button.data('discription')
        var matiere_id = button.data('matiere_id')
        var d1 = button.data('d1')
        var d2 = button.data('d2')
        var d3 = button.data('d3')
        var d4 = button.data('d4')
        var d5 = button.data('d5')
        var modal = $(this)
        modal.find('.modal-title').text('Modifier test');
        modal.find('.modal-body #test_id').val(test_id);
        modal.find('.modal-body #nom').val(nom);
        modal.find('.modal-body #note').val(note);
        modal.find('.modal-body #duree').val(duree);
        modal.find('.modal-body #date').val(date);
        modal.find('.modal-body #salle').val(salle);
        modal.find('.modal-body #discription').val(discription);
        modal.find('.modal-body #d1').val(d1);
        modal.find('.modal-body #d2').val(d2);
        modal.find('.modal-body #d3').val(d3);
        modal.find('.modal-body #d4').val(d4);
        modal.find('.modal-body #d5').val(d5);
        modal.find('.modal-body #matiere_id').val(matiere_id);
    });
    $('#exampleModal-delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        let test_id = button.data('test_id')
        var force_test_id = test_id;
        var modal = $(this);
        modal.find('.modal-title').text('Supprimer test');
        modal.find('.modal-body #test_id').val(test_id);
        modal.find('.modal-footer #force_test_id').val(force_test_id);
        //alert(document.getElementById('force_test_id').value);
    });
</script>

<script>
    const st = {};
    st.flap = document.querySelector('#flap');
    st.toggle = document.querySelector('.toggle');
    st.choice1 = document.querySelector('#choice1');
    st.choice2 = document.querySelector('#choice2');
    st.flap.addEventListener('transitionend', () => {
        if (st.choice1.checked) {
            st.toggle.style.transform = 'rotateY(-15deg)';
            setTimeout(() => st.toggle.style.transform = '', 400);
        } else {
            st.toggle.style.transform = 'rotateY(15deg)';
            setTimeout(() => st.toggle.style.transform = '', 400);
        }
    })
    st.clickHandler = (e) => {
        if (e.target.tagName === 'LABEL') {
            setTimeout(() => {
                st.flap.children[0].textContent = e.target.textContent;
            }, 250);
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        st.flap.children[0].textContent = st.choice2.nextElementSibling.textContent;
    });
    document.addEventListener('click', (e) => st.clickHandler(e));
</script>
<script>
    $(document).ready(function () {
        $("input[name$='select']").click(function () {
            var radio_value = $(this).val();
            if (radio_value == '1') {
                $(".contental").animate({height: "toggle"}, 500);
                $(".contentse").hide();
                $(".contentcr").hide();
            } else if (radio_value == '2') {
                $(".contentse").animate({height: "toggle"}, 500);
                $(".contental").hide();
                $(".contentcr").hide();
            } else if (radio_value == '3') {
                $(".contentcr").animate({height: "toggle"}, 500);
                $(".contental").hide();
                $(".contentse").hide();
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        // Animate select box length
        var searchInput = $(".search-box input");
        var inputGroup = $(".search-box .input-group");
        var boxWidth = inputGroup.width();
        searchInput.focus(function () {
            inputGroup.animate({
                width: "300"
            });
        }).blur(function () {
            inputGroup.animate({
                width: boxWidth
            });
        });
    });
</script>
<!-- Jquery JS-->
<script src="/managetest/vendor/jquery-3.2.1.min.js"></script>
<script src="/managetest/vendor/animsition/animsition.min.js"></script>
<!-- Main JS-->
<script src="/managetest/js/main.js"></script>
<script src="/managetest/js/mainjs.js"></script>
<script src="{{asset("/managetest/js/scriptmodal.js")}}"></script>

<script>
    /*$('.modal').on('openModal',function (event) {
        var btn = $(event.relatedTarget);
        var test_id = btn.data('test_id');
        console.log(test_id);
    })*/
    /* function teleport(elem) {
         test_id = elem;
     }*/
    $(document).ready(function () {
        teleport1();
    })
    function teleport1() {
        var checked1 = document.getElementById('one3').checked;
        var checked2 = document.getElementById('two3').checked;
        var checked3 = document.getElementById('three3').checked;
        var bt = document.getElementById('teleport');
        var abt = document.getElementById('teleport-a');
        if (checked1) {
            bt.firstChild.textContent = 'ajouter QCM';
            abt.href = "/create-qcm1/" + test_id;
        } else if (checked2) {
            bt.firstChild.textContent = 'ajouter Binaire';
            abt.href = "/create-bin/" + test_id;
        } else if (checked3) {
            bt.firstChild.textContent = 'ajouter text';
            abt.href = "/create-text-libre/" + test_id;
        }
    }
    function firstRun(test_id) {
        var checked1 = document.getElementById('one3').checked;
        var checked2 = document.getElementById('two3').checked;
        var checked3 = document.getElementById('three3').checked;
        var bt = document.getElementById('teleport');
        var abt = document.getElementById('teleport-a');
        if (checked1) {
            bt.firstChild.textContent = 'ajouter QCM';
            abt.href = "/create-qcm1/" + test_id;
        } else if (checked2) {
            bt.firstChild.textContent = 'ajouter Binaire';
            abt.href = "/create-bin/" + test_id;
        } else if (checked3) {
            bt.firstChild.textContent = 'ajouter text';
            abt.href = "/create-text-libre/" + test_id;
        }
    }
</script>

<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable( {
            "oLanguage": {
                "sLengthMenu": "Afficher _MENU_ élement",
                "sZeroRecords": "Nothing found - sorry",
                "sSearch":        "Rechercher:",
                "sZeroRecords": "Rien trouvé - désolé\n",
                "oPaginate": {
                    "sNext":    "Suivant",
                    "sPrevious": "Précedent"}
            },
            "dom": 'lf<"toolbar">tp'
        } );
        $("div.toolbar").html('<div style="float:right;"><div title="Créer test"   >\n' +
            '                <a href="{{route("create-test.index",$prof->professeur_id)}}">\n' +
            '                    <button  style="margin-left:925px;position: absolute;margin-top: 12px;" class="btn btn-info"><i class="fa fa-plus"></i></button>\n' +
            '                </a>\n' +
            '\n' +
            '            </div>\n' +
            '\n' +
            '                        <a class="btn btn-success" title="restaurer"\n' +
            '                           data-target="#exampleModal-restore" style="margin-left: 980px;z-index: 9999999" data-toggle="modal">Restaurer</a>\n' +
            '</div>');
    } );
</script>

<script>
    $("#restore").click(function () {
        $(this).closest("form").attr("action", "{{route("test.restore")}}");
        $("form").submit();
    });
    $("#force-delete").click(function () {
        $(this).closest("form").attr("action", "{{route("test.forceDelete")}}");
        $("form").submit();
    });
</script>

</body>
</html>
