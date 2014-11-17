<?php ini_set('default_charset', 'UTF-8'); ?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Portal SG</title>
        <link href="css/st_01.css" rel="stylesheet" type="text/css">
        <script src="./js/jquery-2.1.1.min.js"></script>
      <!--  <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
    </head>
    <body>
        
        <div id="cabecalho">
            <form id="login" method="post" >
                <label>Nome</label>
                <input type="text" class="canto" name="nome" id="nome"> 
                <label>Email</label>
                <input type="test" class="canto" name="email" id="email">
                <input type="hidden" name="login" value="login" />
                <p><a href="#">Cadastre-se e participe de nossas promoções</a></p> 
            </form>
            <?php include_once 'header.php'; ?>
        </div>

        <form id="pesquisar" method="post" action="pesquisa.php">
            <img src="img/logo.gif">
            <input type="text" name="src" id="pesquisa" onfocus="window.self.location.href = 'pesquisa.php';"> 
            <p>Escreva o nome do serviço ou produto que você deseja encontrar (ex.: farmácia, roupa, peça de carro, ect...)</p>
            <button class="canto pesquisa">Pesquisa</button>
            <!--<button class="canto filtro">Filtrar</button>-->
            
        </form>
        
        <div id="result">
            
        </div>
        <div id="rodape">
            <p><a href="#">Política de privacidade</a></p>
        </div>
    </body>
</html>
