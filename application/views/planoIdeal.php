<?php $this->load->view('elements/header'); ?>
<?php $this->load->view('elements/sidebar'); ?>
<style>
  .slick-slide {
    outline: none !important;
  }
</style>
<div class="banner-container">
  <img class="banner-image" src="<?php echo base_url() ?>assets\build\img\ideal-plan-banner.png" alt="Container">
</div>
<main>
  <section class="anime">
    <div class="ideal-plan-container-introduction">
      <h2 class="ideal-plan-title anime">E aí? ! Qual estilo Conecta é o melhor para você?</h2>
      <p class="ideal-plan-description anime">Ainda não sabe? Então <span class="highlighted">responda</span> as perguntas abaixo e descubra qual <span class="highlighted">velocidade</span> é ideal para o seu <span class="highlighted">perfil</span>.</p>
    </div>
  </section>
  <section class="ideal-plan-container anime">
    <div class="container-md ideal-plan-question-outer-container anime">
      <div class="row mt-3 justify-content-center">
        <div class="prev-arrow">
          <span>
            <p> < </p>
          </span>
        </div>
        <div class="col-md-12 ideal-plan-slick anime">
          <div id="passo1" class="ideal-plan-question-container">
            <div class="ideal-plan-ask-container">
              <h2 class="ideal-plan-ask">Quantas pessoas utilizam internet na sua casa?</h2>
            </div>
            <div class="ideal-plan-answers-container">
              <div class="ideal-plan-box">
                <input type="radio" class="ideal-plan-hidden-option qtdPersons" name="ideal-plan-person-quantity" id="ideal-plan-one-person" value="1">
                <label class="ideal-plan-inner-box" for="ideal-plan-one-person">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/answer_number_1.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Uma<br>pessoa</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="radio" class="ideal-plan-hidden-option qtdPersons" name="ideal-plan-person-quantity" id="ideal-plan-two-people" value="2">
                <label class="ideal-plan-inner-box" for="ideal-plan-two-people">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/answer_number_2.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Duas<br>pessoas</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="radio" class="ideal-plan-hidden-option qtdPersons" name="ideal-plan-person-quantity" id="ideal-plan-three-people" value="3">
                <label class="ideal-plan-inner-box" for="ideal-plan-three-people">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/answer_number_3.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Três<br>pessoas</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="radio" class="ideal-plan-hidden-option qtdPersons" name="ideal-plan-person-quantity" id="ideal-plan-four-people" value="4">
                <label class="ideal-plan-inner-box" for="ideal-plan-four-people">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/answer_number_4.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Quatro<br>pessoas</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="radio" class="ideal-plan-hidden-option qtdPersons" name="ideal-plan-person-quantity" id="ideal-plan-five-people" value="5">
                <label class="ideal-plan-inner-box" for="ideal-plan-five-people">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/answer_number_5.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Cinco<br>pessoas ou +</p>
                </label>
              </div>
            </div>
          </div>
          <div id="passo2" class="ideal-plan-question-container">
            <div class="ideal-plan-ask-container">
              <h2 class="ideal-plan-ask">E o que vocês mais utilizam conectados à internet?</h2>
            </div>
            <div class="ideal-plan-answers-container">
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-smartphone">
                <label class="ideal-plan-inner-box" for="ideal-plan-smartphone">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/phone.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Smartphone</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-tablet">
                <label class="ideal-plan-inner-box" for="ideal-plan-tablet">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/tablet.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Tablet</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-television">
                <label class="ideal-plan-inner-box" for="ideal-plan-television">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/tv.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Televisão</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-notebook">
                <label class="ideal-plan-inner-box" for="ideal-plan-notebook">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/notebook.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Notebook</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-videogame">
                <label class="ideal-plan-inner-box" for="ideal-plan-videogame">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/videogame.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Videogame</p>
                </label>
              </div>
            </div>
          </div>
          <div id="passo3" class="ideal-plan-question-container">
            <div class="ideal-plan-ask-container">
              <h2 class="ideal-plan-ask">Como vocês utilizam a internet?</h2>
            </div>
            <div class="ideal-plan-answers-container">
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-mail">
                <label class="ideal-plan-inner-box" for="ideal-plan-mail">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/mail.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Enviar e receber e-mail</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-headphone">
                <label class="ideal-plan-inner-box" for="ideal-plan-headphone">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/headphone.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Ouvir música online</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-movie">
                <label class="ideal-plan-inner-box" for="ideal-plan-movie">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/movie.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Baixar filmes e músicas</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-photography">
                <label class="ideal-plan-inner-box" for="ideal-plan-photography">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/photography.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Compartilhar fotos e vídeos</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-popcorn">
                <label class="ideal-plan-inner-box" for="ideal-plan-popcorn">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/popcorn.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Assistir vídeos online</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-keyboard">
                <label class="ideal-plan-inner-box" for="ideal-plan-keyboard">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/keyboard.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Jogos online</p>
                </label>
              </div>
              <div class="ideal-plan-box">
                <input type="checkbox" class="ideal-plan-hidden-option" id="ideal-plan-videoconference">
                <label class="ideal-plan-inner-box" for="ideal-plan-videoconference">
                  <div class="ideal-plan-svg-container">
                    <?php echo file_get_contents(base_url() . 'assets/build/img/svg/ideal-plan/videoconference.svg'); ?>
                  </div>
                  <p class="ideal-plan-question-description">Vídeo conferência</p>
                </label>
              </div>
            </div>
          </div>
          <div id="passo4" class="ideal-plan-question-container">
            <div class="ideal-plan-ask-container">
              <h2 class="ideal-plan-ask">Para você, o ideal é este plano:</h2>
            </div>
            <div class="ideal-plan-result-container">
              <div class="plan-title">
                <!-- <span class="plan-speed">150</span> -->
                <div class="plan-box-title">
                  <span class="p-3 plan-inner-title"></span>
                  <!-- <span class="plan-metric">MB</span> -->
                  <!-- <span class="plan-fiber">Fibra</span> -->
                </div>
              </div>
              <div class="plan-body">
                <a class="plan-result-link" href="https://conectafibra.com.br/contract/150-mb">Escolher agora</a>
              </div>
            </div>
          </div>
        </div>
        <div class="next-arrow">
          <span>
            <p> > </p>
          </span>
        </div>
      </div>
    </div>
  </section>
</main>
<?php $this->load->view('elements/footer'); ?>
