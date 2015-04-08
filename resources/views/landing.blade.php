@include('partials.header')
<body id="page-top">
@include('partials.navbar')
@include('partials.landing.carousel')

@include('partials.landing.login')
 @include('partials.landing.features_01')
@include('partials.landing.contacts')

@yield('content')

@include ('partials.footer')
</body>
</html>