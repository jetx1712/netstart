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
    <form action="<?php echo base_url(); ?>places/register_place" id="form_update_user" method="post"
      enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h4 class="card-title">Cadastrar localidade</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 pr-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="cep">CEP: </label>
                    <input type="text" class="form-control cep" name="cep" id="cep" size="10" required>
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="address">Endereco:</label>
                    <input type="text" class="form-control" name="address" id="address" size='30' required>
                  </div>
                </div>
                <div class="col-md-2 px-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="number">Numero:</label>
                    <input type="text" class="form-control" name="number" id="number" required>
                  </div>
                </div>
                <div class="col-md-3 pl-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="complement">Complemento:</label>
                    <input type="text" class="form-control" name="complement" id="complement">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="neighborhood">Bairro:</label>
                    <input type="text" class="form-control" name="neighborhood" id="neighborhood" required>
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="city">Cidade:</label>
                    <input type="text" class="form-control" name="city" id="city" required>
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group">
                    <label class="label-input-style" for="state">Estado:</label>
                    <input type="text" class="form-control" name="state" id="state" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 pl-md-1">
                  <div class="form-group">
                    <label for="opening_hours">Horário de funcionamento</label>
                    <input type="text" name="opening_hours" id="opening_hours" class="form-control"
                      placeholder="Horário de funcionamento" value="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Galeria</h4>
            </div>
            <div class="card-body">
              <div class="row align-items-center" id="plusImgContent">
                <div class="col-md-1">
                  <span class="btn btn-primary h1 btn-sm" id="plusImg">+</span>
                </div>
                <div class="col-md-2">
                  <label class="picimg_um" id="picimg_um">
                    <img id="img_um" data-pic="picimg_um" data-img="img_um" class="add_img"
                      src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="150px">
                    <input id="picimg_um" name="img_place[]" type="file" style="display: none;">
                    <br><br>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="ml-auto pr-4">
                <button name="register_place" class="btn btn-primary">Cadastrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
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
      <input id="' + pic + '" name="img_place[]" type="file" style="display:none;" ><br><br></label></div>')
    });
  </script>