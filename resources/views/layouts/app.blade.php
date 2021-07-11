<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Advanced search for Youtube</title>
    <meta name="description" content="Agnodyce a advanced search for Youtube">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>


    <!-- Start Open Web Analytics Tracker -->
    <script type="text/javascript" defer>
        //<![CDATA[
        var owa_baseUrl = 'https://analytics.whereiscl.com/';
        var owa_cmds = owa_cmds || [];
        owa_cmds.push(['setSiteId', '11e5c35e0c093d0ba14880c3ae9aec6c']);
        owa_cmds.push(['trackPageView']);
        owa_cmds.push(['trackClicks']);

        (function() {
            var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
            owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
            _owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
            var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
        }());
        //]]>
    </script>
    <!-- End Open Web Analytics Code -->
</head>

<body>
<x-menu></x-menu>
@yield('content')
<x-footer></x-footer>
</body>
</html>
