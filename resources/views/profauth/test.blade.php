<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Regna Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <script src="https://kit.fontawesome.com/2622940fba.js" crossorigin="anonymous"></script>
    <!-- Favicons -->
    <link href="/managetest/img/favicon.png" rel="icon">
    <link href="/managetest/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/managetest/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/managetest/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/managetest/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/managetest/css/style.css" rel="stylesheet">
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
    <link rel='stylesheet prefetch'
          href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/managetest/css/stylemodal.css">
    <link rel="stylesheet" href="/managetest/css/stylechoice.css">

    <!-- =======================================================
      Theme Name: Regna
      Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
      ======================================================= -->

    <style>
        $green: #2ecc71;
        $red: #e74c3c;
        $blue: #3498db;
        $yellow: #f1c40f;
        $purple: #8e44ad;
        $turquoise: #1abc9c;


        h1 {
            color: $yellow;
            font-size: 4rem;
            text-transform: uppercase;
            display: block;
            width: 100%;
            text-align: center;

        @media screen and (max-width: 600px) {
            font-size: 3rem;
        }
        }

        p {
            color: $yellow;
            font-size: 1.2rem;
        // text-transform: uppercase;
            width: 100%;
            padding: 20px;
            text-align: center;
        }


        // Basic Button Style
           .btn {
               box-sizing: border-box;
               appearance: none;
               background-color: transparent;
               border: 2px solid $red;
               border-radius: 0.6em;
               color: $red;
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

        &:hover,
        &:focus {
             color: #fff;
             outline: 0;
         }
        }

        //BUTTON 1
        .first {
            transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
        &:hover {
             box-shadow: 0 0 40px 40px $red inset;
         }
        }

        //BUTTON 2
        .second {
            border-radius: 3em;
            border-color: $turquoise;
            color: #fff;
        background: {
            image: linear-gradient(to right,
            transparentize($turquoise, 0.4),
            transparentize($turquoise, 0.4) 5%,
            $turquoise 5%,
            $turquoise 10%,
            transparentize($turquoise, 0.4) 10%,
            transparentize($turquoise, 0.4) 15%,
            $turquoise 15%,
            $turquoise 20%,
            transparentize($turquoise, 0.4) 20%,
            transparentize($turquoise, 0.4) 25%,
            $turquoise 25%,
            $turquoise 30%,
            transparentize($turquoise, 0.4) 30%,
            transparentize($turquoise, 0.4) 35%,
            $turquoise 35%,
            $turquoise 40%,
            transparentize($turquoise, 0.4) 40%,
            transparentize($turquoise, 0.4) 45%,
            $turquoise 45%,
            $turquoise 50%,
            transparentize($turquoise, 0.4) 50%,
            transparentize($turquoise, 0.4) 55%,
            $turquoise 55%,
            $turquoise 60%,
            transparentize($turquoise, 0.4) 60%,
            transparentize($turquoise, 0.4) 65%,
            $turquoise 65%,
            $turquoise 70%,
            transparentize($turquoise, 0.4) 70%,
            transparentize($turquoise, 0.4) 75%,
            $turquoise 75%,
            $turquoise 80%,
            transparentize($turquoise, 0.4) 80%,
            transparentize($turquoise, 0.4) 85%,
            $turquoise 85%,
            $turquoise 90%,
            transparentize($turquoise, 0.4) 90%,
            transparentize($turquoise, 0.4) 95%,
            $turquoise 95%,
            $turquoise 100%);
            position: 0 0;
            size: 100%;
        }
        transition: background 300ms ease-in-out;

        &:hover {
             background-position: 100px;
         }
        }

    </style>
    <link rel="stylesheet" href="{{asset('css/selectStyle.css')}}">
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="/managetest/img/logo.png" alt="" title=""/></img></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="menu-has-children"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Hero Section
  ============================-->
<section id="hero">

</section><!-- #hero -->

<main id="main">

    <!--==========================
         Portfolio Section
         ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">manage test</h3>
            </div>
            <div style="text-align: center"><a href="{{route("create-test.index",$prof->professeur_id)}}">
                    <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
                </a>
                <a class="btn btn-success" title="restaurer"
                   data-target="#exampleModal-restore" data-toggle="modal">Restaurer</a>
            </div>

            <div class="table-wrapper">
                <table class="table table-bordered" id="myTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom de test<i class="fa fa-sort"></i></th>
                        <th>Reponse</th>
                        <th>Activer session</th>
                        <th style="width: 150px;">Actions</th>
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
                            <td><a href="/reponses/{{$test->test_id}}">
                                    <button type="button" class="btn btn-primary">Reponses</button>
                                </a></td>
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
                                <a data-test_id="{{$test->test_id}}" onclick="teleport({{$test->test_id}})"
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
                                   class="edit" title="modifier" data-toggle="modal"
                                   data-target="#exampleModal-edit"><i
                                        class="material-icons">&#xE254;</i></a>
                                <a data-test_id="{{$test->test_id}}" class="delete" title="supprimer"
                                   data-target="#exampleModal-delete" data-toggle="modal"><i class="material-icons">&#xE872;</i></a>
                                <a href="{{route('test.pdf',$test->test_id)}}" class="view" title="exporter session"
                                   data-toggle="tooltip"><i
                                        class="material-icons">input</i></a>
                                <a href="{{route('note.pdf',$test->test_id)}}" class="view" title="exporter les notes"
                                   data-toggle="tooltip"><i
                                        class="material-icons">input</i></a>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
    </section><!-- #portfolio -->
    <?php
    if(isset($test)){
    ?>
    <section id="service">

        <div class="modal1">
            <div class="modal-container">
                <div class="modal-left">
                    <div class="input-block">
                        <input type="radio" id="al" class="sty" name="select" value="1">
                        <label for="al" class="stl">
                            <h2>Aléatoire</h2>
                            <p>les question seront ajouter d'une maniére aléatoire</p>
                        </label>
                        <div class="contental">
                            <form action="{{action('question@RandomStoring')}}" method="POST">
                                @csrf
                                <input type="hidden" name="test_id" id="test_id" value="{{$test->test_id}}">
                                <div class="form__group field " style="margin-left: 150px">
                                    <input type="number" class="form__field" placeholder="question" name="nombre"
                                           id='nombre' min="1"/>
                                    <label for="name" class="form__label">Nombre question: </label>
                                </div>
                                <div class="form__group field" style="margin-left: 150px">
                                    <input type="number" class="form__field" placeholder="Difficulté" name="difficulty"
                                           id='difficulty' min="1" max="5"/>
                                    <label for="name" class="form__label">Difficulté</label>
                                </div>
                                <br>
                                <label style="font-size: 18px">Type de question:</label>
                                <br>
                                <br>
                                <div class="switch" style="margin-left: 175px">
                                    <input name="type" id="one" type="radio" checked/>
                                    <label for="one" class="switch__label">QCM</label>
                                    <input name="type" id="two" type="radio" value="qcm"/>
                                    <label for="two" class="switch__label" value="binaire">Binaire</label>
                                    <input name="type" id="three" type="radio"/>
                                    <label for="three" class="switch__label" value="text_libre">Text</label>
                                    <div class="switch__indicator"/>
                                </div>
                                <input id="type" type="hidden" name="type" value="">
                                <button id="random" class="btn btn-success">Ajouter les questions</button>
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
                        <a href="/select-question/{{$test->test_id}}">
                            <button class="btn btn-success">Selectionner</button>
                        </a>
                        <br>
                        <br>

                        <div class="switch2" style="margin-left: 175px">
                            <input name="switch2" id="one2" type="radio" checked/>
                            <label for="one2" class="switch__label2">QCM</label>
                            <input name="switch2" id="two2" type="radio"/>
                            <label for="two2" class="switch__label2">Binaire</label>
                            <input name="switch2" id="three2" type="radio"/>
                            <label for="three2" class="switch__label2">Text</label>
                            <div class="switch__indicator2"/>
                        </div>


                    </div>
                </div>
            </div>
            <div class="input-block">
                <input type="radio" id="cr" class="sty" name="select" value="3">
                <label for="cr" class="stl">
                    <h2>nouveau</h2>
                    <p>créer des nouveaux questions</p>
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
                        <button id="teleport" class="btn btn-success">ajouter QCM</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="modal-buttons">
            <button class="input-button">Enregistrer</button>
        </div>
        </div>

        <button class="icon-button close-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                <path
                    d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
            </svg>
        </button>
        </div>
        </div>
    </section>

    <div class="modal fade-left" id="exampleModal-edit" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">modifier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{action('TestController@update1',$test->test_id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="test_id" id="test_id">
                        <label>
                            Nom de test.
                            <input class="form-control" type="text" pattern=".[a-zA-Z0-9]{1,255}"
                                   title="aucun caractère spécial n'est autorisé 1 - 255 max" name="nom" id="nom"
                                   required>
                        </label>
                        <br>
                        <label>
                            Discription
                            <textarea rows="8" cols="33" name="discription" id="discription" class="form-control"
                                      required></textarea>
                        </label>
                        <br>
                        <label>
                            Note
                            <input type="number" name="note" id="note" class="form-control" min="1" required>
                        </label>
                        <br>
                        <label>
                            Duree(minute)
                            <input type="number" name="duree" id="duree" class="form-control" min="1" required>
                        </label>
                        <br>
                        <label>
                            Salle
                            <input pattern="[a-zA-Z0-9]{1,255}"
                                   title="aucun caractère spécial n'est autorisé 1 - 255 max"
                                   type="text" name="salle" id="salle" class="form-control" required>
                        </label>
                        <br>
                        <label>
                            Date
                            <input type="datetime-local" name="date" id="date"
                                   class="form-control" required>
                        </label>
                        <br>
                        <label>
                            Matiere
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

                            <select class="form-control" size="1" style='width: 235px;' name="matiere_id">
                                @foreach ($matiere as $m)
                                    <?php $matiere_id = intval($m->matiere_id);?>
                                    <option value="{{$matiere_id}}">{{$m->nom_matiere}}</option>
                                @endforeach
                            </select>
                        </label>
                        <br>
                        <label>
                            Difficulté 1
                            <input type="number" name="d1" id="d1" class="form-control" min="0" required>
                        </label>
                        <br>
                        <label>
                            Difficulté 2
                            <input type="number" name="d2" id="d2" class="form-control" min="0" required>
                        </label>
                        <br>
                        <label>
                            Difficulté 3
                            <input type="number" name="d3" id="d3" class="form-control" min="0" required>
                        </label>
                        <br>
                        <label>
                            Difficulté 4
                            <input type="number" name="d4" id="d4" class="form-control" min="0" required>
                        </label>
                        <br>
                        <label>
                            Difficulté 5
                            <input type="number" name="d5" id="d5" class="form-control" min="0" required>
                        </label>
                        <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                    <button type="submit" class="btn btn-success">modifier</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal delete -->
    <div class="modal fade-left" id="exampleModal-delete" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
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
                        <p class="text-center" width="50px"> vous etes sûre que vous voulez supprimer ce
                            matiere</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-danger">supprimer</button>
                    </form>
                    <form action="{{action("TestController@forceDelete",['test_id'=>$test->test_id])}}" method="POST">
                        @csrf
                        <input required type="hidden" name="force_test_id" id="force_test_id">
                        <button type="submit" class="btn btn-danger">forcer la suppression</button>
                    </form>
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
                    <form action="{{route("test.restore")}}" method="POST">
                        @csrf
                        @foreach($tests as $test)
                            <label style="font-size: 15px" class="switcher">
                                {{$test->nom}}
                                <input type="checkbox" name="tests[{{$test->test_id}}]" value="{{$test->test_id}}"/>
                                <div class="switcher__indicator"></div>
                            </label>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" id="restore" class="btn btn-success">Restore</button>
                    <button type="button" id="force-delete" class="btn btn-danger">Force Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
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

        modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
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

        var test_id = button.data('test_id')
        var force_test_id = test_id;


        var modal = $(this);

        modal.find('.modal-title').text('delete STUDENT INFORMATION');

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
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
<!-- JavaScript Libraries -->
<script src="/managetest/lib/jquery/jquery.min.js"></script>
<script src="/managetest/lib/jquery/jquery-migrate.min.js"></script>
<script src="/managetest/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/managetest/lib/easing/easing.min.js"></script>
<script src="/managetest/lib/wow/wow.min.js"></script>
<script src="/managetest/lib/waypoints/waypoints.min.js"></script>
<script src="/managetest/lib/counterup/counterup.min.js"></script>
<script src="/managetest/lib/superfish/hoverIntent.js"></script>
<script src="/managetest/lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="/managetest/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/managetest/js/main.js"></script>

<script src="/managetest/js/scriptmodal.js"></script>

</body>
</html>


<script>

    /*$('.modal').on('openModal',function (event) {
        var btn = $(event.relatedTarget);
        var test_id = btn.data('test_id');
        console.log(test_id);

    })*/
    var test_id;

    function teleport(elem) {
        test_id = elem;

    }

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


</script>

<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
    $('#myTable').DataTable({
        responsive: true
    });
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


