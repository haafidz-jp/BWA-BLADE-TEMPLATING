<!DOCTYPE html>
<html>
    <head>
        @include('includes.meta')

        <title>@yield('title') | Landing Page</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="">
        <link rel="shorcut icon" type="image/x-icon" href="">

        @stack('before-styles')
        <!-- style -->
        @include('includes.style')

        @stack('after-styles')

    </head>
    <body>
        
        @include('includes.header')
            @yield('content')
        @include('includes.footer')

        @stack('before-scripts')
        <!-- script -->
        @include('includes.script')

        @stack('after-scripts')
        
    </body>
</html>