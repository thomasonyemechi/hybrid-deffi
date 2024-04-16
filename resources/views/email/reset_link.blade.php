
<body>
    Hello {{ $user->username }}

    This is your password reset Code

    <h3>{{$reset_code}}</h3>

    Thanks.
    {{ env('APP_NAME') }}
    
</body>


