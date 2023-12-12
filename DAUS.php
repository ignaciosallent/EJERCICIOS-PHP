//Matrices (1) 01 - Números
//Escriba un programa que muestre una tirada de dado al azar y escriba en letras el valor obtenido.
<?php
//DECLARACIO DE VARIABLES
$numero=rand(2, 7);

print "--------TIRADA DE DAUS----------";
echo "\n";

for ($i=0; $i<$numero; $i++){
    $dados[]= rand(1, 6);
};

print "  <h2>Resultado</h2>\n";
print "\n";
print "  <p>Los valores obtenidos son: ";
for ($i = 0; $i < $numero; $i++) {
    print "$dados[$i] ";
}
print "</p>\n";

?>