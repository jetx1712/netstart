<?php $this->load->view('elements/header'); ?>
<?php $this->load->view('elements/sidebar'); ?>
<link rel="stylesheet" href="<?php base_url() ?>assets\build\css\plugins\owl.carousel.min.css">



<!-- <section  class="plans anime">
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
      <?php //$quant_planos = 0; ?>
      <?php //foreach ($plans as $row) : ?>
      <?php //$id_plan = $row->id;
        //$quant_planos++; ?>
      <div class="col-md-12 d-flex justify-content-center plan-container">
        <div class="plan-unique">
          <div class="plan-title">
            <?php //if ($row->speed == 300) { ?>
             <span class="plan-recommended">Recomendado</span> -->
            <?php //} ?>
            <!-- <div class="plan-box-title">
              <span class="p-3 plan-inner-title"><?php //echo $row->title; ?></span>
            </div> -->
            <!-- <span class="plan-speed"><?php //echo $row->speed; ?></span>
            <div class="plan-box-title">
              <span class="plan-metric">MB</span>
              <span class="plan-fiber">fibra</span>
            </div> -->
          <!-- </div>
          <div class="plan-body">
            <div class="plan-pricing-box">
              <div class="pricing-number">
                <?php //$preco = explode('.', $row->amount); ?>
                <span class="pricing-unit">R$</span>
                <span class="pricing-value"><?php //echo $preco[0] ?></span>
                <div class="pricing-cents-box">
                  <span class="pricing-cents-value">,<?php //echo $preco[1] ?></span>
                  <span class="pricing-month">/mês</span>
                </div>
              </div>
            </div>
            <div class="plan-description-container">
              <ul class="plan-description-list-container">
                <li class="plan-description-list"> -->
                  <!-- <div class="description-image-container">
                    <img class="description-image"
                      src="<?php //echo base_url(); ?>painel/assets/build/img/img_itens/icon-teste.png">
                  </div> -->
                  <!-- <div class="description-name-container">
                    <p class="description-name">Download: <?php //echo $row->speed; ?></p>
                  </div>
                </li> -->
                <!-- <li class="plan-description-list"> -->
                  <!-- <div class="description-image-container">
                    <img class="description-image"
                      src="<?php //echo base_url(); ?>painel/assets/build/img/img_itens/icon-teste.png">
                  </div> -->
                  <!-- <div class="description-name-container">
                    <p class="description-name">Upload: <?php //echo $row->upload; ?></p>
                  </div>
                </li> -->
                <?php //foreach ($itens as $i) : ?>
                <?php //if ($i->id_plans == $id_plan) : ?>
                <!-- <li class="plan-description-list"> -->
                  <!-- <div class="description-image-container">
                    <img class="description-image"
                      src="<?php //echo base_url(); ?>painel/assets/build/img/img_itens/icon-teste.png">
                  </div> -->
                  <!-- <div class="description-name-container">
                    <p class="description-name"><?php //echo $i->description ?></p>
                  </div>
                </li> -->
                <?php //endif; ?>
                <?php //endforeach; ?>
              </ul>
            <!-- </div>
            <div class="plan-activation-box">
              <div class="plan-activation-text">
                <h5 class="plan-text">Ativação gratuita</h5>
              </div>
              <div class="plan-activation-choose">
                <a class="plan-choose"
                  href="<?php //echo base_url() ?>contract/<?php //echo $row->url_friendly ?>">Escolher</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php //endforeach; ?>
    </div>
  </div>
</section> -->

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php $count = 0; ?>
      <?php foreach ($banners as $row) : ?>
        <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
          <?php $count++; ?>
          <picture>
            <source class="w-100 d-block" media="(max-width: 750px)" srcset="<?php echo base_url() ?>painel/assets/build/img/banners/<?php echo $row->small ?>">
            <source class="w-100 d-block" media="(min-width: 1900px)" srcset="<?php echo base_url() ?>painel/assets/build/img/banners/<?php echo $row->big ?>">
            <img class="w-100 d-block" src="<?php echo base_url() ?>painel/assets/build/img/banners/<?php echo $row->medium ?>" alt="<?php echo $row->description; ?>">
          </picture>
        </div>
      <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" <?php echo ($count == 1) ? 'style="display: none;"' : ''; ?>>
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" <?php echo ($count == 1) ? 'style="display: none;"' : ''; ?>>
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</section>

<section class="speed-test anime">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-4 speed-test-img-container">
        <img class="speed-test-img" src="<?php echo base_url() ?>assets/build/img/rocket-speedtest.webp" alt="Foguete">
      </div> -->
      <div class="col-md-6 text-center">
        <p class="speed-test-title">Teste de velocidade</p>
        <a class="btn speed-test-link" href="https://conectafibra.speedtestcustom.com/">Testar agora!</a>
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <p class="speed-test-text">Para o seu teste ser efetivo, feche as demais janelas do navegador e cancele os downloads.</p>
      </div>
    </div>
  </div>
</section>

<main>
  <!-- <section class="my-5 store">
    <div class="container">
      <div class="row pt-3 anime">
        <div class="col-md">
          <h2 class="store-title">
            <i class="fas fa-map-marker-alt"></i>
            Nossas lojas
          </h2>
        </div>
      </div>
      <div class="row anime mt-2 justify-content-center">
        <?php foreach ($places as $row) : ?>
          <div class="col-12 col-sm-6 col-md-4 mb-3">
            <div class="storeBlockImg store-image mb-3">
              <?php foreach ($gallery_places as $img) : ?>
                <?php if ($img->id_place == $row->id) : ?>
                  <img class="mx-auto" src="<?php echo base_url() ?>painel/assets/build/img/img_places/<?php echo $img->img ?>" alt="Estabelecimento da conecta">
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
            <div class="store-city-name-container my-2">
              <h4 class="store-city-name"><?php echo $row->city ?></h4>
            </div>
            <p class="m m-0 mt-3 store-city-description">
              <?php echo $row->address; ?>, <?php echo $row->number; ?> <?php echo $row->neighborhood; ?> •
              CEP: <?php echo $row->cep; ?>
            </p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section> -->

  <section class="ideal-plan anime">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center py-4">
          <h2 class="ideal-plan-title anime">Confira a velocidade dos planos!</h2>
          <p class="ideal-plan-paragrafo anime">Tem planos de internet na <span>medida certa</span> para <span>você!</span></p>
          <a class="ideal-plan-link anime" href="<?php echo base_url(); ?>plano-ideal">Descubra seu plano ideal</a>
        </div>
        <div class="col-md-6 col-ideal-plan">
          <img class="img-ideal-plan anime" alt="btn-planoIdeal" src="<?php echo base_url() ?>assets/build/img/imagem-plano-ideal.webp" draggable="false">
        </div>
      </div>
    </div>
  </section>

  <section class="anime">
    <?php $this->load->view('elements/svg_container'); ?>
  </section>

</main>



<section class="anime">
  <div class="container app-conecta">
    <div class="row justify-content-between">
      <div class="col-md-5 app-conecta-container-img">
        <img class="app-conecta-img" src="<?php echo base_url() ?>assets/build/img/app_conecta.webp" alt="Propaganda do aplicativo da Conecta">
      </div>
      <div class="col-md-5 app-conecta-container-text">
        <h2 class="app-conecta-title">Tudo a um click <span>em qualquer lugar</span></h2>
        <p class="app-conecta-text">Acesse a <span>2ª via</span> de sua conta ou solicite reparo de um <span>jeito fácil e rápido!</span></p>
        <p class="app-conecta-descricao">Disponível pra Download:</p>

        <div class="app-conecta-container-download">
          <a href="https://play.google.com/store/apps/details?id=com.hubsoft_client_app.conecta" rel="noreferrer noopener" target="_blank">
            <img class="app-conecta-download-img" src="<?php echo base_url() ?>assets/build/img/google-play-download.png" alt="Download do app Conecta pelo Google Play">
          </a>
          <a href="https://apps.apple.com/br/app/conecta-fibra/id1503578312" rel="noreferrer noopener" target="_blank">
            <img class="app-conecta-download-img" src="<?php echo base_url() ?>assets/build/img/app-store-download.png" alt="Download do app Conecta pela App Store">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="blog-conecta anime">
  <div class="container">
    <div class="row anime">
      <div class="col-12">
        <h2 class="title-blog-conecta">Blog Conecta</h2>
      </div>
    </div>
    <div class="row anime container-post-blog">
      <?php foreach ($posts as $row) : ?>
        <div class="col-12 col-sm-6 col-md-4 content-post-blog">
          <a href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly ?>" class="link-img-blog">
            <img src="painel\assets\build\img\img_blog\<?php echo $row->img ?>" class="img-post-blog" alt="Imagem blog">
          </a>
          <div class="card-post-blog">
            <a class="card-title-blog" href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly ?>"><?php echo $row->title ?></a>
            <p class="card-sinopse-blog"><?php echo $row->sub_text ?>...</p>
            <a class="btn card-button-blog" href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly ?>">Leia mais no blog</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section> -->



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