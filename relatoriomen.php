<?php
session_start(); // Inicia a sessão

// Verifica se os dados estão definidos na sessão
if (isset($_SESSION['nome']) && isset($_SESSION['cpf']) && isset($_SESSION['telefone']) &&
    isset($_SESSION['endereco']) && isset($_SESSION['veiculo']) && isset($_SESSION['placa']) &&
    isset($_SESSION['cor']) && isset($_SESSION['dtPagamento']) && isset($_SESSION['valorMensal'])) {

    // Exibe os dados
    echo '<h1>Relatório de Dados</h1>';
    echo '<p><strong>Nome:</strong> ' . htmlspecialchars($_SESSION['nome']) . '</p>';
    echo '<p><strong>CPF:</strong> ' . htmlspecialchars($_SESSION['cpf']) . '</p>';
    echo '<p><strong>Telefone:</strong> ' . htmlspecialchars($_SESSION['telefone']) . '</p>';
    echo '<p><strong>Endereço:</strong> ' . htmlspecialchars($_SESSION['endereco']) . '</p>';
    echo '<p><strong>Modelo do veículo:</strong> ' . htmlspecialchars($_SESSION['veiculo']) . '</p>';
    echo '<p><strong>Placa:</strong> ' . htmlspecialchars($_SESSION['placa']) . '</p>';
    echo '<p><strong>Cor do veículo:</strong> ' . htmlspecialchars($_SESSION['cor']) . '</p>';
    echo '<p><strong>Data de pagamento:</strong> ' . htmlspecialchars($_SESSION['dtPagamento']) . '</p>';
    echo '<p><strong>Valor Mensal:</strong> R$ ' . htmlspecialchars($_SESSION['valorMensal']) . '</p>';
} else {
    echo 'Nenhum dado encontrado na sessão.';
}
?>
