<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            background: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        input {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        #error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Usuário">
            <input type="password" id="password" placeholder="Senha">
            <button type="button" onclick="showPassword()">Mostrar senha</button>
            <button type="submit">Entrar</button>
        </form>
        <p id="error-message"></p>
    </div>
    <script>
        function showPassword() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
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
