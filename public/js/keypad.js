"use strict";

//ELEMENTS

//KEYPAD WINDOW
const keyPadWindow = document.querySelector("#keyPadModal");

//INPUT
const inputClick = document.querySelectorAll("input");
const tempInput = document.querySelector(".temp-input");

//SPECIAL KEYS
const spaceKey = document.querySelector(".space-key");
const returnKey = document.querySelector(".return-key");
const numKey = document.querySelectorAll(".num-key");
const letterKey = document.querySelector(".letter-key");
const emojiKey = document.querySelector(".emoji-key");
const shiftKey = document.querySelector(".shift-key");
const reverseShiftKey = document.querySelector(".reverse-shift-key");
const symbolKey = document.querySelector(".symbol-key");
const internationalKey = document.querySelector(".international-key");
const selectKey = document.querySelectorAll(".key-select");
const capKey = document.querySelectorAll(".cap");
const emoSelectKey = document.querySelectorAll(".emo-select");

//KEYS
const keyPressed = document.querySelectorAll(".key-put");
const delClass = document.querySelectorAll(".del-class");

//INTERNATIONAL LINES
const intLine = document.querySelectorAll(".key-line-lower");

//EMOJI LINES
const emoLine = document.querySelectorAll(".emo-line-lower");

//EMOJI VALUES
const emojiVal = document.querySelectorAll("[data-filter]");
const emojiBar = document.querySelector(".emoji-bar");

//KEY WINDOWS
const keyWinUpper = document.querySelector("#key-win-uppercase");
const keyWinLower = document.querySelector("#key-win-lowercase");
const keyWinNum = document.querySelector("#key-win-numerals");
const keyWinMath = document.querySelector("#key-win-maths");
const keyWinInternational = document.querySelector("#key-win-international");
const keyWinEmoji = document.querySelector("#key-win-emoji");

//BUTTONS
const dismissKeyModal = document.querySelector(".dismiss-keypad-btn");

///////////////////////////////////////////////////////////////

// FUNCTIONS
function changeKeyWindow(window) {
    window.classList.remove("hide");
    [...window.parentElement.children].forEach(function (el) {
        if (el !== window) el.classList.add("hide");
    });
    //RESET INTERNATIONAL WINDOW TO A
    intLine.forEach(function (el) {
        if (!el.classList.contains("international-line-a")) {
            el.classList.add("hide");
        } else {
            el.classList.remove("hide");
        }
    });
    //RESET EMOJI WINDOW
    emoLine.forEach(function (el) {
        if (!el.classList.contains("emo-line-face")) {
            el.classList.add("hide");
        } else {
            el.classList.remove("hide");
        }
    });
}

shiftKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinLower);
});

reverseShiftKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinUpper);
});

numKey.forEach(function (elem) {
    elem.addEventListener("click", function (e) {
        changeKeyWindow(keyWinNum);
    });
});

letterKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinLower);
});

symbolKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinMath);
});

internationalKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinInternational);
});

emojiKey.addEventListener("click", function (e) {
    changeKeyWindow(keyWinEmoji);
});

capKey.forEach(function (keyPressed) {
    keyPressed.addEventListener("click", function (e) {
        changeKeyWindow(keyWinLower);
    });
});

function focusOnInput() {
    let inputFocused = document.querySelectorAll(".focus-input");
    let activeInput = null;
    inputFocused.forEach((field) => {
        field.addEventListener("focus", function () {
            $(".temp-input").html(field.value);
            $("#keyPadModal").modal("show");
            keyPadWindow.classList.add("keyPadModal-bottom");
            activeInput = field;
        });
    });
    inputFocused[0].focus();
    keyPressed.forEach((singleKey) => {
        singleKey.addEventListener("click", function () {
            flashKey(singleKey);
            if (activeInput) {
                if (singleKey.classList.contains("special-key")) {
                    if (singleKey.classList.contains("space-key")) {
                        activeInput.value = activeInput.value + " ";
                    }
                    if (singleKey.classList.contains("backspace-key")) {
                        activeInput.value = activeInput.value.slice(0, -1);
                    }
                    if (singleKey.classList.contains("return-key")) {
                        console.log("return key needs testing");
                        activeInput.value = activeInput.value + "\n";
                    }
                    activeInput.focus();
                } else {
                    activeInput.value =
                        activeInput.value + singleKey.getAttribute("data-val");
                    activeInput.focus();
                }
                $(".temp-input").html(activeInput.value);
                highlightWord();
            } else {
                console.log("null value");
            }
        });
    });
    $(document).on("click", ".del-class", function () {
        if (activeInput) {
            activeInput.value =
                activeInput.value + " " + this.getAttribute("data-val") + " ";
            activeInput.focus();
            $(".temp-input").value = activeInput.value + " ";
        } else {
            console.log("null value");
        }
    });
}

inputClick.forEach(function (el) {
    el.addEventListener("click", function (e) {
        e.stopPropagation();
        if (!el.classList.contains("temp-input")) {
            focusOnInput();
        }
    });
});

// INTERNATIONAL CHARACTERS
function toggleIntlLine(line) {
    line.classList.remove("hide");
    [...line.parentElement.children].forEach(function (el) {
        if (el !== line) el.classList.add("hide");
    });
}

selectKey.forEach(function (keyPressed) {
    $(keyPressed).on("click", function () {
        flashKey(keyPressed);
        const selected = keyPressed.getAttribute("data-sel");
        intLine.forEach(function (el) {
            if (el.classList.contains(`international-line-${selected}`)) {
                toggleIntlLine(el);
            }
        });
    });
});

// EMOJI SELECT
emoSelectKey.forEach(function (keyPressed) {
    $(keyPressed).on("click", function () {
        flashKey(keyPressed);
        const selected = keyPressed.getAttribute("data-emo");
        emoLine.forEach(function (el) {
            if (el.classList.contains(`emo-line-${selected}`)) {
                toggleIntlLine(el);
            }
        });
    });
});

//CANCEL AND DISMISS
$(dismissKeyModal).click(function () {
    flashKey(dismissKeyModal);
    $(".temp-input").html("");
    setTimeout(function () {
        changeKeyWindow(keyWinUpper);
        keyPadWindow.classList.remove("keyPadModal-bottom");
        emojiBar.replaceChildren();
    }, 500);
});

// EMOJI DATA VALUES
let box = [];
for (var i in emojiVal) {
    if (emojiVal.hasOwnProperty(i)) {
        let val = emojiVal[i].getAttribute("data-filter");
        box.push(val);
    }
}

function highlightWord() {
    let temp = [...tempInput.innerHTML.toLowerCase().split(" ")];
    const last = temp.slice(-1)[0];
    if (box.includes(last)) {
        const node = document.querySelectorAll("[data-filter=" + last + "]");
        node.forEach(function (el) {
            const clone = el.cloneNode(true);
            clone.classList.add("del-class");
            emojiBar.appendChild(clone);
        });
    }
    var newHTML = "";
    $(".temp-input")
        .text()
        .replace(/[\s]+/g, " ")
        .trim()
        .split(" ")
        //.pop();
        .forEach(function (val) {
            if (box.indexOf(val.trim().toLowerCase()) > -1) {
                newHTML += `<span class='statement'>${val}&nbsp;</span>`;
            } else {
                newHTML += `<span class='other'>${val}&nbsp;</span>`;
            }
        });
    $(".temp-input").html(newHTML);
}

$(document).on("click", ".statement", function () {
    console.log("statement");
});

spaceKey.addEventListener("click", function (e) {
    emojiBar.replaceChildren();
});

/////////////////////////////////////////

//LONG PRESS TO DO
// click
var d = document.querySelector(".shift-key"),
    isDown = false,
    isLong = false,
    target, // which element was clicked
    longTID; // so we can cancel timer

// add listener for elements
d.addEventListener("mousedown", handleMouseDown);

// mouseup need to be monitored on a "global" element or we might miss it if
// we move outside the original element.
window.addEventListener("mouseup", handleMouseUp);

function handleMouseDown() {
    //this.innerHTML = "Mouse down...";
    console.log("mouse down");
    isDown = true; // button status (any button here)
    isLong = false; // longpress status reset
    target = this; // store this as target element
    clearTimeout(longTID); // clear any running timers
    longTID = setTimeout(longPress.bind(this), 1500); // create a new timer for this click
}

function handleMouseUp(e) {
    if (isDown && isLong) {
        // if a long press, cancel
        isDown = false; // clear in any case
        e.preventDefault(); // and ignore this event
        return;
    }
    if (isDown) {
        // if we came from down status:
        clearTimeout(longTID); // clear timer to avoid false longpress
        isDown = false;
        console.log("normal up");
        //target.innerHTML = "Normal up"; // for clicked element
        target = null;
    }
}

function longPress() {
    isLong = true;
    console.log("long press");
    //this.innerHTML = "Long press";
    // throw custom event or call code for long press
}
