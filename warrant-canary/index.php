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

StormyCloud Inc, April 2025

StormyCloud Inc has not produced any information in response to a secret subpoena, such as one served under 18 U.S.C. Section 2709(c) of the U.S. Patriot Act, and has not built "backdoors" for any government into our products. All government requests for user data need to come through the front door (i.e., by serving valid legal process upon StormyCloud).

-----BEGIN PGP MESSAGE-----

owFdkT1oFFEQx/eSaM4VRQxcI8oYLBI41suFoAc2Z2y0MeQICH7A27dzu6u7b+7e
x+FhJQQRRTGQRhQsJESQQAolvZVFbGy0sLEQtLIQi2vUucVIsBvm4z+/+c+jA6Ne
uTIYvS8u3Dt8q7RRWg3352iMiDGwN2389cmJliWd9+czchGcV7IKzY5OM6jX6nO+
/18REmFAkYWOpshJjECoPqSqzV3CpqQ4Bo2mQ8ogWAIBBqVGC8aFHUIlqhzJBFiG
FHJR91jEqQg1zJyGpaAVzAfQQlmI1U/VGlNyGqgNNsGiCgvC6pQJmtJWeXv0Dyl0
aWZhMhTyRkSkzSQwVcEXUw+1ylFZxmMocvrvAdYE0Myy3R0auw6NNcW0Y0CIhBWg
kDl5VlLOhyWaXJwUUG1NPDXcCFNpgEEVwn5xV6pi6IksjSDDWGTDjZKdB8fmwC5f
pwP/rhvzKmXvaOX42Oy7xdVr243b4Suo7bxtz8jwT56/79BOBn+WvC93ni4//9x+
dv1lnF+6fOXDxNLrM0c+ff9RXn5/bOXtrwXv98XxRX/z6oOz5wZu5k0Dtg5+3D75
cPBt/UV3ZGVr7fHePw==
=0eQ3
-----END PGP MESSAGE-----

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
