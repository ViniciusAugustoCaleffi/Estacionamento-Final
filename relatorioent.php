<?php
session_start(); // Inicia a sessão

// Verifica se os dados estão definidos na sessão
if (isset($_SESSION['id']) && isset($_SESSION['data']) && isset($_SESSION['telefone']) &&
    isset($_SESSION['entrada']) && isset($_SESSION['saida']) && isset($_SESSION['placa'])) {

    // Exibe os dados
    echo '<h1>Relatório de Dados</h1>';
    echo '<p><strong>ID:</strong> ' . htmlspecialchars($_SESSION['id']) . '</p>';
    echo '<p><strong>Data:</strong> ' . htmlspecialchars($_SESSION['data']) . '</p>';
    echo '<p><strong>Telefone:</strong> ' . htmlspecialchars($_SESSION['telefone']) . '</p>';
    echo '<p><strong>Horário da Entrada:</strong> ' . htmlspecialchars($_SESSION['entrada']) . '</p>';
    echo '<p><strong>Horário da Saída:</strong> ' . htmlspecialchars($_SESSION['saida']) . '</p>';
    echo '<p><strong>Placa:</strong> ' . htmlspecialchars($_SESSION['placa']) . '</p>';
} else {
    echo 'Nenhum dado encontrado na sessão.';
}
?>
