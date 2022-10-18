<div class="bodyContainer" <?php if (!isset($_SESSION["is_close_modal"])) { ?> style="visibility: visible; display: block; opacity: 1;" <?php } ?>>
	<nav>
		<div class="row w-100 m-0">
			<div class="col-md-12">
				<div class="row justify-content-between">
					<div class="pr-0 esconderMenu botao-header">
						<a class="btn btn-sm btn-header" href="https://central.conecta.hubsoft.com.br/central/login" target="_blank" rel="noreferrer">
							<i class="fas fa-barcode mr-2"></i>
							<span>2ª via do boleto</span>
						</a>
					</div>
					<div class="px-0 esconderMenu botao-header">
						<a class="btn btn-sm btn-header" href="https://central.conecta.hubsoft.com.br/central/login" target="_blank" rel="noreferrer">
							<i class="fas fa-user mr-2"></i>
							<span>Área do cliente</span>
						</a>
					</div>
					<!-- <div class="px-0 botao-header">
						<a class="btn btn-sm btn-header" href="<?php echo base_url(); ?>indique-e-ganhe" rel="noopener">
							<i class="fab fa-whatsapp ml-2"></i>
							<span>Indique e ganhe</span>
							 <span><?php //echo $_SESSION['cpp; ontact']->wpp
										?></span> 
						</a>
					</div> -->
					<div class="pl-0 botao-header">
						<a class="btn btn-sm btn-header" href="https://api.whatsapp.com/send?phone=55<?php echo preg_replace('/[^0-9]/', '', $_SESSION['contact']->wpp); ?>&text=Oi,%20tudo%20bem?%20Vim%20pelo%20link%20do%20site%20e%20gostaria%20de%20uma%20ajuda%20do%20Suporte%20ao%20Cliente%20da%20Conecta!" target="_blank" rel="noopener">
							<i class="fas fa-phone-alt ml-2"></i>
							<span>Atendimento ao cliente</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-wrapper">
			<div class="navbar-content">
				<div class="navbar-content_image">
					<a href="<?php echo base_url() ?>" class="py-3">
						<img class="logo" src="<?php echo base_url() ?>assets\build\img\logo_netstar.png" alt="logo-netstar">
					</a>
				</div>
				<div class="navbar-content_list esconderMenu">
					<div class="navbar-content_list-item">
						<a class="navbar-content_list-item_link" href="<?php echo base_url() ?>a-conecta">A Netstar</a>
					</div>
					<div class="navbar-content_list-item">
						<a class="navbar-content_list-item_link" href="<?php echo base_url() ?>nossos-planos">Nossos planos</a>
					</div>
					<div class="navbar-content_list-item">
						<a class="navbar-content_list-item_link" href="<?php echo base_url() ?>blog">Blog</a>
					</div>
					<div class="navbar-content_list-item">
						<a class="navbar-content_list-item_link" href="<?php echo base_url() ?>fale-conosco">Fale conosco</a>
					</div>
					<!-- <div class="navbar-content_list-item">
						<a class="navbar-content_list-item_cta" href="https://central.conecta.hubsoft.com.br/central/login">
							<i class="fa fa-user"></i>
							<div class="triangle">
								<img class="triangle_icon" src="<?php echo base_url(); ?>assets\build\img\icon\icon_cliente.svg" alt="ícone">
							</div>
							<span class="title">Área do cliente</span>
						</a>
					</div> -->
				</div>
				<div class="navbar-content_mobile">
					<div class="navbar-content_mobile-icon hamburguer">
						<i class="fas fa-bars text-white"></i>
					</div>
				</div>
			</div>
		</div>


		<div class="responsive-menu">
			<div class="text-center">
				<span>Menu</span>
			</div>
			<nav class="responsive-navigation-menu">
				<ul class=" d-flex flex-column">
					<li class="py-2"><a href="<?php echo base_url() ?>home">Início</a></li>
					<li class="py-2"><a href="<?php echo base_url() ?>aConecta">A Netstar</a></li>
					<li class="py-2"><a href="<?php echo base_url() ?>nossosPlanos">Nossos planos</a></li>
					<li class="py-2"><a href="<?php echo base_url() ?>blog">Blog</a></li>
					<li class="py-2"><a href="<?php echo base_url() ?>faleConosco">Fale conosco</a></li>
					<li class="py-2"><a href="https://central.conecta.hubsoft.com.br/central/login" rel="noreferrer" target="_blank">2ª via do boleto</a></li>
					<li class="py-2"><a href="https://central.conecta.hubsoft.com.br/central/login" rel="noreferrer" target="_blank">Área do cliente</a></li>
				</ul>
			</nav><!-- Fim nav -->
		</div>
	</nav>
</div>
<div class="content">