<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.__head')
</head>
<body class="dark">
    
    <div id="app">
        <!-- begin::preloader-->
        <div class="preloader">
            <div class="preloader-icon"></div>
        </div>
        <!-- end::preloader -->
        @include('layouts.partials.__header')
        <div id="main">
            @include('layouts.partials.__sidebar')
            <div class="main-content">
                @yield('content')
                @include('layouts.partials.__footer')
            </div>
        </div>
    </div>
    @include('layouts.partials.__script')
    @include('sweet::alert')
</body>
</html>
