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
            <h3 class="card-title">Cadastrar de contato</h3>
            <hr>
          </div>
          <form action="<?php echo base_url(); ?>contact/insert_contact" method="post">
            <div class="card-body">
              <div class="row ">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group ">
                    <label for="wpp">Whatsapp</label>
                    <input type="text" name="wpp" id="wpp" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group ">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group ">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-6 pl-md-1">
                  <div class="form-group ">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" class="form-control" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right" name="insert_contact">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('elements/footer');?>