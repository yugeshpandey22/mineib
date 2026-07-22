$(function() {
    jQuery.scrollSpeed(100, 1000);
});

$('.count').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});

$('input').focus(function() {
    $(this).parents('.form-group').addClass('focused');
});

$('input').blur(function() {
    var inputValue = $(this).val();
    if (inputValue == "") {
        $(this).removeClass('filled');
        $(this).parents('.form-group').removeClass('focused');
    } else {
        $(this).addClass('filled');
    }
});

var hoverSpan = $('.btn span');
$(".btn").mouseenter(function() {
    $(hoverSpan).removeClass('reset').addClass('enter');
}).mouseleave(function() {
    $(hoverSpan).removeClass('enter').addClass('leave');
    setTimeout(function() {
        $(hoverSpan).removeClass('leave').addClass('reset');
    }, 500);
});

new SmoothScroll();

function SmoothScroll(el) {
    var t = this, h = document.documentElement;
    el = el || window;
    t.rAF = false;
    t.target = 0;
    t.scroll = 0;
    t.animate = function() {
        t.scroll += (t.target - t.scroll) * 0.1;
        if (Math.abs(t.scroll.toFixed(5) - t.target) <= 0.47131) {
            cancelAnimationFrame(t.rAF);
            t.rAF = false;
        }
        if (el == window) scrollTo(0, t.scroll);
        else el.scrollTop = t.scroll;
        if (t.rAF) t.rAF = requestAnimationFrame(t.animate);
    };
    el.onmousewheel = function(e) {
        e.stopPropagation();
        var scrollEnd = (el == window) ? h.scrollHeight - h.clientHeight : el.scrollHeight - el.clientHeight;
        t.target += (e.wheelDelta > 0) ? -150 : 150;
        if (t.target < 0) t.target = 0;
        if (t.target > scrollEnd) t.target = scrollEnd;
        if (!t.rAF) t.rAF = requestAnimationFrame(t.animate);
    };
    el.onscroll = function() {
        if (t.rAF) return;
        t.target = (el == window) ? pageYOffset || h.scrollTop : el.scrollTop;
        t.scroll = t.target;
    };
}