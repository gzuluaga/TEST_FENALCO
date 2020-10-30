<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * dev: Gustavo Zuluaga
 * date: 29102020
 * desc: controlador API
 */

// instancia 
use App\Models\Tarea;
use Validator;


class TareasController extends Controller
{   

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Metodo para mostrar tareas
     * @return [type] [description]
     */
    public function index()
    {
        $tarea = Tarea::get();


        return response()->json([
            "ok" => true,
            "data" => $tarea,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'str_descripcion'   => 'required|max:200',
            'str_autor'         => 'required|max:100',
            'str_estado'        => 'required|max:10',
            'dt_fecha_inicio'   => 'required|date',
            'dt_fecha_fin'      => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'ok' => false,
                'error' => $validator->messages(),
            ]);
        }

        try {
            Tarea::create($input);            

            return response()->json([
                "ok" => true,
                "mensaje" => "Se registro con exito",
            ]);

        } catch (\Exception $ex) {
            return response()->json([
                "ok" => false,
                "error" => $ex->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::findOrfail($id)->first();

        return response()->json([
            "ok" => true,
            "data" => $tarea,
        ]);
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
        $input = $request->all();

        $validator = Validator::make($input, [
            'str_descripcion'   => 'required|max:200',
            'str_autor'         => 'required|max:100',
            'str_estado'        => 'required|max:10',
            'dt_fecha_inicio'   => 'required|date',
            'dt_fecha_fin'      => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'ok' => false,
                'error' => $validator->messages(),
            ]);
        }

        try {
            $tarea = Tarea::find($id);

            if ($tarea == false) {
                return response()->json([
                    "ok" => false,
                    "error" => "No se encontro",
                ]);
            }

            $tarea->update($input);

            return response()->json([
                "ok" => true,
                "mensaje" => "Se modifico con exito",
            ]);

        } catch (\Exception $ex) {
            return response()->json([
                "ok" => false,
                "error" => $ex->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $tarea = Tarea::findOrfail($id);

            if ($tarea == false) {
                return response()->json([
                    "ok" => false,
                    "error" => "No se encontro",
                ]);
            }

            $tarea->update([
                'bool_estado' => 0,
            ]);

            return response()->json([
                "ok" => true,
                "mensaje" => "Se modifico con exito",
            ]);

        } catch (\Exception $ex) {
            return response()->json([
                "ok" => false,
                "error" => $ex->getMessage(),
            ]);
        }
    }
}
