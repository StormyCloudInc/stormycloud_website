<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stormycloud Inc | High-Performance I2P Outproxy Service</title>
  <link rel=stylesheet href=../assets/css/stormy.css type=text/css>
  <link rel=icon href=../assets/images/favicon.png type=image/png>
  <link rel="canonical" href="https://stormycloud.org/i2p-outproxy/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Stormycloud Inc | High-Performance I2P Outproxy Service" />
  <meta property="twitter:title" content="Stormycloud Inc | High-Performance I2P Outproxy Service" />
  <meta property="twitter:description" content="StormyCloud's I2P OutProxy allows privacy-focused users to access the open Internet securely, without logging destinations or traffic." />
  <meta property="og:url" content="https://stormycloud.org/i2p-outproxy" />
  <meta property="og:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:card" content="summary_large_image" />



  <meta name="description" content="StormyCloud's I2P OutProxy allows privacy-focused users to access the open Internet securely, without logging destinations or traffic." />
  <style>
    .styled-image {
      width: 100%; /* Adjust width as needed */
      max-width: 300px; /* Adjust max-width as needed */
    }
    .centeroutproxyimage {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
  </style>
</head>

<body id="outproxy">
    <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner">
      <div class="page-title" style="background-image: url('../assets/images/outproxy-title.webp');">
        <h1>I2P Outproxy Service</h1>
                      </div>  <p> 
                      <h2 class="line-short">What is an I2P Outproxy?</h2>
                      <p>An I2P Outproxy is a component of the I2P anonymity network that allows users to access the regular internet while maintaining their anonymity. It acts as a bridge between the encrypted I2P network and the open internet. When an I2P user wants to visit a website outside the I2P network, their request is routed through an Outproxy.</p>
                      <p>Our I2P Outproxy is designed for high performance, utilizing multiple backend servers to efficiently handle thousands of requests per second. It supports Tor .onion links, and routes DNS requests via our in-house stormycloud.org DNS servers.</p>
                      <p>For configuration information, see <a title="Updating I2P outproxy" href="../updating-i2p-outproxy">our guide</a> on updating your I2P outproxy.<p>
                      <img src="../assets/images/outproxy2.webp" alt="Outproxy Flow" class="centeroutproxyimage"> 
                            </p>
    </div>
  </div>
  <?php include '../footer.php'; ?>

</html>
