<div class="basket-grid">
  <?php
  include "db.php";
  include "application_top.php";

  $email = $_SESSION['email'];
  $user_query = "SELECT * FROM users WHERE email = '$email'";
  $user_result = mysqli_query($connection, $user_query);
  $user = mysqli_fetch_array($user_result);
  $query = "SELECT * FROM `basket` LEFT JOIN product ON basket.product_id = product.id AND basket.user_id = $user[id]";
  $result = mysqli_query($connection, $query);

  while($product = mysqli_fetch_array($result)) {
    echo "
      <div class='product-item'>
        <img src='$product[image]' alt='product image' />
        <div class='product-info'>
          <div>
            <div>
              <div class='product-price'>$product[price]</div>
            </div>
            <h3>$product[name]</h3>
          </div>
          <div class='pr-quantity'>
          <label for='quantity'>Quantity: </label>
            <input type='number' value='$product[quantity]' id='quantity' />
          </div>
          <div class='product-actions'>
            <a class='btn view-btn' href='product.php'>View product</a>
            <a href='checkout.php' class='btn checkout-btn'>Checkout this product</a>
          </div>
        </div>
      </div> 
    ";
    
  }

//   foreach ($products as $product) {
//     echo "
//     <div class='product-item'>
//       <img src='$product[image]' alt='product image' />
//       <div class='product-info'>
//         <div>
//           <div>
//             <div class='product-price'>$product[price]</div>
//           </div>
//           <h3>$product[name]</h3>
//         </div>
//         <div class='pr-quantity'>
//         <label for='quantity'>Quantity: </label>
//           <input type='number' value='1' id='quantity' />
//         </div>
//         <div class='product-actions'>
//           <a class='btn view-btn' href='product.php'>View product</a>
//           <a href='checkout.php' class='btn checkout-btn'>Checkout this product</a>
//         </div>
//       </div>
//     </div>
//     ";
//   }
  ?>
