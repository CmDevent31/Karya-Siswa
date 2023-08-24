<!DOCTYPE html>
<html>
<head>
                  
    
{{-- memasukan navbar --}}
@include('layouts.header')
</head>

    <body>
{{-- memasukkan konten --}}

    {{-- <div class="container mt-4"> --}}
        @yield('home')
        @yield('karyasiswa')
        @yield('quotes')
        @yield('ekskul')
        @yield('404')
        @yield('guru')
        @yield('galeri')
        @yield('pembelajaran')
        @yield('prestasi')
        @yield('privacy')
        @yield('timkami')
        @yield('tentangkami')
	{{-- </div> --}}

</body>

{{-- memasukan footer --}}
@include('layouts.footer')


</html>
