<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} </title>
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo-favicon.png') }}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/morris/morris.css ') }}">

    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css ">
    <link href="{{ asset('dashboard/css/icons.css') }}" rel="stylesheet" type="text/css ">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet" type="text/css ">

    <!-- DataTables -->
    <link href="{{ asset('dashboard/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->

    {{-- <link href="{{ asset('dashboard/css/jquery-ui.css') }}" rel="stylesheet" type="text/css "> --}}

    <!--calendar css-->
    <link href="{{ asset('dashboard/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('dashboard/plugins/summernote/summernote-bs4.css ') }}" rel="stylesheet" />

    @livewireStyles

    @yield('style')
</head>

<body class="fixed-left">

    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <div id="wrapper">
        @include('layouts.partials-dashboard._sidebar')

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                @include('layouts.partials-dashboard._nav')

                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                        @yield('container')

                    </div><!-- container fluid -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            @include('layouts/partials-dashboard/_footer')

        </div>
        <!-- End Right content here -->

    </div>


    @yield('js')

    <!--Summernote js-->
    <script src="{{ asset('dashboard/plugins/tinymce/tinymce.min.js ') }}"></script>

    <script src="{{ asset('dashboard/js/bootstrap.bundle.min.js ') }}"></script>
    <script src="{{ asset('dashboard/js/modernizr.min.js ') }}"></script>
    <script src="{{ asset('dashboard/js/detect.js ') }}"></script>
    <script src="{{ asset('dashboard/js/fastclick.js ') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.slimscroll.js ') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.blockUI.js ') }}"></script>
    <script src="{{ asset('dashboard/js/waves.js ') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.nicescroll.js ') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.scrollTo.min.js ') }}"></script>

    <!-- skycons -->
    <script src="{{ asset('dashboard/plugins/skycons/skycons.min.js ') }}"></script>

    <!-- skycons -->
    <script src="{{ asset('dashboard/plugins/peity/jquery.peity.min.js ') }}"></script>

    <!-- App js -->
    <script src="{{ asset('dashboard/js/app-drixo.js ') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('dashboard/plugins/datatables/jquery.dataTables.min.js ') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/dataTables.bootstrap4.min.js ') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('dashboard/plugins/datatables/dataTables.responsive.min.js ') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatables/responsive.bootstrap4.min.js ') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('dashboard/pages/datatables.init.js ') }}"></script>


    <script>
        $(document).ready(function () {
            if($(".elm1").length > 0){
                tinymce.init({
                    selector: "textarea.elm1",
                    language: 'fr_FR',
                    theme: "modern",
                    height:100,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>

    @include('flashy::message')

    @livewireScripts

</body>

</html>
