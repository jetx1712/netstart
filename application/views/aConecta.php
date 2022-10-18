<?php $this->load->view('elements/header');?>
<?php $this->load->view('elements/sidebar');?>
<script>
  document.getElementsByTagName("html")[0].className += " js";
</script>

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php $count = 0; ?>
      <?php foreach ($banners as $row) : ?>
      <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
        <?php $count++; ?>
        <picture>
          <source class="w-100 d-block" media="(max-width: 750px)"
            srcset="<?php echo base_url() ?>painel/assets/build/img/banners/<?php echo $row->small ?>">
          <source class="w-100 d-block" media="(min-width: 1900px)"
            srcset="<?php echo base_url() ?>painel/assets/build/img/banners/<?php echo $row->big ?>">
          <img class="w-100 d-block"
            src="<?php echo base_url() ?>painel/assets/build/img/banners/<?php echo $row->medium ?>"
            alt="<?php echo $row->description; ?>">
        </picture>
      </div>
      <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"
      <?php echo ($count == 1)? 'style="display: none;"' : ''; ?>>
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"
      <?php echo ($count == 1)? 'style="display: none;"' : ''; ?>>
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</section>


<section class="anime">
  <div class="container">
    <div class="row paragraph-container">
      <div class="col-md-12">
        <h2 class="conecta-title">A Netstar</h2>
        <p class="conecta-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur cupiditate quaerat temporibus earum eligendi maxime qui illo nostrum eius aspernatur quas dignissimos, tempora odio explicabo enim architecto numquam eos quo!
        </p>
        <p class="conecta-paragraph">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis provident blanditiis est officiis nesciunt! Quod quis debitis vitae voluptatem quam adipisci laudantium quaerat dolor architecto iure accusantium, animi quo aperiam?
        </p>
        <p class="conecta-paragraph">
         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad nobis autem explicabo quam temporibus iste non at quas itaque deserunt, magnam tenetur! Ipsa eius quo dicta voluptas modi delectus quasi!
        </p>
        <p class="conecta-paragraph">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis accusantium vitae tempora ex labore nemo fugiat eveniet recusandae vel provident quibusdam nostrum esse, fuga dolorum consequatur magni maiores odit debitis!
        </p>
      </div>
    </div>
  </div>
</section>

<section class="mt-5 values anime">
  <div class="container">
    <div class="row values-container">
      <div class="col-12 col-md-3 col-sm-6 values-box">
        <h3 class="values-title">MISSÃO</h3>
        <p class="values-text">Promover aos nossos clientes acesso à internet de alta qualidade com um atendimento de excelência.</p>
      </div>
      <div class="col-12 col-md-3 col-sm-6 values-box">
        <h3 class="values-title">VISÃO</h3>
        <p class="values-text">Ser reconhecida como a melhor empresa de internet na região do Alto Rio Pardo no Norte de Minas.</p>
      </div>
      <div class="col-12 col-md-3 col-sm-6 values-box">
        <h3 class="values-title">VALORES</h3>
        <ul class="values-text values-list">
          <li>Honestidade.</li>
          <li>Transparência.</li>
          <li>Inovação.</li>
          <li>Valorização.</li>
        </ul>
      </div>
      <div class="col-12 col-md-3 col-sm-6 values-box">
        <h3 class="values-title">CRENÇA</h3>
        <p class="values-text">Cremos em Jesus Cristo como único e suficiente Salvador.</p>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('timeline');?>

<!-- <section class="my-5 store anime">
  <div class="container">
    <div class="row pt-3">
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
                <img class="mx-auto" src="<?php echo base_url() ?>painel\assets\build\img\img_places\<?php echo $img->img ?>" alt="Estabelecimento da conecta">
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="store-city-name-container my-2">
            <h4 class="store-city-name"><?php echo $row->city ?></h4>
          </div>
          <p class="m m-0 mt-3 store-city-description">
            <?php echo $row->address; ?>, <?php echo $row->number; ?> <?php echo $row->neighborhood; ?> •
            CEP:<?php echo $row->cep; ?>
          </p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section> -->

<?php $this->load->view('elements/footer');?>
<!-- <script src="<?php echo base_url()?>assets\build\js\timeline\util.js"></script>

<script src="<?php echo base_url()?>assets\build\js\timeline\swipe-content.js"></script>

<script src="<?php echo base_url()?>assets\build\js\timeline\main.js"></script> -->