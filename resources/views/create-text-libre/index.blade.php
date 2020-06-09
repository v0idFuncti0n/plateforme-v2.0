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
    <link href="{{asset('header V2/vendor/mdi-font/css/material-design-iconic-font.css')}}" rel="stylesheet" media="all">

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
    <link rel="stylesheet" href="{{asset('css/selectStyle.css')}}">
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('/css/form.css')}}">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}"
          rel="stylesheet">

    <link rel="stylesheet"
          href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('/css/themes/bars-movie.css')}}">
</head>


<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{asset('header V2/images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                    </div>

                    <div class="header__tool">
                        <li><a href="{{ route('profauth.test') }}" style="text-decoration: none;color: #fff">Accueil</a></li>
                        <li><a href="{{ route("create-test.index",$prof->professeur_id)}}" style=" text-decoration: none;color: #fff">Créer test</a></li>
                        <li ><a href="{{ route('manager-test',$prof) }}" style=" text-decoration: none;color: #fff">Gérer test</a></li>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{asset('header V2/images/icon/avatar-01.jpg')}}" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ $prof->nom ." ". $prof->prenom }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                            <img src="{{asset('header V2/images/icon/avatar-01.jpg')}}" alt="{{ $prof->nom ." ". $prof->prenom }}" />

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

        <!-- PAGE CONTENT-->
        <div class="container d-flex align-items-stretch" style="margin-left: 0rem;">
            <!-- BREADCRUMB-->
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
                            <a href="/create-qcm1/{{$test['test_id'] }}"><span class="fa fa-list mr-3"></span> création question qcm</a>
                        </li>
                        <li>
                            <a href="/create-bin/{{$test['test_id']}}"><span class="fa fa-question mr-3"></span> Création question binaire </a>
                        </li>
                        <li>
                            <a href="/create-text-libre/{{$test['test_id']}}"><span class="fa fa-file-text-o mr-3"></span> Création question text </a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div id="content" class="p-4 p-md-5 pt-5">
                <h2 class="mb-4">Création des questions text libre </h2>
                <section id="services">
                    <div class="container wow fadeIn">

                        <div class=" card-6" style="margin-left: -3.75rem;">
                            <div class="">
                                <form action="{{action('Text_libreController@store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="test_id" value="{{$test['test_id']}}">

                                    <div class="form-row">
                                        <div class="name">Question</div>
                                        <div class="value">
                                            <div class="input-group">
                                             <textarea class="textarea--style-6" name="question_text"
                                                       style="width:75%; margin-right: 30px"
                                                       placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name" style="height: 1.25rem;line-height: 0rem;">Difficulté</div>
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
                                            <input style="height: 32px;width: 355px;" required type="number" class="input--style-6"  name="note" min="1">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <input type="submit" name="submit" id="submit" style="width: 17rem; margin-left:7rem; "
                                           class="btn btn-info" value="Enregistrer et Ajouter"/>
                                    <input  class="btn btn-success" style="width: 17rem" value="Enregistrer et quitter">

                                </form>
                            </div>
                        </div>
                        <h2 class="mb-1" style=" margin-top: 10rem">Table des questions</h2>

                        <div class="table-wrapper" style="width: 100rem; margin-top: 3.125rem">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                <tr>
                                    <th >question_id</th>
                                    <th >question text</th>
                                    <th >note</th>
                                    <th >difficulty</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $questions = \App\Text_libre::query()->where('test_id','=',$test['test_id'])->get();
                                @endphp
                                @foreach($questions as $q)
                                    <tr>
                                        <td>{{$q->question_id}}</td>
                                        <td>{{$q->question_text}}</td>
                                        <td>{{$q->note}}</td>
                                        <td>{{$q->difficulty}}</td>
                                        <td class="exclude">
                                            <a data-question_id="{{$q->question_id}}"
                                               data-question_text="{{$q->question_text}}"
                                               data-note="{{$q->note}}"
                                               data-difficulty="{{$q->difficulty}}"
                                               data-test_id="{{$q->test_id}}" data-toggle="modal"
                                               data-target="#exampleModal-edit" class="edit" title="modifier"><i
                                                    class="material-icons">&#xE254;</i></a>
                                            <a data-question_id="{{$q->question_id}}"
                                               data-toggle="modal"
                                               data-target="#exampleModal-delete" class="delete" title="supprimer">
                                                <button><i
                                                        class="material-icons">&#xE872;</i></button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                            <div class="section-header" style="margin-left: 875px">
                                <a class="btn btn-success" title="restaurer"
                                   data-target="#exampleModal-restore" data-toggle="modal">Restaurer</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
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
                            <form action="{{route('create-text-libre.update','question_id')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="test_id" id="test_id1" value="">
                                <input type="hidden" name="question_id" id="question_id1" value="">
                                <div class="form-group">

                                    <label for="question_text" style="color:#c21db7;">
                                        Question : </label>

                                    <textarea class="form-control" rows="3" style="color: black"
                                              name="question_text" id="question_text"></textarea>
                                </div>
                                <br>
                                <div class="form-group">

                                    <label for="note" style="color:#c21db7;">
                                        Note : </label>

                                    <input type="number" name="note" id="note" min="1" class="form-control"
                                           style="color: black">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="question_text" style="color:#c21db7;">
                                        Difficulty : </label>
                                    <select required name="difficulty" size="1" class="form-control"
                                            style="color: black">
                                        <option value="1">trés facile</option>
                                        <option value="2">facile</option>
                                        <option value="3">moyenne</option>
                                        <option value="4">difficile</option>
                                        <option value="5">très difficile</option>
                                    </select>
                                </div>
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
                            <form action="{{route('create-text-libre.destroy','question_id')}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input required type="hidden" name="question_id" id="question_id">
                                <p class="text-center" style="font-size:15px; font-weight: bold" width="50px"> vous ete sûre que
                                    vous voulez supprimer ce
                                    matiere</p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">fermer
                                    </button>
                                    <button type="submit" class="btn btn-danger">supprimer</button>
                            </form>
                            <form action="{{action("Text_libreController@forceDelete")}}" method="POST">
                                @csrf
                                <input required type="hidden" name="force_question_id" id="force_question_id">
                                <button type="submit" class="btn btn-danger">supprimer définitivement</button>
                            </form>
                        </div>
                    </div>
                </div>
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
                            $text_libres = \App\Text_libre::onlyTrashed()->where('test_id',$test['test_id'])->get();
                        @endphp
                        <form id="form" action="{{route("text-libre.restore")}}" method="POST">
                            @csrf
                            @foreach($text_libres as $text_libre)
                                <label style="font-size: 15px" class="switcher">{{$text_libre->question_text}}
                                    <input type="checkbox" name="questions[{{$text_libre->question_id}}]"
                                           value="{{$text_libre->question_id}}"/>
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
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <script>
        $('#exampleModal-edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var test_id = button.data('test_id')
            var question_id = button.data('question_id')
            var question_text = button.data('question_text')
            var note = button.data('note')
            var difficulty = button.data('difficulty')
            document.getElementById('test_id1').value = test_id;
            document.getElementById('question_id1').value = question_id;
            var modal = $(this)

            modal.find('.modal-title').text('Modifier question');
            modal.find('.modal-body #question_id').val(question_id);
            modal.find('.modal-body #question_text').val(question_text);
            modal.find('.modal-body #note').val(note);
            modal.find('.modal-body #difficulty').val(difficulty);
        });
        $('#exampleModal-delete').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget)

            var question_id = button.data('question_id')
            var force_question_id = question_id;

            var modal = $(this)

            modal.find('.modal-title').text('Supprimer question');

            modal.find('.modal-body #question_id').val(question_id);
            modal.find('.modal-footer #force_question_id').val(force_question_id);
        });
    </script>
    <script src="{{asset('/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Jquery JS-->

    <!-- Bootstrap JS-->
    <!-- Vendor JS       -->
    <script src="{{asset('header V2/vendor/animsition/animsition.min.js')}}"></script>
    <!-- Main JS-->
    <script src="{{asset('header V2/js/main.js')}}"></script>

    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js')}}"></script>


    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script>
        $(document).ready(function () {
            var i = 1;
            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="checkbox" style="height: 17rem;width: 1.6rem;margin-right: 0.375rem"  name="point[]"  value="' + i + '" > <textarea  placeholder="" class="textarea--style-6 "name="option_text[]" style=" margin-bottom: 1.25rem;"></textarea><input type="hidden" name="hidden[]" value="' + i + '" ><i type="button" name="remove" id="' + i + '" style="top:-7.8rem;left:0.625rem" class="glyphicon glyphicon-trash btn_remove"></i></td></tr>');
            });

            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            $('#submit').click(function () {
                $.ajax({
                    url: "name.php",
                    method: "POST",
                    data: $('#add_name').serialize(),
                    success: function (data) {
                        alert(data);
                        $('#add_name')[0].reset();
                    }
                });
            });

        });
    </script>
    <script>
        $("#restore").click(function () {
            $("#form").attr("action", "{{route("text-libre.restore")}}");
            $("form").submit();
        });
        $("#force-delete").click(function () {
            $("#form").attr("action", "{{route("text-libre.forceDelete")}}");
            $("form").submit();
        });

    </script>
    <script type="text/javascript">
        $(function () {
            $('#example').barrating({
                theme: 'fontawesome-stars'
            });
        });
    </script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{asset( '/js/jquery.barrating.min.js' )}}"></script>
    <script src="{{asset( '/js/examples.js' )}}"></script>
</body>

</html>
<!-- end document-->
