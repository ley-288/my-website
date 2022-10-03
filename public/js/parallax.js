"use strict";

//Card parallax

(function () {
    $(document)
        .on("mousemove", ".ItemCard", function (event) {
            var halfW = this.clientWidth / 2;
            var halfH = this.clientHeight / 2;
            var coorX = halfW - (event.pageX - this.offsetLeft);
            var coorY = halfH - (event.pageY - this.offsetTop);
            var degX = (coorY / halfH) * 10 + "deg"; // max. degree = 10
            var degY = (coorX / halfW) * -10 + "deg"; // max. degree = 10
            $(this)
                .css("transform", function () {
                    return (
                        "perspective( 600px ) translate3d( 0, -2px, 0 ) scale(1.1) rotateX(" +
                        degX +
                        ") rotateY(" +
                        degY +
                        ")"
                    );
                })
                .children(".ItemCard__summary")
                .css("transform", function () {
                    return (
                        "perspective( 600px ) translate3d( 0, 0, 0 ) rotateX(" +
                        degX +
                        ") rotateY(" +
                        degY +
                        ")"
                    );
                });
        })
        .on("mouseout", ".ItemCard", function () {
            $(this)
                .removeAttr("style")
                .children(".ItemCard__summary")
                .removeAttr("style");
        });
})();

/*
//Lens flare
(function () {
    var cvs, ctx, mousePos;
    function init() {
        cvs = document.getElementById("canvas");
        ctx = cvs.getContext("2d");
        cvs.width = window.innerWidth;
        cvs.height = window.innerHeight;
        var fire = new Flare();
        fire.update({ x: cvs.width / 5, y: cvs.height / 5 });
        canvas.addEventListener("mousemove", function (a) {
            mousePos = getMousePos(cvs, a);
            fire.update(mousePos);
        });
    }
    function Flare() {
        this.discs = [];
        this.discNum = 9;
        this.t = 0;
        this.draw = function (obj) {
            ctx.globalCompositeOperation = "screen";
            var dist =
                1 -
                Math.sqrt(
                    Math.pow(obj.x - cvs.width / 2, 2) +
                        Math.pow(obj.y - cvs.height / 2, 2)
                ) /
                    Math.sqrt(
                        Math.pow(cvs.width / 2, 2) + Math.pow(cvs.height / 2, 2)
                    );
            console.log(dist);
            for (var i = 0; i < this.discs.length; i++) {
                ctx.beginPath();
                var hue = this.discs[i].hue;
                var grad = ctx.createRadialGradient(
                    this.discs[i].x,
                    this.discs[i].y,
                    0,
                    this.discs[i].x,
                    this.discs[i].y,
                    this.discs[i].dia
                );
                grad.addColorStop(
                    0,
                    "hsla(" + hue + ",100%,90%," + 0 * dist + ")"
                );
                grad.addColorStop(
                    0.9,
                    "hsla(" + hue + ",100%,90%," + 0.15 * dist + ")"
                );
                grad.addColorStop(1, "hsla(" + hue + ",100%,90%,0)");
                ctx.fillStyle = grad;
                ctx.arc(
                    this.discs[i].x,
                    this.discs[i].y,
                    this.discs[i].dia,
                    0,
                    Math.PI * 2
                );
                ctx.closePath();
                ctx.fill();
                if (i == 0) {
                    ctx.beginPath();
                    var grad = ctx.createRadialGradient(
                        this.discs[i].x,
                        this.discs[i].y,
                        0,
                        this.discs[i].x,
                        this.discs[i].y,
                        this.discs[i].dia * 2
                    );
                    grad.addColorStop(
                        0,
                        "rgba(200,220,255," + 0.2 * dist + ")"
                    );
                    grad.addColorStop(1, "rgba(200,220,255,0)");
                    ctx.fillStyle = grad;
                    ctx.arc(
                        this.discs[i].x,
                        this.discs[i].y,
                        this.discs[i].dia * 2,
                        0,
                        Math.PI * 2
                    );
                    ctx.closePath();
                    ctx.fill();

                    ctx.beginPath();
                    var ease = function (a, b, t) {
                        return (b - a) * (1 - Math.pow(t - 1, 2)) + a;
                    };
                    var spec = ease(
                        this.discs[i].dia / 2.5 / 2,
                        this.discs[i].dia / 2.5,
                        dist
                    );
                    var sdist = 1 - Math.pow(Math.abs(dist - 1), 3);
                    var grad = ctx.createRadialGradient(
                        this.discs[i].x,
                        this.discs[i].y,
                        0,
                        this.discs[i].x,
                        this.discs[i].y,
                        spec
                    );
                    grad.addColorStop(
                        0.2 * sdist,
                        "rgba(255,255,255," + sdist + ")"
                    );
                    grad.addColorStop(
                        0.6,
                        "hsla(" +
                            this.discs[i].hue +
                            ",100%,75%," +
                            0.3 * sdist +
                            ")"
                    );
                    grad.addColorStop(
                        1,
                        "hsla(" + this.discs[i].hue + ",100%,40%,0)"
                    );
                    ctx.fillStyle = grad;
                    ctx.arc(
                        this.discs[i].x,
                        this.discs[i].y,
                        this.discs[i].dia / 2.5,
                        0,
                        Math.PI * 2
                    );
                    ctx.closePath();
                    ctx.fill();

                    ctx.beginPath();
                    var grad = ctx.createLinearGradient(
                        this.discs[i].x - this.discs[i].dia * 1.5,
                        this.discs[i].y,
                        this.discs[i].x + this.discs[i].dia * 1.5,
                        this.discs[i].y
                    );
                    grad.addColorStop(0, "rgba(240,250,255,0)");
                    grad.addColorStop(
                        0.5,
                        "rgba(240,250,255," + 0.4 * dist * dist * dist + ")"
                    );
                    grad.addColorStop(1, "rgba(240,250,255,0)");
                    ctx.fillStyle = grad;
                    ctx.fillRect(
                        this.discs[i].x - this.discs[i].dia * 1.5,
                        this.discs[i].y - 2,
                        this.discs[i].dia * 3,
                        4
                    );
                    ctx.closePath();
                    ctx.fill();

                    ctx.beginPath();
                    var grad = ctx.createLinearGradient(
                        this.discs[i].x,
                        this.discs[i].y - this.discs[i].dia * 1.5,
                        this.discs[i].x,
                        this.discs[i].y + this.discs[i].dia * 1.5
                    );
                    grad.addColorStop(0, "rgba(240,250,255,0)");
                    grad.addColorStop(
                        0.5,
                        "rgba(240,250,255," + 0.4 * dist * dist * dist + ")"
                    );
                    grad.addColorStop(1, "rgba(240,250,255,0)");
                    ctx.fillStyle = grad;
                    ctx.fillRect(
                        this.discs[i].x - 2,
                        this.discs[i].y - this.discs[i].dia * 1.5,
                        4,
                        this.discs[i].dia * 3
                    );
                    ctx.closePath();
                    ctx.fill();
                }
            }
        };
        this.update = function (obj) {
            ctx.clearRect(0, 0, cvs.width, cvs.height);
            for (var i = 0; i <= this.discNum; i++) {
                var temp = {};
                var j = i - this.discNum / 2;
                temp.x =
                    (cvs.width / 2 - obj.x) * ((j / this.discNum) * 2) +
                    cvs.width / 2;
                temp.y =
                    (cvs.height / 2 - obj.y) * ((j / this.discNum) * 2) +
                    cvs.height / 2;
                if (this.t == 0) {
                    temp.dia =
                        Math.pow(Math.abs(10 * (j / this.discNum)), 2) * 3 +
                        110 +
                        (Math.random() * 100 - 100);
                    temp.hue = Math.round(Math.random() * 360);
                    this.discs[i] = temp;
                } else {
                    this.discs[i].x = temp.x;
                    this.discs[i].y = temp.y;
                }
            }
            this.t += 1;
            this.draw(obj);
        };
    }
    function getMousePos(cvs, evt) {
        var rect = cvs.getBoundingClientRect();
        return {
            x: evt.clientX - rect.left,
            y: evt.clientY - rect.top,
        };
    }
    document.addEventListener("DOMContentLoaded", init, false);
})();

*/

// JUPITER CARDS
$(function () {
    var card = $(".card");
    card.on("mousemove", function (e) {
        var x = e.clientX - $(this).offset().left + $(window).scrollLeft();
        var y = e.clientY - $(this).offset().top + $(window).scrollTop();
        var rY = map(x, 0, $(this).width(), -17, 17);
        var rX = map(y, 0, $(this).height(), -17, 17);
        $(this)
            .children(".image")
            .css(
                "transform",
                "rotateY(" + rY + "deg)" + " " + "rotateX(" + -rX + "deg)"
            );
        //$(this).children(".text").css("color", "black");
    });
    card.on("mouseenter", function () {
        $(this)
            .children(".image")
            .css({
                transition: "all " + 0.05 + "s" + " linear",
            });
    });
    card.on("mouseleave", function () {
        $(this)
            .children(".image")
            .css({
                transition: "all " + 0.2 + "s" + " linear",
            });

        $(this)
            .children(".image")
            .css(
                "transform",
                "rotateY(" + 0 + "deg)" + " " + "rotateX(" + 0 + "deg)"
            );
    });
    function map(x, in_min, in_max, out_min, out_max) {
        return (
            ((x - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
        );
    }
});
