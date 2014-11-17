<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Testando</title>
<link href="css/st_02.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="cabecalho"><?php include_once 'header.php'; ?></div>
    <div id="container">
        <form id="enviar" method="post" action="cad.php">
        	<h2>Cadastre-se</h2>
        	<label>Login*</label>
            <input type="text" class="canto" name="login" id="login">
        	<label>Senha*</label>
            <input type="text" class="canto" name="senha" id="senha">
        	<label>Nome*</label>
            <input type="text" class="canto" name="nome" id="nome">
        	<label>CPF*</label>
            <input type="text" class="canto" name="cpf" id="cpf">
        	<label>Razão Social*</label>
            <input type="text" class="canto" name="rsocial" id="rsocial">
        	<label>Nome Fantasia*</label>
            <input type="text" class="canto" name="nfantasia" id="nfantasia">
        	<label>CNPJ*</label>
            <input type="text" class="canto" name="cnpj" id="cnpj">
        	<label>Telefone*</label>
            <input type="text" class="canto" name="tel" id="tel">
        	<label>Email*</label>
            <input type="text" class="canto" name="email" id="email">
            <p>A aquisição do plano implica na aceitação dos termos contidos em nosso <b>Contrato</b>.</p>
            <input type="checkbox">Li e estou ciente dos termos do contrato<br>
            <button class="canto">Enviar</button>
            <input type="hidden" name="cad" />
        </form>
        <div id="direita" class="canto">
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
        </div>
    </div>
</body>
</html>