<?php
include "db.php";
include "application_top.php";
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE id = $id";
$result = mysqli_query($connection, $query);
$product = mysqli_fetch_array($result);
$name = $product['name'];
$price = $product['price'];
$description = $product['description'];
$image = $product['image'];
// "
// <main>
//   <div class='container'>
//     <main class='product'>
//       <div class='product-images'>
//         <div class='product-image'>
//             <img src=echo '$image'> alt='phone' />
//         </div>
//       </div>

//       <div class='product-data'>
//         <div class='product-info'>
//           <h2 class='product-name'>$name></h2>
//           <div class='product-price'>$price></div>
//         </div>
//         <div class='product-description'>$description></div>
//         <div class='product-quantity'>
//           <label for='quantity'>Quantity:</label>
//           <input type='number' name='quantity' id='quantity' value='1' />
//         </div>
//         <div class='product-actions'>
//           <a href='basket.php'>
//             <button class='btn'><i class='fa-solid fa-cart-plus'></i> Add to basket</button>
//           </a>
//         </div>
//       </div>
//     </main>
//   </div>
// </main>

// "
?>
<main>
  <div class="container">
    <main class="product">
      <div class="product-images">
        <div class="product-image">
            <img src=<?php echo $product['image']; ?> alt="phone" />
        </div>
      </div>

      <div class="product-data">
        <div class="product-info">
          <h2 class="product-name"><?php echo $product['name']; ?></h2>
          <div class="product-price"><?php echo $product['price']; ?></div>
        </div>
        <div class="product-description"><?php echo $product['description'] ?></div>
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