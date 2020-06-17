<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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

<body>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="javascript:void(0)" class="simple-text logo-normal">
                Matiere
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
                <li class="nav-item ">
                    <a class="nav-link" href="{{route("module.index")}}">
                        <i class="material-icons">content_paste</i>
                        <p>Module</p>
                    </a>
                </li>
                <li class="nav-item active ">
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
                                <h4 class="card-title ">Table des matiére</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="row justify-content-between card-header">
                               <a></a>
                                <a href="" class="btn btn-info" data-toggle="modal"
                                   data-target="#exampleModal">ajouter</a>
                            </div>
                                @php
                                use Illuminate\Support\Facades\DB ;
                                  $modules =DB::table('module')->get()  ;

                                    @endphp
                                <select style=" width: 100px;margin-top: -20px;margin-left: 20px;" name="search" id="search" class="form-control">
                                    @foreach($modules as $module)
                                    <option value="{{$module->module_id}}">{{$module->nom_module}}</option>
                                        @endforeach
                                </select>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>Identifiant</th>
                                                <th>Nom matiere</th>
                                                <th>nom de Module </th>
                                                <th>Volume horaire</th>
                                                <th style="width: 215px;" class="exclude">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($matieres as $key=>$matiere)
                                                <tr>
                                                    <td>{{++$key}}</td>
                                                    <td>{{$matiere->nom_matiere}}</td>
                                                    <td>{{\App\Module::query()->find($matiere->module_id)->nom_module}}</td>
                                                    <td>{{$matiere->volume_horaire}}</td>
                                                    <td>
                                                        <a data-matiere_id="{{$matiere->matiere_id}}"
                                                           data-module_id="{{$matiere->module_id}}"
                                                           data-nom_matiere="{{$matiere->nom_matiere}}"
                                                           data-volume_horaire="{{$matiere->volume_horaire}}"
                                                           data-toggle="modal"
                                                           data-target="#exampleModal-edit" type="button"
                                                           class="btn btn-warning btn-sm" style="width: 100px;">modifier</a>
                                                        <a data-matiere_id="{{$matiere->matiere_id}}" data-toggle="modal"
                                                           data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Exporter</button>
                                <div>
                                    <form action={{ route('matiere.import') }} method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input required type="file" name="file">
                                        <input class="btn btn-info" type="submit" name="upload" value="importer">
                                    </form>
                                </div>
                                <a data-toggle="modal"  data-target="#exampleModal-restore" class="btn btn-success">Réstaurer</a>

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
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter matiére</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="{{route('matiere.store')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nom_matiere" style="color:#c21db7;">nom matiere</label>
                                            <input required pattern="[a-zA-Z ]{1,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" type="text" name="nom_matiere" style="color:black;" class="form-control"
                                                   placeholder="Nom de matiere">
                                        </div>
                                        <br>
                                        <!--<div class="form-group">
                                            <label for="module_id" style="color:#c21db7;">module</label>

                                            <input required type="number" name="module_id" style="color:black;" class="form-control"
                                                   placeholder="module">
                                        </div>-->
                                        <div class="form-group">
                                            <label for="module_id" style="color:#c21db7;">module</label>
                                            <select required name="module_id" id="module_id" class="form-control" size="3">
                                                {{$mod = \App\Module::all()}}
                                                @foreach( $mod as $m)
                                                    <option value="{{ $m->module_id }}">{{ $m->nom_module }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="professeur_id" style="color:#c21db7;">Professeur</label>
                                            <?php $professeur = \App\Professeur::all()?>
                                            <select  required name="professeur_id" id="professeur_id" class="form-control" size="3">
                                                @foreach($professeur as $p)
                                                    <option value={{$p->professeur_id}}>{{$p->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>

                                        <div class="form-group">

                                            <label for="volume_horaire" style="color:#c21db7;">volume horaire</label>

                                            <input required type="number" name="volume_horaire" style="color:black;"
                                                   class="form-control"
                                                   placeholder="Volume horaire : e.g 90" min="1">
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

                                    <form action="{{route('matiere.update','matiere_id')}}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <input required type="hidden" style="color:black;" name="matiere_id" id="matiere_id">
                                        <div class="form-group">
                                            <label for="nom_matiere" style="color:#c21db7;">nom matiere</label>
                                            <input pattern="[a-zA-Z ]{1,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" required type="text" name="nom_matiere" id="nom_matiere" style="color:black;" class="form-control"
                                                   placeholder="nom de matiere">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="module_id" style="color:#c21db7;">module</label>
                                            <select required name="module_id" size='3' id="module_id" class="form-control">
                                                {{$mod = \App\Module::all()}}
                                                @foreach( $mod as $m )
                                                    <option value="{{ $m->module_id }}">{{ $m->nom_module }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>

                                        <div class="form-group">

                                            <label for="volume_horaire" style="color:#c21db7;">volume horaire</label>

                                            <input required type="number" name="volume_horaire" id="volume_horaire" style="color:black;"
                                                   class="form-control"
                                                   placeholder="Volume horaire : e.g. 90" min="1">
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

                                    <form action="{{route('matiere.destroy','matiere_id')}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input required type="hidden" name="matiere_id" id="matiere_id">
                                        <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer cette
                                            matiere</p>


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
                                    <h5 class="modal-title" id="exampleModalLabel">Réstaurer matiére</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="{{action('MatiereController@restore')}}" method="POST">
                                        @csrf
                                        <?php $matieres['matieres'] = App\matiere::onlyTrashed()->get();?>

                                        @foreach($matieres['matieres'] as $matiere)

                                            <label class="switcher" style="margin-left:10px;">
                                                <input name="matiere[]" type="checkbox" value="{{$matiere->matiere_id}}"/>
                                                <div class="switcher__indicator"></div>
                                                <span style="font-size: 15px; color:black;">{{$matiere->nom_matiere}}</span>
                                            </label><br>
                                            <br>

                                        @endforeach



                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                            <button type="submit" class="btn btn-success">restaurer</button>
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
</div>
</div>
</body>

<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var matiere_id = button.data('matiere_id')
        var nom_matiere = button.data('nom_matiere')
        var volume_horaire = button.data('volume_horaire')
        var module_id = button.data('module_id')



        var modal = $(this)

        modal.find('.modal-title').text('Modifier Matiére');
        modal.find('.modal-body #matiere_id').val(matiere_id);
        modal.find('.modal-body #nom_matiere').val(nom_matiere);
        modal.find('.modal-body #volume_horaire').val(volume_horaire);
        modal.find('.modal-body #module_id:selected').val(module_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var matiere_id = button.data('matiere_id')


        var modal = $(this)

        modal.find('.modal-title').text('Supprimer matiére');

        modal.find('.modal-body #matiere_id').val(matiere_id);
    });

</script>

<script>
    $(document).ready(function(){

        fetch_customer_data();

        function fetch_customer_data(query = '')
        {
            $.ajax({
                url:"{{ route('matiere.search') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(matiere)
                {
                    $('tbody').html(matiere.table_data);
                }
            })
        }

        $(document).on('click', '#search', function(){
            var query = $(this).val();
            fetch_customer_data(query);
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

<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

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

<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Matiere",
            filename: "Matiere",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</html>
