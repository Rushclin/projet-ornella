<?php $this->titre = "Page d'acceuil" ?>
<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <?= isset($msg) ? '<h2 class="text-success" id= "msg">' . $msg . '</h2>' : '<h2>Acceuil</h2><p>Recpitulatif des requetes</p>' ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Requetes du jour</h3>
                <p>Total de toutes les requetes </p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li><label>Emis :</label> 3</li>
                    <li><label>Taitees :</label> 20</li>
                    <li><label>Rejetees :</label> 1 </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget-wrap stats-widget">
            <div class="widget-header">
                <h3>Requetes de la semaine</h3>
                <p>Total de toutes les requetes</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li><label>Emis :</label> 3</li>
                    <li><label>Taitees :</label> 20</li>
                    <li><label>Rejetees :</label> 1 </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget-wrap stats-widget">
            <div class="widget-header">
                <h3>Requetes du mois</h3>
                <p>Total de toutes les requetes</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li><label>Emis :</label> 3</li>
                    <li><label>Taitees :</label> 20</li>
                    <li><label>Rejetees :</label> 1 </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Espace administrateur</h3>
                <p>Vous pouvez gerer les requetes pour etudiant ici et les assigner une reponse </p>
            </div>
        </div>
    </div>
</div>