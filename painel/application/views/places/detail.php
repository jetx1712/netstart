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
        <form action="<?php echo base_url(); ?>places/update_place/<?php echo $place->id; ?>" method="post"
          id="form_update_user" enctype="multipart/form-data">
          <div class="card card-user">
            <div class="card-header">
              <h4 class="card-title" style="display: inline;">Editar localidade</h4>
              <button name="update_place" class="btn btn-primary float-right">Atualizar</button>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 pr-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="cep">CEP: </label>
                    <input type="text" class="form-control cep" name="cep" id="cep" size="10"
                      value="<?php echo $place->cep; ?>" required>
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="address">Endereco:</label>
                    <input type="text" class="form-control" name="address" id="address" size='30'
                      value="<?php echo $place->address; ?>" required>
                  </div>
                </div>
                <div class="col-md-2 px-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="number">Numero:</label>
                    <input type="text" class="form-control" name="number" id="number"
                      value="<?php echo $place->number; ?>" required>
                  </div>
                </div>
                <div class="col-md-3 pl-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="complement">Complemento:</label>
                    <input type="text" class="form-control" name="complement" id="complement"
                      value="<?php echo $place->complement; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="neighborhood">Bairro:</label>
                    <input type="text" class="form-control" name="neighborhood" id="neighborhood"
                      value="<?php echo $place->neighborhood; ?>" required>
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="city">Cidade:</label>
                    <input type="text" class="form-control" name="city" id="city" value="<?php echo $place->city; ?>"
                      required>
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="state">Estado:</label>
                    <input type="text" class="form-control" name="state" id="state" value="<?php echo $place->state; ?>"
                      required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="opening_hours">Horário de funcionamento</label>
                    <input type="text" name="opening_hours" id="opening_hours" class="form-control"
                      placeholder="Horário de funcionamento" value="<?php echo $place->operating_hour; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo base_url(); ?>places/update_images/<?php echo $place->id; ?>" method="post"
          enctype="multipart/form-data">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" style="display: inline;">Galeria</h4>
              <button name="update_images" class="btn btn-primary float-right">Atualizar</button>
            </div>
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-md-1">
                  <span class="btn btn-primary h1 btn-sm" data-toggle="modal" data-target="#add_img">+</span>
                </div>
                <?php foreach ($gallery_places as $row): ?>
                <div class="col-md-2">
                  <label class="picimg_um" id="picimg_um">
                    <img id="img_um" data-pic="picimg_um" data-img="img_um" class="add_img"
                      src="<?php echo base_url(); ?>assets/build/img/img_places/<?php echo $row->img; ?>" width="150px">
                    <input id="picimg_um" name="img_place[]" type="file" style="display: none;">
                    <br><br>
                  </label>
                </div>
                <input type="hidden" name="id_img[]" value="<?php echo $row->id; ?>">
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Modal Add Image -->
  <div class="modal fade" id="add_img" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="<?php echo base_url(); ?>places/adicionar_new_img/<?php echo $place->id; ?>" method="post"
          enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar novas imagens</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row align-items-center" id="plusImgContent">
              <div class="col-md-1">
                <span class="btn btn-primary h1 btn-sm" id="plusImg">+</span>
              </div>
              <div class="col-md-2">
                <label class="picimg_um" id="picimg_um">
                  <img id="img_um" data-pic="picimg_um" data-img="img_um" class="add_img"
                    src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="150px">
                  <input id="picimg_um" name="new_img_place[]" type="file" style="display: none;">
                  <br><br>
                </label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="adicionar_img" class="btn btn-primary">Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php $this->load->view('elements/footer');?>

  <script>
    $(document).on("click", '.add_img', function () {
      var pic = '#' + $(this).data('pic');
      var img = '#' + $(this).data('img');

      console.log(pic);
      console.log(img);

      $(document).on("change", pic, function () {
        console.log(pic);
        readURLum(this);
      });

      function readURLum(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $(img).attr('src', e.target.result);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    });

    $(document).on('click', '#plusImg', function () {
      var img = 'img_' + Math.floor((Math.random() * 100000) + 1);
      var pic = 'pic_' + Math.floor((Math.random() * 100000) + 1);
      $('#plusImgContent').append('<div class="col-md-2"><label class="' + pic + '" id="' + pic + '">\
      <img id="' + img + '" data-pic="' + pic + '" data-img="' + img + '" class="add_img" src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="150px">\
      <input id="' + pic + '" name="new_img_place[]" type="file" style="display:none;" ><br><br></label></div>')
    });
  </script>