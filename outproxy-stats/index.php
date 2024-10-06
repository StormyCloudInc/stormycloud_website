<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stormycloud Inc | I2P Outproxy Statistics and Network Analytics</title>
  <link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
  <link rel="icon" href="../assets/images/favicon.png" type="image/png">
  <link rel="canonical" href="https://stormycloud.org/outproxy-stats/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Stormycloud Inc | I2P Outproxy Statistics and Network Analytics" />
  <meta property="twitter:title" content="Stormycloud Inc | I2P Outproxy Statistics and Network Analytics" />
  <meta property="twitter:description" content="Monitor StormyCloud's I2P Outproxy with Grafana dashboards. View real-time traffic and error rates to support a robust anonymity network." />
  <meta property="og:url" content="https://stormycloud.org/outproxy-stats" />
  <meta property="og:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:image" content="https://stormycloud.org/assets/images/stormycloud.svg" />
  <meta property="twitter:card" content="summary_large_image" />
  <meta name="description" content="Monitor StormyCloud's I2P Outproxy with Grafana dashboards. View real-time traffic and error rates to support a robust anonymity network." />
</head>
<body id="outproxystats">
  <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner">
      <div class="page-title" style="background-image: url('../assets/images/outproxy-title.webp');">
        <h1>I2P Outproxy Stats</h1>
      </div>
      <center><h2 class="line-short">OutProxy HTTP Request Statistic's</h2>  </center>
      <div class="stats-container">
        <div class="stats-row">
          <div class="stats-item">
            <iframe src="https://grafana.stormycloud.org/d-solo/edfyywsj9k934a/test?orgId=1&panelId=1" frameborder="0"></iframe>
          </div>
          <div class="stats-item">
            <iframe src="https://grafana.stormycloud.org/d-solo/aduy3m9bglm9sa/24hr-dashboard?orgId=1&panelId=5" frameborder="0"></iframe>
          </div>
          <div class="stats-item">

           <iframe src="https://grafana.stormycloud.org/d-solo/dduy4v61g81z4e/this-month?orgId=1&panelId=1" frameborder="0"></iframe> 
          </div>
        </div>
  <!-- Second Row: 2x1 Grid -->
  <h2 class="line-short">OutProxy Network Statistic's</h2>  

  <div class="stats-row">
    <div class="stats-item">
      <iframe src="https://grafana.stormycloud.org/d-solo/aduy3m9bglm9sa/24hr-dashboard?orgId=1&panelId=2" frameborder="0"></iframe>
    </div>
    <div class="stats-item">
      <iframe src="https://grafana.stormycloud.org/d-solo/aduy3m9bglm9sa/24hr-dashboard?orgId=1&panelId=1"  frameborder="0"></iframe>
    </div>
  </div>
</div>
  </div>
  <?php include '../footer.php'; ?>
</body>
</html>