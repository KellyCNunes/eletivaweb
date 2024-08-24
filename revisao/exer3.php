<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 3</h1>
<form action="exer3.php" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros" class="form-label">Informe o valor dos lucros acumulados da empresa: </label>
            <input type="number" name="lucros" id="lucros" class="form-control"/>
        </div>
        <div class="col">
            <label for="nome" class="form-label">Informe o nome do funcionário: </label>
            <input type="text" name="nome" id="nome" class="form-control"/>
        </div>
        <div class="col">
            <label for="escala" class="form-label">Informe o índice de escala: </label>
            <input type="number" name="escala" id="escala" class="form-control"/>
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
        $lucros = $_POST['lucros'];
        $nome = $_POST['nome'];
        $escala = $_POST['escala'];
        echo CalcularBonusAnual($lucros, $nome, $escala);
    }

    require_once("rodape.php");