<?php $this->titre = "Erreur !!" ?>

<div class="error-wrap">
    <div class="error-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-code">
                        <div>4<span>0</span>4</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="error-message">
                        <h4>Oops! Action ou page non trouvee...</h4>
                        <p>
                            Nous sommes desole, la page ou l'action n'existe pas :(
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="error-body">
                        <div class="error-instruction">
                            <span class="left-border"></span>
                            <a class="go-home" href="index.html">
                                <i class=" icon-home"></i>
                            </a>
                            <span class="indicator"></span>
                            <ol>
                                <li>Verifiez l'adreese URL.</li>
                                <li>Aller a la page d'acceuil et verifiez que vous etes connecte.</li>
                                <li>Appelez le web master si ca persiste <a href="mailto:<?= config()['EMAIL'] ?>"> <?= config()['EMAIL'] ?>.</a></li>
                                <li>Faites confiance, on retablit toujours les erreurs.</li>
                                <li>Merci de faire confiamce.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>