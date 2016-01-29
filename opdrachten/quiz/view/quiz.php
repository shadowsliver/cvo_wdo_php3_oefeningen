<?php
$i = 0;
$goed = 0;
$slecht = 0;
if (isset($_POST['quiz-submitted'])) {
    foreach ($_POST as $p) {
        if ($p = "goed") {
            $goed++;
        } else {
            $slecht++;
        }
    }
}

?>

<?php foreach ($quiz->vragen as $q) : ?>
    <p class="margintopheavy soheavy"><?php echo($q[0]); ?></p>
    <div class="radio <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "goed") {
        echo('goed');
    } ?>">
        <input <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "goed") {
            echo('checked');
        } else if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] != "goed") {
            echo('disabled');
        } ?> type="radio" name="<?php echo("vraag$i"); ?>" value="goed"> <?php echo($q[1]); ?><br>
    </div>
    <div class="radio <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "slecht1") {
        echo('fout');
    } ?>">
        <input <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "slecht1") {
            echo('checked');
        } else if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] != "slecht1") {
            echo('disabled');
        } ?> type="radio" name="<?php echo("vraag$i"); ?>" value="slecht1"> <?php echo($q[2]); ?><br>
    </div>
    <div class="radio <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "slecht2") {
        echo('fout');
    } ?>">
        <input <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "slecht2") {
            echo('checked');
        } else if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] != "slecht2") {
            echo('disabled');
        } ?> type="radio" name="<?php echo("vraag$i"); ?>" value="slecht2"> <?php echo($q[3]); ?><br>
    </div>
    <div class="radio <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "slecht3") {
        echo('fout');
    } ?>">
        <input <?php if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] == "slecht3") {
            echo('checked');
        } else if (isset($_POST["vraag$i"]) && $_POST["vraag$i"] != "slecht3") {
            echo('disabled');
        } ?> type="radio" name="<?php echo("vraag$i"); ?>" value="slecht3"> <?php echo($q[4]); ?><br>
    </div>

    <?php $i++; ?>
<?php endforeach; ?>

<?php if (isset($_POST['quiz-submitted'])) : ?>
   <a class="btn btn-primary" href='index.php?page=home'>Opnieuw proberen?</a>
<?php else: ?>
    <input type='submit' name='quiz-submitted' value='Inzenden'>
<?php endif;