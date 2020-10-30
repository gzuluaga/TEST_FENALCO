<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Dev: Crhistian David Vargas
 * Desc: Este controlodor permite la gestion de perfil para el usuario
 * date: 29/10/2020
 */

/**
 * Cargamos los modelos a utilizar en este controlador
 */
use App\Models\User;
use Auth;

class ProfileController extends Controller
{	
	private $page = 'create';


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	if ($request) {

    		//miga de pan 
    		$title = 'Perfil';

    		/**
    		 * Validacion de los datos de usuario para llenar el formulario y modificar los datos
    		 */
    		$user = User::where('id','=',Auth::User()->id)->first();
  
    		return view('backend.pages.perfil.profile',[
    			'title' => $title,
    			'user'	=> $user,
    		]);
    	}
    }

}
