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
            <h3 class="card-title">Cadastrar de seo</h3>
            <hr>
          </div>
          <form action="<?php echo base_url(); ?>seo/insert_seo_pag" method="post">
            <div class="card-body">
              <div class="row ">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label for="pag">Página</label>
                    <input type="text" name="pag" id="pag" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-6 pl-md-1">
                  <div class="form-group ">
                    <label for="tags">Tags(sepra por virgula)</label>
                    <input type="text" name="tags" id="tags" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ">
                  <div class="form-group ">
                    <label for="description">Descriçao</label>
                    <textarea  maxlength="200" class="form-control" name="description" id="description" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right" name="insert_seo_pag">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('elements/footer');?>