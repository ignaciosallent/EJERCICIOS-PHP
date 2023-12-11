<?php
/* Ignacio Sallent
EXERICI 3 - Matrius
Crea un script amd dues funcions, les matrius poden ser NxN 

Una altra que imprimeixMatrius
Una que sumi matrius 
Una altra que multipliqui matrius 
*/

/* -------------------------ESPAI PER DEFINIR VARIABLES -----------------------------*/
$matriz1 = array();
$matriz2 = array();
$matriz3 = array();

/* -------------------------ESPAI PER DEFINIR FUNCIONS ------------------------------*/

//PRIMER FEM UNA FUNCIÓ PER CREAR 2 MATRIUS:

function crearMatriz($N, $rangoMin = 1, $rangoMax = 10) {       //les generem amb numeros aleatoris, definim el rang màxim:
    $matriz = array();                                          // es dira $matriz, i serà una array

    for ($i = 0; $i < $N; $i++) {                               //iterem fins que $i sigui igual a $N (que es el que li passem com parametre)
        $fila = array();                                        // Iniciem una fila buida
        for ($j = 0; $j < $N; $j++) {
            $numeroAleatori = rand($rangoMin, $rangoMax);       //generem els numeros aleatoris
            $fila[] = $numeroAleatori;                          //els unim a cada registre de la fila
        }
        $matriz[] = $fila;                                      // Unim la fila a la matriu
    }
    return $matriz;                                             //retornem la matriu
}


//FEM UNA FUNCIÓ PER SUMAR DUES MATRIUS

function SumarMatrius($A, $B){              //primer comprobem que les dues tinguin les mateixes dimensions
    $filas = count($A);                      //comptem files de la matriu1
    $columnas = count($A[0]);                // comptem columnes de la matriu1
    
    if ($filas != count($B) || $columnas != count($B[0])){              //si el nº de files o columnes de la 2a matriu és diferent al de la primera --> ERROR
        echo "Error, les matrius no tenen les mateixes dimensions!";
        return null;                                                       // I retornem null
    }

    $matriz3 = array();                 //creem una array buida per ficar el resultat

    for ($i=0; $i < $filas; $i++) {                 //Iterem a cada fila de la matriu1, i sumem 1  a "i" per cada cop que passem    i=fila 
        $nova_fila = array();
        for ($j=0; $j < $columnas; $j++){           //Iterem a cada columna de la matriu1, i sumem 1 a "j" per cada cop que passem  j=columna
            $nou_valor = $A[i][j] + $B[i][j];        //Llavors hem de sumar matriu1[i][j] + matriu2[i][j] --> I ho fiquem a un nou valor
            $nova_fila[] = $nou_valor;              // Cada vegada que iterem un nou valor, creem una nova fila
        }
        $matriz3[] = $nova_fila;                    //I cada vegada que iterem noves files, fem la nova matriu!
    }
    return $matriz3;
};


// FUNCIÓ PER IMPRIMIR LA MATRIU:

function mostrarMatriz($matriz, $nom) {
    echo "<div style='float: left; margin-right: 20px;'>";       //fem un div, i mantenim la forma, 
    echo "<p>$nom</p>";                                         // Imprimim el nom
    echo '<table border="1" cellpadding="5" cellspacing="0">';  //PER FER UNA TAULA HTML

    foreach ($matriz as $fila) {                                   //per cada matriu dins la matriu, imprimeix una fila (i li assignem el valor $fila)
        echo '<tr>';
        foreach ($fila as $valor) {                                //per cada registre de cada fila, imprimeix una cel·la i el valor
            echo '<td>' . $valor . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
}



$matriz1 = crearMatriz(3);                       //GENEREM LA MATRIU-1
$matriz2 = crearMatriz(3);                       //GENEREM LA MATRIU-2
$matriz3 = SumarMatrius($matriz1, $matriz2);     //GENEREM LA MATRIU-3

mostrarMatriz($matriz1, "MATRIU-1");                         //MOSTREM LA MATRIU-1
mostrarMatriz($matriz2, "MATRIU-2");                         //MOSTREM LA MATRIU-2

echo '<div style="float: left; margin-top: 55px; margin-right: 20px;">+</div>';     //Imprimim el símbol "+" al centre de les dues martius

mostrarMatriz($matriz3, "MATRIU-3");                         //MOSTREM LA MATRIU-3

// FUNCIÓ PER MULTIPLICAR MATRIUS
function MultiplicarMatrius($A, $B){
    $filas = count($A);                      //comptem files de la matriu1
    $columnas = count($A[0]);                // comptem columnes de la matriu1
    
    if ($filas != count($B) || $columnas != count($B[0])){              //si el nº de files o columnes de la 2a matriu és diferent al de la primera --> ERROR
        echo "Error, les matrius no tenen les mateixes dimensions!";
        return null;                                                       // I retornem null
    }

    $matriz4 = array();                 //creem una array buida per ficar el resultat

    for ($i=0; $i < $filas; $i++) {                 //Iterem a cada fila de la matriu1, i sumem 1  a "i" per cada cop que passem    i=fila 
        $nova_fila = array();
        for ($j=0; $j < $columnas; $j++){           //Iterem a cada columna de la matriu1, i sumem 1 a "j" per cada cop que passem  j=columna
            $nou_valor = $A[i][j] * $B[i][j];        //Llavors hem de multiplicar matriu1[i][j] * matriu2[i][j] --> I ho fiquem a un nou valor
            $nova_fila[] = $nou_valor;              // Cada vegada que iterem un nou valor, creem una nova fila
        }
        $matriz4[] = $nova_fila;                    //I cada vegada que iterem noves files, fem la nova matriu!
    }
    return $matriz4;
};
echo "\n";
echo "\n";
echo "\n";

MultiplicarMatrius($matriz1, $matriz2);
mostrarMatriz($matriz4);

?>
