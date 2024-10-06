<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>StormyCloud Inc - Install I2P Plus on Linux - Full Guide</title>
  <link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/png">
  <link rel="canonical" href="https://stormycloud.org/install-i2p/" />
  <meta property="og:url" content="https://stormycloud.org/install-i2p" />
  <meta property="og:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta name="description" content="Follow StormyCloud Inc's guide to easily install I2P plus on Linux. Protect your digital privacy and uphold Internet freedom with I2P installation." />
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

    #installlinux .image-container img {
      border-radius: 10px;
      box-shadow: 0 0 0 1px #111, 4px 4px 4px #0003;
} 
  </style>
</head>

<body id="installlinux">
  <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner guides-page">
      <div class="page-title" style="background-image: url('../assets/images/installi2p.webp');">
        <h1>Install I2P+ on Linux</h1>
      </div>
      <h2>Setting up Linux I2P+ Node</h2>

      <p>This guide provides step-by-step instructions for installing and configuring an I2P node on Debian-based systems. Although the commands mentioned here are specific to Debian, most Linux distributions support I2P.</p>
      <b>Requirements</b>
      <p>
      <ul>
        <li>Memory: By default, I2P only requires 128MB of memory. However, we recommend a minimum of 1GB and suggest 2GB for optimal performance.</li>
        <li>CPU: I2P has been tested and works on a wide range of systems, from single-board CPUs to enterprise-grade CPUs. The minimum requirement is 1 core, but we recommend at least 2 cores for better performance.</li>
        <li>For optimal performance and to effectively assist the I2P network, it is recommended to have a 24/7 internet connection.</li>
      </ul>
      <p><b>Step 1</b> - To ensure a smooth installation process, it is important to fetch the necessary prerequisites and update your server.</p>
      <div class="code-section-dark">
        <pre>sudo apt update && sudo apt upgrade -y && sudo apt install default-jdk wget -y</pre>
      </div>
      <div class="image-container">
        <img src="../assets/images/installi2p_1.png" alt="Installation of I2P">
      </div>
    <p><b>Step 2</b> - To maintain optimal security and system integrity, it is not recommended to run I2P as a root user. Therefore, we will be initiating a new user profile specifically to operate the I2P-router.</p>
    <div class="code-section-dark">
<pre>sudo adduser i2p && sudo usermod -aG sudo i2p</pre></div>
<div class="image-container">
        <img src="../assets/images/installi2p_2.png" alt="Installation of I2P">
      </div><p>
<p><b>Step 3</b> - Moving forward, let's transition to the recently created user profile and proceed with retrieving the necessary I2P software components.</p>
<div class="code-section-dark">
<pre>Note: At the time of writing this, 2.6.0 was the latest release, so our URLs in the examples reflect that. To check for the latest releases, view and amend the instructions as needed below.
https://i2pplus.github.io/</pre><p>
<pre>su i2p
mkdir /home/i2p/i2p
cd /home/i2p/i2p/
wget http://i2pplus.github.io/installers/i2pinstall_2.6.0+.exe</pre>
  </div>
  <div class="image-container">
        <img src="../assets/images/installi2p_3.png" alt="Installation of I2P">
      </div>

  <p><b>Step 4</b> - After download, execute the headless Java installer for a quick, terminal-based setup. If your language of choice is english you can leave all settings as default.</p>
  <div class="code-section-dark">
  <pre>java -jar i2pinstall_2.6.0+.exe -console</pre>
  </div><p>
  <div class="image-container">
        <img src="../assets/images/installi2p_4.png" alt="Installation of I2P">
      </div>
<p>
  <p><b>Step 5</b> - It's crucial to ensure that I2P initiates automatically upon server reboot, guaranteeing continuous functionality.</p>
  <div class="code-section-dark">
  <pre>sudo echo '/bin/su i2p -c "/home/i2p/i2p/i2prouter start"' | sudo tee -a /etc/rc.local && sudo chmod +x /etc/rc.local</pre>
  </div>
  <div class="image-container">
        <img src="../assets/images/installi2p_5.png" alt="Installation of I2P">
      </div><p>
  
  <p><b>Step 6</b> - We need to start I2P.</p>
  <div class="code-section-dark">
<pre>./i2prouter start</pre>
  </div>

  <div class="image-container">
        <img src="../assets/images/installi2p_6.png" alt="Installation of I2P">
      </div>
<p>
<p>The next step will depend on your system configuration. If you have a desktop environment installation please skip to Post Installation Instructions. If your server is remote please skip to <a title="Create Ssh Tunnel" href="../create-ssh-tunnel">How to create SSH Tunnel</a>.</p>

<p><b>Step 7</b> - Congratulations you have successfully configured an I2P node. New nodes can take some time to integrate with the network. So not all I2P websites & application will work straight away and can take some time for the router to be intergrated into the I2P Network. Learn more about accessing the <a title="Accessing I2p" href="../accessing-i2p">I2P Network & Applications.</a></p>


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

<div class="code-section-dark">
        <pre>Your contribution to the network (network share) is determined by the allocation of upstream bandwidth (upload speed).  The maximum data transfer values indicate the theoretical maximum, and in practice will normally be much lower.
</pre>
      </div>
<h4>Opening Firewall</h4>

<p>While I2P will work fine behind most firewalls, your speeds and network integration will generally improve if the I2P port is forwarded for both UDP and TCP. </p>
<p>We are unable to write a step by step guide to opening ports on a firewall as there are hundreds of different models each having their own settings. What we can do is provide some helpful links and guides to help accomplish this task.</p>
  <p>You can visit <a title="portforward" target="_blank" href="https://portforward.com/router.htm">PortForward.com</a> to get instructions for your specific router model.</p>


<p>By default I2P+ picks a random port, visit your <a title="I2P Router Console Network" target="_blank" href="https://127.0.0.1:7667/confignet">Router Console Network Configuration</a> page. You will see your UDP & TCP port which you will need to forward.</p>
<div class="image-container">
        <img src="../assets/images/postconfig_08.png" alt="Installation of I2P+ on Windows">
      </div><p>








  </div>









  </div>
  <?php include '../footer.php'; ?>
</body>

</html>