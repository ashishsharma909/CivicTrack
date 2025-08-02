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
      max-width: 700px;
      margin: 40px auto;
      background-color: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 12px;
      backdrop-filter: blur(6px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    .container h1 {
      font-size: 28px;
      margin-bottom: 25px;
      color: #00e6e6;
      text-align: center;
      border-bottom: 1px solid #00bcd4;
      padding-bottom: 10px;
    }

    form input[type="text"],
    form textarea,
    form input[type="file"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 16px;
      border: 1px solid #555;
      border-radius: 6px;
      background-color: #2c3e50;
      color: #f0f0f0;
    }

    form textarea::placeholder,
    form input::placeholder {
      color: #b0b0b0;
    }

    form input[type="file"] {
      background-color: transparent;
      border: none;
      color: #ccc;
    }

    .note {
      font-size: 13px;
      color: #ff6b6b;
      margin-bottom: 12px;
      display: block;
    }

    form input[type="submit"] {
      background: linear-gradient(to right, #007bff, #0056b3);
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      font-size: 16px;
      width: 100%;
      transition: background 0.3s;
    }

    form input[type="submit"]:hover {
      background: linear-gradient(to right, #0056b3, #003c7a);
    }

    .preview {
      margin-bottom: 20px;
      text-align: center;
    }

    .preview img {
      max-width: 100%;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
      display: none;
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
      <a href="/">Logout</a>
    </div>
  </nav>

  <!-- Form Container -->
  <div class="container">
    <h1>Raise a Civic Issue</h1>

    <form method="POST" action="{{ Route('registerProblem') }}" enctype="multipart/form-data">
      @csrf

      <input type="text" name="headline" placeholder="Headline (e.g., Pothole near gate)" required>
      <textarea name="description" placeholder="Describe the issue briefly..." rows="4" required></textarea>
      <input type="text" name="category" placeholder="Enter the category" required>
      <span class="note">Note: Only city and state name in this format ➡️ (City, State)</span>
      <input type="text" name="location" id="location" placeholder="City, State">
      <input type="file" name="image" accept="image/*" onchange="previewImage(event)" required>

      <div class="preview">
        <img id="imagePreview" src="#" alt="Image Preview">
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
      reader.onload = function () {
        const output = document.getElementById('imagePreview');
        output.src = reader.result;
        output.style.display = 'block';
      };
      reader.readAsDataURL(event.target.files[0]);
    }

    window.onload = () => {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
          document.getElementById("latitude").value = position.coords.latitude;
          document.getElementById("longitude").value = position.coords.longitude;
        }, (error) => {
          console.log("Location error:", error.message);
        }, {
          enableHighAccuracy: true,
          timeout: 10000,
          maximumAge: 0
        });
      } else {
        alert("Geolocation is not supported by your browser.");
      }
    };
  </script>

</body>
</html>
