<?php $this->titre = "Liste requete en cours" ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Liste des requetes non fondees </h2>
            <p>Liste des requetes que vous avez deja eu a envoye, avec leurs statut.</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap material-table-widget">

            <div class="widget-container margin-top-0">
                <div class="widget-content">
                    <table class="table foo-data-table" data-page-size="5" data-limit-navigation="3">
                        <thead>
                            <tr>
                                <th data-sort-ignore="true">
                                    ID REQUETE
                                </th>
                                <th data-hide="all">
                                    Message
                                </th>
                                <th data-hide="phone">
                                    Matiere / Objet
                                </th>
                                <th data-hide="phone">
                                    Date requete
                                </th>
                                <th>
                                    Statut
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($requetes as $requete) : ?>
                                <tr>
                                    <td><?= $requete['id_req'] ?></td>
                                    <td><?= $requete['reponse_req'] == "" ? "En cours de traitement"  : $requete['reponse_req'] ?></td>
                                    <td><?= $requete['matiere_req'] == "" ? $requete['objet_req'] : $requete['matiere_req'] ?></td>
                                    <td> <?= $requete['date_req'] ?></td>
                                    <td data-value="1"><span class="label label-warning" title="Active"><?= $requete['statut_req'] ?></span></td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                        <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="6" class="footable-visible">
                                    <div class="pagination pagination-centered"></div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>