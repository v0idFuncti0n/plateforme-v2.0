<html>
    <head>
        <meta charset="utf-8">
        <title>Regna Bootstrap Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="{{asset('img/favicon.png')}}" rel="icon">
        <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
        <link href="{{asset( 'css/style.css' )}}" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
              rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
        <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{asset('css/style1.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
        <!-- level-->
        <link rel="stylesheet" href="{{asset('css/form.css')}}">

        <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
        <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

        <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

        <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/themes/bars-movie.css')}}">
        <link rel="stylesheet" href=" https://cdn.materialdesignicons.com/5.1.45/css/materialdesignicons.min.css">

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

<?php $test = \App\Test::find(\App\QCM::find($options['options'][0]->question_id)->test_id) ?>
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
                <li><a href="{{ route('profauth.test') }}" style="text-decoration: none;color: #fff">Accueil</a></li>
                <li><a href="{{ route("create-test.index",$prof->professeur_id)}}" style=" text-decoration: none;color: #fff">Créer test</a></li>
                <li ><a href="{{ route('manager-test',$prof) }}" style=" text-decoration: none;color: #fff">Gérer test</a></li>
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
                    <li>
                        <a href="/create-bin/{{$test->test_id}}" style="text-decoration: none"><span class="fa fa-question mr-3"></span> Création question binaire </a>
                    </li>
                    <li>
                        <a href="/create-text-libre/{{$test->test_id}}" style="text-decoration: none"><span class="fa fa-file-text-o mr-3"></span> Création question text </a>
                    </li>

                    </li>
                </ul>

            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5" style="width: 100rem; margin-top: 3.125rem">
            <h2 class="mb-4"  >Table des options</h2>

            <div class="table-responsive"  style="margin-top: 70px;width: 1000px;">
            <table class="table table-bordered" style=" border-top: 2px solid #DCDCDC;"id="myTable">
                <thead>
                <tr>
                    <th class="exclude">#</th>
                    <th>option text</th>
                    <th>point</th>
                    <th>id question</th>
                    <th class="exclude">Action</th>
                </tr>
                <tbody>
                @foreach($options['options'] as $key=>$option)
                    <tr>
                        <td class="exclude">{{++$key}}</td>
                        <td>{{$option->option_text}}</td>
                        <td>{{$option->point}}</td>
                        <td>{{$option->question_id}}</td>

                        <td class="exclude">
                            <a data-option_id="{{$option->option_id}}"
                               data-option_text="{{$option->option_text}}"
                               data-point="{{$option->point}}"
                               data-question_id="{{$option->question_id}}"
                               data-toggle="modal" href=""
                               data-target="#exampleModal-edit" class="edit" title="modifier"><i class="material-icons">&#xE254;</i></a>
                            <a data-option_id="{{$option->option_id}}"
                               data-toggle="modal" href=""
                               data-target="#exampleModal-delete" class="delete" title="supprimer"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

                </thead>

            </table>
                <div class="section-header" style="margin-left: 913px">
                    <a class="btn btn-success" title="restaurer"
                       data-target="#exampleModal-restore" data-toggle="modal">Restaurer</a>
                </div>
        </div>
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

                <form action="{{route('option.update','option_id')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label for="" style="color:#c21db7;">nom</label>

                        <input type="text" style="color:black;" id="option_text" name="option_text" class="form-control"
                               placeholder="option">
                    </div>
                    <input type="hidden" style="color:black;" name="option_id" id="option_id">
                    <br>
                    <div class="form-group">

                        <label for="" style="color:#c21db7;">point</label>


                        <input type="number" style="color:black;" id="point" name="point" class="form-control"
                               placeholder="option">
                    </div>
                    <br>

                    <div class="form-group">

                        <label for="" style="color:#c21db7;">id binaire</label>

                        <input type="text" id="question_id" style="color:black;" name="question_id"
                               class="form-control" placeholder="binaire id">
                    </div>
                    <br>


                    <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>

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

                <form action="{{route('option.destroy','option_id')}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="option_id" id="option_id">
                    <p class="text-center" style="font-weight:900 ;font-size: 14px;" width="50px"> vous ete sûre que vous voulez supprimer cette question</p>


            <div class="modal-footer">
                <form action="{{action("OptionController@forceDelete")}}" method="POST">
                    @csrf
                    <input required type="hidden" name="force_option_id" id="force_option_id">
                    <button type="submit" class="btn btn-danger">fsupprimer définitivement</button>
                </form>
                <button type="submit" class="btn btn-danger">supprimer</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">fermer</button>

            </div>
                </form>

            </div>
        </div>
    </div>
</div>




</div>

</main>
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
                    $options = \App\Option::onlyTrashed()->whereNotNull('question_id')->get();
                @endphp
                <form id="form" action="{{route("option.restore")}}" method="POST">
                    @csrf
                    @foreach($options as $option)
                        <label style="font-size: 15px" class="switcher">
                            {{$option->option_text}}
                            <input type="checkbox" name="options[{{$option->option_id}}]" value="{{$option->option_id}}"/>
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
</body>
</html>


<script>
    $("#restore").click(function() {
        $("#form").attr("action", "{{route("option.restore")}}");
        $("form").submit();
    });
    $("#force-delete").click(function() {
        $("#form").attr("action", "{{route("option.forceDelete")}}");
        $("form").submit();
    });

</script>

<script>


    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var option_text = button.data('option_text')
        var point = button.data('point')
        var question_id = button.data('question_id')
        var option_id =  button.data('option_id')


        var modal = $(this)

        modal.find('.modal-title').text('modifier');
        modal.find('.modal-body #option_text').val(option_text);
        modal.find('.modal-body #point').val(point);
        modal.find('.modal-body #question_id').val(question_id);
        modal.find('.modal-body #option_id').val(option_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var option_id = button.data('option_id')
        var force_option_id = option_id;

        var modal = $(this)

        modal.find('.modal-title').text('supprimer');

        modal.find('.modal-body #option_id').val(option_id);
        modal.find('.modal-footer #force_option_id').val(force_option_id);
    });

</script>


