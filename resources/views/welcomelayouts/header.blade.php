<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') {{ get_option('site_title') }} @show </title>

    @yield('meta-data')

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-theme.css') }}" rel="stylesheet">


    <!-- Google Fonts & Font-Awesome -->
   {{-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400" rel="stylesheet" type="text/css">--}}

    <!-- Font awesome 4.4.0 -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.4.0/css/font-awesome.min.css') }}">
    <!-- load page specific css -->

    <!-- main select2.css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <!-- Conditional page load script -->
    @if(request()->segment(1) === 'dashboard')
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/metisMenu/dist/metisMenu.min.css') }}">
    @endif
                <!-- main style.css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('page-css')

        @if(get_option('additional_css'))
            <style type="text/css">
                {{ get_option('additional_css') }}
            </style>
            @endif
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
</head>
<body>

@if(config('app.is_demo'))

    <div class="demoLinkWrap" style="background: #333333; padding: 10px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <a href="https://codecanyon.net/item/getfund-a-professional-laravel-crowdfunding-platform/19769953?ref=themeqx" class="btn btn-primary" target="_blank"><i class="fa fa-shopping-cart"></i> Buy Now </a>
                    </center>
                </div>
            </div>
        </div>
    </div>

@endif

<div class="top-navbar">

    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('home') }}">
                                @if(get_option('logo_settings') == 'show_site_name')
                                    {{ get_option('site_name') }}
                                @else
                                    @if(logo_url())
                                        <img class="main-logo" src="{{ logo_url() }}" />
                                    @else
                                        {{ get_option('site_name') }}
                                    @endif
                                @endif
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                
                            </ul>
                            
                            <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Demo</a></li>

                                <?php
                                $header_menu_pages = config('header_menu_pages');
                                ?>
                                @if($header_menu_pages->count() > 0)
                                    @foreach($header_menu_pages as $page)
                                        <li><a href="{{ route('single_page', $page->slug) }}">{{ $page->title }} </a></li>
                                    @endforeach
                                @endif
                                <li><a href="{{route('contact_us')}}"> @lang('app.contact_us')</a></li>

                            </ul>

                        

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>

        </div>

    </div>

</div>
