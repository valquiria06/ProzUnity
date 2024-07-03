<?php
// Dados a serem enviados para o script PHP de inserção/atualização
$data = array(
    'action' =>     'getMural',
    'login' =>      '22689034867'

    
    
    
    
);

// URL do seu script PHP de inserção/atualização
$url = 'http://prozunity.sytes.net/ProzUnity/Servidor/banco_querys.php';

// Configuração do POST
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);

// Criar contexto HTTP
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Verificar se a requisição foi bem sucedida
if ($response === false) {
    echo "Erro ao enviar requisição.\n";
} else {
    echo "Resposta do servidor:\n";
    var_dump(json_decode($response, true));
}
?>






                    
