@include('master.header')

@include('master.sidebar')

<div id="content-wrapper" class="d-flex flex-column">


    <div id="content">
        @include('master.topbar')

        {{-- content --}}
        <div class="container-fluid">
            @yield('content')
        </div>


    </div>

    @include('master.footer')
