"use strict";

//ELEMENTS

//INPUT
const inputClick = document.querySelectorAll("input");

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

//INTERNATIONAL LINES
const intLine = document.querySelectorAll(".key-line-lower");

//KEY WINDOWS
const keyWinUpper = document.querySelector("#key-win-uppercase");
const keyWinLower = document.querySelector("#key-win-lowercase");
const keyWinNum = document.querySelector("#key-win-numerals");
const keyWinMath = document.querySelector("#key-win-maths");
const keyWinInternational = document.querySelector("#key-win-international");

//BUTTONS
const dismissKeyModal = document.querySelector(".dismiss-keypad-btn");

///////////////////////////////////////////////////////////////

// FUNCTIONS
function changeKeyWindow(window) {
    window.classList.remove("hide");
    [...window.parentElement.children].forEach(function (el) {
        if (el !== window) el.classList.add("hide");
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

function focusOnInput() {
    let keyPressed = document.querySelectorAll(".key-put");
    let inputFocused = document.querySelectorAll(".focus-input");
    let activeInput = null;
    inputFocused.forEach((field) => {
        field.addEventListener("focus", function () {
            console.log("clicked twice");
            $("#keyPadModal").modal("show");
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
            } else {
                console.log("null value");
            }
        });
    });
}

inputClick.forEach(function (el) {
    el.addEventListener("click", function (e) {
        console.log("clicked once");
        focusOnInput();
    });
});

// INTERNATIONAL CHARACTERS
function toggleIntlLine(line) {
    console.log(line);
    //line.classList.toggle("hide");
    line.classList.remove("hide");
    [...line.parentElement.children].forEach(function (el) {
        if (el !== line) el.classList.add("hide");
    });
}

selectKey.forEach(function (keyPressed) {
    keyPressed.addEventListener("click", function (e) {
        flashKey(keyPressed);
        const selected = keyPressed.getAttribute("data-sel");
        intLine.forEach(function (el) {
            if (el.classList.contains(`international-line-${selected}`)) {
                toggleIntlLine(el);
            }
        });
    });
});

//CANCEL AND DISMISS
$(dismissKeyModal).click(function () {
    flashKey(dismissKeyModal);
    setTimeout(function () {
        changeKeyWindow(keyWinUpper);
    }, 500);
});
