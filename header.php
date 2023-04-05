<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer src="https://kit.fontawesome.com/9c749cac5e.js" crossorigin="anonymous"></script>
    <title>Document</title>
    
    <link
      rel="preload"
      href="/fonts/poppins-bold.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/fonts/poppins-bold.woff"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/fonts/poppins-regular.woff"
      as="font"
      type="font/woff2"
      crossorigin
    />
    <link
      rel="preload"
      href="/fonts/poppins-regular.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link
      rel="preload"
      href="/fonts/fa-regular-400.woff"
      as="font"
      type="font/woff2"
      crossorigin
    />

    <link
      rel="preload"
      href="/fonts/fa-regular-400.woff2"
      as="font"
      type="font/woff2"
      crossorigin
    />
  </head>
  <?php wp_head(); ?>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="inner">
            <div class="branding">
              <a href="#"> BLOG</a>
            </div>
            <nav>
              <ul>
                <?php wp_menu_li() ?>
              </ul>
            </nav>
            
          </div>
          <button id="themeToggle"><i class="fas fa-sun"></i></button>
        </div>
      </div>
    </header>