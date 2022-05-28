<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials._head')
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper" >
        @include('layouts.partials._navbar')
        <!-- Main Sidebar Container -->
        @include('layouts.partials._sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" >
            @include('flash::message')
            <div id="app">
                @yield('content')
            </div>

        </div>
        <!-- /.content-wrapper -->

        @include('layouts.partials._footer')
    </div>


    @include('layouts.partials._footerScript')
</body>

</html>
