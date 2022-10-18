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
    <form action="<?php echo base_url(); ?>plans/update_plan/<?php echo $plan->id; ?>" method="post">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-user">
          <div class="card-header">
            <h4 class="card-title d-inline">Editar plano</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md pr-md-1">
                <div class="form-group">
                  <label for="speed">Velocidade de download</label>
                  <input type="text" name="speed" id="speed" class="form-control" placeholder="(em MB/s)"
                    value="<?php echo $plan->speed; ?>">
                </div>
              </div>
              <div class="col-md pr-md-1">
                <div class="form-group">
                  <label for="upload">Velocidade de upload</label>
                  <input type="text" name="upload" id="upload" class="form-control" placeholder="(em MB/s)" value="<?php echo $plan->upload; ?>">
                </div>
              </div>
              <div class="col-md px-md-1">
                <div class="form-group">
                  <label for="loyalty_discount">Desconto de fidelidade</label>
                  <input type="text" name="loyalty_discount" id="loyalty_discount" class="form-control amount" value="<?php echo $plan->loyalty_discount; ?>">
                </div>
              </div>
              <div class="col-md pl-md-1">
                <div class="form-group">
                  <label for="url_friendly">URL Amigável</label>
                  <input type="text" name="url_friendly" id="url_friendly" class="form-control" value="<?php echo $plan->url_friendly; ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label for="amount">Valor</label>
                  <input type="text" name="amount" id="amount" class="form-control amount" value="<?php echo $plan->amount; ?>">
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <label for="promotional_value">Valor promocional</label>
                  <input type="text" name="promotional_value" id="promotional_value" class="form-control amount" value="<?php echo $plan->promotional_value; ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label for="frequency">Periodicidade</label>
                  <input type="text" name="frequency" id="frequency" class="form-control" value="<?php echo $plan->frequency; ?>">
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="description" id="description" class="form-control" value="<?php echo $plan->description; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label for="title">Título</label>
                  <input type="text" name="title" value="<?php echo $plan->title; ?>" class="form-control" id="title">
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <label for="situation">Situação</label>
                  <select class="form-control" name="situation" id="situation">
                    <option value=""></option>
                    <option value="1" <?php echo ($plan->situation == '1') ? 'selected': ''; ?>>Ativo</option>
                    <option value="0" <?php echo ($plan->situation == '0') ? 'selected': ''; ?>>Inativo</option>
                  </select>
                </div>
              </div>
            </div>

          </div>
          <div class="card-footer">
            <div class="row">
              <div class="ml-auto">
                <input type="hidden" name="id_plans" id="id_plans" value="<?php echo $plan->id; ?>">
                <button type="submit" name="update_plans" class="btn btn-primary">Atualizar</button>
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
            <span class="text-primary" id="alert" style="display: none;"></span>
          </div>
          <div class="card-body">
            <div class="row" id="itens">
              <?php foreach ($itens as $row): ?>
                <?php $count = 0; ?>
                <?php foreach ($itens_plans as $ckecked): ?>
                  <?php if($ckecked->id_item == $row->id){ $count = 1; ?>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="checkbox" name="itens[]" class="itens items_recommended_<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" id="items_recommended_<?php echo $row->id; ?>" checked>
                        <label for="items_recommended_<?php echo $row->id; ?>"><?php echo $row->description; ?></label>
                      </div>
                    </div>
                  <?php } ?>
                <?php endforeach; ?>
                <?php if ($count == 0) { ?>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="checkbox" name="itens[]" class="itens items_recommended_<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" id="items_recommended_<?php echo $row->id; ?>">
                      <label for="items_recommended_<?php echo $row->id; ?>"><?php echo $row->description; ?></label>
                    </div>
                  </div>
                <?php } ?>
              <?php endforeach; ?>
            </div>
          </div>
      </div>
    </div>
  </div>
</form>
</div>
<?php $this->load->view('elements/footer');?>
