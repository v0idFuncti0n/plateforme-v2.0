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
    <link href="/managetest/css/font-face.css" rel="stylesheet" media="all">
    <link href="/managetest/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <!-- Main CSS-->
    <link href="/managetest/css/theme.css" rel="stylesheet" media="all">
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

                </div>

                <div class="header__tool">
                    <div class="header-button">
                        <div class="noti-wrap account-item--style2 ">
                            <div class="content noti__item redactive ">
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
                                    <li class="list-inline-item">Accueil</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

    <section id="portfolio" >
        <div class="container wow fadeInUp">
            <div class="row">

                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-card" class="filter-active">mes tests</li>
                        <li data-filter=".filter-logo">mes matiére</li>
                    </ul>
                </div>
            </div>

            <div class="row" id="portfolio-wrapper">
                <div class="col-lg-12 portfolio-item filter-card">
                    <table class="table table-fixed">
                        <thead>
                        <tr>
                            <th scope="col" class="col-2">Identifiant</th>
                            <th scope="col" class="col-2">Nom du test</th>
                            <th scope="col" class="col-2">Discription</th>
                            <th scope="col" class="col-2">Filiére</th>
                            <th scope="col" class="col-2">Niveau</th>
                            <th scope="col" class="col-2">salle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $tests = \App\Test::query()->where('professeur_id',$prof->professeur_id)->get() ; $i=0 @endphp
                        @foreach($tests as $t)
                            <tr>
                                <td scope="col" class="col-2">{{++$i}}</td>
                                <td scope="col" class="col-2">{{$t->nom}}</td>
                                <td scope="col" class="col-2">{{$t->discription}}</td>
                                <?php $idmodule = DB::table('Matiere')->where('matiere_id',$t->matiere_id)->value('module_id') ?>
                                <?php $idfilier = DB::table('filiere_module')->where('module_id',$idmodule)->value('filiere_id') ?>
                                <?php $nomfilier = DB::table('Filiere')->where('filiere_id',$idfilier)->value('nom') ?>
                                <td scope="col" class="col-2">{{$nomfilier}}</td>
                                <?php $idniv = DB::table('filiere_niveau')->where('filiere_id',$idfilier)->value('niveau_id') ?>
                                <?php $nomniv = DB::table('niveau')->where('niveau_id',$idniv)->value('nom') ?>
                                <td scope="col" class="col-2">{{$nomniv}}</td>
                                <td scope="col" class="col-2">{{$t->salle}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @php $matiere = $prof->matiere ; $i=0 @endphp
                <div class="col-lg-12 portfolio-item filter-logo" style="display: none;">
                    <table class="table table-fixed" >
                        <thead>
                        <tr>
                            <th scope="col" class="col-3">Identification</th>
                            <th scope="col" class="col-2">nom de matiere</th>
                            <th scope="col" class="col-2">Filiére</th>
                            <th scope="col" class="col-2">Niveau</th>
                            <th scope="col" class="col-2">Volume Horaire</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($matiere as $m)
                            <tr>
                                <td scope="col" class="col-3">{{++$i}}</td>
                                <td scope="col" class="col-2">{{$m->nom_matiere}}</td>
                                <?php $idfilierm = DB::table('filiere_module')->where('module_id',$m->module_id)->value('filiere_id') ?>
                                <?php $nomfilierm = DB::table('Filiere')->where('filiere_id',$idfilierm)->value('nom') ?>
                                <td scope="col" class="col-2">{{$nomfilierm}}</td>
                                <?php $idnivm = DB::table('filiere_niveau')->where('filiere_id',$idfilierm)->value('niveau_id') ?>
                                <?php $nomnivm = DB::table('niveau')->where('niveau_id',$idnivm)->value('nom') ?>
                                <td scope="col" class="col-2">{{$nomnivm}}</td>
                                <td scope="col" class="col-2">{{$m->volume_horaire}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>

        </div>
    </section><!-- #portfolio -->

    <!--==========================
      About Us Section
    ============================-->
        <section class="statistic-chart">
            <div class="container">
                <div class="row">
                    <!-- WELCOME-->
                    <section class="welcome p-t-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="title-4">Services
                                    </h1>
                                    <hr class="line-seprate">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END WELCOME-->

                </div>
                    <div class="row justify-content-md-center">
                        <div class="col-md-6 col-lg-4 text-center">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-info">
                                   <i class="fa fa-plus-square"  aria-hidden="true" ></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="create-test/{{$prof->professeur_id}}" style="color:#007bff;font-weight: bold">Créer un
                                            test</a></p></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 text-center ">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-warning">
                                    <i class="fa fa-area-chart" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="{{route('manager-test',['prof_id' => $prof])}}" style="color:darkgoldenrod;font-weight: bold">Gérer
                                            les tests</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 text-center ">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-danger">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="{{route('profauth.logout')}}" style="color:#dc3545;font-weight: bold">Déconnexion</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </section>
            </div>
        </div>
    </section><!-- #about -->

    </div>
</div>
<script>
    $("#portfolio-flters li").click(function () {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        var selectedFilter = $(this).data("filter");
        $("#portfolio-wrapper").fadeTo(100, 0);

        $(".portfolio-item").fadeOut().css('transform', 'scale(0)');

        setTimeout(function () {
            $(selectedFilter).fadeIn(100).css('transform', 'scale(1)');
            $("#portfolio-wrapper").fadeTo(300, 1);
        }, 300);
    });
</script>
<!-- Jquery JS-->
<script src="/managetest/vendor/jquery-3.2.1.min.js"></script>
<script src="/managetest/vendor/animsition/animsition.min.js"></script>
<!-- Main JS-->
<script src="/managetest/js/main.js"></script>
</body>
</html>

