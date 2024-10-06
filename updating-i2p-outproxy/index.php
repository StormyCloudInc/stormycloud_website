<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>StormyCloud Inc - Updating I2P Outproxy Setttings</title>
  <link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/png">
  <link rel="canonical" href="https://stormycloud.org/updating-i2p-outproxy/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="StormyCloud Inc - Updating I2P Outproxy Settings" />
  <meta property="twitter:title" content="StormyCloud Inc - Updating I2P Outproxy Settings" />
  <meta property="twitter:description" content="Easily update your I2P Outproxy settings with the step-by-step guide from StormyCloud Inc. Protect your internet freedom and digital privacy." />
  <meta property="og:url" content="https://stormycloud.org/updating-i2p-outproxy" />
  <meta property="og:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta name="description" content="Easily update your I2P Outproxy settings with the step by step guide from StormyCloud Inc. Protect your internet freedom and digital privacy." />
  <style>
    .guides-page .code-section-dark {
      background: #10172b;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      color: #cfcfcf;
      font-family: Karla, Open Sans, Segoe UI, sans-serif;
      text-align: left;
      margin: 20px auto;
      overflow: auto;
      border-radius: 8px;
      padding: 15px;
    }

    .guides-page .code-section-dark pre {
      margin: 0;
      background-color: transparent;
      font-size: 0.8em;
      overflow: auto;
      padding: 0;
      white-space: pre-wrap;
      line-height: 1.5;
    }

    .guides-page .image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto;
      padding: 0;
    }

    .guides-page img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    .guides-page ul {
      list-style-position: outside;
      padding-left: 0px;
      text-align: left;
    }

    .center {
            text-align: center;
        }
        .address-container {
            display: inline-flex;
            align-items: center;
        }
        .long-address {
            display: block;
            font-size: 0.8em;
        }
  </style>
</head>

<body id="updatingoutproxy">
  <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner guides-page">
      <div class="page-title" style="background-image: url('../assets/images/updateoutproxy.webp');">
        <h1>Updating I2P Outproxy</h1>
      </div>
 <p>
  <h3>I2P/I2P+</h3>
<p>As of <a title="Enable StormyCloud OutProxy" target="_blank" href="https://geti2p.net/en/blog/post/2022/08/04/Enable-StormyCloud">August 2022</a> the I2P team made StormyCloud the default outproxy provider for I2P. The default outproxy provider for I2P+ is purokishi.i2p. However, if you need to update the outproxy information please follow the below steps. If you are connecting to a remote server you will want to follow our <a title="Create Ssh Tunnel" href="../create-ssh-tunnel">SSH Tunnel guide</a>.</p>
<p><b>Step 1 - </b>Connect to your router console - <a title="127.0.0.1:7657" href="127.0.0.1:7657">127.0.0.1:7657</a>
<div class="image-container">
        <img src="../assets/images/updateoutproxy_01.png" alt="Updating I2P Outproxy">
      </div><p>
<p><b>Step 2 - </b>Navigate to the <a title="Tunnelmanager" target="_blank" href="http://127.0.0.1:7657/tunnelmanager">Tunnel Manager</a>.
<div class="image-container">
        <img src="../assets/images/updateoutproxy_02.png" alt="Updating I2P Outproxy">
      </div><p>
<p><b>Step 3 - </b> Click on the <a title="Edit" target="_blank" href="http://127.0.0.1:7657/i2ptunnel/edit?tunnel=0">I2P HTTP Proxy</a>.
<p>
  <p><b> Step 4 - </b> Update both the Outproxies and SSL Outproxies with the information below and hit the Save button.
  <div class="code-section-dark">
<pre>
exit.stormycloud.i2p,purokishi.i2p
</pre>
</div>
  <div class="image-container">
        <img src="../assets/images/updateoutproxy_03.png" alt="Updating I2P Outproxy">
      </div><p>
<h3>I2PD</h3>
<p>To add an Outproxy for I2PD, you will need to update the i2pd.conf file. You can either use our simple one-line command to do this automatically or follow the instructions below.</p>
<div class="code-section-dark">
<pre>
curl -sSL https://stormycloud.org/scripts/i2pd.sh | bash
</pre>
</div>
<p><b>Step 1 - </b>We need to open the i2pd configuration file, we can do this in nano or vim.</p>
<div class="code-section-dark">
<pre>
nano /etc/i2pd/i2pd.conf
</pre>
</div>
<p><b>Step 2 - </b>Locate the block starting with [httpproxy].<p>
  <p>Add in the following line outproxy = http://exit.stormycloud.i2p</p>
  <p>If you do not have an http proxy block setup you can copy and paste this entire block below.</p>
  <div class="code-section-dark">
<pre>
[httpproxy]
port = 4444
outproxy = http://exit.stormycloud.i2p
</pre>
</div>
<p><b>Step 3 - </b>You will want to restart I2PD and that is all!</p>
<div class="code-section-dark">
<pre>
systemctl restart i2pd
</pre>
</div>
<p>
  <h3>Address Helper</h3>
<p class="center" id="outproxyinfo">
    <span class="address-container">
        <b>Address:</b> <span class="address">exit.stormycloud.i2p</span>
        <a id="helper" href="http://exit.stormycloud.i2p/?i2paddresshelper=Ms6qmq4ZpttjEZK8r7ev38BL8dyT~-ENUK~j74G-nN-WIN7-rUJWbbYAyagQOyerJ31Bf52vtJeXPVHGQdUnbOgBmNkN-Hoo6LkDle1Su7eKYlOrbE2RNihOCh-U0Yq7vDYDBnKI8ldE7s24RY4Nmk1ZlVq8nQwT~RrNf0nbBKBjgGKJkmsfBq6i0G6eZN9Cy2Ip6uGbG70jHzzyAqW9hLUxLArVZKNMAh-fzgGUQkj3llOMqJ5NQqZn2sMrcKkO~c2nn65KNYp2zAGUnbzz3y5M~BOBj9egGYzoakDpGTEpErNj8PiO3oDeKrlgsFFsfmfcMyTKrv82FhBiwxi-izX~P7vo7wcOqhmfic5jqgzY5J-8hEpg0LerjcrW0GjOzHra20GclknvtY5M9m9eUJnRDt43n5IwBrO6-C3VJJLvWvi1gabEP2wuKvAcgHcLn6vU1reqS7QwT~Y-bteoUEw1gZ-GCPkRhGKmr6d2NyxLzEEJispBLoCoTWKPZCHkBQAEAAcAAA==" target="_blank" title="Add this address to your I2P addressbook">
            <img src="../assets/images/helper.svg" width="24" alt="i2p address helper">
        </a>
    </span>
    <span class="long-address">5d4s7pcvfdpftfk7npc7hllyujhufsdprtrf4o53i44rgsa2xbwa.b32.i2p</span>
</p>




  </div>









  </div>
  <?php include '../footer.php'; ?>
</body>

</html>