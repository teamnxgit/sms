<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('includes.header')
        <div class="app-main">
            @include('includes.sidebar')
            @yield('content')
        </div>
    </div>

</body>
<script src="{{asset('js/das.js') }}" defer></script>
</html>
