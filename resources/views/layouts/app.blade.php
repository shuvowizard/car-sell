@extends('layouts.clean')

@section('childContent')

    @include('layouts.partials.navbar')

    @yield('content')


    @hasSection('footerLinks')

        <footer>
            @yield('footerLinks')
        </footer>

    @endif

@endsection