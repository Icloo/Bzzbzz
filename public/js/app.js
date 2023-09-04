const loaderContainer = document.querySelector('.loader-container');

window.addEventListener('load', () => {
    

    loaderContainer.classList.add('loader_fin');

    setTimeout(fonctionAExecuter, 400);

});


function fonctionAExecuter()
{
    loaderContainer.parentElement.removeChild(loaderContainer);
}

//////////////////////////////////////

const animatedElement = document.querySelector('.testanim');

function animateOnScroll() {
    const triggerOffset = animatedElement.offsetTop - window.innerHeight + animatedElement.offsetHeight / 2;
    
    if (window.pageYOffset > triggerOffset) {
        animatedElement.classList.add('animate');
        window.removeEventListener('scroll', animateOnScroll);
    }
}

window.addEventListener('scroll', animateOnScroll);

///////////////////////////////////////

const animatedElement2 = document.querySelector('.testanim2');

function animateOnScroll2() {
    const triggerOffset = animatedElement2.offsetTop - window.innerHeight + animatedElement2.offsetHeight / 2;
    
    if (window.pageYOffset > triggerOffset) {
        animatedElement2.classList.add('animate');
        window.removeEventListener('scroll', animateOnScroll2);
    }
}

window.addEventListener('scroll', animateOnScroll2);

////////////////////////////////////////////////

const animatedElement3 = document.querySelector('.testanim_service_1');

function animateOnScroll3() {
    const triggerOffset = animatedElement3.offsetTop - window.innerHeight + animatedElement3.offsetHeight / 2;
    
    if (window.pageYOffset > triggerOffset) {
        animatedElement3.classList.add('animate');
        window.removeEventListener('scroll', animateOnScroll3);
    }
}

window.addEventListener('scroll', animateOnScroll3);

/////////////////////////////////////////////////////////////

const animatedElement4 = document.querySelector('.testanim_service_2');

function animateOnScroll4() {
    const triggerOffset = animatedElement4.offsetTop - window.innerHeight + animatedElement4.offsetHeight / 2;
    
    if (window.pageYOffset > triggerOffset) {
        animatedElement4.classList.add('animate');
        window.removeEventListener('scroll', animateOnScroll4);
    }
}

window.addEventListener('scroll', animateOnScroll4);

/////////////////////////////////////////////////////////////

const animatedElement5 = document.querySelector('.testanim_service_3');

function animateOnScroll5() {
    const triggerOffset = animatedElement5.offsetTop - window.innerHeight + animatedElement5.offsetHeight / 2;
    
    if (window.pageYOffset > triggerOffset) {
        animatedElement5.classList.add('animate');
        window.removeEventListener('scroll', animateOnScroll5);
    }
}

window.addEventListener('scroll', animateOnScroll5);


/////////////////////////////////////////////////////////////

const animatedElement6 = document.querySelector('.testanim_service_4');

function animateOnScroll6() {
    const triggerOffset = animatedElement6.offsetTop - window.innerHeight + animatedElement6.offsetHeight / 2;
    
    if (window.pageYOffset > triggerOffset) {
        animatedElement6.classList.add('animate');
        window.removeEventListener('scroll', animateOnScroll6);
    }
}

window.addEventListener('scroll', animateOnScroll6);


//////////////////////////////////////////////////////////////