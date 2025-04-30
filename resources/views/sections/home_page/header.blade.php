<section class="bg-body bg-no-repeat bg-[center_-390px] sm:bg-center bg-[length:320%_100%] sm:bg-cover h-full w-full pb-0 sm:pb-10">
    <header id="header" class="w-full h-[1119px] lg:h-[1219px] overflow-hidden relative z-50">
        <nav id="navBar"
            class="bg-gradient-to-t from-[#100D3900] via-[#090723CC] to-[#090723] h-28 z-50 relative hidden lg:flex">
            <div class="flex justify-between items-center w-full max-w-screen-lg mx-auto">
                <img src="{{ asset('Assets/Air Drumming Logo/AirDrumming_logo.svg') }}"
                    class="logo w-[157.45px] h-[76px] object-cover object-fit" alt="Air Drumming">
                <ul
                    class="flex flex-row gap-5 justify-center items-center text-nowrap flex-nowrap text-white text-[14px] md:text-[16px] roboto font-[500]">
                    <li class="pr-5"><a href="{{ route('home') }}">Home</a></li>
                    <li class="pr-5"><a href="#aboutsection1" class="duration-700 ease-in-out">About</a></li>
                    <li><a href="#contactPage">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <div id="burgerNav"
            class="block lg:hidden h-24 w-full relative bg-gradient-to-b from-[#07061C] to-[#100D39] backdrop-blur-md z-50">
            <div class="flex w-full h-full justify-between px-5 items-center">
                <div class="pl-5">
                    <img src="{{ asset('Assets/Air Drumming Logo/AirDrumming_logo.svg') }}"
                        class="logo w-16 h-11 object-cover object-fit" alt="Air Drumming">
                </div>
                <div id="btn_burger" class="px-10 text-xl cursor-pointer">
                    <span><i class="fa-solid fa-bars"></i></span>
                </div>
            </div>
            <div id="menu_burger" class="absolute top-20 right-5 bg-[#07061C] rounded-xl py-5 px-5 w-fit hidden">
                <ul
                    class="flex flex-col items-center text-sm gap-5 text-[#00eaff98] text-left text-[14px] md:text-[16px] roboto font-[500]">
                    <li class="w-full hover:text-white mt-2"><a href="{{ route('home') }}">Home</a></li>
                    <li class="w-full hover:text-white mt-2"><a href="#aboutsection1">About</a></li>
                    <li class="w-full hover:text-white mt-2"><a href="#contactPage">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div id="Banner" class="relative z-20 mt-24 lg:mt-10 w-full lg:w-[63%] mx-auto">
            <div class="flex justify-center -translate-y-10 lg:translate-y-0 w-full lg:w-[37rem] mx-auto">
                <img src="{{ asset('Assets/Air Drumming Logo/AirDrumming_Logo-03.png') }}"
                    class="logoBanner w-full h-[15rem] sm:h-full object-cover" alt="Air Drumming">
            </div>
            <div
                class="text-white text-center w-[80%] mx-auto -translate-y-12 roboto font-[400] text-[16px] md:text-[18px] leading-relaxed">
                <p class="">Air Drumming is a rhythmic exploration, a lifestyle statement, and a social movement, that integrates users seamlessly across the mobile application, the physical experience, and their connection with the larger communities.</p>
            </div>
            <div class="flex justify-center">
                <div class="flex flex-wrap justify-center gap-5">
                    <button class="bg-black rounded-lg"><img
                            src="{{ asset('Assets/01_Home_Page/Home_Section_1/google.png') }}" alt=""
                            class="h-[67px] px-1 w-[272px]"></button>
                    <button class="bg-black rounded-lg"><img
                            src="{{ asset('Assets/01_Home_Page/Home_Section_1/apple.png') }}" alt=""
                            class="h-[67px] px-1 w-[272px]"></button>
                </div>
            </div>
        </div>
        <div id="planets" class="flex justify-center z-50">
            <div class="absolute top-0 w-[60%] h-full flex flex-row">
                <div id="planet1"
                    class="planet w-[77.63px] lg:w-[138px] absolute translate-x-[-50%] lg:-translate-x-14 translate-y-32 lg:translate-y-52">
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Mylocritas.png') }}" alt="">
                </div>
                <div id="planet2" class="planet w-32 lg:w-[220px] absolute -translate-x-[130%] lg:-translate-x-56 translate-y-[23rem]">
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Devorah.png') }}" alt="">
                </div>
            </div>
            <div id="planet3"
                class="planet w-48 lg:w-[410px] absolute right-[-30%] lg:-right-10 bottom-10 lg:bottom-20 lg:top-0 -translate-y-[240%] lg:translate-y-72">
                <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Aurelia.png') }}" alt="">
            </div>
            <div class="flex flex-row justify-between w-full relative translate-y-10">
                <div id="planet4" class="planet absolute top-0 lg:bottom-0 w-60 lg:w-[546px] left-[-20%] lg:left-32">
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Earth.png') }}" alt="">
                </div>
                <div id="planet5" class="planet absolute w-[45rem] lg:w-[986px] -right-[25rem] md:-right-32">
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_1/AD_Comet_Asteroid.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>
    @include('sections.home_page.about')
</section>
