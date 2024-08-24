<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 6</h1>
<form action="exer6.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas" class="form-label">Informe o total de horas previstas: </label>
            <input type="number" name="horas" id="horas" class="form-control"/>
        </div>
        <div class="col">
            <label for="taxa" class="form-label">Informe a taxa por hora dos funcionários: </label>
            <input type="number" name="taxa" id="taxa" class="form-control"/>
        </div>
        <div class="col">
            <label for="adicional" class="form-label">Informe o valor dos custos adicionais: </label>
            <input type="number" name="adicional" id="adicional" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger mt-3 mb-5">Calcular</button>
        </div>
    </div>
</form>

<?php

    if ($_POST){
        $horas = $_POST['horas'];
        $taxa = $_POST['taxa'];
        $adicional = $_POST['adicional'];
        echo CalcularCustoProjeto($horas, $taxa, $adicional);
    }

    require_once("rodape.php");