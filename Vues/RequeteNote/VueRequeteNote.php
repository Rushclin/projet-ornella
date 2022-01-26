<?php $this->titre = "Requete note"; ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Requetes de notes</h2>
            <?= isset($msg) ? '<p class="text-danger">' . $msg . "</p>" : '<p>Emetre une requete pour revendiquer sa note</p>' ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">

            <div class="widget-container margin-top-0 clearfix">
                <div class="widget-content">
                    <form action="index.php?action=requete/note/post" enctype="multipart/form-data" method="POST" class="j-forms" id="j-forms-validation" novalidate>
                        <div class="form-content">
                            <div class="w-section-header">
                                <h3>Remplissez le formulaire et soumettez votre requete</h3>
                            </div>
                            <!-- start email url -->
                            <div class="row">
                                <div class="col-md-6 unit">
                                    <label class="label">Nom</label>
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <input class="form-control" type="text" value="<?= isset($nom) ? $nom : '' ?>" placeholder="" name="nom" id="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Prenom</label>
                                    <div class="input">
                                        <label class="icon-right" for="url">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <input class="form-control" type="text" placeholder="" value="<?= isset($prenom) ? $prenom : '' ?>" name="prenom" id="prenom" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 unit">
                                    <label class="label">Specialite</label>

                                    <label class="input select">
                                        <select class="form-control" required name='specialite'>
                                            <option value="none">Selectionnez une specialite</option>
                                            <?php foreach ($specialites as $specialite) : ?>
                                                <option value="<?= $specialite ?>" <?= isset($specialit) ? 'selected' : '' ?>> <?= $specialite ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Niveau</label>
                                    <label class="input select">
                                        <select class="form-control" required name='niveau'>
                                            <option value="none">Selectionnez un niveau d'etude</option>
                                            <?php foreach ($niveaux as $niveau) : ?>
                                                <option value="<?= $niveau ?>" <?= isset($nivea) ? 'selected' : '' ?>> <?= $niveau ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 unit">
                                    <label class="label">Matiere</label>
                                    <label class="input select">
                                        <select class="form-control" required name='matiere'>
                                            <option value="none">Selectionnez une matiere</option>
                                            <?php foreach ($matieres as $matiere) : ?>
                                                <option value="<?= $matiere ?>" <?= isset($matier) ? 'selected' : '' ?>> <?= $matiere ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Note conernee</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="radio">
                                                <input type="radio" name="session" value='CC' checked>
                                                <i></i>
                                                CC
                                            </label>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="radio">
                                                <input type="radio" name="session" value='NORMALE'>
                                                <i></i>
                                                Normale
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="unit">
                                <label class="label">Piece justificative</label>
                                <div class="input append-big-btn">
                                    <label class="icon-left" for="append-big-btn">
                                        <i class="fa fa-download"></i>
                                    </label>
                                    <div class="file-button">
                                        Fouiller
                                        <input type="file" name="file" onchange="document.getElementById('append-big-btn').value = this.value;">
                                    </div>
                                    <input class="form-control" type="text" id="append-big-btn" readonly="" placeholder="no file selected">
                                    <span class="hint">Type supporte : jpg / png </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label class="checkbox-toggle">
                                        <input type="checkbox" name="checkbox_toggle">
                                        <i></i>
                                        J'accepte avoir bien rempli les donnees
                                    </label>
                                </div>
                            </div>
                            <!-- end /.content -->

                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary primary-btn">Soumettre !!</button>
                            </div>
                            <!-- end /.footer -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>