<div class="basket-grid">
  <?php
  include "db.php";

  foreach ($products as $product) {
    echo "
    <div class='product-item'>
      <img src='$product[img]' alt='product image' />
      <div class='product-info'>
        <div>
          <div>
            <div class='product-price'>$product[price]</div>
          </div>
          <h3>$product[name]</h3>
        </div>
        <div class='pr-quantity'>
        <label for='quantity'>Quantity: </label>
          <input type='number' value='1' id='quantity' />
        </div>
        <div class='product-actions'>
          <a class='btn view-btn' href='product.php'>View product</a>
          <a href='checkout.php' class='btn checkout-btn'>Checkout this product</a>
        </div>
      </div>
    </div>
    ";
  }
  ?>
</div>