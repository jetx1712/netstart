<?php $this->load->view('elements/header');?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ckeditor/css/samples.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ckeditor/toolbarconfigurator/lib/codemirror/neo.css">

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
          <form action="<?php echo base_url(); ?>blog/register_post" method="post" enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Cadastrar Post</h3>
              <hr>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="blog_title">Título</label>
                    <input type="text" class="form-control p-1" name="blog_title" id="blog_title">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="sub_text">Sub texto (max 100 caracteres)</label>
                    <input type="text" class="form-control p-1" name="sub_text" maxlength="100" id="sub_text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="font-weight-light">Campo de texto</label>
                    <textarea name="text_blog" rows="5" cols="80" id="editor"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="url_friendly">URL Amigável</label>
                    <input type="text" name="url_friendly" id="url_friendly" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="category">Categoria</label>
                    <select class="custom-select" name="category" id="category">
                      <option value=""></option>
                      <?php foreach ($category as $row): ?>
                      <option value="<?php echo $row->id; ?>"><?php echo $row->description; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="tags" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="reading_time">Tempo de leitura</label>
                    <input maxlength="4" type="text" name="reading_time" id="reading_time" class="form-control" value="">
                  </div>
                </div>
                <div class="col-md-5 mt-4">
                  <div class="form-group">
                    <div class="input-group">
                      <label class="custom-file-label" for="inputGroupFile01">Imagem de capa</label>
                      <div class="custom-file">
                        <input type="file" name="img_post" class="custom-file-input" id="inputGroupFile01"
                          aria-describedby="inputGroupFileAddon01">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="ml-auto mx-3">
                  <button name="register_post" class="btn btn-primary">Confirmar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('elements/footer');?>
  <script src="<?php echo base_url(); ?>assets/ckeditor/js/ckeditor.js"></script>
  <script src="<?php echo base_url(); ?>assets/ckeditor/js/sample.js"></script>
  <script>
    initSample();
  </script>