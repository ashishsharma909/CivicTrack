<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CivicTrack Welcome page</title>
</head>
<body>
    <div>
            <h1>Login</h1> 
            <form method = "post" action="{{ route('Login') }}">
                @csrf
                <div>
                    <input type="email" required  name="email" id="email" placeholder = "enter email">
                </div>
                <div>
                    <input type="password" required name="password" id="password" placeholder = "enter password">
                </div>
                <div>
                    <input type="submit" value="submit">
                </div>
            </form>
            <a href="/User/SignUp">SignUp</a>
    </div>
</body>
</html>