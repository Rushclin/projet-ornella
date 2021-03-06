<?= !isset($_SESSION['USER']['ALL']) ? header('Location:index.php') : '';  ?>

<?php $this->titre = "Page d'acceuil" ?>
<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <?= isset($msg) ? '<h2 class="text-success" id= "msg">' . $msg . '</h2>' : '<h2>Acceuil</h2><p>Recpitulatif des requetes</p>' ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Recpitulatif des requetes</h3>
                <p>Total de toutes les requetes </p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li><label>Emis :</label> <?= $nbreEmis->fetch()[0] ?> </li>
                    <li><label>Taitees :</label> <?= $nbreTraite->fetch()[0] ?></li>
                    <li><label>Rejetees :</label> <?= $nbreRejete->fetch()[0] ?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="col-md-4 col-sm-4">
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
    </div>-->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Rappels</h3>
                <p>Vous pouvez emmetre vos requetes ici, elles seront toutes traitees, merci de faire confiance </p>
            </div>
        </div>
    </div>
</div>