<?php $this->titre = "Requte autre"; ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Requetes pour revendiquer autres choses</h2>
            <p>Emetre une requete pour revendiquer ou rectifier autres choses.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">

            <div class="widget-container margin-top-0 clearfix">
                <div class="widget-content">
                    <form action="" method="POST" class="j-forms" id="j-forms-validation" novalidate>
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
                                        <input class="form-control" type="text" placeholder="" name="nom" id="nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Prenom</label>
                                    <div class="input">
                                        <label class="icon-right" for="url">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <input class="form-control" type="text" placeholder="" name="prenom" id="prenom" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 unit">
                                    <label class="label">Specialite</label>

                                    <label class="input select">
                                        <select class="form-control" required>
                                            <option value="none">Selectionnez une specialite</option>
                                            <option value="0">Informatique</option>
                                            <option value="1">Biologie</option>
                                            <option value="2">Biochimie</option>
                                            <option value="3">Biologie animale</option>
                                            <option value="4">Biologie Vegetale</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Niveau</label>
                                    <label class="input select">
                                        <select class="form-control" required>
                                            <option value="none">Selectionnez un niveau d'etude</option>
                                            <option value="0">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option value="4">5</option>
                                            <option value="5">6</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 unit">
                                    <label class="label">Objet</label>
                                    <input type="text" name="" class="form-control" required id="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 unit">
                                    <label class="label">Corps de la requete</label>
                                    <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
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