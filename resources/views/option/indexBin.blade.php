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

    <!-- Fontfaces CSS-->
    <link href="{{asset('header V2/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('header V2/vendor/mdi-font/css/material-design-iconic-font.css')}}" rel="stylesheet"
          media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('header V2/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

    <!-- Vendor CSS-->

    <!-- Main CSS-->
    <link href="{{asset('header V2/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('/css/form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/themes/bars-movie.css')}}">
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">
    <link href="{{asset('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>
    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset( 'css/style.css' )}}" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">

    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- level-->
    <link rel="stylesheet" href="{{asset('css/form.css')}}">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}"
          rel="stylesheet">

    <link rel="stylesheet"
          href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="{{asset('header V2/images/icon/logo.png')}}" alt="CoolAdmin"/>
                    </a>
                </div>

                <div class="header__tool">
                    <li><a href="{{ route('profauth.test') }}" style="text-decoration: none;color: #fff">Accueil</a>
                    </li>
                    <li><a href="{{ route("create-test.index",$prof->professeur_id)}}"
                           style=" text-decoration: none;color: #fff">Créer test</a></li>
                    <li><a href="{{ route('manager-test',$prof) }}" style=" text-decoration: none;color: #fff">Gérer
                            test</a></li>
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="{{asset('header V2/images/icon/avatar-01.jpg')}}" alt="John Doe"/>
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ $prof->nom ." ". $prof->prenom }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{asset('header V2/images/icon/avatar-01.jpg')}}"
                                                 alt="{{ $prof->nom ." ". $prof->prenom }}"/>

                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ $prof->nom ." ". $prof->prenom }}</a>
                                        </h5>
                                        <span class="email">{{ $prof->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{route('profauth.logout')}}">
                                        <i class="zmdi zmdi-power"></i>Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->
<?php $test = \App\Test::find(\App\binaire::find($options['options'][0]->binaire_id)->test_id) ?>
    <!-- PAGE CONTENT-->
    <div class="container d-flex align-items-stretch" style="margin-left: 0rem;">
        <!-- BREADCRUMB-->
        <nav id="sidebar" class="img" style="background-image: url(/images/stu.jpg);">
            <div class="p-4">
                <h1 style="margin-bottom: 60px;"><a class="logo">Services</a></h1>
                <ul class="list-unstyled components mb-5">
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
        <div id="content" class="p-4 p-md-5 pt-5" style="width: 100rem; margin-top: 3.125rem">
            <div class="table-responsive">
                <table class="table table-bordered" style=" border-top: 2px solid #DCDCDC;" id="myTable">
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
                            <td>{{$option->binaire_id}}</td>

                            <td class="exclude">
                                <a data-option_id="{{$option->option_id}}"
                                   data-option_text="{{$option->option_text}}"
                                   data-point="{{$option->point}}"
                                   data-binaire_id="{{$option->binaire_id}}"
                                   data-toggle="modal"
                                   data-target="#exampleModal-edit" class="edit" title="modifier"><i
                                        class="material-icons">&#xE254;</i></a>
                                <a data-option_id="{{$option->option_id}}"
                                   data-toggle="modal"
                                   data-target="#exampleModal-delete" class="delete" title="supprimer"><i
                                        class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    </thead>

                </table>
                <a class="btn btn-success" title="restaurer"
                   data-target="#exampleModal-restore" data-toggle="modal">Restaurer</a>
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

                        <input type="text" style="color:black;" id="option_text" name="option_text"
                               class="form-control"
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

                        <input type="text" id="binaire_id" style="color:black;" name="binaire_id"
                               class="form-control" placeholder="binaire id">
                    </div>
                    <br>


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

                <form action="{{route('option.destroy','option_id')}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="option_id" id="option_id">
                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer cette question</p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">fermer</button>

                <button type="submit" class="btn btn-danger">supprimer</button>
                </form>
                <form action="{{action("OptionController@forceDelete")}}" method="POST">
                    @csrf
                    <input required type="hidden" name="force_option_id" id="force_option_id">
                    <button type="submit" class="btn btn-danger">supprimer définitivement</button>
                </form>
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
                    $options = \App\Option::onlyTrashed()->whereNotNull('binaire_id')->get();
                @endphp
                <form id="form" action="{{route("option.restore")}}" method="POST">
                    @csrf
                    @foreach($options as $option)
                        <label class="switcher">
                            {{$option->option_text}}
                            <input type="checkbox" name="options[{{$option->option_id}}]"
                                   value="{{$option->option_id}}"/>
                            <div class="switcher__indicator"></div>
                        </label>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" id="restore" class="btn btn-success">restaurer</button>
                <button type="button" id="force-delete" class="btn btn-danger">supprimer définitivement</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $("#restore").click(function () {
        $("#form").attr("action", "{{route("option.restore")}}");
        $("form").submit();
    });
    $("#force-delete").click(function () {
        $("#form").attr("action", "{{route("option.forceDelete")}}");
        $("form").submit();
    });

</script>

<script>


    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var option_text = button.data('option_text')
        var point = button.data('point')
        var binaire_id = button.data('binaire_id')
        var option_id = button.data('option_id')


        var modal = $(this)

        modal.find('.modal-title').text('modifier');
        modal.find('.modal-body #option_text').val(option_text);
        modal.find('.modal-body #point').val(point);
        modal.find('.modal-body #binaire_id').val(binaire_id);
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
</body>

</html>
<!-- end document-->
