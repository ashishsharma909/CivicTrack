<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CivicTrack – Login</title>

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(145deg, #0f2027, #203a43, #2c5364);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #f5f5f5;
    }

    .container {
      width: 100%;
      max-width: 400px;
      background: rgba(30, 30, 30, 0.8);
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 25px 45px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.05);
      animation: fadeIn 0.6s ease-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      color: #ffffff;
      font-size: 32px;
      font-weight: 600;
      letter-spacing: 1px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px;
      margin-bottom: 20px;
      font-size: 15px;
      background-color: #1c1c1c;
      border: 1px solid #333;
      color: #e0e0e0;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      outline: none;
      border-color: #00bfff;
      box-shadow: 0 0 8px rgba(0, 191, 255, 0.4);
      background-color: #252525;
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px;
      background: linear-gradient(to right, #00bfff, #1e90ff);
      color: white;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.4s ease;
    }

    input[type="submit"]:hover {
      background: linear-gradient(to right, #1e90ff, #007acc);
      transform: scale(1.02);
    }

    a {
      display: block;
      text-align: center;
      margin-top: 18px;
      color: #00bfff;
      font-size: 14px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    a:hover {
      color: #ffffff;
      text-decoration: underline;
    }

    .error {
      background-color: rgba(255, 0, 0, 0.1);
      border: 1px solid #ff4d4d;
      color: #ff7373;
      font-size: 14px;
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 20px;
      text-align: center;
    }

    @media (max-width: 500px) {
      .container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Login</h1>

    @if ($errors->any())
      <div class="error">
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
      </div>
    @endif

    <form method="POST" action="{{ route('Login') }}">
      @csrf
      <input type="email" name="email" required placeholder="Enter your email" value="{{ old('email') }}">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" value="Login">
    </form>

    <a href="/User/SignUp">Don’t have an account? Sign up</a>
    <a href="/home">Login as a Guest</a>
  </div>

</body>
</html>
