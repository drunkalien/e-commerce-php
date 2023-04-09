<main>
  <div class="container">

    <section class="checkout">
      <h2 id="checkout-heading">Checkout</h2>

      <form class="checkout-form">
        <div>
          <h2>Shipping information</h2>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name">
        </div>

        <div>
          <label for="username">Username</label>
          <input type="username" name="username" id="username" placeholder="Enter your username">
        </div>

        <div>
          <label for="address">Address</label>
          <input type="text" name="address" id="address" placeholder="Enter your address">
        </div>

        <div>
          <label for="city">City</label>
          <input type="text" name="city" id="city" placeholder="Enter your city">
        </div>

        <div>
          <label for="state">State</label>
          <input type="text" name="state" id="state" placeholder="Enter your state">
        </div>

        <div>
          <label for="zip">Zip</label>
          <input type="text" name="zip" id="zip" placeholder="Enter your zip">
        </div>

        <h2>Payment</h2>

        <div class="radio-group">
          <div>
            <input type="radio" id="cash" value="cash" name="payment-option" checked>
            <label class="radio-label" for="cash">Cash (you will be requested to pay when your order is delivered)</label><br>
          </div>
          <div>
            <input type="radio" id="credit_card" value="credit_card" name="payment-option">
            <label class="radio-label" for="credit_card">Credit Card</label><br>
          </div>
        </div>

        <div class="requisites">
          <input type="text" name="card_number" id="card_number" placeholder="Enter your card number">
          <input type="text" name="card_holder" id="card_holder" placeholder="Enter card holder's name">
          <input type="text" name="card_expiration" id="card_expiration" placeholder="Enter your card expiration">
          <input type="text" name="card_cvv" id="card_cvv" placeholder="Enter your card cvv">
        </div>

        <div>
          <button class="btn">Checkout</button>
        </div>
      </form>
    </section>

  </div>
</main>

<script>
  const form = document.querySelector('.checkout-form');
  const requisitesInputs = document.querySelector('.requisites');
  const cash = document.querySelector('#cash');
  const creditCard = document.querySelector('#credit_card');

  // following listeners will hide/show credit card requisites inputs
  creditCard.addEventListener('change', (e) => {
    if (e.target.checked) {
      requisitesInputs.style.display = 'grid'
    }
  });

  cash.addEventListener('change', (e) => {
    if (e.target.checked) {
      requisitesInputs.style.display = 'none'
    }
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    window.location.href = 'success.php';
  });
</script>