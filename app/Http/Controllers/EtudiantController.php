<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $etudiants['etudiants'] = Etudiant::OrderBy('etudiant_id', 'asc')->paginate(10);
        return view('etudiant.index', $etudiants);
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
        // Get filename with the extension
        $image_array = $request->file('image');
  echo($request->file('image'));
        // Get just filename
        $filenameWithExt = $image_array->getClientOriginalName();
        $filename = $request->cin ;
        // Get just ext
        $extension = $image_array->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename .'.' . $extension;
        // Upload Image
            $nomfiliere=DB::table('filiere')->where('filiere_id', $request->filiere_id)->get('nom');
        $path = $image_array->storeAs('public/option_image/etudiant/'.$nomfiliere[0]->nom.'/'.$request->prenom.' '.$request->nom, $fileNameToStore);

        $etudiant = array(
            'cin' => $request->cin,
            'cne' => $request->cne,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'niveau_id' => $request->niveau_id,
            'filiere_id' => $request->filiere_id,
            'email_address' => $request->email_address,
            'numero' => $request->numero,
            'num_apologie' => $request->num_apologie,
            'image'=>$fileNameToStore,
        );
            Etudiant::create($etudiant);


        return redirect()->route('etudiant.index');

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

    public function searchniveau(Request $request){
        {
            if($request->ajax())
            {
                $output = '';
                $query = $request->get('query');
                $query1 = $request->get('query1');
                if($query != '' && $query1=='')
                {
                    $etudiants['etudiants'] = Etudiant::OrderBy('etudiant_id', 'asc')
                        ->where('niveau_id',$query)
                        ->get();

                }
                if($query =='' && $query1!='')
                {
                    $etudiants['etudiants'] = Etudiant::OrderBy('etudiant_id', 'asc')
                        ->where('filiere_id',$query1)
                        ->get();

                }
                if($query !='' && $query1!='')
                {
                    $etudiants['etudiants'] = Etudiant::OrderBy('etudiant_id', 'asc')
                        ->where('filiere_id',$query1)
                        ->where('niveau_id',$query)
                        ->get();

                }

                if($query == '' && $query1=='')
                {
                           $etudiants['etudiants'] = Etudiant::OrderBy('etudiant_id', 'asc')->paginate(10);

                }

                foreach($etudiants['etudiants'] as $etudiant)
                {
                    $output .= '<tr>

                                                     <td> </td>
                                                <td>'.$etudiant->cin.'</td>
                                                <td>'.$etudiant->niveau_id.'</td>
                                                <td>'.$etudiant->filiere_id.'</td>
                                                <td>'.$etudiant->cne.'</td>
                                                <td>'.$etudiant->nom.'</td>
                                                <td>'.$etudiant->prenom.'</td>
                                                <td>'.$etudiant->email_address.'</td>
                                                <td>'.$etudiant->numero.'</td>
                                                <td>'.$etudiant->num_apologie.'</td>
                                                <td class="exclude">
                                                    <a data-id='.$etudiant->etudiant_id.'
                                                       data-groupe_id='.$etudiant->groupe_id.'
                                                       data-cin='.$etudiant->cin.'
                                                       data-cne='.$etudiant->cne.'
                                                       data-nom='.$etudiant->nom.'
                                                       data-prenom= '.$etudiant->prenom.'
                                                       data-id_niveau='.$etudiant->niveau_id.'
                                                       data-id_filiere='.$etudiant->filiere_id.'
                                                       data-email_address= '.$etudiant->email_address .'
                                                       data-numero= '.$etudiant->numero.'
                                                       data-num_apologie='.$etudiant->num_apologie.'
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm" style="width: 100px">modifier</a>
                                                    <a data-id='.$etudiant->etudiant_id.'
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-delete" style="margin-top: 5px" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>';
                }
            }

            $etudiants = array(
                'table_data'  => $output,
            );
            echo json_encode($etudiants);

        }
    }
/*

    public function searchniveau(Request $request){
        {
            if($request->ajax())
            {
                $output = '';
                $query = $request->get('query');
                if($query != '')
                {
                    $etudiants = DB::table('etudiant')
                        ->where('niveau_id',$query)
                        ->get();

                }
                else
                {
                    $etudiants = DB::table('etudiant')
                        ->get();
                }

                foreach($etudiants as $etudiant)
                {
                    $output .= '                      <tr>
                                                <td> </td>
                                                <td>'.$etudiant->cin.'</td>
                                                <td>'.$etudiant->niveau_id.'</td>
                                                <td>'.$etudiant->filiere_id.'</td>
                                                <td>'.$etudiant->cne.'</td>
                                                <td>'.$etudiant->nom.'</td>
                                                <td>'.$etudiant->prenom.'</td>
                                                <td>'.$etudiant->email_address.'</td>
                                                <td>'.$etudiant->numero.'</td>
                                                <td>'.$etudiant->num_apologie.'</td>
                                                <td class="exclude">
                                                    <a data-id='.$etudiant->etudiant_id.'
                                                       data-groupe_id='.$etudiant->groupe_id.'
                                                       data-cin='.$etudiant->cin.'
                                                       data-cne='.$etudiant->cne.' data-nom='.$etudiant->nom.'
                                                       data-prenom= '.$etudiant->prenom.'
                                                       data-id_niveau='.$etudiant->niveau_id.'
                                                       data-id_filiere='.$etudiant->filiere_id.'
                                                       data-email_address= '.$etudiant->email_address .'
                                                       data-numero= '.$etudiant->numero.'
                                                       data-num_apologie='.$etudiant->num_apologie.'
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-edit" type="button"
                                                       class="btn btn-warning btn-sm" style="width: 100px">modifier</a>
                                                    <a data-id='.$etudiant->etudiant_id.'
                                                       data-toggle="modal"
                                                       data-target="#exampleModal-delete" style="margin-top: 5px" class="btn btn-danger btn-sm">supprimer</a>
                                                </td>
                                            </tr>';
                }
            }

            $etudiants = array(
                'table_data'  => $output,
            );

            echo json_encode($etudiants);
        }
    }

*/


    public function restore(Request $request){

        etudiant::withTrashed()->whereIn('etudiant_id',(array_values($request->input('etd'))) )->restore();
      return redirect()->back();
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
    public function update(Request $request,$id)
    {
        if($request->hasFile('image')){
            // Get filename with the extension
            $image_array = $request->file('image');

            // Get just filename
            $filenameWithExt = $image_array->getClientOriginalName();
            $filename = $request->cin ;
            // Get just ext
            $extension = $image_array->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename .'.' . $extension;
            // Upload Image
            $nomfiliere=DB::table('filiere')->where('filiere_id', $request->filiere_id)->get();
            $path = $image_array->storeAs('public/option_image/etudiant/'.$nomfiliere.'/'.$request->prenom.' '.$request->nom, $fileNameToStore);
            $etudiant = array(
                'cin' => $request->cin,
                'cne' => $request->cne,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'niveau_id' => $request->niveau_id,
                'filiere_id' => $request->filiere_id,
                'email_address' => $request->email_address,
                'numero' => $request->numero,
                'num_apologie' => $request->num_apologie,
                'image'=>$fileNameToStore,
            ); }
        else {
            $etudiant = array(
                'cin' => $request->cin,
                'cne' => $request->cne,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'niveau_id' => $request->niveau_id,
                'filiere_id' => $request->filiere_id,
                'email_address' => $request->email_address,
                'numero' => $request->numero,
                'num_apologie' => $request->num_apologie,
                'image'=>$request->image,
            );
        }
        Etudiant::findOrfail($request->id)->update($etudiant);
        return redirect()->route('etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $etudiant)
    {
        //



        if($etudiant->but=='no'){
            $delete = $etudiant->all();
            $deleteetudiant = Etudiant::findOrfail($etudiant->id);
            $deleteetudiant->delete();
            return redirect()->route('etudiant.index');
        }
            if($etudiant->but=='dif'){
                etudiant::find($etudiant->id)->forceDelete();
                $npmfil=DB::table('filiere')->where('filiere_id',$etudiant->filiere_id)->get();
                storage::delete('public/option_image'.$npmfil.'/'.$etudiant->prenom.' '.$etudiant->nom);
                return redirect()->route('etudiant.index');}
    }
    public function import(Request $request){
        Excel::import(new Etudiant,request()->file('file'));
        return back();
    }
}
