<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        departement
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
                Département
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li class="nav-item active ">
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
                                <h4 class="card-title ">Table des départements</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="row justify-content-between card-header">
                                <a></a>
                                <a href="" class="btn btn-info" data-toggle="modal"
                                   data-target="#exampleModal">ajouter</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th class="exclude">Identifiant</th>
                                            <th>Nom</th>
                                            <th>Date</th>
                                            <th>Chef département</th>
                                            <th>Date de fin</th>
                                            <th style="width: 210px;" class="exclude">Action</th>
                                        </tr>
                                        <tbody>
                                        @foreach($departements as $key=>$departement)
                                            <tr>
                                                <td class="exclude">{{++$key}}</td>
                                                <td>{{$departement->nom}}</td>
                                                <td>{{$departement->date_cr}}</td>
                                                <td>{{$departement->chef}}</td>
                                                <td>{{$departement->date_fin}}</td>
                                                <td class="exclude">
                                                    <a data-departement_id="{{$departement->departement_id}}"
                                                       data-nom="{{$departement->nom}}"
                                                       data-date="{{$departement->date}}"
                                                       data-chef="{{$departement->chef}}"
                                                       data-date_fin="{{$departement->date_fin}}" data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm" style="width: 100px;">modifier</a>
                                                    <a data-departement_id="{{$departement->departement_id}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        {{$departements->links()}}
                                        </thead>
                                        <?php
                                        use App\departement;
                                        if (isset($_POST['upload'])) {

                                        $inputfilename = $_FILES['file']['tmp_name'];
                                        $exceldata = array();

                                        try {
                                            $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
                                            $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
                                            $objPHPExcel = $objReader->load($inputfilename);
                                        } catch (Exception $e) {
                                        }
                                        $sheet = $objPHPExcel->getSheet(0);
                                        $highestRow = $sheet->getHighestRow();
                                        $highestColumn = $sheet->getHighestColumn();
                                        for ($row = 1; $row <= $highestRow; $row++) {
                                            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                                            //$sql = "INSERT INTO departement VALUES('" . $rowData[0][0] . "','" . $rowData[0][1] . "','" . $rowData[0][2] . "','" . $rowData[0][3] . "')";
                                        }
                                        $departement = array(
                                            'nom' => $rowData[0][0],
                                            'chef' => $rowData[0][1],
                                            'date_cr' => $rowData[0][2],
                                            'date_fin' => $rowData[0][3]
                                        );
                                        ?>
                                        {{\App\departement::created($departement)}}
                                        <?php
                                        foreach ($exceldata as $index => $excelraw) {
                                            echo "<tr>";
                                            foreach ($excelraw as $excelcolumn) {
                                                echo "<td>" . $excelcolumn . "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        }
                                        ?>
                                    </table>

                                </div>

                            </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Exporter la table</button>
                                <div>
                                    <form action={{ route('departement.import') }} method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input required type="file" value="parcouri" name="file" >
                                        <input class="btn btn-info" type="submit" name="upload" value="importer ">
                                    </form>
                                </div>
                                <a data-toggle="modal"  data-target="#exampleModal-restore" class="btn btn-success ">réstaurer</a>


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
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter département</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('departement.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nom" style="color:#c21db7;">nom</label>


                                        <input required type="text" name="nom" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z ]{4,}" title="aucun caractère spécial n'est autorisé" placeholder="e.g. Informatique">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="date" style="color:#c21db7;">date de création</label>

                                        <input required type="date" name="date_cr" style="color:black;" class="form-control"
                                               placeholder="date de creation">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="chef" style="color:#c21db7;">chef</label>

                                        <input required type="text" name="chef" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z ]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" placeholder="Nom de chef de departmenet">
                                    </div>
                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">date de fin</label>

                                        <input type="date" style="color:black;" name="date_fin" class="form-control"
                                               placeholder="Date de fin de departement">
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                        <button type="submit" value="enregistrer" class="btn btn-info">ajouter</button>
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

                                <form action="{{route('departement.update','departement_id')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">nom</label>

                                        <input type="text" style="color:black;" id="nom" name="nom" class="form-control"
                                               placeholder="Nom de departement" pattern="[a-zA-Z ]{4,}" title="aucun caractère spécial n'est autorisé 4 - 255 max">
                                    </div>
                                    <input type="hidden" style="color:black;" name="departement_id" id="departement_id">
                                    <br>
                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">date de debut

                                        </label>

                                        <input required type="date" style="color:black;" id="date" name="date_cr"
                                               class="form-control"
                                               placeholder="Date de creation de departement">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">chef</label>

                                        <input type="text" id="chef" style="color:black;" name="chef"
                                               class="form-control" placeholder="Nom de chef de departement" pattern="[a-zA-Z ]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max">
                                    </div>
                                    <br>

                                    <div class="form-group">


                                        <label for="" style="color:#c21db7;">date de fin</label>

                                        <input type="date" style="color:black;" id="date" name="date_fin"
                                               class="form-control"
                                               placeholder="date de fin de departement">
                                    </div>
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

                                <form action="{{route('departement.destroy','departement_id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="hidden" name="departement_id" id="departement_id">
                                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer cette
                                        département</p>


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
                                <h5 class="modal-title" id="exampleModalLabel">Réstaurer département</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{action('DepartementController@restore')}}" method="POST">
                                    @csrf
                                    <?php $deps['deps'] = App\departement::onlyTrashed()->get();?>

                                    @foreach($deps['deps'] as $departemen)

                                        <label class="switcher" style="margin-left:10px;">
                                            <input name="dep[]" type="checkbox" value="{{$departemen->departement_id}}"/>
                                            <div class="switcher__indicator"></div>
                                            <span style="font-size: 15px; color:black;">{{$departemen->nom}}</span>
                                        </label><br>
                                        <br>

                                    @endforeach



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

                                        <button type="submit" class="btn btn-success">réstaurer</button>
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
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var nom = button.data('nom')
        var date = button.data('date_cr')
        var chef = button.data('chef')
        var date_fin = button.data('date_fin')
        var departement_id = button.data('departement_id')


        var modal = $(this)

        modal.find('.modal-title').text('Modifier département');
        modal.find('.modal-body #nom').val(nom);
        modal.find('.modal-body #date_cr').val(date);
        modal.find('.modal-body #chef').val(chef);
        modal.find('.modal-body #date_fin').val(date_fin);
        modal.find('.modal-body #departement_id').val(departement_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var departement_id = button.data('departement_id')


        var modal = $(this)

        modal.find('.modal-title').text('Supprimer département');

        modal.find('.modal-body #departement_id').val(departement_id);
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
<!-- Place this tag in your head or just before your Fermer body tag. -->
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

<!-- jQuery -->
<script
    src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Departement",
            filename: "Departement",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</html>
