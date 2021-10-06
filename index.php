<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PWAGram</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="/src/css/app.css">
  <link rel="stylesheet" href="/src/css/feed.css">
  <link rel="manifest" href="manifest.json">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="MiAppy">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-57x57.png" sizes="57x57">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-60x60.png" sizes="60x60">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-72x72.png" sizes="72x72">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-76x76.png" sizes="76x76">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-114x114.png" sizes="114x114">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-120x120.png" sizes="120x120">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-144x144.png" sizes="144x144">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-152x152.png" sizes="152x152">
  <link rel="app-touch-icon" href="/src/images/icons/app-icon-180x180.png" sizes="180x180">
</head>
<body>

<div id="app">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">PWAGram</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="/">Feed</a>
          <a class="mdl-navigation__link" href="/help">Help</a>
          <div class="drawer-option">
            <button class="enable-notifications mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--accent">
              Enable Notifications
            </button>
          </div>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">PWAGram</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="/">Feed</a>
        <a class="mdl-navigation__link" href="/help">Help</a>
        <div class="drawer-option">
          <button class="enable-notifications mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--accent">
            Enable Notifications
          </button>
        </div>
      </nav>
    </div>
    <main class="mdl-layout__content mat-typography">
      <div id="create-post">
        <form>
          <div class="input-section mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="title">
            <label class="mdl-textfield__label" for="title" name="title">Title</label>
          </div>
          <div class="input-section mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="manual-location">
            <input class="mdl-textfield__input" type="text" id="location">
            <label class="mdl-textfield__label" for="location" name="location">Location</label>
          </div>
          <br>
          <div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--accent"
                    type="submit" id="post-btn">Post!
            </button>
          </div>
          <br>
          <div>
            <button class="mdl-button mdl-js-button mdl-button--fab" id="close-create-post-modal-btn" type="button">
              <i class="material-icons">close</i>
            </button>
          </div>
        </form>
      </div>
      <img src="/src/images/main-image.jpg"
           alt="Explore the City"
           class="main-image">
      <div class="page-content">
        <h5 class="text-center mdl-color-text--primary">Share your Moments</h5>
        <div id="shared-moments"></div>
      </div>
      <div class="floating-button">
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored"
                id="share-image-button">
          <i class="material-icons">add</i>
        </button>
      </div>
      <div id="confirmation-toast" aria-live="assertive" aria-atomic="true" aria-relevant="text" class="mdl-snackbar mdl-js-snackbar">
        <div class="mdl-snackbar__text"></div>
        <button type="button" class="mdl-snackbar__action"></button>
      </div>
    </main>
  </div>
</div>
<script defer src="/src/js/material.min.js"></script>
<script src="/src/js/app.js"></script>
<script src="/src/js/feed.js"></script>
</body>
</html>