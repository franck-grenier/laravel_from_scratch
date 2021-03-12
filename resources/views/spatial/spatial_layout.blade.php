<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Spatial by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body class="{{ Request()->is('spatial') ? 'landing' : '' }}">

@include('spatial/header')
@yield('content')
@include('spatial/footer')

<!-- Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/util.js"></script>
<script src="/assets/js/main.js"></script>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
