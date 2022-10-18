<?php $this->load->view('elements/header'); ?>
<?php $this->load->view('elements/sidebar'); ?>
<link rel="stylesheet" href="<?php base_url() ?>assets\build\css\plugins\owl.carousel.min.css">

<section class="our-plans-presentation-container anime">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="our-plans-title anime">NOSSOS PLANOS</h2>
      </div>
    </div>
    <!-- <div class="row our-plans-text-container">
      <div class="col-md-12">
        <p class="our-plans-text anime">Todo nosso trabalho é feito pensando em oferecer o <span
            class="our-plans-text-emphasis">melhor para você</span>: usamos <span class="our-plans-text-emphasis">
            tecnologia de ponta</span>, para que
          tenha segurança em escolher nossos produtos; com atendimento de qualidade, para que se sinta confortável
          sempre. Nossa equipe trabalha dia a dia buscando as <span class="our-plans-text-emphasis">maiores
            novidades</span> no mercado de provedores de internet.
          Queremos oferecer a você uma internet de <span class="our-plans-text-emphasis">qualidade</span> e de <span
            class="our-plans-text-emphasis">altíssimo padrão</span>. Se é preciso inovar, a gente inova
          sim.</p>
        <p class="our-plans-text anime">Com <span class="our-plans-text-emphasis">as velocidades da Conecta</span>
          ninguém fica de fora. Tem o <span class="our-plans-text-emphasis">plano ideal</span> pra todo mundo. O <span
            class="our-plans-text-emphasis">plano perfeito</span> pra
          você. Tecnologia de ponta, os mais novos recursos para provedores de internet, atendimento personalizado
          presencial e lojas nos melhores pontos, com o maior conforto para você. <span
            class="our-plans-text-emphasis">Trabalhar com qualidade</span> é o nosso
          lema.</p>
      </div>
    </div> -->
  </div>
</section>

<section class="plans anime">
  <div style="display: flex; justify-content: center;">
    <select style="border: none;" class="form-select" aria-label="Selecione a cidade">
      <option selected>Selecione a cidade</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="container d-flex justify-content-center">
    <div class="row justify-content-center plan-list owl-carousel" id="prototype_plan">
      <?php $quant_planos = 0; ?>
      <?php foreach ($plans as $row) : ?>
      <?php $id_plan = $row->id;
        $quant_planos++; ?>
      <div class="col-md-12 d-flex justify-content-center plan-container">
        <div class="plan-unique">
          <div class="plan-title">
            <?php //if ($row->speed == 300) { ?>
            <!-- <span class="plan-recommended">Recomendado</span> -->
            <?php //} ?>
            <div class="plan-box-title">
              <span class="p-3 plan-inner-title"><?php echo $row->title; ?></span>
            </div>
            <!-- <span class="plan-speed"><?php echo $row->speed; ?></span>
            <div class="plan-box-title">
              <span class="plan-metric">MB</span>
              <span class="plan-fiber">fibra</span>
            </div> -->
          </div>
          <div class="plan-body">
            <div class="plan-pricing-box">
              <div class="pricing-number">
                <?php $preco = explode('.', $row->amount); ?>
                <span class="pricing-unit">R$</span>
                <span class="pricing-value"><?php echo $preco[0] ?></span>
                <div class="pricing-cents-box">
                  <span class="pricing-cents-value">,<?php echo $preco[1] ?></span>
                  <span class="pricing-month">/mês</span>
                </div>
              </div>
            </div>
            <div class="plan-description-container">
              <ul class="plan-description-list-container">
                <li class="plan-description-list">
                  <!-- <div class="description-image-container">
                    <img class="description-image"
                      src="<?php echo base_url(); ?>painel/assets/build/img/img_itens/icon-teste.png">
                  </div> -->
                  <div class="description-name-container">
                    <p class="description-name">Download: <?php echo $row->speed; ?></p>
                  </div>
                </li>
                <li class="plan-description-list">
                  <!-- <div class="description-image-container">
                    <img class="description-image"
                      src="<?php echo base_url(); ?>painel/assets/build/img/img_itens/icon-teste.png">
                  </div> -->
                  <div class="description-name-container">
                    <p class="description-name">Upload: <?php echo $row->upload; ?></p>
                  </div>
                </li>
                <?php foreach ($itens as $i) : ?>
                <?php if ($i->id_plans == $id_plan) : ?>
                <li class="plan-description-list">
                  <!-- <div class="description-image-container">
                    <img class="description-image"
                      src="<?php echo base_url(); ?>painel/assets/build/img/img_itens/icon-teste.png">
                  </div> -->
                  <div class="description-name-container">
                    <p class="description-name"><?php echo $i->description ?></p>
                  </div>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="plan-activation-box">
              <div class="plan-activation-text">
                <h5 class="plan-text">Ativação gratuita</h5>
              </div>
              <div class="plan-activation-choose">
                <a class="plan-choose"
                  href="<?php echo base_url() ?>contract/<?php echo $row->url_friendly ?>">Escolher</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <a class="plan-view-contract" href="https://conectafibra.com.br/assets/build/Contrato-Conecta.pdf"
          target="_blank" rel="noopener noreferrer"> <img class="img-view-contract"
            src="<?php echo base_url() ?>assets\build\img\icon\contract.png" alt="Ícone contrato"> Ver contrato</a>
      </div>
    </div>
  </div>
</section>

<section class="differentials-container anime">
  <div class="container">
    <div class="row anime w-90-mobile">
      <div class="col-12 col-sm-6 col-md-3 differentials-inner-container">
        <div class="differential-container-image">
          <img class="differentials-image" src="<?php echo base_url() ?>assets/build/img/icon/technical-support.svg"
            alt="Ícone card suporte técnico">
        </div>
        <h2 class="differentials-title">SUPORTE TÉCNICO</h2>
        <p class="differentials-text">Nossa equipe técnica é treinada para atender suas necessidades, presencial ou por
          telefone.</p>
      </div>
      <div class="col-12 col-sm-6 col-md-3 differentials-inner-container">
        <div class="differential-container-image">
          <img class="differentials-image" src="<?php echo base_url() ?>assets/build/img/icon/stability.svg"
            alt="Ícone card estabilidade">
        </div>
        <h2 class="differentials-title second">ESTABILIDADE</h2>
        <p class="differentials-text">Conexão estável que faz com que seus downloads e uploads sejam ainda mais rápidos.
        </p>
      </div>
      <div class="col-12 col-sm-6 col-md-3 differentials-inner-container">
        <div class="differential-container-image">
          <img class="differentials-image" src="<?php echo base_url() ?>assets\build\img\icon\high-speed.svg"
            alt="Ícone card alta velocidade">
        </div>
        <h2 class="differentials-title">ALTA VELOCIDADE</h2>
        <p class="differentials-text">A fibra que você confia com velocidade garantida.</p>
      </div>
      <div class="col-12 col-sm-6 col-md-3 differentials-inner-container">
        <div class="differential-container-image">
          <img class="differentials-image" src="<?php echo base_url() ?>assets\build\img\icon\fast-attendance.svg"
            alt="Ícone card atendimento rápido">
        </div>
        <h2 class="differentials-title">ATENDIMENTO RÁPIDO</h2>
        <p class="differentials-text">Em caso de visita técnica, nosso atendimento é rápido e eficiente!</p>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('elements/footer'); ?>
<script src="<?php base_url(); ?>assets\build\js\owl.carousel.min.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 8000,
    margin: 10,
    autoHeight: true,
    nav: true,
    dots: false,
    navText: ["<div class='nav-btn prev-slide'><</div>", "<div class='nav-btn next-slide'>></div>"],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        startPosition: 1
      },
      700: {
        items: <?php echo($quant_planos > 2) ? '2' : $quant_planos; ?>
      },
      900: {
        items: <?php echo($quant_planos > 3) ? '3' : $quant_planos; ?>
      },
      1200: {
        items: <?php echo($quant_planos > 4) ? '3' : $quant_planos; ?>
      }
    }
  });
</script>
