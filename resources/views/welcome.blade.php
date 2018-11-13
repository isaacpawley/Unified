@extends('welcomelayouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(get_option('logo_settings') == 'show_site_name')
                        {{ get_option('site_name') }}
                    @else
                        @if(logo_url())
                            <img class = "logo-large" src="{{ logo_url() }}" />
                        @else
                            {{ get_option('site_name') }}
                        @endif
                    @endif
                    <p class="jumbotron-sub-text">INSPIRATIONAL WHO WHAT WHY SENTENCE HERE</p>
                </div>
            </div>
        </div>
    </div>
    <section class="footer-campaign-stats">
        <div class="container">
            <div class="row">
                </div>
        </div>
    </section>   
@endsection
