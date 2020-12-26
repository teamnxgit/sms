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
    <div class="messages" style="position:absolute;right:10px;top:10px;z-index:9999">
        @include('includes.messages')
    </div>
</body>
<script src="{{asset('js/das.js') }}" defer></script>
</html>
