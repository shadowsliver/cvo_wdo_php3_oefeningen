<?php

$pages = array(
    "home", "opleidingen", "projecten"
);
$pages_name = array(
    "Personalia", "Gevolgde Opleidingen", "Gemaakte Projecten"
);


?>
<div class="container">
    <div class="row">
        <nav id="menu">
            <ul class="nav nav-tabs">
                <?php for ($i = 0; $i < count($pages); ++$i) : ?>
                    <li <?php if ($page == $pages[$i]): ?> class="active" <?php endif; ?> ><a
                            href="?page=<?php print($pages[$i]); ?>"><?php print($pages_name[$i]) ?></a></li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
    <div id="header" class="row">
       <img src="images/logo.png" alt="logo" class="img-responsive"> <span class="greentext">&#60;about&#62;</span> &nbsp;PHP &amp; Java Developer&nbsp;<span class="greentext">&#60;/about&#62;</span>
    </div>
</div>