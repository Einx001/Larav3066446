<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function frmcuadratica(){

        return view('frm_cuadratica');

    }

    public function frmAdivinar(){
        return view('frm_Adivinar');
    }

    public function cuadratica(Request $request){


           $a= $request->a;
           $b= $request->b;
           $c= $request->c;

           $ecu1=$b*$b-(4*$a*$c);

           $raiz=sqrt($ecu1);

          if($ecu1>0 && $a!=0){

            $x1=(-$b+$raiz)/(2*$a);
            $x2=(-$b-$raiz)/(2*$a);

            echo "x1 es: $x1 <br> ";
            echo "x2 es: $x2";

          }
          else{

            echo "Ingrese otros valores...";

          }
    }

    public function adivinar(Request $request)
    {
        // Generamos un número aleatorio (solo una vez por sesión)
        if (!$request->session()->has('numero_secreto')) {
            $request->session()->put('numero_secreto', rand(1, 70));
        }

        $numeroSecreto = $request->session()->get('numero_secreto');
        $intento = $request->input('intento'); // número enviado por el usuario
        $mensaje = '';

        if ($intento) {
            if ($intento == $numeroSecreto) {
                $mensaje = "🎉 ¡Adivinaste el número $numeroSecreto!";
                // Reiniciar el juego
                $request->session()->forget('numero_secreto');
            } elseif ($intento < $numeroSecreto) {
                $mensaje = "El número secreto es MAYOR que $intento.";
            } else {
                $mensaje = "El número secreto es MENOR que $intento.";
            }
        }

        return view('frm_adivinar', compact('mensaje'));
    }
}