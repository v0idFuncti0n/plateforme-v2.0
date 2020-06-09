<html>
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <!-- Title Page-->
        <title>Dashboard 3</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="/managetest/css/font-face.css" rel="stylesheet" media="all">
        <link href="/managetest/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <!-- your css-->
        <link rel="stylesheet" href="/managetest/css/selectStyle.css">
        <link rel="stylesheet" href="/managetest/css/form.css">
        <link href="/managetest/css/theme.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="{{asset('/managetest/css/sidebar.css')}}">
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
    <body>

<?php $test = \App\Test::find(\App\QCM::find($options['options'][0]->question_id)->test_id) ?>
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
                                        <li class="list-inline-item active">
                                            <a href="/create-qcm1/{{$test->test_id }}">Création des questions QCM</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">{{request()->route('question_id')}}</li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Gérer les options</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <h2 class="mb-4"  >Table des options</h2>

            <div class="table-wrapper" >

            <table class="table table-bordered"style="width: 1000px;" id="myTable">
                <thead>
                <tr>
                    <th class="exclude">Identification</th>
                    <th>option</th>
                    <th>point</th>
                    <th>id question</th>
                    <th class="exclude">Action</th>
                </tr>
                <tbody>
                @foreach($options['options'] as $key=>$option)
                    <tr>
                        <td class="exclude">{{++$key}}</td>
                        @if ($option->type =='text')
                        <td>{{$option->option_text}}</td>
                        @elseif ($option->type =='image')
                        <td>{{$option->option_image}}</td>
                        @endif
                        <td>{{$option->point}}</td>
                        <td>{{$option->question_id}}</td>

                        <td class="exclude">
                            <a data-option_id="{{$option->option_id}}"
                               @if ($option->type =='text')
                               data-option_text="{{$option->option_text}}"
                               @elseif ($option->type =='image')
                               data-option_image="{{$option->option_image}}"
                               @endif
                               data-type="{{$option->type}}"
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
                <div class="section-header" style="margin-left: 887px">
                    <a class="btn btn-success" title="restaurer"
                       data-target="#exampleModal-restore" data-toggle="modal">Réstaurer</a>
                </div>
        </div>
    </div>
</div>


<!-- Modal edit -->
<div class="modal fade-left" id="exampleModal-edit" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-warning" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">modifier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (isset($_POST['btnClickedValue'])) {  $username = $_POST['btnClickedValue']; }?>

                <form action="{{route('option.update','option_id')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <input type="hidden" id="btnClickedValue" name="btnClickedValue" value="" />
                        <label for=""   >nom</label>

                            <input type="text" style="color:black;" id="option_text" name="option_text" class="form-control"
                                   placeholder="option">
                        <input type="text" src="www.google.com" style="color:black;" id="option_image" name="option_image" class="form-control"
                               placeholder="option" readonly>
                        <input  type="file" style="display: none" id="image_file" name="image_file" onclick="showFileName()" >


                    </div>
                    <input type="hidden" style="color:black;" name="option_id" id="option_id">
                    <br>
                    <div class="form-group">

                        <label for=""   >point</label>
                        <input type="number" style="color:black;" id="point" name="point" class="form-control"
                               placeholder="option">
                    </div>
                    <br>

                    <div class="form-group">

                        <label for=""   >id binaire</label>

                        <input type="text" id="question_id" style="color:black;" name="question_id"
                               class="form-control" placeholder="binaire id">
                    </div>
                    <br>


                    <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>

                <button type="submit" class="btn btn-warning">modifier</button>
            </div>
            </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal delete -->
<div class="modal fade-left" id="exampleModal-delete" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-danger" role="document">
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
                    <p class="text-center textsupp" style="font-weight:bold ;font-size: 14px;" width="50px"> vous ete sûre que vous voulez supprimer cette question</p>


            <div class="modal-footer">
                <form action="{{action("OptionController@forceDelete")}}" method="POST">
                    @csrf
                    <input required type="hidden" name="force_option_id" id="force_option_id">
                    <button type="submit" class="btn btn-danger">supprimer définitivement</button>
                </form>
                <button type="submit" class="btn btn-success">supprimer</button>

            </div>
                </form>

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
                <button type="button" id="restore" class="btn btn-success">réstaurer</button>
                <button type="button" id="force-delete" class="btn btn-danger">supprimer définitivement</button>
            </div>
                </form>
            </div>
    </div>
        </div>
</div>
 </div>
</div>
</body>
</html>

<script>
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            document.getElementById("option_image").value =fileName;

        });
    });
</script>
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
        var option_image = button.data('option_image')
        var point = button.data('point')
        var question_id = button.data('question_id')
        var option_id =  button.data('option_id')
        var type =  button.data('type')
        document.getElementById("btnClickedValue").value = option_id;
   if(type=='text'){
       $("#option_text").show();
       $("#option_image").hide();
       $("#image_file").hide();

   }
   else if(type=='image'){
       $("#option_image").show();
       $("#image_file").show();
       $("#option_text").hide();

   }
        var modal = $(this)

        modal.find('.modal-title').text('modifier');
        modal.find('.modal-body #option_text').val(option_text);
        modal.find('.modal-body #option_image').val(option_image);
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

<!-- Jquery JS-->
<script src="/managetest/vendor/jquery-3.2.1.min.js"></script>
<script src="/managetest/vendor/animsition/animsition.min.js"></script>
<!-- Main JS-->
<script src="/managetest/js/main.js"></script>
