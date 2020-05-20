@php
    $s = \App\Session::query()->where('session_id',$session)->first();
    $etudiant = \App\Etudiant::query()->where('etudiant_id',$s->etudiant_id)->first();
    session()->put('end','true');
@endphp
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
    <title>{{$etudiant->nom}}</title>
    <!-- Fontfaces resultat/css-->
    <link href="{{asset('resultat1/css/font-face.resultat/css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet"
          media="all">
    <link href="{{asset('resultat1/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet"
          media="all">
    <link href="{{asset('resultat1/vendor/mdi-font/css/material-design-iconic-font.min.css')}}"
          rel="stylesheet" media="all">
    <!-- Bootstrap resultat/css-->
    <link href="{{asset('resultat1/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- resultat/vendor resultat/css-->
    <link href="{{asset('resultat1/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}"
          rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <!-- Main resultat/css-->
    <link href="{{asset('resultat1/css/theme.css')}}" rel="stylesheet" media="all">
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="{{asset('resultat1/images/logo.png')}}" alt="CoolAdmin"/>
                    </a>
                </div>

                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{$etudiant->nom." ".$etudiant->prenom}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="content" style="margin-left: 10px;">
                                        <h5 class="name">
                                            <a>{{$etudiant->nom." ".$etudiant->prenom}}</a>
                                        </h5>
                                        <span class="email">{{$etudiant->email_address}}</span>
                                    </div>
                                </div>

                                <div class="account-dropdown__footer">
                                    <a href="{{route('session.logout')}}">
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

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">vos resultat
                            <span>{{$etudiant->nom." ".$etudiant->prenom }}</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- STATISTIC-->
        <section class="statistic statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3" style="margin-left: 60px;">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2>Note </h2>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <h1 style="color: white; text-align: center;margin-top: 20px;">{{$somme}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" style="margin-left: 60px;">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2>correct</h2>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <h3 style="color: white; text-align: center;margin-top: 20px;">{{$vrai}}
                                        question</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" style="margin-left: 60px;">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                    <div class="text">
                                        <h2>faux</h2>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <h3 style="color: white; text-align: center;margin-top: 20px;">{{$faux}}
                                        question</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pass" id="pass">
                        <div class="vr" role="vr">
                            <span class="vra" style="display:none">{{$vrai}}</span>
                        </div>
                        <div class="fa" role="fa">
                            <span class="fau" style="display:none">{{$faux}}</span>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6"  style="margin-left: 300px;">
                        <div class="chart-percent-2">
                            <h3 class="title-3 m-b-30" style="text-align: center">Pourcentage des correct et faux reponse %</h3>
                            <div class="chart-wrap">
                                <canvas id="percent-chart2"></canvas>
                                <div id="chartjs-tooltip">
                                    <table></table>
                                </div>
                            </div>
                            <div class="chart-info">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>correct</span>
                                </div>
                                <div class="chart-note">
                                    <span class="dot dot--red"></span>
                                    <span>faux</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CHART PERCENT-->
                    </div>
                </div>
            </div>
    </section>
    <!-- END STATISTIC-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">Vos réponses</h3>

                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                <tr>

                                    <th>Test</th>
                                    <th>question</th>
                                    <th>reponse</th>
                                    <th>correcte reponse</th>
                                    <th>note</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $ntests = DB::table('Test')->where('test_id',$s->test_id)->first() ?>
                                <?php $qcms = DB::table('QCM')->where('test_id',$s->test_id)->whereNull('deleted_at')->get() ; ?>
                                @foreach($qcms as $q)
                                    <tr class="tr-shadow">

                                        <td>{{$ntests->nom}}</td>
                                        <td>
                                            <span class="block-email">{{$q->question_text}}</span>
                                        </td>
                                        <?php $options = DB::table('Reponse_QCM')->where('question_id',$q->question_id)->get(['option_id']); ?>
                                        <td class="desc">
                                            @foreach($options as $oid)
                                                <?php $optte = DB::table('Option')->where('option_id',$oid->option_id )->value('option_text'); ?>
                                                -{{$optte}}
                                                <br>
                                            @endforeach
                                        </td>

                                        <?php $corr = DB::table('Option')->where('question_id',$q->question_id)->where('point','>',0)->get(); ?>
                                        <td>
                                            @foreach($corr as $co)
                                                -{{$co->option_text}}
                                                <br>
                                                @endforeach
                                        </td>
                                        <?php $repcountall = DB::table('Reponse_QCM')->where('question_id',$q->question_id)->count() ?>
                                        <?php $repcount = DB::table('Reponse_QCM')->where('question_id',$q->question_id)->where('note',1)->count() ?>
                                    <?php $optcount = DB::table('option')->where('question_id',$q->question_id)->where('point',1)->count() ?>

                                    <?php if ( $repcount==$repcountall && $repcount==$optcount) {?>
                                        <?php $notesq = DB::table('QCM')->where('question_id',$q->question_id)->value('note'); ?>
                                        <td>
                                            <span class="status--process">{{$notesq}}</span>
                                        </td>
                                        <?php } else {?>
                                        <td>
                                            <span class="status--process">0</span>
                                        </td>
                                        <?php } ?>

                                @endforeach
                                <?php $binaires = DB::table('binaire')->where('test_id',$s->test_id)->whereNull('deleted_at')->get() ; $j=0 ?>
                                @foreach($binaires as $b)
                                    <tr class="tr-shadow">

                                        <td>{{$ntests->nom}}</td>
                                        <td>
                                            <span class="block-email">{{$b->question_text}}</span>
                                        </td>
                                        <?php $optionbs = DB::table('Reponse_Bin')->where('binaire_id',$b->binaire_id)->value('option_id'); ?>
                                        <?php $optionbid = DB::table('Option')->where('option_id',$optionbs)->value('option_text'); ?>
                                        <td class="desc">{{$optionbid}}</td>
                                        <?php $corrb = DB::table('Option')->where('binaire_id',$b->binaire_id)->where('point','>',0)->value('option_text'); ?>
                                        <td>{{$corrb}}</td>
                                        <?php $notesb = DB::table('Reponse_Bin')->where('binaire_id',$b->binaire_id)->value('note'); ?>
                                        <?php if($notesb==0) { ?>
                                        <td>
                                            <span class="status--process">{{$notesb}}</span>
                                        </td>
                                        <?php } else if ($notesb==1) {?>
                                        <?php $notesbn = DB::table('Binaire')->where('binaire_id',$b->binaire_id)->value('note'); ?>

                                        <td>
                                            <span class="status--process">{{$notesbn}}</span>
                                        </td>
                                    <?php }  ?>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->

    <!-- STATISTIC CHART-->
    <section class="statistic-chart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Statistiques</h3>
                </div>
            </div>

                <div class="col-md-12 col-lg-6"  style="margin-left: 300px">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30" style="text-align: center">vos meilleur note</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                <?php
                                    $idd=$s->etudiant_id;
                                $top=DB::table('Resultat')
                                 ->whereIn('session_id', function($query) use ($idd)
                                  {
                        $query->select('session_id')
                        ->from('Session')
                      ->where('etudiant_id',$idd);
                        }) ->orderBy('note_total', 'desc')->take(5)->get();?>

                       @foreach($top as $t )
                     <?php $idtest = DB::table('Session')->where('session_id',$t->session_id)->value('test_id'); ?>
                   <?php $nomtest = DB::table('Test')->where('test_id',$idtest)->value('nom'); ?>
                     <?php $distest = DB::table('Test')->where('test_id',$idtest)->value('discription'); ?>

                                <tr>
                                    <td> {{$nomtest." ".$distest}}</td>
                                    <td>{{$t->note_total}}</td>
                                </tr>
                              @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TOP CAMPAIGN-->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- CHART PERCENT-->

                </div>
            </div>
    </section>

    </div>

    <!-- END STATISTIC CHART-->

    <!-- DATA TABLE-->


</div>

</div>

<!-- Jquery JS-->
<script src="{{asset('resultat1/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('resultat1/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- resultat1/vendor JS       -->
<script src="{{asset('resultat1/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('resultat1/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('resultat1/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('resultat1/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('resultat1/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
