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
    <link rel="stylesheet" href="{{asset('/managetest/css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('/managetest/css/selectStyle.css')}}">

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
    <style>
        .d-none{display:none!important}
        .d-lg-block{display:block!important}
        .d-block{display:block!important}
        @media (min-width:992px){.d-lg-none{display:none!important}}

    </style>
</head>
<body >
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
        <!-- Page Content  -->
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
                                        <li class="list-inline-item">Sélectionner les questions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <h2 class="mb-4" >Sélection des questions </h2>
            <section>
                <div class="container">

                        <div >
                            <?php use Illuminate\Support\Facades\DB;$matiere_id = $test->matiere_id; ?>
                            <?php $professeur_id = $test->professeur_id;
                            $question_qcm =[];
                            $question_text =[];
                            $question_binaire =[];


                            ?>
                            <?php $tests = DB::table('test')->where('matiere_id', $matiere_id)->where('test_id', '!=', $test->test_id)->where('professeur_id', $professeur_id)->get();?>
                            <form action="{{action('question@StoreSelected')}}" method="Post">
                                @csrf
                                <?php   $test_qcm['test_qcm'] = DB::table('qcm')->where('test_id', $test->test_id)->get();
                                $i=0;
                                foreach ($test_qcm['test_qcm'] as $qcm1) {
                                    $question_qcm[$i] = $qcm1->question_text;
                                    $i++;
                                } ?>
                                @foreach($tests as $test1)
                                    <?php $qcms['qcms'] = \App\QCM::withoutTrashed()->where('test_id', $test1->test_id)->whereNotIn('question_text', $question_qcm)->get();?>

                                    @foreach($qcms['qcms'] as $qcm)

                                        <label class="switcher" style="margin-left:10px;">
                                            <input name="qcm[]" type="checkbox" value="{{$qcm->question_id}}"/>
                                            <div class="switcher__indicator"></div>
                                            <span style="font-size: 15px;">{{$qcm->question_text}}</span>
                                        </label><br>
                                        <br>



                                    @endforeach
                                    <?php   $test_binaire['test_binaire'] = DB::table('binaire')->where('test_id', $test->test_id)->get();
                                    $i=0;
                                    foreach ($test_binaire['test_binaire'] as $binaire1) {
                                        $question_binaire[$i] = $binaire1->question_text;
                                        $i++;
                                    } ?>
                                    <?php $binaires['binaires'] = \App\binaire::withoutTrashed()->where('test_id', $test1->test_id)->whereNotIn('question_text', $question_binaire)->get();?>

                                    @foreach($binaires['binaires'] as $binaire)

                                        <label class="switcher" style="margin-left:10px;">
                                            <input name="bin[]" type="checkbox" value="{{$binaire->binaire_id}}"/>
                                            <div class="switcher__indicator"></div>
                                            <span style="font-size: 15px;">{{$binaire->question_text}}</span>
                                        </label><br>
                                        <br>

                                    @endforeach
                                    <?php   $test_text_libre['test_text_libre'] = DB::table('text_libre')->where('test_id', $test->test_id)->get();
                                    $i=0;
                                    foreach ($test_text_libre['test_text_libre'] as $text_libre1) {
                                        $question_text[$i] = $text_libre1->question_text;
                                        $i++;
                                    } ?>
                                    <?php $text_libre['text_libre'] = \App\Text_libre::withoutTrashed()->where('test_id', $test1->test_id)->whereNotIn('question_text', $question_text)->get();?>

                                    @foreach($text_libre['text_libre'] as $text_libre)

                                        <label class="switcher" style="margin-left:10px;">
                                            <input name="text_libre[]" type="checkbox" value="{{$text_libre->question_id}}"/>
                                            <div class="switcher__indicator"></div>
                                            <span style="font-size: 15px;">{{$text_libre->question_text}}</span>
                                        </label><br>
                                        <br>



                                    @endforeach
                                @endforeach
                                <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                <div style="padding-left:100px;">
                                    <input type="submit" class="btn btn-info" value="ajouter">
                                </div>
                            </form>
                        </div>
                    </div>
            </section><!-- #services -->
        </div>
    </div>
</div>
</div>
<!-- Jquery JS-->
<script src="/managetest/vendor/jquery-3.2.1.min.js"></script>
<script src="/managetest/vendor/animsition/animsition.min.js"></script>
<!-- Main JS-->
<script src="/managetest/js/main.js"></script>
</body>
</html>
