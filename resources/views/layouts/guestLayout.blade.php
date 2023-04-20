<!DOCTYPE html>
<html lang="zxx" native-dark-active="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms no-csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="description" content="@yield('description') - {{ config('app.name') }}" />
        <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
        <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
        {{-- <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"> --}}
        <link rel="stylesheet" href="css/plugins.css" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/baber-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/slider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/media.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    </head>

    <body>
        @yield('content')
    </body>
    
    @include('layouts.partials.scripts')
</html>