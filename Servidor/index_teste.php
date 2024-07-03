<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <input type="text" id="username" placeholder="Usuário" value="22689034867"> <p>
            <input type="password" id="password" placeholder="Senha" value="22689034867"><p></p>
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
// Mostrar tela de carregamento
function showLoadingScreen() {
    document.getElementById('loading-screen').style.display = 'flex';
}

// Esconder tela de carregamento
function hideLoadingScreen() {
    document.getElementById('loading-screen').style.display = 'none';
}

// Validar formulário de login
async function validar(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');

    errorMessage.textContent = ''; // Limpar mensagens de erro anteriores

    if (username === '' || password === '') {
        errorMessage.textContent = 'Por favor, preencha todos os campos.';
        return false;
    }

    showLoadingScreen();

    try {
            // Verificar se o usuário existe no banco de dados local
            
            let localResponse = await fetch('banco_querys.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                            action: 'usuarioExiste',
                            COD_ALUNO: '',
                            ADM: '',
                            nome: '',
                            login: username,
                            senha: password,
                            email: '',
                            CEL: '',
                            DT_NASC: '', 
                            CPF: '',
                            LGPD: '',
                            IMAGEM_AVATAR: ''
                    })
                
            });
            
            if (!localResponse.ok) {
                throw new Error('Erro na requisição HTTP: ' + localResponse.status);
            }
            let localData = await localResponse.json();
            
            if (localResponse.ok && localData.status === 'success' ) {
                //puxa as informacoes do usuario
                let localResponse_user = await fetch('banco_querys.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                            action: 'getUserData',
                            login: username                            
                    })
                
            });
            
            let localData_user = await localResponse_user.json();
            localStorage.setItem('userData', JSON.stringify(localData_user));
            const userData = JSON.parse(localStorage.getItem('userData'));
       
            
            window.location.href = 'mural/mural.php';
            } else {
                // Tentar autenticar via API externa
                let apiResponse = await fetch('https://api.prozeducacao.com.br/v1/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        username: username,
                        password: password
                    })
                });

                let apiData = await apiResponse.json();
                
                
               
                

                localStorage.setItem('userData', JSON.stringify(apiData));
                const userData = JSON.parse(localStorage.getItem('userData'));
                        
                let birthdate = apiData.birthdate; // Assuming this is in DD/MM/YYYY format
                let formattedDate = birthdate.split('/').reverse().join('-');
                
                
                if (apiResponse.ok) {
                    
                    // Atualizar dados no banco local com a resposta da API
                    let dbResponse = await fetch('banco_querys.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            action: 'upsertUsuario',
                            COD_ALUNO: apiData.username,
                            ADM: 'N',
                            nome: apiData.name,
                            login: username,
                            senha: password,
                            email: apiData.email,
                            CEL: apiData.telephone,
                            DT_NASC: formattedDate, 
                            CPF: apiData.cpf,
                            re_enroll_path: '', 
                            LGPD: '',
                            IMAGEM_AVATAR: 0
                        })
                    });
                    
                    let dbData = await dbResponse.json();

                    if (dbResponse.ok && dbData.status === 'success') {

                        let localResponse_user = await fetch('banco_querys.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                        action: 'getUserData',
                                        login: username                            
                                })
                            
                        });
            
                        let localData_user = await localResponse_user.json();
                        localStorage.removeItem('userData');
                        localStorage.setItem('userData', JSON.stringify(localData_user));
                        const userData = JSON.parse(localStorage.getItem('userData'));
                        window.location.href = 'mural/mural.php';
                    } else {
                        errorMessage.textContent = 'Erro ao salvar os dados no banco de dados.';
                        hideLoadingScreen();
                    }
                } else {
                    errorMessage.textContent = 'Usuário ou senha inválidos.';
                    hideLoadingScreen();
                }
            }
} catch (error) {
    console.error('Erro na requisição:', error);
    errorMessage.textContent = 'Erro ao conectar com o servidor. Tente novamente mais tarde.';
    hideLoadingScreen();
}





    return false;
}

// Iniciar validação do formulário quando enviado
document.getElementById('loginForm').addEventListener('submit', validar);

// Alternar visibilidade da senha
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const passwordIcon = document.querySelector('.toggle-password');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordIcon.textContent = '🙈 Esconder Senha';
    } else {
        passwordInput.type = 'password';
        passwordIcon.textContent = '🐵 Mostrar Senha';
    }
}

</script>
<?php
    if (isset($_POST['enviar'])){
        print($_POST);

    }
?>



</html>