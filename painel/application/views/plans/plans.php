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
      <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title d-inline">Planos</h4>
            <a href="<?php echo base_url()?>plans/register"
              class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
          </div>
          <div class="card-body">
            <table id="tabelaUm" class="table table-hover w-100">
              <thead class=" text-primary">
                <th>Título</th>
                <th>Valor</th>
                <th>Última alteração</th>
                <th>Situação</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach ($plans as $row): ?>
                <?php $register = date_create($row->register); ?>
                <tr>
                  <td><?php echo $row->description; ?></td>
                  <td>R$ <?php echo $row->amount; ?></td>
                  <td><?php echo date_format($register, 'd/m/Y'); ?></td>
                  <td><?php echo ($row->situation == '1') ? 'Ativo' : 'Inativo'; ?></td>
                  <td>
                    <a href="<?php echo base_url()?>plans/edit/<?php echo $row->id; ?>">
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
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title d-inline">Itens</h4>
            <button type="button" name="button" class="btn btn-primary float-md-right float-sm-right float-xs-right"
              data-toggle="modal" data-target="#add_itens">Cadastrar</button>
          </div>
          <div class="card-body">
            <table id="tabelaDois" class="table table-hover w-100">
              <thead class=" text-primary">
                <th>Imagem</th>
                <th>Descrição</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach ($itens as $row): ?>
                <tr>
                  <td>
                    <img src="<?php echo base_url(); ?>assets/build/img/img_itens/<?php echo $row->img; ?>" width="50">
                  </td>
                  <td><?php echo $row->description; ?></td>
                  <td>
                    <button data-id="<?php echo $row->id; ?>" data-img="<?php echo $row->img; ?>" data-description="<?php echo $row->description; ?>"
                      id="edit_itens" data-toggle="modal" data-target="#modal_edit_itens">
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
    <div class="row">
      <dic class="col-md-6">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md">
                <h2 class="card-title">Plano ideal</h2>
              </div>
              <div class="col-md">
                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalAdicionarPlanoIdeal">Add</button>
              </div>
            </div>
            <hr>
          </div>
          <div class="card-body">
          <table id="tabelaTres" class="table table-hover w-100">
              <thead class=" text-primary">
                <th>Plano ideal</th>
                <th>Ação</th>
              </thead>
              <tbody>
                <?php foreach ($ideal_plans as $row): ?>
                <tr>
                  <td><?php echo $row->speed; ?>MB</td>
                  <td>
                    <span class="text-primary editIdealPlan" data-id="<?php echo $row->id; ?>"><i class="nc-icon nc-zoom-split"></i>
                    </span>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </dic>
    </div>
  </div>

  <!-- Modal Adicionar Plano Ideal -->
  <div class="modal fade" id="modalAdicionarPlanoIdeal" tabindex="-1" aria-labelledby="modalAdicionarPlanoIdeal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAdicionarPlanoIdeal">Adicionar plano ideal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php base_url(); ?>plans/insert_ideal_plan" method="post">
        <div class="modal-body">
          <!-- <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="people">Quantidade de pessoas</label>
                <input type="text" class="form-control" id="" name="people">
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Planos</label>
                <select class="form-control" name="id_plan" id="">
                  <option value=""></option>
                <?php foreach ($plans as $row): ?>
                  <option value="<?php echo $row->id; ?>"><?php echo $row->description; ?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label for="people">Recomendado</label>
                <select class="form-control register_recommended" name="" id="">
                  <option value=""></option>
                  <?php foreach ($how_used as $row): ?>
                      <option value="<?php echo $row->id; ?>"><?php echo $row->description; ?></option>
                  <?php endforeach; ?>
                  <!-- <option value="ENVIAR E RECEBER E-MAILS">ENVIAR E RECEBER E-MAILS</option>
                  <option value="OUVIR MÚSICA ONLINE">OUVIR MÚSICA ONLINE</option>
                  <option value="BAIXAR FILMES E MÚSICAS">BAIXAR FILMES E MÚSICAS</option>
                  <option value="COMPARTILHAR FOTOS E VÍDEOS">COMPARTILHAR FOTOS E VÍDEOS</option>
                  <option value="ASSISTIR VÍDEOS ONLINE">ASSISTIR VÍDEOS ONLINE</option>
                  <option value="JOGOS ONLINE">JOGOS ONLINE</option>
                  <option value="VIDEO CONFERÊNCIA">VIDEO CONFERÊNCIA</option> -->
                </select>
              </div>
            </div>
            <div class="col-md-2 pt-3">
              <button type="button" name="button" class="btn btn-primary add_recommended"
               id="add_recommended"
               data-id="register_list_recommended" data-recommended="register_recommended">
                +
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <tbody id="register_list_recommended">

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="insert_ideal_plan" class="btn btn-primary">Salvar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- Modal UPDATE -->
<div class="modal fade" id="modalUpdatePlanoIdeal" tabindex="-1" aria-labelledby="modalUpdatePlanoIdeal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUpdatePlanoIdeal">Editar plano ideal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php base_url(); ?>plans/update_ideal_plan" method="post">
      <div class="modal-body">
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="people">Quantidade de pessoas</label>
              <input type="text" class="form-control" id="people"name="people">
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Planos</label>
              <select class="form-control" name="id_plan" id="id_plan">
                <option value=""></option>
              <?php foreach ($plans as $row): ?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->description; ?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="form-group">
              <label for="people">Recomendado</label>
              <select class="form-control edit_recommended" name="" id="recommended">
                <option value=""></option>
                <?php foreach ($how_used as $row): ?>
                    <option value="<?php echo $row->id; ?>"><?php echo $row->description; ?></option>
                <?php endforeach; ?>
                <!-- <option value="ENVIAR E RECEBER E-MAILS">ENVIAR E RECEBER E-MAILS</option>
                <option value="OUVIR MÚSICA ONLINE">OUVIR MÚSICA ONLINE</option>
                <option value="BAIXAR FILMES E MÚSICAS">BAIXAR FILMES E MÚSICAS</option>
                <option value="COMPARTILHAR FOTOS E VÍDEOS">COMPARTILHAR FOTOS E VÍDEOS</option>
                <option value="ASSISTIR VÍDEOS ONLINE">ASSISTIR VÍDEOS ONLINE</option>
                <option value="JOGOS ONLINE">JOGOS ONLINE</option>
                <option value="VIDEO CONFERÊNCIA">VIDEO CONFERÊNCIA</option> -->
              </select>
            </div>
          </div>
          <div class="col-md-2 pt-3">
            <button type="button" name="button" class="btn btn-primary add_recommended"
             id="add_recommended" data-recommended="edit_recommended"
             data-id="list_recommended">
              +
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped table-bordered">
              <tbody id="list_recommended">

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" id="id" name="id" value="">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update_ideal_plan" class="btn btn-primary">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- Modal Add Itens -->
  <div class="modal fade" id="add_itens" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo base_url(); ?>plans/register_itens" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar itens</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <label class="picimg_um" id="picimg_um">
                  <img id="img_um" data-pic="picimg_um" data-img="img_um" class="add_img"
                    src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="100">
                  <input id="picimg_um" name="img_item" type="file" style="display: none;">
                  <br><br>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="description" id="description" class="form-control" value="">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" name="register_itens" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Edit Itens -->
  <div class="modal fade" id="modal_edit_itens" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo base_url(); ?>plans/update_itens" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar itens</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <label class="picimg_2" id="picimg_2">
                  <img id="img_2" data-pic="picimg_2" data-img="img_2" class="add_img img_item"
                    src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="100">
                  <input id="picimg_2" name="edit_img_item" type="file" style="display: none;">
                  <br><br>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="description">Descrição</label>
                  <input type="text" name="edit_description" id="edit_description" class="form-control" value="">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <input type="hidden" name="id_itens" id="id_itens" value="">
            <button type="submit" name="update_itens" class="btn btn-primary">Atualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php $this->load->view('elements/footer');?>
