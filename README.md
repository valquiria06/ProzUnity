# Documentação ProzUnity

## Introdução
ProzUnity é uma aplicação web desenvolvida utilizando uma API da escola Proz. A aplicação oferece uma tela de login e um mural onde os usuários podem escolher avatares, deixar mensagens visíveis para todos os usuários e anotar aulas.

## Tecnologias Utilizadas
- HTML
- CSS
- JavaScript
- PHP
- MySQL

## Estrutura de Arquivos
ProzUnity/
│
├── index.php           # Página de login
├── mural.php           # Página do mural
├── style.css           # CSS para estilização
├── script.js           # JavaScript para funcionalidade
└── imagens_avatares/   # Diretório contendo as imagens dos avatares
## Instalação
Para acessar o ProzUnity, basta abrir o navegador e visitar o seguinte endereço:
http://prozunity.sytes.net/
## Uso
### Login
- **Página:** Login
- A página de login é a porta de entrada para o ProzUnity. Aqui, os usuários devem inserir seu nome de usuário e senha para acessar o mural.

### Mural
- **Página:** Mural
- Após fazer o login, os usuários são levados ao mural. Nesta página, é possível:
  - **Escolher um Avatar:** Os usuários podem selecionar um avatar a partir de uma variedade de opções disponíveis.
  - **Deixar Mensagens:** Os usuários podem deixar mensagens no mural, que ficam visíveis para todos os outros usuários.
  - **Visualizar Mensagens:** Todas as mensagens deixadas pelos usuários são exibidas no mural.

O mural é um espaço colaborativo onde todos podem interagir e compartilhar informações.

## Funcionalidades
- **Sistema de Login:** Login seguro usando sessões PHP.
- **Seleção de Avatar:** Usuários podem escolher um avatar de um conjunto predefinido.
- **Deixar Mensagens:** Usuários podem deixar mensagens no mural.
- **Ver Mensagens:** Todos os usuários podem ver as mensagens deixadas por outros.

## Integração com API
ProzUnity se conecta com a API da escola Proz para obter informações sobre os perfis dos usuários e outros dados importantes. Isso garante que todas as informações, como nome, foto e outros detalhes, estejam sempre corretas e atualizadas.

## Melhorias Futuras
- **Registro de Usuários:** Permitir que novos usuários se registrem diretamente no site.
- **Mensagens em Tempo Real:** Implementar WebSocket para atualização de mensagens em tempo real.
- **Segurança Aprimorada:** Adicionar recursos como redefinição de senha e autenticação de dois fatores.
- **Responsividade Mobile:** Melhorar o layout para uma melhor experiência em dispositivos móveis.

---

&copy; 2024 ProzUnity. Todos os direitos reservados.
