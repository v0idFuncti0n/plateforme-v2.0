<?php

namespace App\Http\Controllers;

use App\Matiere;
use App\Professeur;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $matieres['matieres'] = Matiere::OrderBy('matiere_id', 'asc')->paginate(10);
        return view('matiere.index', $matieres);
    }
    public function search(Request $request){
        {
            if($request->ajax())
            {
                $output = '';
                $query = $request->get('query');
                if($query != '')
                {
                    $matiere = DB::table('matiere')
                        ->where('module_id',$query)
                        ->get();

                }
                else
                {
                    $matiere = DB::table('matiere')
                        ->get();
                }

                    foreach($matiere as $matie)
                    {
                        $output .= '  <tr>
                                                    <td>'.$matie->matiere_id.'</td>
                                                    <td>'.$matie->module_id.'</td>
                                                    <td>'.$matie->nom_matiere.'</td>
                                                    <td>'.$matie->volume_horaire.'</td>
                                                    <td>
                                                        <a data-matiere_id='.$matie->matiere_id.'
                                                           data-module_id='.$matie->module_id.'
                                                           data-nom_matiere='.$matie->nom_matiere.'
                                                           data-volume_horaire='.$matie->volume_horaire.'
                                                           data-toggle="modal"
                                                           data-target="#exampleModal-edit" type="button"
                                                           class="btn btn-warning btn-sm" style="width: 100px;">modifier</a>
                                                        <a data-matiere_id='.$matie->matiere_id.' data-toggle="modal"
                                                           data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
                                                    </td>
                                                </tr> ';
                    }
                }

                $matiere = array(
                    'table_data'  => $output,
                );

                echo json_encode($matiere);
            }
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
    public function restore(Request $request){

        matiere::withTrashed()->whereIn('matiere_id',(array_values($request->input('matiere'))) )->restore();
      return redirect()->back();
  }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $matiere = array(
            'nom_matiere' => $request->nom_matiere,
            'volume_horaire' => $request->volume_horaire,
            'module_id' => $request->module_id

        );

        $m = new Matiere($matiere);
        $p = Professeur::query()->findOrFail($request->professeur_id);
        $p->matiere()->save($m);
        return redirect()->route('matiere.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        $matiere = array(
            'nom_matiere' => $request->nom_matiere,
            'volume_horaire' => $request->volume_horaire,
            'module_id' => $request->module_id
        );

        Matiere::findOrFail($request->matiere_id)->update($matiere);
        return redirect()->route('matiere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $matiere)
    {
          if($matiere->but=='no'){
            $delete = $matiere->all();
            $deletematiere = Matiere::findOrfail($matiere->matiere_id);
            $deletematiere->delete();
            return redirect()->route('matiere.index');;}
            if($matiere->but=='dif'){
                matiere::find($matiere->matiere_id)->forceDelete();
                return redirect()->route('matiere.index');}
    }

    public function import(Request $request){
        Excel::import(new Matiere,request()->file('file'));
        return back();
    }
}
