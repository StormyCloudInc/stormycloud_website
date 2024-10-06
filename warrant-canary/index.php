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

StormyCloud Inc, August 2024

StormyCloud Inc has not produced any information in response to a secret subpoena, such as one served under 18 U.S.C. Section 2709(c) of the U.S. Patriot Act, and has not built "backdoors" for any government into our products. All government requests for user data need to come through the front door (i.e., by serving valid legal process upon StormyCloud).
-----BEGIN PGP SIGNATURE-----

iQIzBAEBCAAdFiEENehpkhDIO3JiMOmBEPn6HDBfk8cFAma7lF4ACgkQEPn6HDBf
k8dwOg/6Aw3MrNbyV5m+oubbE6AJI0z9q8H9HCzEQHMCyStWLY7NR9nfwDCeETIn
7atYBhWTs4sFhcoOcmNAw4Qkb+aYvSd5mx5O8LP54nfdP6LPEjXCWD4vY7d9qUxu
/IGj+NyC6S2Q1SyIECPpXmYayND/cGfJcSMCTyMpZy9Cs9hh3eeLPue4bnc20e7p
9rgoO1J7Cvkq9PdSL10heZJ5V+HIIYf3Z3aITOHZfz3UWYK1jcIRx01LOqlNDPXa
lGeB68F7p0ZPLisL6nSlddqvv+qHax7YikrbjMiKF9G1Vw9QqbplP83AXpnLixR6
Nv2OeCeDCmW+Yr0jA5TZkGCz0G8TVsf2VllmDMxc1ScItB3WTH8eHXaTC2sfF/QV
0jZaJ5E9E9ZsxixiBlEXU5yQyOmJnNkVQo8KNhO1U/Wmjya9s7lKYi6tjHDeUrc4
9Qj9PEoV1jkdVN4Uhgpv8EeVPByEAk0p0Ylf7grCsh+UpXxQHOe5g2af+ES9E6am
V4ztJj3AvtEjmzolF73Ac8I9kTkjVinifYbcm1AkE5I+NivtgElYCiiB32eIbgob
2+U6h11y++BD5zXCq48M+eS5dCMe5/FfbPyH9oX8lLBv0q/mcM+3Llg2aW2RhSxy
nxTINKeP4BmX/jfuNi1BxtOQM4YHfWSW+BA5o0Y0vY+jwmEWbog=
=QtR+
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
