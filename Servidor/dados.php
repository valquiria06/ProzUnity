<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Usuário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('background/dados.png');
        }
        .container {
            background: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .text{

            text-align: left;

        }

        h1 {
            color: #651080;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
        }
        a {
            color: #007BFF;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #f05314;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: red;
        }
        .back-button {
            background-color: #f05314;
        }
        .back-button:hover {
            background-color: #ff6b30f1;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userData = JSON.parse(localStorage.getItem('userData'));
            let formattedDate = userData.DT_NASC.split('-').reverse().join('/');
            if (!userData) {
                window.location.href = 'index.php';
            } else {
                document.getElementById('user-username').textContent = userData.COD_ALUNO;
                document.getElementById('user-name').textContent = userData.nome;
                document.getElementById('user-email').textContent = userData.email;
                document.getElementById('user-telephone').textContent = userData.CEL;
                document.getElementById('user-cpf').textContent = userData.CPF;
                document.getElementById('user-birthdate').textContent = formattedDate;
                
                   }
        });

        function logout() {
            localStorage.removeItem('userData');
            window.location.href = 'index.php';
        }

        function goBack() {
            window.location.href = 'mural/mural.php';
        }
    </script>
</head>
<body>
    
    <div class="container">
        
     <h1>Dados Cadastrais</h1>
        <div class="text">
         <p><b style="color: #651080;">Code:</b> <span id="user-username"></span></p>
         <p><b style="color: #651080;">Nome:</b> <span id="user-name"></span></p>
         <p><b style="color: #651080;">Email:</b> <span id="user-email"></span></p>
         <p><b style="color: #651080;">Telefone:</b> <span id="user-telephone"></span></p>
         <p><b style="color: #651080;">Data de Nascimento:</b> <span id="user-birthdate"></span></p>
         <p><b style="color: #651080;">CPF:</b> <span id="user-cpf"></span></p>
        </div>
       
        
        <button onclick="logout()">Logout</button>
        <button class="back-button" onclick="goBack()">Voltar</button>
    </div>
</body>
</html>


