<?php $this->load->view('elements/header');?>
<?php $this->load->view('elements/sidebar');?>

<section class="container-blog-post">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md">
            <h1 class="blog-title"><?php echo $post->title?></h1>
          </div>
        </div>
        <div class="row blog-date-container">
          <div class="col-md-12">
            <div class="blog-post-info">
              <?php $months = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'); ?>
                <?php
                  $date = date_create($post->register);
                  $day = date_format($date, 'd');
                  $month = date_format($date, 'm') - 1;
                  $year = date_format($date, 'Y');
                ?>
              <span class="blog-info-data"><span class="date"><?php echo $day?></span> de <span class="date"><?php echo $months[$month]?></span> de <span class="date"><?php echo $year?></span> </span>
              <span class="blog-info-category">Categoria: <span class="category"><?php echo $post->description?></span> </span>
              <span class="blog-info-lecture-time"> Tempo de leitura: <span class="time"><?php echo $post->reading_time; ?></span> minuto<?php echo ($post->reading_time == 1) ? '' : 's' ?></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="blog-image-container">
              <img class="blog-image"
                src="<?php echo base_url()?>painel/assets/build/img/img_blog/<?php echo $post->img?>" class="w-100"
                alt="<?php echo $post->title?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="text-field">
              <?php echo $post->text?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <h1 class="subtitle">comentários</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="our-content">
  <div class="container">
    <div class="row">
      <div class="col-md-7 our-content-container">
        <div class="row">
          <div class="col-md-12">
            <button data-toggle="modal" data-target="#leadModal" class="our-content-btn">receba nosso conteúdo</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label class="our-content-label pt-4" for="busca">Faça uma busca</label>
            <input type="email" class="our-content-searchfield" id="busca" aria-describedby="Busca"
              placeholder="Busque aqui...">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a class="our-content-speedtest" href="https://conectafibra.speedtestcustom.com/">
              <img class="our-content-speedtest-img" src="<?php echo base_url(); ?>assets\build\img\icon\rocket.jpeg" alt="Ícone Teste de velocidade">
              Teste de velocidade</a>
          </div>
        </div>
      </div>
      <div class="col-md-5 our-content-categories">
        <div class="row">
          <div class="col-md-12">
            <p class="our-content-categories-title">Categorias</p>
            <ul class="our-content-list-group">
              <?php foreach ($categories as $row) : ?>
              <li class="our-content-list-item">
                <a class="our-content-link-item"
                  href="<?php echo base_url(); ?>blog/categoria/<?php echo $row->url_friendly; ?>"><?php echo $row->description; ?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('elements/footer');?>