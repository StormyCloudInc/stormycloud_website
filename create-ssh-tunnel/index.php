<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SSH Tunnel Creation Guide - StormyCloud Inc</title>
  <link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/png">
  <link rel="canonical" href="https://stormycloud.org/create-ssh-tunnel/" />

  <meta name="description" content="Learn how to create an SSH Tunnel with the step-by-step guide from StormyCloud Inc, a non-profit organization dedicated to Internet freedom." />
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
      max-width: 80%;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    .guides-page ul {
      list-style-position: outside;
      padding-left: 0px;
      text-align: left;
    }
  </style>
</head>

<body id="createssh">
  <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner guides-page">
      <div class="page-title" style="background-image: url('../assets/images/sshtunnel.webp');">
        <h1>How to create an SSH Tunnel</h1>
      </div>
<h2>What is an SSH Tunnel?</h2>
<p>An SSH tunnel is a method of routing data and information securely over an encrypted SSH (Secure Shell) connection. Imagine it as a secure pipeline through the internet where data can travel safely, away from prying eyes. It's like sending a letter in a sealed, tamper-proof envelope instead of a postcard. SSH tunneling is often used to securely access remote systems, like a server, by creating this protected passageway for data transmission. The tunnel encrypts the data to keep it safe from interception, and only the intended recipient can decrypt and use it.</p>
<h3>Creating SSH Tunnel on Windows</h3>
<p>For those utilizing a Windows operating system, we suggest employing <a target="_blank" href="https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html">Putty</a>, a widely recognized tool, to manage your SSH sessions effectively.
<p><b>Step 1 - </b>Open Putty and enter the IP or Host Name for the remote server.</p>
<div class="image-container">
        <img src="../assets/images/sshtunnel_1.webp" alt="Create SSH Tunnel">
      </div><p>
<p><b>Step 2 - </b>Expand the SSH tab and click on Tunnels.</p>
<p>In the Source port is a local port we can select, this number can be anything from 1-65535 as long as its not being used by anything else.</p>
<p>In the Destination type in:
<div class="code-section-dark">
        <pre>127.0.0.1:7657</pre>
  </div>
  <ul>
    <li><b>127.0.0.1:</b> This is the IP for the localhost running on the remote server, this is also the destination we aim to reach via the SSH server.
    <li><b>7657</b> - This is the destination port, assigned to the I2P console.
  </ul>
    <div class="image-container">
        <img src="../assets/images/sshtunnel_2.webp" alt="Create SSH Tunnel">
      </div><p>
<p><b>Step 3 - </b>Click on Open and type in your username and password. If successful you will see the screen below.</p>
<div class="image-container">
        <img src="../assets/images/sshtunnel_3.webp" alt="Create SSH Tunnel">
      </div><p>

      <h3>Configuring SSH Tunnel on Linux</h3>
        <p><b> Step 1 - </b>To create an SSH tunnel on Linux open the terminal.</p>

        <div class="image-container">
        <img src="../assets/images/sshtunnel_4.webp" alt="Create SSH Tunnel">
      </div><p>
        <p><b>Step 2 - </b>Enter the following command into the terminal</p>
      <div class="code-section-dark">
        <pre>ssh -L 7657:127.0.0.1:7657 i2p@20.228.143.58</pre>
  </div>
<ul>
  <li><b>7657</b> - This is the local port we can select, this number can be anything from 1-65535 as long as its not being used by anything else.</li>
  <li><b>127.0.0.1</b>: This is the IP for the localhost running on the remote server, this is also the destination we aim to reach via the SSH server.</li>
  <li><b>7657</b> - This is the destination port, assigned to the I2P console.</li>
  <li><b>i2p</b> - This is the username used to log into the remote server. This should be different for everyone.</li>
  <li><b>20.228.143.58</b> - This is the IP of the remote server that I2P is installed on.</li>
  </ul>

<h3>Creating SSH Tunnel on Mac</h3>

<p><b> Step 1 - </b>To create an SSH tunnel on Mac open the terminal.</p>

<div class="image-container">
<img src="../assets/images/sshtunnel_5.webp" alt="Create SSH Tunnel">
</div><p>
<p><b>Step 2 - </b>Enter the following command into the terminal</p>
<div class="code-section-dark">
<pre>ssh -L 7657:127.0.0.1:7657 i2p@20.228.143.58</pre>
</div>
<ul>
<li><b>7657</b> - This is the local port we can select, this number can be anything from 1-65535 as long as its not being used by anything else.</li>
<li><b>127.0.0.1</b>: This is the IP for the localhost running on the remote server, this is also the destination we aim to reach via the SSH server.</li>
<li><b>7657</b> - This is the destination port, assigned to the I2P console.</li>
<li><b>i2p</b> - This is the username used to log into the remote server. This should be different for everyone.</li>
<li><b>20.228.143.58</b> - This is the IP of the remote server that I2P is installed on.</li>
</ul>



  </div>









  </div>
  <?php include '../footer.php'; ?>
</body>

</html>