    <?php
    session_start();


    if (isset($_SESSION['nome']) && isset($_SESSION['telefone']) && isset($_SESSION['cpf']) &&
        isset($_SESSION['endereco']) && isset($_SESSION['id']) && isset($_SESSION['cargo']) &&
        isset($_SESSION['salario']) && isset($_SESSION['dtnascimento'])) {


        echo '<h1>Relatório de Dados</h1>';
        echo '<p><strong>Nome:</strong> ' . htmlspecialchars($_SESSION['nome']) . '</p>';
        echo '<p><strong>Telefone:</strong> ' . htmlspecialchars($_SESSION['telefone']) . '</p>';
        echo '<p><strong>CPF:</strong> ' . htmlspecialchars($_SESSION['cpf']) . '</p>';
        echo '<p><strong>Endereço:</strong> ' . htmlspecialchars($_SESSION['endereco']) . '</p>';
        echo '<p><strong>ID:</strong> ' . htmlspecialchars($_SESSION['id']) . '</p>';
        echo '<p><strong>Cargo:</strong> ' . htmlspecialchars($_SESSION['cargo']) . '</p>';
        echo '<p><strong>Salário:</strong> R$ ' . htmlspecialchars($_SESSION['salario']) . '</p>';
        echo '<p><strong>Data de Nascimento:</strong> ' . htmlspecialchars($_SESSION['dtnascimento']) . '</p>';
    } else {
        echo 'Nenhum dado encontrado na sessão.';
    }
    ?>
