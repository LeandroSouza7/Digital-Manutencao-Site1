<! doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> Digital Manutenção</title>
		<meta name="author" content="Leandro Souza">
		<meta name="reply-to" content="leandrobonfimdesouza10@gmail.com">
		<meta name="description" content="Digital Manutenção | Oferecemos o que há de melhor em produtos e serviços para seu edificio e/ou condomínio.">
		<meta name="keywords" content="digital manutenção, antenas coletivas, interfones, luz de emergência, câmeras de segurança, sensores e fechaduras">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		
		<link rel="shortcut icon" href="imagens/favicon-32x32.png" type="image/x-icon">
		
		<link href="css/normalize.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link rel = "preconnect" href = "https://fonts.gstatic.com">
		<link href = "https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel = "stylesheet">
		<link rel = "preconnect" href = "https://fonts.gstatic.com">
		<link href = "https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel = "stylesheet">
		
		<style>
			body{
				display: flex;
				align-items: center;
				justify-content: center;
				height: 100vh;
				flex-direction: column;
				text-align: center;
				background-color: #CDDDE3; 
			}
		</style>
	</head>
	<body>
		<?php
			//Variáveis


			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$assunto = $_POST['assunto'];
			$mensagem = $_POST['mensagem'];
			$data_envio = date('d/m/Y');
			$hora_envio = date('H:i:s');

			// Compo E-mail
			  $arquivo = "
			  <style type='text/css'>
			  body {
			  margin:0px;
			  font-family:Verdane;
			  font-size:12px;
			  color: #666666;
			  }
			  a{
			  color: #666666;
			  text-decoration: none;
			  }
			  a:hover {
			  color: #FF0000;
			  text-decoration: none;
			  }
			  </style>
				<html>
					<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
						<tr>
						  <td>
			  <tr>
							 <td width='500'>Nome:$nome</td>
							</tr>
							<tr>
							  <td width='320'>E-mail:<b>$email</b></td>
				 </tr>
				  <tr>
							  <td width='320'>Telefone:<b>$telefone</b></td>
							</tr>
				 <tr>
							  <td width='320'>Assunto:$assunto</td>
							</tr>
							<tr>
							  <td width='320'>Mensagem:$mensagem</td>
							</tr>
						</td>
					  </tr>
					  <tr>
						<td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
					  </tr>
					</table>
				</html>
			  ";

			//enviar

			   // emails para quem será enviado o formulário
			  $destino = "atendimento1@digitalmanutencao.com.br";
			  $assunt = "Contato pelo Site";

			  // É necessário indicar que o formato do e-mail é html
			  $headers  = 'MIME-Version: 1.0' . "\r\n";
				  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				  $headers .= 'From:' . $nome . '<$email>';
			  //$headers .= "Bcc: $EmailPadrao\r\n";

			  $enviaremail = mail($destino, $assunt, $arquivo, $headers);
			  if($destino){
			//  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> Em breve entraremos em contato";
			  echo "<div><h1>Email enviado com sucesso! Em breve entraremos em contato</h1></div><div><a href=index.html>Voltar para a página principal</a></div>";
			  } else {
			//  $mgm = "ERRO AO ENVIAR E-MAIL! <br> Tente novamente mais tarde";
			  echo "<div><h1>Erro no envio do email. Tente novamente mais tarde</h1></div><div><a href=index.html>Voltar para a página principal</a></div>";
			  }

			?>
	</body>
</html>

