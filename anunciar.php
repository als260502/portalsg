<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anunciando</title>
        <link href="css/st_02.css" rel="stylesheet" type="text/css">

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-fi/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="bootstrap-fi/js/fileinput.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                $('#anunciar').submit(function () {
                    var chk = false;
                    var t = $('input[name=titulo]').val(),
                            s = $('input[name=site]').val(),
                            d = $('input[name=descricao]').val(),
                            a = $('input[name=arquivo]').val();
                    function n(nome) {
                        $(nome).css({"border-color": "#f00", "padding": "2px"});
                        $(nome).focus();
                        $(nome).attr("placeholder", "nao pode estar em branco");
                        return chk;
                    }
                    
                   
                    
                    return chk;
                });


                $('#input-2').fileinput('refresh', {
                    showUpload: false,
                    maxFileSize: 1000,
                    maxFilesNum: 1,
                    showRemove: false,
                });
            });
        </script>
    </head>

    <body>
        <div id="cabecalho"> <?php include_once 'header.php'; ?> </div>
        <div id="container">
            <form id="anunciar" method="post" action="anun.php" enctype="multipart/form-data" >
                
                <h2>Anuncio</h2>
                <label>Titulo do anuncio</label>
                <input type="text" class="canto teste" name="titulo" id="nome" />

                <label>Site</label>
                <input type="text" class="canto" name="site" id="site"  />
                <label>Descrição</label>
                <textarea name="descricao" rows="4" cols="50"></textarea>
                <br />
                <br />
                <label>Banner: selecione uma imagem</label><br />
                <!-- Use file input attributes (e.g. multiple upload) for setting input behavior and data attributes to
                control plugin options. For example, hide/show display of upload button and caption.-->
                <input id="input-2" type="file" class="file" name="arquivo" >
                
                <ul class="list-group">
                    <li class="list-group-item-info">A imagem deve ter no máximo 2MB</li>
                    <li class="list-group-item-info">A resolução ideal do banner é de 700 pixels <br/>
                        de largura por 200 pixels de altura </li>
                </ul>

                <button class="canto">Enviar</button>
                <input type="hidden" name="anuncio" />
            </form>

            <!--<div id="direita" class="canto">
                             <h3>CONTRATO DE DIVULGAÇÃO DE ANÚNCIOS EM PLATAFORMA ONLINE.</h3>
                 <p>
                     Pelo presente instrumento particular e na melhor forma de direito,
                     <b>Associação Comercial e Empresarial de São Gonçalo</b>, denomina ACESG,
                     com sede à Rua Dr. Feliciano Sodré, nº 82, Centro, na cidade de
                     São Gonçalo, Estado do Rio de Janeiro, inscrita no CNPJ/MF sob o nº
                     xx.xxx.xxx/xxxx-xx, denominada <b>CONTRATADA</b> e, de outro lado,<br>
                     Nome:<br>
                     Endereço: __________________________________________, na cidade de
                     _______________, Estado de ___, inscrito no CPF/CRM/CNPJ, sob o nº 
                     ______________________________, denominado <b>CONTRATANTE</b>, têm entre si
                     justo contratado o que se segue:
                 </p>
                             <h3>CLÁUSULA PRIMEIRA - DO OBJETO</h3>
                 <p>
                     1.1 O presente instrumento tem como objetivo:<br>
                         1.2 A divulgação, não exclusiva, de produtos e serviços por
                         espaço publicitário pela <b>CONTRATADA</b> ao <b>CONTRATANTE</b>, na 
                         plataforma online <b>Cidades Aqui</b> concebido e desenvolvido
                         pela <b>CONTRATADA</b>, de acordo com o Plano de Anúncios.
                 </p>            
             </div>-->
        </div>
    </body>
</html>