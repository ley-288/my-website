
{{--PIN KEYPAD--}}
<!-- Modal -->
<div class="modal fade animate" id="registerPinModal" tabindex="-1" role="dialog" aria-labelledby="registerPinModal" aria-hidden="true" style="overflow-y: hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content animate-bottom" style="background-color:transparent!important;">
            <div class="modal-body registerPinModal">
                <div class="pin-wrapper">
                    <input type="number" data-role="pin" maxlength="5" class="pin-input" placeholder="● ● ● ● ●">
                </div>
                </br>
                </br>
                <div class="keypad-num">
                    <div class="keypad-num-key num-put" data-val="1">1</div>
                    <div class="keypad-num-key num-put" data-val="2">2</div>
                    <div class="keypad-num-key num-put" data-val="3">3</div>
                    <div class="keypad-num-key num-put" data-val="4">4</div>
                    <div class="keypad-num-key num-put" data-val="5">5</div>
                    <div class="keypad-num-key num-put" data-val="6">6</div>
                    <div class="keypad-num-key num-put" data-val="7">7</div>
                    <div class="keypad-num-key num-put" data-val="8">8</div>
                    <div class="keypad-num-key num-put" data-val="9">9</div>
                    <div class="keypad-num-key cancel-all"><i class="material-icons-round">delete</i></div>
                    <div class="keypad-num-key num-put" data-val="0">0</div>
                    <div class="keypad-num-key cancel"><i class="material-icons-round">backspace</i></div>
                </div>
                </br>
                <div class="dismiss-numpad">
                    <button class="dismiss-numpad-btn dismiss-modal-btn" data-dismiss="modal">@lang('applicazione.cancel')</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{--KEYBOARD KEYPAD--}}
<!-- Modal -->
<div class="modal fade animate" id="keyPadModal" tabindex="-1" role="dialog" aria-labelledby="keyPadModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content animate-bottom" style="background-color:transparent!important; border:none">
            <div class="modal-body keyPadModal" style="padding:0;">
                </br>
                </br>
                <div class="keypad-text">
                    <div id="keypad-keys">
                        {{--KeyPad WINDOW 1 UPPERCASE--}}
                        <div id="key-win-uppercase" class="key-win">
                            <div class="key-line key-line-1">
                                <div class="keypad-text-key key-put" data-val="Q">Q</div>
                                <div class="keypad-text-key key-put" data-val="W">W</div>
                                <div class="keypad-text-key key-put" data-val="E">E</div>
                                <div class="keypad-text-key key-put" data-val="R">R</div>
                                <div class="keypad-text-key key-put" data-val="T">T</div>
                                <div class="keypad-text-key key-put" data-val="Y">Y</div>
                                <div class="keypad-text-key key-put" data-val="U">U</div>
                                <div class="keypad-text-key key-put" data-val="I">I</div>
                                <div class="keypad-text-key key-put" data-val="O">O</div>
                                <div class="keypad-text-key key-put" data-val="P">P</div>
                            </div>
                            <div class="key-line key-line-2">
                                <div class="keypad-text-key key-put" data-val="A">A</div>
                                <div class="keypad-text-key key-put" data-val="S">S</div>
                                <div class="keypad-text-key key-put" data-val="D">D</div>
                                <div class="keypad-text-key key-put" data-val="F">F</div>
                                <div class="keypad-text-key key-put" data-val="G">G</div>
                                <div class="keypad-text-key key-put" data-val="H">H</div>
                                <div class="keypad-text-key key-put" data-val="J">J</div>
                                <div class="keypad-text-key key-put" data-val="K">K</div>
                                <div class="keypad-text-key key-put" data-val="L">L</div>
                            </div>
                            <div class="key-line key-line-3">
                                <div class="keypad-text-key key-put special-key shift-key"><i   class="material-icons-round">keyboard_double_arrow_down</i></div>
                                <div class="keypad-text-key key-put" data-val="Z">Z</div>
                                <div class="keypad-text-key key-put" data-val="X">X</div>
                                <div class="keypad-text-key key-put" data-val="C">C</div>
                                <div class="keypad-text-key key-put" data-val="V">V</div>
                                <div class="keypad-text-key key-put" data-val="B">B</div>
                                <div class="keypad-text-key key-put" data-val="N">N</div>
                                <div class="keypad-text-key key-put" data-val="M">M</div>
                                <div class="keypad-text-key key-put special-key backspace-key"><i class="material-icons-round">backspace</i></div>
                            </div>
                        </div>

                        {{--KeyPad WINDOW 2 LOWERCASE--}}
                        <div id="key-win-lowercase" class="key-win hide">
                            <div class="key-line key-line-1">
                                <div class="keypad-text-key key-put" data-val="q">q</div>
                                <div class="keypad-text-key key-put" data-val="w">w</div>
                                <div class="keypad-text-key key-put" data-val="e">e</div>
                                <div class="keypad-text-key key-put" data-val="r">r</div>
                                <div class="keypad-text-key key-put" data-val="t">t</div>
                                <div class="keypad-text-key key-put" data-val="y">y</div>
                                <div class="keypad-text-key key-put" data-val="u">u</div>
                                <div class="keypad-text-key key-put" data-val="i">i</div>
                                <div class="keypad-text-key key-put" data-val="o">o</div>
                                <div class="keypad-text-key key-put" data-val="p">p</div>
                            </div>
                            <div class="key-line key-line-2">
                                <div class="keypad-text-key key-put" data-val="a">a</div>
                                <div class="keypad-text-key key-put" data-val="s">s</div>
                                <div class="keypad-text-key key-put" data-val="d">d</div>
                                <div class="keypad-text-key key-put" data-val="f">f</div>
                                <div class="keypad-text-key key-put" data-val="g">g</div>
                                <div class="keypad-text-key key-put" data-val="h">h</div>
                                <div class="keypad-text-key key-put" data-val="j">j</div>
                                <div class="keypad-text-key key-put" data-val="k">k</div>
                                <div class="keypad-text-key key-put" data-val="l">l</div>
                            </div>

                            <div class="key-line key-line-3">
                                <div class="keypad-text-key key-put special-key reverse-shift-key"><i class="material-icons-round">keyboard_double_arrow_up</i></div>
                                <div class="keypad-text-key key-put" data-val="z">z</div>
                                <div class="keypad-text-key key-put" data-val="x">x</div>
                                <div class="keypad-text-key key-put" data-val="c">c</div>
                                <div class="keypad-text-key key-put" data-val="v">v</div>
                                <div class="keypad-text-key key-put" data-val="b">b</div>
                                <div class="keypad-text-key key-put" data-val="n">n</div>
                                <div class="keypad-text-key key-put" data-val="m">m</div>
                                <div class="keypad-text-key key-put special-key backspace-key"><i class="material-icons-round">backspace</i></div>
                            </div>
                        </div>

                        {{--KeyPad WINDOW 3 NUMERALS--}}
                        <div id="key-win-numerals" class="key-win hide">
                            <div class="key-line key-line-1">
                                <div class="keypad-text-key key-put" data-val="1">1</div>
                                <div class="keypad-text-key key-put" data-val="2">2</div>
                                <div class="keypad-text-key key-put" data-val="3">3</div>
                                <div class="keypad-text-key key-put" data-val="4">4</div>
                                <div class="keypad-text-key key-put" data-val="5">5</div>
                                <div class="keypad-text-key key-put" data-val="6">6</div>
                                <div class="keypad-text-key key-put" data-val="7">7</div>
                                <div class="keypad-text-key key-put" data-val="8">8</div>
                                <div class="keypad-text-key key-put" data-val="9">9</div>
                                <div class="keypad-text-key key-put" data-val="0">0</div>
                            </div>

                            <div class="key-line key-line-2">
                                <div class="keypad-text-key key-put" data-val="-">-</div>
                                <div class="keypad-text-key key-put" data-val="/">/</div>
                                <div class="keypad-text-key key-put" data-val=":">:</div>
                                <div class="keypad-text-key key-put" data-val=";">;</div>
                                <div class="keypad-text-key key-put" data-val="(">(</div>
                                <div class="keypad-text-key key-put" data-val=")">)</div>
                                <div class="keypad-text-key key-put" data-val="£">£</div>
                                <div class="keypad-text-key key-put" data-val="&">&</div>
                                <div class="keypad-text-key key-put" data-val="@">@</div>
                                <div class="keypad-text-key key-put" data-val='"'>"</div>
                            </div>

                            <div class="key-line key-line-3">
                                <div class="keypad-text-key key-put special-key symbol-key"><i class="material-icons-round">calculate</i></div>
                                <div class="keypad-text-key key-put" data-val=".">.</div>
                                <div class="keypad-text-key key-put" data-val=",">,</div>
                                <div class="keypad-text-key key-put" data-val="?">?</div>
                                <div class="keypad-text-key key-put" data-val="!">!</div>
                                <div class="keypad-text-key key-put" data-val="'">'</div>
                                <div class="keypad-text-key key-put special-key backspace-key"><i class="material-icons-round">backspace</i></div>
                            </div>
                        </div>

                        {{--KeyPad WINDOW 4 MATHS--}}
                        <div id="key-win-maths" class="key-win hide">
                            <div class="key-line key-line-1">
                                <div class="keypad-text-key key-put" data-val="[">[</div>
                                <div class="keypad-text-key key-put" data-val="]">]</div>
                                <div class="keypad-text-key key-put" data-val="{">{</div>
                                <div class="keypad-text-key key-put" data-val="}">}</div>
                                <div class="keypad-text-key key-put" data-val="#">#</div>
                                <div class="keypad-text-key key-put" data-val="%">%</div>
                                <div class="keypad-text-key key-put" data-val="^">^</div>
                                <div class="keypad-text-key key-put" data-val="*">*</div>
                                <div class="keypad-text-key key-put" data-val="+">+</div>
                                <div class="keypad-text-key key-put" data-val="=">=</div>
                            </div>

                            <div class="key-line key-line-2">
                                <div class="keypad-text-key key-put" data-val="_">_</div>
                                <div class="keypad-text-key key-put" data-val="/">\</div>
                                <div class="keypad-text-key key-put" data-val="|">|</div>
                                <div class="keypad-text-key key-put" data-val="~">~</div>
                                <div class="keypad-text-key key-put" data-val="<"><</div>
                                <div class="keypad-text-key key-put" data-val=">">></div>
                                <div class="keypad-text-key key-put" data-val="€">€</div>
                                <div class="keypad-text-key key-put" data-val="$">$</div>
                                <div class="keypad-text-key key-put" data-val="￥">￥</div>
                                <div class="keypad-text-key key-put" data-val='·'>·</div>
                            </div>

                            <div class="key-line key-line-3">
                                <div class="keypad-text-key key-put special-key num-key"><i class="material-icons-round">123</i></div>
                                <div class="keypad-text-key key-put" data-val=".">.</div>
                                <div class="keypad-text-key key-put" data-val=",">,</div>
                                <div class="keypad-text-key key-put" data-val="?">?</div>
                                <div class="keypad-text-key key-put" data-val="!">!</div>
                                <div class="keypad-text-key key-put" data-val="'">'</div>
                                <div class="keypad-text-key key-put special-key backspace-key"><i class="material-icons-round">backspace</i></div>
                            </div>
                        </div>

                        {{--KeyPad WINDOW 5 INTERNATIONAL--}}
                        <div id="key-win-international" class="key-win hide">
                            <div class="key-line key-line-1">
                                <div class="keypad-text-key key-select" data-sel="a">A</div>
                                <div class="keypad-text-key key-select" data-sel="c">C</div>
                                <div class="keypad-text-key key-select" data-sel="e">E</div>
                                <div class="keypad-text-key key-select" data-sel="i">I</div>
                                <div class="keypad-text-key key-select" data-sel="n">N</div>
                                <div class="keypad-text-key key-select" data-sel="o">O</div>
                                <div class="keypad-text-key key-select" data-sel="s">S</div>
                                <div class="keypad-text-key key-select" data-sel="u">U</div>
                            </div>

                            <div class="key-line key-line-2">
                                <div class="key-line key-line-lower international-line-a">
                                    <div class="keypad-text-key key-put" data-val="À">À</div>
                                    <div class="keypad-text-key key-put" data-val="Á">Á</div>
                                    <div class="keypad-text-key key-put" data-val="ª">ª</div>
                                    <div class="keypad-text-key key-put" data-val="Â">Â</div>
                                    <div class="keypad-text-key key-put" data-val="Ä">Ä</div>
                                    <div class="keypad-text-key key-put" data-val="Æ">Æ</div>
                                    <div class="keypad-text-key key-put" data-val="Ã">Ã</div>
                                    <div class="keypad-text-key key-put" data-val="Å">Å</div>
                                    <div class="keypad-text-key key-put" data-val="Ā">Ā</div>
                                </div>
                                <div class="key-line key-line-lower international-line-c hide">
                                    <div class="keypad-text-key key-put" data-val="Ç">Ç</div>
                                    <div class="keypad-text-key key-put" data-val="Ć">Ć</div>
                                    <div class="keypad-text-key key-put" data-val="Č">Č</div>
                                </div>
                                <div class="key-line key-line-lower international-line-e hide">
                                    <div class="keypad-text-key key-put" data-val="È">È</div>
                                    <div class="keypad-text-key key-put" data-val="É">É</div>
                                    <div class="keypad-text-key key-put" data-val="Ê">Ê</div>
                                    <div class="keypad-text-key key-put" data-val="Ë">Ë</div>
                                    <div class="keypad-text-key key-put" data-val="Ę">Ę</div>
                                    <div class="keypad-text-key key-put" data-val="Ė">Ė</div>
                                    <div class="keypad-text-key key-put" data-val="Ē">Ē</div>
                                </div>
                                <div class="key-line key-line-lower international-line-i hide">
                                    <div class="keypad-text-key key-put" data-val="Ì">Ì</div>
                                    <div class="keypad-text-key key-put" data-val="Í">Í</div>
                                    <div class="keypad-text-key key-put" data-val="Î">Î</div>
                                    <div class="keypad-text-key key-put" data-val="Ï">Ï</div>
                                    <div class="keypad-text-key key-put" data-val="Į">Į</div>
                                    <div class="keypad-text-key key-put" data-val="Ī">Ī</div>
                                </div>
                                <div class="key-line key-line-lower international-line-n hide">
                                    <div class="keypad-text-key key-put" data-val="Ñ">Ñ</div>
                                </div>
                                <div class="key-line key-line-lower international-line-o hide">
                                    <div class="keypad-text-key key-put" data-val="Ò">Ò</div>
                                    <div class="keypad-text-key key-put" data-val="Ó">Ó</div>
                                    <div class="keypad-text-key key-put" data-val="º">º</div>
                                    <div class="keypad-text-key key-put" data-val="Ô">Ô</div>
                                    <div class="keypad-text-key key-put" data-val="Ö">Ö</div>
                                    <div class="keypad-text-key key-put" data-val="Õ">Õ</div>
                                    <div class="keypad-text-key key-put" data-val="Œ">Œ</div>
                                    <div class="keypad-text-key key-put" data-val="Ø">Ø</div>
                                    <div class="keypad-text-key key-put" data-val="Ō">Ō</div>
                                </div>
                                <div class="key-line key-line-lower international-line-s hide">
                                    <div class="keypad-text-key key-put" data-val="Ś">Ś</div>
                                    <div class="keypad-text-key key-put" data-val="Š">Š</div>
                                </div>
                                <div class="key-line key-line-lower international-line-u hide">
                                    <div class="keypad-text-key key-put" data-val="Ù">Ù</div>
                                    <div class="keypad-text-key key-put" data-val="Ú">Ú</div>
                                    <div class="keypad-text-key key-put" data-val="Û">Û</div>
                                    <div class="keypad-text-key key-put" data-val="Ü">Ü</div>
                                    <div class="keypad-text-key key-put" data-val="Ū">Ū</div>
                                </div>
                            </div>

                            <div class="key-line key-line-3">
                                <div class="key-line key-line-lower international-line-a">
                                    <div class="keypad-text-key key-put" data-val="à">à</div>
                                    <div class="keypad-text-key key-put" data-val="á">á</div>
                                    <div class="keypad-text-key key-put" data-val="ª">ª</div>
                                    <div class="keypad-text-key key-put" data-val="â">â</div>
                                    <div class="keypad-text-key key-put" data-val="ä">ä</div>
                                    <div class="keypad-text-key key-put" data-val="æ">æ</div>
                                    <div class="keypad-text-key key-put" data-val="ã">ã</div>
                                    <div class="keypad-text-key key-put" data-val="å">å</div>
                                    <div class="keypad-text-key key-put" data-val="ā">ā</div>
                                </div>
                                <div class="key-line key-line-lower international-line-c hide">
                                    <div class="keypad-text-key key-put" data-val="ç">ç</div>
                                    <div class="keypad-text-key key-put" data-val="ć">ć</div>
                                    <div class="keypad-text-key key-put" data-val="č">č</div>
                                </div>
                                <div class="key-line key-line-lower international-line-e hide">
                                    <div class="keypad-text-key key-put" data-val="è">è</div>
                                    <div class="keypad-text-key key-put" data-val="é">é</div>
                                    <div class="keypad-text-key key-put" data-val="ê">ê</div>
                                    <div class="keypad-text-key key-put" data-val="ë">ë</div>
                                    <div class="keypad-text-key key-put" data-val="ę">ę</div>
                                    <div class="keypad-text-key key-put" data-val="ė">ė</div>
                                    <div class="keypad-text-key key-put" data-val="ē">ē</div>
                                </div>
                                <div class="key-line key-line-lower international-line-i hide">
                                    <div class="keypad-text-key key-put" data-val="ì">ì</div>
                                    <div class="keypad-text-key key-put" data-val="í">í</div>
                                    <div class="keypad-text-key key-put" data-val="î">î</div>
                                    <div class="keypad-text-key key-put" data-val="ï">ï</div>
                                    <div class="keypad-text-key key-put" data-val="į">į</div>
                                    <div class="keypad-text-key key-put" data-val="ī">ī</div>
                                </div>
                                <div class="key-line key-line-lower international-line-n hide">
                                    <div class="keypad-text-key key-put" data-val="ñ">ñ</div>
                                </div>
                                <div class="key-line key-line-lower international-line-o hide">
                                    <div class="keypad-text-key key-put" data-val="ò">ò</div>
                                    <div class="keypad-text-key key-put" data-val="ó">ó</div>
                                    <div class="keypad-text-key key-put" data-val="º">º</div>
                                    <div class="keypad-text-key key-put" data-val="ô">ô</div>
                                    <div class="keypad-text-key key-put" data-val="ö">ö</div>
                                    <div class="keypad-text-key key-put" data-val="õ">õ</div>
                                    <div class="keypad-text-key key-put" data-val="œ">œ</div>
                                    <div class="keypad-text-key key-put" data-val="ø">ø</div>
                                    <div class="keypad-text-key key-put" data-val="ō">ō</div>
                                </div>
                                <div class="key-line key-line-lower international-line-s hide">
                                    <div class="keypad-text-key key-put" data-val="ß">ß</div>
                                    <div class="keypad-text-key key-put" data-val="ś">ś</div>
                                    <div class="keypad-text-key key-put" data-val="š">š</div>
                                </div>
                                <div class="key-line key-line-lower international-line-u hide">
                                    <div class="keypad-text-key key-put" data-val="ù">ù</div>
                                    <div class="keypad-text-key key-put" data-val="ú">ú</div>
                                    <div class="keypad-text-key key-put" data-val="û">û</div>
                                    <div class="keypad-text-key key-put" data-val="ü">ü</div>
                                    <div class="keypad-text-key key-put" data-val="ū">ū</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--KEYPAD BOTTOM ROW--}}
                    <div id="key-bottom-row">
                        <div class="key-bottom-row-line email-line">
                            <div class="keypad-text-key key-put bl-bottom" data-val="https://">https://</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val="www.">www.</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val="@">@</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val="gmail">gmail</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val=".com">.com</div>
                        </div>

                        <div class="key-bottom-row-line">
                            <div class="keypad-text-key key-bottom key-put special-key emoji-key"><i class="material-icons-round">emoji_emotions</i></div>
                            <div class="keypad-text-key key-bottom key-put special-key space-key"><i class="material-icons-round" data-val=" ">space_bar</i></div>
                            <div class="keypad-text-key key-bottom key-put special-key return-key"><i class="material-icons-round">keyboard_return</i></div>
                        </div>
                    </div>
                </div>
                </br>
                <div class="dismiss-modal">
                    <div class="dismiss-button-line">
                        <div class="keypad-text-key key-bottom key-put special-key international-key"><i class="material-icons-round">translate</i></div>
                        <div class="keypad-text-key key-bottom key-put special-key num-key"><i class="material-icons-round">123</i></div>
                        <div class="keypad-text-key key-bottom key-put special-key letter-key"><i class="material-icons-round">abc</i></div>
                    </div>
                    <div>
                        <button class="dismiss-keypad-btn dismiss-modal-btn" data-dismiss="modal"><i class="material-icons-round">keyboard_hide</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
