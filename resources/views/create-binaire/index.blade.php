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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/managetest/css/font-face.css" rel="stylesheet" media="all">
    <link href="/managetest/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- your css-->
    <link rel="stylesheet" href="/managetest/css/form.css">
    <link rel="stylesheet" href="/managetest/css/selectStyle.css">
    <link rel="stylesheet" href="/managetest/css/bars-movie.css">
    <link rel="stylesheet" href="/managetest/css/radiocss.css">
    <link href="/managetest/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('/managetest/css/sidebar.css')}}">
	<link rel="stylesheet" href="/managetest/css/style.css"> <!-- Resource style -->
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
        .d-none{display:none!important}
        .d-lg-block{display:block!important}
        .d-block{display:block!important}
        @media (min-width:992px){.d-lg-none{display:none!important}}

    </style>
</head>

<div>
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="/managetest/images/logo.png" alt="CoolAdmin" />
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
                                    <a class="js-acc-btn " href="{{ route('manager-test',$prof) }}">Gérer les tests</a>
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

        <!-- HEADER MOBILE-->
        <div class="sub-header-mobile-2 d-block d-lg-none" >
            <div class="header__tool">

                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe (nom d'etudiant)</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
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
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->
    <div class="container d-flex align-items-stretch" style="margin-left: 0rem;">
        <nav id="sidebar" class="img" style="background-image: url(/images/stu.jpg);">
            <div class="p-4">
                <h1 style="margin-bottom: 60px;"><a class="logo">Services</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{ route('profauth.test') }}" style="text-decoration: none"><span class="fa fa-home mr-3"></span> Acceuil</a>
                    </li>
                    <li>
                        <a href="{{ route('create-test.index',$prof) }}" style="text-decoration: none"><span class="fa fa-plus-square-o mr-3"></span> Création un test</a>
                    </li>
                    <li>
                        <a href="{{ route('manager-test',$prof->professeur_id) }}" style="text-decoration: none"><span class="fa fa-table mr-3"></span>Gérer les tests</a>
                    </li>
                    <li>
                        <a href="/create-qcm1/{{$test->test_id }}" style="text-decoration: none"><span class="fa fa-list mr-3"></span> création question qcm</a>
                    </li>
                    <li class="active">
                        <a href="/create-bin/{{$test->test_id}}" style="text-decoration: none"><span class="fa fa-question mr-3"></span> Création question binaire </a>
                    </li>
                    <li>
                        <a href="/create-text-libre/{{$test->test_id}}" style="text-decoration: none"><span class="fa fa-file-text-o mr-3"></span> Création question text </a>
                    </li>

                    </li>
                </ul>

            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2" style=" margin-top: -5rem">
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
                                        <li class="list-inline-item active">
                                            <a href="{{ route('manager-test',$prof) }}">Gérer les tests</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">{{$test->nom}}</li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Création des questions Binaire</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <h2 class="mb-4">Création des questions binaire</h2>
            <section id="services">




                <div class="container ">


                    <div class=" card-6" style="margin-left: -3.75rem;">
                        <div class="">
                            <form action="{{action('BinaireController@store1')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="name">Question</div>
                                    <div class="value">
                                        <div class="input-group" style="display: flex">
                                            <textarea class="textarea--style-6" name="question"
                                                      style=" margin-right: 30px"
                                                      placeholder=""></textarea>
                                            <div>
                                                <div style="margin-bottom: 30px;">
                                                    <input type="radio" id="control_01" name="choice" value="vrai"
                                                           checked>
                                                    <label for="control_01" id="cnt1" class="labelradio">
                                                        <h2 style=" ">Vrai</h2>
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="control_05" name="choice" value="faux">
                                                    <label for="control_05" id="cnt5" class="labelradio">
                                                        <h2 style=" ">Faux</h2>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="name">Difficulté</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <select id="example-movie" name="difficulty" autocomplete="off">
                                                <option value="1">Trés facile</option>
                                                <option value="2">Facile</option>
                                                <option value="3" selected="selected">Moyenne</option>
                                                <option value="4">Difficile</option>
                                                <option value="5">Trés difficile</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class=" form-row ">

                                    <div class="name">Note</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                            <input type="number" style="height: 32px;width: 355px"
                                                   class="input--style-6" id="note" style="color:black;" name="note">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <input type="submit" name="submit" id="submit" style="width: 20rem ; margin-left:7rem; "
                                       class="btn btn-warning" value="Enregistrer et Ajouter"/>
                                <input type="hidden" name="test_id" value="{{$test->test_id}}">

                                       <a href="#0"  class="btn btn-info js-cd-panel-trigger" class="" style="width: 20rem" data-panel="main">valider</a>



                            </form>
                        </div>
                    </div>
                    <h2 class="mb-1" style=" margin-top: 10rem">Table des questions</h2>




                    <div class="cd-panel cd-panel--from-right js-cd-panel-main">
                        <header class="cd-panel__header">
                            <h1 id="hh4">Valider la création des questions</h1>
                            <a href="#0" class="cd-panel__close js-cd-close">Close</a>
                        </header>

                        <div class="cd-panel__container">
                            <div class="cd-panel__content">
                              @php

                                 $question['question']=DB::table('question_temp')->where('test_id',$test->test_id)->where('type','=','binaire')->get();
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
                                <form action="{{ route('question.validation') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                    <input type="submit" class="btn btn-info" value="valider tout">
                                </form>
                                <form action="{{ route('question.discard') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                    <input type="submit" class="btn btn-info" value="rejeter tout">
                                </form>
                            </div> <!-- cd-panel__content -->
                        </div> <!-- cd-panel__container -->
                    </div> <!-- cd-panel -->






                    @php
                        //  use \App
                            $binaires = App\binaire::OrderBy('binaire_id','asc')->where('test_id',$test->test_id)->get(); @endphp
                    <div class="table-wrapper" style="width: 100rem;">
                        <table class="table table-bordered" id="myTable" style="color :black;">
                            <thead>
                            <tr>
                                <th class="exclude">Identification</th>
                                <th>question text</th>
                                <th>note</th>
                                <th>difficultes</th>
                                <th>id test</th>
                                <th class="exclude">Action</th>
                            </tr>
                            <tbody>
                            @foreach($binaires as $key=>$binaire)
                                <tr>
                                    <td class="exclude">{{++$key}}</td>
                                    <td>{{$binaire->question_text}}</td>
                                    <td>{{$binaire->note}}</td>
                                    <td>{{$binaire->difficulty}}</td>
                                    <td>{{$binaire->test_id}}</td>
                                    <td class="exclude">
                                        <a data-binaire_id="{{$binaire->binaire_id}}"
                                           data-question_text="{{$binaire->question_text}}"
                                           data-note="{{$binaire->note}}"
                                           data-difficulty="{{$binaire->difficulty}}"
                                           data-test_id="{{$binaire->test_id}}" data-toggle="modal"
                                           data-target="#exampleModal-edit" class="edit" title="modifier" href=""><i
                                                class="material-icons">&#xE254;</i></a>
                                        <a data-binaire_id="{{$binaire->binaire_id}}"
                                           data-toggle="modal"
                                           data-target="#exampleModal-delete" class="delete" title="supprimer"
                                           href=""><i class="material-icons">&#xE872;</i></a>

                                        <a href="option12/binaire/{{$binaire->binaire_id}}" class="option"
                                           title="Les options">
                                            <i class="material-icons">list</i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                            </thead>

                        </table>
                        <div class="section-header" style="margin-left: 846px">
                            <a class="btn btn-success" title="restaurer"
                               data-target="#exampleModal-restore" data-toggle="modal">Réstaurer</a>
                        </div>
                    </div>
                </div>

                <!-- Modal edit -->
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

                                <form action="{{route('create-binaire.update','binaire_id')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">

                                        <label for=""  >question text</label>

                                        <input type="text" style="color:black;" id="question_text" name="question_text"
                                               class="form-control"
                                               placeholder="question">
                                    </div>
                                    <input type="hidden" style="color:black;" name="binaire_id" id="binaire_id">
                                    <br>
                                    <div class="form-group">

                                        <label for=""  >difficultes </label>


                                        <select name="difficulty" id="difficulty" style="height: 34px;"
                                                class="form-control">
                                            <option value="1">Trés facile</option>
                                            <option value="2">Facile</option>
                                            <option value="3">Moyenne</option>
                                            <option value="4">Difficile</option>
                                            <option value="5">Trés difficile</option>
                                        </select>
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for=""  >note</label>

                                        <input type="text" id="note" style="color:black;" name="note"
                                               class="form-control" placeholder="note">
                                    </div>
                                    <br>

                                    <div class="form-group">


                                        <label for=""  >id test</label>

                                        <input type="number" style="color:black;" id="test_id" name="test_id"
                                               class="form-control"
                                               placeholder="test id">
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer
                                        </button>

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

                                <form action="{{route('create-binaire.destroy','binaire_id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="hidden" name="binaire_id" id="binaire_id">
                                    <p class="text-center textsupp " width="50px" style="font-weight:bold ;font-size: 14px;"> vous
                                        ete sûre que
                                        vous voulez supprimer cette question</p>

                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-success">supprimer</button>
                                </form>
                                <form action="{{action("BinaireController@forceDelete")}}" method="POST">
                                    @csrf
                                    <input required type="hidden" name="force_question_id"
                                           id="force_question_id">
                                    <button type="submit" class="btn btn-danger supp">supprimer définitivement</button>
                                </form>


                            </div>


                        </div>

                    </div>
                </div>
            </section>
        </div>


    </div>
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
                        $bins = \App\binaire::onlyTrashed()->where('test_id',$test->test_id)->get();
                    @endphp
                    <form id="form" action="{{route("bin.restore")}}" method="POST">
                        @csrf
                        @foreach($bins as $bin)
                            <label style="font-size: 15px" class="switcher">{{$bin->question_text}}
                                <input type="checkbox" name="questions[{{$bin->binaire_id}}]"
                                       value="{{$bin->binaire_id}}"/>
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
</main>

<!--==========================
  Footer
============================-->
<script src="/managetest/js/mainjs.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
<script>
    $("#restore").click(function () {
        $("#form").attr("action", "{{route("bin.restore")}}");
        $("form").submit();
    });
    $("#force-delete").click(function () {
        $("#form").attr("action", "{{route("bin.forceDelete")}}");
        $("form").submit();
    });

</script>

<script>


    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var question_text = button.data('question_text')
        var note = button.data('note')
        var difficulty = button.data('difficulty')
        var test_id = button.data('test_id')
        var binaire_id = button.data('binaire_id')


        var modal = $(this)

        modal.find('.modal-title').text('modifier');
        modal.find('.modal-body #question_text').val(question_text);
        modal.find('.modal-body #note').val(note);
        modal.find('.modal-body #difficulty').val(difficulty);
        modal.find('.modal-body #test_id').val(test_id);
        modal.find('.modal-body #binaire_id').val(binaire_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var binaire_id = button.data('binaire_id')
        var force_test_id = binaire_id;


        var modal = $(this)

        modal.find('.modal-title').text('supprimer');

        modal.find('.modal-body #binaire_id').val(binaire_id);
        modal.find('.modal-footer #force_question_id').val(force_test_id);
    });

</script>
<!-- Jquery JS-->
<script src="/managetest/vendor/jquery-3.2.1.min.js"></script>
<script src="/managetest/vendor/animsition/animsition.min.js"></script>
<!-- Main JS-->
<script src="/managetest/js/main.js"></script>
<!-- barre_difficulty-->
<script src="/create-qcmd/js/jquery.barrating.min.js"></script>
<script src="/create-qcmd/js/examples.js"></script>
<script type="text/javascript">
    $(function () {
        $('#example').barrating({
            theme: 'fontawesome-stars'
        });
    });
</script>

</body>
</html>
