<header>
  <div class="container">
    <nav class="nav">
      <div class="logo">
        <a href="index.php">
          Phones
        </a>
      </div>
      <div class="nav-links-right">
        <?php
        session_start();
        $authed = $_SESSION["username"] ?? false;

        if ($authed) {
          echo '
          <a href="basket.php">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
          <a href="components/logout.php">Log out</a>';
        } else {
          echo '
          <a href="login.php">
            <span>Sign in</span>
          </a>
        ';
        }
        ?>
      </div>
    </nav>
  </div>
</header>