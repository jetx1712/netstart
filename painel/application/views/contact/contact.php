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
            <div class="row">
              <div class="col-md">
                <h3 class="card-title">Contatos</h3>
              </div>
              <!-- <div class="col-md-4">
                <a href="<?php echo base_url()?>contact/register" class="btn btn-primary float-right">
                  Novo contato</a>
              </div> -->
            </div>
            <hr>
          </div>
          <div class="card-body">
          <table id="tabelaUm" class="table table-hover w-100">
              <thead class=" text-primary">
                <th>Telefone</th>
                <th>WhatsApp</th>
                <th>E-mail</th>
                <th>Detalhes</th>
              </thead>
              <tbody>
                <?php foreach ($contact as $row): ?>
                  <tr>
                    <td><?php echo $row->phone?></td>
                    <td><?php echo $row->wpp?></td>
                    <td><?php echo $row->email?></td>
                    <td> <a href="<?php echo base_url()?>contact/detail/<?php echo $row->id?>">
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