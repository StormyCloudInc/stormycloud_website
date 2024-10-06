<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>ADS-B Flight Tracking | Real-Time Aviation Data</title>

<link rel="stylesheet" href="../assets/css/stormy.css" type="text/css">
<link rel="icon" href="../assets/images/favicon.png" type="image/png">
<link rel="canonical" href="https://stormycloud.org/adsb/">

<meta name="description" content="Track flights worldwide with StormyCloud's ADS-B network. Learn about ADS-B technology and equipment. Join us in promoting aviation transparency.">
<meta name="keywords" content="ADS-B, flight tracking, aviation data, StormyCloud, real-time tracking, aviation transparency, ADS-B technology">
<meta name="robots" content="index, follow">

<meta property="og:type" content="website">
<meta property="og:title" content="ADS-B Flight Tracking | Real-Time Aviation Data">
<meta property="og:description" content="Track flights worldwide with StormyCloud's ADS-B network. Learn about ADS-B technology and equipment. Join us in promoting aviation transparency.">
<meta property="og:url" content="https://stormycloud.org/adsb/">
<meta property="og:image" content="https://stormycloud.org/assets/images/stormycloud.svg">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="ADS-B Flight Tracking | Real-Time Aviation Data">
<meta property="twitter:description" content="Track thousands of flights daily with StormyCloud's global ADS-B network. Learn more about ADS-B and our equipment list.">
<meta property="twitter:image" content="https://stormycloud.org/assets/images/stormycloud.svg">
  <style>
    .equipment-section {
      margin: 20px 0;
      text-align: center;
    }

    .equipment-section h2 {
      font-size: 1.8em;
      margin-bottom: 20px;
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .equipment-wrapper {
      display: grid;
      grid-template-columns: repeat(5, 1fr); /* Fixed number of columns */
      gap: 10px;
      padding: 0 10px;
    }

    .equipment-item {
  background-color: #2b3f88;
  border-radius: 8px;
  box-shadow: 0 0 0 1px #090f1f, inset 0 0 0 1px #28428a, inset 0 0 3px 3px rgba(0, 0, 0, 0.3);
  padding: 10px; /* Reduced padding */
  text-align: center;
  color: white;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  font-size: 0.85em; /* Smaller font size */
}


    .equipment-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
    }

    .equipment-item a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  display: block;
  font-size: 0.85em; /* Smaller font size */
}

    @media (max-width: 768px) {
      .equipment-wrapper {
        grid-template-columns: repeat(2, 1fr); /* Adjust for smaller screens */
      }
    }

    @media (max-width: 480px) {
      .equipment-wrapper {
        grid-template-columns: 1fr; /* Single column for very small screens */
      }
    }
  </style>



</head>

<body id="adsb">
    <?php include '../navbar.php'; ?>
  <div class="container">
    <div class="inner">
      <div class="page-title" style="background-image: url('../assets/images/adsb_title.webp');">
        <h1>ADS-B Tracking</h1>
                      </div>  
                      <h2>What is ADS-B?</h2>
                      <p align="center"> ADS-B, or Automatic Dependent Surveillance-Broadcast, is a modern aviation technology that revolutionizes flight tracking by providing real-time, accurate data on aircraft positions, altitude, velocity, and other flight-related information.
By publishing ADS-B data on popular tracking websites, StormyCloud promotes transparency and enables users to stay informed about aircraft movements in their area. Our commitment to the ADS-B ecosystem contributes to a safer, more efficient, and transparent airspace for everyone.   </p>
                    

<h2 class="line-short"> StormyCloud ADS-B Location's</h2>
                      

<div class="image-text-container">
      <img src="../assets/images/ft-ky.webp" alt="Thumbnail" class="thumbnail" width=150px>
      <div class="text">
       <div> <h3>STORMY-KY </div>
  <div>Hodgenville, KY </h3></div>
  <div>Status: Offline</div>
        <a href="https://grafana.stormycloud.org/d/fdgu8e1spuoe8a/stormy-ky?orgId=1&refresh=5m" class="grafana-link-btn" target="_blank">View Dashboard</a>
      </div>

<div class="image-text-container">
      <img src="../assets/images/ft-hou.webp" alt="Thumbnail" class="thumbnail" width=150px>
      <div class="text">
        <div><h3>STORMY-HOU</div>
          <div> Houston, TX </h3></div>
          <div>State: Offline </div>
        <a href="https://grafana.stormycloud.org/d/ultrafeeder/stormy-hou?orgId=1&refresh=5m" class="grafana-link-btn" target="_blank">View Dashboard</a>
      </div>
  </div>

  </div>

                      <h2 class="line-short"> ADS-B Platform's</h2>
                      <table id="projects">
        <tr>
          <td>
            <a href="https://flightaware.com" target="_blank">
              <img src="../assets/images/FA.svg" width=80 alt='Flight Aware Logo'>
              <span class="label">FlightAware</span>
            </a>
          </td>
          <td>
            <a href="https://planewatch.com" target="_blank">
              <img src="../assets/images/planewatch.png" width=80 alt='PlaneWatch Logo'>
              <span class="label">Plane.Watch</span>
            </a>
          </td>
          <td>
            <a href="https://flightradar24.com" target="_blank">
              <img src="../assets/images/FR24.png" width=80 alt='FlightRadar24 Logo'>
              <span class="label">FlightRadar 24</span>
            </a>
          </td>
          <td>
            <a href="https://radarbox.com" target="_blank">
              <img src="../assets/images/RB.png" width=80 alt='RadarBox Logo'>
              <span class="label">RadarBox</span>
            </a>
          </td>
          <td>
            <a href="https://adsbhub.org" target="_blank">
              <img src="../assets/images/adsbhub.png" width=80 alt='ADSBHub Logo'>
              <span class="label">ADSBHub</span>
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <a href="https://adsb.fi" target="_blank">
              <img src="../assets/images/adsbfi.png" width=80 alt='ADSB-FI Logo'>
              <span class="label">adsb.fi</span>
            </a>
          </td>
          <td>
            <a href="https://adsbexchange.com" target="_blank">
              <img src="../assets/images/adsbx.png" width=80 alt='ADSX Logo'>
              <span class="label">ADSB Exchange</span>
            </a>
          </td>
          <td>
            <a href="https://theairtraffic.com" target="_blank">
              <img src="../assets/images/theairtraffic.png" width=80 alt='The Air Traffic Logo'>
              <span class="label">TheAirTraffic</span>
            </a>
          </td>
          <td>
            <a href="https://radarplane.com" target="_blank">
              <img src="../assets/images/radarplane.png" width=80 alt='Radar Plane Logo'>
              <span class="label">RadarPlane</span>
            </a>
          </td>
          <td>
            <a href="https://flyitalyadsb.com" target="_blank">
              <img src="../assets/images/flyitalyadsb.png" width=80 alt='Flight Italy Logo'>
              <span class="label">Fly Italy Adsb</span>
            </a>
          </td>
        </tr>
      </table>
    
<p>
<h2 class="line-short"> ADS-B Equipment List</h2>

<div class="equipment-section">
        <div class="equipment-wrapper">
          <div class="equipment-item">
            <a title="Enclosure" target="_blank" href="https://www.amazon.com/dp/B0C8BFD6QM">Enclosure</a>
          </div>
          <div class="equipment-item">
            <a title="Raspberry Pi" target="_blank" href="https://www.pishop.us/product/raspberry-pi-5-2gb/">Raspberry Pi</a>
          </div>
          <div class="equipment-item">
            <a title="12v POE" target="_blank" href="https://www.amazon.com/dp/B097GXV47Q">12v POE</a>
          </div>
          <div class="equipment-item">
            <a title="fans" target="_blank"  href="https://www.amazon.com/dp/B00UTIB92G">90mm High-Speed Fans</a>
          </div>
          <div class="equipment-item">
            <a title="978mhz Antenna" target="_blank" href="https://flightaware.store/products/antenna-978-mhz">FlightAware 978mhz Antenna </a>
          </div>
          <div class="equipment-item">
            <a title="1090mhz preamp" target="_blank" href="https://v3.airspy.us/product/upu-fp1090s/">1090 MHz ADS-B Filter/Preamp</a>
          </div>
          <div class="equipment-item">
            <a title="978mhz preamp" target="_blank" href="https://v3.airspy.us/product/upu-fp978s/">978 MHz UAT Filter/Preamp</a>
          </div>
          <div class="equipment-item">
            <a title="ProStick Plus" target="_blank" href="https://flightaware.store/products/pro-stick-plus">Flight Aware Pro Stick Plus (1090mhz)</a>
          </div>
          <div class="equipment-item">
            <a title="ProStick" target="_blank" href="https://flightaware.store/products/pro-stick">Flight Aware Pro Stick (978mhz)</a>
          </div>
          <div class="equipment-item">
            <a title="1090mhz Antenna" target="_blank" href="https://dpdproductions.com/products/ads-b-vertical-outdoor-base-antenna">ADS-B Vertical Outdoor Base Antenna</a>
          </div>
          <!-- Add more items as needed -->
        </div>
      </div>


                    </p>



      </p>

    </div>
  </div>
  <?php include '../footer.php'; ?>
</body>

</html>
