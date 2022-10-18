<?php $this->load->view('elements/best_internet_header'); ?>

<section class='network-wrapper'>
  <div class="network-content">
    <hgroup class="network-hgroup">
      <h2 class="network-hgroup-subtitle">Coloque apenas o seu <span class="highlighted">nome</span> e <span class="highlighted">telefone</span> e saiba mais sobre</h2>
      <h1 class="network-hgroup-title">A melhor internet da região!</h1>
    </hgroup>
    <div class="network-infos">
      <form action="">
        <div class="network-form_wrapper">
          <span class="network-form_title">Complete com seus dados</span>
          <div class="network-form_group">
            <label for="name">Nome</label>
            <input class="network-form_input" id="name" name="name">
          </div>
          <div class="network-form_group">
            <label for="phone">Telefone</label>
            <input class="network-form_input" id="phone" name="phone">
          </div>
          <div class="network-form_cta_wrapper">
            <input class="network-form_cta" type="submit" value="Enviar">
          </div>
        </div>
      </form>
      <figure class="network-figure">
        <img class="network-figure_image" src="<?php echo base_url();?>assets/build/img/logo-branca-fibra .png" alt="">
      </figure>
    </div>
  </div>
</section>

<?php $this->load->view('elements/best_internet_footer'); ?>