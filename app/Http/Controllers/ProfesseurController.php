<?php

namespace App\Http\Controllers;

use App\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $professeurs['professeurs'] = Professeur::OrderBy('professeur_id', 'asc')->paginate(10);
        return view('professeur.index', $professeurs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professeur = array(
            'cin' => $request->cin_p,
            'nom' => $request->nom_p,
            'prenom' => $request->prenom_p,
            'username' => $request->username_p,
            'email' => $request->email_p,
            'password' => $request->password_p,
            'grade' => $request->grade_p,
            'departement_id' => $request->departement_id
        );

        Professeur::create($professeur);
        return redirect()->route('professeur.index');
    }

    public function restore(Request $request){

       Professeur::withTrashed()->whereIn('professeur_id',(array_values($request->input('prof'))) )->restore();
       return redirect()->back();
  }
    public function search(Request $request){
        {
            if($request->ajax())
            {
                $output = '';
                $query = $request->get('query');
                if($query != '')
                {
                    $professeurs = DB::table('professeur')
                        ->where('departement_id',$query)
                        ->get();

                }
                else
                {
                    $professeurs = DB::table('professeur')
                        ->get();
                }

                foreach($professeurs as $key => $professeur)
                {
                    $output .= ' <tr>
                                                <td class="exclude">'.++$key.'</td>
                                                <td>'.$professeur->cin.'</td>
                                                <td>'.$professeur->nom.'</td>
                                                <td>'.$professeur->prenom.'</td>
                                                <td>'.$professeur->username.'</td>
                                                <td>'.$professeur->email.'</td>
                                                <td>'.$professeur->password.'</td>
                                                <td>'.$professeur->grade.'</td>
                                                <td>'.$professeur->departement_id.'</td>
                                                <td class="exclude">
                                                    <a data-professeur_id='.$professeur->professeur_id.'
                                                       data-cin='.$professeur->cin.'
                                                       data-nom='.$professeur->nom.'
                                                       data-prenom='.$professeur->prenom.'
                                                       data-username='.$professeur->username.'
                                                       data-email='.$professeur->email.'
                                                       data-password='.$professeur->password.'
                                                       data-grade='.$professeur->grade.'
                                                       data-departement_id='.$professeur->departement_id.'
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm" style="width: 100px;">modifier</a>
                                                    <a data-professeur_id='.$professeur->professeur_id.' data-toggle="modal"
                                                       data-target="#exampleModal-delete" style="margin-top: 5px" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr> ';
                }
            }

            $professeurs = array(
                'table_data'  => $output,
            );

            echo json_encode($professeurs);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Professeur $professeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $professeur = array(

            'cin' => $request->cin_p,
            'nom' => $request->nom_p,
            'prenom' => $request->prenom_p,
            'username' => $request->username_p,
            'email' => $request->email_p,
            'password' => $request->password_p,
            'grade' => $request->grade_p,
            'departement_id' => $request->departement_id

        );

        Professeur::findOrfail($request->professeur_id)->update($professeur);
        return redirect()->route('professeur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $professeur)
    {
    if($professeur->but=='no'){
            $deleteprofesseur = Professeur::findOrfail($professeur->professeur_id);
            $deleteprofesseur->delete();
            return redirect()->route('professeur.index');}
            if($professeur->but=='dif'){
                professeur::find($professeur->professeur_id)->forceDelete();
                return redirect()->route('professeur.index');}
    }

    public function import(Request $request){
        Excel::import(new Professeur ,request()->file('file'));
        return back();
    }
}
