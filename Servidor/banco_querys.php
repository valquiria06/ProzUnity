<?php
// Incluir arquivo de conexão com o banco de dados
include 'conexao.php';

// Receber os dados JSON
$data = json_decode(file_get_contents('php://input'), true);






// Função para inserir/atualizar usuário no banco de dados
function upsertUsuario($conn, $COD_ALUNO, $nome, $login, $senha, $email, $ADM, $CEL, $DT_NASC, $CPF, $LGPD, $IMAGEM_AVATAR) { 
    $sql = "INSERT INTO USUARIO 
            (COD_ALUNO, nome, login, senha, email, ADM, CEL, DT_NASC, CPF, LGPD, IMAGEM_AVATAR)   
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);  
    $stmt->bind_param('issssssssss', $COD_ALUNO, $nome, $login, $senha, $email, $ADM, $CEL, $DT_NASC, $CPF, $LGPD, $IMAGEM_AVATAR);    
    if ($stmt->execute()) {
        return ['status' => 'success'];
    } else {
        return ['status' => 'error', 'message' => $stmt->error];
    }
}


function getUserData($conn, $login) {
    $sql = "SELECT COD_ALUNO, nome, login, senha, email, ADM, CEL, DT_NASC, CPF,re_enroll_path, LGPD, IMAGEM_AVATAR FROM USUARIO WHERE login = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $login);
    
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();
            return [
                'COD_ALUNO' => $userData['COD_ALUNO'],
                'nome' => $userData['nome'],
                'login' => $userData['login'],
                'senha' => $userData['senha'], // Adicione os demais campos conforme necessário
                'email' => $userData['email'],
                'ADM' => $userData['ADM'],
                'CEL' => $userData['CEL'],
                'DT_NASC' => $userData['DT_NASC'],
                'CPF' => $userData['CPF'],
                're_enroll_path' => $userData['re_enroll_path'],
                'LGPD' => $userData['LGPD'],
                'IMAGEM_AVATAR' => $userData['IMAGEM_AVATAR']
            ];
        } else {
            return json_encode(['status' => 'error', 'message' => 'Usuário não encontrado.']);
        }
    } else {
        return json_encode(['status' => 'error', 'message' => $stmt->error]);
    }
}



// Função para verificar se o usuário já existe
function usuarioExiste($conn, $login, $senha) {
    $sql = "SELECT COUNT(*) AS count FROM USUARIO WHERE login = ? and senha = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $login, $senha);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row['count'] > 0) {
        return ['status' => 'success'];
    } else {
        return ['status' => 'false'];;
    }
    //return $row['count'] > 0;
}

// Verificar se a requisição é POST e se existe o parâmetro 'action' no JSON recebido
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['action'])) {
    // Extrair ação solicitada
    $action = $data['action'];

    // Executar ação correspondente
    if ($action === 'upsertUsuario') {
        // Extrair os dados para a função upsertUsuario
        $COD_ALUNO = $data['COD_ALUNO'];
        $ADM = $data['ADM'];
        $nome = $data['nome'];
        $login = $data['login'];
        $senha = $data['senha'];
        $email = $data['email'];
        $CEL = $data['CEL'];
        $DT_NASC = $data['DT_NASC']; 
        $CPF = $data['CPF'];
        $LGPD = $data['LGPD'];
        $IMAGEM_AVATAR = $data['IMAGEM_AVATAR'];

        // Chamar função para inserir/atualizar usuário
        $response = upsertUsuario($conn, $COD_ALUNO, $nome, $login, $senha, $email, $ADM, $CEL, $DT_NASC, $CPF, $LGPD, $IMAGEM_AVATAR);
    } elseif ($action === 'usuarioExiste') {
        // Extrair os dados para a função usuarioExiste
        $login = $data['login'];
        $senha = $data['senha'];

        // Chamar função para verificar se o usuário existe
        $response = usuarioExiste($conn, $login, $senha);

        
    } elseif ($action === 'getUserData') {
        // Extrair os dados para a função usuarioExiste
        $login = $data['login'];
        

        // Chamar função para verificar se o usuário existe
        $response = getUserData($conn, $login);

        
    } else {
        // Ação não reconhecida
        $response = ['status' => 'error', 'message' => 'Ação não reconhecida'];
    }
} else {
    // Caso não seja uma requisição POST válida ou não tenha ação especificada
    $response = ['status' => 'error', 'message' => 'Requisição inválida'];
}

// Enviar resposta como JSON
header('Content-Type: application/json');
echo json_encode($response);

// Fechar a conexão com o banco de dados
$conn->close();
?>
