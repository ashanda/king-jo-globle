// Navbar bg color on scroll
function addClassOnScroll(navbarSelector, scrollHeight, className) {
    var navbar = document.querySelector(navbarSelector);
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > scrollHeight) {
            navbar.classList.add(className);
        } else {
            navbar.classList.remove(className);
        }
    });
}
addClassOnScroll('.fixed-top', 100, 'nav-active');

$.fn.moveIt = function () {
    var $window = $(window);
    var instances = [];

    $(this).each(function () {
        instances.push(new moveItItem($(this)));
    });

    window.onscroll = function () {
        var scrollTop = $window.scrollTop();
        instances.forEach(function (inst) {
            inst.update(scrollTop);
        });
    }
}

var moveItItem = function (el) {
    this.el = $(el);
    this.speed = parseInt(this.el.attr('data-scroll-speed'));
};

moveItItem.prototype.update = function (scrollTop) {
    var pos = scrollTop / this.speed;
    this.el.css('transform', 'translateY(' + -pos + 'px)');
};

$(function () {
    $('[data-scroll-speed]').moveIt();
});



filterSelection("all")
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
    }
}

function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}


window.addEventListener('scroll', parallax);

$(document).ready(function () {
    $('.carousel').slick({
        //   change prev and next button

        prevArrow:
            '<button class="slick-prev" aria-label="Previous" type="button">&lt;</button>',
        nextArrow:
            '<button class="slick-next" aria-label="Next" type="button">&gt;</button>',

        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: true,
        speed: 300,
        centerMode:
            variableWidt
    });


});


// Initialize Owl Carousel
// $('.owl-carousel').owlCarousel({
//   loop: false,
//   margin: 10,
//   nav: false,
//   autoplay:false,
//   responsive: {
//     0: {
//       items: 1
//     },
//     600: {
//       items: 3
//     },
//     1000: {
//       items: 5
//     }
//   },
//   onInitialized: scaleCenterImage,
//   onTranslated: scaleCenterImage
// });

// function scaleCenterImage(event) {
//   $('.item').removeClass('active');
//   $('.owl-item.active').find('.item').addClass('active');
// }






