<?php
// Incluir arquivo de conexão com o banco de dados
include 'conexao.php';

// Receber os dados JSON
$data = json_decode(file_get_contents('php://input'), true);

// Função para inserir/atualizar usuário no banco de dados
function upsertUsuario($conn, $COD_ALUNO, $nome, $login, $senha, $email, $ADM, $CEL, $DT_NASC, $CPF, $re_enroll_path,  $LGPD, $IMAGEM_AVATAR) { 
    $sql = "INSERT INTO USUARIO 
            (COD_ALUNO, nome, login, senha, email, ADM, CEL, DT_NASC, CPF, re_enroll_path, LGPD, IMAGEM_AVATAR)   
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);  
    $stmt->bind_param('isssssssssss', $COD_ALUNO, $nome, $login, $senha, $email, $ADM, $CEL, $DT_NASC, $CPF, $re_enroll_path,  $LGPD, $IMAGEM_AVATAR);    
    if ($stmt->execute()) {
        return ['status' => 'success'];
    } else {
        return ['status' => 'error', 'message' => $stmt->error];
    }
}

function upsertMural($conn, $login, $Dt_msg, $MSG, $DT_COMPLETA) { 
    $sql = "INSERT INTO MURAL (`id_login`, `DT_MSG`, `MSG`, `DT_COMPLETA`) 
        VALUES ( ?, ?, ?, ?)
        ";


    $stmt = $conn->prepare($sql);  
    $stmt->bind_param('ssss', $login, $Dt_msg, $MSG, $DT_COMPLETA);    
    if ($stmt->execute()) {
        return ['status' => 'success'];
    } else {
        return ['status' => 'error', 'message' => $stmt->error];
    }
}



//BUSCAR DADOS DO CLIENTE NO BANCO
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



//mural recados no banco
function getMural($conn, $login) {
    $sql = "SELECT USUARIO.NOME, CONVERT(MURAL.MSG USING utf8) AS MSG_TEXT, MURAL.DT_COMPLETA 
            FROM MURAL 
            INNER JOIN USUARIO ON MURAL.id_login = USUARIO.LOGIN 
            ORDER BY MURAL.ID DESC ";

    $stmt = $conn->prepare($sql);
    //$stmt->bind_param('s', $login);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = [
                    'nome' => $row['NOME'],
                    'msg_text' => $row['MSG_TEXT'],
                    'dt_completa' => $row['DT_COMPLETA']
                ];
            }
            return [
                'status' => 'success',
                'data' => $data
            ];
        } else {
            return [
                'status' => 'error',
                'message' => 'Nenhum registro encontrado.'
            ];
        }
    } else {
        return [
            'status' => 'error',
            'message' => $stmt->error
        ];
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
//FUNCAO ALTERAR AVATAR
function upsertfoto($conn, $IMAGEM_AVATAR, $login) { 
    $sql = "UPDATE `railway`.`USUARIO` SET `IMAGEM_AVATAR` = ? WHERE `LOGIN` = ?;";
    $stmt = $conn->prepare($sql);  
    $stmt->bind_param('ss', $IMAGEM_AVATAR, $login);    
    if ($stmt->execute()) {
        return ['status' => 'success'];
    } else {
        return ['status' => 'error', 'message' => $stmt->error];
    }
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
        $re_enroll_path = $data['re_enroll_path'];
        $LGPD = $data['LGPD'];
        $IMAGEM_AVATAR = $data['IMAGEM_AVATAR'];

        // Chamar função para inserir/atualizar usuário
        $response = upsertUsuario($conn, $COD_ALUNO, $nome, $login, $senha, $email, $ADM, $CEL, $DT_NASC, $CPF, $re_enroll_path,  $LGPD, $IMAGEM_AVATAR);
    } 
    elseif ($action === 'usuarioExiste') {
        // Extrair os dados para a função usuarioExiste
        $login = $data['login'];
        $senha = $data['senha'];

        // Chamar função para verificar se o usuário existe
        $response = usuarioExiste($conn, $login, $senha);

        
    } 
    elseif ($action === 'getUserData') {
        // Extrair os dados para a função usuarioExiste
        $login = $data['login'];
        

        // Chamar função para verificar se o usuário existe
        $response = getUserData($conn, $login);

        
    }
    elseif ($action === 'upsertfoto') {
        // Extrair os dados para a função usuarioExiste
        $login = $data['login'];
        $IMAGEM_AVATAR = $data['IMAGEM_AVATAR'];

        // Chamar função para verificar se o usuário existe
        $response = upsertfoto($conn, $IMAGEM_AVATAR, $login);

        
    }
    elseif ($action === 'getMural') {
        // Extrair os dados para a função usuarioExiste
        $login = $data['login'];
        

        // Chamar função para verificar se o usuário existe
        $response = getMural($conn, $login);

        
    } 
    elseif ($action === 'upsertMural') {
        // Extrair os dados para a função usuarioExiste
        $login = $data['login'];
        $Dt_msg = $data['Dt_msg'];
        $MSG = $data['MSG'];
        $DT_COMPLETA = $data['DT_COMPLETA'];



        

        // Chamar função para verificar se o usuário existe
        $response = upsertMural($conn, $login, $Dt_msg, $MSG, $DT_COMPLETA);

        
    }
    else {
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
