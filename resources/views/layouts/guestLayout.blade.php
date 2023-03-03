<!DOCTYPE html>
<html lang="zxx" native-dark-active=""
    class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
    <style lang="en" type="text/css" id="dark-mode-native-style">
    :root,
    ::after,
    ::before,
    ::backdrop {
        --native-dark-accent-color: #a9a9a9;
        --native-dark-bg-color: #292929;
        --native-dark-bg-image-color: rgba(0, 0, 0, 0.25);
        --native-dark-bg-image-filter: brightness(50%) contrast(200%);
        --native-dark-border-color: #545454;
        --native-dark-box-shadow: 0 0 0 1px rgb(255 255 255 / 10%);
        --native-dark-cite-color: #92de92;
        --native-dark-fill-color: #7d7d7d;
        --native-dark-font-color: #dcdcdc;
        --native-dark-link-color: #8db2e5;
        --native-dark-opacity: 0.85;
        --native-dark-text-shadow: none;
        --native-dark-transparent-color: transparent;
        --native-dark-visited-link-color: #c76ed7
    }

    :root {
        color-scheme: dark;
        accent-color: var(--native-dark-accent-color);
    }

    html a:visited,
    html a:visited>* {
        color: var(--native-dark-visited-link-color) !important;
    }

    a[ping]:link,
    a[ping]:link>*,
    :link:not(cite) {
        color: var(--native-dark-link-color) !important;
    }

    html cite,
    html cite a:link,
    html cite a:visited {
        color: var(--native-dark-cite-color) !important;
    }

    img,
    image,
    figure:empty {
        opacity: var(--native-dark-opacity) !important;
    }
</style>
<style lang="en" type="text/css" id="dark-mode-native-sheet"></style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
    <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap">
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
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/inject.js') }}"></script>
<script src="{{ asset('js/datepicker.js') }}"></script>
<script src="{{ asset('js/imagesload.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>

</html>