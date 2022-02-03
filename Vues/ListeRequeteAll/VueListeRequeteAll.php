<?php $this->titre = "Liste requete" ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Liste de toutes les requetes deja emises </h2>
            <p>Liste des requetes que vous avez deja eu a envoye, avec leurs statut.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap material-table-widget">

            <div class="widget-container margin-top-0">
                <div class="widget-content">
                    <div class="data-action-bar">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <div class="data-align-right">
                                    <a href="#clear" class="clear-filter btn btn-primary" title="clear filter">Vider le filtre</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-filter-header">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <span class="tfh-label">Rechercher : </span>
                                        <input class="form-control" id="filter" type="text" />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <span class="tfh-label">Trier par statut : </span>
                                        <select class="filter-status  form-control">
                                            <?php foreach ($statuts as $statut) : ?>
                                                <option value="<?= $statut['statut_req'] ?>"><?= $statut['statut_req'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-md-offset-8 col-sm-offset-8">
                                        <span class="tfh-label">Taille affichage : </span>
                                        <select id="change-page-size" class=" form-control">
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table foo-data-table-filterable" data-filter="#filter" data-filter-text-only="true" data-page-size="5" data-limit-navigation="3">
                        <thead>
                            <tr>
                                <th data-sort-ignore="true">
                                    Date requete
                                </th>
                                <th data-hide="all">
                                    Message de reponse
                                </th>
                                <th data-hide="phone">
                                    Matiere / Objet
                                </th>
                                <th data-hide="phone">
                                    Session
                                </th>
                                <th>
                                    Statut
                                </th>
                                <th data-sort-ignore="true" data-hide="phone"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($requetes as $item) : ?>
                                <tr>
                                    <td><?= date($item['date_req']); ?></td>
                                    <td>
                                        <?php if ($item['reponse_req'] === '') { ?>
                                            En cours de traitement.
                                        <?php } else { ?>
                                            <?= $item['reponse_req'] ?>
                                        <?php } ?>
                                    </td>
                                    <td><?= $item['matiere_req'] . ' ' . $item['objet_req'] ?></td>
                                    <td data-value=""><?= $item['session_req'] ?></td>
                                    <td data-value="2">
                                        <!-- Je doit mettre les condition pour les differents statuts ici -->
                                        <?php if ($item['statut_req'] == 'EN COURS') { ?>
                                            <span class="label label-success" title="<?= $item['statut_req'] ?>">
                                                <?= $item['statut_req'] ?>
                                            </span>
                                        <?php } else if ($item['statut_req'] == 'REJETE') { ?>
                                            <span class="label label-danger" title="<?= $item['statut_req'] ?>">
                                                <?= $item['statut_req'] ?>
                                            </span>
                                        <?php } else if ($item['statut_req'] == 'NON FONDEE') { ?>
                                            <span class="label label-warning" title="<?= $item['statut_req'] ?>">
                                                <?= $item['statut_req'] ?>
                                            </span>
                                        <?php } else if ($item['statut_req'] == 'TRAITEES') { ?>
                                            <span class="label label-primary" title="<?= $item['statut_req'] ?>">
                                                <?= $item['statut_req'] ?>
                                            </span>
                                        <?php } ?>
                                    </td>
                                    <!--<td class="td-right"><a class="row-edit" href="#"><span class="zmdi zmdi-edit"></span></a> <a class="row-delete" href="#"><span class="zmdi zmdi-close"></span></a></td>-->
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