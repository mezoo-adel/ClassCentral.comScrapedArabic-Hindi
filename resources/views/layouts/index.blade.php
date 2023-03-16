<html>

<head itemscope itemtype="http://schema.org/WebSite">
    <title>
        @yield('title')
    </title>
    @include('layouts.header')
    @yield('customcss')

</head>

<body>
    @include('layouts.navbar2')
    @yield('content')
    @include('layouts.footer')
    {{-- @include('layouts.scripts') --}}
</body>

</html>
