<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    //Punto 1
    //El programa genera un número aleatorio del
    //1 al 70. El usuario debe adivinarlo.Por cada intento,
    //el programa le dice si el número es mayor o menor.

    public function frmAdivinar(){
        $numAleatorio = rand(1, 70);
        return view('frm_Adivinar', compact('numAleatorio'));
    }

    public function adivinar(Request $request)
    {   
        $numIngresado = $request->num;
        $numAleatorio = $request->numAleatorio;

        //echo "El numero que se genero es $numAleatorio <br>";
        //echo "El numero que ingresaste es $numIngresado <br>";

        if($numIngresado > $numAleatorio){
            echo "El numero a adivinar es menor de $numIngresado";
            return view('frm_Adivinar', compact('numAleatorio'));
        }
        if($numIngresado < $numAleatorio){
            echo "El numero a adivinar es mayor de $numIngresado";
            return view('frm_Adivinar', compact('numAleatorio'));
        }
        if($numIngresado == $numAleatorio){
            echo "Adivinaste el numero, el numero era $numAleatorio";
        }
    }

    //Punto 2: 
    //Ingresar un número del 1 al 10 y calcular
    //su factorial. Ejemplo el factorial de 4 es: 1*2*3*4
    public function frmFactorial(){
        return view('frm_Factorial');
    }

    public function factorial(Request $request){
        $num = $request->num;

        if($num > 10){
            echo "El numero debe ser menor a 10";
            return view('frm_Factorial');
        }

        $resultado = $this->hallarFactorial($num);

        echo "El factorial de $num es: $resultado";
    }

    function hallarFactorial($n) {
        $resultado = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }

    //Punto 3: 
    //Pedir 5 notas (de 0 a 5) y verificar que
    //sean válidas (dentro del rango).Mostrar promedio y si
    //aprobó (promedio ≥ 3).
    //Termina cuando acierta e imprime cuántos intentos usó.

    public function frmNotas(){
        return view('frm_Notas');
    }

    public function notas(Request $request){
        $nota1 = $request->num1;
        $nota2 = $request->num2;
        $nota3 = $request->num3;
        $nota4 = $request->num4;
        $nota5 = $request->num5;

        if($nota1 > 5){
            echo "Hay un error en la nota 1 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota2 > 5){
            echo "Hay un error en la nota 2 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota3 > 5){
            echo "Hay un error en la nota 3 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota4 > 5){
            echo "Hay un error en la nota 4 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota5 > 5){
            echo "Hay un error en la nota 5 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }

        $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5;

        echo "El promedio es: $promedio <br>";

        if($promedio < 3){
            echo "El estudiante no paso";
        } else {
            echo "El estudiante paso";
        }
    }

    //Punto 4: 
    //Pide un número del 1 al 10 y muestra su
    //tabla de multiplicar del 1 al 10.
    //Si el número está fuera del rango, mostrar mensaje de error.
    public function frmMultiplicar(){
        return view('frm_Multiplicar');
    }

    public function multiplicar(Request $request){
        $num = $request->num;

        if($num > 10){
            echo "El numero debe ser menor o igual a 10";
            return view('frm_Multiplicar');
        }

        $contador = 1;
        while($contador <= 10){
            $resultado = $num * $contador;
            echo "$num x $contador = $resultado <br>";
            $contador = $contador + 1;
        }
    }

    //Punto 5: 
    //Escribe un programa que genere 20 números
    //aleatorios de 1 al 70, se pide hallar y mostrar por
    //pantalla lo siguiente:
    //a. Contar números impares múltiplos de 8.
    //b. Promedio de los números pares.
    //c. El número mayor múltiplo de 7.
    //d. cuente cuantos números 6,11,17 se generaron.
    public function frm20Nums(){
        return view('frm_20Nums');
    }

    public function F20Nums(Request $request){
        $contador = 1;
        $pares = 0;
        $imparMul8 = 0;
        $mayorMul7 = 0;
        $num6 = 0;
        $num11 = 0;
        $num17 = 0;

        while($contador<=20){
            $numAleatorio = rand(1, 70);
            echo "numero $contador = $numAleatorio <br>";

            if($numAleatorio % 2 != 0 && $numAleatorio % 8 == 0){
                $imparMul8 = $imparMul8 + 1;
            }

            if($numAleatorio % 2 == 0){
                $pares = $pares + 1;
            }

            if($numAleatorio % 7 == 0 && $numAleatorio > $mayorMul7){
                $mayorMul7 = $numAleatorio;
            }

            if($numAleatorio == 6){
                $num6 = $num6 + 1;
            }

            if($numAleatorio == 11){
                $num11 = $num11 + 1;
            }

            if($numAleatorio == 17){
                $num17 = $num17 + 1;
            }

            $contador = $contador + 1;
        }

        echo "Numeros pares = $pares <br>";
        echo "Numeros impares multiplos de 8 = $imparMul8 <br>";
        echo "Mayor multiplo de 7 = $mayorMul7 <br>";
        echo "Cantidad de numeros 6 = $num6 <br>";
        echo "Cantidad de numeros 11 = $num11 <br>";
        echo "Cantidad de numeros 17 = $num17 <br>";
    }
}
