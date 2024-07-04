<!doctype html>
<html lang="en">
  <head>
  	<title>Mural</title>
      <link rel="icon"
    type="imagem/png"
    href="background/icons8-p-16.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const userData = JSON.parse(localStorage.getItem('userData'));
            
  
            if (!userData) {
                window.location.href = '../index.php';
            }else{
                const nomeUsuarioElement = document.getElementById('nomeUsuario');
                const userPhotoContainer = document.getElementById("userPhotoContainer");  
                nomeUsuarioElement.textContent = userData.nome;
                userPhotoContainer.innerHTML = <img src="imagens_avatares/${userData.IMAGEM_AVATAR}.png" alt="Foto do Usuário">;
                
            }
        });
</script>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">

          <div class="user-photo">
            <div id="userPhotoContainer" class="circle user-circle"></div>
        </div>

		  	<!-- <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/valks.jpg);"></a> -->
            <a id="nomeUsuario" class="nome_user">Nome do Usuário</a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Perfil</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a id="openModalBtn" href="#">Alterar Avatar</a>
                </li>
                <li>
                    <a href="../dados.php">Dados Cadastrais</a>
                    
                </li>
	            </ul>
	          </li>
	          <li>
	              <a href="#" onclick="goToNotas()">Notas</a>
                <!--<button onclick="goToNotas()">Notas</button>-->
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dúvidas Frequentes</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">O que fazer em caso de perder a senha?</a>
                </li>
                <li>
                    <a href="#">Em que situação posso fazer denúncia de uma postagen?</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="#">Denúncias</a>
	          </li>
	          <li>
              <a href="#">Documentação da Página</a>
	          </li>
	        </ul>

	        <!-- <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						   Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
	        </div> -->

	      </div>
    	</nav>
 
      <!---Popup para selecionar o Avatar-->
      <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Escolha um Avatar: </p>
            <div class="circle-container">
              <div class="circle" data-img-src="1"><img src="imagens_avatares/1.png" alt="Foto 1"></div>
              <div class="circle" data-img-src="2"><img src="imagens_avatares/2.png" alt="Foto 2"></div>
              <div class="circle" data-img-src="3"><img src="imagens_avatares/3.png" alt="Foto 3"></div>
              <div class="circle" data-img-src="4"><img src="imagens_avatares/4.png" alt="Foto 4"></div>
              <div class="circle" data-img-src="5"><img src="imagens_avatares/5.png" alt="Foto 5"></div>
              <div class="circle" data-img-src="6"><img src="imagens_avatares/6.png" alt="Foto 6"></div>
              <div class="circle" data-img-src="7"><img src="imagens_avatares/7.png" alt="Foto 7"></div>
              <div class="circle" data-img-src="8"><img src="imagens_avatares/8.png" alt="Foto 8"></div>
              <div class="circle" data-img-src="9"><img src="imagens_avatares/9.png" alt="Foto 9"></div>
              <div class="circle" data-img-src="10"><img src="imagens_avatares/10.png" alt="Foto 10"></div>
          </div>
            <div class="button-container">
              
          
            </div>
        </div>
    </div>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Suporte</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"  onclick="logout()">Sair</a>
                <!--    <p><button class="nav-link" onclick="logout()">Logout</button></p> -->
                  <!-- <a href="#" class="ogout-button" onclick="minhaFuncao()">Clique aqui para chamar a função</a> -->
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="content_textbox">
          <div class="textbox-container">
              <textarea id="comment-box" rows="4" placeholder="Digite aqui..."></textarea>
              <!--  id="comment-box" -->
              <button class="comment-button" onclick="handleCommentButtonClick();">Comentar</button>
              <button  onclick="loadComments()">Recarregar Comentários</button>
          </div>
          
      </div>
      <div id="comments"></div>

      <button id="backToTop" class="back-to-top">⬆</button>

      <!-- <div class="Logoproz"><img src="logoproz.png" alt="Logo Proz"></div> -->

      
      <script>
     async function addComment() {
            const commentBox = document.getElementById('comment-box');
            const comments = document.getElementById('comments');
            const commentText = commentBox.value.trim();

            if (commentText) {
                const newComment = document.createElement('div');
                newComment.className = 'comentario_user';

                const timestamp = document.createElement('div');
                timestamp.className = 'timestamp';
                const now = new Date();
                var data_postagem = ${now.toLocaleDateString()} às ${now.toLocaleTimeString()}
                timestamp.textContent = Postado em: ${data_postagem};

                const commentContent = document.createElement('p');
                commentContent.innerHTML = <strong>${userData.nome}</strong><br>${commentText.replace(/\n/g, '<br>')};

                newComment.appendChild(commentContent);
                newComment.appendChild(timestamp);

                if (comments.firstChild) {
                    comments.insertBefore(newComment, comments.firstChild);
                } else {
                    comments.appendChild(newComment);
                }
                

                //comments.appendChild(newComment);
                commentBox.value = '';
                let formattedDate = now.toLocaleDateString().split('/').reverse().join('-');
                //enviar para o banco
                try {
                    const upMural = await fetch('../banco_querys.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            action :     'upsertMural',
                            login :      userData.login,
                            Dt_msg :      formattedDate,
                            MSG :         commentText.replace(/\n/g, '<br>'),
                            DT_COMPLETA : data_postagem                           
                            })
                    });
                    
                    //console.log('Foto atualizada com sucesso:');
                } catch (error) {
                    console.error('Erro ao atualizar a foto:', error);
                }
                


                
            }
            
        }

var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span = document.getElementsByClassName("close")[0];

//var backBtn = document.getElementById("backBtn");

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Adiciona funcionalidade ao botão salvar


// Adiciona funcionalidade ao botão voltar
//backBtn.onclick = function() {
//    modal.style.display = "none";
//}
document.addEventListener("DOMContentLoaded", function() {
    const backToTopButton = document.getElementById("backToTop");

    // Mostrar o botão quando a página é rolada para baixo
    window.addEventListener("scroll", function() {
        if (window.scrollY > 300) { // Ajuste o valor conforme necessário
            backToTopButton.style.display = "block";
        } else {
            backToTopButton.style.display = "none";
        }
    });

    // Rolagem suave de volta ao topo
    backToTopButton.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});

//selecionar a foto e mostrar no campo de foto principal"
const circleElements = document.querySelectorAll(".circle");
const userPhotoContainer = document.getElementById("userPhotoContainer");
const userData = JSON.parse(localStorage.getItem('userData'));
    circleElements.forEach(circle => {
        circle.addEventListener("click", async function() { // Marcar como async
            const imgSrc = this.getAttribute("data-img-src");
            if (imgSrc) { // Verifica se imgSrc não está vazio
                userPhotoContainer.innerHTML = <img src="imagens_avatares/${imgSrc}.png" alt="Foto do Usuário">;
                modal.style.display = "none"; // Fecha a modal após a seleção

                try {
                    const response = await fetch('../banco_querys.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            action: 'upsertfoto',
                            login: userData.login , // Correção do login
                            IMAGEM_AVATAR: imgSrc
                        })
                    });
                    const result = await response.json();
                    userData.IMAGEM_AVATAR = imgSrc;
                    localStorage.setItem('userData', JSON.stringify(userData));
                    console.log('Foto atualizada com sucesso:', result);
                } catch (error) {
                    console.error('Erro ao atualizar a foto:', error);
                }
            }
        });
    });



function goToNotas() {
            const userData = JSON.parse(localStorage.getItem('userData'));
            if (userData && userData.re_enroll_path) {
                const url1 = userData.re_enroll_path;
                const url = https://enferminas.prozeducacao.com.br/academico/boletim1.php?${userData.re_enroll_path.split('?')[1]};
                const win1 = window.open(url1, '_blank');

                setTimeout(function() {
                    window.location.href = url;
                    win1.close();
                }, 5000);
            } else {
                alert('Token não encontrado.');
            }
        }

        function logout() {
            localStorage.removeItem('userData');
            window.location.href = '../index.php';
        }

    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>



<script>
         async function addComment_banco(nome , texto, data ) {
            const commentBox = document.getElementById('comment-box');
            const comments = document.getElementById('comments');
            const commentText = commentBox.value.trim();
            


            if (true) {
                const newComment = document.createElement('div');
                newComment.className = 'comentario_user';

                const timestamp = document.createElement('div');
                timestamp.className = 'timestamp';
                const now = new Date();
                var data_postagem = ${now.toLocaleDateString()} às ${now.toLocaleTimeString()}
                timestamp.textContent = Postado em: ${data};

                const commentContent = document.createElement('p');
                commentContent.innerHTML = <strong>${nome}</strong><br>${texto.replace(/\n/g, '<br>')};

                newComment.appendChild(commentContent);
                newComment.appendChild(timestamp);
                

                comments.appendChild(newComment);
                commentBox.value = '';
                let formattedDate = now.toLocaleDateString().split('/').reverse().join('-');
                


            }
        }

        async function loadComments() {
    try {
        const response  = await fetch('../banco_querys.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            action :     'getMural',
                            login :      userData.login                           
                            })
                    });
        const data = await response.json();

        const comments = document.getElementById('comments');
        // Limpa os comentários existentes
        comments.innerHTML = '';

        if (data.status === 'success') {
            data.data.forEach(comment => {
                addComment_banco(comment.nome, comment.msg_text, comment.dt_completa);
            });
        } else {
            console.error('Erro ao carregar os comentários:', data.message);
        }
    } catch (error) {
        console.error('Erro na solicitação AJAX:', error);
    }
}
window.onload = loadComments;

function handleCommentButtonClick() {
    addComment().then(() => {
        loadComments();
    }).catch(error => {
        console.error('Erro ao adicionar comentário:', error);
    });
}





        </script>


</html>