<?php 
include "application_top.php";
?>

<main class="auth">
  <div class="container">
    <section class="register">
      <h2>Register</h2>
      <form class="register-form form" action="" method="POST">
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
          <button type="submit" class="btn" name="register" >Register</button>
        </div>
      </form>
      <p id="error"></p>

      <?php 
      function check_user_exists($email, $email_query) {
        global $connection;

        if(mysqli_num_rows(mysqli_query($connection, $email_query)) > 0) {
          return true;
        } else {
          return false;
        }
      }
      if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $email_query = "SELECT email FROM users WHERE email = '$email'";

        if(check_user_exists($email, $email_query)) {
          echo "<p id='error'>Email already exists</p>";
          return;
        } else {
          echo "<p id='error'></p>";
        }

        $password = $_POST['password'];
        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result) {
          echo "User created successfully";
        } else {
          echo "Error creating user: " . mysqli_error($connection);
        }

        header("Location: login.php");
      }
      ?>
      <div class="auth-link">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </section>

  </div>
</main>