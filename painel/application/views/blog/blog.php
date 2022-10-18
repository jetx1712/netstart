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
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title d-inline">Páginas</h4>
            <a href="<?php echo base_url()?>blog/register"
              class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
          </div>
          <div class="card-body">
            <table id="tabelaUm" class="table table-hover w-100">
              <thead class=" text-primary">
                <th>Título</th>
                <th>Autor</th>
                <th><i class="nc-icon nc-chat-33"></i></th>
                <th>Data</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach ($posts as $row): ?>
                <?php $data = date_create($row->register); ?>
                <tr>
                  <td>
                    <a href="<?php echo base_url();?>">
                      <span><?php echo $row->title; ?></span>
                    </a>
                  </td>
                  <td><?php echo $row->name ?></td>
                  <td>-</td>
                  <td><?php echo date_format($data, 'd/m/Y'); ?></td>
                  <td>
                    <a href="<?php echo base_url()?>blog/edit/<?= $row->id; ?>">
                      <i class="nc-icon nc-zoom-split"></i>
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" style="display: inline;">Categorias</h4>
            <button type="button" class="btn btn-primary float-right" name="button" data-toggle="modal"
              data-target="#modal_categorias">Adicionar</button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <table id="tabelaDois" class="table table-striped table-bordered w-100">
                  <thead class="text-primary">
                    <tr>
                      <th>Descrição</th>
                      <th>Url amigável</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($category as $row): ?>
                    <tr>
                      <td><?php echo $row->description; ?></td>
                      <td><?php echo $row->url_friendly; ?></td>
                      <td>
                        <button data-toggle="modal" data-target="#modal_edit_category" id="edit_category"
                          data-id="<?php echo $row->id ?>" data-description="<?php echo $row->description; ?>">
                          <i class="nc-icon nc-zoom-split"></i>
                        </button>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- modal_categorias -->
  <div class="modal fade" id="modal_categorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="<?php echo base_url(); ?>blog/register_category" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="description" id="description" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="url_friendly">Url amigável</label>
                  <input type="text" name="url_friendly" id="url_friendly" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="register_category" class="btn btn-primary">Cadastrar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<!-- modal_edit_category -->
<div class="modal fade" id="modal_edit_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?php echo base_url(); ?>blog/update_category" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="description">Descrição</label>
                <input type="text" name="edit_description" id="edit_description" value="" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="url_friendly">Url amigável</label>
                <input type="text" name="url_friendly" id="url_friendly" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <input type="hidden" name="id_category" id="id_category" value="">
          <button type="submit" name="update_category" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
  </div>
</div>
</div>


<?php $this->load->view('elements/footer');?>