
<!-- LANGUAGE CHANGE MODAL -->
<div class="modal fade" id="langModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">@lang('language.language')</h6>
            </div>
            <div class="modal-body">
            {{--@if(Lang::locale() == 'it')--}}
                <a href="{{ '/language/en' }}" style="color:black!important;">
                    <div class="flag-holster">
                        <div>
                            <img src="{{ asset('images/flags/flag-uk.png') }}" class="flag-icon">
                        </div>
                        <div class="flex-and-center">
                            @if(Lang::locale() == 'en')
                            <div>
                                <i class="material-icons-round lang-font-color-sel margin-right-space">check_circle</i>
                            </div>
                            @endif
                            <div>
                                <h6 class="lang-font-color">@lang('language.english') </h6>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ '/language/it' }}" style="color:black!important;">
                    <div class="flag-holster">
                        <div>
                            <img src="{{ asset('images/flags/flag-ita.png') }}" class="flag-icon">
                        </div>
                        <div class="flex-and-center">
                            @if(Lang::locale() == 'it')
                            <div>
                                <i class="material-icons-round lang-font-color-sel margin-right-space">check_circle</i>
                            </div>
                            @endif
                            <div>
                                <h6 class="lang-font-color">@lang('language.italian') </h6>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ '/language/es' }}" style="color:black!important;">
                    <div class="flag-holster">
                        <div>
                            <img src="{{ asset('images/flags/flag-spa.png') }}" class="flag-icon">
                        </div>
                        <div class="flex-and-center">
                            @if(Lang::locale() == 'es')
                            <div>
                                <i class="material-icons-round lang-font-color-sel margin-right-space">check_circle</i>
                            </div>
                            @endif
                            <div>
                                <h6 class="lang-font-color">@lang('language.spanish') </h6>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{ '/language/de' }}" style="color:black!important;">
                    <div class="flag-holster">
                        <div>
                            <img src="{{ asset('images/flags/flag-de.png') }}" class="flag-icon">
                        </div>
                        <div class="flex-and-center">
                            @if(Lang::locale() == 'de')
                            <div>
                                <i class="material-icons-round lang-font-color-sel margin-right-space">check_circle</i>
                            </div>
                            @endif
                            <div>
                                <h6 class="lang-font-color">@lang('language.german') </h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
