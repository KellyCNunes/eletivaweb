<?php

    function TotalHorasTrabalhadas($hora_final, $hora_inicial) {
        $hora_inicial = new DateTime($hora_inicial);
        $hora_final = new DateTime($hora_final);
        $diferenca = $hora_final->diff($hora_inicial);
        return "A diferença de horário: " . $diferenca->format("%h:%I");
    }

    function CalcularSalarioSemanal($horas_trabalhadas, $valor_hora) {
        return "O salário semanal é de R$ " . number_format(($horas_trabalhadas * $valor_hora) / 4.5, 2, ',', '.');
    }

    function CalcularBonusAnual($lucros, $nome, $escala) {
        if ($escala >= 1 and $escala <= 5)
            return "O valor do bônus do funcionário " . $nome . " é de: R$" . $lucros * ($escala / 10);
        else
            return "Informe um índice de escala válido!";
    }

    function RealizacaoTarefa($nome_tarefa, $horas_tarefa, $complexidade, $nome_funcionario, $horas_disponiveis, $experiencia) {
        if ($horas_disponiveis < $horas_tarefa * 1.1) {
            return "O total de horas do funcionário " . $nome_funcionario . " é insuficiente para a realização da tarefa " . $nome_tarefa . "!";
        } else if (($experiencia == 'junior' && $complexidade != 'facil') ||  ($experiencia == 'pleno' && $complexidade == 'dificil') || ($experiencia == 'senior' && $complexidade == 'facil')) {
            return "Um funcionário com nível de experiência " . $experiencia . " não pode assumir uma tarefa de complexidade " . $complexidade . "!";
        } else {
            return "Dados da candidatura à realização da tarefa:<br>
                    <br>Nome da tarefa: " . $nome_tarefa . "<br>
                    Horas da tarefa: " . $horas_tarefa . "<br>
                    Complexidade da tarefa: " . $complexidade . "<br>
                    Nome do funcionário candidato: " . $nome_funcionario . "<br>
                    Horas Disponíveis do funcionário: " . $horas_disponiveis . "<br>
                    Experiencia: " . $experiencia;
        }
    }

    function CalcularFerias($nome, $dias) {
        $dias_ferias = intval($dias / 30);

        if ($dias_ferias > 30) {
            $dias_ferias = 30;
        }

        return "O total de férias que o funcionário " . $nome . " pode tirar é: " . $dias_ferias;
    }

    function CalcularCustoProjeto($horas, $taxa, $adicional) {
        $custo_mo = $horas * $taxa;
        $custo_total = $custo_mo + $adicional;

        return "O custo de mão de obra do projeto é de: R$" . $custo_mo . "<br>
                O custo total do projeto é de: R$" . $custo_total;
    }

    function AvaliacaoDesempenhoProjeto($prazo, $estabelecidas, $desenvolvidas, $atividades_dia) {
        $atividades_restantes = $estabelecidas - $desenvolvidas;
        $dias_necessarios = ceil($atividades_restantes / $atividades_dia);

        if ($atividades_restantes <= 0) {
            return "Todas as atividades foram concluídas!";
        } else if ($dias_necessarios <= $prazo) {
            return "O projeto está dentro do prazo. Faltam " . $prazo - $dias_necessarios . " dias!";
        } else {
            return "O projeto está atrasado. Dias necessários: " . $dias_necessarios;
        }
    }