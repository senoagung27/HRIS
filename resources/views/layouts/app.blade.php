<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('layouts.slidebar')
            @include('components.navbar')
            <!-- Main Content -->
            @yield('content')
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2020 <div class="bullet"></div>
                </div>
            </footer>
        </div>
    </div>
    @include('layouts.js')
    @yield('bawah')
    @yield('ff')
    <!-- General JS Scripts -->
</body>


</html>
