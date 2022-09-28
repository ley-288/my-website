

<div class="nav-custom">
    <div class="inner-nav"><a href="{{url('/')}}"><h1 style="color:white; font-size:6rem;">J I A N T</h1></a></div>
    <div class="language-block">
        <a href="{{url('/')}}/language/it" @if(Lang::locale() == 'it') class="text-muted" style="pointer-events:none;" @endif><h6> IT </h6></a>
        <a href="{{url('/')}}/language/en" @if(Lang::locale() == 'en') class="text-muted" style="pointer-events:none;" @endif><h6> EN </h6></a>
    </div>
</div>
