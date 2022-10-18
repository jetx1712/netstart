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
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md">
                <h3 class="card-title">Seo das páginas </h3>
              </div>
              <div class="col-md-4">
                <a href="<?php echo base_url()?>seo/register" class="btn btn-primary float-right">
                  Novo </a>
              </div>
            </div>
            <hr>
          </div>
          <div class="card-body">
          <table id="tabelaUm" class="table table-hover w-100">
              <thead class=" text-primary">
                <th>Página</th>
                <th>Tags</th>
                <th>Ações</th>
              </thead>
              <tbody>
                <?php foreach ($seo as $row): ?>
                  <tr>
                    <td><?php echo $row->pag?></td>
                    <td><?php echo $row->tags?></td>
                    <td><a href="<?php echo base_url()?>seo/detail/<?php echo $row->id?>">
                      <i class="nc-icon nc-zoom-split"></i>
                    </a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('elements/footer');?>