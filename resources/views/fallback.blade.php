<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="{{ asset('css/fallback.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    <script src="{{ asset('js/fallback.js') }}"></script>
</head>
<body>
    <div class="error-container">
        <div class="lottie-animation"></div>
        <div class="error-content">
            <h1>404</h1>
            <p>Oops! The page you're looking for doesn't exist.</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Home</a>
        </div>
    </div>
</body>
</html>
