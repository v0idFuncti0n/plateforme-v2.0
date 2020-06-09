<!doctype html>
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
    <link href="/managetest/css/font-face.css" rel="stylesheet" media="all">
    <link href="/managetest/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <!-- Main CSS-->
    <link href="/managetest/css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('/managetest/css/sidebar.css')}}">
    <script src="/js/jspdf.min.js"></script>
    <title>Document</title>
    <style>
        .table th{
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .table td{
            font-size: 15px;
            font-weight: normal;
        }
    </style>
    <style>
        .d-none{display:none!important}
        .d-lg-block{display:block!important}
        .d-block{display:block!important}
        @media (min-width:992px){.d-lg-none{display:none!important}}

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
    <?php $test['test']= \App\Test::find($session[0]->test_id)?>
    <div class="page-content--bgf7">

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
                            <a href="/create-qcm1/{{$test['test']->test_id }}"><span class="fa fa-list mr-3"></span> création question qcm</a>
                        </li>
                        <li>
                            <a href="/create-bin/{{$test['test']->test_id}}"><span class="fa fa-question mr-3"></span> Création question binaire </a>
                        </li>
                        <li>
                            <a href="/create-text-libre/{{$test['test']->test_id}}"><span class="fa fa-file-text-o mr-3"></span> Création question text </a>
                        </li>

                        </li>
                    </ul>

                </div>
            </nav>
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="table-wrapper" style="width: 150rem; margin-top: -5rem">
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
                                                        <li class="list-inline-item active">
                                                            <a href="{{ route('manager-test',$prof) }}">Gérer les tests</a>
                                                        </li>
                                                        <li class="list-inline-item seprate">
                                                            <span>/</span>
                                                        </li>
                                                        <li class="list-inline-item">{{$test['test']->nom}}</li>
                                                        <li class="list-inline-item seprate">
                                                            <span>/</span>
                                                        </li>
                                                        <li class="list-inline-item">Gérer les réponses</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- END BREADCRUMB-->
                            <table class="table table-bordered" id="myTable" style="width: 1000px;">
                                <thead >
                                <tr >
                                    <th>nom</th>
                                    <th>reponses (PDF)</th>
                                    <th>note final</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="{{action('ResultatController@storeFinal')}}" method="POST">
                                    @csrf
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach($session as $s)
                                        <tr>
                                            <td>{{$s->username}}</td>
                                            <td id="rep">
                                                @php $reponses = \App\Reponse_text::query()->where('etudiant_id','=',$s->session_id)->get() @endphp
                                                <button value="{{$reponses}}" type="button" class="word" onclick="getWord(this)">
                                                    reponses
                                                </button>
                                            </td>
                                            <td>
                                                @php
                                                    $resultat = DB::table('resultat')->where('session_id',$s->session_id)->first();
                                                @endphp
                                                @if($resultat != null)
                                                    {{$resultat->note_total}}
                                                @endif
                                            </td>
                                            <td>
                                                @php
                                                    $resultat = DB::table('resultat')->where('session_id',$s->session_id)->first();
                                                @endphp
                                                <a data-session_id="{{$s->session_id}}"
                                                   data-note_total="@if($resultat != null){{$resultat->note_total}} @else 0 @endif"
                                                   data-toggle="modal"
                                                   data-target="#exampleModal-edit">
                                                    <button type="button" class="btn btn-info">Modifier</button>
                                                </a>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp

                                    @endforeach
                                    <input type="hidden" name="nbr" value="{{$i}}">

                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal edit -->
            <div class="modal fade-left" id="exampleModal-edit" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">modifier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{action('ResultatController@update')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="session_id" name="session_id"/>

                                <input required type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="note_final" id="repedit">Note Final</label>
                                    <input type="number" id="note_final" name="note_final" class="form-control" min="0" value="" required />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>

                                    <button type="submit" class="btn btn-info">modifier</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var session_id = button.data('session_id');
        var note_total = button.data('note_total');

        var modal = $(this);

        modal.find('.modal-title').text('Modifier la note ');
        modal.find('.modal-body #session_id').val(session_id);
        modal.find('.modal-body #note_final').val(note_total);
    });
</script>
<!-- Jquery JS-->

<script src="/managetest/vendor/jquery-3.2.1.min.js"></script>
<script src="/managetest/vendor/animsition/animsition.min.js"></script>
<!-- Main JS-->
<script src="/managetest/js/main.js"></script>
<script>
    function getWord(elm) {
        var doc = new jsPDF();
        var reponses = JSON.parse(elm.value);
        var i = 0;
        var out = "";
        while (i < reponses.length) {
            out = out + reponses[i].fichier;
            out = out + "<br>" + "<hr>";
            i++;
        }
        doc.fromHTML(out);
        //console.log(reponses);
        doc.fromHTML();
        doc.save($(elm).closest('tr').find("td:first-child").text() + '.pdf');
    }
</script>
<script type="text/javascript">
    $(function () {
        $('#example').barrating({
            theme: 'fontawesome-stars'
        });
    });
</script>
</body>
</html>
