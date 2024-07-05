<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPI da Proz</title>
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .form-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 5px;
            display: block;
        }

        .form-input {
            width: 90%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-input_cod {
            width: 20%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
        }

        .form-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">API da Proz</h2>
        <form id="consultaForm">
            <div class="form-group">
                <label for="numero" class="form-label">Número:</label>
                <input type="text" id="numero" name="numero" class="form-input_cod" required>
            </div>
            <button type="submit" class="form-button">Consultar</button>
        </form>

        <div id="resultado" class="form-group">
            <!-- Aqui serão exibidos os resultados da consulta -->
        </div>
    </div>

    <script>
        document.getElementById('consultaForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            let numero = document.getElementById('numero').value;
            let url = `https://api.prozeducacao.com.br/v1/users/${numero}/profile`;

            try {
                let response = await fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjY4OTY0LCJpYXQiOjE3MjAxNDczNTUsImV4cCI6MTcyMDE2NTM1NX0.yzEllqbGcKQmKISRJEC1cSK_fsgkPCxs4kaxiY42nh8'
                    }
                });

                if (response.ok) {
                    let data = await response.json();
                    let resultadoHtml = `
    <div class="form-group">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" id="name" name="name" class="form-input" value="${data.name || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="social_name" class="form-label">Nome Social:</label>
        <input type="text" id="social_name" name="social_name" class="form-input" value="${data.social_name || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="email" class="form-label">Email:</label>
        <input type="text" id="email" name="email" class="form-input" value="${data.email || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="civil_status" class="form-label">Estado Civil:</label>
        <input type="text" id="civil_status" name="civil_status" class="form-input" value="${data.civil_status ? data.civil_status.name : ''}" readonly>
    </div>
    <div class="form-group">
        <label for="telephone" class="form-label">Telefone:</label>
        <input type="text" id="telephone" name="telephone" class="form-input" value="${data.telephone || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="cell_phone" class="form-label">Celular:</label>
        <input type="text" id="cell_phone" name="cell_phone" class="form-input" value="${data.cell_phone || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="zip_code" class="form-label">CEP:</label>
        <input type="text" id="zip_code" name="zip_code" class="form-input" value="${data.zip_code || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="state" class="form-label">Estado:</label>
        <input type="text" id="state" name="state" class="form-input" value="${data.state ? data.state.name : ''}" readonly>
    </div>
    <div class="form-group">
        <label for="address" class="form-label">Endereço:</label>
        <input type="text" id="address" name="address" class="form-input" value="${data.address || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="number" class="form-label">Número:</label>
        <input type="text" id="number" name="number" class="form-input" value="${data.number || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="complement" class="form-label">Complemento:</label>
        <input type="text" id="complement" name="complement" class="form-input" value="${data.complement || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="city" class="form-label">Cidade:</label>
        <input type="text" id="city" name="city" class="form-input" value="${data.city || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="district" class="form-label">Bairro:</label>
        <input type="text" id="district" name="district" class="form-input" value="${data.district || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="birth_date" class="form-label">Data de Nascimento:</label>
        <input type="text" id="birth_date" name="birth_date" class="form-input" value="${data.birth_date || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="sex" class="form-label">Sexo:</label>
        <input type="text" id="sex" name="sex" class="form-input" value="${data.sex || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" id="cpf" name="cpf" class="form-input" value="${data.cpf || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="rg" class="form-label">RG:</label>
        <input type="text" id="rg" name="rg" class="form-input" value="${data.rg || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="rg_state" class="form-label">Estado Emissor RG:</label>
        <input type="text" id="rg_state" name="rg_state" class="form-input" value="${data.rg_state || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="rg_dispatcher" class="form-label">Órgão Emissor RG:</label>
        <input type="text" id="rg_dispatcher" name="rg_dispatcher" class="form-input" value="${data.rg_dispatcher || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="rg_dispatch_date" class="form-label">Data Emissão RG:</label>
        <input type="text" id="rg_dispatch_date" name="rg_dispatch_date" class="form-input" value="${data.rg_dispatch_date || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="student_registration" class="form-label">Matrícula Estudantil:</label>
        <input type="text" id="student_registration" name="student_registration" class="form-input" value="${data.student_registration || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="place_of_birth_state" class="form-label">Estado de Nascimento:</label>
        <input type="text" id="place_of_birth_state" name="place_of_birth_state" class="form-input" value="${data.place_of_birth_state || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="place_of_birth_city" class="form-label">Cidade de Nascimento:</label>
        <input type="text" id="place_of_birth_city" name="place_of_birth_city" class="form-input" value="${data.place_of_birth_city || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="race" class="form-label">Raça:</label>
        <input type="text" id="race" name="race" class="form-input" value="${data.race || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="disability_type" class="form-label">Tipo de Deficiência:</label>
        <input type="text" id="disability_type" name="disability_type" class="form-input" value="${data.disability_type || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="inep_code" class="form-label">Código INEP:</label>
        <input type="text" id="inep_code" name="inep_code" class="form-input" value="${data.inep_code || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="nationality" class="form-label">Nacionalidade:</label>
        <input type="text" id="nationality" name="nationality" class="form-input" value="${data.nationality || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="father" class="form-label">Nome do Pai:</label>
        <input type="text" id="father" name="father" class="form-input" value="${data.father || ''}" readonly>
    </div>
    <div class="form-group">
        <label for="mother" class="form-label">Nome da Mãe:</label>
        <input type="text" id="mother" name="mother" class="form-input" value="${data.mother || ''}" readonly>
    </div>
    
`;

                    document.getElementById('resultado').innerHTML = resultadoHtml;
                } else {
                    document.getElementById('resultado').innerHTML = '<p class="form-label">Erro ao consultar a API.</p>';
                }
            } catch (error) {
                document.getElementById('resultado').innerHTML = '<p class="form-label">Erro ao consultar a API.</p>';
            }
        });
    </script>
</body>
</html>
