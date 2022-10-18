<?php $this->load->view('elements/header');?>
<div class="wrapper ">
  <?php $this->load->view('elements/sidebar_lateral');?>
  <?php $this->load->view('elements/sidebar');?>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Leads</h2>
            <hr>
          </div>
          <div class="card-body">
            <table id="tabelaUm" class="table table-hover w-100">
              <thead class="text-primary">
                <th>Nome</th>
                <th>Email</th>
              </thead>
              <tbody>
                <?php foreach ($leads as $row): ?>
                  <tr>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->email; ?></td>
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