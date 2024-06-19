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

        @keyframes click-animation {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
        }
    </style>
</head>
<body>
<body>
    <div class="conteiner" >
       <div class="background">
        <div class="dados">
          <form id="loginForm" method="post" class="form" >
            <input type="text" id="username" placeholder="Usuário"> <p>
            <input type="password" id="password" placeholder="Login">
            <span class="toggle-password" onclick="togglePassword()">🐵mostrar a senha</span><p></p>
            <div class="g-recaptcha"  data-sitekey="6LfNPPwpAAAAAKOo5v16IPagUyMDHsG5sz-HFrRd"></div>
            <button class="entrar" type="submit" onclick="return validar()">Entrar</button>
            <!-- <button class="entrar" 
                data-sitekey="6LddOPwpAAAAAAkgoon7ZZiL1eKzO8XT0mwDGnyI" 
                data-callback='onSubmit' 
                data-action='submit'
                type="submit" >Submit</button> -->
            
          </form> 
        </div>
    </div>        

</body>

<script type='text/javascript'>
   function validar() {
     if (grecaptcha.getResponse() == ""){
        alert('Falha na verificação do reCAPTCHA. Por favor, tente novamente.');
        return false;
     }
   }



 </script>

<script>
   function valida() {
     if (grecaptcha.getResponse() == ""){
        alert("False");
        return false;
     }

   }
 </script>
 <?php
if (isset($_POST['enviar'])){
    print($_POST);

}
 ?>




    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.textContent = '🙈 esconder senha'; // Ícone de esconder senha
            } else {
                passwordInput.type = 'password';
                passwordIcon.textContent = '🐵 mostrar a senha '; // Ícone de mostrar senha
            }
        }

        document.getElementById('loginForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorMessage = document.getElementById('error-message');

            if (username === '' || password === '') {
                errorMessage.textContent = 'Por favor, preencha todos os campos.';
                return;
            }

            try {
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
                    // Armazena os dados do usuário no localStorage
                    localStorage.setItem('userData', JSON.stringify(data));
                    window.location.href = 'home.php';
                } else {
                    errorMessage.textContent = 'Usuário ou senha inválidos.';
                }
            } catch (error) {
                errorMessage.textContent = 'Erro ao conectar com o servidor. Tente novamente mais tarde.';
            }
        });
    </script>
</body>
</html>
