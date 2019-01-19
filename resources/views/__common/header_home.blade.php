<div id="nav-wrapper">
    <nav class="navbar  navbar-static navbar-home" data-spy="">
        <div class="container">
            <a class="logo" href="{{ url('/') }}/">
                <img width="106" height="72" src="/images/logo.png" class="attachment-taxipark-big size-taxipark-big"
                    alt="">
            </a>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <button type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>

                <div class="pull-right nav-right visible-lg">
                </div>
                @include('common.menu')
                <div class="nav-mob hidden-lg">
                </div>
            </div>
        </div>
    </nav>
</div>