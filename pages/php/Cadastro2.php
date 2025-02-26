<?php
include("conexao.php"); // Inclui o arquivo de conexão

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Captura e sanitiza os dados de entrada
    $nome = trim($_POST['nome']);
    $apelido = trim($_POST['apelido']);
    $data = trim($_POST['data']);
    $identidade = trim($_POST['identidade']);
    $nuit = trim($_POST['nuit']);
    $residencia = trim($_POST['residencia']);

    // Valida os campos obrigatórios
    if (empty($nome) || empty($apelido) || empty($data) || empty($identidade) || empty($nuit) || empty($residencia)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Validação do formato da data (opcional)
        $padraoData = "/^\d{4}-\d{2}-\d{2}$/"; // Formato YYYY-MM-DD
        if (!preg_match($padraoData, $data)) {
            echo "Formato de data inválido. Utilize o formato YYYY-MM-DD.";
        } else {
            try {
                // Prepara a consulta SQL para inserir os dados no banco
                $sql = "INSERT INTO cliente (nome, apelido, data, identidade, nuit, residencia) VALUES (:nome, :apelido, :data, :identidade, :nuit, :residencia)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":nome", $nome);
                $stmt->bindValue(":apelido", $apelido);
                $stmt->bindValue(":data", $data);
                $stmt->bindValue(":identidade", $identidade);
                $stmt->bindValue(":nuit", $nuit);
                $stmt->bindValue(":residencia", $residencia);

                // Executa a consulta
                $stmt->execute();

                echo "Cliente cadastrado com sucesso!";
            } catch (PDOException $e) {
                echo "Erro ao cadastrar cliente: " . $e->getMessage();
            }
        }
    }
}
?>
