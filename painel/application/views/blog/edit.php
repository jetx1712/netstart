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
          <form action="<?php echo base_url(); ?>blog/update_post/<?php echo $post->id; ?>" method="post"
            enctype="multipart/form-data">
            <div class="card-header">
              <h3 class="card-title">Editar Post</h3>
              <hr>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="blog_title">Título</label>
                    <input type="text" class="form-control p-1" name="blog_title" value="<?php echo $post->title; ?>"
                      id="blog_title">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="sub_text">Sub texto</label>
                    <input type="text" class="form-control p-1" name="sub_text" maxlength="100" id="sub_text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="font-weight-light">Campo de texto</p>
                  <textarea name="text_blog" rows="8" cols="80" id="editor"
                    value="<?php echo $post->text; ?>"><?php echo $post->text; ?></textarea>

                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="url_friendly">URL Amigável</label>
                    <input type="text" name="url_friendly" id="url_friendly" class="form-control"
                      value="<?php echo $post->url_friendly; ?>">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group pb-0">
                    <label for="category">Categoria</label>
                    <select class="custom-select" name="category" id="category">
                      <option value=""></option>
                      <?php foreach ($category as $row): ?>
                      <option value="<?php echo $row->id; ?>"
                        <?php echo ($post->category == $row->id) ? 'selected' : ''; ?>><?php echo $row->description; ?>
                      </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="tags" class="form-control" value="<?php echo $post->tags; ?>">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="reading_time">Tempo de leitura</label>
                    <input maxlength="5" type="text" name="reading_time" id="reading_time" class="form-control" value="<?php echo $post->reading_time; ?>">
                  </div>
                </div>
              </div>
              <div class="row " id="plusImgContent">
                <div class="col-md-1">
                  <span>Capa:</span>
                </div>
                <div class="col-md-2">
                  <label class="picimg_um" id="picimg_um">
                    <img id="img_um" data-pic="picimg_um" data-img="img_um" class="add_img"
                      src="<?php echo base_url(); ?>assets/build/img/img_blog/<?php echo $post->img; ?>" width="150">
                    <input id="picimg_um" name="img_post" type="file" value="<?php echo $post->img; ?>"
                      style="display: none;">
                    <br><br>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="ml-auto mx-3">
                  <button name="update_post" class="btn btn-primary">Confirmar</button>
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
    $(document).on("click", '.add_img', function () {
      var pic = '#' + $(this).data('pic');
      var img = '#' + $(this).data('img');

      console.log(pic);
      console.log(img);

      $(document).on("change", pic, function () {
        console.log(pic);
        readURLum(this);
      });

      function readURLum(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $(img).attr('src', e.target.result);
          };
          reader.readAsDataURL(input.files[0]);
        }
      }
    });

    $(document).on('click', '#plusImg', function () {
      var img = 'img_' + Math.floor((Math.random() * 100000) + 1);
      var pic = 'pic_' + Math.floor((Math.random() * 100000) + 1);
      $('#plusImgContent').append('<div class="col-md-2"><label class="' + pic + '" id="' + pic + '">\
      <img id="' + img + '" data-pic="' + pic + '" data-img="' + img + '" class="add_img" src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="150px">\
      <input id="' + pic + '" name="img_place[]" type="file" style="display:none;" ><br><br></label></div>')
    });
  </script>