<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>I2P Reseed Server Setup Guide - StormyCloud Inc</title>
  <link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/png">
  <link rel="canonical" href="https://stormycloud.org/creating-and-running-reseed-server/" />

  <meta name="description" content="Learn how to set up an I2P Reseed Server with our easy-to-follow guide from StormyCloud Inc. Protect Internet freedom and digital privacy." />
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
  </style>
</head>

<body id="donate">
  <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner guides-page">
      <div class="page-title" style="background-image: url('../assets/images/installi2p.webp');">
        <h1>Creating & Running I2P Reseed Server</h1>
      </div>
      <h2>What is an I2P Reseed Server?</h2>
<p>Reseed hosts play a crucial role in integrating new routers into the I2P network. When a new router is set up, it requires an initial group of nodes to establish connections. Reseed hosts facilitate this by providing a starting list of nodes during the router's bootstrapping process. Moreover, existing routers occasionally need to undergo reseeding, particularly when they face difficulties connecting to the network, often due to their current known nodes being inaccessible.
  </p>
  <p>The reseeding process is securely conducted over an encrypted connection, ensuring the integrity and authenticity of the bootstrap information. Each piece of information received during reseeding is digitally signed by the reseed host. This security measure effectively prevents any unauthorized sources from disseminating false or malicious data, thereby maintaining the network's reliability and security.</p>
<h4>Preparing the Server</h4>
<p><b>Step 1 - </b>We want to update the server and install the required packages to install and run the reseed server.</p>
<div class="code-section-dark">
<pre>sudo apt update && sudo apt upgrade -y && sudo apt-get install golang-go git make docker.io docker-compose -y</pre>
  </div>
<p><b>Step 2 - </b>We need to pull the reseed-tools repo created by idk. Note: Change the home directory to where i2p is installed. For example if you followed our guide you will want to change the command to read "cd /home/i2p/".</p>
<div class="code-section-dark">
<pre>cd /home/i2p
git clone https://i2pgit.org/idk/reseed-tools
cd reseed-tools
make build
sudo make install
</pre>
  </div>
  <div class="image-container">
        <img src="../assets/images/reseed_01.png" alt="Installation of I2P Reseed">
      </div><p>
        <p><b>Note:</b> This "install" invalid user 'i2psvc' is expected. We will run this reseed service as the same user as the I2P router.
  </p>
<p><b> Step 3 - </b>We will want to change two values for better performance and to run a better reseed server. We will change the number of routerInfos included in each su3 file. This will allow us provide more routerInfo than the default of 77. We will change the number of su3 files that are built.
  </p>
  <div class="code-section-dark">
<pre>sed -i '/Value: 77/{s/77/100/;:a;n;ba}' cmd/reseed.go
sed -i '0,/Value: 50/{//s/50/4/}' cmd/reseed.go
sed -i 's/NumRi: 77/NumRi: 100/' reseed/service.go
make build</pre>
  </div>
  <div class="image-container">
        <img src="../assets/images/reseed_02.png" alt="Installation of I2P Reseed">
      </div><p>

<p><b>Step 4 - </b>Now we will need to generate an SSL certificate for the reseed server. Use the following command and make changes that suite your environment. Run the command, select yes to generate the keys, and then cancel the script with CRTL +C.</p>
<p>i2p - This is the user that you installed the I2P router & reseed server.</p>
<p>--signer=admin@stormycloud.org - Change this to your email address, this could be clearnet or an I2P email.</p>
<p>--netdb=/home/i2p/.i2p/netDb - This should be your I2P Router netDb file.</p>
<p>--port 8443 - This is the port the reseed server lives on. This can be left default or changed to anything that works for your environment.</p>
<div class="code-section-dark">
<pre>su - i2p -c 'reseed-tools reseed --signer=admin@stormycloud.org --netdb=/home/i2p/.i2p/netDb --port=8443 --ip=127.0.0.1 --trustProxy'
</pre>
  </div>
  <div class="image-container">
        <img src="../assets/images/reseed_03.png" alt="Installation of I2P Reseed">
      </div><p>

<p><b>Step 5 - </b>Ensure to securely back up the generated keys for server restoration or expansion. Store them in a safe, encrypted location with limited access.</p>
<p>
  <p><b>Step 6 - </b>Next we will create a system service so this can service can run without the use of scripts. You will want to change the service variables that match your environment. These will be the same as in step 4.</p>
  <div class="code-section-dark">
<pre>
sudo tee /etc/systemd/system/reseed.service &lt;&lt;EOF
[Unit]
Description=Reseed Service
After=network.target

[Service]
User=i2p
WorkingDirectory=/home/i2p
# Environment=VARIABLE_NAME=value
ExecStart=/bin/bash -c 'reseed-tools reseed --signer=admin@stormycloud.org --netdb=/home/i2p/.i2p/netDb --port=8443 --ip=127.0.0.1 --trustProxy'
Restart=always
RestartSec=10

[Install]
WantedBy=multi-user.target
EOF

sudo systemctl daemon-reload
sudo systemctl enable reseed
sudo systemctl start reseed
</pre>
</div>
<p><b>Step 7 - </b>Now the reseed service will be running, you can verify this by running the following command.</p>
<div class="code-section-dark">
<pre>systemctl status reseed.service
</pre>
  </div>
  <div class="image-container">
        <img src="../assets/images/reseed_04.png" alt="Installation of I2P Reseed">
      </div><p>

  <p><b>STep 8 - </b>This step is optional, but I dont like offering older su3 files so we have a crontab job to restart the reseed server every 3 hours.</p>
  <div class="code-section-dark">
<pre>echo "0 */3 * * * systemctl restart reseed" | crontab -
</pre>
  </div>

<h4>Setting up a reverse proxy</h4>
<p>A reverse proxy is a server that sits between users and web servers. When users send requests (like loading a webpage), the reverse proxy takes these requests and sends them to the appropriate web server. It's like a middleman that handles incoming traffic to help improve performance and security and manage traffic flow to different servers.</p>

<p><b>Step 1 - </b> We recommend using <a target="_blank" href="https://nginxproxymanager.com/">Nginix Proxy Manager</a> it allows for easy management of hosts and SSL certificates. We will deploy this using docker.
<div class="code-section-dark">
<pre>
docker run -d \
  --name nginx-proxy-manager \
  -p 80:80 \
  -p 81:81 \
  -p 443:443 \
  -v $(pwd)/data:/data \
  -v $(pwd)/letsencrypt:/etc/letsencrypt \
  --restart unless-stopped \
  jc21/nginx-proxy-manager:latest
</pre>
</div>
<p><b>Step 2 - </b>Visit your server over port 81 (eg 23.128.248.250:81) you might need to disable your firewall temporarily to allow you to visit this link. Log into the admin panel and change the default username and password.</p>
<div class="code-section-dark">
<pre>
Default Admin User
Email:    admin@example.com
Password: changeme
</pre>
</div>
<div class="image-container">
        <img src="../assets/images/reseed_05.png" alt="Installation of I2P Reseed">
      </div><p>
<p><b>Step 3 - </b> To add the reseed service click on Hosts > Proxy Host > Add Proxy Host.
<div class="image-container">
        <img src="../assets/images/reseed_06.png" alt="Installation of I2P Reseed">
      </div><p>
<p><b> Step 4 - </b> Add the information for the reseed server. Use the below example as a guide to match your environment.</p>
<div class="image-container">
        <img src="../assets/images/reseed_07.png" alt="Installation of I2P Reseed">
      </div><p>
<p><b>Step 5 - </b>Click on the SSL tab. Select the Request a new SSL certificate. Enter your email address and agree to the terms. After that you can select Save.</p>
<div class="image-container">
        <img src="../assets/images/reseed_08.png" alt="Installation of I2P Reseed">
      </div><p>
<p><b> Step 6 - </b>If everything was successful if you browse the domain you entered the following screen should appear.</b>
<div class="image-container">
        <img src="../assets/images/reseed_09.png" alt="Installation of I2P Reseed">
      </div><p>
<p>You will want to re-enable your firewall but allow port 80 (HTTP) & 443 (HTTPS) to be accessible.</p>
<p><b>Step 7 - </b> Now you will want to send an email to zzz@mail.i2p (I2P) or zzz@i2pmail.org (Clearnet) with the following information.</p>
<div class="code-section-dark">
<pre>
Reseed website URL
Public reseed su3 certificate
Your contact email
</pre>
</div>
  </div>
  </div>
  <?php include '../footer.php'; ?>
</body>

</html>