<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 7</h1>
<form action="exer7.php" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo" class="form-label">Informe o prazo para finalização do projeto: </label>
            <input type="number" name="prazo" id="prazo" class="form-control"/>
        </div>
        <div class="col">
            <label for="estabelecidas" class="form-label">Informe a quantidade de atividades estabelecidas: </label>
            <input type="number" name="estabelecidas" id="estabelecidas" class="form-control"/>
        </div>
        <div class="col">
            <label for="desenvolvidas" class="form-label">Informe a quantidade de atividades desenvolvidas: </label>
            <input type="number" name="desenvolvidas" id="desenvolvidas" class="form-control"/>
        </div>
        <div class="col">
            <label for="atividades_dia" class="form-label">Informe a quantidade de atividades que a equipe consegue desenvolver em um dia: </label>
            <input type="number" name="atividades_dia" id="atividades_dia" class="form-control"/>
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
        $prazo = $_POST['prazo'];
        $estabelecidas = $_POST['estabelecidas'];
        $desenvolvidas = $_POST['desenvolvidas'];
        $atividades_dia = $_POST['atividades_dia'];
        echo AvaliacaoDesempenhoProjeto($prazo, $estabelecidas, $desenvolvidas, $atividades_dia);
    }

    require_once("rodape.php");