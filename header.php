<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>

    <style>
      /* typography */

      /* IMPORTANT: this url needs to be allowed by cors policy and is blocked by uBlock origin */
      @import url("//hello.myfonts.net/count/3eb15e");

      @font-face {
        font-family: "Kardia-Fat";
        src: url("<?php echo get_template_directory_uri() ?>/fonts/kardia-fat.woff2") format("woff2"),
          url("<?php echo get_template_directory_uri() ?>/fonts/kardia-fat.woff") format("woff");
        font-display: swap;
      }
    </style>

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="header-content">
    <a href="/home">
      <img class="logo-text" src="<?php echo get_template_directory_uri() ?>/images/logo-text.svg" alt="SFZ Aalen"/>
    </a>
    <nav>
      <div class="header-dropdown">
        <a href="/home">
          Home
          <svg class="header-dropdown-icon" viewBox="0 0 11.626 16.417" xmlns="http://www.w3.org/2000/svg"><path d="M.58 7.298l5.247 5.246 5.248-5.246" fill="none" stroke="inherit" stroke-width="1.6"/></svg>
        </a>
        <div class="header-dropdown-content">
          <a href="/home#sfz">Schülerforschungszentrum</a>
          <a href="/home#idee">Idee</a>
          <a href="/home#team">Team</a>
        </div>
      </div>
      <div class="header-dropdown">
        <a href="/mitmachen">
          Mitmachen
          <svg class="header-dropdown-icon" viewBox="0 0 11.626 16.417" xmlns="http://www.w3.org/2000/svg"><path d="M.58 7.298l5.247 5.246 5.248-5.246" fill="none" stroke="inherit" stroke-width="1.6"/></svg>
        </a>
        <div class="header-dropdown-content">
          <a href="/mitmachen#themen">MINT-Themen</a>
          <a href="/mitmachen#anmelden">Anmeldung</a>
          <a href="/mitmachen#jugend-forscht">Jugend Forscht</a>
        </div>
      </div>
      <div class="header-dropdown">
        <a href="/projekte">
          Projekte
          <svg class="header-dropdown-icon" viewBox="0 0 11.626 16.417" xmlns="http://www.w3.org/2000/svg"><path d="M.58 7.298l5.247 5.246 5.248-5.246" fill="none" stroke="inherit" stroke-width="1.6"/></svg>
        </a>
        <div class="header-dropdown-content">
          <a href="/projekte#aktuelle-projekte">Aktuelle Projekte</a>
          <a href="/projekte#ausstattung">Ausstattung</a>
        </div>
      </div>
      <div class="header-dropdown">
        <a href="/workshops">
          Workshops
          <svg class="header-dropdown-icon" viewBox="0 0 11.626 16.417" xmlns="http://www.w3.org/2000/svg"><path d="M.58 7.298l5.247 5.246 5.248-5.246" fill="none" stroke="inherit" stroke-width="1.6"/></svg>
        </a>
        <div class="header-dropdown-content">
          <a href="/workshops#aktuelle-workshops">Aktuelle Workshops</a>
          <a href="/workshops#anmeldung">Anmeldung</a>
        </div>
      </div>
      <div class="header-dropdown">
        <a href="/aktuelles">
          Aktuelles
          <svg class="header-dropdown-icon" viewBox="0 0 11.626 16.417" xmlns="http://www.w3.org/2000/svg"><path d="M.58 7.298l5.247 5.246 5.248-5.246" fill="none" stroke="inherit" stroke-width="1.6"/></svg>
        </a>
        <div class="header-dropdown-content">
          <a href="/aktuelles#news">News</a>
          <a href="/aktuelles#archiv">Archiv</a>
        </div>
      </div>
      <div class="header-dropdown">
        <a href="/kontakt">Kontakt</a>
      </div>
    </nav>
  </div>
</header>

