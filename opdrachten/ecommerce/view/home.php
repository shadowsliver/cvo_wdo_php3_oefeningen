<div class="container">
    <div class="row margintop">
        <div class="col-sm-12">
            <h1>Mijn online winkel in actie</h1>
            <h2>Voorradenbeheer van de producten</h2>
            <h3>OnePlus One</h3>
            <form method="post" action="index.php?page=home">
                <select name="keuze">
                    <option value="yes">Voorraad verhogen met 1</option>
                    <?php if($controller->product->GetProduct()->product_bought >0 ) :?>
                    <option value="no">Voorraad verminderen met 1</option>
                    <?php endif; ?>
                </select>
                <input type="submit" value="Aanpassen"">
            </form>
            <hr>
            <h2>Overzicht van het product: OnePlus One</h2>

            <ul>
                <li>Aankoop: <?php print($controller->product->GetProduct()->product_bought); ?></li>
                <li>Verkoop: <?php print($controller->product->GetProduct()->product_sold); ?></li>
                <li>In Stock: <?php print($controller->product->GetProduct()->product_bought-$controller->product->GetProduct()->product_sold); ?></li>
            </ul>

        </div>
    </div>
</div>
