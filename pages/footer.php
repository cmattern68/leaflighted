<?php
$lang = changeLanguage();
?>
<footer class="page-footer font-small stylish-color-dark pt-4 <?php
        if (strcmp(getModeCookie(), 'LIGHT') == 0)
            echo 'footer-light';
        else if (strcmp(getModeCookie(), 'DARK') == 0)
            echo 'footer-dark';
        else
            echo 'footer-light';
        ?>">
    <div class="container text-center text-md-left">
        <div class="row">
                <hr class="clearfix w-100 d-md-none">
                <div class="col">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><?php echo Lib::Sanitize($lang['footer']['rubrics']); ?></h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" onclick="return false;" onmousedown="autoScrollTo('head');"><?php echo Lib::Sanitize($lang['footer']['home']); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo Lib::Sanitize($lang['footer']['game']); ?></a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target=".contact-modal"><?php echo Lib::Sanitize($lang['footer']['contact']); ?></a>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><?php echo Lib::Sanitize($lang['footer']['info']); ?></h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><?php echo Lib::Sanitize($lang['footer']['mentions']); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo Lib::Sanitize($lang['footer']['data']); ?></a>
                        </li>
                        <li>
                            <a href="index.php?mode=<?php
                            if (strcmp(getModeCookie(), 'DARK') == 0)
                                echo "LIGHT";
                            else if (strcmp(getModeCookie(), 'LIGHT') == 0)
                                echo "DARK";
                            else
                                echo "LIGHT";
                            ?>"><?php
                                if (strcmp(getModeCookie(), 'DARK') == 0)
                                    echo Lib::Sanitize($lang['footer']['light']);
                                else if (strcmp(getModeCookie(), 'LIGHT') == 0)
                                    echo Lib::Sanitize($lang['footer']['dark']);
                                else
                                    echo Lib::Sanitize($lang['footer']['light']);
                            ?></a>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4 rs">
                    <a href="#" class="btn-floating btn-fb">
                        <img src="assets/media/facebook.png">
                    </a>
                    <a href="#" class="btn-floating btn-tw">
                        <img src="assets/media/twitter.png">
                    </a>
                    <a href="#" class="btn-floating btn-yt">
                        <img src="assets/media/youtube.png">
                    </a>
                    <a href="#" class="btn-floating btn-st">
                        <img src="assets/media/steam.png">
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-copyright text-center py-3">&copy; 2018 Copyright:
            <a href="#"> Leaflighted.com</a>
        </div>
</footer>
