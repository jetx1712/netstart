<?php $this->load->view('elements/header'); ?>
<?php $this->load->view('elements/sidebar'); ?>

<!-- <section class="contact-us-banner-section anime">
	<div id="carousel_contact_us" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<picture>
					<source class="w-100 d-block" media="(max-width: 750px)"
						srcset="<?php echo base_url() ?>painel\assets\build\img\img_contact_us\banner_1.png">
					<source class="w-100 d-block" media="(min-width: 1900px)"
						srcset="<?php echo base_url() ?>painel\assets\build\img\img_contact_us\banner_1.png">
					<img class="w-100 d-block" src="<?php echo base_url() ?>painel\assets\build\img\img_contact_us\banner_1.png"
						draggable="none">
				</picture>
			</div>
			<div class="carousel-item">
				<picture>
					<source class="w-100 d-block" media="(max-width: 750px)"
						srcset="<?php echo base_url() ?>painel\assets\build\img\img_contact_us\banner_2.png">
					<source class="w-100 d-block" media="(min-width: 1900px)"
						srcset="<?php echo base_url() ?>painel\assets\build\img\img_contact_us\banner_2.png">
					<img class="w-100 d-block" src="<?php echo base_url() ?>painel\assets\build\img\img_contact_us\banner_2.png"
						draggable="none">
				</picture>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel_contact_us" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#carousel_contact_us" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>
</section> -->

<section class="contact-us-container anime">

<section class="talk-with-us-container anime">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="talk-with-us-title">Converse com a gente!</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="talk-with-us-inner-container">
					<a href="https://central.conecta.hubsoft.com.br/central/login" class="talk-with-us-card">
						<i class="fas fa-barcode talk-with-us-icon"></i>
						<p class="talk-with-us-text">2º Via do<br>boleto</p>
					</a>
					<a href="https://central.conecta.hubsoft.com.br/central/login" class="talk-with-us-card">
						<i class="fas fa-user talk-with-us-icon"></i>
						<p class="talk-with-us-text">Área do<br>cliente</p>
					</a>
					<a data-toggle="modal" data-target="#modalLigamos" class="talk-with-us-card">
						<img class="talk-with-us-icon" src="<?php echo base_url() ?>assets/build/img/svg/fale-conosco-ligamos.svg">
						<p class="talk-with-us-text">Ligamos<br>para você!</p>
					</a>
					<a href="https://api.whatsapp.com/send?phone=5538991881708&text=Ol%C3%A1%2C%20deixe%20sua%20mensagem%20que%20em%20breve%20retornaremos."
						class="talk-with-us-card" target="_blank">
						<i class="fab fa-whatsapp talk-with-us-icon"></i>
						<p class="talk-with-us-text">Whatsapp<br>comercial</p>
					</a>
					<a href="https://api.whatsapp.com/send?phone=5538991881708&text=Ol%C3%A1%2C%20deixe%20sua%20mensagem%20que%20em%20breve%20retornaremos."
						class="talk-with-us-card" target="_blank">
						<img class="talk-with-us-icon" src="<?php echo base_url() ?>assets/build/img/svg/fale-conosco-suporte.svg">
						<p class="talk-with-us-text">Whatsapp<br>suporte</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
	
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-12">
				<!-- INI: AVISOS -->
				<?php if (!empty($error)) { ?>
				<div class="alert alert-<?php echo $error['error_type']; ?>" role="alert"
					style="background-color: green; color: white;">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<?php echo $error['error_string']; ?>
				</div>
				<?php } ?>
				<!-- INI: AVISOS -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 margin-custom">
				<h2 class="contact-us-title">Fale conosco!</h2>
			</div>
		</div>
		<div class="row justify-content-md-between">
			<div class="col-md-6 contacts-container">
				<p class="contact-us-paragraph">Entre em contato com a gente! No formulário ao lado você pode enviar
					comentários,
					sugestões ou até mesmo aquela mensagem especial para o Nec, vamos adorar!</p>
					<div class="time-info">
		<img class="contact-us-image" src="<?php echo base_url(); ?>assets\build\img\icon\icon-calendar.png"
			alt="Ícone calendário">
		<div class="time-info-content">
			<p class="time-info-text">Segunda a sexta:
				<span>8h às 20h</span>
			</p>
			<p class="time-info-text">Sábado, domingos e feriados:
				<span>8h às 18h</span>
			</p>
		</div>
	</div>
				<div class="contacts-inner-container">
					<a class="contact-link"
						href="https://api.whatsapp.com/send?phone=5538991881708&text=Ol%C3%A1%2C%20deixe%20sua%20mensagem%20que%20em%20breve%20retornaremos.">
						<i class="fab fa-whatsapp"></i> <?php echo $_SESSION['contact']->wpp; ?>
					</a>
					<a class="contact-link" href="tel:<?php echo $_SESSION['contact']->phone; ?>">
						<i class="fas fa-phone-alt"></i> <?php echo $_SESSION['contact']->phone; ?>
					</a>
					<a class="contact-link" href="mailto:<?php echo $_SESSION['contact']->email; ?>">
						<i class="fas fa-phone-alt"></i> <?php echo $_SESSION['contact']->email; ?>
					</a>
				</div>
			</div>
			<div class="col-md-5">
			<form action="<?php echo base_url() ?>my_email/contact_us" method="post">
				<div class="form-group">
					<label class="contact-us-label" for="contact-us-name">Nome</label>
					<input name="name" class="contact-us-form" type="text" placeholder="Nome completo"
							required>
				</div>
				<div class="form-group">
					<label class="contact-us-label" for="email">E-mail</label>
					<input name="email" class="contact-us-form" type="text"
						placeholder="atendimento@conectafibra.com.br">
				</div>
				<div class="form-group">
					<label class="contact-us-label" for="tel">Telefone</label>
					<input name="tel" class="contact-us-form telefone" name="tel" type="text"
						placeholder="(38) 9 0000-0000" required>
				</div>
				<div class="form-group">
					<label class="contact-us-label" for="message">Mensagem</label>
					<textarea class="contact-us-form" name="message" rows="4" placeholder="Em que podemos te ajudar?"required></textarea>
				</div>
				<div class="form-group container-btn">
					<button type="submit" name="contact_us" class="btn btn-send-message">Enviar</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</section>

<section class="come-to-us-container anime">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="come-to-us-title">Venha até a gente!</h2>
			</div>
		</div>
		<div class="row come-to-us-citites">
			<?php foreach ($places as $row) : ?>
			<div class="come-to-us-city-inner-container">
				<div class="come-to-us-icon-container">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="come-to-us-city-name-container">
					<h3 class="come-to-us-city-name"><?php echo $row->city ?></h3>
				</div>
				<p class="come-to-us-description"><?php echo $row->address; ?>, <?php echo $row->number; ?>
					<?php echo $row->neighborhood; ?></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>




<div class="modal fade brightless" id="modalLigamos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content overflow-overlay pr-2">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nós ligamos para você</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo base_url() ?>my_email/we_call_you" method="post">
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" name="name" class="form-control" id="name" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="email">Endereço de e-mail</label>
									<input type="text" name="email" class="form-control" id="email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md pr-md-1">
								<div class="form-group">
									<label for="city">Cidades</label>
									<select class="form-control" name="city" id="city" required>
										<option></option>
										<option>SALINAS</option>
										<option>TAIOBEIRAS</option>
										<option>BOA SORTE</option>
										<option>SÃO JOÃO DO PARAÍSO</option>
										<option>NINHEIRA</option>
										<option>INDAIABIRA</option>
									</select>
								</div>
							</div>
							<div class="col-md pr-md-1 pl-md-1">
								<div class="form-group pr-md-1">
									<label for="neighborhood">Bairro</label>
									<input type="text" class="form-control" id="neighborhood" name="neighborhood" required>
								</div>
							</div>
							<div class="col-md pl-md-1">
								<div class="form-group pr-md-1 pl-md-1">
									<label for="street">Rua</label>
									<input type="text" class="form-control" id="street" name="street" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md pr-md-1">
								<div class="form-group">
									<label for="tel1">Telefone 1</label>
									<input type="text" class="form-control telefone" id="tel1" name="tel1" required>
								</div>
							</div>
							<div class="col-md pl-md-1">
								<div class="form-group">
									<label for="tel2">Telefone 2</label>
									<input type="text" class="form-control telefone" id="tel2" name="tel2">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="opening_hours">Melhor Horário para Ligação</label>
									<select class="form-control" id="opening_hours" name="opening_hours" required>
										<option></option>
										<option>ENTRE 10h E 12h</option>
										<option>ENTRE 12h E 14h</option>
										<option>ENTRE 14h E 16h</option>
										<option>ENTRE 16h E 18h</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary" name="we_call_you">Enviar</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php $this->load->view('elements/footer'); ?>
<script>
	$(document).on('click', '#send_email', function () {
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