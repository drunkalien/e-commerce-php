<?php
include "db.php";
$id = $_GET['id'];
?>

<main>
  <div class="container">
    <main class="product">
      <div class="product-images">
        <div class="product-image">
            <img src=<?php echo $products[$id]['img']; ?> alt="phone" />
        </div>
      </div>

      <div class="product-data">
        <div class="product-info">
          <h2 class="product-name"><?php echo $products[$id]['name']; ?></h2>
          <div class="product-price"><?php echo $products[$id]['price']; ?></div>
        </div>
        <div class="product-description"><?php echo $products[$id]['desc'] ?></div>
        <div class="product-quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" name="quantity" id="quantity" value="1" />
        </div>
        <div class="product-actions">
          <a href="basket.php">
            <button class="btn"><i class="fa-solid fa-cart-plus"></i> Add to basket</button>
          </a>
        </div>
      </div>
    </main>
  </div>
</main>