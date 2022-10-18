url_atual = 'http://localhost/conecta/';

let iconMenu = document.querySelector(".icon-menu");
let content = document.querySelector(".content");
let body = document.querySelector("body");
iconMenu.addEventListener("click", function () {
  body.classList.toggle("__move");
});

$('.storeBlockImg').slick({
  dots: false,
  arrow: true,
  infinite: true,
  speed: 200,
  autoplay: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true
});

// $('.planosSlick').slick({
//   slidesToShow: 4,
//   slidesToScroll: 4,
//   speed: 400,
//   autoplay: true,
//   responsive: [{
//       breakpoint: 1200,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         infinite: true,
//       }
//     }, {
//       breakpoint: 950,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2,
//         infinite: true,
//       }
//     },
//     {
//       breakpoint: 700,
//       settings: {
//         dots: true,
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     },
//   ]
// });


// // -->  Animação ao Scroll

// debounce = function(func, wait, immediate) {
// 	var timeout;
// 	return function() {
// 		var context = this, args = arguments;
// 		var later = function() {
// 			timeout = null;
// 			if (!immediate) func.apply(context, args);
// 		};
// 		var callNow = immediate && !timeout;
// 		clearTimeout(timeout);
// 		timeout = setTimeout(later, wait);
// 		if (callNow) func.apply(context, args);
// 	};
// };


// (function(){
// 	var $target = $('.anime'),
// 			animationClass = 'anime-start',
// 			offset = $(window).height() * 4/5;

// 	function animeScroll() {
// 		var documentTop = $(document).scrollTop();

// 		$target.each(function(){
// 			var itemTop = $(this).offset().top;
// 			if (documentTop > itemTop - offset) {
// 				$(this).addClass(animationClass);
// 			} else {
// 				$(this).removeClass(animationClass);
// 			}
// 		});
// 	}

// 	animeScroll();

// 	$(document).scroll(debounce(function(){
// 		animeScroll();
// 	}, 200));
// })();


$(document).on('click', '.close_gate', function () {
  let city = $('#city').val();
  let name = $('#name').val();
  let phone = $('#phone').val();
  let dados = [city, name, phone];

  $('.modal-gate').css('visibility', 'hidden');
  $('.modal-gate').css('display', 'none');
  $('.modal-gate').css('opacity', '0');
  $(body).css('background-color', '#fff');

  $('.bodyContainer').css('visibility', 'visible');
  $('.bodyContainer').css('display', 'block');
  $('.bodyContainer').css('opacity', '1');

  $("html, body").scrollTop(0);

  $.ajax({
    url: url_atual + 'my_email/send_lead',
    method: 'POST',
    data: {
      dados: dados
    },
    success: function (data) {

    }
  });
});

// let escolher = document.querySelectorAll(".escolher");
// escolher.forEach(function (item) {
//   item.addEventListener("click", function () {
//     const data = item.getAttribute('data-plano').split(' ');
//     let quantidadePlano = document.querySelector('.nome-plano');
//     let preco = document.querySelector('.precoPlano');
//     quantidadePlano.textContent = data[0] + 'MB';
//     preco.textContent = data[1];
//   });

// });

// let btnPlano = document.querySelectorAll('.btn-velo');

// function tabs(index) {
//   btnPlano.forEach((iten) => {
//     iten.classList.remove('ativoPlano');
//   })
//   btnPlano[index].classList.add('ativoPlano')
// }

// btnPlano.forEach((iten, index) => {
//   iten.addEventListener('click', () => {
//     tabs(index);
//     const data = iten.getAttribute('data-plano').split(' ');
//     let quantidadePlano = document.querySelector('.nome-plano');
//     let preco = document.querySelector('.precoPlano');
//     quantidadePlano.textContent = data[0] + 'MB';
//     preco.textContent = data[1];
//   })
// })

