<?php 
include "application_top.php";
$query = "SELECT username FROM users WHERE username = 'john_doe'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
echo $row['username'];

if(array_key_exists('register', $_POST)) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $email_query = "SELECT email FROM users WHERE email = '$email'";

  if(mysqli_num_rows(mysqli_query($connection, $email_query)) > 0) {
    echo "Email already exists";
    exit();
  }

  $password = $_POST['password'];
  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  $result = mysqli_query($connection, $query);
  if($result) {
    echo "User created successfully";
  } else {
    echo "Error creating user: " . mysqli_error($connection);
  }
}
?>

<main class="auth">
  <div class="container">
    <section class="register">
      <h2>Register</h2>

      <form class="register-form form">
        <div class="form-control">
          <label for="username">Username</label>
          <input type="username" name="username" id="username" placeholder="Enter your username">
        </div>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password">
        </div>
        <div class="form-control">
          <button class="btn" name="register" >Register</button>
        </div>
      </form>

      <div class="auth-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </section>

  </div>
</main>