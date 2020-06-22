<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{

    public function index()
    {
        return view('session.login');
    }

    public function sessionLogin(Request $request)
    {
        /*$sessions = Session::all();
        foreach ($sessions as $session) {
            if (strcmp($session->username, $request->username)==0&& strcmp($session->password , $request->password)) {
                return redirect()->action('TestController@index1', ['s' => $session->session_id]);
            }
        }

        return redirect()->route('session');*/
        $username = $request->username;
        $password = $request->password;
        $etudiantSession = Session::query()->where('username','=',$request->username)->where('active','=',true)->count();
        if(intval($etudiantSession) > 0){
            $etudiantSessionPassArray = Session::query()->where('username','=',$request->username)->where('active','=',true)->get();
            foreach($etudiantSessionPassArray as $etudiantSessionPass) {

                if (strcmp($password, $etudiantSessionPass->password) == 0) {
                    if ($etudiantSessionPass->deleted == 1) {
                        return redirect()->route('session.index');
                    }
                    $request->session()->put('username', $username);
                    $request->session()->put('id', $etudiantSessionPass->session_id);
                    $request->session()->put('end', 'false');
                   // return redirect()->action('TestController@loginface', ['s' => $etudiantSessionPass->session_id]);
                       return view("session.loginface",["s"=>$etudiantSessionPass->session_id]);
                    //return redirect()->action('TestController@index1', ['s' => $etudiantSessionPass->session_id]);

                }

            }
            $error = "le nom d'utilisateur ou le mot de passe sont incorrects";
            return redirect()->route('session.index')->with('error', $error);
        }else{
            $error = "le nom d'utilisateur ou le mot de passe sont incorrects";
            return redirect()->route('session.index')->with('error',$error);
        }
    }
    public function facelogin(Request $request){

        $session= $request->input('session_id');

        return redirect()->action('TestController@index1', ['s' => $session]);

    }
    public function SessionLogout(Request $request){
        $request->session()->flush();
        return redirect()->route('session.index');
    }


}
