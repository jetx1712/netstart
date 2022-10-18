//your code here
const { href } = location;
const base_url = href.includes('localhost') ? 'http://localhost/conecta/' : 'https://conectafibra.com.br/';

$(document).ready(function() {
  $("#phone").mask("(99) 99999-9999");
});

$(document).on('click', '#send_email', function() {
  let name = $('#name').val();
  let phone = $('#phone').val();
  let city = $('#city').val();
  let internet_provider = $('#internet_provider').val();

  $.ajax({
    url: base_url + 'my_email/christmas',
    method: 'POST',
    data: {
      name: name,
      phone: phone,
      city: city,
      internet_provider: internet_provider,
    },
    success: function(data) {
      $('#name').val('');
      $('#phone').val('');
      $('#city').val('');
      $('#internet_provider').val('');
      $('#success_send').show();
    }
  });
});
