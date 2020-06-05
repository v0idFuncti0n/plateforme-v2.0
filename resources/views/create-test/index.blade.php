<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/styleinput.css")}}"/>
    <title></title>
    <script src="https://kit.fontawesome.com/2622940fba.js" crossorigin="anonymous"></script>
</head>
<body>
<?php $p1 = $p->professeur_id ?>
<div class="wrapper">

    <div id="wizard" class="wizard">
        <div class="wizard__content">
            <header class="wizard__header">
                <div class="wizard__header-overlay"></div>
                <div class="wizard__header-content">
                </div>
                <div class="wizard__steps">
                    <nav class="steps">
                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">1</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -start">
                                    </div>

                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">2</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">3</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">4</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step">
                            <div class="step__content">
                                <p class="step__number">5</p>
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>

                                <div class="lines">
                                    <div class="line -background">
                                    </div>

                                    <div class="line -progress">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <form id='createTest' action="{{action('TestController@store')}}" method='POST'>
                @csrf
                <input type="hidden" value="{{$p1}}" name="professeur_id">

                <div class="panels">
                    <div class="panel" style="margin-left: 10%;">
                        <section>
                            <div class="inner" style="display: flex;">

                                <div class="form-row" style="padding-right: 100px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <?php
                                            $departements = \App\departement::all();
                                            $first_dep = $departements->first();
                                            echo "<select type='text' size='1' style='width: 235px;margin-bottom:-50px' id='departement_id' name='departement_id'> ";
                                            foreach ($departements as $d) {
                                                $departement_id = $d->departement_id;
                                                echo "<option value='$departement_id'>$d->nom</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                            <span class="label" style="top: -30px; left:85px"
                                                  for="departement_id">Departement</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-right: 100px;">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <?php
                                            use App\filiere;
                                            $filieres = filiere::query()->where('departement_id',$departements->first()->departement_id)->get();
                                            echo "<select size='1' style='width: 235px;margin-bottom:-80px ' id='filiere_id' name='filiere_id'>";
                                            foreach ($filieres as $f) {
                                                $id_filiere = $f->filiere_id;
                                                echo "<option value=$id_filiere>$f->nom</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                            <span class="label" style="top:-30px; left:80px "
                                                  for="filiere_id">Filiere</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-right: 100px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <?php
                                            use App\Niveau;$niveaux = Niveau::all();
                                            echo "<select type='text' size='1' style='width: 235px;margin-bottom:-50px' id=niveau_id name=niveau_id> ";
                                            foreach ($niveaux as $n) {
                                                $niveau_id = $n->niveau_id;
                                                echo "<option value=$niveau_id>$n->nom</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                            <span class="label" style="top: -30px; left:85px"
                                                  for="niveau_id">Niveau</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>




                            </div>
                            <div class="inner" style="display: flex;">

                                <div class="form-row" style="padding-right: 100px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <?php

                                            use App\Matiere;
                                            use App\Matiere_prof;
                                            $id = [];
                                            $i = 0;
                                            $mtrs = DB::table('matiere_prof')->where('professeur_id', $p1)->get();?>
                                            @foreach($mtrs as $mtr)
                                                <?php $id[$i] = $mtr->matiere_id;
                                                $i++;
                                                ?>
                                            @endforeach
                                            <?php   $matiere = DB::table('matiere')->whereIn('matiere_id', $id)->get();?>

                                            <select type='text' size='1' style='width: 235px;' id="matiere_id"
                                                    name="matiere_id">
                                                @foreach ($matiere as $m)
                                                    <?php $matiere_id = intval($m->matiere_id);?>
                                                    <option value="{{$matiere_id}}">{{$m->nom_matiere}}</option>
                                                @endforeach
                                            </select>

                                            <span class="label" style="top: -30px; left:85px"
                                                  for="niveau_id">Matiere</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-right: 80px;">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" style='width: 92%;' name="nei"
                                                   id="nei" class="form-control" required>
                                            <span class="label" style="text-align: center;top:-15px">Nombre des étudiants inscrits </span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-right: 80px;">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <select class="form-control" name="type" id="type">
                                                <option value="1">Controle</option>
                                                <option value="2">Final</option>
                                                <option value="3">Ratrappage</option>
                                            </select>
                                            <span class="label" style="text-align: center;top:-15px">Type de test : </span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" style='width: 92%;' name="ng" id="ng">
                            </div>
                        </section>
                    </div>
                    <div class="panel">
                        <section>
                            <div class="inner" style="display: flex;align-items: stretch">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="nom" id="nom" class="form-control"
                                                   style="margin-left: -4px;width: 200%;" required>
                                            <span class="label" style="left:210px">Nom de test </span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display: flex;align-items: stretch">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                        <textarea rows="8" cols="33" name="discription" id="discription"
                                                  class="form-control" style="width: 130%;font-size: 20px"
                                                  required></textarea>
                                            <span class="label" style="left:210px;top: -200px">Discription</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="panel" style="margin-left: 18%;">
                        <section>
                            <div class="inner" style="display:flex;">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="note" id="note" class="form-control" required>
                                            <span class="label" style="left: 100px;">Barème</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <input type="number" name="duree" id="duree" class="form-control" required>
                                            <span class="label" style="left: 70px;">Durée(minute)</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display:flex;">

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="text" name="salle" id="salle" class="form-control" required>
                                            <span class="label" style="left: 100px;">Salle</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="date" style="font-size: 16px;width: 260px" name="date"
                                                   id="date"
                                                   class="form-control" required>


                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="panel" style="margin-left: 18%;">
                        <header class="panel__header">
                            <h2 class="panel__title" style="font-size: 19px;text-align: center">Entrez le nombre de
                                questions qui apprtienennet à chaque catégorie de difficulté</h2>
                        </header>
                        <section>
                            <div class="inner" style="display:flex;">
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d1" id="d1" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Trés facile</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2 form-control">
                                        <label class="form-row-inner">
                                            <input type="number" name="d2" id="d2" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Facile</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display:flex;">

                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d3" id="d3" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Moyen</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                                <div class="form-row" style="padding-left: 200px;">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d4" id="d4" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 100px;">Difficile</span>
                                            <span class="border"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="inner" style="display:flex;">

                                <div class="form-row" style="left: 260px">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            <input type="number" name="d5" id="d5" class="form-control" min="0"
                                                   required>
                                            <span class="label" style="left: 90px;">Trés Difficile</span>
                                            <span class="border"></span>

                                        </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="panel" style="margin-left: 18%;">
                        <header class="panel__header">
                            <h2 class="panel__title" style="font-size: 19px;text-align: center">Repartition des
                                groupes</h2>
                        </header>
                        <section>
                            <div class="inner" style="display:flex;">
                                <div class="form-row" style="left: 260px">
                                    <div class="form-holder form-holder-2">
                                        <label class="form-row-inner">
                                            Vous avez <span id="nombreDesEtudiant">0</span> etudiants dans filiere <span
                                                id="nomFiliere">?</span> niveau <span id="nomNiveau">?</span>
                                        </label>
                                        <br>
                                        <br>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <label for="inlineFormInput">Le nombre des etudiant par chaque groupe :</label>
                                                <input type="number" class="form-control mb-2" id="surDiv"
                                                       min="1" placeholder="20">
                                                <button type="button" class="btn btn-success" onclick="divide();">
                                                    Diviser
                                                </button>
                                            </div>
                                        </div>
                                        <div id="division">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="wizard__footer" style="justify-content: space-between">
                    <button type="button" class="button previous">Précedent</button>
                    <button type="button" id="save" class="button next">Suivant</button>
                </div>
            </form>
        </div>

        <h1 class="wizard__congrats-message">
            Un nouveau test est créé, n'oubliez pas de créer les questions!

        </h1>
    </div>

</div>
<script src="{{asset('js/script.js')}}"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $("document").ready(function () {
        getInfo();
        document.getElementById("surDiv").value = 20;

    });

    function getInfo() {
        let filiere = document.getElementById("filiere_id");
        let selectedF = filiere.options[filiere.selectedIndex].value;

        let niveau = document.getElementById("niveau_id");
        let selectedN = niveau.options[niveau.selectedIndex].value;


        $.ajax({
            type: 'GET',
            url: '/getInfos/' + selectedF + '/' + selectedN,
            data: {
                filiere_id: selectedF
                , niveau_id: selectedN
            },
            success: function (data) {
                let nf = $("#nomFiliere").empty();
                nf.text(data['filiere']);

                let nn = $("#nomNiveau").empty();
                nn.text(data['niveau']);

                let ne = $("#nombreDesEtudiant").empty();
                ne.text(data['etudiants_count']);

                let nei = document.getElementById('nei');
                nei.value = data['etudiants_count'];
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }

        });
    }

    function getFilieres(id) {
        $.ajax({
            type: 'GET',
            url: '/getfilieres/' + id,
            data: {id: id},
            success: function (data) {
                $("#filiere_id").empty();
                data.forEach(function (item) {
                    $("#filiere_id").append(item);
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        let division = document.getElementById("division");
        division.innerHTML = "";
    }

    function divide() {
        let division = document.getElementById('division');
        division.innerHTML = "";
        let nbpg = Number.parseInt(document.getElementById('surDiv').value);
        let nombreDesEtudiant = Number.parseInt(document.getElementById('nombreDesEtudiant').textContent);
        let nbbg = 1;
        let nbbe = nbpg;
        let nbg = Math.ceil(nombreDesEtudiant / nbpg);
        let nr = nombreDesEtudiant;
        for (let i = 1; i <= nbg; i++) {
            let html = "<label>Groupe " + i + " : de <span id=&#34;gb1&#34;>" + nbbg + "</span> jusqu&#39;a <span id=&#34;ge1&#34;>" + nbbe + "</span> </label> <br>";
            division.insertAdjacentHTML('beforeend', html);
            nbbg += nbpg;
            nr -= nbpg;
            if (nr < nbpg) {
                nbbe += nr;
            } else {
                nbbe += nbpg;
            }


        }

        let ng = document.getElementById('ng');
        ng.value = nbpg;
    }

    $("#departement_id").on('change', function () {
        getFilieres(this.value)
    });

    $("#filiere_id").on('change', function () {
        getInfo();
    });
    $("#niveau_id").on('change', function () {
        getInfo();
    });
</script>
</html>
