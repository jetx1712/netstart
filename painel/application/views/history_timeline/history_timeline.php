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
                <h3 class="card-title d-inline">History timeline</h3>

              </div>
              <div class="col-md">
              <a href="<?php echo base_url()?>history_timeline/register"
              class="btn btn-primary float-right">Adicionar novo</a>
              </div>
            </div>
           <hr>
          </div>
          <div class="card-body">
            <table id="tableTimeline" class="table table-hover w-100">
              <thead class=" text-primary">
                <th>Titulo</th>
                <th>Ano</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach($years as $row): ?>
                <tr>
                  <td><?php echo $row->title; ?></td>
                  <td><?php echo $row->year; ?></td>
                  <td>
                    <a href="<?php echo base_url()?>history_timeline/edit/<?php echo $row->id; ?>">
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
    </div>
  </div>
  <?php $this->load->view('elements/footer');?>