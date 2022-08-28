<html>

<head>
    <title>Verify Your Email Address - Haposoft.com</title>
</head>

<body>
    <div class="container">
        <div class="card-header">Verify Your Email Address</div>
        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    'A fresh verification link has been sent to your email address.'
                </div>
            @endif
            <a href="{{ route('password.reset', [$token]) }}">Click Here</a>.
        </div>
    </div>
</body>

</html>
