<?php
   include_once "../source/config.php";
    
  $query = "SELECT * from Producten";

    $result = $connection->query($query);

    $products = $result->fetch_all(MYSQLI_ASSOC);

?>

<div style="display: flex;gap: 1rem;">
                <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <h3><?php echo htmlspecialchars($product['product_naam']); ?></h3>
                   
                    <p>Prijs: €<?php echo number_format($product['product_prijs'], 2, ',', '.'); ?></p>
                </div>
            <?php endforeach; ?>
            </div>

            