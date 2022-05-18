<!DOCTYPE html>

<html lang="en">

<head>
    @include('Template.head')
    <title>Laravel - Vue</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /Navbar -->


        <!-- Main Sidebar -->
        @include('Template.left-sidebar')
        <!-- /Main Sidebar -->


        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <!-- Content Header -->
            {{-- <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Main Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        {{-- <example-component></example-component> --}}
                        <router-view></router-view>
                    </div>

                </div>
            </div>

        </div>
        <!-- /Content Wrapper -->


        <!-- Footer -->
        @include('Template.footer')
        <!-- /Footer -->
    </div>



    @include('Template.script')
</body>

</html>