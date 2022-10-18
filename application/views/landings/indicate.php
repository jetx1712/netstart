<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/landings/indicates.css">
	<title>Conecta | Indicação</title>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100&family=JetBrains+Mono:wght@700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@400;600;800&family=Rubik:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
</head>


<header>
<div class="container_img" style="margin-top: 50%;">
	<div>
	<img class="indique" src="<?php echo base_url(); ?>assets/build/img/landings/indicate/Indicou,-Ganhou.png" alt="Ganhe">
	</div>

<h2 class="novidade">Indique 2 amigos(as). Fechou<br> com a Conecta, <span class="amarelo">1 mensalidade<br> grátis você conquistou!</span> </h2>
</div>
</header>
<body>



<div style="margin-top: 30%; margin-top: 25%;" class="form">
		<form action="<?php echo base_url(); ?>my_email/indicate" method="post">
			<fieldset class="caixa">	
			<legend class="preencha">Preencha aqui!</legend>
			<div style="padding: 0px 40px;" class="">
				<div class="inputbox">
					<label for="name" class="label1">Seu nome completo</label>
					<input type="text" name="name" id="name" class="inputUser" required>
				</div>
					<br><br>
				<div class="inputbox">
					<label for="indicated" class="label1">Indicação</label>
					<input type="text" name="indicated" id="indicated" class="inputUser" required>
				</div>
				<br><br>
				<div class="inputbox">
					<label for="phone" class="label1">Telefone do indicado </label>
					<input type="tel" name="phone" id="phone" class="inputUser" required>
				</div>
				<br><br>
				<div class="inputbox">
					<label for="Grau" class="label1">Grau de parentesco (amigo, irmão, tia...)</label>
					<input type="text" name="Grau" id="Grau" class="inputUser" required>
				</div>
				<br><br>
				<div style="display: flex; justify-content: center;">
					<button class="botao"><span class="enviar">Enviar</span></button>
				</div>
			</div>		
			</fieldset>
		</form>	
	</div>

	



</body>

<section>
        <div style="margin-top: 200px;" class="seta">
			<img style="max-width: 200px" src="./assets/build/img/landings/indicate/Seta.png" alt="Seta">
		</div>
		<div class="dica">
			<h2 class="frase-dica">Quanto mais você indicar, mais <br><span class="roxo">chances tem de ganhar.</span></h2>
		</div>	
		<div 
		style="padding-top: 420px;
		display: flex;
		justify-content: center;
		width: 100%;">
			<img 
			style="
			max-width: 300px;
			z-index: 3;" 
			 src="<?php echo base_url(); ?>assets/build/img/landings/indicate/Logo.png" alt="conecta">
		</div>
</section>

<section>

</section>

<!-- <body>
	<main >
	 <img class="indique" src="./assets/build/img/landings/indicate/Indicou,-Ganhou.png" alt="Ganhe">
	</main>

	<div>
		<h1 class="fundo">.</h1>
	</div>

	<div>
		<h2 class="novidade">Indique 2 amigos(as). Fechou<br> com a Conecta, <span class="amarelo">1 mensalidade<br> grátis você conquistou!</span> </h2>
	</div>


	<div class="form">
		<form action="">
			<fieldset class="caixa">	
			<legend class="preencha">Preencha aqui!</legend>
			<div class="">
				<div class="inputbox">
					<label for="nome" class="label1">Seu nome completo</label>
					<input type="text" name="nome" id="nome" class="inputUser" required>
				</div>
					<br><br>
				<div class="inputbox">
					<label for="indica" class="label1">Indicação</label>
					<input type="text" name="indica" id="indica" class="inputUser" required>
				</div>
				<br><br>
				<div class="inputbox">
					<label for="telefone" class="label1">Telefone do indicado </label>
					<input type="tel" name="telefone" id="telefone" class="inputUser" required>
				</div>
				<br><br>
				<div class="inputbox">
					<label for="Grau" class="label1">Grau de parentesco (amigo, imão, tia...)</label>
					<input type="text" name="Grau" id="Grau" class="inputUser" required>
				</div>
				<br><br>
				<div>
					<button class="botao"><span class="enviar">Enviar</span></button>
				</div>
			</div>		
			</fieldset>
		</form>
	</div>

	<div>
		<img class="sombra" src="./assets/build/img/landings/indicate/Sombra.png" alt="sombra">
	</div>

	<footer style="display: flex; justify-content: center;">
		<div class="seta">
			<img src="./assets/build/img/landings/indicate/Seta.png" alt="Seta">
		</div>
		<div class="dica">
			<h2 class="frase-dica">Quanto mais você indicar, mais <br><span class="roxo">chances tem de ganhar.</span></h2>
		</div>
		
		<div class="conecta">
			<img class="conecta-1" src="./assets/build/img/landings/indicate/Logo.png" alt="conecta">
		</div>
		
	</footer>
	
	
</body> -->

</html>