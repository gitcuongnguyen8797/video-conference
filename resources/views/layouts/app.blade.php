<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')
</html>