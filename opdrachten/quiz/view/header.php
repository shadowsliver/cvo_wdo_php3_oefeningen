<?php

$pages = array(
    "home"
);
$pages_name = array(
    "Quiz"
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
      <span class="greentext">Hulp nodig?</span> <form method='get' action='http://www.bing.com/search' target='_blank'>
            <input type='text' name='q'>
            <input type='submit' value='Zoeken met Bing'>
        </form>
    </div>
</div>