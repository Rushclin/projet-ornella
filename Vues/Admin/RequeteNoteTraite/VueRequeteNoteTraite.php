<?php $this->titre = "Requete note"; ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Traiter une requete de note</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">

            <div class="widget-container margin-top-0 clearfix">
                <div class="widget-content">
                    <form action="index.php?action=admin/requete/note/traitement/post&id=<?= $requete['id_req'] ?>" method="POST" class="j-forms" id="j-forms-validation" novalidate>
                        <div class="form-content">
                            <div class="w-section-header">
                                <h3>Valider apres avoir remplis</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-3 unit">
                                    <label class="label">Id Etudiant</label>
                                    <div class="input">
                                        <input class="form-control" readonly type="text" value="<?= $requete['id_et'] ?>" placeholder="" name="nom" id="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-3 unit">
                                    <label class="label">Date requete</label>
                                    <div class="input">
                                        <input class="form-control" readonly type="text" placeholder="" value="<?= $requete['date_req'] ?>" name="prenom" id="prenom" required>
                                    </div>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Matiere</label>
                                    <div class="input">
                                        <input class="form-control" readonly type="text" placeholder="" value="<?= $requete['matiere_req'] ?>" name="prenom" id="prenom" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 unit">
                                    <label class="label">Objet requete / session</label>
                                    <div class="input">
                                        <input class="form-control" readonly type="text" placeholder="" value="<?= $requete['objet_req'] == '' ? $requete['session_req'] : $requete['objet_req'] ?>" name="prenom" id="prenom" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 unit">
                                    <label class="label">Corps requete </label>
                                    <textarea name="" id="" class="form-control" readonly rows="3">
                                        <?= $requete['corps_req'] == '' ? 'Pas de corps' : $requete['corps_req'] ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 unit">
                                    <label class="label">Changer statut</label>
                                    <label class="input select">
                                        <select class="form-control" required name='statut'>
                                            <!--<option value="none">Selectionnez un statut</option>-->
                                            <?php foreach (getStatut() as $statut) : ?>
                                                <option value="<?= $statut ?>"> <?= $statut ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 unit">
                                    <label class="label">Message de reponse </label>
                                    <textarea name="reponse" id="" class="form-control" rows="3" required>

                                    </textarea>
                                </div>
                            </div>

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary primary-btn">Valider !!</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>