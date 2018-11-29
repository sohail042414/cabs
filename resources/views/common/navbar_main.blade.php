<div class="nav-wrapper" id="nav-wrapper">
    <nav class="navbar navbar-affix navbar-static affix-top" data-spy="affix" style="/*top:40px;*/">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="logo" href="{{ url('/') }}">
                    <img width="163" height="42" src="{{ url('/') }}/images/logo-inner.png" class="attachment-taxipark-big size-taxipark-big"
                        alt=""> </a>
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