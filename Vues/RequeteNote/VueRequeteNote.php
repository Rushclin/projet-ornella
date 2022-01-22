<?php $this->titre = "Requte nom"; ?>

<div class="page-header filled light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Requetes de notes</h2>
            <p>Emetre une requete pour revendiquer sa note</p>
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
                                        <input class="form-control" type="text" placeholder="" name="prenom" id="prenom">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 unit">
                                    <label class="label">Specialite</label>

                                    <label class="input select">
                                        <select class="form-control">
                                            <option value="none">Select fruit</option>
                                            <option value="0">Apple</option>
                                            <option value="1">Banana</option>
                                            <option value="2">Coconut</option>
                                            <option value="3">Mango</option>
                                            <option value="4">Melon</option>
                                            <option value="5">Orange</option>
                                            <option value="6">Pear</option>
                                            <option value="7">Watermelon</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Niveau</label>
                                    <label class="input select">
                                        <select class="form-control">
                                            <option value="none">Select fruit</option>
                                            <option value="0">Apple</option>
                                            <option value="1">Banana</option>
                                            <option value="2">Coconut</option>
                                            <option value="3">Mango</option>
                                            <option value="4">Melon</option>
                                            <option value="5">Orange</option>
                                            <option value="6">Pear</option>
                                            <option value="7">Watermelon</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 unit">
                                    <label class="label">Matiere</label>
                                    <label class="input select">
                                        <select class="form-control">
                                            <option value="none">Select fruit</option>
                                            <option value="0">Apple</option>
                                            <option value="1">Banana</option>
                                            <option value="2">Coconut</option>
                                            <option value="3">Mango</option>
                                            <option value="4">Melon</option>
                                            <option value="5">Orange</option>
                                            <option value="6">Pear</option>
                                            <option value="7">Watermelon</option>
                                        </select>
                                        <i></i>
                                    </label>
                                </div>
                                <div class="col-md-6 unit">
                                    <label class="label">Note conernee</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="radio">
                                                <input type="radio" name="radio" selected>
                                                <i></i>
                                                CC
                                            </label>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="radio">
                                                <input type="radio" name="radio">
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
                                <button type="submit" class="btn btn-primary primary-btn">Spumettre !!</button>
                            </div>
                            <!-- end /.footer -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>