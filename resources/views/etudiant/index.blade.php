<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
       Etudiant
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet"/>
    <style>
        input[type="file"]{
            height:20px;
            color: white;
            margin-right: -170px;

        }
        input[type="file"]::-webkit-file-upload-button{
            height:20px;
        }

        select.form-control:not([size]):not([multiple]){
            width: 40px;
            margin-right: 400px;
        }

    </style>



    <link rel="stylesheet" href="{{asset('css/selectStyle.css')}}">

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="javascript:void(0)" class="simple-text logo-normal">
                Etudiant
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li class="nav-item  ">
                    <a class="nav-link" href="{{route("departement.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Département</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("filiere.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Filière</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("etudiant.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Etudiant</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("module.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Module</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("matiere.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Matiére</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("niveau.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Niveau</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("professeur.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Professeur</p>
                    </a>
                </li>


                <!-- <li class="nav-item active-pro ">
                      <a class="nav-link" href="./upgrade.html">
                          <i class="material-icons">unarchive</i>
                          <p>Upgrade to PRO</p>
                      </a>
                  </li> -->
            </ul>
        </div>
        <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-2.jpg) "></div>

    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">


                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a style="left: -5%" class="nav-link" href="{{route('admin.logout')}}">
                                <label  style="color: #1ee898;font-weight: bold">Déconnexion</label>
                                <i style="font-size: 30px;color: #1ee898" class="material-icons">logout</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Table des étudiant</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="row justify-content-between card-header">
                                <a></a>
                                <a href="" class="btn btn-info" data-toggle="modal"
                                   data-target="#exampleModal">ajouter</a>
                            </div>
                            @php
                                use Illuminate\Support\Facades\DB ;
                                  $niveaux =DB::table('niveau')->get()  ;
                            @endphp
                            <select  style=" width: 70px;margin-top: -20px;margin-left: 20px;" name="search" id="search" class="form-control">
                                @foreach($niveaux as $niveau)
                                    <option value="{{$niveau->niveau_id}}">{{$niveau->nom}}</option>
                                @endforeach
                            </select>

                            @php
                                $filieres =DB::table('filiere')->get()  ;
                            @endphp
                            <select  style=" width: 100px;margin-top: 0px;margin-left: 20px;"  name="search1" id="search1" class="form-control">
                                @foreach($filieres as $filiere)
                                    <option value="{{$filiere->filiere_id}}">{{$filiere->nom}}</option>
                                @endforeach
                            </select>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>Identifiant</th>
                                            <th>Cin</th>
                                            <th>Niveau</th>
                                            <th>Filière</th>
                                            <th>Cne</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Email</th>
                                            <th>Numero</th>
                                            <th>Num_apogie</th>
                                            <th class="exclude">action</th>
                                        </tr>
                                        <tbody>

                                        @foreach($etudiants as $key=>$etudiant)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$etudiant->cin}}</td>
                                                <td>{{$etudiant->niveau_id}}</td>
                                                <td>{{$etudiant->filiere_id}}</td>
                                                <td>{{$etudiant->cne}}</td>
                                                <td>{{$etudiant->nom}}</td>
                                                <td>{{$etudiant->prenom}}</td>
                                                <td>{{$etudiant->email_address}}</td>
                                                <td>{{$etudiant->numero}}</td>
                                                <td>{{$etudiant->num_apologie}}</td>
                                                <td class="exclude">
                                                    <a data-etudiant_id="{{$etudiant->etudiant_id}}"
                                                       data-cin="{{$etudiant->cin}}"
                                                       data-cne="{{$etudiant->cne}}"
                                                       data-nom="{{$etudiant->nom}}"
                                                       data-prenom="{{$etudiant->prenom}}"
                                                       data-niveau_id="{{$etudiant->niveau_id}}"
                                                       data-filiere_id="{{$etudiant->filiere_id}}"
                                                       data-email_address="{{$etudiant->email_address}}"
                                                       data-numero="{{$etudiant->numero}}"
                                                       data-num_apologie="{{$etudiant->num_apologie}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm" style="width: 100px">modifier</a>
                                                    <a data-etudiant_id="{{$etudiant->etudiant_id}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-delete" style="margin-top: 5px" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        </thead>
                                    </table>

                                </div>

                            </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Exporter</button>
                                <div>
                                    <form action={{ route('etudiant.import') }} method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input required type="file" name="file">
                                        <input class="btn btn-info" type="submit" name="upload" value="importer">
                                    </form>
                                </div>
                                <a data-toggle="modal" data-target="#exampleModal-restore" class="btn btn-success">Réstaurer</a>


                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal add -->
                <div class="modal fade-right" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter étudiant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('etudiant.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cin" style="color:#c21db7;">cin</label>

                                        <input required type="text" name="cin" style="color:black;" class="form-control"
                                               placeholder="Exemple: XX145" pattern="[A-Z]{1,2}[1-9]{2,5}" title="Exemple: XX145">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="cne" style="color:#c21db7;">cne</label>

                                        <input required type="text" name="cne" style="color:black;" class="form-control"
                                               placeholder="Exemple: XX17522..." pattern="[A-Z]{1,2}[0-9]{2,20}" title="Exemple: XX17522...">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="nom" style="color:#c21db7;">nom</label>

                                        <input required type="text" name="nom" style="color:black;" class="form-control"
                                               placeholder="nom" pattern="[a-zA-Z]{3,255}" title="aucun caractère spécial n'est autorisé">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="prenom" style="color:#c21db7;">prenom</label>

                                        <input required type="text" name="prenom" style="color:black;" class="form-control"
                                               placeholder="prenom" pattern="[a-zA-Z]{3,255}" title="aucun caractère spécial n'est autorisé">
                                    </div>
                                    <div class="form-group">
                                        <label for="niveau_id" style="color:#c21db7;">Niveau</label>
                                        <br>
                                        <?php

                                        use App\filiere;use App\Niveau;$niveaux = Niveau::all();
                                        echo "<select required size='3' id='niveau_id' class='form-control' name=niveau_id>";
                                        foreach($niveaux as $n){
                                            $niveau_id =$n->niveau_id;
                                            echo "<option value=$niveau_id>$n->nom</option>";
                                        }
                                        echo "</select>";
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="filiere_id" style="color:#c21db7;">Filiere</label>
                                        <br>
                                        <?php

                                        $filieres = filiere::all();
                                        echo "<select required size='3' id='filiere_id' class='form-control'  name=filiere_id>";
                                        foreach($filieres as $f){
                                            $id_filiere=$f->filiere_id;
                                            echo "<option value=$id_filiere>$f->nom</option>";
                                        }
                                        echo "</select>";
                                        ?>
                                    </div>
                                    <div class="form-group">

                                        <label for="email_address" style="color:#c21db7;">email</label>

                                        <input pattern="[a-zA-Z1-9]{5,200}@ests.ac.ma" required type="email" style="color:black;" name="email_address"
                                               class="form-control"
                                               placeholder="Email" title="XXX111@ests.ac.ma">
                                    </div>

                                    <div class="form-group">

                                        <label for="numero" style="color:#c21db7;">numero</label>

                                        <input required type="number" style="color:black;" name="numero" class="form-control"
                                               placeholder="Numéro" min="1">
                                    </div>
                                    <div class="form-group">

                                        <label for="num_apologie" style="color:#c21db7;">num apogée</label>

                                        <input required type="number" style="color:black;" name="num_apologie"
                                               class="form-control"
                                               placeholder="Numéro d'apologie" min="1">
                                    </div>
                                    <div class="form-group">

                                        <label for="image" style="color:#c21db7;">image</label>
                                        <input type="file" id="image" name="image" >
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                        <button type="submit" class="btn btn-info">ajouter</button>
                                    </div>
                                </form>
                            </div>

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

                            <form action="{{route('etudiant.update','etudiant_id')}}" method="POST">
                                @csrf
                                @method('PUT')

                                <input  type="hidden" name="etudiant_id" id="etudiant_id">
                                <div class="form-group">
                                    <label for="cin" style="color:#c21db7;">cin</label>

                                    <input required type="text" name="cin" id="cin" style="color:black;" class="form-control"
                                           placeholder="Exemple: XX145" pattern="[A-Z]{1,2}[1-9]{2,5}" title="Exemple: XX145">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="cne" style="color:#c21db7;">cne</label>

                                    <input required type="text" name="cne" id="cne" style="color:black;" class="form-control"
                                           placeholder="Exemple: XX17522..." >
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="nom" style="color:#c21db7;">nom</label>

                                    <input required type="text" name="nom" id="nom" style="color:black;" class="form-control"
                                           placeholder="Nom d'etudiant">
                                </div>
                                <br>

                                <div class="form-group">

                                    <label for="prenom" style="color:#c21db7;">prenom</label>

                                    <input required type="text" name="prenom" id="prenom" style="color:black;" class="form-control"
                                           placeholder="Prenom d'etudiant" pattern="[a-zA-Z]{3,255}" title="aucun caractère spécial n'est autorisé">
                                </div>
                                <div class="form-group">
                                    <label for="niveau_id" style="color:#c21db7;">Niveau</label>
                                    <br>
                                    <?php

                                    $niveaux = Niveau::all();
                                    echo "<select required size='3' id='niveau_id' class='form-control' name=niveau_id>";
                                    foreach($niveaux as $n){
                                        $niveau_id =$n->niveau_id;
                                        echo "<option value=$niveau_id>$n->nom</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="filiere_id" style="color:#c21db7;">Filiere</label>
                                    <br>
                                    <?php

                                    $filieres = filiere::all();
                                    echo "<select required size='3' id='filiere_id' class='form-control' name=filiere_id>";
                                    foreach($filieres as $f){
                                        $id_filiere=$f->filiere_id;
                                        echo "<option value=$id_filiere>$f->nom</option>";
                                    }
                                    echo "</select>";
                                    ?>
                                </div>
                                <div class="form-group">

                                    <label for="email_address" style="color:#c21db7;">email</label>

                                    <input required type="email" id="email_address" style="color:black;" name="email_address"
                                           class="form-control"
                                           placeholder="Email" title="XXX111@ests.ac.ma">
                                </div>
                                <div class="form-group">

                                    <label for="numero" style="color:#c21db7;">numero</label>

                                    <input required type="number" id="numero" style="color:black;" name="numero" class="form-control"
                                           placeholder="Numero" min="1">
                                </div>
                                <div class="form-group">

                                    <label for="num_apologie" style="color:#c21db7;">num apologie</label>

                                    <input required type="number" id="num_apologie" style="color:black;" name="num_apologie"
                                           class="form-control"
                                           placeholder="Numero d'apologie" min="1">
                                </div>
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

                            <form action="{{route('etudiant.destroy','etudiant_id')}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input   type="hidden" name="etudiant_id" id="etudiant_id">
                                <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer cet
                                    étudiant</p>


                                <div class="modal-footer">
                                    <button type="submit" name = "but" value="no"class="btn btn-warning">supprimer</button>
                                    <button type="submit" name = "but" value="dif"class="btn btn-danger" >supprimer définitivement</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


            <!-- restore data -->

            <div class="modal fade-left" id="exampleModal-restore" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Réstaurer étudiant</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{action('EtudiantController@restore')}}" method="POST">
                                @csrf
                                <?php $etds['etds'] = App\etudiant::onlyTrashed()->get();?>

                                @foreach($etds['etds'] as $etudiant)

                                    <label class="switcher" style="margin-left:10px;">
                                        <input name="etd[]" type="checkbox" value="{{$etudiant->etudiant_id}}"/>
                                        <div class="switcher__indicator"></div>
                                        <span style="font-size: 15px; color:black;">{{$etudiant->num_apologie}}</span>
                                    </label><br>
                                    <br>

                                @endforeach



                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                    <button type="submit" class="btn btn-success">Restaurer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>
</div>

</body>
<script>
    $(document).ready(function(){
        fetch_customer_data();
        function fetch_customer_data(query = '',query1='')
        {
            $.ajax({
                url:"{{ route('etudiant.searchniveau') }}",
                method:'GET',
                data:{query:query,
                    query1:query1
                },
                dataType:'json',
                success:function(etudiants)
                {
                    $('tbody').html(etudiants.table_data);
                }
            })
        }
        $(document).on('click', '#search', function(){
            var query = $(this).val();
            var query1 = $("#search1").val();
            fetch_customer_data(query,query1);
        });
    });
</script>



<script>
    $(document).ready(function(){
        fetch_customer_data();
        function fetch_customer_data(query = '',query1='')
        {
            $.ajax({
                url:"{{ route('etudiant.searchniveau') }}",
                method:'GET',
                data:{query:query,
                    query1:query1
                },
                dataType:'json',
                success:function(etudiants)
                {
                    $('tbody').html(etudiants.table_data);
                }
            })
        }
        $(document).on('click', '#search1', function(){
            var query1 = $("#search1").val();
            var query = $("#search").val();
            fetch_customer_data(query,query1);
        });
    });
</script>


<script>$(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });</script>

<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var etudiant_id = button.data('etudiant_id')
        var cin = button.data('cin')
        var cne = button.data('cne')
        var nom = button.data('nom')
        var prenom = button.data('prenom')
        var niveau_id = button.data('niveau_id')
        var email = button.data('email_address')
        var numero = button.data('numero')
        var num_apologie = button.data('num_apologie')


        var modal = $(this)

        modal.find('.modal-title').text('Modifier étudiant');
        modal.find('.modal-body #etudiant_id').val(etudiant_id);
        modal.find('.modal-body #cin').val(cin);
        modal.find('.modal-body #cne').val(cne);
        modal.find('.modal-body #nom').val(nom);
        modal.find('.modal-body #prenom').val(prenom);
        modal.find('.modal-body #niveau_id').val(niveau_id);
        modal.find('.modal-body #email_address').val(email);

        modal.find('.modal-body #numero').val(numero);
        modal.find('.modal-body #num_apologie').val(num_apologie);


    });

    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var etudiant_id = button.data('etudiant_id')

        var modal = $(this)

        modal.find('.modal-title').text('suprimer étudiant');

        modal.find('.modal-body #etudiant_id').val(etudiant_id);
    });

</script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
    $('#myTable').DataTable({
        responsive: true,
        language:{
            url:"//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }

    });
</script>


<!--   Core JS Files   -->
<script src="/public/assets/js/core/jquery.min.js"></script>
<script src="/public/assets/js/core/popper.min.js"></script>
<script src="/public/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="/public/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="/public/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/public/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/public/assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/public/assets/demo/demo.js"></script>


<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Etudiant",
            filename: "Etudiant",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

</html>
