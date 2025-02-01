<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>StormyCloud Inc Warrant Canary & Transparency Report</title>
  <link rel=stylesheet href=../assets/css/stormy.css type=text/css>
  <link rel=icon href=../assets/images/favicon.png type=image/png>
  <link rel="canonical" href="https://stormycloud.org/warrant-canary/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="StormyCloud Inc Warrant Canary & Transparency Report" />
  <meta property="twitter:title" content="StormyCloud Inc Warrant Canary & Transparency Report" />
  <meta property="twitter:description" content="StormyCloud Inc operates with transparency. Check our warrant canary to ensure no secret orders have been issued, defending your digital freedoms." />
  <meta property="og:url" content="https://stormycloud.org/warrant-canary" />
  <meta property="og:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta name="description" content="StormyCloud Inc operates with transparency. Check our warrant canary to ensure no secret orders have been issued, defending your digital freedoms." />

</head>

<body id="canary">
<?php include '../navbar.php'; ?>

  <div class="container">
    <div class="inner">
      <div class="page-title" style="background-image: url('../assets/images/warrant-title.webp');">
        <h1>Warrant Canary</h1>
      </div>   
      <h2>Warrant Canary</h2>
      <p class="mission"> A signed warrant canary will be published quarterly (January, April, July, and October) to ensure that StormyCloud has not been compromised by any third-party using a subpoena. You can download the <a title="Message.txt.asc" href="message.txt.asc">warrant</a> and the <a title="Public.asc" href="public.asc">PGP key</a>.</p>
      <div class="code-section-dark">
  <pre>
Hash: SHA256

StormyCloud Inc, August 2025

StormyCloud Inc has not produced any information in response to a secret subpoena, such as one served under 18 U.S.C. Section 2709(c) of the U.S. Patriot Act, and has not built "backdoors" for any government into our products. All government requests for user data need to come through the front door (i.e., by serving valid legal process upon StormyCloud).
-----BEGIN PGP SIGNATURE-----

iHUEARYIAB0WIQRHv6RMhvlUPNzkuZWLRD9vEHc9FAUCZ52DlwAKCRCLRD9vEHc9
FEDBAP9qysemt2sstjvXLJ49XT9gR/6kWBsuPIX6KjVaZUcx6AD+OEYxfNJwYPca
iUNEtfusSG4HeMq5crivEWbwTwxvWAQ=
=Njn4
-----END PGP SIGNATURE-----

  </pre>
</div>
    <h3>How to verify the warrant canary?</h3>
    <div class="code-section-dark">
    <pre>
wget -q http://www.stormycloud.org/warrant-canary/message.txt.asc -O message.txt.asc && wget -q http://www.stormycloud.org/warrant-canary/public.asc -O public.asc && gpg --import public.asc && gpg --verify message.txt.asc</pre>

  </div>
    </div>
  </div>
  <?php include '../footer.php'; ?>
</body>

</html>
