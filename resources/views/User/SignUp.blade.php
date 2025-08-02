<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>

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
      max-width: 450px;
      background: rgba(30, 30, 30, 0.85);
      padding: 35px 30px;
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
      margin-bottom: 24px;
      font-size: 32px;
      color: #ffffff;
      font-weight: 600;
      letter-spacing: 1px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="submit"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      font-size: 16px;
      border: 1px solid #444;
      background-color: #1c1c1c;
      color: #e0e0e0;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      outline: none;
      border-color: #00bfff;
      box-shadow: 0 0 6px rgba(0, 191, 255, 0.4);
      background-color: #252525;
    }

    input[type="submit"] {
      background: linear-gradient(to right, #28a745, #218838);
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
      transition: 0.3s ease;
    }

    input[type="submit"]:hover {
      background: linear-gradient(to right, #218838, #1c7630);
      transform: scale(1.02);
    }

    a {
      display: block;
      text-align: center;
      margin-top: 12px;
      color: #00bfff;
      text-decoration: none;
      font-size: 14px;
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
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 18px;
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
    <h1>Sign Up</h1>

    @if ($errors->any())
      <div class="error">
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
      </div>
    @endif

    <form method="POST" action="{{ route('User.SignUp') }}">
      @csrf
      <input type="text" name="name" id="name" placeholder="Enter your name" required value="{{ old('name') }}">
      <input type="email" name="email" id="email" placeholder="Enter your email" required value="{{ old('email') }}">
      <input type="password" name="password" id="password" placeholder="Enter password" required>
      <input type="password" name="password_confirmation" id="confirm_password" placeholder="Confirm password" required>
      <input type="submit" value="Submit">
      <a href="/">Back to Login</a>
    </form>
  </div>

</body>
</html>
