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
      <a href="/home">Dashboard</a>
      <a href="#">Reported Issues</a>
      <a href="/registerProblem">Raise A problem</a>
      <a href="#">Your Issues</a>
      <a href="#">Logout</a>
    </div>
  </nav>

<section>
    <h1>Problems near you</h1>
    <div>
        <h4>headline</h4>
        <img src="#" alt="image" srcset="">
        <h4>status</h4>
        <p>description</p>
        <p>location</p>
    </div>
</section>

  <!-- Footer -->
  <footer>
    © 2025 CivicTrack – Made with purpose by Vision X
  </footer>

</body>
</html>
