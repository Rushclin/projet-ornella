<?php $this->titre = "Requete note"; ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Liste des requetes en cours</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">
            <div class="widget-container">
                <div class="widget-content">
                    <table class="table table-bordered foo-data-table">
                        <thead>
                            <tr>
                                <th>id etudiant</th>
                                <th>Date</th>
                                <th>Matiere / Objet</th>
                                <th>Session</th>
                                <th>Statut requete</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($requetes as $requete) : ?>
                                <tr>
                                    <td><?= $requete['id_et'] ?></td>
                                    <td><?= $requete['date_req'] ?></td>
                                    <td><?= $requete['matiere_req'] == "" ? $requete['objet_req'] : $requete['matiere_req'] ?></td>
                                    <td><?= $requete['session_req'] ?></td>
                                    <td><?= $requete['statut_req'] ?></td>
                                    <td class="">
                                        <div class="btn-toolbar">
                                            <div class="btn-group btn-group-sm">
                                                <a href="index.php?action=admin/requete/note/traitement&id=<?= $requete['id_req'] ?>" class="btn btn-primary">Traiter</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>