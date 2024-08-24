<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 5</h1>
<form action="exer5.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome do funcionário: </label>
            <input type="text" name="nome" id="nome" class="form-control"/>
        </div>
        <div class="col">
            <label for="dias" class="form-label">Informe a quantidade de dias trabalhados: </label>
            <input type="number" name="dias" id="dias" class="form-control"/>
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
        $nome = $_POST['nome'];
        $dias = $_POST['dias'];
        echo CalcularFerias($nome, $dias);
    }

    require_once("rodape.php");