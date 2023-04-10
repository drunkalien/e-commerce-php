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
?>

<main>
  <form method="POST">
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
            <button type="submit" name="basket" class="btn"><i class="fa-solid fa-cart-plus"></i> Add to basket</button>
          </div>
        </div>
      </main>
    </div>
  </form>
</main>

<?php 
if(isset($_POST['basket'])) {
  $quantity = $_POST['quantity'];
  $email = $_SESSION['email'];

  if(!isset($email)) {
    header("Location: login.php");
  }

  $user_query = "SELECT * FROM users WHERE email = '$email'";
  $user_result = mysqli_query($connection, $user_query);
  $user = mysqli_fetch_array($user_result);
  $user_id = $user['id'];
  $product_query = "SELECT * FROM basket WHERE product_id = '$id' AND user_id = '$user_id'";
  $result = mysqli_query($connection, $product_query);
  if(mysqli_num_rows($result) > 0) {
    $basket_query = "UPDATE basket SET quantity = quantity + '$quantity' WHERE user_id = '$user_id' AND product_id = '$id'";
    mysqli_query($connection, $basket_query);
    return;
  }
  $basket_query = "INSERT INTO basket (user_id, product_id, quantity) VALUES ('$user_id', '$id', '$quantity')";
  mysqli_query($connection, $basket_query);
}
?>