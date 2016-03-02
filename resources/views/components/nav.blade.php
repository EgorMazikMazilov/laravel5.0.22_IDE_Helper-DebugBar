<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Открыть меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </button>
        </div>
        <div class="col-md-4">
            <a class="navbar-brand" href="/">LOGO</a>
        </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @foreach($menu as $item)
                            <li>
                                <a href="{{$item->url}}">{{$item->title}}</a>
                            </li>
                    @endforeach
                </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

