<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon"
    type="imagem/png"
    href="background/icons8-p-16.png">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <style>

        body, html{
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        font-family: Arial, sans-serif;
        align-items: center;
        background-size: cover;
        background-image: url('background/image.png');
        }

        .conteiner{

        background-color: transparent;
        width: 30rem;
        height: 100%;
        background-color:rgba(241, 116, 71, 0.555);
        opacity: 0.7;
        border-radius: 5%;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .background {

        width: 10%;
        background-color: white;
        text-align: center;
        border-radius: 6%;
        padding: 190px;
        margin: 0 auto;

        }

        .dados{

        display: flex;
        height: 95px;
        justify-content:center;
        align-items: center;
        }

        input{

        border: none;
        border-bottom: 1px solid #7115ad;
        width: 15rem;
        height: 3rem;
        border-radius: 10%;
        text-align: center;

        }

        ::-webkit-input-placeholder {
        text-align: center;
        }
        :-moz-placeholder {
        text-align: center; 
        }
        ::-moz-placeholder {
        text-align: center;
        }
        :-ms-input-placeholder {
        text-align: center; 
        }

        ::placeholder {
        font-size: 20px;
        text-align: center;
        opacity: 0.6; 
        }

        .toggle-password {
        position: relative;
        top: 40%;
        right: 0px;
        transform: translateY(-50%);
        cursor: pointer;
        }

        .entrar{

        border-radius: 20%;
        width:55%;
        border: none;
        border-bottom: 1px solid #7115ad;
        background-color: rgba(231, 129, 45, 0.993);
        padding: 10px 20px;
        font-size: 16px;
        color: white;
        margin-top: 55px;
        cursor: pointer;
        transition: transform 0.2s;

        }

        .entrar:active {
        transform: scale(0.9);
        }

        .entrar-clicked {
        animation: click-animation 0.4s forwards;
        }

        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(96, 21, 158, 0.473);
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 1000;
            display: none; /* Inicialmente oculto */
        }

        .spinner {
            width: 80px;
            height: 80px;
            border: 12px solid #651080;;
            border-top: 12px solid #f05314;
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-text {
            margin-top: 20px;
            font-size: 18px;
            color: #fff;
        }


    </style>
</head>
<body>
    <div id="loading-screen">
        <div class="spinner"></div>
        <p class="loading-text">Carregando...</p>
    </div>

    <div class="conteiner" >
       <div class="background">
        <div class="dados">
        <div class="form-container">
          <h1 class="fonte">LOGIN</h1>
          <form id="loginForm" method="post" class="form" >
            <input type="text" id="username" placeholder="Usuário"> <p>
            <input type="password" id="password" placeholder="Senha"><p></p>
            <span class="toggle-password" onclick="togglePassword()">🐵Mostrar Senha</span><p></p>
            <div class="g-recaptcha"  data-sitekey="6Ld7GAMqAAAAAK3b-9CA_CI64xHVfGCGEgjErwom"></div>
            <button class="entrar" type="submit" onclick="return validar()">Entrar</button>
            <p id="error-message"></p>          
          </form> 
        </div>  
        </div>
    </div>        
   
</body>

<script type='text/javascript'>
//aparecer reload    
function showLoadingScreen() {
document.getElementById('loading-screen').style.display = 'flex';
}
//desaparecer reload
function hideLoadingScreen() {
    document.getElementById('loading-screen').style.display = 'none';
}
//Valida se user ou senha esta em branco e valida captcha 
//e se estiver tudo certo faz conexao com api
async function validar() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');

    errorMessage.textContent = ''; // Limpa mensagens de erro anteriores

    if (username === '' || password === '') {
        errorMessage.textContent = 'Por favor, preencha todos os campos.';
        return false;
    }
    //Alerta recptcha desativado
    // if (grecaptcha.getResponse() == "") {
    //     alert('Falha na verificação do reCAPTCHA. Por favor, tente novamente.');
    //     return false;
    // }

    showLoadingScreen();
    //aki ele tenta conexao com api
    try {
                // Requisição para a API de login
                let response = await fetch('https://api.prozeducacao.com.br/v1/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        username: username,
                        password: password
                    })
                });

                let data = await response.json();
                






                
                if (response.ok) {
                    
                    // Dados do usuário obtidos da API, agora enviar para banco_query.php
                    let dbResponse = await fetch('banco_querys.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            action: 'upsertUsuario', // Indica que queremos chamar a função upsertUsuario
                            COD_ALUNO: data.username, // Ajuste conforme a estrutura do retorno da API
                            name: data.name, // Ajuste conforme a estrutura do retorno da API
                            login: username,
                            senha: password,
                            email: data.email // Ajuste conforme a estrutura do retorno da API
                        })
                    });

                    // Tratar a resposta da requisição
                    let dbData = await dbResponse.json();
                    
                    if (dbResponse.ok && dbData.status === 'success') {
                        window.location.href = 'mural/mural.php';
                    } else {
                        errorMessage.textContent = 'Erro ao salvar os dados no banco de dados.';
                        hideLoadingScreen();
                    }
                } else {
                    errorMessage.textContent = 'Usuário ou senha inválidos.';
                    hideLoadingScreen();
                }
            } catch (error) {
                console.error('Erro na requisição:', error);
                errorMessage.textContent = 'Erro ao conectar com o servidor. Tente novamente mais tarde.';
                hideLoadingScreen();
            }

            return false;
}
//start do formulario
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    validar();
});








    //esconder a senha
    function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.textContent = '🙈 Esconder Senha'; 
            } else {
                passwordInput.type = 'password';
                passwordIcon.textContent = '🐵 Mostrar Senha '; 
            }
        }


</script>
<?php
    if (isset($_POST['enviar'])){
        print($_POST);

    }
?>



</html>