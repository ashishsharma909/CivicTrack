<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Raise an Issue - CivicTrack</title>

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
      max-width: 800px;
      margin: 40px auto;
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .container h1 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #2c3e50;
      text-align: center;
    }

    form input[type="text"],
    form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form input[type="file"] {
      margin-bottom: 15px;
    }

    form input[type="submit"] {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    form input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .preview {
      margin-bottom: 20px;
    }

    footer {
      background-color: #202d36;
      color: #ffffff;
      text-align: center;
      padding: 16px;
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
      }

      nav .links {
        margin-top: 10px;
      }

      .container {
        margin: 20px;
        padding: 20px;
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
      <a href="/problems">Reported Issues</a>
      <a href="#">Raise A Problem</a>
      <a href="#">Your Issues</a>
      <a href="#">Logout</a>
    </div>
  </nav>

  <!-- Form Container -->
  <div class="container">
    <h1>Raise a Civic Issue</h1>
    <form method="POST" action="{{ Route('registerProblem') }}" enctype="multipart/form-data">
      @csrf

      <input type="text" name="headline" placeholder="Headline (e.g., Pothole near gate)" required>

      <textarea name="description" placeholder="Describe the issue briefly..." rows="4" required></textarea>

      <input type="file" name="image" accept="image/*" onchange="previewImage(event)" required>

      <div class="preview">
        <img id="imagePreview" src="#" alt="Image Preview" style="max-width:100%; display:none;"/>
      </div>

      <input type="hidden" name="latitude" id="latitude">
      <input type="hidden" name="longitude" id="longitude">

      <input type="submit" value="Submit Issue">
    </form>
  </div>

  <!-- Footer -->
  <footer>
    © 2025 CivicTrack – Made with purpose by Vision X
  </footer>

  <!-- JS for Preview & Location -->
  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function(){
        const img = document.getElementById('imagePreview');
        img.src = reader.result;
        img.style.display = 'block';
      }
      reader.readAsDataURL(event.target.files[0]);
    }

    // Get user location and set in hidden fields
    window.onload = () => {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
          document.getElementById("latitude").value = position.coords.latitude;
          document.getElementById("longitude").value = position.coords.longitude;
        }, (error) => {
          console.log("Location access denied.");
        });
      }
    };
  </script>
</body>
</html>
