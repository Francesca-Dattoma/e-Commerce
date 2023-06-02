
    <div class="d-flex justify-content-center align-items-center title-section bgHeader bodyHeaderHome ">
        <div class="col-12 text-center">
            <h1 class="text-white anton-font display-3 headerConfig ">{{ htmlspecialchars_decode($title)}}</h1>
            
        </div>
        @if(!(request()->routeIs('add.index')))
        <a class="buttonHomeHeader nav-link text-center" href="{{route('add.index')}}">{{__('ui.allAnnouncements')}}</a>
        @endif
    </div>
