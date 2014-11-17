<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Portal SG</title>
        <link href="css/st_02.css" rel="stylesheet" type="text/css">
        <script src="./js/jquery-2.1.1.min.js"></script>
    </head>
    <script type="text/javascript">
        $(document).ready(function () {
          // Attach a submit handler to the form
            $("#pesquisar").submit(function (event) {
                // Stop form from submitting normally
                event.preventDefault();
                // Get some values from elements on the page:
                var $form = $(this),
                        term = $form.find("input[name='search']").val();

                console.log(term);
                $.ajax({
                    type: 'POST',
                    // url para o arquivo json.php
                    url: "busca.php",
                    //dados enviaos pelo post
                    data: 'search=' + term,
                    // dataType json
                    dataType: "json",
                    // função para de sucesso
                    success: function (data) {
                        // vamos gerar um html e guardar nesta variável
                        var html = "";

                        // executo este laço para ecessar os itens do objeto javaScript
                        for ($i = 0; $i < data.length; $i++) {

                            html += "<div id='linha' class='canto sombra'>"
                            // coloco o nome 
                            html += "<h2>" + data[$i].nome + "</h2>";
                            // coloco a cidade
                            html += "<h2><a href=http://" + data[$i].site + " target='_blank' >" + data[$i].site + "</a></h2>";
                            // e por ultimo dou uma quebra de linha
                            html += "<i>";
                            html += data[$i].descricao;
                            html += "</i>";
                           html += "<img src=" + data[$i].imagem + ">";
 
                            html += "</div>"
                        }//fim do laço

                        //coloco a variável html na tela
                        $('#pesquisa').append().html(html);
                    }

                });//termina o ajax

            });

        });
    </script>
    
    <body onload="">
        <div id="hdr"><?php include_once 'header.php'; ?></div>
        <div id="cabecalho">
            <form id="pesquisar" method="post" id="pesquisar" >
                <img src="img/logop.gif">
                <input type="text" name="search" id="search">
                <button class="canto">pesquisar</button>
                <!--<button class="canto">filtrar</button>-->
                <input type="hidden" name="src" /> 

            </form>
        </div>
        <div id="conteudo">
            <div id="pesquisa">


            </div>
            <div id="anuncio">
              <!--  <img src="#" class="canto sombraimg">
                <img src="#" class="canto sombraimg">
                <img src="#" class="canto sombraimg">-->
            </div>
        </div>	
    </body>
</html>
