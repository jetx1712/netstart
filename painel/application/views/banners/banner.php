<?php $this->load->view('elements/header');?>
<div class="wrapper ">
  <?php $this->load->view('elements/sidebar_lateral');?>
  <?php $this->load->view('elements/sidebar');?>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- INI: AVISOS -->
        <?php if (!empty($error)) { ?>
        <div class="alert alert-<?php echo $error['error_type']; ?>" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $error['error_string']; ?>
        </div>
        <?php } ?>
        <!-- INI: AVISOS -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title d-inline">Banners</h4>
            <button data-toggle="modal" data-target="#modal_add_banner"
              class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</button>
          </div>
          <div class="card-body">
            <div class="row">
              <?php foreach ($banners as $row): ?>
              <div class="col-md-6">
                <h5><?php echo $row->location; ?></h5>
                <img class="mb-3" src="<?php echo base_url(); ?>assets/build/img/banners/<?php echo $row->small; ?>"
                  alt="" width="auto" id="edit_img" data-toggle="modal" data-id="<?php echo $row->id; ?>"
                  data-target="#modal_edit_banner" data-description="<?php echo $row->description; ?>"
                  data-small="<?php echo $row->small; ?>" data-medium="<?php echo $row->medium; ?>"
                  data-big="<?php echo $row->big; ?>" data-location="<?php echo $row->location; ?>"
                  style="max-height: 150px;">
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- modal_add_banner -->
  <div class="modal fade" id="modal_add_banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo base_url(); ?>banners/register_banner" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar banner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row mb-2">
              <div class="col-md">
                <div class="form-group">
                  <label for="location">Qual pagina ?</label>
                  <select class="form-control" name="location" required>
                    <option value=""></option>
                    <option value="Home">Home</option>
                    <option value="A Conecta">A Conecta</option>
                    <option value="Nossos planos">Nossos planos</option>
                    <option value="Blog">Blog</option>
                    <option value="Fale conosco">Fale conosco</option>
                    <option value="Desativar">Desativar</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-md">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" maxlength="30" name="description" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="alert alert-warning " >
                  Colocar todos os tamanhos
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div id="plusImgContent">
                  <label class="picimg_um" id="picimg_um"> Pequena
                    <img id="img_um" data-pic="picimg_um" data-img="img_um" class="add_img"
                      src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="200">
                    <input id="picimg_um" name="img_small" type="file" style="display: none;" required>
                    <br><br>
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div id="plusImgContent">
                  <label class="picimg_um" id="picimg_um"> Média
                    <img id="img_2" data-pic="picimg_2" data-img="img_2" class="add_img"
                      src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="200">
                    <input id="picimg_2" name="img_medium" type="file" style="display: none;" required>
                    <br><br>
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div id="plusImgContent">
                  <label class="picimg_um" id="picimg_um"> Grande
                    <img id="img_3" data-pic="picimg_3" data-img="img_3" class="add_img"
                      src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="200">
                    <input id="picimg_3" name="img_big" type="file" style="display: none;" required>
                    <br><br>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="register_banner" class="btn btn-primary">Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- modal_edit_banner -->
  <div class="modal fade" id="modal_edit_banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo base_url(); ?>banners/delete_banner" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deletar banner?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row mb-2">
              <div class="col-md">
                <div class="form-group">
                  <label for="location">Qual pagina ?</label>
                  <input type="text" class="form-control" id="location" name="location" readonly>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-md">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" maxlength="30" id="description" class="form-control" name="description" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div id="plusImgContent">
                  <label class="picimg_um" id="picimg_um">
                    <img id="img_um" data-pic="picimg_um" data-img="img_um" class="add_img edit_img_banner" width="400"
                      src="<?php echo base_url(); ?>assets/build/img/plus.jpg">
                    <br><br>
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div id="plusImgContent">
                  <label class="picimg_um" id="picimg_um">
                    <img id="img_2" data-pic="picimg_2" data-img="img_2" class="add_img edit_banner_dois" width="400"
                      src="<?php echo base_url(); ?>assets/build/img/plus.jpg">
                    <br><br>
                  </label>
                </div>
              </div>
              <div class="col-md-4">
                <div id="plusImgContent">
                  <label class="picimg_um" id="picimg_um">
                    <img id="img_3" data-pic="picimg_3" data-img="img_3" class="add_img edit_banner_tres" width="400"
                      src="<?php echo base_url(); ?>assets/build/img/plus.jpg">
                    <br><br>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <input type="hidden" name="id_banner" id="id_banner" value="">
            <button type="submit" name="delete_banner" class="btn btn-danger">Deletar?</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php $this->load->view('elements/footer');?>