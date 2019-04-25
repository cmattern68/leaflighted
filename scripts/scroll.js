var scrollY = 0;
var distance = 40;
var speed = 10;

function autoScrollTo(el)
{
    var currentY = window.pageYOffset;
    var targetY = document.getElementById(el).offsetTop;
    var animator = setTimeout('autoScrollTo(\''+el+'\')', speed);

    if (currentY > targetY) {
        scrollY = currentY - distance;
        window.scroll(0, scrollY);
    } else
        clearTimeout(animator);
}
