$(document).ready(function() {
    var prevScrollpos = $(window).scrollTop();

    $(window).scroll(function() {
        var currentScrollPos = $(window).scrollTop();

        if (prevScrollpos > currentScrollPos) {
            $("#navBar").css("top", "0");
        } else {
            $("#navBar").css("top", "-100px");
        }

        prevScrollpos = currentScrollPos;
    });
});

$(document).ready(function () {
    $("#btn_burger").on("click", function () {
        if ($("#menu_burger").is(":visible")) {
            $("#menu_burger").slideUp();
        } else {
            $("#menu_burger").slideDown();
        }
    });
});
// $(document).on("mousemove scroll", function (event) {
//     const offset = (event.clientY / $(window).height()) * 600;
//     $("#planets img").css("transform", "translateY(" + offset + "px)");

//     if (event.type === "scroll") {
//         const scrollPosition = window.scrollY;
//         const parallaxSpeed = 0.2;
//         const backgroundPosition = 20 + scrollPosition * parallaxSpeed;
//         $("#header").css("background-position-y", backgroundPosition + "%");
//     }
// });
// $(document).on("scroll", function () {
//     const scrollPosition = $(window).scrollTop();
//     const windowHeight = $(window).height();

//     // Calculate offsets based on scroll position
//     const planet1Offset = (scrollPosition / windowHeight) * 550;
//     const planet2Offset = (scrollPosition / windowHeight) * 650;
//     const planet3Offset = (scrollPosition / windowHeight) * 650;
//     const planet4Offset = (scrollPosition / windowHeight) * 500;
//     const planet5Offset = (scrollPosition / windowHeight) * 650;

//     // Apply the new positions with a smoother transition
//     $("#planet1 img").css("transform", "translateY(" + planet1Offset + "px)");
//     $("#planet2 img").css("transform", "translateY(" + planet2Offset + "px)");
//     $("#planet3 img").css("transform", "translateY(" + planet3Offset + "px)");
//     $("#planet4 img").css("transform", "translateY(" + planet4Offset + "px)");
//     $("#planet5 img").css("transform", "translateY(" + planet5Offset + "px)");
// });


// $(document).ready(function () {
//     // Intersection Observer callback function
//     const Observer = new IntersectionObserver((entries) => {
//         entries.forEach((entry) => {
//             if(entry.isIntersecting){
//                 if(entry.target.classList.contains('right')) {
//                     entry.target.classList.add('left');
//                 }
//                 if(entry.target.classList.contains('rightslow')) {
//                     entry.target.classList.add('leftslow');
//                 }
//                 if(entry.target.classList.contains('topfast')) {
//                     entry.target.classList.add('bottomfast');
//                 }
//                 if(entry.target.classList.contains('topslow')) {
//                     entry.target.classList.add('bottomslow');
//                 }
//                 if(entry.target.classList.contains('bottomTop')) {
//                     entry.target.classList.add('bottom0');
//                 }
//                 if(entry.target.classList.contains('rightLeft')) {
//                     entry.target.classList.add('right0');
//                 }
//                 if(entry.target.classList.contains('planetScale')) {
//                     entry.target.classList.add('planetScale');
//                 }
//                 if(entry.target.classList.contains('grow0')) {
//                     entry.target.classList.add('grow1');
//                 }

//                 // For phones from about us page
//                 if(entry.target.classList.contains('phone1')) {
//                     entry.target.classList.add('phoneShow');
//                 }
//                 if (entry.target.classList.contains('phone2')) {
//                     entry.target.classList.add('phoneShow2');
//                 }

//                 if (entry.target.classList.contains('growdefault_01')) {
//                     entry.target.classList.add('growslow_01');
//                 }if (entry.target.classList.contains('growdefault_02')) {
//                     entry.target.classList.add('growslow_02');
//                 }if (entry.target.classList.contains('growdefault_03')) {
//                     entry.target.classList.add('growslow_03');
//                 }

//             } else {
//                 if(entry.target.classList.contains('right')) {
//                     entry.target.classList.remove('left');
//                 }
//                 if(entry.target.classList.contains('rightslow')) {
//                     entry.target.classList.remove('leftslow');
//                 }
//                 if(entry.target.classList.contains('topfast')) {
//                     entry.target.classList.remove('bottomfast');
//                 }
//                 if(entry.target.classList.contains('topslow')) {
//                     entry.target.classList.remove('bottomslow');
//                 }
//                 if(entry.target.classList.contains('bottomTop')) {
//                     entry.target.classList.remove('bottom0');
//                 }
//                 if(entry.target.classList.contains('rightLeft')) {
//                     entry.target.classList.remove('right0');
//                 }
//                 if(entry.target.classList.contains('grow0')) {
//                     entry.target.classList.remove('grow1');
//                 }

//                 // For phones from about us page
//                 if(entry.target.classList.contains('phone1')) {
//                     entry.target.classList.remove('phoneShow');
//                 }
//                 if(entry.target.classList.contains('phone2')) {
//                     entry.target.classList.remove('phoneShow2');
//                 }
//                 if (entry.target.classList.contains('growdefault_01')) {
//                     entry.target.classList.remove('growslow_01');
//                 }if (entry.target.classList.contains('growdefault_02')) {
//                     entry.target.classList.add('growslow_02');
//                 }if (entry.target.classList.contains('growdefault_03')) {
//                     entry.target.classList.add('growslow_03');
//                 }
//             }
//         });
//     });
//     //Right animation observer
//     const hiddenElementsRight = document.querySelectorAll('.right');
//     hiddenElementsRight.forEach((el) => Observer.observe(el));

//     const hiddenElementsRightslow = document.querySelectorAll('.rightslow');
//     hiddenElementsRightslow.forEach((el) => Observer.observe(el));
//     //Top animation observer
//     const hiddenElementsTop = document.querySelectorAll('.topfast');
//     hiddenElementsTop.forEach((el) => Observer.observe(el));

//     const hiddenElementsslow = document.querySelectorAll('.topslow');
//     hiddenElementsslow.forEach((el) => Observer.observe(el));

//     const bottomTop = document.querySelectorAll('.bottomTop');
//     bottomTop.forEach((el) => Observer.observe(el));

//     const rightLeft = document.querySelectorAll('.rightLeft');
//     rightLeft.forEach((el) => Observer.observe(el));

//     const grow0 = document.querySelectorAll('.grow0');
//     grow0.forEach((el) => Observer.observe(el));

//     const slideUp1 = document.querySelectorAll('.phone1');
//     slideUp1.forEach((el) => Observer.observe(el));

//     const slideUp2 = document.querySelectorAll('.phone2');
//     slideUp2.forEach((el) => Observer.observe(el));

//     const appeaarance = document.querySelectorAll('.appeaar0');
//     appeaarance.forEach((el) => Observer.observe(el));

//     const default_01 = document.querySelectorAll('.growdefault_01');
//     default_01.forEach((el) => Observer.observe(el));
//     const default_02 = document.querySelectorAll('.growdefault_02');
//     default_02.forEach((el) => Observer.observe(el));
//     const default_03 = document.querySelectorAll('.growdefault_03');
//     default_03.forEach((el) => Observer.observe(el));
// });


// About Us
//section 2
$(document).ready(function () {
    const planets = $(".small_planets .tab");

    planets.on("click", function () {
        const index = $(this).index();
        planets.removeClass('scale-up');
        $(this).toggleClass('scale-up');
        $('.tab span').fadeOut();
        $('.tab span').eq(index).fadeIn();
        switch (index) {
            case 7:
                $('.small_planets').css('transform', 'translateX(0%)');
                break;
            case 6:
                $('.small_planets').css('transform', 'translateX(15%)');
                break;
            case 5:
                $('.small_planets').css('transform', 'translateX(25%)');
                break;
            case 4:
                $('.small_planets').css('transform', 'translateX(35%)');
                break;
            case 3:
                $('.small_planets').css('transform', 'translateX(45%)');
                break;
            case 2:
                $('.small_planets').css('transform', 'translateX(55%)');
                break;
            case 1:
                $('.small_planets').css('transform', 'translateX(65%)');
                break;
            case 0:
                $('.small_planets').css('transform', 'translateX(65%)');
                break;
            default:
                break;
        }
    });
});




$(document).ready(function () {
    // $('.services').empty();
    $('.services').on('click',function(){
        if ($(".service_sub_menu").is(":visible")) {
            $(".service_sub_menu").slideUp();
        } else {
            $(".service_sub_menu").slideDown();
        }
    });
    $('.services2').on('click',function(){
        if ($(".service_sub_menu2").is(":visible")) {
            $(".service_sub_menu2").slideUp();
        } else {
            $(".service_sub_menu2").slideDown();
        }
    });
});


// $(document).ready(function () {
//     const rotationIncrement = 90;
//     const baseSpeed = 0.5;
//     const speedFactor = 0.2;
//     const orbits = document.querySelectorAll('.orbit');
//     const tabs = document.querySelectorAll('.tab');
//     const contents = document.querySelectorAll('.content');
//     let rotation = 0;
//     let activeTab = tabs.length;
//     tabs[activeTab - 1].classList.add('active');
//     contents[activeTab - 1].classList.add('active');
//     contents[activeTab - 1].classList.remove('hidden');
//     tabs.forEach((tab) => {
//         tab.addEventListener('click', () => {
//             tabs.forEach(t => t.classList.remove('active'));
//             contents.forEach(c => {
//                 c.classList.remove('active');
//                 c.classList.add('hidden');
//             });
//             tab.classList.add('active');
//             const selectedContent = document.getElementById(`content${tab.dataset.tab}`);
//             selectedContent.classList.add('active');
//             selectedContent.classList.remove('hidden');
//             rotation += rotationIncrement;
//             orbits.forEach((orbit, i) => {
//                 const speed = baseSpeed + i * speedFactor;
//                 orbit.style.transition = `transform ${speed}s ease-in-out`;
//                 orbit.style.transform = `translate(-50%, -50%) rotate(${rotation + parseFloat(getComputedStyle(orbit).getPropertyValue('--initial-rotation'))}deg)`;
//             });
//             activeTab = parseInt(tab.dataset.tab, 10);
//         });
//     });
// });
