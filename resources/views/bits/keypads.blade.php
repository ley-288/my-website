
{{--PIN KEYPAD--}}
<!-- Modal -->
<div class="modal fade animate" id="registerPinModal" tabindex="-1" role="dialog" aria-labelledby="registerPinModal" aria-hidden="true" style="overflow-y: hidden;">
    <div class="modal-dialog pin-center" role="document">
        <div class="modal-content animate-bottom" style="background-color:transparent!important; margin-top:0;">
            <div class="pin-message">
                <i class="material-icons-round">dialpad</i>
                <p>Please choose a 5 number PIN code</p>
            </div>
            <div class="modal-body registerPinModal">
                <div class="pin-wrapper">
                    <input type="number" data-role="pin" maxlength="5" class="pin-input" placeholder="* * * * *" readonly>
                </div>
                </br>
                </br>
                <div class="keypad-num">
                    <div class="keypad-num-row">
                        <div class="keypad-num-key num-put" data-val="1">1</div>
                        <div class="keypad-num-key num-put" data-val="2">2 <p>ABC</p></div>
                        <div class="keypad-num-key num-put" data-val="3">3<p>DEF</p></div>
                    </div>
                    <div class="keypad-num-row">
                        <div class="keypad-num-key num-put" data-val="4">4<p>GHI</p></div>
                        <div class="keypad-num-key num-put" data-val="5">5<p>JKL</p></div>
                        <div class="keypad-num-key num-put" data-val="6">6<p>MNO</p></div>
                    </div>
                    <div class="keypad-num-row">
                        <div class="keypad-num-key num-put" data-val="7">7<p>PQRS</p></div>
                        <div class="keypad-num-key num-put" data-val="8">8<p>TUV</p></div>
                        <div class="keypad-num-key num-put" data-val="9">9<p>WXYZ</p></div>
                    </div>
                    <div class="keypad-num-row">
                        <div class="keypad-num-key cancel-all" style="background-color:transparent; justify-content:center;"><i class="material-icons-round">delete</i></div>
                        <div class="keypad-num-key num-put" data-val="0">0<p>+</p></div>
                        <div class="keypad-num-key cancel" style="background-color:transparent;justify-content:center;"><i class="material-icons-round">backspace</i></div>
                    </div>
                </div>
                </br>
                <div class="dismiss-numpad">
                    <button class="dismiss-numpad-btn dismiss-modal-btn" data-dismiss="modal">
                        @lang('applicazione.cancel')
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

{{--KEYBOARD KEYPAD--}}
<!-- Modal -->
<div class="modal fade animate" id="keyPadModal" tabindex="-1" role="dialog" aria-labelledby="keyPadModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="close-box" style="height: 50vh;" data-dismiss="modal"></div>
        <div class="modal-content animate-bottom" style="background-color:transparent!important; border:none">
            <div class="modal-body keyPadModal" style="padding:0;">
                <div>
                <div class="temp-input-ph-center">
                    <h5 class="temp-input-ph-center"></h5>
                </div>
                {{--<input type="text" class="temp-input form-control" style="border: none;" readonly>--}}
                    <div id="temp" class="temp-input form-control tt-overlay" style="background-color:transparent!important;" contenteditable="true">
                    </div>
                </div>
                <div class="emoji-bar"></div>
                <div class="keypad-text">
                    <div id="keypad-keys">
                        {{--KeyPad WINDOW 1 UPPERCASE--}}
                        <div id="key-win-uppercase" class="key-win">
                            <div class="key-line key-line-1">
                                <div class="keypad-text-key key-put cap" data-val="Q">Q</div>
                                <div class="keypad-text-key key-put cap" data-val="W">W</div>
                                <div class="keypad-text-key key-put cap" data-val="E">E</div>
                                <div class="keypad-text-key key-put cap" data-val="R">R</div>
                                <div class="keypad-text-key key-put cap" data-val="T">T</div>
                                <div class="keypad-text-key key-put cap" data-val="Y">Y</div>
                                <div class="keypad-text-key key-put cap" data-val="U">U</div>
                                <div class="keypad-text-key key-put cap" data-val="I">I</div>
                                <div class="keypad-text-key key-put cap" data-val="O">O</div>
                                <div class="keypad-text-key key-put cap" data-val="P">P</div>
                            </div>
                            <div class="key-line key-line-2">
                                <div class="keypad-text-key key-put cap" data-val="A">A</div>
                                <div class="keypad-text-key key-put cap" data-val="S">S</div>
                                <div class="keypad-text-key key-put cap" data-val="D">D</div>
                                <div class="keypad-text-key key-put cap" data-val="F">F</div>
                                <div class="keypad-text-key key-put cap" data-val="G">G</div>
                                <div class="keypad-text-key key-put cap" data-val="H">H</div>
                                <div class="keypad-text-key key-put cap" data-val="J">J</div>
                                <div class="keypad-text-key key-put cap" data-val="K">K</div>
                                <div class="keypad-text-key key-put cap" data-val="L">L</div>
                            </div>
                            <div class="key-line key-line-3">
                                <div class="keypad-text-key key-put special-key shift-key"><i   class="material-icons-round">keyboard_double_arrow_down</i></div>
                                <div class="keypad-text-key key-put cap" data-val="Z">Z</div>
                                <div class="keypad-text-key key-put cap" data-val="X">X</div>
                                <div class="keypad-text-key key-put cap" data-val="C">C</div>
                                <div class="keypad-text-key key-put cap" data-val="V">V</div>
                                <div class="keypad-text-key key-put cap" data-val="B">B</div>
                                <div class="keypad-text-key key-put cap" data-val="N">N</div>
                                <div class="keypad-text-key key-put cap" data-val="M">M</div>
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

                        {{--KeyPad WINDOW 6 EMOJI--}}

                        <div id="key-win-emoji" class="key-win hide">
                            <div class="emo-scroll">
                                <div class="emo-line-lower emo-line-face">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😀">😀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😃">😃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😄" data-filter="@lang('emoji.happy')">😄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😁">😁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😆" data-filter="haa">😆</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥹" data-filter="aww">🥹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😅">😅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😂" data-filter="@lang('emoji.haha')">😂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤣" data-filter="lmao">🤣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥲">🥲</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="☺️">☺️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😊" data-filter="@lang('emoji.smile')">😊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😇" data-filter="saint">😇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙂">🙂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙃">🙃</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😉" data-filter="wink">😉</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😌" data-filter="smug">😌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😍" data-filter="love">😍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥰">🥰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😘">😘</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😗">😗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😙">😙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😚" data-filter="kiss">😚</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😋">😋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😛" data-filter="lol">😛</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😝">😝</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😜" data-filter="joking">😜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤪" data-filter="silly">🤪</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤨" data-filter="hmm">🤨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧐" data-filter="sure">🧐</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤓" data-filter="nerd">🤓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😎" data-filter="cool">😎</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥸" data-filter="marx">🥸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤩" data-filter="wow">🤩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥳" data-filter="woo">🥳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😏" data-filter="hehe">😏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😒">😒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😞" data-filter="sad">😞</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😔">😔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😟">😟</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😕" data-filter="sorry">😕</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙁" data-filter="aww">🙁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="☹️">☹️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😣" data-filter="upset">😣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😖" data-filter="eww">😖</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😫" data-filter="ahh">😫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😩">😩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥺" data-filter="cute">🥺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😢" data-filter="tear">😢</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😭" data-filter="cry">😭</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😤" data-filter="no">😤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😠">😠</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😡" data-filter="angry">😡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤬" data-filter="fuck">🤬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤯" data-filter="mindblown">🤯</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😳" data-filter="embarassed">😳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥵">🥵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥶" data-filter="ice">🥶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😶‍🌫️">😶‍🌫️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😱" data-filter="hhh">😱</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😨" data-filter="whaat">😨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😰">😰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😥" data-filter="sorry">😥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😓">😓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤗" data-filter="hug">🤗</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤔">🤔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫣" data-filter="peak">🫣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤭" data-filter="bashful">🤭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫢">🫢</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫡" data-filter="sir">🫡</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤫" data-filter="shh">🤫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫠" data-filter="melt">🫠</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤥" data-filter="lie">🤥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😶">😶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫥">🫥</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😐">😐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫤" data-filter="rubbish">🫤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😑">😑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😬" data-filter="eee">😬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙄">🙄</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😯" data-filter="ooo">😯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😦">😦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😧" data-filter="whah">😧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😮">😮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😲">😲</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥱" data-filter="yawn">🥱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😴" data-filter="sleepy">😴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤤" data-filter="yum">🤤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😪" data-filter="sigh">😪</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😮‍💨">😮‍💨</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😵">😵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😵‍💫" data-filter="weird">😵‍💫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤐" data-filter="zip">🤐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥴" data-filter="drunk">🥴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤢" data-filter="eww">🤢</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤮" data-filter="blugh">🤮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤧" data-filter="sneeze">🤧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😷" data-filter="covid">😷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤒" data-filter="sick">🤒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤕" data-filter="ouch">🤕</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤑" data-filter="rich">🤑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤠" data-filter="cowboy">🤠</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😈" data-filter="evil">😈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👿">👿</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👹" data-filter="demon">👹</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👺">👺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤡" data-filter="clown">🤡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💩" data-filter="shit">💩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👻" data-filter="ghost">👻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💀" data-filter="skull">💀</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="☠️" data-filter="dead">☠️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👽" data-filter="alien">👽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👾" data-filter="invader">👾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤖" data-filter="robot">🤖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎃" data-filter="halloween">🎃</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😺">😺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😸">😸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😹">😹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😻">😻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😼">😼</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😽">😽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙀">🙀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😿">😿</div>
                                        <div class="keypad-emo-key key-put emo" data-val="😾">😾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫶" data-filter="bale">🫶</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤲">🤲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👐" data-filter="jazz hands">👐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙌" data-filter="high">🙌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👏" data-filter="clap">👏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤝" data-filter="shake">🤝</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👍" data-filter="ok">👍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👎" data-filter="no">👎</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👊" data-filter="fist">👊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="✊" data-filter="solidarity">✊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤛">🤛</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤜" data-filter="bump">🤜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤞" data-filter="hope">🤞</div>
                                        <div class="keypad-emo-key key-put emo" data-val="✌️" data-filter="peace">✌️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫰" data-filter="jobs">🫰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤟">🤟</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤘" data-filter="rock">🤘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👌" data-filter="nice">👌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤌">🤌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤏">🤏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫳">🫳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🫴">🫴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👈">👈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👉">👉</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👆">👆</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👇">👇</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="☝️">☝️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="✋">✋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤚">🤚</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🖐">🖐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🖖" data-filter="spock">🖖</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👋" data-filter="wave">👋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤙" data-filter="shakabra">🤙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫲">🫲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫱">🫱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💪" data-filter="muscle">💪</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦾">🦾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🖕">🖕</div>
                                        <div class="keypad-emo-key key-put emo" data-val="✍️">✍️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙏">🙏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫵" data-filter="sam">🫵</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦶" data-filter="foot">🦶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦵" data-filter="leg">🦵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦿">🦿</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💄" data-filter="lipstick">💄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💋">💋</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👄">👄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫦" data-filter="lips">🫦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦷" data-filter="tooth">🦷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👅" data-filter="tongue">👅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👂" data-filter="ear">👂</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦻">🦻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👃" data-filter="nose">👃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👣" data-filter="feet">👣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👁" data-filter="eye">👁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👀" data-filter="eyes">👀</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🫀" data-filter="heart">🫀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫁" data-filter="lungs">🫁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧠" data-filter="brain">🧠</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🗣" data-filter="shout">🗣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👤">👤</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👥">👥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫂">🫂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👶">👶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👧">👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧒">🧒</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👦">👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩">👩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑">🧑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨">👨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🦱">👩‍🦱</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🦱">🧑‍🦱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🦱">👨‍🦱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🦰">👩‍🦰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🦰">🧑‍🦰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🦰">👨‍🦰</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👱‍♀️">👱‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👱">👱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👱‍♂️">👱‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🦳">👩‍🦳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🦳">🧑‍🦳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🦳">👨‍🦳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🦲">👩‍🦲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🦲">🧑‍🦲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🦲">👨‍🦲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧔‍♀️">🧔‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧔">🧔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧔‍♂️">🧔‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👵">👵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧓">🧓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👴">👴</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👲">👲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👳‍♀️">👳‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👳">👳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👳‍♂️">👳‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧕">🧕</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👮‍♀️" data-filter="police">👮‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👮" data-filter="police">👮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👮‍♂️" data-filter="police">👮‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👷‍♀️" data-filter="engineer">👷‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👷" data-filter="engineer">👷</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👷‍♂️" data-filter="engineer">👷‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💂‍♀️" data-filter="guard">💂‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💂" data-filter="guard">💂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💂‍♂️" data-filter="guard">💂‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕵️‍♀️" data-filter="inspector">🕵️‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🕵️" data-filter="inspector">🕵️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕵️‍♂️" data-filter="inspector">🕵️‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍⚕️" data-filter="doctor">👩‍⚕️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍⚕️" data-filter="doctor">🧑‍⚕️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍⚕️" data-filter="doctor">👨‍⚕️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🌾" data-filter="farmer">👩‍🌾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🌾" data-filter="farmer">🧑‍🌾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🌾" data-filter="farmer">👨‍🌾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🍳" data-filter="chef">👩‍🍳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🍳" data-filter="chef">🧑‍🍳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🍳" data-filter="chef">👨‍🍳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🎓" data-filter="graduate">👩‍🎓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🎓" data-filter="graduate">🧑‍🎓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🎓" data-filter="graduate">👨‍🎓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🎤" data-filter="bowie">👩‍🎤</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🎤" data-filter="bowie">🧑‍🎤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🎤" data-filter="bowie">👨‍🎤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🏫" data-filter="teacher">👩‍🏫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🏫" data-filter="teacher">🧑‍🏫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🏫" data-filter="teacher">👨‍🏫</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🏭" data-filter="welder">👩‍🏭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🏭" data-filter="welder">🧑‍🏭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🏭" data-filter="welder">👨‍🏭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍💻" data-filter="student">👩‍💻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍💻" data-filter="student">🧑‍💻</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👨🏻‍💻" data-filter="student">👨🏻‍💻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍💼">👩‍💼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍💼">🧑‍💼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍💼">👨‍💼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🔧" data-filter="mechanic">👩‍🔧</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🔧" data-filter="mechanic">🧑‍🔧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🔧" data-filter="mechanic">👨‍🔧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🔬" data-filter="scientist">👩‍🔬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🔬" data-filter="scientist">🧑‍🔬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🔬" data-filter="scientist">👨‍🔬</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🎨" data-filter="artist">👩‍🎨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🎨" data-filter="artist">🧑‍🎨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🎨" data-filter="artist">👨‍🎨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🚒" data-filter="firefighter">👩‍🚒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🚒" data-filter="firefighter">🧑‍🚒</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🚒" data-filter="firefighter">👨‍🚒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍✈️" data-filter="chauffeur">👩‍✈️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍✈️" data-filter="chauffeur">🧑‍✈️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍✈️" data-filter="chauffeur">👨‍✈️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🚀" data-filter="astronaut">👩‍🚀</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🚀" data-filter="astronaut">🧑‍🚀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🚀" data-filter="astronaut">👨‍🚀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍⚖️" data-filter="musician">👩‍⚖️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍⚖️" data-filter="musician">🧑‍⚖️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍⚖️" data-filter="musician">👨‍⚖️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👰‍♀️" data-filter="bride">👰‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👰" data-filter="bride">👰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👰‍♂️" data-filter="bride">👰‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤵‍♀️" data-filter="groom">🤵‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤵" data-filter="groom">🤵</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤵‍♂️" data-filter="groom">🤵‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👸" data-filter="queen">👸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫅">🫅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤴" data-filter="king">🤴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥷" data-filter="ninja">🥷</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦸‍♀️" data-filter="superhero">🦸‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦸" data-filter="superhero">🦸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦸‍♂️" data-filter="superhero">🦸‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦹‍♀️" data-filter="villain">🦹‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦹" data-filter="villain">🦹</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦹‍♂️" data-filter="villain">🦹‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤶">🤶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🎄">🧑‍🎄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎅" data-filter="santa">🎅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧙‍♀️" data-filter="wizard">🧙‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧙" data-filter="wizard">🧙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧙‍♂️" data-filter="gandalf">🧙‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧝‍♀️" data-filter="galadriel">🧝‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧝" data-filter="elf">🧝</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧝‍♂️" data-filter="legolas">🧝‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧌" data-filter="goblin">🧌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧛‍♀️" data-filter="vampire">🧛‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧛" data-filter="vampire">🧛</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧛‍♂️" data-filter="dracula">🧛‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧟‍♀️" data-filter="zombie">🧟‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧟" data-filter="zombie">🧟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧟‍♂️" data-filter="zombie">🧟‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧞‍♀️" data-filter="genie">🧞‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧞" data-filter="genie">🧞</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧞‍♂️" data-filter="genie">🧞‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧜‍♀️" data-filter="mermaid">🧜‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧜" data-filter="mermaid">🧜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧜‍♂️" data-filter="mermaid">🧜‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧚‍♀️" data-filter="tinkerbell">🧚‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧚" data-filter="fairy">🧚</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧚‍♂️" data-filter="fairy">🧚‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👼" data-filter="cupid">👼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤰" data-filter="pregnant">🤰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫄" data-filter="pregnant">🫄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫃" data-filter="pregnant">🫃</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤱" data-filter="newborn">🤱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🍼" data-filter="newborn">👩‍🍼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🍼" data-filter="newborn">🧑‍🍼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🍼" data-filter="newborn">👨‍🍼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙇‍♀️">🙇‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🙇">🙇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙇‍♂️">🙇‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💁‍♀️">💁‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💁">💁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💁‍♂️">💁‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🙅‍♀️">🙅‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙅">🙅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙅‍♂️">🙅‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙆‍♀️">🙆‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙆">🙆</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🙆‍♂️">🙆‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙋‍♀️" data-filter="me">🙋‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙋" data-filter="me">🙋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙋‍♂️" data-filter="me">🙋‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧏‍♀️">🧏‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧏">🧏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧏‍♂️">🧏‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤦‍♀️" data-filter="facepalm">🤦‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤦" data-filter="facepalm">🤦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤦‍♂️" data-filter="facepalm">🤦‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤷‍♀️" data-filter="dunno">🤷‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤷" data-filter="dunno">🤷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤷‍♂️" data-filter="dunno">🤷‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙎‍♀️">🙎‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙎">🙎</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🙎‍♂️">🙎‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙍‍♀️">🙍‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙍">🙍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙍‍♂️">🙍‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💇‍♀️" data-filter="haircut">💇‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="💇" data-filter="haircut">💇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💇‍♂️" data-filter="haircut">💇‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💆‍♀️" data-filter="massage">💆‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💆" data-filter="massage">💆</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💆‍♂️" data-filter="massage">💆‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧖‍♀️" data-filter="shower">🧖‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧖" data-filter="shower">🧖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧖‍♂️" data-filter="shower">🧖‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💅" data-filter="nails">💅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤳" data-filter="selfie">🤳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧖‍♀️">🧖‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💃" data-filter="flamengo">💃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕺" data-filter="travolta">🕺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👯‍♀️" data-filter="playboy">👯‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👯">👯</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👯‍♂️">👯‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕴">🕴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🦽">👩‍🦽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🦽">🧑‍🦽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🦽">👨‍🦽</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🦼">👩‍🦼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🦼">🧑‍🦼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🦼">👨‍🦼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚶‍♀️">🚶‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚶">🚶</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🚶‍♂️">🚶‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍🦯">👩‍🦯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧑‍🦯">🧑‍🦯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍🦯">👨‍🦯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧎‍♀️" data-filter="pray">🧎‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧎" data-filter="pray">🧎</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧎‍♂️" data-filter="pray">🧎‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏃‍♀️" data-filter="run">🏃‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏃" data-filter="run">🏃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏃‍♂️" data-filter="run">🏃‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧍‍♀️">🧍‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧍">🧍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧍‍♂️">🧍‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👫">👫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👭">👭</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👬">👬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍❤️‍👨">👩‍❤️‍👨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍❤️‍👩">👩‍❤️‍👩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💑">💑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍❤️‍👨">👨‍❤️‍👨</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍❤️‍💋‍👨">👩‍❤️‍💋‍👨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍❤️‍💋‍👩">👩‍❤️‍💋‍👩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💏">💏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍❤️‍💋‍👨">👨‍❤️‍💋‍👨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👩‍👦">👨‍👩‍👦</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👩‍👧">👨‍👩‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👩‍👧‍👦">👨‍👩‍👧‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👩‍👦‍👦">👨‍👩‍👦‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👩‍👧‍👧">👨‍👩‍👧‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👩‍👦">👩‍👩‍👦</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👩‍👧">👩‍👩‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👩‍👧‍👦">👩‍👩‍👧‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👩‍👦‍👦">👩‍👩‍👦‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👩‍👧‍👧">👩‍👩‍👧‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👨‍👦">👨‍👨‍👦</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👨‍👧">👨‍👨‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👨‍👧‍👦">👨‍👨‍👧‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👨‍👦‍👦">👨‍👨‍👦‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👨‍👧‍👧">👨‍👨‍👧‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👦">👩‍👦</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👧">👩‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👧‍👦">👩‍👧‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👦‍👦">👩‍👦‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👩‍👧‍👧">👩‍👧‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👦">👨‍👦</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👧">👨‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👧‍👦">👨‍👧‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👦‍👦">👨‍👦‍👦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👨‍👧‍👧">👨‍👧‍👧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪢" data-filter="knot">🪢</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧶" data-filter="cotton">🧶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧵" data-filter="spool">🧵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪡" data-filter="stitch">🪡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧥" data-filter="trench">🧥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥼" data-filter="labcoat">🥼</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦺" data-filter="hivis">🦺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👚" data-filter="tshirt">👚</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👕" data-filter="thisrt">👕</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👖" data-filter="jeans">👖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🩲">🩲</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🩳" data-filter="shorts">🩳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👔" data-filter="shirt">👔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👗" data-filter="dress">👗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👙" data-filter="bikini">👙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🩱" data-filter="costume">🩱</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👘" data-filter="kimono">👘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥻">🥻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🩴" data-filter="flipf">🩴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥿" >🥿</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👠" data-filter="heels">👠</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👡" data-filter="flats">👡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👢" data-filter="boot">👢</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👞" data-filter="shoe">👞</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👟" data-filter="trainer">👟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥾">🥾</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧦" data-filter="sock">🧦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧤" data-filter="glove">🧤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧣" data-filter="scarf">🧣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎩" data-filter="tophat">🎩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧢" data-filter="cap">🧢</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="👒" data-filter="hat">👒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎓" data-filter="graduation">🎓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛑">⛑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪖" data-filter="helmet">🪖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👑" data-filter="crown">👑</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="💍" data-filter="ring">💍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👝" data-filter="bag">👝</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👛" data-filter="purse">👛</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👜" data-filter="birkin">👜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💼" data-filter="briefcase">💼</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎒" data-filter="backpack">🎒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧳" data-filter="suitcase">🧳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="👓" data-filter="glasses">👓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕶" data-filter="sunglasses">🕶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥽" data-filter="goggles">🥽</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌂" data-filter="umbrella">🌂</div>
                                    </div>
                                </div>
                                <div class="emo-line-lower emo-line-nature">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐶" data-filter="puppy">🐶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐱" data-filter="kitty">🐱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐭" data-filter="rat">🐭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐹" data-filter="mouse">🐹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐰" data-filter="rabbit">🐰</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦊" data-filter="fox">🦊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐻" data-filter="bear">🐻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐼" data-filter="panda">🐼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐻‍❄️" data-filter="polar">🐻‍❄️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐨" data-filter="koala">🐨</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐯" data-filter="tiger">🐯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦁" data-filter="lion">🦁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐮" data-filter="cow">🐮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐷" data-filter="pig">🐷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐽" data-filter="pig">🐽</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐸" data-filter="frog">🐸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐵" data-filter="monkey">🐵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙈" data-filter="cheeky">🙈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙉">🙉</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🙊">🙊</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐒" data-filter="monkey">🐒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐔" data-filter="chicken">🐔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐧" data-filter="penguin">🐧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐦" data-filter="pigeon">🐦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐤" data-filter="chick">🐤</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐣" data-filter="chick">🐣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐥">🐥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦆" data-filter="duck">🦆</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦅" data-filter="eagle">🦅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦉" data-filter="owl">🦉</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦇" data-filter="bat">🦇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐺" data-filter="wolf">🐺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐗" data-filter="boar">🐗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐴" data-filter="horse">🐴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦄" data-filter="unicorn">🦄</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐝" data-filter="bee">🐝</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪱" data-filter="snake">🪱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐛" data-filter="caterpillar">🐛</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦋" data-filter="butterfly">🦋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐌" data-filter="snail">🐌</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐞" data-filter="ladybird">🐞</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐜" data-filter="ant">🐜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪰" data-filter="fly">🪰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪲" data-filter="bug">🪲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪳" data-filter="roach">🪳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦟" data-filter="mosquito">🦟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦗" data-filter="grasshopper">🦗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕷" data-filter="spider">🕷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕸" data-filter="web">🕸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦂" data-filter="scorpion">🦂</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐢" data-filter="tortoise">🐢</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐍" data-filter="snake">🐍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦎" data-filter="lizard">🦎</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦖" data-filter="dinosaur">🦖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦕" data-filter="dinosaur">🦕</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐙" data-filter="octopus">🐙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦑" data-filter="squid">🦑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦐" data-filter="shrimp">🦐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦞" data-filter="lobster">🦞</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦀" data-filter="crab">🦀</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐡" data-filter="blowfish">🐡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐠" data-filter="fish">🐠</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐟" data-filter="fish">🐟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐬" data-filter="dolphin">🐬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐳" data-filter="whale">🐳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐋" data-filter="whale">🐋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦈" data-filter="shark">🦈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦭" data-filter="seal">🦭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐊" data-filter="crocodile">🐊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐅" data-filter="tiger">🐅</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐆" data-filter="leopard">🐆</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦓" data-filter="zebra">🦓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦍" data-filter="gorilla">🦍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦧" data-filter="orangutan">🦧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦣" data-filter="mammoth">🦣</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐘" data-filter="elephant">🐘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦛" data-filter="hippo">🦛</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦏" data-filter="rhino">🦏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐪" data-filter="camel">🐪</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐫" data-filter="camel">🐫</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦒" data-filter="giraffe">🦒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦘" data-filter="kangaroo">🦘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦬" data-filter="bison">🦬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐃" data-filter="buffalo">🐃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐂" data-filter="bull">🐂</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐄" data-filter="cow">🐄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐎" data-filter="horse">🐎</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐖" data-filter="pig">🐖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐏" data-filter="ram">🐏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐑" data-filter="sheep">🐑</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦙" data-filter="alpaca">🦙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐐" data-filter="goat">🐐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦌" data-filter="deer">🦌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐕" data-filter="dog">🐕</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐩" data-filter="poodle">🐩</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦮" data-filter="guidedog">🦮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐕‍🦺" data-filter="labrador">🐕‍🦺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐈" data-filter="cat">🐈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐈‍⬛" data-filter="blackcat">🐈‍⬛</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪶" data-filter="gump">🪶</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐓" data-filter="hen">🐓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦃" data-filter="turkey">🦃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦤" data-filter="dodo">🦤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦚" data-filter="peacock">🦚</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦜" data-filter="peacock">🦜</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦢" data-filter="swan">🦢</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦩" data-filter="flamingo">🦩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🕊" data-filter="dove">🕊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐇" data-filter="rabbit">🐇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦝" data-filter="racoon">🦝</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🦨" data-filter="skunk">🦨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦡">🦡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦫" data-filter="beaver">🦫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦦" data-filter="otter">🦦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦥" data-filter="pslothray">🦥</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐁" data-filter="mouse">🐁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐀" data-filter="rat">🐀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐿" data-filter="squirrel">🐿</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦔" data-filter="hedgehog">🦔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐾" data-filter="tracks">🐾</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🐉" data-filter="dragon">🐉</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐲" data-filter="dragon">🐲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌵" data-filter="cactus">🌵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎄" data-filter="christmas">🎄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌲" data-filter="tree">🌲</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌳" data-filter="tree">🌳</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌴" data-filter="palm">🌴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪵" data-filter="wood">🪵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌱" data-filter="plant">🌱</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌿" data-filter="leaves">🌿</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="☘️" data-filter="clover">☘️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍀" data-filter="shamrock">🍀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎍">🎍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪴" data-filter="houseplant">🪴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎋">🎋</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍃">🍃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍂" data-filter="autumn">🍂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍁" data-filter="maple">🍁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪺" data-filter="nest">🪺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪹" data-filter="nest">🪹</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍄" data-filter="mushroom">🍄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🐚" data-filter="shell">🐚</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪸" data-filter="coral">🪸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪨" data-filter="rock">🪨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌾">🌾</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="💐" data-filter="flowers">💐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌷" data-filter="flower">🌷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌹" data-filter="rose">🌹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥀" data-filter="dead">🥀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪷" data-filter="lilly">🪷</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌺" data-filter="hawaii">🌺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌸" data-filter="flower">🌸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌼" data-filter="daisy">🌼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌻" data-filter="sunflower">🌻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌞">🌞</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌝" data-filter="moon">🌝</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌛" data-filter="moon">🌛</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌜" data-filter="moon">🌜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌚" data-filter="moon">🌚</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌕" data-filter="moon">🌕</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌖" data-filter="moon">🌖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌗">🌗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌘">🌘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌑">🌑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌒">🌒</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌓">🌓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌔">🌔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌙">🌙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌎" data-filter="earth">🌎</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌍" data-filter="earth">🌍</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌏" data-filter="earth">🌏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪐" data-filter="saturn">🪐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💫">💫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⭐️" data-filter="star">⭐️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌟">🌟</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="✨" data-filter="magic">✨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⚡️" data-filter="bolt">⚡️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="☄️" data-filter="meteor">☄️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💥" data-filter="explo">💥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🔥" data-filter="fire">🔥</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌪" data-filter="tornado">🌪</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌈" data-filter="rainbow">🌈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="☀️">☀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌤">🌤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛅️" data-filter="overcase">⛅️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌥">🌥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="☁️">☁️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌦">🌦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌧" data-filter="rain">🌧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛈">⛈</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌩" data-filter="storm">🌩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌨">🌨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="❄️">❄️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="☃️">☃️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛄️">⛄️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌬" data-filter="wind">🌬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💨" data-filter="fast">💨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💧" data-filter="drip">💧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="💦">💦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫧" data-filter="bubble">🫧</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="☔️">☔️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="☂️">☂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌊" data-filter="wave">🌊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌫" data-filter="fog">🌫</div>
                                    </div>
                                </div>
                                <div class="emo-line-lower emo-line-food">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍏" data-filter="apple">🍏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍎" data-filter="apple">🍎</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍐" data-filter="pear">🍐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍊" data-filter="orange">🍊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍋" data-filter="lemon">🍋</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍌" data-filter="banana">🍌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍉" data-filter="watermeon">🍉</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍇" data-filter="grapes">🍇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍓" data-filter="strawberry">🍓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫐" data-filter="blueberry">🫐</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍈" data-filter="melon">🍈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍒" data-filter="cherry">🍒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍑" data-filter="thic">🍑</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥭" data-filter="mango">🥭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍍" data-filter="pineapple">🍍</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥥" data-filter="coconut">🥥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥝" data-filter="kiwi">🥝</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍅" data-filter="tomato">🍅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍆" data-filter="eggplant">🍆</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥑" data-filter="papaya">🥑</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥦" data-filter="broccoli">🥦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥬" data-filter="lettuce">🥬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥒" data-filter="cucumber">🥒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌶" data-filter="chilli">🌶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫑" data-filter="pepper">🫑</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌽" data-filter="corn">🌽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥕" data-filter="carrot">🥕</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫒" data-filter="olive">🫒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧄" data-filter="garlic">🧄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧅" data-filter="onion">🧅</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥔" data-filter="potato">🥔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍠" data-filter="ginger">🍠</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥐" data-filter="croissant">🥐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥯" data-filter="bagel">🥯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍞" data-filter="bread">🍞</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥖" data-filter="baguette">🥖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥨" data-filter="pretzel">🥨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧀" data-filter="cheese">🧀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥚" data-filter="egg">🥚</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍳" data-filter="egg">🍳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧈" data-filter="butter">🧈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥞" data-filter="pancakes">🥞</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧇" data-filter="waffles">🧇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥓" data-filter="bacon">🥓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥩" data-filter="steak">🥩</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍗">🍗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍖" data-filter="meat">🍖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦴" data-filter="bone">🦴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌭" data-filter="hotdog">🌭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍔" data-filter="mcdonalds">🍔</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍟" data-filter="fries">🍟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍕" data-filter="pizza">🍕</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫓" data-filter="pie">🫓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥪" data-filter="sandwich">🥪</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥙">🥙</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧆">🧆</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌮" data-filter="taco">🌮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🌯" data-filter="burrito">🌯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫔" data-filter="tamale">🫔</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥗" data-filter="salad">🥗</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥘" data-filter="curry">🥘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫕">🫕</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥫" data-filter="soup">🥫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫙">🫙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍝" data-filter="spaghetti">🍝</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍜" data-filter="noodles">🍜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍲">🍲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍛">🍛</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍣" data-filter="sushi">🍣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍱">🍱</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥟" data-filter="pasty">🥟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🦪">🦪</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍤" data-filter="prawn">🍤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍙" data-filter="sushi">🍙</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍚" data-filter="rice">🍚</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍘">🍘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍥">🍥</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥠" data-filter="fortune">🥠</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥮">🥮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍢">🍢</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍡">🍡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍧">🍧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍨">🍨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍦" data-filter="ice-cream">🍦</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥧" data-filter="pie">🥧</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧁">🧁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍰" data-filter="cake">🍰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎂" data-filter="birthdat">🎂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍮">🍮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍭" data-filter="lollipop">🍭</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍬" data-filter="sweet">🍬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍫" data-filter="chocolate">🍫</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍿" data-filter="popcorn">🍿</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍩" data-filter="donut">🍩</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍪" data-filter="cookie">🍪</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🌰" data-filter="chestnut">🌰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥜" data-filter="peanut">🥜</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫘" data-filter="beans">🫘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍯" data-filter="honey">🍯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥛" data-filter="milk">🥛</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🫗">🫗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍼" data-filter="baby">🍼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🫖" data-filter="teapot">🫖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="☕️" data-filter="coffee">☕️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍵" data-filter="soup">🍵</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧃" data-filter="juice">🧃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥤" data-filter="coke">🥤</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧋" data-filter="frappe">🧋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍶" data-filter="saki">🍶</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍺" data-filter="beer">🍺</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍻" data-filter="cheers">🍻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥂" data-filter="celebrate">🥂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍷" data-filter="wine">🍷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥃" data-filter="whisky">🥃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍸" data-filter="martini">🍸</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍹" data-filter="cocktail">🍹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧉">🧉</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍾" data-filter="champagne">🍾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧊" data-filter="ice">🧊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥄" data-filter="spoon">🥄</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🍴" data-filter="fork">🍴</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🍽" data-filter="dinner">🍽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥣" data-filter="cereal">🥣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥡" data-filter="takeaway">🥡</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥢" data-filter="chopsticks">🥢</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🧂" data-filter="salt">🧂</div>
                                    </div>
                                </div>
                                <div class="emo-line-lower emo-line-activity">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="⚽️" data-filter="football">⚽️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏀" data-filter="basketball">🏀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏈" data-filter="football">🏈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⚾️" data-filter="baseball">⚾️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥎" data-filter="softball">🥎</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎾" data-filter="tennis">🎾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏐" data-filter="volleyball">🏐</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏉" data-filter="rugby">🏉</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥏" data-filter="frisbee">🥏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎱" data-filter="pool">🎱</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🪀">🪀</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏓" data-filter="pong">🏓</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏸" data-filter="badminton">🏸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏒" data-filter="hockey">🏒</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏑" data-filter="hockey">🏑</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥍" data-filter="lacrosse">🥍</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏏" data-filter="cricket">🏏</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪃" data-filter="salaboomerangd">🪃</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥅"  data-filter="hockey">🥅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛳️" data-filter="golf">⛳️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🪁" data-filter="salkitead">🪁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🛝" data-filter="slide">🛝</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏹" data-filter="archery">🏹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎣" data-filter="fishing">🎣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤿" data-filter="scuba">🤿</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🥊" data-filter="boxing">🥊</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥋" data-filter="karate">🥋</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎽">🎽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🛹" data-filter="skate">🛹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🛼" data-filter="roller">🛼</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🛷" data-filter="sled">🛷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛸" data-filter="skate">⛸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥌" data-filter="curling">🥌</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎿" data-filter="skii">🎿</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛷" data-filter="skiing">⛷</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🏂" data-filter="snowboarding">🏂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪂" data-filter="parachute">🪂</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏋️‍♀️" data-filter="squat">🏋️‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏋️" data-filter="squat">🏋️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏋️‍♂️" data-filter="squat">🏋️‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤼‍♀️" data-filter="wrestling">🤼‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤼" data-filter="wrestling">🤼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤼‍♂️" data-filter="wrestling">🤼‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤸‍♀️" data-filter="gymnastics">🤸‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤸" data-filter="gymnastics">🤸</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤸‍♂️" data-filter="gymnastics">🤸‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛹️‍♀️" data-filter="basketball">⛹️‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛹️" data-filter="basketball">⛹️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="⛹️‍♂️" data-filter="basketball">⛹️‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤺" data-filter="fencing">🤺</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🤾‍♀️" data-filter="handball">🤾‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤾" data-filter="handball">🤾</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤾‍♂️" data-filter="handball">🤾‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏌️‍♀️" data-filter="golf">🏌️‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏌️" data-filter="golf">🏌️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🏌️‍♂️" data-filter="golf">🏌️‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏇" data-filter="horse">🏇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧘‍♀️" data-filter="yoga">🧘‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧘" data-filter="yoga">🧘</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧘‍♂️" data-filter="yoga">🧘‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🏄‍♀️" data-filter="surf">🏄‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏄" data-filter="surf">🏄</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏄‍♂️" data-filter="surf">🏄‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏊‍♀️" data-filter="swimming">🏊‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏊" data-filter="swimming">🏊</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🏊‍♂️" data-filter="swimming">🏊‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤽‍♀️" data-filter="water-polo">🤽‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤽" data-filter="water-polo">🤽</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤽‍♂️" data-filter="water-polo">🤽‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚣‍♀️" data-filter="rowing">🚣‍♀️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🚣" data-filter="rowing">🚣</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚣‍♂️" data-filter="rowing">🚣‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧗‍♀️" data-filter="climbing">🧗‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧗" data-filter="climbing">🧗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧗‍♂️" data-filter="climbing">🧗‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🚵‍♀️" data-filter="cycling">🚵‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚵" data-filter="cycling">🚵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚵‍♂️" data-filter="cycling">🚵‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚴‍♀️" data-filter="cycling">🚴‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🚴" data-filter="cycling">🚴</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🚴‍♂️" data-filter="cycling">🚴‍♂️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏆" data-filter="trophy">🏆</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥇" data-filter="gold">🥇</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥈" data-filter="silver">🥈</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥉" data-filter="bronze">🥉</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🏅" data-filter="medal">🏅</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎖" data-filter="medal">🎖</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🏵">🏵</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎗" data-filter="ribbon">🎗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎫" data-filter="ticket">🎫</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎟" data-filter="admission">🎟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎪" data-filter="circus">🎪</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤹‍♀️" data-filter="juggle">🤹‍♀️</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤹" data-filter="juggle">🤹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🤹‍♂️" data-filter="juggle">🤹‍♂️</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎭" data-filter="theater">🎭</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🩰" data-filter="ballet">🩰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎨" data-filter="paint">🎨</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎬" data-filter="movie">🎬</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎤" data-filter="sing">🎤</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎧" data-filter="headphones">🎧</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎼" data-filter="music">🎼</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎹" data-filter="piano">🎹</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🥁" data-filter="drum">🥁</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪘" data-filter="drum">🪘</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎷" data-filter="saxophone">🎷</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎺" data-filter="trumpet">🎺</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪗" data-filter="acordion">🪗</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎸" data-filter="guitar">🎸</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🪕" data-filter="banjo">🪕</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎻" data-filter="violin">🎻</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎲" data-filter="dice">🎲</div>
                                        <div class="keypad-emo-key key-put emo" data-val="♟">♟</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎯" data-filter="bullseye">🎯</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎳" data-filter="bowling">🎳</div>
                                    </div>
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="🎮" data-filter="gaming">🎮</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🎰" data-filter="slots">🎰</div>
                                        <div class="keypad-emo-key key-put emo" data-val="🧩" data-filter="jigsaw">🧩</div>
                                    </div>
                                </div>
                                <div class="emo-line-lower emo-line-travel">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😀"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😃"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😄"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😁"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😆"></div>
                                    </div>
                                </div>
                                <div class="emo-line-lower emo-line-object">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😀"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😃"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😄"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😁"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😆"></div>
                                    </div>
                                </div>
                                <div class="emo-line-lower emo-line-symbol">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😀"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😃"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😄"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😁"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😆"></div>
                                    </div>
                                </div>
                                <div class="emo-line-lower emo-line-flag">
                                    <div class="key-line emo-line">
                                        <div class="keypad-emo-key key-put emo" data-val="😀"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😃"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😄"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😁"></div>
                                        <div class="keypad-emo-key key-put emo" data-val="😆"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="key-line key-line-select">
                                <div class="keypad-text-key key-select emo-select" data-emo="face">😀</div>
                                <div class="keypad-text-key key-select emo-select" data-emo="nature">🐻‍❄️</div>
                                <div class="keypad-text-key key-select emo-select" data-emo="food">🍏</div>
                                <div class="keypad-text-key key-select emo-select" data-emo="activity">⚽️</div>
                                <div class="keypad-text-key key-select emo-select" data-emo="travel">🚗</div>
                                <div class="keypad-text-key key-select emo-select" data-emo="object">💡</div>
                                <div class="keypad-text-key key-select emo-select" data-emo="symbol">❤️</div>
                                <div class="keypad-text-key key-select emo-select" data-emo="flags">🏳️</div>
                                <div class="keypad-text-key key-put special-key backspace-key"><i class="material-icons-round">backspace</i></div>
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
