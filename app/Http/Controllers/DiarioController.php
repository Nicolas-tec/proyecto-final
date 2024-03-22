<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiarioController extends Controller
{
    public function index(){
        $datos = DB::select("SELECT * FROM diario");
        return view("diario")->with("datos",$datos);
    }
    public function create(Request $request){
        try {
            $sql=DB::insert("INSERT INTO diario(`Fecha`, `Nombre_paciente`, `Nombre_doctor`, `Enfermedad`, `Reporte_día`) VALUES (?,?,?,?,?)",[
                $request->Fecha,
                $request->Nombre_paciente,
                $request->Nombre_doctor,
                $request->Enfermedad,
                $request->Reporte_día
            ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("CORRECTO" , "nueva entrada ingresada");
        } else {
            return back()->with("ERROR", "entrada fallida");
        }
        
    }
    public function update(Request $request){
        try {
            $sql = DB::update("UPDATE diario SET Fecha=?, Nombre_paciente=?, Nombre_doctor=?, Enfermedad=?, Reporte_día=? WHERE id=?", [
                $request->Fecha,
                $request->Nombre_paciente,
                $request->Nombre_doctor,
                $request->Enfermedad,
                $request->Reporte_día,
                $request->id 
            ]);
            if ($sql==0) {
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("CORRECTO" , "entrada actualizada");
        } else {
            return back()->with("ERROR", "actualización fallida");
        }
    }
    public function delete($id){
        try {
            $sql=DB::delete("DELETE FROM diario WHERE id=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if ($sql == true) {
            return back()->with("CORRECTO" , "entrada eliminada");
        } else {
            return back()->with("ERROR", "entrada fallida");
        }
    }
    
}
