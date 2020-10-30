<?php

namespace App\Http\Controllers\Tarea;

use DB;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tarea;

class TareaController extends Controller
{
    private $form = 'create';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    	if ($request) {

            $tarea  = new Tarea();
            
			$tareas = Tarea::orderBy('id_tarea','Desc')
					->where('bool_estado','=','1')	
					->paginate(15);

    		return view('backend.pages.tarea.index_tarea',[
    			'tarea' 	=> $tarea,
    			'tareas' 	=> $tareas,
    			'form'      => $this->form
    		]);
    	}
    }

}
