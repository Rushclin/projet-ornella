<aside class="leftbar">
    <div class="left-aside-container">
        <div class="user-profile-container">
            <div class="user-profile clearfix">
                <div class="admin-user-thumb">
                    <img src="Assets/images/avatar/avatar5.png" alt="admin">
                </div>
                <div class="admin-user-info">
                    <ul>
                        <li><a href="#"><?= $_SESSION['USER']['ALL']['nom_et'] ?></a></li>
                        <li><a href="#"><?= $_SESSION['USER']['ALL']['email_et'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="admin-bar">
                <ul>
                    <li>
                        <a href="index.php?" title="Se deconnecter"><i class="zmdi zmdi-power"></i></a>
                    </li>
                    <li>
                        <a href="#" title="Mes infos"><i class="zmdi zmdi-account"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="list-accordion tree-style">
            <li class="list-title">Emrettre une requete</li>
            <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Types de requetes </span></a>
                <ul>
                    <li><a href="index.php?action=requete/note">Requete de notes</a></li>
                    <li><a href="index.php?action=requete/autre">Autres Requetes</a></li>
                </ul>
            </li>

            <li class="list-title">Suivre mes requetes</li>
            <li>
                <a href="#"><i class="zmdi zmdi-swap"></i><span class="list-label">Liste des requetes</span></a>
                <ul>
                    <li><a href="index.php?action=requete/liste/all">Toutes les requetes</a></li>
                    <li><a href="index.php?action=requete/liste/encours">Requetes en cours</a></li>
                    <li><a href="index.php?action=requete/liste/nonfondees">Requetes non fondees</a></li>
                    <li><a href="index.php?action=requete/liste/traitees">Requetes traitees</a></li>
                    <li><a href="index.php?action=requete/liste/rejetees">Requetes rejetees</a></li>
                </ul>
            </li>
            <li class="list-title">Notifications</li>
            <li>
                <a href="#"><i class="zmdi zmdi-view-web"></i><span class="list-label">Liste des notifications</span></a>
                <ul>
                    <li><a href="form-all-elements.html">Reussites</a></li>
                    <li><a href="form-basic-elements.html">Echecs</a></li>
                    <li><a href="form-material-elements.html">Alertes</a></li>
                    <li><a href="form-icons-label.html">Avertissements</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>