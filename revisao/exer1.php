<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 1</h1>
<form action="exer1.php" method="post">
    <div class="row">
        <div class="col">
            <label for="hora_inicial" class="form-label">Informe a hora inicial: </label>
            <input type="time" name="hora_inicial" id="hora_inicial" class="form-control"/>
        </div>
        <div class="col">
            <label for="hora_final" class="form-label">Informe a hora final: </label>
            <input type="time" name="hora_final" id="hora_final" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger mt-3">Calcular</button>
        </div>
    </div>
</form>

<?php

    if ($_POST){
        $hora_inicial = $_POST['hora_inicial'];
        $hora_final = $_POST['hora_final'];
        echo TotalHorasTrabalhadas($hora_inicial, $hora_final);
    }

    require_once("rodape.php");