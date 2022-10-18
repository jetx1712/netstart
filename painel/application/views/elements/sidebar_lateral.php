<?php $paginaCorrente = $_SERVER['REQUEST_URI'];?>
<div class="sidebar" data-color="blue" data-active-color="primary" style="background-color: #043c5a !important;">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="<?php echo base_url();?>inicio"class="simple-text">
      <div class="logo-image px-2">
        <img style="width:90%;" src="<?php echo base_url();?>assets/build/img/logo-branca-fibra.png">
      </div>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li <?php echo(strpos($paginaCorrente, '/inicio') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>inicio">
          <i class="nc-icon nc-bank"></i>
          <p>Início</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/banners') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>banners">
          <i class="nc-icon nc-bank"></i>
          <p>Banners</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/places') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>places">
          <i class="nc-icon nc-diamond"></i>
          <p>Localidades</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/contact') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>contact">
          <i class="nc-icon nc-diamond"></i>
          <p>Contatos</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/plans') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>plans">
          <i class="nc-icon nc-diamond"></i>
          <p>Planos</p>
        </a>
      </li>
      <!-- <li <?php echo(strpos($paginaCorrente, '/seo') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>seo">
          <i class="nc-icon nc-diamond"></i>
          <p>Seo</p>
        </a>
      </li> -->
      <!-- <li <?php echo(strpos($paginaCorrente, '/lead') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>lead">
          <i class="nc-icon nc-diamond"></i>
          <p>Leads</p>
        </a>
      </li> -->
      <li <?php echo(strpos($paginaCorrente, '/history_timeline') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>history_timeline">
          <i class="nc-icon nc-diamond"></i>
          <p>History Timeline</p>
        </a>
      </li>

      <li <?php echo(strpos($paginaCorrente, '/blog') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>blog">
          <i class="nc-icon nc-diamond"></i>
          <p>Blog</p>
        </a>
      </li>

      <li <?php echo(strpos($paginaCorrente, '/users') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>users">
          <i class="nc-icon nc-diamond"></i>
          <p>Usuarios</p>
        </a>
      </li>

      <li class="active-pro">
        <a href="<?php echo base_url();?>login/logout">
          <i class="nc-icon nc-button-power"></i>
          <p>Sair</p>
        </a>
      </li>
    </ul>
  </div>
</div>
