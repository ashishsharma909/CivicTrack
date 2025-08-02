<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CivicTrack - Dashboard</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    /* Modern Navbar */
    nav {
      background-color: #202d36;
      padding: 12px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav .logo {
      color: #ffffff;
      font-size: 22px;
      font-weight: bold;
    }

    nav .links a {
      color: #ffffff;
      margin-left: 20px;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav .links a:hover {
      color: #00bcd4;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }

    .section-title {
      font-size: 26px;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    .two-column {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
    }

    .column {
      flex: 1;
      min-width: 280px;
    }

    .column p {
      font-size: 16px;
      line-height: 1.7;
      margin-bottom: 24px;
    }

    ul {
      padding-left: 20px;
      margin-top: 10px;
    }

    li {
      margin-bottom: 12px;
      font-size: 16px;
    }

    footer {
      background-color: #202d36;
      color: #ffffff;
      text-align: center;
      padding: 16px;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .two-column {
        flex-direction: column;
      }

      nav {
        flex-direction: column;
        align-items: flex-start;
      }

      nav .links {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">CivicTrack</div>
    <div class="links">
      <a href="#">Dashboard</a>
      <a href="/problems">Reported Issues</a>
      <a href="/registerProblem">Raise A problem</a>
      <a href="#">Your Issues</a>
      <a href="#">Logout</a>
    </div>
  </nav>

  <!-- Content Container -->
  <div class="container">

    <!-- What is CivicTrack -->
    <div class="two-column">
      <div class="column">
        <h2 class="section-title">What is CivicTrack?</h2>
        <p>CivicTrack is a smart civic reporting system that connects citizens with municipal bodies. It allows users to easily report everyday issues in their city — such as potholes, overflowing garbage bins, or broken streetlights — using just a photo and their location.</p>
        <p>Through real-time updates and visual tracking, CivicTrack brings transparency and awareness to local problems, promoting faster action and cleaner communities.</p>
      </div>
      <div class="column">
        <h2 class="section-title">How to Use</h2>
        <p>Simply click on <strong>"Register a Problem"</strong> in the top menu, upload a photo of the issue, and let the system automatically capture your location. Once submitted, your report is visible to others on the map, raising awareness and urging authorities to take action.</p>
        <p>The entire process is intuitive, fast, and mobile-friendly — so you can report issues on the go.</p>
      </div>
    </div>

    <!-- Benefits -->
    <div>
      <h2 class="section-title">Why Choose CivicTrack?</h2>
      <ul>
        <li><strong>Empowers Citizens:</strong> Gives every resident a voice to speak up about local issues.</li>
        <li><strong>Instant Reporting:</strong> Capture problems live with location tagging.</li>
        <li><strong>Visual Map Tracking:</strong> See problem areas and active reports citywide.</li>
        <li><strong>Supports Local Authorities:</strong> Provides data for better urban planning and budgeting.</li>
        <li><strong>Transparency & Trust:</strong> Public visibility creates accountability for problem resolution.</li>
        <li><strong>Scalable & Expandable:</strong> Ideal for city councils, localities, universities, and smart city initiatives.</li>
      </ul>
    </div>

    <!-- Extra Section -->
    <div class="two-column" style="margin-top: 40px;">
      <div class="column">
        <h2 class="section-title">Future Vision</h2>
        <p>We envision CivicTrack becoming a national platform where citizens of any city can unite to improve civic infrastructure collaboratively. With proper support and reach, CivicTrack can become a bridge between communities and governing bodies.</p>
      </div>
      <div class="column">
        <h2 class="section-title">Join the Movement</h2>
        <p>Be a responsible citizen. Start reporting, sharing, and tracking issues in your locality. Change doesn’t start with policies — it starts with action. Let’s make cities cleaner, safer, and smarter — together with CivicTrack.</p>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer>
    © 2025 CivicTrack – Made with purpose by Vision X
  </footer>

</body>
</html>
