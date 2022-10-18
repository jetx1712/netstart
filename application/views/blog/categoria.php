<?php $this->load->view('elements/header'); ?>
<?php $this->load->view('elements/sidebar'); ?>

<section class="mb-4">
  <img class="img-fluid w-100" height="auto" src="<?php echo base_url() ?>assets\build\img\blog\novidade.jpg" alt="">
</section>

<section class="my-5 blog">
  <div class="container">
    <div class="row pt-3">
      <div class="col-md anime">
        <h2 class="blog-title">Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 blog-container">
        <div class="row">
          <?php foreach ($posts as $row) : ?>
            <div class="col-md-6 blog-post">
              <a class="blog-post-image-link" href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly ?>">
                <img class="blog-post-image" src="<?php echo base_url(); ?>painel/assets/build/img/img_blog/<?php echo $row->img; ?>" alt="<?php echo $row->title ?>">
              </a>
              <div class="blog-body">
                <div class="blog-container-title">
                  <a class="blog-inner-title" href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly ?>">
                    <?php echo $row->title; ?>
                  </a>
                </div>
                <div class="blog-text-container">
                  <p class="blog-text"><?php echo $row->sub_text; ?>...</p>
                </div>
                <div class="blog-btn-container">
                  <a class="blog-btn mb-sm-2" href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly ?>">Leia mais no blog</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- <div class="row">
          <div class="col-md-12 text-center">
            <a class="subtitle-link" href="<?php echo base_url(); ?>blog/artigo">mais artigos</a>
          </div>
        </div> -->
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
            <input type="email" class="our-content-searchfield" id="busca" aria-describedby="Busca" placeholder="Busque aqui...">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a class="our-content-speedtest" href="https://conectafibra.speedtestcustom.com/">
              <img class="our-content-speedtest-img" src="<?php echo base_url(); ?>assets\build\img\icon\rocket.jpeg" alt="">
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
                  <a class="our-content-link-item" href="<?php echo base_url(); ?>blog/categoria/<?php echo $row->url_friendly; ?>"><?php echo $row->description; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view('elements/footer'); ?>

<div class="modal fade" id="leadModal" tabindex="-1" aria-labelledby="leadModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="leadModal">Receba o nosso conteudo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php base_url(); ?>lead/insert_lead" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@exemplo.com">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" name="insert_lead" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
