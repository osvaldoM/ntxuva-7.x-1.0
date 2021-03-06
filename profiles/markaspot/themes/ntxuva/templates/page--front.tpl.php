<?php
/**
 * @file
 * Front page template for Mark-a-Spot
 */
?>

<div class="navbar-wrapper">
  <div class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
		<div id="loading"></div>
        <?php if ($logo): ?>
          <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <?php if (!empty($site_name)): ?>
          <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"></a>
        <?php endif; ?>


      </div>


      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="collapse navbar-collapse">
          <nav class="nav navbar-nav">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>


<div id="map_wrapper_splash">
<img class="img-responsive container" src="profiles/markaspot/themes/ntxuva/images/main.png" alt="" >
<div class="mapheader masthead">
  <div class="container stage">
    <div>
      <div class="col-md-12">
        <div class="welcome-text well">
        </div>
        <div class="welcome">
           <div class="add"><a href="node/add/report" class="col-md-5 col-md-offset-2 btn btn-primary btn-success">
                             <h3>Reportar</h3></a>
           </div>
           <div class="list"><a href="list" class="col-md-5 col-md-offset-2 btn btn-primary btn-action">
                             <h3>Ver problemas</h3></a>
           </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
           <div align="center">
                     <a href="https://play.google.com/store/apps/details?id=mz.co.mopa&amp;utm_source=global_co&amp;utm_medium=prtnr&amp;utm_content=Mar2515&amp;utm_campaign=PartBadge&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_blank">
                     <img alt="undefined" src="https://play.google.com/intl/en_us/badges/images/generic/pt_badge_web_generic.png" height="75px">
                     </a>
           </div>


<div class="section-container">
  <div class="section-title">como funciona</div>
  <div class="section-row">
    <div class="col-wrapper">
    	<div class="custom-col">
    		<span><img src="profiles/markaspot/themes/ntxuva/images/icon_one.png"></span>
    		<h2>Detecta</h2>
    		<p>Fica atento à acumulação de lixo no teu bairro</p>
    	</div>
    	<div class="custom-col">
    		<span><img src="profiles/markaspot/themes/ntxuva/images/icon_two.png"></span>
    		<h2>Reporta</h2>
    		<p>Comunica problemas com o teu telemóvel ou através da internet</p>
    	</div>
    	<div class="custom-col">
    		<span><img src="profiles/markaspot/themes/ntxuva/images/icon_three.png"></span>
    		<h2>Acompanha</h2>
    		<p>Visualiza a resolução de problemas através da internet</p>
    	</div>
    </div>
  </div>
</div>
<div class="clearer"></div>

<div class="section-container">
  <div class="section-title">participa</div>
  <div class="section-row">
    <div class="secondary-panel">
    	
    	<div class="right">
    		<img class="img-responsive second-illustration" src="profiles/markaspot/themes/ntxuva/images/sec.png" alt="" >
    	</div>
    	<div class="left">
    		<p>O MOPA é uma plataforma para monitoria e avaliação dos serviços de recolha de resíduos sólidos no teu bairro.</p>
    		<p>
    		O MOPA funciona em toda a cidade de Maputo, através do código *311#, deste site e da app móvel disponível para Android.
    		</p>
    		<p>
    		Se identificares problemas com a recolha de lixo no teu bairro, podes usar o teu computador ou celular para avisar o Conselho Municipal bem como as Empresas e Micro-Empresas de recolha de lixo.
    		</p>
    		<p>
    		Faz download da nossa App para Android e começa a reportar!
    		</p>
                <div class="list"><a href="https://play.google.com/store/apps/details?id=mz.co.mopa&amp;utm_source=global_co&amp;utm_medium=prtnr&amp;utm_content=Mar2515&amp;utm_campaign=PartBadge&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_blank"><img alt="undefined" src="https://play.google.com/intl/en_us/badges/images/generic/pt_badge_web_generic.png" height="75px"></a></div>  
    </div>
  </div>
</div>
<div class="clearer"></div>

<div class="section-container">
  <div class="section-title">estatísticas</div>
  <div class="section-row">
    <div class="col-wrapper">
    	<div class="custom-col">
    		<span><img src="profiles/markaspot/themes/ntxuva/images/icon_four.png"></span>
    		<h2><span class="average-hours">14</span> horas</h2>
    		<p>Tempo médio para a resolução de problemas
 </p>
    	</div>
    	<div class="custom-col">
    		<span><img src="profiles/markaspot/themes/ntxuva/images/icon_five.png"></span>
    		<h2 class="frequent-request-label">Contentor cheio</h2>
    		<p>Problema mais reportado pelos utilizadores</p>
    	</div>
    	<div class="custom-col">
    		<span><img src="profiles/markaspot/themes/ntxuva/images/icon_six.png"></span>
    		<h2 class="frequent-location-label">Magoanine C</h2>
    		<p>Bairro mais activo a reportar os problemas</p>
    	</div>
    </div>
  </div>
</div> 

<div class="clearer"></div>
<div id="map" style="display:none"> </div>

<footer class="footer navbar-inverse">
  <?php print render($page['footer']); ?>
</footer>
