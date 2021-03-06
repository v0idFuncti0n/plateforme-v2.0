<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome-etudiant.welcome');
});

//Route::Resource('admin','Auth\AdminController');
Route::group(['middleware' => 'admin.auth'], function () {
    Route::resource('departement', 'DepartementController');
});
Route::get('create-question1/{test_id}', 'question@index2');

Route::get('create-text-libre/{test_id}', 'Text_libreController@index2')->name('create-text-libre.index');
Route::resource('create-text-libre', 'Text_libreController');


Route::get('/count', 'TestController@count');
Route::put('/setSession', 'TestController@setSession');
Route::redirect('/profauth', '/profauth/login');
Route::Resource('etudiant', 'EtudiantController')->middleware('admin.auth');
Route::Resource('filiere', 'FiliereController')->middleware('admin.auth');;
Route::Resource('filiereNiveau', 'FiliereNiveauController')->middleware('admin.auth');;
Route::Resource('matiere', 'MatiereController')->middleware('admin.auth');;
Route::Resource('matiereProf', 'MatiereProfController')->middleware('admin.auth');;
Route::Resource('module', 'ModuleController')->middleware('admin.auth');
Route::get('matieree', 'MatiereController@search')->name('matiere.search')->middleware('admin.auth');;
Route::get('professeur1', 'professeurController@search')->name('professeur.search')->middleware('admin.auth');;

Route::get('etudiant1', 'etudiantController@searchfiliere')->name('etudiant.searchfiliere')->middleware('admin.auth');;
Route::get('etudiant2', 'etudiantController@searchniveau')->name('etudiant.searchniveau')->middleware('admin.auth');;

Route::Resource('moduleFiliere', 'ModuleFiliereController')->middleware('admin.auth');;
Route::Resource('niveau', 'NiveauController')->middleware('admin.auth');;
Route::Resource('professeur', 'ProfesseurController')->middleware('admin.auth');;
Route::Resource('create-test', 'TestController');
Route::get('profauth/create-test/{prof}', 'TestController@index2')->name('create-test.index');

Route::resource('Resultat', 'ResultatController')->middleware('session');
Route::get('question/{test_id}/{session_id}', 'TestController@question')->middleware('session');
Route::get('reponses/{test_id}', 'TestController@reponses');
Route::get('result', 'ResultatController@test');
Route::get('test', 'TestController@index1');
Route::Resource('create-qcm', 'QCMController');
Route::get('create-question1/{test_id}', 'question@index2');
Route::Post('restore', 'DepartementController@restore');
Route::Post('restorefiliere', 'FiliereController@restore');
Route::Post('restoreEtudiant', 'EtudiantController@restore');
Route::Post('restoreNiveau', 'NiveauController@restore');
Route::Post('restoreProfesseur', 'ProfesseurController@restore');
Route::Post('restoreModule', 'ModuleController@restore');
Route::Post('restoreMatiere', 'MatiereController@restore');

Route::Resource('create-question', 'question');
Route::Resource('create-binaire', 'BinaireController');
Route::Post('create-binstore', 'BinaireController@store1');
Route::get('create-bin/{test_id}', 'BinaireController@index1');
Route::get('create-qcm1/{test_id}', 'QCMController@index2');
Route::get('create-qcm', 'QCMController@index1');
Route::get('create-qcm', 'QCMController@index1');
Route::get('select-question/{test_id}', 'question@select');
Route::Post('StoreSelected', 'question@StoreSelected');
Route::Post('rmv', 'departementController@remove');

Route::get('/session_pdf/{test}', 'TestController@export_pdf')->name('test.pdf');
Route::get('/note_pdf/{test}', 'TestController@note_export_pdf')->name('note.pdf');
Route::get('test/{s}', 'TestController@index1')->name('tests');

Route::resource('option', 'optionController');
Route::get('create-bin/option12/binaire/{binaire_id}', 'optionController@index1');
Route::get('create-qcm1/option/qcm/{question_id}', 'optionController@index2');

Route::post('session/facelogin', 'Auth\SessionController@facelogin')->name('facelogin');
Route::get('loginface', 'TestController@loginface')->name('session.loginface');
Route::get('session', 'Auth\SessionController@index')->name('session.index');
Route::post('session/login', 'Auth\SessionController@sessionLogin')->name('session.login');
Route::get('session/logout', 'Auth\SessionController@sessionLogout')->name('session.logout');
Route::get('admin', 'Auth\AdminController@index')->name('admin.index');
Route::post('admin/login', 'Auth\AdminController@adminLogin')->name('admin.login');
Route::post('admin/logout', 'Auth\AdminController@adminLogout')->name('admin.logout');

Route::get('profauth/login', 'Auth\ProfauthController@index')->name('profauth.login');
Route::post('profauth/test', 'Auth\ProfauthController@professeurLogin')->name('profauth.test');
Route::get('profauth/test', 'Auth\ProfauthController@professeurLogin')->name('profauth.test');
Route::get('profauth/logout', 'Auth\ProfauthController@professeurLogout')->name('profauth.logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('departement/import', 'departementController@import')->name('departement.import');
Route::post('etudiant/import', 'EtudiantController@import')->name('etudiant.import');
Route::post('filiere/import', 'FiliereController@import')->name('filiere.import');
Route::post('matiere/import', 'MatiereController@import')->name('matiere.import');
Route::post('module/import', 'ModuleController@import')->name('module.import');
Route::post('niveau/import', 'NiveauController@import')->name('niveau.import');
Route::post('professeur/import', 'ProfesseurController@import')->name('professeur.import');

Route::post('/profauth/test/random', 'question@RandomStoring');
Route::delete('/profauth/test/supprimer', 'TestController@destroy')->name('test.destroy');
Route::put('/profauth/test/modifier', 'TestController@update1');

Route::post('/reponses/note', 'ResultatController@storeFinal');
Route::put('profauth/reponses/note', 'ResultatController@update');
Route::post('resultat/note');

Route::get('/welcome-professeur', function () {
    return view('welcome-professeur.welcome');
})->name('welcome.professeur');
Route::get('/welcome-etudiant', function () {
    return view('welcome-etudiant.welcome');
});

Route::get('/manager-test/{prof_id}', function ($prof) {
    $p = \App\Professeur::query()->where('professeur_id', $prof)->first();
    return view('profauth.test')->with('prof', $p);
})->name('manager-test');

Route::post('/test/forceDelete/{test_id}', 'TestController@forceDelete');
Route::get('/create-test-restore', 'TestController@indexRestore');
Route::post('/create-test-restore', 'TestController@restoreTest')->name("test.restore");
Route::post('/create-test-forcedelete', 'TestController@forceDeleteMass')->name("test.forceDelete");

Route::post('/qcm/forceDelete', 'QCMController@forceDelete');
Route::get('/create-qcm-restore', 'QCMController@indexRestore');
Route::post('/create-qcm-restore', 'QCMController@restoreQCM')->name("qcm.restore");
Route::post('/create-qcm-forcedelete', 'QCMController@forceDeleteMass')->name("qcm.forceDelete");

Route::post('/bin/forceDelete', 'BinaireController@forceDelete');
Route::get('/create-bin-restore', 'BinaireController@indexRestore');
Route::post('/create-bin-restore', 'BinaireController@restoreBin')->name("bin.restore");
Route::post('/create-bin-forcedelete', 'BinaireController@forceDeleteMass')->name("bin.forceDelete");

Route::post('/text-libre/forceDelete', 'Text_libreController@forceDelete');
Route::get('/create-text-libre-restore', 'Text_libreController@indexRestore');
Route::post('/create-text-libre-restore', 'Text_libreController@restoreTextLibre')->name("text-libre.restore");
Route::post('/create-text-libre-forcedelete', 'Text_libreController@forceDeleteMass')->name("text-libre.forceDelete");

Route::post('/option/forceDelete', 'OptionController@forceDelete');
Route::get('/option-restore', 'OptionController@indexRestore');
Route::post('/option-restore', 'OptionController@restoreOption')->name("option.restore");
Route::post('/option-forcedelete', 'OptionController@forceDeleteMass')->name("option.forceDelete");

Route::get('/getfilieres/{id}','AjaxController@filieres');
Route::get('/getInfos/{filiere_id}/{niveau_id}','AjaxController@nombreDesEtudiantDansFiliereNiveau');

Route::post('/filiere-module/create','FiliereController@storeFromModule')->name('filiere.storeFromModule');

Route::post('question/validate','QuestionTempController@validation')->name('question.validation');
Route::post('question/discardAll','QuestionTempController@discardAll')->name('question.discard');

Route::get('/getMatiere/{module_id}','AjaxController@matiereDansModule');

Route::post('question/validateOf','QuestionTempController@validationOf')->name('question.validationOf');
