<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Support Internet Freedom - Donate to StormyCloud Inc Today!</title>
    <link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
    <link rel="icon" href="../assets/images/favicon.png" type="image/png">
    <link rel="canonical" href="https://stormycloud.org/donate/" />
    <meta name="description" content="Support digital privacy with secure donations. We accept cryptocurrencies and traditional methods to defend online civil liberties." />
    <script async src="https://widgets.givebutter.com/latest.umd.cjs?acct=KYuW620gdbglriQv&p=other"></script>
    <style>
      .custom-heading {
        font-size: 1.5em;
        margin: 0;
        text-align: left;
      }
      /* Clearfix helper */
      .clearfix::after {
        content: "";
        display: table;
        clear: both;
      }
      /* Grid for crypto blocks (4 per row) */
      .crypto-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        justify-items: center;
      }
      .crypto-item {
        text-align: center;
        padding: 1rem;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      }
      @media (max-width: 800px) {
        .crypto-container {
          grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
      }
      /* Donation widgets area restructured as two columns */
      .donation-widgets {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
        flex-wrap: wrap;
      }
      /* Left column for the Credit Card widget */
      .widget-left {
        flex: 1 1 300px;
      }
      /* Right column for BTCPay widget + Text-to-Donate; stack vertically */
      .widget-right {
        flex: 1 1 300px;
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }
      /* BTCPay styles */
      .btcpay-form { 
        display: inline-flex; 
        align-items: center; 
        justify-content: center; 
      }
      .btcpay-form--inline { flex-direction: row; }
      .btcpay-form--block { flex-direction: column; }
      .btcpay-form--inline .submit { margin-left: 15px; }
      .btcpay-form--block select { margin-bottom: 10px; }
      .btcpay-form .btcpay-custom-container { 
        text-align: center; 
      }
      .btcpay-custom { 
        display: flex; 
        align-items: center; 
        justify-content: center; 
      }
      .btcpay-form .plus-minus {
        cursor: pointer;
        font-size: 25px;
        line-height: 25px;
        background: #DFE0E1;
        height: 30px;
        width: 45px;
        border: none;
        border-radius: 60px;
        margin: auto 5px;
        display: inline-flex;
        justify-content: center;
      }
      .btcpay-form select {
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        color: currentColor;
        background: transparent;
        border: 1px solid transparent;
        display: block;
        padding: 1px;
        margin-left: auto;
        margin-right: auto;
        font-size: 11px;
        cursor: pointer;
      }
      .btcpay-form select:hover { border-color: #ccc; }
      .btcpay-form option { color: #000; background: rgba(0,0,0,.1); }
      .btcpay-input-price {
        -moz-appearance: textfield;
        border: none;
        box-shadow: none;
        text-align: center;
        font-size: 25px;
        margin: auto;
        border-radius: 5px;
        line-height: 35px;
        background: #fff;
      }
      .btcpay-input-price::-webkit-outer-spin-button,
      .btcpay-input-price::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      /* Sponsor section spacing */
      .sponsor-section {
        margin-top: 2rem;
        clear: both;
      }
    </style>
  </head>
  <body id="donate">
    <?php include '../navbar.php'; ?>

    <div class="container">
      <div class="inner">
        <div class="page-title" style="background-image: url('../assets/images/donate-title.webp');">
          <h1>Donate to StormyCloud</h1>
        </div>

        <p>
          By donating to StormyCloud Inc you are supporting the defense 
          of Internet access as a fundamental human right. Your contribution 
          ensures electronic privacy, fosters unrestricted access to information, 
          and promotes the free exchange of ideas across borders. Together, we 
          can harness the power of an open and secure Internet to build stronger,
          more connected communities and drive positive global change.
        </p>

        <!-- Top Crypto Donation Section -->
        <div class="crypto-container clearfix">
          <div class="crypto-item">
            <h3>Monero (XMR)</h3>
            <img src="../assets/images/xmr.png" width="150" height="150" alt="Monero QR Code">
            <div class="crypto-address" tabindex="0">
              45Gtj5tkhs4EsbnV7kkhMCRpbZUdqCQqR5qmLFVLAvbFCYaPL4pFbBkEBLJ7beHqkiJxdTBkPwFsT5EMu5jDrYBHPjQzPuv
            </div>
          </div>
          <div class="crypto-item">
            <h3>Bitcoin (BTC)</h3>
            <img src="../assets/images/btc.png" width="150" height="150" alt="Bitcoin QR Code">
            <div class="crypto-address" tabindex="0">
              1NDRuQNyJZmYK4AJwve1aqa56ntuXpbyA7
            </div>
          </div>
          <div class="crypto-item">
            <h3>Ethereum (ETH)</h3>
            <img src="../assets/images/eth.png" width="150" height="150" alt="Ethereum QR Code">
            <div class="crypto-address" tabindex="0">
              0x07FA04Bd6660dCB8f0C9338F37aBdA67A656CA2F
            </div>
          </div>
          <div class="crypto-item">
            <h3>Litecoin (LTC)</h3>
            <img src="../assets/images/ltc.png" width="150" height="150" alt="Litecoin QR Code">
            <div class="crypto-address" tabindex="0">
              LULvg4mJc9Y37hU3sbVTMxJAPyNwyCJHw6
            </div>
          </div>
        </div>

        <!-- Donation Widgets Section restructured in two columns -->
        <div class="donation-widgets clearfix">
          <!-- Left Column: Credit Card Widget -->
          <div class="widget widget-left">
            <h3>Credit Card</h3>
            <div class="donate-right-area">
              <div id="parent">
                <givebutter-widget id="gko5og"></givebutter-widget>
              </div>
            </div>
          </div>

          <!-- Right Column: BTCPay Widget + Text-to-Donate -->
          <div class="widget widget-right">
            <!-- BTCPay Cryptocurrency Widget -->
            <div class="widget widget2">
              <h3>Cryptocurrency</h3>
              <form method="POST" action="https://btcpay.stormycloud.org/api/v1/invoices" class="btcpay-form btcpay-form--block">
                <input type="hidden" name="storeId" value="v4hjqz3BvaiLKpcDmzBqQoANcKn96LVBs6xsaVZ6o1U" />
                <div class="btcpay-custom-container">
                  <div class="btcpay-custom">
                    <button class="plus-minus" type="button" data-type="-" data-step="1" data-min="1" data-max="20">-</button>
                    <input class="btcpay-input-price" type="number" name="price" min="1" max="20" step="1" value="1" data-price="1" style="width:3em;" />
                    <button class="plus-minus" type="button" data-type="+" data-step="1" data-min="1" data-max="20">+</button>
                  </div>
                  <select name="currency">
                    <option value="USD" selected>USD</option>
                    <option value="GBP">GBP</option>
                    <option value="EUR">EUR</option>
                    <option value="BTC">BTC</option>
                  </select>
                </div>
                <button type="submit" class="submit" name="submit" style="min-width:209px; min-height:57px; border-radius:4px; border-style:none; background-color:#0f3b21; cursor:pointer;" title="Pay with BTCPay Server, a Self-Hosted Bitcoin Payment Processor">
                  <span style="color:#fff">Donate with</span>
                  <img src="https://btcpay.stormycloud.org/img/paybutton/logo.svg" style="height:57px; display:inline-block; padding:5% 0 5% 5px; vertical-align:middle;" alt="btc pay">
                </button>
              </form>
              <script>
                function handlePlusMinus(event) {
                  event.preventDefault();
                  const root = event.target.closest('.btcpay-form');
                  const el = root.querySelector('.btcpay-input-price');
                  const step = parseInt(event.target.dataset.step) || 1;
                  const min = parseInt(event.target.dataset.min) || 1;
                  const max = parseInt(event.target.dataset.max);
                  const type = event.target.dataset.type;
                  const price = parseInt(el.value) || min;
                  if (type === '-') {
                    el.value = price - step < min ? min : price - step;
                  } else if (type === '+') {
                    el.value = price + step > max ? max : price + step;
                  }
                }
                document.querySelectorAll(".btcpay-form .plus-minus").forEach(function(el) {
                  if (!el.dataset.initialized) {
                    el.addEventListener('click', handlePlusMinus);
                    el.dataset.initialized = true;
                  }
                });
                function handlePriceInput(event) {
                  event.preventDefault();
                  const root = event.target.closest('.btcpay-form');
                  const price = parseInt(event.target.dataset.price);
                  if (isNaN(event.target.value)) root.querySelector('.btcpay-input-price').value = price;
                  const min = parseInt(event.target.getAttribute('min')) || 1;
                  const max = parseInt(event.target.getAttribute('max'));
                  if (event.target.value < min) {
                    event.target.value = min;
                  } else if (event.target.value > max) {
                    event.target.value = max;
                  }
                }
                document.querySelectorAll(".btcpay-form .btcpay-input-price").forEach(function(el) {
                  if (!el.dataset.initialized) {
                    el.addEventListener('input', handlePriceInput);
                    el.dataset.initialized = true;
                  }
                });
              </script>
            </div>

            <!-- Text to Donate Widget (placed below the BTCPay widget) -->
            <div class="widget widget4">
              <h3>Text to Donate</h3>
              <div class="contact-box">
                <p class="text-to-donate">
                  Text "STORMY" to 53-555 to donate via SMS. Your support helps us maintain and improve our services!
                </p>
              </div>
            </div>
          </div><!-- End right column -->
        </div><!-- End donation-widgets -->

        <!-- Sponsors Section -->
        <div class="sponsor-section">
          <h2 class="line-short">Sponsors</h2>
          <div class="crypto-container">
            <div class="crypto-item">
               <img src="../assets/images/uptimerobot-logo.svg"  width="200"  alt="UptimeRobot Logo">
              <div class="crypto-address" tabindex="0">
                <a href="https://uptimerobot.com/" target="_blank" rel="noopener noreferrer">Visit Sponsor</a>
              </div>
            </div>
            <!-- Add additional sponsor items here as needed -->
          </div>
        </div>
      </div><!-- End inner -->
    </div><!-- End container -->

    <?php include '../footer.php'; ?>
  </body>
</html>