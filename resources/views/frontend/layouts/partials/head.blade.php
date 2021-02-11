<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="{{ env('MODEL_NAME') }}">
<meta property="og:title" content="{{ env('MODEL_NAME') }}" />
<meta property="og:url" content="{{ env('APP_URL').request()->get('segment')}}" />
<meta property="og:description" content="{{ env('MODEL_NAME') }}">
<meta property="og:image" content="{{ asset("images/500-00.jpg")}}">
<meta property="og:type" content="website" />
<meta property="og:locale" content="{{ LaravelGettext::getLocale() }}" />
<!-- Bootstrap CSS and custom style -->
<link rel="icon" href="{{ asset('images/favicon.ico') }}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('dist/css/style.min.css') }}">

<title>@yield("title", env('APP_NAME'))</title>
