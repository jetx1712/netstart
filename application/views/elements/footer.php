  <footer>
  	<div class="container py-4">
  		<div class="row">
  				
  				
				  
  			<div class="col-md-3">
  				<div class="row flex-contato-footer">
  					<div class="col-5 col-md-12 col-sm-6 flex-icone-social">
  						<a class="link-footer--contato" href="<?php echo $_SESSION['contact']->facebook; ?>" aria-label="facebook" target="_blank" rel="noreferrer">
  							<i class="fab fa-facebook"></i>
  						</a>
  						<a class="link-footer--contato" href="<?php echo $_SESSION['contact']->instagram; ?>" aria-label="instagram" target="_blank" rel="noreferrer">
  							<i class="fab fa-instagram"></i>
  						</a>
  					</div>
  					<div class="col-7 col-md-12 col-sm-6 flex-numeros-social">
  						<a class="link-footer text-right" href="tel:0800 887 1617">
  							<i class="orange-icon fas fa-phone ml-2"></i> <?php echo $_SESSION['contact']->phone; ?>
  						</a>
  						<a class="link-footer text-right" href="https://api.whatsapp.com/send?phone=<?php echo preg_replace('/[^0-9]/', '', $_SESSION['contact']->wpp); ?>&text=Ol%C3%A1%2C%20deixe%20sua%20mensagem%20que%20em%20breve%20retornaremos." target="_blank" rel="noreferrer">
  							<i class="orange-icon fab fa-whatsapp ml-2"></i> <?php echo $_SESSION['contact']->wpp; ?>
  						</a>
  						<!-- <a class="link-footer text-right" style="font-size: 0.6rem; margin-top: 10px; text-transform: capitalize;" href="https://www.jltecno.com.br/" target="_blank" rel="noreferrer">Desenvolvido por: JL Tecno</a> -->
  					</div>
  				</div>
  			</div>
  			<div class="col-md flex-main-footer">
				<div class="links-conecta">
					<a class="link-footer" href="<?php echo base_url() ?>a-conecta">A Netstar</a>
					<a class="link-footer" href="<?php echo base_url() ?>nossos-planos">Nossos planos</a>
					<a class="link-footer" href="<?php echo base_url() ?>blog">Blog</a>
					<a class="link-footer" href="<?php echo base_url() ?>fale-conosco">Fale conosco</a>
				</div>
				<a href="<?php echo base_url() ?>">
					<img class="img-fluid logo-footer" src="<?php echo base_url() ?>assets\build\img\logo_netstar.png" alt="Logo netstar">
				</a>
			</div>
  		</div>
  	</div>
  </footer>

  <div class="modal fade brightless" id="modalLigamos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
  		<div class="modal-content overflow-overlay pr-2">
  			<div class="modal-header">
  				<h5 class="modal-title" id="exampleModalLabel">Nós ligamos para você</h5>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>
  			<form action="<?php echo base_url() ?>my_email/we_call_you" id="form" method="post">
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
  										<option>BARRA DA ALEGRIA</option>
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
  										<option>ENTRE 08h E 10h</option>
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
  					<button type="submit" class="btn btn-primary g-recaptcha" name="we_call_you" data-sitekey="6LfuYdIcAAAAAFBfGWdVHTf4MHMcUkZdVD0dJJht" data-callback='onSubmit' data-action='submit'>Enviar</button>
  				</div>
  			</form>
  		</div>
  	</div>
  </div>
  </div>

  <!--   Core JS Files   -->

  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="<?php echo base_url(); ?>assets/build/js/jquery.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
  <script src="<?php echo base_url(); ?>assets/build/js/popper.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
  <script src="<?php echo base_url(); ?>assets/build/js/bootstrap.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
  <script src="<?php echo base_url(); ?>assets/build/js/slick.js"></script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

  <script src="<?php echo base_url(); ?>assets/build/js/jquery.mask.js"></script>
  <script src="<?php echo base_url() ?>assets/build/js/app.js"></script>
  <script src="<?php echo base_url() ?>assets/build/js/endereco.js"></script>

  <script type="text/javascript">
  	$(document).ready(function() {
  		$("#phone").mask("(99) 99999-9999");
  		$(".data").mask("99/99/9999");
  		$(".telefone").mask("(99) 9 9999-9999");
  		$(".cpf").mask("999.999.999-99");
  		$(".cep").mask("99999-999");
  	});

  	var ultimo_estado = 0;
  	$(document).on('click', '.change_year', function() {
  		let cont = $(this).data('cont');
  		let id = $(this).data('id');
  		let tamanho = (100 / 4) * cont;
  		let number = parseInt($('#item').val());

  		// if (ultimo_estado != '') {
  		if (ultimo_estado > id) {
  			while (ultimo_estado >= id) {
  				$('#circle_' + ultimo_estado).removeClass('past');
  				ultimo_estado = ultimo_estado - 1;
  			}
  		} else {
  			while (ultimo_estado < id) {
  				$('#circle_' + ultimo_estado).addClass('past');
  				ultimo_estado = ultimo_estado + 1;
  			}
  		}
  		$("#line_" + number).css("width", tamanho + '%');
  		$("#line_" + number).css("z-index", '2');
  		// }
  		$('.circle').removeClass('active');
  		$('#circle_' + id).addClass('active');

  		$('.year').removeClass('active');
  		$('#year_' + id).addClass('active');

  		$('.conteudo').removeClass('active');
  		$('#conteudo_' + id).addClass('active');

  		ultimo_estado = id;
  	});

  	$(document).on('click', '.nav_item', function() {
  		let tipo = $(this).data('slide');
  		let number = parseInt($('#item').val());

  		if ((number != 0 || tipo != 'prev') && (number != 3 || tipo != 'next')) {
  			if (tipo == 'prev') {
  				number = number - 1;
  			} else {
  				number = number + 1;
  			}

  			console.log(number);

  			$('#item').val(number);

  			$('.item_carrousel').removeClass('active');
  			$(`#item_${number}`).addClass('active');
  		}

  	});
  </script>

  </body>
  </html>