var flexSliderXDown = null;
var flexSliderYDown = null;

var FlexSlider = class
{
    static onTouchStart(event)
    {
        flexSliderXDown = event.touches[0].clientX;
        flexSliderYDown = event.touches[0].clientY;
    };

    static onTouchMove(event)
    {
        if (! flexSliderXDown || ! flexSliderYDown) return;

        let  xUp = event.touches[0].clientX;
        let  yUp = event.touches[0].clientY;
        let  xDiff = flexSliderXDown - xUp;
        let  yDiff = flexSliderYDown - yUp;

        if (xDiff > 0) {
            event.currentTarget.querySelector(".flex-slider-btn-next").click();
        } else if(xDiff < 0) {
            event.currentTarget.querySelector(".flex-slider-btn-back").click();
        }

        flexSliderXDown = null;
        flexSliderYDown = null;
    };

    static back(btn)
    {
        FlexSlider.move(btn, 'left');
    }

    static next(btn)
    {
        FlexSlider.move(btn, 'right');
    }

    static move(btn, direction)
    {
        let flexSlider = btn.parentNode;
        let flexSliderBody = flexSlider.querySelector('.flex-slider-body');

        btn.style.pointerEvents = "none";
        setTimeout(() => {
            btn.style.pointerEvents = "all";
        }, 750);

        let scrollLeft = Math.ceil(flexSliderBody.scrollLeft) + 2;
        let offsetWidth = Math.ceil(flexSlider.offsetWidth) + 2;
        let scrollWidth = Math.ceil(flexSliderBody.scrollWidth) + 2;

        let distance = offsetWidth;
        let isLastSlide = (scrollLeft >= (scrollWidth - offsetWidth));
        let isFirstSlide = (scrollLeft <= 2);

        if(isFirstSlide && direction === 'left') {
            flexSliderBody.scroll({
                left: scrollWidth - offsetWidth,
                behavior: 'smooth'
            });

            FlexSlider.changeActiveDot(flexSlider, 'last');
            btn.disabled = false;
            return;
        }

        if(isLastSlide && direction === 'right') {
            flexSliderBody.scroll({
                left: 0,
                behavior: 'smooth'
            });

            FlexSlider.changeActiveDot(flexSlider, 'first');
            btn.disabled = false;
            return;
        }

        if(direction === 'left') distance = -(distance);

        flexSliderBody.scrollBy({
            left: distance,
            behavior: 'smooth'
        });
        btn.disabled = false;

        FlexSlider.changeActiveDot(flexSlider, direction);
    }

    static changeActiveDot(flexSlider, direction)
    {
        if(typeof flexSlider === 'string') flexSlider = document.querySelector(flexSlider);
        if(! flexSlider || !direction) return false;

        let flexSliderDots = flexSlider.querySelector('.flex-slider-dots');
        if(! flexSliderDots) return false;

        let allDots = flexSliderDots.querySelectorAll('.dot');

        let indexDot = 0;
        let indexActive = 0;

        for(let dot of allDots) {
            if(dot.classList.contains('active')) {
                indexActive = indexDot;
                dot.classList.remove('active');
            }
            indexDot++;
        }

        let dotNewActive = null;

        if(direction === 'first') {
            dotNewActive = flexSliderDots.querySelector(".dot:nth-child(1)");
        }

        if(direction === 'last') {
            dotNewActive = flexSliderDots.querySelector(".dot:nth-child("+ allDots.length +")");
        }

        if(direction === 'right' || direction === 'left') {
            let indexNewActive = (direction === 'right') ? (indexActive + 1) : (indexActive - 1);
            dotNewActive = flexSliderDots.querySelector(".dot:nth-child("+ (indexNewActive + 1) +")");
        }

        if(dotNewActive) dotNewActive.classList.add('active');
    }

    static startAutoSlide(target, milisseconds)
    {
        if(typeof target === 'string') target = document.querySelector(target);
        if(! target) return false;

        let flexSliderBtnNext = target.querySelector('.flex-slider-btn-next');
        if(! flexSliderBtnNext) return false;

        let intervalId = setInterval(function() {
            FlexSlider.next(target.querySelector('.flex-slider-btn-next'));
        }, milisseconds);

        flexSliderBtnNext.addEventListener('click', function() { clearInterval(intervalId); });
    }

    static renderButtons(target)
    {
        if(typeof target === 'string') target = document.querySelector(target);
        if(! target) return false;

        let bodyChildrenDesktop = target.querySelectorAll('.flex-slider-body .show-on-desktop');
        let bodyChildrenMobile = target.querySelectorAll('.flex-slider-body .show-on-mobile');

        if(
            (bodyChildrenDesktop.length > 1 && window.innerWidth >= 900) ||
            (bodyChildrenMobile.length > 1 && window.innerWidth < 900) || 
            (bodyChildrenDesktop.length == 0 && bodyChildrenMobile.length == 0)
        ) {
            let flexSliderBtnBack = document.createElement('span');
            flexSliderBtnBack.classList.add('flex-slider-btn-back');
            flexSliderBtnBack.onclick = () => { FlexSlider.back(flexSliderBtnBack) };
            flexSliderBtnBack.innerHTML = '&lsaquo;';
            target.appendChild(flexSliderBtnBack);

            let flexSliderBtnNext = document.createElement('span');
            flexSliderBtnNext.classList.add('flex-slider-btn-next');
            flexSliderBtnNext.onclick = () => { FlexSlider.next(flexSliderBtnNext) };
            flexSliderBtnNext.innerHTML = '&rsaquo;';
            target.appendChild(flexSliderBtnNext);
        }
    }

    static attachEvents(target)
    {
        if(typeof target === 'string') target = document.querySelector(target);
        if(! target) return false;
    }
};

document.addEventListener("DOMContentLoaded", () =>
{
    for(let flexSlider of document.querySelectorAll('.flex-slider')) {
        FlexSlider.renderButtons(flexSlider);
        FlexSlider.startAutoSlide(flexSlider, 10000);
    }
});