<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

</style>

</head>
<body>
<section class="hero is-light is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Login</h3>
                <p class="subtitle has-text-grey">Please login to proceed.</p>
                <div class="box">

                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" id="email" type="email" name="email"
                                value="{{ old('email') }}" required autofocus placeholder="Email">
                            </p>

                            @if ($errors->has('email'))
                                <p class="help is-danger">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif

                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" id="password" type="password" name="password" required placeholder="Password">
                            </p>

                            @if ($errors->has('password'))
                                <p class="help is-danger">
                                    {{ $errors->first('password') }}
                                </p>
                            @endif

                        </div>
                        <div class="field">
                            <p class="control">
                                <button type="submit" class="button is-primary">Login</button>
                            </p>
                        </div>


                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

