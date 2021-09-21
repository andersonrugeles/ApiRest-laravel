<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Person;

class PersonController extends Controller
{
    public function index(){
        try {
            $persons=Person::with(['nivel_educativos:id,nivel','tipo_documentos:id,tipo','profesions:id,nombre'])->paginate(20);
            return response()->json(['persons'=>$persons],200);
        } catch (\Throwable $th) {
            return response()->json(['error'=>$th->getMessage()]);
        }
    }
    public function store(Request $request){
        try {
            $person = new Person();
            $person->tipo_documento_id=$request->tipo_documento_id;
            $person->identificacion=$request->identificacion;
            $person->nombres=$request->nombres;
            $person->apellidos=$request->apellidos;
            $person->direccion=$request->direccion;
            $person->telefono=$request->telefono;
            $person->email=$request->email;
            $person->nivel_educativo_id=$request->nivel_educativo_id;
            $person->profesion_id=$request->profesion_id;
            $person->estado=$request->estado;
            $person->save();
            return $this->success_response($person);
        } catch (\Throwable $th) {
            return $this->error_response($th->getMessage());
        }
    }
    public function update(Request $request){
        try {
            $person=Person::find($request->id);
            if($request->tipo_documento_id)$person->tipo_documento_id=$request->tipo_documento_id;
            if($request->identificacion)$person->identificacion=$request->identificacion;
            if($request->nombres)$person->nombres=$request->nombres;
            if($request->apellidos)$person->apellidos=$request->apellidos;
            if($request->direccion)$person->direccion=$request->direccion;
            if($request->telefono)$person->telefono=$request->telefono;
            if($request->email)$person->email=$request->email;
            if($request->nivel_educativo_id)$person->nivel_educativo_id=$request->nivel_educativo_id;
            if($request->profesion_id)$person->profesion_id=$request->profesion_id;
            if($request->estado)$person->estado=$request->estado;
            $person->save();
            return $this->success_response($person);
        } catch (\Throwable $th) {
            return $this->error_response($th->getMessage());
        }

    }
    public function state(Request $request){
        try {
            $person=Person::find($request->id);
            $person->estado=$request->estado;
            $person->save();
            return $this->success_response($person);
        } catch (\Throwable $th) {
            return $this->error_response($th->getMessage());
        }

    }

    public function error_response($error){
        return response()->json(['message'=>'error','data'=>$error],501);
    }
    public function success_response($success){
        return response()->json(['message'=>'success','data'=>$success],201);
    }
}
