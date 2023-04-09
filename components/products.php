<div class="products-grid">
  <?php
  include "db.php";

  foreach ($products as $product) {
    echo "
    <div class='product-item'>
      <img src='$product[img]' alt='product image' />
      <div class='product-info'>
        <div class='product-details'>
          <h3>$product[name]</h3>
          <div>
            <div class='product-price'>$product[price]</div>
          </div>
        </div>
        <div class='product-actions'>
          <a class='product-link btn mt-10' href='product.php?id=$product[id]'>View</a>
        </div>
      </div>
    </div>
    ";
  }
  ?>
</div>