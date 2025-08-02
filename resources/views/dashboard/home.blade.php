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
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: #f0f0f0;
    }

    nav {
      background-color: #1c1c1c;
      padding: 14px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    nav .logo {
      color: #00bcd4;
      font-size: 24px;
      font-weight: bold;
    }

    nav .links a {
      color: #ddd;
      margin-left: 20px;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    nav .links a:hover {
      color: #00e6e6;
    }

    .container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.3);
      border-radius: 12px;
      backdrop-filter: blur(6px);
    }

    .section-title {
      font-size: 28px;
      margin-bottom: 20px;
      color: #00e6e6;
    }

    .two-column {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }

    .column {
      flex: 1;
      min-width: 280px;
    }

    .column p {
      font-size: 16px;
      line-height: 1.7;
      color: #d0d0d0;
      margin-bottom: 20px;
    }

    ul {
      padding-left: 20px;
      margin-top: 10px;
    }

    li {
      margin-bottom: 12px;
      font-size: 16px;
      color: #d0d0d0;
    }

    li strong {
      color: #00bcd4;
    }

    footer {
      background-color: #1c1c1c;
      color: #ccc;
      text-align: center;
      padding: 16px;
      margin-top: 40px;
      font-size: 14px;
    }

    a.logout-btn {
      display: inline-block;
      color: #ff4d4d;
      text-decoration: none;
      margin-left: 10px;
      font-weight: 500;
    }

    a.logout-btn:hover {
      color: #ff1a1a;
    }

    .welcome {
      background: rgba(0, 0, 0, 0.4);
      border-left: 4px solid #00e6e6;
      padding: 16px 20px;
      margin: 20px auto 40px;
      color: #fff;
      max-width: 800px;
      border-radius: 10px;
      font-size: 18px;
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

  <!-- Auth Welcome -->
  @if(Session::has('user_name'))
    <div class="welcome">
      Welcome, {{ Session::get('user_name') }}!
      <a class="logout-btn" href="{{ route('logout') }}">Logout</a>
    </div>
  @endif

  <!-- Navbar -->
  <nav>
    <div class="logo">CivicTrack</div>
    <div class="links">
      <a href="#">Dashboard</a>
      <a href="/problems">Reported Issues</a>
      <a href="/registerProblem">Raise A Problem</a>
      <a href="/">Logout</a>
    </div>
  </nav>

  <!-- Content -->
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
        <p>Click on <strong>"Raise A Problem"</strong> in the top menu, upload a photo of the issue, and let the system capture your location. Once submitted, your report is visible to others on the map, raising awareness and urging authorities to take action.</p>
        <p>The entire process is fast, intuitive, and mobile-friendly — so you can report issues anytime, anywhere.</p>
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
    <div class="two-column">
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
