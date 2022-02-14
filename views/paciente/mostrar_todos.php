
<h1>Mis pacientes</h1>
<?php
foreach($todos_mis_pacientes as $fila) {

    foreach($fila as $campo=>$valor) {
        
        echo "$campo: $valor <br><br>";
    }
    echo '<hr>';
}