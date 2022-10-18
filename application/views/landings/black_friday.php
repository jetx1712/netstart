<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Black Friday é na Conecta Fibra. A melhor internet de Taiobeiras, Salinas, Rio Pardo de Minas e região.">
	<title>Conecta | Black Friday</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.css' integrity='sha512-c9N/Xq0n4rQdyCXF4RgrRYAAOSnNJDp8NWILsSUx+33zWyaMbXXvqajgO0UXybRdTGVpxq3FBrcGwabkWsT8OA==' crossorigin='anonymous' />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/landings/intelo-fonts.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/build/css/landings/black-friday.css">
</head>

<body>
	<picture>
		<source media="(max-width: 600px)" srcset="<?php echo base_url(); ?>assets/build/img/landings/blackfriday-header-mobile.webp">
		<img class="img-fluid" src="<?php echo base_url(); ?>assets/build/img/landings/blackfriday-header-desktop.webp" alt="">
	</picture>

	<picture>
		<source media="(max-width: 600px)" srcset="<?php echo base_url(); ?>assets/build/img/landings/blackfriday-info-mobile.webp">
		<img class="img-fluid" src="<?php echo base_url(); ?>assets/build/img/landings/blackfriday-info-desktop.webp" alt="">
	</picture>

	<div class="black-friday-form container-fluid">
		<div class="row align-items-center black-friday-displaced">
			<div class="col-md-6 d-flex justify-content-center">
				<h1 class="black-friday-info">É só se inscrever e garantir essa <span class="highlighted">mega promoção</span></h1>
			</div>
			<div class="col-md-6">
				<div class="network-content">
					<div class="network-infos">
						<!-- <form action=""> -->
							<div class="network-form_wrapper">
								<span class="network-form_title">Preencha aqui!</span>
								<div class="alert alert-success" id="success_send" role="alert" style="display: none;">
							  	Enviado com sucesso
								</div>
								<div class="network-form_group">
									<label for="name">Nome</label>
									<input class="network-form_input" id="name" name="name">
								</div>
								<div class="network-form_group">
									<label for="phone">Telefone</label>
									<input class="network-form_input" id="phone" name="phone">
								</div>
								<div class="network-form_cta_wrapper">
									<input class="network-form_cta" id="send_email" type="button" value="Enviar">
								</div>
							</div>
						<!-- </form> -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.js' integrity='sha512-/1h344Ogu39f2lMl2yIJn3mPjySuB0+m3EzDvFSWlxo6HaJO/3jdzGOy8V6ZgdkTkddKH+ZWma1mqOQZHmjo1w==' crossorigin='anonymous'></script>
	<script src='<?php echo base_url(); ?>assets/build/js/landings/black-friday.js'></script>
	<script src="<?php echo base_url(); ?>assets/build/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/build/js/jquery.mask.js"></script>

	<script type="text/javascript">
		// url_atual = 'http://localhost/conecta/';
		url_atual = 'https://conectafibra.com.br/';

		$(document).ready(function() {
	    $("#phone").mask("(99) 99999-9999");
	  });

		$(document).on('click', '#send_email', function(){
			let name = $('#name').val();
		  let phone = $('#phone').val();
		  let dados = [name, phone];

			$.ajax({
		    url: url_atual + 'my_email/black_friday',
		    method: 'POST',
		    data: {
					name: name,
		      phone: phone,
		    },
		    success: function (data) {
					$('#name').val('');
					$('#phone').val('');
					$('#success_send').show();
				}
		  });
		});
	</script>
</body>

</html>
