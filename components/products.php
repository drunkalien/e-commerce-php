
<div class="products-grid">
<?php 
include "application_top.php";
$query = "SELECT * FROM product";

$result = mysqli_query($connection, $query);

while($product = mysqli_fetch_array($result)) {
    echo "
    <div class='product-item'>
      <img src='$product[image]' alt='product image' />
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