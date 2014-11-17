<html>
<head>
   <script type="text/javascript">
     function aumentaImagem(nome){
	nome.width = nome.width+50;
	nome.height = nome.height+50;			
     }
     function tamanhoNormal(nome){
	nome.width = 150;
	nome.height = 30;			
     }
   </script>
</head>
<body>
   <img src="http://www.linhadecomando.com/logo-linhadecomando.png" name="logo" 
       width="150" height="30" 
       onclick="aumentaImagem(logo);" 
       ondblclick="tamanhoNormal(logo);"
       style="cursor:pointer" />
</body>
</html>