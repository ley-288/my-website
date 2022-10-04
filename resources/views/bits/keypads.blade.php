
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
                <div class="dismiss-modal">
                    <button class="dismiss-numpad-btn dismiss-modal-btn" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{--KEYBOARD KEYPAD--}}
<!-- Modal -->
<div class="modal fade animate" id="keyPadModal" tabindex="-1" role="dialog" aria-labelledby="keyPadModal" aria-hidden="true" style="overflow-y: hidden; backdrop-filter: blur(0px);">
    <div class="modal-dialog" role="document">
        <div class="modal-content animate-bottom" style="background-color:transparent!important; border:none;">
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
                                <div class="keypad-text-key key-put shift-key"><i   class="material-icons-round">keyboard_double_arrow_up</i></div>
                                <div class="keypad-text-key key-put" data-val="Z">Z</div>
                                <div class="keypad-text-key key-put" data-val="X">X</div>
                                <div class="keypad-text-key key-put" data-val="C">C</div>
                                <div class="keypad-text-key key-put" data-val="V">V</div>
                                <div class="keypad-text-key key-put" data-val="B">B</div>
                                <div class="keypad-text-key key-put" data-val="N">N</div>
                                <div class="keypad-text-key key-put" data-val="M">M</div>
                                <div class="keypad-text-key key-put backspace-key"><i class="material-icons-round">backspace</i></div>
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
                                <div class="keypad-text-key key-put reverse-shift-key"><i class="material-icons-round">keyboard_double_arrow_down</i></div>
                                <div class="keypad-text-key key-put" data-val="z">z</div>
                                <div class="keypad-text-key key-put" data-val="x">x</div>
                                <div class="keypad-text-key key-put" data-val="c">c</div>
                                <div class="keypad-text-key key-put" data-val="v">v</div>
                                <div class="keypad-text-key key-put" data-val="b">b</div>
                                <div class="keypad-text-key key-put" data-val="n">n</div>
                                <div class="keypad-text-key key-put" data-val="m">m</div>
                                <div class="keypad-text-key key-put backspace-key"><i class="material-icons-round">backspace</i></div>
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
                                <div class="keypad-text-key key-put symbol-key"><i class="material-icons-round">calculate</i></div>
                                <div class="keypad-text-key key-put" data-val=".">.</div>
                                <div class="keypad-text-key key-put" data-val=",">,</div>
                                <div class="keypad-text-key key-put" data-val="?">?</div>
                                <div class="keypad-text-key key-put" data-val="!">!</div>
                                <div class="keypad-text-key key-put" data-val="'">'</div>
                                <div class="keypad-text-key key-put backspace-key"><i class="material-icons-round">backspace</i></div>
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
                                <div class="keypad-text-key key-put num-key"><i class="material-icons-round">123</i></div>
                                <div class="keypad-text-key key-put" data-val=".">.</div>
                                <div class="keypad-text-key key-put" data-val=",">,</div>
                                <div class="keypad-text-key key-put" data-val="?">?</div>
                                <div class="keypad-text-key key-put" data-val="!">!</div>
                                <div class="keypad-text-key key-put" data-val="'">'</div>
                                <div class="keypad-text-key key-put backspace-key"><i class="material-icons-round">backspace</i></div>
                            </div>
                        </div>
                    </div>

                    {{--KEYPAD BOTTOM ROW--}}
                    <div id="key-bottom-row">
                        <div class="key-bottom-row-line">
                            <div class="keypad-text-key key-put bl-bottom" data-val="https://">https://</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val="www.">www.</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val="@">@</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val="gmail">gmail</div>
                            <div class="keypad-text-key key-put bl-bottom" data-val=".com">.com</div>
                        </div>
                        <div class="key-bottom-row-line">
                            <div class="keypad-text-key key-bottom key-put num-key"><i class="material-icons-round">123</i></div>
                            <div class="keypad-text-key key-bottom key-put letter-key"><i class="material-icons-round">abc</i></div>
                            <div class="keypad-text-key key-bottom key-put emoji-key"><i class="material-icons-round">emoji_emotions</i></div>
                            <div class="keypad-text-key key-bottom key-put space-key"><i class="material-icons-round" data-val=" ">space_bar</i></div>
                            <div class="keypad-text-key key-bottom key-put return-key"><i class="material-icons-round">keyboard_return</i></div>
                        </div>
                    </div>
                </div>
                </br>
                <div class="dismiss-modal">
                    <button class="dismiss-keypad-btn dismiss-modal-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
