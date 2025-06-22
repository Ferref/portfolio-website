<div class="container-fluid col-3 pt-5 pb-3 w-100 d-flex justify-content-center z-1">
    @if(request()->is('projects'))
        <h1>Some of my projects<span class="blinking-underscore">_</span></h1>
    @else
        <h1>About Me<span class="blinking-underscore">_</span></h1>
    @endif
</div>
