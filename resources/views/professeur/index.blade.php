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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
    <link rel="stylesheet" href="{{asset('css/selectStyle.css')}}">
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
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="javascript:void(0)" class="simple-text logo-normal">
                PROFESSEUR
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
                <li class="nav-item active ">
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
                                <h4 class="card-title ">Table des professeurs</h4>
                            </div>
                            <div class="row justify-content-between card-header">
                                <a></a>
                                <a href="" class="btn btn-info" data-toggle="modal"
                                   data-target="#exampleModal">ajouter</a>
                            </div>
                            @php
                                use Illuminate\Support\Facades\DB ;
                                  $departements =DB::table('departement')->get()  ;

                            @endphp
                            <select  style=" width: 100px;margin-top: -20px;margin-left: 20px;" name="search" id="search" class="form-control">
                                @foreach($departements as $departement)
                                    <option value="{{$departement->departement_id}}">{{$departement->nom}}</option>
                                @endforeach
                            </select>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>Identifiant</th>
                                            <th>cin</th>
                                            <th>nom</th>
                                            <th>prenom</th>
                                            <th>nom d'utilisateur</th>
                                            <th>email</th>
                                            <th>mot de passe</th>
                                            <th>grade</th>
                                            <th>departement</th>
                                            <th class="exclude">Action</th>
                                        </tr>
                                        <tbody>
                                        @foreach($professeurs as $key=>$professeur)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$professeur->cin}}</td>
                                                <td>{{$professeur->nom}}</td>
                                                <td>{{$professeur->prenom}}</td>
                                                <td>{{$professeur->username}}</td>
                                                <td>{{$professeur->email}}</td>
                                                <td>{{$professeur->password}}</td>
                                                <td>{{$professeur->grade}}</td>
                                                <td>{{$professeur->departement_id}}</td>
                                                <td class="exclude">
                                                    <a data-professeur_id="{{$professeur->professeur_id}}"
                                                       data-cin="{{$professeur->cin}}"
                                                       data-nom="{{$professeur->nom}}"
                                                       data-prenom="{{$professeur->prenom}}"
                                                       data-username="{{$professeur->username}}"
                                                       data-email="{{$professeur->email}}"
                                                       data-password="{{$professeur->password}}"
                                                       data-grade="{{$professeur->grade}}"
                                                       data-departement_id="{{$professeur->departement_id}}"
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm" style="width: 100px;">modifier</a>
                                                    <a data-professeur_id="{{$professeur->professeur_id}}" data-toggle="modal"
                                                       data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        </thead>
                                    </table>

                                </div>

                            </div>
                            <div class="row justify-content-between card-header">
                                <button id="btn" class="btn btn-info">Exporter la table</button>
                                <div>
                                    <form action={{ route('professeur.import') }} method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" >
                                        <input class="btn btn-info" type="submit"  name="upload" value="importer">
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
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter professeur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('professeur.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cin_p" style="color:#c21db7;">cin</label>

                                        <input required type="text" name="cin_p" style="color:black;" class="form-control"
                                               pattern="[A-Z]{1,2}[0-9]{2,5}" placeholder="Exemple: XX145">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="nom_p" style="color:#c21db7;">nom</label>
                                        <input required type="text" name="nom_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="nom de professeur">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="prenom_p" style="color:#c21db7;">prenom</label>


                                        <input required type="text" name="prenom_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="prenom de professeur">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="username_p" style="color:#c21db7;">nom d'utilsateur</label>


                                        <input required type="text" name="username_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z1-9]*" placeholder="username">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="email_p" style="color:#c21db7;">email</label>


                                        <input required type="text" name="email_p" style="color:black;" class="form-control"
                                               pattern="[a-zA-Z1-9]*@ests.ac.ma"
                                               placeholder="Exemple: XXX111@ests.ac.ma">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="password_p" style="color:#c21db7;">mot de passe</label>
                                        <div>
                                            <input required type="password" id="eye" name="password_p" style="color:black;"
                                                   class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                   placeholder="Utiliser au moin 6 cratctéres contient des lettre en MAJ et des lettre en MIN et des chiffres">
                                            <span toggle="#eye" class="fa fa-fw fa-eye field-icon toggle-password"
                                                  style="float: right; margin-left: -25px; margin-top: -25px; position: relative; z-index: 2;"></span>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="grade_p" style="color:#c21db7;">grade</label>

                                        <input required type="text" name="grade_p" style="color:black;" class="form-control"
                                               pattern="[1-9]{1,2}" placeholder="grade de professeur">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="departement_id" style="color:#c21db7;">Departement</label>
                                        <?php $departement = \App\Departement::all()?>
                                        <select required name="departement_id" id="departement_id" class="form-control" size="3">
                                            @foreach($departement as $d)
                                                <option value="{{$d->departement_id}}">{{$d->nom}}</option>
                                            @endforeach
                                        </select>
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

                                <form action="{{route('professeur.update','professeur_id')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">cin</label>

                                        <input required type="text" style="color:black;" id="cin_p" name="cin_p"
                                               class="form-control"
                                               pattern="[A-Z]{1,2}[1-9]{2,5}" placeholder="Exemple: XX154">
                                    </div>
                                    <br>

                                    <input required type="hidden" style="color:black;" name="professeur_id" id="professeur_id">
                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">nom</label>

                                        <input required type="text" style="color:black;" id="nom_p" name="nom_p"
                                               class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="nom de professeur">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">prenom</label>

                                        <input required type="text" style="color:black;" id="prenom_p" name="prenom_p"
                                               class="form-control"
                                               pattern="[a-zA-Z]*" placeholder="prenom de professeur">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">nom d'utilsateur</label>

                                        <input required type="text" style="color:black;" id="username_p" name="username_p"
                                               class="form-control"
                                               pattern="[a-zA-Z1-9]*" placeholder="username">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">email</label>

                                        <input required type="text" style="color:black;" id="email_p" name="email_p"
                                               class="form-control"
                                               pattern="[a-zA-Z1-9]*@ests.ac.ma"
                                               placeholder="Exemple: XXX111@ests.ac.ma">
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">mot de passe</label>
                                        <div>
                                            <input required type="password" style="color:black;" id="password_p"
                                                   name="password_p" class="form-control"
                                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                                                   placeholder="Utiliser au moin 6 cratctéres contient des lettre en MAJ et des lettre en min et des chiffres">
                                            <span toggle="#password_p"
                                                  class="fa fa-fw fa-eye field-icon toggle-password"
                                                  style="float: right; margin-left: -25px; margin-top: -25px; position: relative; z-index: 2;"></span>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group">

                                        <label for="" style="color:#c21db7;">grade</label>

                                        <input required type="text" style="color:black;" id="grade_p" name="grade_p"
                                               class="form-control"
                                               pattern="[1-9]{1,2}" placeholder="grade de professeur">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="departement_id" style="color:#c21db7;">Departement</label>
                                        <?php $departement = \App\Departement::all()?>
                                        <select required name="departement_id" id="departement_id" class="form-control" size="3">
                                            @foreach($departement as $d)
                                                <option value={{$d->departement_id}}>{{$d->nom}}</option>
                                            @endforeach
                                        </select>
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

                                <form action="{{route('professeur.destroy','professeur_id')}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input required type="hidden" name="professeur_id" id="professeur_id">
                                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer ce
                                        professeur</p>


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
              <h5 class="modal-title" id="exampleModalLabel">Réstaurer professeur</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">

          <form action="{{action('ProfesseurController@restore')}}" method="POST">
                  @csrf
                <?php $profs['profs'] = App\professeur::onlyTrashed()->get();?>

            @foreach($profs['profs'] as $professeur)

                  <label class="switcher" style="margin-left:10px;">
                 <input name="prof[]" type="checkbox" value="{{$professeur->professeur_id}}"/>
                      <div class="switcher__indicator"></div>
                      <span style="font-size: 15px; color:black;">{{$professeur->nom}}</span>
                  </label><br>
                  <br>

             @endforeach



          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>

              <button type="submit" class="btn btn-success">Réstaurer</button>

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
<script>$(".toggle-password").click(function () {

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

        var button = $(event.relatedTarget)
        var cin = button.data('cin')
        var nom = button.data('nom')
        var prenom = button.data('prenom')
        var username = button.data('username')
        var email = button.data('email')
        var password = button.data('password')
        var grade = button.data('grade')
        var professeur_id = button.data('professeur_id')
        var departement_id = button.data('departement_id')

        var modal = $(this)

        modal.find('.modal-title').text('Modifier professeur');
        modal.find('.modal-body #cin_p').val(cin);
        modal.find('.modal-body #nom_p').val(nom);
        modal.find('.modal-body #prenom_p').val(prenom);
        modal.find('.modal-body #username_p').val(username);
        modal.find('.modal-body #email_p').val(email);
        modal.find('.modal-body #password_p').val(password);
        modal.find('.modal-body #grade_p').val(grade);
        modal.find('.modal-body #professeur_id').val(professeur_id);
        modal.find('.modal-body #departement_id option:selected').val(departement_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var professeur_id = button.data('professeur_id')


        var modal = $(this)

        modal.find('.modal-title').text('Supprimer professeur');

        modal.find('.modal-body #professeur_id').val(professeur_id);
    });

</script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
    $('#myTable').DataTable({
        "ordering": false,
        responsive: true,
        language:{
            url:"//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
        }

    });
</script>
<script>
    $(document).ready(function(){

        fetch_customer_data();

        function fetch_customer_data(query = '')
        {
            $.ajax({
                url:"{{ route('professeur.search') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(professeurs)
                {
                    $('tbody').html(professeurs.table_data);
                }
            })
        }

        $(document).on('click', '#search', function(){
            var query = $(this).val();
            fetch_customer_data(query);
        });
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

<script>
    $('#btn').click(function () {
        $('.table').table2excel({
            exclude: ".exclude",
            name: "Professseur",
            filename: "Professeur",
            fileext: ".xls",
        })
    });
</script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
</html>
