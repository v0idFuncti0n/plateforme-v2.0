<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Regna Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style4.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Regna
      Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="{{asset('img/logo.png')}}" alt="" title=""/></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="test">Accueil</a></li>
                <li><a href="create-test/{{$prof->professeur_id}}">Créer un test</a></li>
                <li><a href="{{route('manager-test',['prof_id' => $prof])}}">Gérer les tests</a></li>
                <li><a href="">Gérer les notes</a></li>
                <li><a href="">Déconnexion</a></li>
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
                                <?php $nomfilierm = DB::table('Filiere')->where('filiere_id',$idfilier)->value('nom') ?>
                                <td scope="col" class="col-2">{{$nomfilier}}</td>
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
    <section id="facts" >
        <div class="container wow fadeIn">
            <div class="row about-container">

                <div class="container main-section">
                    <h4 style="font-size: 30px">Services</h4>
                    <div class="row justify-content-md-center">
                        <div class="col-lg-3 col-sm-4 col-12 text-center wow fadeInUp">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-primary">
                                    <i class="fa fa-magic" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="create-test/{{$prof->professeur_id}}" style="color:#007bff;font-weight: bold">Créer un
                                            test</a></p></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12 text-center wow fadeInUp">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-warning">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="{{route('manager-test',['prof_id' => $prof])}}" style="color:darkgoldenrod;font-weight: bold">Gérer
                                            les tests</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12 text-center wow fadeInUp">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-danger">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="#" style="color:#dc3545;font-weight: bold">Gérer les notes</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #about -->


</main>

<!--==========================
  Footer
============================-->


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>

<!-- Contact Form JavaScript File -->

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>

