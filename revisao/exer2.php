<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 2</h1>
<form action="exer2.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_trabalhadas" class="form-label">Informe as horas trabalhadas no mês: </label>
            <input type="text" name="horas_trabalhadas" id="horas_trabalhadas" class="form-control" placeholder="HH:MM"/>
        </div>
        <div class="col">
            <label for="valor_hora" class="form-label">Informe o valor da hora: </label>
            <input type="number" name="valor_hora" id="valor_hora" class="form-control"/>
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
        $horas_trabalhadas = $_POST['horas_trabalhadas'];
        $valor_hora = $_POST['valor_hora'];
        echo CalcularSalarioSemanal($horas_trabalhadas, $valor_hora);
    }

    require_once("rodape.php");