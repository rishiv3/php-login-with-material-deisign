<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="https://getmdl.io/assets/favicon.png">
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="https://getmdl.io/assets/favicon.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="shortcut icon" href="https://getmdl.io/assets/favicon.png">
    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="demo-blog__posts mdl-grid">
      <div class="mdl-cell mdl-cell--12-col mdl-typography--text-center">
        <?php
          if (isset($_GET['error'])) {
              echo '<p class="error">Error Logging In!</p>';
          }
          ?>
        <form class="mdl-dialog" action="includes/process_login.php" method="post" name="login_form">
          <h1 class="mdl-dialog__title">Login Form</h1>
          <div class="mdl-dialog__content">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input type="text" class="mdl-textfield__input" id="email" name="email">
              <label class="mdl-textfield__label" for="name">Email</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input type="password" class="mdl-textfield__input" name="password" id="password">
              <label class="mdl-textfield__label" for="password">Password</label>
              <span class="mdl-textfield__error">Input is not a valid email adress!</span>
            </div>
          </div>
          <div class="mdl-dialog__actions">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect" onclick="formhash(this.form, this.form.password);">Login</button>
            <button type="reset" class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect">Reset</button>
          </div>
          <div>
              <p>If you don't have a login, please <a href="register.php">register</a><br>
              If you are done, please <a href="includes/logout.php">log out</a>.<br>
          </div>
        </form>
      </div>
    </div>

    <!-- javascript -->
    <script type="text/JavaScript" src="js/forms.js"></script>
</body>
</html>
