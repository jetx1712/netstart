var base_url = 'http://localhost/conecta/painel/';
// var base_url = 'https://conectafibra.com.br/painel/';

$('#entrar').click(function () {
  var email = $('#email').val();
  var password = $('#password').val();
  var erro = 0;

  if (email == "") {
    $("#preencha_email").show();
    $("#email").css({
      "border": "1px solid #FF0000"
    });
    erro++;
  } else {
    $("#preencha_usuario").hide();
    $("#usuario").css({
      "border": "1px solid rgba(0, 0, 0, 0.15)"
    });
  }
  if (password == "") {
    $("#preencha_senha").show();
    $("#password").css({
      "border": "1px solid #FF0000"
    });
    erro++;
  } else {
    $("#preencha_senha").hide();
    $("#password").css({
      "border": "1px solid rgba(0, 0, 0, 0.15)"
    });
  }
  if (erro != 0) {
    console.log(erro);
    erro = 0;
    return false;
  }
});

$(document).ready(function () {
  $('.select_write').select2();
  $("#nascimento").mask("99/99/9999");
  $(".born").mask("99/99/9999");
  $("#telefone").mask("(99) 99999-9999");
  $(".phone").mask("(99) 99999-9999");
  $("#cpf").mask("999.999.999-99");
  $(".cpf").mask("999.999.999-99");
  $("#cep").mask("99999-999");
  $(".cep").mask("99999-999");
  $("#cnpj").mask("99.999.999/9999-99");
  $(".cnpj").mask("99.999.999/9999-99");
  $("#placa").mask("aaa - 9999");
  $(".placa").mask("aaa - 9999");

  $(".amount").maskMoney({
    prefix: "",
    decimal: ".",
    thousands: ""
  });

});

$(document).on('click', '#add_phone', function () {
  $('.append_phone').append('<div class="col-md-4 pr-md-1">\
     <div class="form-group ">\
       <label for="phone">Telefone</label>\
       <input type="text" name="phone[]" id="phone" class="form-control phone" placeholder="Telefone" value="">\
     </div>\
   </div>');
});

$(document).on('click', '#edit_itens', function () {
  let description = $(this).data('description');
  let img = $(this).data('img');
  let id = $(this).data('id');

  $('#edit_description').val(description);
  $('.img_item').attr('src', 'assets/build/img/img_itens/'+img);
  $('#id_itens').val(id);
});

$(document).on('click', '.itens', function () {
  let item = $(this).val();
  let id_plans = $('#id_plans').val();
  $.ajax({
    url: base_url + 'plans/add_new_item',
    method: 'post',
    dataType: 'json',
    data: {
      id_plans: id_plans,
      item: item
    },
    success: function (data) {
      if($('.items_recommended_'+item).is(":checked")){
        $('#alert').show(400);
        $('#alert').text('Adicionado com sucesso!');
      } else {
        $('#alert').show(400);
        $('#alert').text('Removido com sucesso!');
      }
      setTimeout(function (){
        $('#alert').hide(600);
      }, 2500);
    }
  });
});

$(document).on('click', '#edit_category', function () {
  let id = $(this).data('id');
  let description = $(this).data('description');

  $('#id_category').val(id);
  $('#edit_description').val(description);
});

$(document).on("click", '.add_img', function () {
  var pic = '#' + $(this).data('pic');
  var img = '#' + $(this).data('img');

  // console.log(pic);
  // console.log(img);

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
  console.log('kdanldkalkdas')
  var img = 'img_' + Math.floor((Math.random() * 100000) + 1);
  var pic = 'pic_' + Math.floor((Math.random() * 100000) + 1);
  $('#plusImgContent').append('<div class="col-md-2"><label class="' + pic + '" id="' + pic + '">\
     <img id="' + img + '" data-pic="' + pic + '" data-img="' + img + '" class="add_img" src="<?php echo base_url(); ?>assets/build/img/plus.jpg" width="150px">\
     <input id="' + pic + '" name="img_place[]" type="file" style="display:none;" ><br><br></label></div>');
});

$(document).on('click', '#edit_img', function () {
  let small = $(this).data('small');
  let medium = $(this).data('medium');
  let big = $(this).data('big');

  // console.log('img', img)
  let id = $(this).data('id');
  let location = $(this).data('location');
  let description = $(this).data('description');

  $('.edit_img_banner').prop('src', base_url + 'assets/build/img/banners/' + small);
  $('.edit_banner_dois').prop('src', base_url + 'assets/build/img/banners/' + medium);
  $('.edit_banner_tres').prop('src', base_url + 'assets/build/img/banners/' + big);

  $('#id_banner').val(id);
  $('#description').val(description);
  $('#location').val(location);
});

$(document).on('click', '.editIdealPlan', function () {
  let id = $(this).data('id');
  $.ajax({
    url: base_url + 'plans/fetch_ideal_plan',
    method: 'post',
    dataType: 'json',
    data: {id: id},
    success: function (data) {
      $('#id').val(data.id);
      $('#people').val(data.people);
      $('#id_plan').val(data.id_plan);
      let classe = 0;
      $('#list_recommended').html('');
      $.each(data, function (index, value){
        if (value.recommended) {
          classe++;
          $('#list_recommended').append(`<tr class="tr_recommended tr_recommended${classe}">
            <td>${value.description}</td>
            <td class="text-danger">
              <button type="button" class="btn btn-sm btn-danger remove_recommended"
                data-remove="tr_recommended${classe}" data-id="${value.id_recommended}">X</button>
            </td>
          </tr>`);
        }
      });
      $('#modalUpdatePlanoIdeal').modal('show');
    }
  });
});

$(document).on('click', '.add_recommended', function (){
  let id = $(this).data('id');
  let list_recommended = $(this).data('recommended');
  let recommended = $('.'+list_recommended).val();
  let classe = $('.tr_recommended').length;

  $.ajax({
    url: base_url + 'plans/fetch_how_used',
    method: 'post',
    dataType: 'json',
    data: {id: recommended},
    success: function (data) {
      $('#'+id).append(`<tr class="tr_recommended tr_recommended${classe}">
      <td>${data.description}</td>
      <td class="text-danger">
      <button type="button" class="btn btn-sm btn-danger remove_recommended"
      data-remove="tr_recommended${classe}">X</button>
      </td>
      <input type="hidden" name="recommended[]" value="${data.id}">
      </tr>`);
      $('.'+list_recommended).val('');
    }
  });
});

$(document).on('click', '.remove_recommended', function (){
  let id = $(this).data('id');
  let class_remove = $(this).data('remove');
  $('.'+class_remove).remove();
  $.ajax({
    url: base_url + 'plans/delete_recommended',
    method: 'post',
    dataType: 'json',
    data: {id: id},
    success: function (data) {
    }
  });
});
