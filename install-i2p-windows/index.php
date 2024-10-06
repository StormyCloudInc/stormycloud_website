<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>StormyCloud Inc - Install I2P Plus on Windows- Full Guide</title>
  <link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/png">
  <link rel="canonical" href="https://stormycloud.org/install-i2p-windows/" />
  <meta property="og:url" content="https://stormycloud.org/install-i2p-windows/" />
  <meta property="og:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta name="description" content="Follow StormyCloud Inc's guide to easily install I2P plus on Windows. Protect your digital privacy and uphold Internet freedom with I2P installation." />
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
      max-width: 85%;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    .guides-page ul {
      list-style-position: outside;
      padding-left: 0px;
      text-align: left;
    }

    #installwindows .image-container img {
      border-radius: 10px;
      box-shadow: 0 0 0 1px #111, 4px 4px 4px #0003;
} 
  </style>
</head>

<body id="installwindows">
  <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner guides-page">
      <div class="page-title" style="background-image: url('../assets/images/installi2p.webp');">
        <h1>Install I2P+ on Windows</h1>
      </div>
      <h2>Setting up Windows I2P+ Node</h2>

      <p>This guide provides step-by-step instructions for installing and configuring an I2P node on Windows.</p>
      <b>Requirements</b>
      <p>
      <ul>
        <li>Java (JRE)</li>
        <li>For optimal performance and to effectively assist the I2P network, it is recommended to have a 24/7 internet connection.</li>
      </ul>
     <p><b>Step 1</b> - We will need to install Java (JRE); if you already have this installed, step to skip 2. Java can be downloaded from <a title="Java Download" target="_blank" href="https://www.java.com/en/download/manual.jsp">java.com</a></p>
      <p><b>Step 2</b> - To start we need to download the I2P+ package. We are able to download the installation directly from the <a title="I2P+ Download" target="_blank" href="https://i2pplus.github.io/installers/i2pinstall_2.6.0+.exe"> I2P+ Github Repo </a>. </p>
<div class="code-section-dark">
<pre>Note: At the time of writing this, 2.6.0 was the latest release, so our URLs in the examples reflect that. To check for the latest releases, view and amend the instructions as needed below.
https://i2pplus.github.io/</pre>
  </div>

  <p><b>Step 3</b> - Launch the installer package as Administrator and accept the Windows UNC Prompts. If you have Windows defender running you will also need to allow the application through their smart screen tool.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_01.png" alt="Installation of I2P+ on Windows">
      </div><p>
<p>
  <p><b>Step 3</b> - Click on Next.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_02.png" alt="Installation of I2P+ on Windows">
      </div><p>
<p>
  <p><b>Step 4</b> - These options can not be changed just click on Next.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_03.png" alt="Installation of I2P+ on Windows">
      </div><p>
      <p><b>Step 5</b> - You can leave the default installation path alone or modify as required. Click on Next when a location as been selected.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_04.png" alt="Installation of I2P+ on Windows">
      </div><p>
      <p><b>Step 6</b> - You will be prompted to create the I2P installation folder.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_05.png" alt="Installation of I2P+ on Windows">
      </div><p>
      <p><b>Step 7</b> - Unless you need to install I2P+ for only a certain user the default selections can be left and you can click on Next.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_06.png" alt="Installation of I2P+ on Windows">
      </div><p>
      <p><b>Step 8</b> - When the installation is finished you can click on Next which will close out the installation package.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_07.png" alt="Installation of I2P+ on Windows">
      </div><p>
      <p><b>Step 9a</b> - I2P+ Starts automatically, but if it does not you can start I2P+ either through the Application List or through the Windows Services Panel.</p>
  <div class="image-container">
        <img src="../assets/images/wininstall_08.png" alt="Installation of I2P+ on Windows">
      </div><p>
      <p><b>Step 9b</b> - To Launch the Windows Services Panel, Hold the Windows Key and Hit R at the same time. In the run box type in <b>services.msc</b> and hit Okay.</p>
      <p>You will want to find "I2P+ Anonymizing Network" and ensure that it is <b>Running</b>.</p>
      <div class="image-container">
        <img src="../assets/images/wininstall_09.png" alt="Installation of I2P+ on Windows">
      </div><p>
      <p><b>Step 10</b> - To Launch the I2P+ Router Console you can either us the Application List or open a browser and navigate directly to <a title="I2P Router Console" target="_blank" href="http://127.0.0.1:7657/">http://127.0.0.1:7657</a></p>
  <div class="image-container">
        <img src="../assets/images/wininstall_10.png" alt="Installation of I2P+ on Windows">
      </div><p>

<p>Congratulations you have successfully configured an I2P node. New nodes can take some time to integrate with the network. So not all I2P websites & application will work straight away and can take some time for the router to be intergrated into the I2P Network. Learn more about accessing the <a title="Accessing I2p" href="../accessing-i2p">I2P Network & Applications.</a></p>

<h3>
  Post-Install Configuration (optional)</h3>
<p> While the default I2P+ will work with no changes, there are several modifications that we can make to improve the experience and performance.<p>
  <h4>Enabling automatic updates</h4>
<p><b>Step 1.-</b> Navigate to the <a title="Router Consoles Update Page" target="_blank" href="https://127.0.0.1:7667/configupdate">Router Console Update Page</a>
     </p>
     <p><b>Step 2 - </b> Change the <b>Update policy</b> to Download,verify, and restart, then click on Save.
     <div class="image-container">
        <img src="../assets/images/postconfig_01.png" alt="Installation of I2P+ on Windows">
      </div><p>
<p><b>Step 3 - </b> To reload the settings, you will need to restart your router. Click on the restart symbol in the bottom left.
<div class="image-container">
        <img src="../assets/images/postconfig_02.png" alt="Installation of I2P+ on Windows">
      </div><p>

  <h4>Confuring Bandwidth Settings</h4>
<p>I2P+ will work best if you configure your rates to match the speed of your internet connection. .</p>
<p><b>Step 1.-</b> Navigate to the <a title="Router Console Config" target="_blank" href="https://127.0.0.1:7667/config">Router Console Bandwidth Configuration</a>
     </p>
     <div class="image-container">
        <img src="../assets/images/postconfig_03.png" alt="Installation of I2P+ on Windows">
      </div><p>
<p><b>Step 2 -</b> After entering your Download, Upload, and Network share percentage hit the <b>Save Changes</b> button.

<p> The rest of the wizard can be skipped by either clicking Skip Setup or closing out of the browser tab.</p>
<div class="code-section-dark">
        <pre>Your contribution to the network (network share) is determined by the allocation of upstream bandwidth (upload speed).  The maximum data transfer values indicate the theoretical maximum, and in practice will normally be much lower.
</pre>
      </div>
<h4>Opening Firewall</h4>

<p>While I2P will work fine behind most firewalls, your speeds and network integration will generally improve if the I2P port is forwarded for both UDP and TCP. </p>
<p>We are unable to write a step by step guide to opening ports on a firewall as there are hundreds of different models each having their own settings. What we can do is provide some helpful links and guides to help accomplish this task.</p>
  <p>You can visit <a title="portforward" target="_blank" href="https://portforward.com/router.htm">PortForward.com</a> to get instructions for your specific router model.</p>


    <p><b>Allow Java through Windows Firewall</b></p>
  <p>Open PowerShell as Administrator and run the command below.</p>
  <div class="code-section-dark">
        <pre>$javaPath = (Get-Command java.exe -ErrorAction SilentlyContinue | Select-Object -ExpandProperty Source); if ($javaPath) { New-NetFirewallRule -Program $javaPath -Action Allow -Profile Domain,Private,Public -DisplayName "Allow Java" } else { Write-Output "java.exe not found in PATH." }
</pre>
      </div>
<p>By default I2P+ picks a random port, visit your <a title="I2P Router Console Network" target="_blank" href="https://127.0.0.1:7667/confignet">Router Console Network Configuration</a> page. You will see your UDP & TCP port which you will need to forward.</p>
<div class="image-container">
        <img src="../assets/images/postconfig_08.png" alt="Installation of I2P+ on Windows">
      </div><p>





  </div>
  <?php include '../footer.php'; ?>
</body>

</html>