<?php $title = 'Vous connecter'; ?>

<?php ob_start(); ?>

<?php include("partials/menu.php"); ?>

<body id="connection">

  <header class="banniere">
  	<h3 class="titre">Se connecter</h3>
  	<svg class="white_separator_bottom" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
    x="0px" y="0px" width="100%" viewBox="0 0 1800 117"
    style="overflow:scroll;enable-background:new 0 0 1800 117;" xml:space="preserve">
    <style type="text/css">
      .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#ffffff;}
    </style>
    <defs>
    </defs>
    <path class="st0" d="M0,0v117c0,0,478.1-96,942.1-101S1800,77,1800,77V0H0z"/>
    </svg>
  </header>

  <div class="container">
    <p class="text-left"><em>Connectez-vous : </em></p>
    <div class="row test">
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="Nom" placeholder="Pseudo" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="mdp" name="mdp" placeholder="Mot de passe" type="mdp" required>
          </div>
        </div>
            <button class="btn send" style="background: #00AA66; color: white" type="submit"><strong>Envoyer</strong></button>
            <button class="btn reset" style="background: #777777; color: white" type="submit">Réinitialiser</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

<?php include("partials/footer.php"); ?>