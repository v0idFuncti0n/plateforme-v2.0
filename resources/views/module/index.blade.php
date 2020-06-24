<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Dashboard
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
                Module
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
                <li class="nav-item">
                    <a class="nav-link" href="{{route("etudiant.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Etudiant</p>
                    </a>
                </li>
                <li class="nav-item active ">
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
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">


                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <form id="lgt" method="POST" action="{{route('admin.logout')}}">
                                @csrf
                            <a style="left: -5%" class="nav-link" onclick="document.forms[0].submit()">
                                <label  style="color: #1ee898;font-weight: bold">Déconnexion</label>
                                <i style="font-size: 30px;color: #1ee898" class="material-icons">logout</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            </form>
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
                                <h4 class="card-title ">Table des modules</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="row justify-content-between card-header">
                                <a href="" class="btn btn-info" data-toggle="modal"
                                   data-target="#filiereModal">ajouter filiere</a>

                                <a href="" class="btn btn-info" data-toggle="modal"
                                   data-target="#exampleModal">ajouter </a>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>Identifiant</th>
                                            <th>Nom module</th>
                                            <th style="width: 220px;" class="exclude">Action</th>
                                        </tr>
                                        <tbody>
                                        @foreach($modules as $key=>$module)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$module->nom_module}}</td>
                                                <td class="exclude">
                                                    <a data-module_id="{{$module->module_id}}"
                                                       data-nom_module="{{$module->nom_module}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm" style="width: 100px;">modifier</a>
                                                    <a data-module_id="{{$module->module_id}}" data-toggle="modal"
                                                       data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                    <a data-module_id="{{$module->module_id}}"
                                                       data-module_nom="{{$module->nom}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-voir"
                                                       class="btn btn-primary btn-sm">Voir les matieres</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        {{$modules->links()}}
                                        </thead>
                                    </table>

                                </div>

                            </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Exporter</button>
                                <div>
                                    <form action={{ route('module.import') }} method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input required type="file" name="file">
                                        <input class="btn btn-info" type="submit" name="upload" value="importer">
                                    </form>
                                </div>
                                <a data-toggle="modal" data-target="#exampleModal-restore" class="btn btn-success ">Réstaurer</a>

                            </div>
                    </div>

                </div>

                <!-- Modal add -->
                <div class="modal fade-right" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter module</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('module.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nom_module" style="color:#c21db7;">nom module</label>
                                        <input pattern="[a-zA-Z ]{2,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" required type="text" name="nom_module" style="color:black;" class="form-control"
                                               placeholder="Nom de module">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="filiere_id" style="color:#c21db7;">Filiere</label>
                                        <?php
                                        use App\filiere;
                                        $filieres = filiere::all();
                                        echo "<select required size='3' id='filiere_id' class='form-control' name=filiere_id>";
                                        foreach($filieres as $f){
                                            $id_filiere=$f->filiere_id;
                                            echo "<option value=$id_filiere>$f->nom </option>";
                                        }
                                        echo "</select>";
                                        ?>
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

                                <form action="{{route('module.update','module_id')}}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <input required type="hidden" style="color:black;" name="module_id" id="module_id">
                                    <div class="form-group">
                                        <label for="nom_module" style="color:#c21db7;">nom module</label>
                                        <input pattern="[a-zA-Z ]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" required type="text" name="nom_module" id="nom_module" style="color:black;"
                                               class="form-control"
                                               placeholder="Nom de module">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="filiere_id" style="color:#c21db7;">Filiere</label>
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

                                <form action="{{route('module.destroy','module_id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input required type="hidden" name="module_id" id="module_id">
                                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer ce
                                        module</p>


                                    <div class="modal-footer">
                                        <button type="submit" name = "but" value="no"class="btn btn-warning">supprimer</button>

                                        <button type="submit" name = "but" value="dif"class="btn btn-danger" >supprimer définitivement</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal voir -->
                <div class="modal fade-left" id="exampleModal-voir" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" id="module_id">
                                <table id="matiereTable">
                                    <thead>
                                        <th>nom matiere</th>
                                        <th>volume horaire</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
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
                                <h5 class="modal-title" id="exampleModalLabel">Réstaurer module</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{action('ModuleController@restore')}}" method="POST">
                                    @csrf
                                    <?php $modules['modules'] = App\module::onlyTrashed()->get();?>

                                    @foreach($modules['modules'] as $module)

                                        <label class="switcher" style="margin-left:10px;">
                                            <input name="module[]" type="checkbox" value="{{$module->module_id}}"/>
                                            <div class="switcher__indicator"></div>
                                            <span style="font-size: 15px; color:black;">{{$module->nom_module}}</span>
                                        </label><br>
                                        <br>

                                    @endforeach



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                        <button type="submit" class="btn btn-success">Reéstaurer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade-right" id="filiereModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-lg modal-right modal-info" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter filiére</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('filiere.storeFromModule')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">nom de filiere</label>

                                        <input required style="color:black;" type="text" id="nom" name="nom" class="form-control"
                                               placeholder="Nom de filiere : e.g. Genie Logiciel" pattern="[a-zA-Z ]{2,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max">
                                    </div>
                                    <input style="color:black;" type="hidden" name="filiere_id" id="filiere_id">
                                    <br>
                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">Coordinateur</label>
                                        <input required style="color:black;" type="text" id="coordinateur" name="coordinateur"
                                               class="form-control"
                                               placeholder="Coordinatuer" pattern="[a-zA-Z. ]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">date de debut</label>
                                        <input required style="color:black;" type="date" id="datedebut" name="datedebut"
                                               class="form-control"
                                               placeholder="Date de creation de filiere">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="" style="color:#c21db7;">date de fin</label>
                                        <input style="color:black;" type="date" id="datefin" name="datefin"
                                               class="form-control"
                                               placeholder="date de fin">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="nom_dep" style="color:#c21db7;">departemeent</label>


                                        <select required name="nom_dep" size="3" id="nom_dep" class="form-control">
                                            <?php
                                            use App\departement;
                                            $departements = departement::all();
                                            foreach ($departements as $un) {
                                                echo '<option>';
                                                echo $un->nom;
                                                echo '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="niveau_id" style="color:#c21db7;">niveau</label>
                                        <?php $niveau = \App\Niveau::all()?>
                                        <select required name="niveau_id" size="3" id="niveau_id" class="form-control" >
                                            @foreach($niveau as $n)
                                                <option value="{{$n->niveau_id}}">{{$n->nom}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>

                                        <button type="submit" class="btn btn-info">ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

            </div>

        </div>

    </div>
</div>

</body>

<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var module_id = button.data('module_id')
        var nom_module = button.data('nom_module')
        var id_filiere = button.data('id_filiere')
        var modal = $(this)

        modal.find('.modal-title').text('Modifier module');
        modal.find('.modal-body #module_id').val(module_id);
        modal.find('.modal-body #nom_module').val(nom_module);
        modal.find('.modal-body #id_filiere').val(id_filiere);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var module_id = button.data('module_id')

        var modal = $(this)

        modal.find('.modal-title').text('Supprimer module');

        modal.find('.modal-body #module_id').val(module_id);
    });

    $('#exampleModal-voir').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var module_id = button.data('module_id')
        var module_nom = button.data('module_nom')
        var modal = $(this)

        modal.find('.modal-title').text('Voir les matieres de module : ' + module_nom);

        modal.find('.modal-body #module_id').val(module_id);
        $.ajax({
            type: 'GET',
            url: '/getMatiere/' + module_id,
            data: {module_id: module_id},
            success: function (data) {
                $('#matiereTable tbody').empty();
                data = JSON.parse(data);
                data.forEach(function (item) {
                    $("#matiereTable tbody").append("<tr><td>"+item.nom_matiere+"</td><td>"+item.volume_horaire+"</td></tr>");
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
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
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Module",
            filename: "Module",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</html>
