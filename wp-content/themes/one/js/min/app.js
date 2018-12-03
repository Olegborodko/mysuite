(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
'use strict';

$(document).ready(function () {

    initCustomSlider();

    function initCustomSlider() {
        var customSlider = $('#custom-slider');

        if (customSlider.length > 0) {
            customSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: true,
                autoplay: false,
                dots: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-arrow slick-prev"></button>',
                nextArrow: '<button type="button" class="slick-arrow slick-next"></button>',
                dotsClass: 'slider-dots',
                appendArrows: $("#custom-slider-nav"),
                appendDots: $("#custom-slider-nav")
            });
        }
    }
});

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJqcy9jdXN0b20uanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7OztBQ0FBLEVBQUUsUUFBRixFQUFZLEtBQVosQ0FBa0IsWUFBVzs7QUFFekI7O0FBRUEsYUFBUyxnQkFBVCxHQUE0QjtBQUN4QixZQUFJLGVBQWUsRUFBRSxnQkFBRixDQUFuQjs7QUFFQSxZQUFJLGFBQWEsTUFBYixHQUFzQixDQUExQixFQUE2QjtBQUN6Qix5QkFBYSxLQUFiLENBQW1CO0FBQ2YsOEJBQWMsQ0FEQztBQUVmLGdDQUFnQixDQUZEO0FBR2YsMEJBQVUsS0FISztBQUlmLHNCQUFNLElBSlM7QUFLZix3QkFBUSxJQUxPO0FBTWYsMkJBQVcsZ0VBTkk7QUFPZiwyQkFBVyxnRUFQSTtBQVFmLDJCQUFXLGFBUkk7QUFTZiw4QkFBYyxFQUFFLG9CQUFGLENBVEM7QUFVZiw0QkFBWSxFQUFFLG9CQUFGO0FBVkcsYUFBbkI7QUFZSDtBQUNKO0FBQ0osQ0F0QkQiLCJmaWxlIjoiZ2VuZXJhdGVkLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigpe2Z1bmN0aW9uIHIoZSxuLHQpe2Z1bmN0aW9uIG8oaSxmKXtpZighbltpXSl7aWYoIWVbaV0pe3ZhciBjPVwiZnVuY3Rpb25cIj09dHlwZW9mIHJlcXVpcmUmJnJlcXVpcmU7aWYoIWYmJmMpcmV0dXJuIGMoaSwhMCk7aWYodSlyZXR1cm4gdShpLCEwKTt2YXIgYT1uZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiK2krXCInXCIpO3Rocm93IGEuY29kZT1cIk1PRFVMRV9OT1RfRk9VTkRcIixhfXZhciBwPW5baV09e2V4cG9ydHM6e319O2VbaV1bMF0uY2FsbChwLmV4cG9ydHMsZnVuY3Rpb24ocil7dmFyIG49ZVtpXVsxXVtyXTtyZXR1cm4gbyhufHxyKX0scCxwLmV4cG9ydHMscixlLG4sdCl9cmV0dXJuIG5baV0uZXhwb3J0c31mb3IodmFyIHU9XCJmdW5jdGlvblwiPT10eXBlb2YgcmVxdWlyZSYmcmVxdWlyZSxpPTA7aTx0Lmxlbmd0aDtpKyspbyh0W2ldKTtyZXR1cm4gb31yZXR1cm4gcn0pKCkiLCIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcclxuXHJcbiAgICBpbml0Q3VzdG9tU2xpZGVyKCk7XHJcblxyXG4gICAgZnVuY3Rpb24gaW5pdEN1c3RvbVNsaWRlcigpIHtcclxuICAgICAgICB2YXIgY3VzdG9tU2xpZGVyID0gJCgnI2N1c3RvbS1zbGlkZXInKTtcclxuXHJcbiAgICAgICAgaWYgKGN1c3RvbVNsaWRlci5sZW5ndGggPiAwKSB7XHJcbiAgICAgICAgICAgIGN1c3RvbVNsaWRlci5zbGljayh7XHJcbiAgICAgICAgICAgICAgICBzbGlkZXNUb1Nob3c6IDEsXHJcbiAgICAgICAgICAgICAgICBzbGlkZXNUb1Njcm9sbDogMSxcclxuICAgICAgICAgICAgICAgIGF1dG9wbGF5OiBmYWxzZSxcclxuICAgICAgICAgICAgICAgIGRvdHM6IHRydWUsXHJcbiAgICAgICAgICAgICAgICBhcnJvd3M6IHRydWUsXHJcbiAgICAgICAgICAgICAgICBwcmV2QXJyb3c6ICc8YnV0dG9uIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cInNsaWNrLWFycm93IHNsaWNrLXByZXZcIj48L2J1dHRvbj4nLFxyXG4gICAgICAgICAgICAgICAgbmV4dEFycm93OiAnPGJ1dHRvbiB0eXBlPVwiYnV0dG9uXCIgY2xhc3M9XCJzbGljay1hcnJvdyBzbGljay1uZXh0XCI+PC9idXR0b24+JyxcclxuICAgICAgICAgICAgICAgIGRvdHNDbGFzczogJ3NsaWRlci1kb3RzJyxcclxuICAgICAgICAgICAgICAgIGFwcGVuZEFycm93czogJChcIiNjdXN0b20tc2xpZGVyLW5hdlwiKSxcclxuICAgICAgICAgICAgICAgIGFwcGVuZERvdHM6ICQoXCIjY3VzdG9tLXNsaWRlci1uYXZcIilcclxuICAgICAgICAgICAgfSlcclxuICAgICAgICB9XHJcbiAgICB9XHJcbn0pOyJdfQ==
