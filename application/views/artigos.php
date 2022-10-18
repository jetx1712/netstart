<?php $this->load->view('elements/header');?>
<?php $this->load->view('elements/sidebar');?>
<section class="my-5 store anime">
  <div class="container">
    <div class="row pt-3">
      <div class="col-md anime text-uppercase">
        <h2>artigos</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <?php foreach($posts as $row): ?>
              <div class="col-md-6 py-2">
                <a href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly?>">
                  <img style="object-fit: cover;" src="<?php echo base_url()?>painel/assets/build/img/img_blog/<?php echo $row->img?>" class="img_categoria" alt="<?php echo $row->title?>">
                </a>
                <div class="corpo-blog">
                  <div class="row">
                    <div class="col-md-12">
                      <a class="titulo_post_blog" href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly?>">
                        <?php echo $row->title?>
                      </a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="texto-blog w-100">
                        <?php echo $row->sub_text?>...
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <a class="btn-blog mb-sm-2"
                        href="<?php echo base_url(); ?>blog/<?php echo $row->url_friendly?>">Leia mais no blog</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $this->load->view('elements/footer');?>