<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/resultat1/css/theme.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Face Recognition</title>

    <style>
        canvas {
            position: absolute;
            top: 430px;
            left: 415px;
        }

        svg {
            position: absolute;
            top: 0;
            left: 0;
        }
        #imageContainer {
            position: relative;
        }
    </style>
    <script defer src="{{ asset('/sessionlogin/face-r/dist/face-api.js') }}"></script>

    <script defer src="{{ asset('/sessionlogin/face-r/process.js') }}"></script>
</head>
<body >
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="/resultat1/images/logo.png" alt="CoolAdmin"/>
                    </a>
                </div>

            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->
    <section class="statistic statistic2">
        <div class="container">
            <h1 class="title-4" style="margin-bottom: 40px; text-align: center;">
                <span>reconnaissance faciale :</span>
            </h1>
            @php
                $etudiant_id=DB::table('session')->where('session_id',$s)->value('etudiant_id');
             $etudiant=DB::table('etudiant')->where('etudiant_id',$etudiant_id)->first();
             $nomfiliere=DB::table('filiere')->where('filiere_id', $etudiant->filiere_id)->value('nom');
            @endphp
            <input type="hidden" id="filiere" name="filiere" value="<?php echo $nomfiliere ?>">
            <input type="hidden" id="nom" name="nom" value="<?php echo $etudiant->nom ?>">
            <input type="hidden" id="prenom" name="prenom" value="<?php echo $etudiant->prenom ?>">
            <input type="hidden" id="cin" name="cin" value="<?php echo  $etudiant->cin ?>">
            <input type="hidden" name="etudiant_id" id="etudiant_id" value="<?php echo $etudiant_id ?>">
            <input type="hidden" name="resultat" id="resultat" value="">
            <div class="row">
                <div style=" margin: 0 auto; width: 700px; " >
                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                        <div class="au-card-title" >
                          <h3 class="instru spanwarning"> <span style="font-size: 30px" class="material-icons">warning</span></h3>

                            <div class="bg-overlay bg-overlay--red "></div>
                            <h3 class="instru">
                                <br>
                                <i class="zmdi zmdi-account-calendar " ></i>
                                Afin que la fonctionnalité de reconnaissance faciale fonctionne correctement :</h3>
                            <h3 class="listinstru">-Activer la caméra de votre ordinateur .</h3>
                            <h3 class="listinstru">-Nettoyez bien la caméra de votre ordinateur .</h3>
                            <h3 class="listinstru">-Gardez vos yeux ouverts et regardez directement vers votre ordinateur.</h3>
                            <h3 class="listinstru" style="margin-bottom: -20px;">-Évitez d'utiliser cette fonctionnalité dans les lieux sombres ou lorsque vous êtes face à une lumière directe.</h3>

                        </div>
                        <div style=" margin: 0 auto; width: 515px;">
                            <h3 id="message">
                            </h3>
                            <h3 id="reload" >Nous ne vous avais pas reconnu, veuillez réessayer.</h3>
                            <h3 id="reload2">La page sera rechargée dans <span id="countdowntimer">10</span> Secondes </h3>
                            <video  id="video" width="512" height="512" autoplay muted >
                            </video>
                            <canvas id="capturedImage" width="512" height="512"></canvas>
                            <br>
                            <div style="display: none"  id="imageContainer">
                                <img id="imgDetected" src="" alt="Loading to detect your image...">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<form id="face" action="{{route("facelogin")}}" method="POST">
    @csrf
    <input type="hidden" name="session_id" id="session_id" value="<?php echo $s ?>">
</form>
</div>

</body>

</html>
