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
    <form action="<?php echo base_url(); ?>plans/insert_plans" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h4 class="card-title d-inline">Cadastrar plano</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md pr-md-1">
                  <div class="form-group">
                    <label for="speed">Velocidade de download</label>
                    <input type="text" name="speed" id="speed" class="form-control" placeholder="(em MB/s)" value="">
                  </div>
                </div>
                <div class="col-md pr-md-1">
                  <div class="form-group">
                    <label for="upload">Velocidade de upload</label>
                    <input type="text" name="upload" id="upload" class="form-control" placeholder="(em MB/s)" value="">
                  </div>
                </div>
                <div class="col-md px-md-1">
                  <div class="form-group">
                    <label for="loyalty_discount">Desconto de fidelidade</label>
                    <input type="text" name="loyalty_discount" id="loyalty_discount" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md pl-md-1">
                  <div class="form-group">
                    <label for="url_friendly">URL Amigável</label>
                    <input type="text" name="url_friendly" id="url_friendly" class="form-control" value="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label for="amount">Valor</label>
                    <input type="text" name="amount" id="amount" class="form-control amount" value="">
                  </div>
                </div>
                <div class="col-md-6 pl-md-1">
                  <div class="form-group">
                    <label for="promotional_value">Valor promocional</label>
                    <input type="text" name="promotional_value" id="promotional_value" class="form-control amount"
                      value="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label for="frequency">Periodicidade</label>
                    <input type="text" name="frequency" id="frequency" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-6 pl-md-1">
                  <div class="form-group">
                    <label for="description">Descrição</label>
                    <input type="text" name="description" id="description" class="form-control" value="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" value="" class="form-control" id="title">
                  </div>
                </div>
                <div class="col-md-6 pl-md-1">
                  <div class="form-group">
                    <label for="situation">Situação</label>
                    <select name="situation" class="form-control" id="situation">
                      <option value=""></option>
                      <option value="1">Ativado</option>
                      <option value="0">Desativado</option>
                    </select>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h4 class="card-title d-inline">Adicionar itens</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <?php foreach ($itens as $row): ?>
                <div class="col-md-4">
                  <div class="form-group">
                    <input type="checkbox" name="itens[]" value="<?php echo $row->id; ?>" id="item_<?php echo $row->id; ?>">
                    <label for="item_<?php echo $row->id; ?>"><?php echo $row->description; ?></label>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="ml-auto">
                  <button type="submit" name="register_plans" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <?php $this->load->view('elements/footer');?>
