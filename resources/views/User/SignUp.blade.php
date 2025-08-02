<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <div>
        <h1>SignUp</h1>
        <div>
            <form method = "post" action="{{ route ('User.SignUp') }}">
                @csrf
                <div>
                    <input type="text" name="name" id="name" placeholder = "enter your name" required>
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder = "enter your email" required>
                </div>
                <div>
                    <input type="password" name="password" id="passsword" placeholder = "enter password" required>
                </div>
                <div>
                    <input type="password" name="password_confirmation" id="confirm_password" placeholder = "confirm password" required>
                </div>
                <div>
                    <input type="submit" value="submit">
                    <a href="/">Back</a>
                </div>

            </form>
        </div>

        @if($errors->any()){
            @foreach($errors->all() as $error){
                {{$error}}
            }
            @endforeach
        }
        @endif

    </div>

</body>
</html>