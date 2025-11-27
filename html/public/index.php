<?php include '../source/views/header.php';
      include '../source/config.php';
      include '../source/database.php';

      $result = $connection->query("SELECT * from Producten");
 
print_r($result->fetch_all());
?>

    <section class="over_ons">
        <h2>Over ons</h2>
        <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi sequi magnam ab, quia dicta aliquid quam
            nam, sit hic quidem dolores voluptatibus quis harum, labore accusantium commodi rerum possimus nihil!</h3>
    </section>

    <section class="centerdeal">
        <h2>afbeeldingen</h2>
        <section class="DEALS">
            <?php include '../source/views/apple.php'; ?>
        </section>
    </section>

    <?php include '../source/views/foet.php'; ?>