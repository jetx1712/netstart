<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Black Friday é na Conecta Fibra. A melhor internet de Taiobeiras, Salinas, Rio Pardo de Minas e região.">
	<title>Conecta | Natal</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.css' integrity='sha512-c9N/Xq0n4rQdyCXF4RgrRYAAOSnNJDp8NWILsSUx+33zWyaMbXXvqajgO0UXybRdTGVpxq3FBrcGwabkWsT8OA==' crossorigin='anonymous' />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==' crossorigin='anonymous'>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/landings/intelo-fonts.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/landings/christmas.css">
</head>

<body>
	<picture>
		<source media="(max-width: 600px)" srcset="<?php echo base_url(); ?>assets/build/img/landings/christmas/christmas-header-mobile.webp">
		<img class="img-full" src="<?php echo base_url(); ?>assets/build/img/landings/christmas/christmas-header-desktop.webp" alt="">
	</picture>

	<picture>
		<source media="(max-width: 600px)" srcset="<?php echo base_url(); ?>assets/build/img/landings/christmas/christmas-info-mobile.webp">
		<img class="img-full" src="<?php echo base_url(); ?>assets/build/img/landings/christmas/christmas-info-desktop.webp" alt="">
	</picture>

	<div class="christmas-form container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<h1 class="network-title">
					É só se inscrever para concorrer a esse
					<span class="highlight">MEGA prêmio</span>
				</h1>
				<div class="network-content">
					<div class="network-infos">
						<div class="network-form_wrapper">
							<img class="network-leaves to-right" src="<?php echo base_url(); ?>assets/build/img/landings/christmas/christmas-leaves-to-right.png" alt="">
							<img class="network-leaves to-left" src="<?php echo base_url(); ?>assets/build/img/landings/christmas/christmas-leaves-to-left.png" alt="">
							<span class="network-form_title">Preencha aqui!</span>
							<div class="alert alert-success" id="success_send" role="alert" style="display: none;">
								Enviado com sucesso
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="network-form_group">
										<label for="name">Nome completo</label>
										<input class="form-control" id="name" name="name" required>
									</div>
									<div class="network-form_group">
										<label for="phone">Telefone</label>
										<input class="form-control" id="phone" name="phone" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="network-form_group">
										<label for="city">Cidade</label>
										<input class="form-control" id="city" name="city">
									</div>
									<div class="network-form_group">
										<label for="internet_provider">E-mail</label>
										<input class="form-control" id="internet_provider" name="internet_provider">
									</div>
								</div>
							</div>
							<div class="network-form_cta_wrapper">
								<input class="network-form_cta" id="send_email" type="button" value="Enviar">
							</div>
						</div>
					</div>
				</div>
				<div class="christmas-media">
					<p class="christmas-media-text">Siga o nosso perfil:</p>
					<a class="christmas-media-cta" href="https://www.instagram.com/conectafibra/" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-instagram"></i>
						conectafibra
					</a>
				</div>
				<div class="christmas-draw-contaienr">
					<p class="christmas-draw-text">
						O sorteio será realizado em uma transmissão ao vivo no perfil
						<span class="highlight">@conectafibra</span>
						no dia
						<span class="highlight">23/12/2021.</span>
					</p>
					<img class="christmas-draw-image" src="<?php echo base_url(); ?>assets/build/img/logo-branca-fibra.png" alt="">
				</div>
				<p class="christmas-advice">* Participação exclusiva para clientes Conecta Fibra</p>
				<p class="christmas-advice">* A retirada do prêmio é de responsabilidade do ganhador.</p>
			</div>
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.js' integrity='sha512-/1h344Ogu39f2lMl2yIJn3mPjySuB0+m3EzDvFSWlxo6HaJO/3jdzGOy8V6ZgdkTkddKH+ZWma1mqOQZHmjo1w==' crossorigin='anonymous'></script>
	<script src="<?php echo base_url(); ?>assets/build/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/build/js/jquery.mask.js"></script>
	<script src='<?php echo base_url(); ?>assets/build/js/landings/christmas.js'></script>
</body>

</html>
