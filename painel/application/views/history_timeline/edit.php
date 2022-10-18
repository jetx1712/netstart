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
        <div class="card ">
          <div class="card-header">
            <div class="row">
              <div class="col-md">
                <h3 class="card-title">Editar</h3>
              </div>
              <div class="col-md">
                <a class="btn btn-primary float-right" href="<?php echo base_url()?>history_timeline">
                  Voltar
                </a>
              </div>
            </div>
            <hr>
          </div>
          <form action="<?php echo base_url(); ?>history_timeline/update/<?php echo $year->id; ?>
          " method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title">Título</label>
                    <textarea name="title" class="form-control"  cols="30" rows="10">
                      <?php echo $year->title; ?>
                  </textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="year">Ano</label>
                    <input name="year" type="text" value="<?php echo $year->year;?>" class="form-control p-1"
                      maxlength="4">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" value="<?php echo $year->id?>">
                  <button name="update" class="btn btn-primary float-right">Confirmar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>