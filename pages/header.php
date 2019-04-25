<div class="header box">
    <!-- Navigation -->
    <div class="pos-f-t fixed-top">
        <div class="collapse" id="navbarToggleExternalContent">
            <?php include("pages/collapsed.php") ?>
        </div>
        <nav class="navbar <?php
        if (strcmp(getModeCookie(), 'LIGHT') == 0)
            echo 'navbar-light bg-light navbar-dev-light';
        else if (strcmp(getModeCookie(), 'DARK') == 0)
            echo 'navbar-dark bg-dark navbar-dev-dark';
        else
            echo 'navbar-light bg-light navbar-dev-light';
        ?>">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand logo-brand log-img" href="#">
                <img src="assets/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo Leaflighted">
                &nbsp;Leaflighted
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php
                if (strcmp(getModeCookie(), 'LIGHT') == 0)
                    echo 'lang-light';
                else if (strcmp(getModeCookie(), 'DARK') == 0)
                    echo 'lang-dark';
                else
                    echo 'lang-light';
                ?>">
                    <a class="nav-link" href="index.php?lang=EN">EN</a>
                    <a class="nav-link">&nbsp;&#183;&nbsp;</a>
                    <a class="nav-link" href="index.php?lang=FR">FR</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container" id="head">
        <div class="row">
            <div class="col-lg-12 logo-img logo-text">
                <img src="assets/logo.png" alt="logo Leaflighted" class="rounded mx-auto d-block">
                <h1 class="mt-5 logo-text">Leaflighted</h1>
            </div>
        </div>
    </div>
</div>
