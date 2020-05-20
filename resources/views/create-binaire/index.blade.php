<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Regna Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('create-binaire/img/favicon.png')}}" rel="icon">
    <link href="{{asset('create-binaire/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset( 'create-binaire/css/style.css' )}}" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <link href="{{asset('create-binaire/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('create-binaire/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('create-binaire/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->

    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- level-->
    <link rel="stylesheet" href="{{asset('create-binaire/css/form.css')}}">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}"
          rel="stylesheet">

    <link rel="stylesheet"
          href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('create-binaire/css/themes/bars-movie.css')}}">
    <link rel="stylesheet" href=" https://cdn.materialdesignicons.com/5.1.45/css/materialdesignicons.min.css">

    <!-- =======================================================
      Theme Name: Regna
      Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
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
    <link rel="stylesheet" href="{{asset('css/selectStyle.css')}}">
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="{{asset('/managetest/img/logoapp.png')}}" alt="" title=""/></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="{{ route('manager-test',$prof->professeur_id) }}" style="text-decoration: none;color: #fff">Accueil</a></li>
                <li><a href="{{ route("create-test.index",$prof->professeur_id)}}" style=" text-decoration: none;color: #fff">Créer test</a></li>
                <li class="menu-active"><a href="{{ route('manager-test',$prof) }}" style=" text-decoration: none;color: #fff">Gérer test</a></li>
                <li style="margin-right: -90px;margin-left: 100px" class="profile-dropdown image" > <img src="/managetest/icon/avatar-01.jpg" alt="John Doe" />
                    <a  style="text-decoration: none;color: #fff;position: relative;top: -16px">
                        {{ $prof->nom ." ". $prof->prenom }}</a><ul style="left: -170px" >
                        <li>   <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="/managetest/icon/avatar-01.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{ $prof->nom ." ". $prof->prenom }}</a>
                                    </h5>
                                    <span class="email">{{ $prof->email}}</span>
                                </div>
                            </div></li>

                        <li><a href="{{route('profauth.logout')}}"><i style="font-size: 15px" class="mdi mdi-logout"></i>Déconnexion</a></li>
                    </ul>
                </li>

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
      Services Section
    ============================-->
    <div class="container d-flex align-items-stretch" style="margin-left: 0rem;">
        <nav id="sidebar" class="img" style="background-image: url(/images/stu.jpg);">
            <div class="p-4">
                <h1 style="margin-bottom: 60px;"><a class="logo">Services</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{ route('manager-test',$prof->professeur_id) }}"><span class="fa fa-home mr-3"></span> Acceuil</a>
                    </li>
                    <li>
                        <a href="{{ route('create-test.index',$prof) }}"><span class="fa fa-plus-square-o mr-3"></span> Création des test</a>
                    </li>
                    <li>
                        <a href="{{ route('profauth.test') }}"><span class="fa fa-table mr-3"></span> table des test</a>
                    </li>
                    <li>
                        <a href="/create-qcm1/{{$test->test_id }}"><span class="fa fa-list mr-3"></span> création question qcm</a>
                    </li>
                    <li>
                        <a href="/create-bin/{{$test->test_id}}"><span class="fa fa-question mr-3"></span> Création question binaire </a>
                    </li>
                    <li>
                        <a href="/create-text-libre/{{$test->test_id}}"><span class="fa fa-file-text-o mr-3"></span> Création question text </a>
                    </li>

                    </li>
                </ul>

            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Création des questions binaire</h2>
            <section id="services">
                <div class="container wow fadeIn">


                    <div class=" card-6" style="margin-left: -3.75rem;">
                        <div class="">
                            <form action="{{action('BinaireController@store1')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="name">Question</div>
                                    <div class="value">
                                        <div class="input-group" style="display: flex">
                                            <textarea class="textarea--style-6" name="question"
                                                      style="width:75%; margin-right: 30px"
                                                      placeholder=""></textarea>
                                            <div>
                                                <div style="margin-bottom: 30px;">
                                                    <input type="radio" id="control_01" name="choice" value="vrai"
                                                           checked>
                                                    <label for="control_01" class="labelradio">
                                                        <h2 style=" font-size: 18px;font-weight: bold">Vrai</h2>
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="control_05" name="choice" value="faux">
                                                    <label for="control_05" class="labelradio">
                                                        <h2 style=" font-size: 18px;font-weight: bold">Faux</h2>
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
                                <input type="submit" name="submit" id="submit" style="width: 17rem; margin-left:7rem; "
                                       class="btn btn-info" value="Enregistrer et Ajouter"/>
                                <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                <input type="submit" class="btn btn-success" style="width: 17rem"
                                       value="Enregistrer et quitter">


                            </form>
                        </div>
                    </div>
                    <h2 class="mb-1" style=" margin-top: 10rem">Table des questions</h2>

                    @php
                        //  use \App
                            $binaires = App\binaire::OrderBy('binaire_id','asc')->where('test_id',$test->test_id)->get(); @endphp
                    <div class="table-wrapper" style="width: 100rem;">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                            <tr>
                                <th class="exclude">#</th>
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
                        <div class="section-header" style="margin-left: 875px">
                            <a class="btn btn-success" title="restaurer"
                               data-target="#exampleModal-restore" data-toggle="modal">Restaurer</a>
                        </div>
                    </div>
                </div>

                <!-- Modal edit -->
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

                                <form action="{{route('create-binaire.update','binaire_id')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">question text</label>

                                        <input type="text" style="color:black;" id="question_text" name="question_text"
                                               class="form-control"
                                               placeholder="question">
                                    </div>
                                    <input type="hidden" style="color:black;" name="binaire_id" id="binaire_id">
                                    <br>
                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">difficultes </label>


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

                                        <label for="" style="color:#c21db7;">note</label>

                                        <input type="text" id="note" style="color:black;" name="note"
                                               class="form-control" placeholder="note">
                                    </div>
                                    <br>

                                    <div class="form-group">


                                        <label for="" style="color:#c21db7;">id test</label>

                                        <input type="number" style="color:black;" id="test_id" name="test_id"
                                               class="form-control"
                                               placeholder="test id">
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer
                                        </button>

                                        <button type="submit" class="btn btn-success">modifier</button>
                                    </div>
                                </form>
                            </div>
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

                                <form action="{{route('create-binaire.destroy','binaire_id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="hidden" name="binaire_id" id="binaire_id">
                                    <p class="text-center" width="50px" style="font-weight:900 ;font-size: 14px;"> vous
                                        ete sûre que
                                        vous voulez supprimer cette question</p>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">fermer
                                        </button>
                                        <button type="submit" class="btn btn-danger">supprimer</button>
                                </form>
                                <form action="{{action("BinaireController@forceDelete")}}" method="POST">
                                    @csrf
                                    <input required type="hidden" name="force_question_id"
                                           id="force_question_id">
                                    <button type="submit" class="btn btn-danger">supprimer définitivement</button>
                                </form>


                            </div>


                        </div>

                    </div>
                </div>
        </div>
        </section><!-- #services -->


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


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('create-binaire/lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('create-binaire/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('create-binaire/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('create-binaire/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('create-binaire/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('create-binaire/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('create-binaire/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('create-binaire/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('create-binaire/lib/superfish/superfish.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('create-binaire/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->

<script src="{{asset('create-binaire/js/main.js')}}"></script>

<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js')}}"></script>
<script src="{{asset( 'create-binaire/jquery.barrating.min.js' )}}"></script>
<script type="text/javascript">
    $(function () {
        $('#example').barrating({
            theme: 'fontawesome-stars'
        });
    });
</script>
<script>window.jQuery || document.write('<script src="create-binaire/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="{{asset( 'create-binaire/js/jquery.barrating.min.js' )}}"></script>
<script src="{{asset( 'create-binaire/js/examples.js' )}}"></script>
</body>
</html>
