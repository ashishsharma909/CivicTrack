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
      margin: 40px auto;
      padding: 20px;
    }

    .section-title {
      font-size: 32px;
      color: #ffffff;
      text-align: center;
      border-bottom: 2px solid #00bcd4;
      display: inline-block;
      padding-bottom: 8px;
      margin-bottom: 40px;
    }

    .issue-card {
      background-color: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 20px;
      margin-bottom: 30px;
      border-radius: 12px;
      backdrop-filter: blur(6px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease;
    }

    .issue-card:hover {
      transform: translateY(-5px);
    }

    .issue-card h4 {
      color: #00e6e6;
      margin-bottom: 10px;
    }

    .issue-card p {
      color: #ddd;
      margin: 6px 0;
    }

    .issue-card img {
      max-width: 100%;
      border-radius: 8px;
      margin: 15px 0;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
    }

    .issue-card a {
      color: #00bcd4;
      text-decoration: none;
      font-weight: bold;
    }

    .issue-card a:hover {
      color: #ffffff;
      text-decoration: underline;
    }

    footer {
      background-color: #1c1c1c;
      color: #ccc;
      text-align: center;
      padding: 16px;
      margin-top: 40px;
      font-size: 14px;
    }

    @media (max-width: 768px) {
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
      <a href="/home">Dashboard</a>
      <a href="#">Reported Issues</a>
      <a href="/registerProblem">Raise A Problem</a>
      <a href="/">Logout</a>
    </div>
  </nav>

  <!-- Problems Section -->
  <div class="container">
    <h1 class="section-title">Problems Near You</h1>

    @foreach ($issues as $issue)
      <div class="issue-card">
        <h4>{{ $issue->headline }}</h4>
        <img src="{{ asset('storage/' . $issue->image_path) }}" alt="Issue Image">
        <h4>Status: {{ $issue->status }}</h4>
        <p>{{ $issue->description }}</p>
        <p><strong>Location:</strong> {{ $issue->location }}</p>
        <p>
          <a href="https://www.google.com/maps/search/?api=1&query={{ $issue->latitude }},{{ $issue->longitude }}" target="_blank">
            📍 View on Google Maps
          </a>
        </p>
      </div>
    @endforeach
  </div>

  <!-- Footer -->
  <footer>
    © 2025 CivicTrack – Made with purpose by Vision X
  </footer>

</body>
</html>
