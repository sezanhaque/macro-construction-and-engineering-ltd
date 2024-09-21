<x-app-layout>
    @section("title", "About Us")

    <section class="hero h-screen flex items-center justify-center text-center">
        <div class="text-center px-6">
            <h1 class="text-5xl font-extrabold text-white">About Us</h1>
            <p class="text-xl text-gray-300 mt-4">You can dream,
                create, design, and build the most wonderful place in the world.
                <br> But it requires people to make the dream a reality.</p>
            <a href="#story"
               class="mt-8 inline-block text-lg font-medium bg-gradient-to-r from-purple-500 to-indigo-600 text-white py-3 px-6 rounded-lg shadow-lg hover:from-indigo-600 hover:to-purple-500 hover:-translate-y-1 transition-all duration-500">More
                About Us</a>
        </div>
    </section>

    {{--    <section class="mt-16 py-14 lg:py-24 relative z-0 ">--}}
    {{--        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center">--}}
    {{--            <h1--}}
    {{--                class="max-w-2xl mx-auto text-center font-manrope font-bold text-4xl  text-slate-900 dark:text-gray-300 mb-5 md:text-5xl md:leading-normal">--}}
    {{--                Empowering Each Other to <span class="text-indigo-600">Succeed</span>--}}
    {{--            </h1>--}}
    {{--            <p class="max-w-sm mx-auto text-center text-base font-normal leading-7 text-gray-500 mb-9">You can dream,--}}
    {{--                create, design, and build the most wonderful place in the world. But it requires people to make the--}}
    {{--                dream a reality.</p>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section id="story" class="py-24 relative xl:mr-0 lg:mr-5 mr-0">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                            <h6 class="text-gray-400 text-base font-normal leading-relaxed">About Us</h6>
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2
                                    class="text-indigo-700 text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                    The Tale of Our Achievement Story</h2>
                                <p
                                    class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                    Our achievement story is a testament to teamwork and perseverance. Together, we've
                                    overcome challenges, celebrated victories, and created a narrative of progress and
                                    success.</p>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center items-start gap-6 flex">
                            <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 dark:border-gray-700 dark:hover:border-gray-500 transition-all flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-slate-900 dark:text-gray-300 text-2xl font-bold font-manrope leading-9">
                                        33+ Years</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Influencing Digital
                                        Landscapes Together</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 dark:border-gray-700 dark:hover:border-gray-500 transition-all flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-slate-900 dark:text-gray-300 text-2xl font-bold font-manrope leading-9">
                                        125+ Projects
                                    </h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Excellence Achieved
                                        Through Success</p>
                                </div>
                            </div>
                            <div class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 dark:border-gray-700 dark:hover:border-gray-500 transition-all flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-slate-900 dark:text-gray-300 text-2xl font-bold font-manrope leading-9">
                                        26+ Awards</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Our Dedication to
                                        Innovation Wins Understanding</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 dark:border-gray-700 dark:hover:border-gray-500 transition-all flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-slate-900 dark:text-gray-300 text-2xl font-bold font-manrope leading-9">
                                        99% Happy
                                        Clients</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Mirrors our Focus on
                                        Client Satisfaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="sm:w-fit w-full group px-3.5 py-2 bg-indigo-50 hover:bg-indigo-100 rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all justify-center items-center flex">
                        <span
                            class="px-1.5 text-indigo-600 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all">Read More</span>
                        <svg class="group-hover:translate-x-0.5 transition-all"
                             xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="#4F46E5" stroke-width="1.6"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="w-full lg:justify-start justify-center items-start flex">
                    <div
                        class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-gray-100 rounded-2xl sm:border border-gray-200 dark:border-gray-950 dark:hover:border-gray-700 dark:bg-gradient-to-r dark:from-slate-900 dark:to-slate-700 relative hover:border-gray-400 transition-all cursor-pointer">
                        <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-2xl object-cover"
                             src="https://pagedone.io/asset/uploads/1717742431.png" alt="about Us image"/>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-14 lg:py-24 relative">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                <div class="img-box">
                    <img src="https://pagedone.io/asset/uploads/1702034769.png" alt="About Us tailwind page"
                         class="max-lg:mx-auto object-cover">
                </div>
                <div class="lg:pl-[100px] flex items-center">
                    <div class="data w-full">
                        <h2
                            class="font-manrope text-slate-900 dark:text-gray-300 font-bold text-4xl lg:text-5xl mb-9 max-lg:text-center relative">
                            About Us
                        </h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                            Driven by a passion for seamless user experiences, we've meticulously curated pagedone
                            to empower creators, designers, and developers alike. Our mission is to provide a
                            comprehensive toolkit,
                            enabling you to build intuitive, beautiful interfaces that resonate with users on every
                            interaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-14 lg:py-24 relative">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-9 ">

                <div class="lg:pr-24 flex items-center">
                    <div class="data w-full">
                        <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us"
                             class="block lg:hidden mb-9 mx-auto object-cover">
                        <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-slate-900 dark:text-gray-300 mb-9 max-lg:text-center">
                            We've been Creative Since 2021</h2>
                        <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                            Pagedone isn’t just a collection of components and guidelines; it's a philosophy. We go
                            beyond aesthetics, prioritizing accessibility, scalability, and usability. Every element,
                            from the tiniest
                            detail to the grandest layout, is meticulously crafted to enhance functionality and elevate
                            user
                            satisfaction.
                        </p>
                    </div>
                </div>
                <div class="img-box ">
                    <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us tailwind page"
                         class="hidden lg:block object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-manrope text-4xl text-center text-slate-900 dark:text-gray-300 font-bold mb-14">Our results
                in numbers</h2>
            <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 p-6 rounded-xl border border-gray-200 hover:border-gray-400 dark:border-gray-700 dark:hover:border-gray-500 transition-all">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl font-bold text-indigo-600">
                            240%
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-slate-900 dark:text-gray-300 font-semibold mb-2">Company growth</h4>
                            <p class="text-xs text-gray-500 leading-5">Company's remarkable growth journey as we
                                continually innovate and drive towards new heights of success.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 p-6 rounded-xl border border-gray-200 hover:border-gray-400 dark:border-gray-700 dark:hover:border-gray-500 transition-all">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl font-bold text-indigo-600">
                            175+
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-slate-900 dark:text-gray-300 font-semibold mb-2">Company growth</h4>
                            <p class="text-xs text-gray-500 leading-5">Our very talented team members are the powerhouse
                                of pagedone and pillars of our success. </p>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 p-6 rounded-xl border border-gray-200 hover:border-gray-400 dark:border-gray-700 dark:hover:border-gray-500 transition-all">
                    <div class="flex gap-5">
                        <div class="font-manrope text-2xl font-bold text-indigo-600">
                            625+
                        </div>
                        <div class="flex-1">
                            <h4 class="text-xl text-slate-900 dark:text-gray-300 font-semibold mb-2">Projects
                                Completed</h4>
                            <p class="text-xs text-gray-500 leading-5">We have achieved more than 625 projects
                                worldwide, and we are still counting many more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" py-14 lg:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
            <div class="mb-16 rounded-full">
                <h2 class="text-4xl font-manrope font-bold text-slate-900 dark:text-gray-300 text-center">What our happy
                    user says!</h2>
            </div>

            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                 class="swiper about-us-client-text">
                <div class="swiper-wrapper cursor-pointer">
                    <div class="swiper-slide">
                        <div class="relative mb-20">
                            <!--Slider Wrapper-->
                            <div class="max-w-max mx-auto lg:max-w-4xl">
                                <p class="text-lg text-gray-500 leading-8 mb-8 text-center">
                                    I have been using pagedone for several months now, and I must say that it has made
                                    my life a lot
                                    easier. The
                                    platform's intuitive interface and ease of use have allowed me to manage my finances
                                    more effectively
                                    and
                                    make informed investment decisions. I particularly like the product's auto-tracking
                                    feature, which has
                                    saved
                                    me a lot of time and effort.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative mb-20">
                            <!--Slider Wrapper-->
                            <div class="max-w-max mx-auto lg:max-w-4xl">
                                <p class="text-lg text-gray-500 leading-8 mb-8 text-center">
                                    I have been using pagedone for several months now, and I must say that it has made
                                    my life a lot
                                    easier. The
                                    platform's intuitive interface and ease of use have allowed me to manage my finances
                                    more effectively
                                    and
                                    make informed investment decisions. I particularly like the product's auto-tracking
                                    feature, which has
                                    saved
                                    me a lot of time and effort.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative mb-20">
                            <!--Slider Wrapper-->
                            <div class="max-w-max mx-auto lg:max-w-4xl">
                                <p class="text-lg text-gray-500 leading-8 mb-8 text-center">
                                    I have been using pagedone for several months now, and I must say that it has made
                                    my life a lot
                                    easier. The
                                    platform's intuitive interface and ease of use have allowed me to manage my finances
                                    more effectively
                                    and
                                    make informed investment decisions. I particularly like the product's auto-tracking
                                    feature, which has
                                    saved
                                    me a lot of time and effort.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div thumbsSlider="" class="swiper about-us-client-round-image">
                <div class="swiper-wrapper">
                    <div class="swiper-slide cursor-pointer">
                        <img src="https://pagedone.io/asset/uploads/1704349534.png" alt=""
                             class="mx-auto scale-90 transition-all duration-300 swiper-slide:w-16 border rounded-full swiper-slide:border-indigo-600 object-cover"/>
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="https://pagedone.io/asset/uploads/1704349572.png" alt=""
                             class="mx-auto scale-90 transition-all duration-300 swiper-slide:w-16 border rounded-full swiper-slide:border-indigo-600 object-cover"/>
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <img src="https://pagedone.io/asset/uploads/1704349514.png" alt=""
                             class="mx-auto scale-90 transition-all duration-300 swiper-slide:w-16 border rounded-full swiper-slide:border-indigo-600 object-cover"/>
                    </div>

                </div>

            </div>


        </div>
    </section>

    <section class="py-14 lg:py-24 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-24">
                <h2 class="font-manrope text-4xl text-center font-bold text-slate-900 dark:text-gray-300 mb-6">Meet our
                    soldier
                </h2>
                <p class="text-lg text-gray-500 text-center">We provide all the advantages that can simplify all your
                    financial and banking support without any further issues</p>
            </div>
            <!--Slider Wrapper-->
            <div class="swiper team-swiper pb-10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                            <div class=" w-full lg:w-48 h-64">
                                <img src="{{ asset("/images/people/Chairman.jpg") }}" alt="image"
                                     class="rounded-2xl h-full object-cover mx-auto lg:mx-0 lg:w-full">
                            </div>
                            <div class="text-center lg:text-left lg:max-w-xs flex-1">
                                <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                    <h6 class="text-lg text-slate-900 dark:text-gray-300 font-semibold mb-1">Syed Badre
                                        Alam</h6>
                                    <span class="text-sm text-gray-500 group-hover:text-indigo-600">Chairman</span>
                                </div>
                                <p class="text-gray-500 leading-6 mb-7">
                                    Syed Badre Alam is experienced with global sourcing and distribution of products and
                                    Business In the USA. He ensures the quality product sourcing through developing
                                    sustainable business relations with the suppliers. His words have the power to
                                    motivate people and make them do the unthinkable. He has experience in business
                                    development and sourcing over 8 years.
                                </p>
                                <div class="flex items-center gap-4 justify-center lg:justify-start">
                                    <p
                                        class="cursor-pointer text-slate-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.1139 14.2985L26.3866 4.88892H24.4263L17.2431 13.0591L11.5059 4.88892H4.88867L13.5645 17.2437L4.88867 27.1111H6.84915L14.4348 18.4831L20.4937 27.1111H27.1109L18.1134 14.2985H18.1139ZM15.4288 17.3526L14.5497 16.1223L7.55554 6.333H10.5667L16.2111 14.2333L17.0902 15.4636L24.4272 25.7327H21.416L15.4288 17.3531V17.3526Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer text-slate-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.33716 11.9002C8.33716 9.85475 10.0192 8.19617 12.0947 8.19617C14.1702 8.19617 15.8531 9.85475 15.8531 11.9002C15.8531 13.9456 14.1702 15.6042 12.0947 15.6042C10.0192 15.6042 8.33716 13.9456 8.33716 11.9002ZM6.30543 11.9002C6.30543 15.0513 8.89727 17.6056 12.0947 17.6056C15.2921 17.6056 17.8839 15.0513 17.8839 11.9002C17.8839 8.74906 15.2921 6.19475 12.0947 6.19475C8.89727 6.19475 6.30543 8.74906 6.30543 11.9002ZM16.7602 5.96853C16.7601 6.23224 16.8393 6.49005 16.9879 6.70938C17.1365 6.9287 17.3477 7.09968 17.5949 7.2007C17.842 7.30171 18.1141 7.32822 18.3765 7.27688C18.639 7.22554 18.8801 7.09864 19.0694 6.91225C19.2587 6.72585 19.3876 6.48833 19.4399 6.22971C19.4922 5.97108 19.4656 5.70299 19.3633 5.45931C19.261 5.21563 19.0876 5.00733 18.8652 4.86073C18.6428 4.71414 18.3812 4.63583 18.1137 4.63573H18.1131C17.7544 4.63589 17.4105 4.77635 17.1568 5.02625C16.9032 5.27614 16.7605 5.61505 16.7602 5.96853ZM7.53983 20.9443C6.44063 20.895 5.84318 20.7146 5.44614 20.5621C4.91976 20.3602 4.54419 20.1196 4.14932 19.731C3.75444 19.3424 3.51002 18.9726 3.30599 18.4539C3.15122 18.0627 2.96812 17.4738 2.91816 16.3905C2.8635 15.2193 2.85258 14.8675 2.85258 11.9003C2.85258 8.93306 2.8644 8.58222 2.91816 7.41004C2.96821 6.32675 3.15266 5.73893 3.30599 5.34666C3.51092 4.82791 3.75498 4.45777 4.14932 4.06862C4.54365 3.67946 4.91886 3.43857 5.44614 3.23751C5.843 3.08497 6.44063 2.90453 7.53983 2.85528C8.72824 2.80142 9.08523 2.79066 12.0947 2.79066C15.1041 2.79066 15.4615 2.80231 16.6509 2.85528C17.7501 2.90462 18.3465 3.0864 18.7446 3.23751C19.2709 3.43857 19.6465 3.68 20.0414 4.06862C20.4363 4.45724 20.6798 4.82791 20.8847 5.34666C21.0395 5.73777 21.2226 6.32675 21.2726 7.41004C21.3272 8.58222 21.3381 8.93306 21.3381 11.9003C21.3381 14.8675 21.3272 15.2183 21.2726 16.3905C21.2225 17.4738 21.0385 18.0626 20.8847 18.4539C20.6798 18.9726 20.4357 19.3428 20.0414 19.731C19.6471 20.1193 19.2709 20.3602 18.7446 20.5621C18.3477 20.7147 17.7501 20.8951 16.6509 20.9443C15.4625 20.9982 15.1055 21.009 12.0947 21.009C9.08388 21.009 8.72788 20.9982 7.53983 20.9443ZM7.44648 0.856351C6.24626 0.910218 5.42612 1.09777 4.70988 1.37244C3.96812 1.65608 3.34018 2.03662 2.71269 2.65404C2.08521 3.27146 1.70007 3.89128 1.41226 4.62231C1.13356 5.32862 0.943248 6.13644 0.88859 7.31928C0.83303 8.504 0.820312 8.88275 0.820312 11.9002C0.820312 14.9176 0.83303 15.2964 0.88859 16.4811C0.943248 17.664 1.13356 18.4717 1.41226 19.178C1.70007 19.9086 2.0853 20.5292 2.71269 21.1463C3.34009 21.7635 3.96812 22.1435 4.70988 22.4279C5.42747 22.7026 6.24626 22.8901 7.44648 22.944C8.64923 22.9979 9.03292 23.0113 12.0947 23.0113C15.1564 23.0113 15.5408 22.9987 16.7429 22.944C17.9432 22.8901 18.7628 22.7026 19.4795 22.4279C20.2208 22.1435 20.8492 21.7637 21.4767 21.1463C22.1041 20.5289 22.4885 19.9086 22.7771 19.178C23.0558 18.4717 23.247 17.6639 23.3008 16.4811C23.3554 15.2955 23.3681 14.9176 23.3681 11.9002C23.3681 8.88275 23.3554 8.504 23.3008 7.31928C23.2461 6.13635 23.0558 5.32817 22.7771 4.62231C22.4885 3.89173 22.1032 3.27244 21.4767 2.65404C20.8502 2.03564 20.2208 1.65608 19.4804 1.37244C18.7628 1.09777 17.9431 0.909329 16.7438 0.856351C15.5417 0.802485 15.1573 0.789062 12.0956 0.789062C9.03382 0.789062 8.64923 0.801596 7.44648 0.856351Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer text-slate-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 20 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.00626 18.8859V6.59092H0.909448V18.8859H5.00669H5.00626ZM2.95871 4.91254C4.38705 4.91254 5.27629 3.96844 5.27629 2.78857C5.24956 1.58182 4.38705 0.664062 2.98587 0.664062C1.58373 0.664062 0.667969 1.58182 0.667969 2.78846C0.667969 3.96833 1.55689 4.91244 2.93187 4.91244H2.95839L2.95871 4.91254ZM7.2739 18.8859H11.3704V12.0205C11.3704 11.6536 11.3971 11.2856 11.5054 11.0235C11.8014 10.289 12.4754 9.52875 13.6074 9.52875C15.0895 9.52875 15.6827 10.6561 15.6827 12.3091V18.8859H19.7791V11.8363C19.7791 8.05999 17.7583 6.30267 15.063 6.30267C12.8532 6.30267 11.8827 7.53471 11.3434 8.37384H11.3707V6.59135H7.27412C7.32759 7.74476 7.27379 18.8863 7.27379 18.8863L7.2739 18.8859Z"
                                                fill="currentColor"/>
                                        </svg>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="group w-full flex-wrap flex items-center gap-8 flex-col md:flex-row transition-all duration-500 p-8 lg:flex-nowrap">
                            <div class=" w-full lg:w-48 h-64 max-lg:max-w-[204px] max-lg:mx-auto">
                                <img src="{{ asset("/images/people/md.jpg") }}" alt="image"
                                     class="rounded-2xl h-full object-cover mx-auto lg:mx-0 lg:w-full">
                            </div>
                            <div class="text-center lg:text-left lg:max-w-xs flex-1 flex flex-col justify-between">
                                <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                    <h6 class="text-lg text-slate-900 dark:text-gray-300 font-semibold mb-1">Md.
                                        Touhidul Alam Nishar</h6>
                                    <span
                                        class="text-sm text-gray-500 group-hover:text-indigo-600">Managing Director</span>
                                </div>
                                <p class="text-gray-500 leading-6 mb-7">
                                    Md Touhdul Alam has truly succeeded in business management with a balancing act and
                                    maintains the respect of team and superiors, also put on a good face for the company
                                    in all of its external affairs and manage the work of the company. With his sound
                                    technical expertise, combined with over 4 years of industrial experience and project
                                    experience with Foreign EPC Company.

                                </p>
                                <div
                                    class="flex items-center gap-4 justify-center lg:justify-start max-sm:bottom-0 relative">
                                    <p
                                        class="cursor-pointertext-slate-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5 " width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.1139 14.2985L26.3866 4.88892H24.4263L17.2431 13.0591L11.5059 4.88892H4.88867L13.5645 17.2437L4.88867 27.1111H6.84915L14.4348 18.4831L20.4937 27.1111H27.1109L18.1134 14.2985H18.1139ZM15.4288 17.3526L14.5497 16.1223L7.55554 6.333H10.5667L16.2111 14.2333L17.0902 15.4636L24.4272 25.7327H21.416L15.4288 17.3531V17.3526Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer text-slate-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.33716 11.9002C8.33716 9.85475 10.0192 8.19617 12.0947 8.19617C14.1702 8.19617 15.8531 9.85475 15.8531 11.9002C15.8531 13.9456 14.1702 15.6042 12.0947 15.6042C10.0192 15.6042 8.33716 13.9456 8.33716 11.9002ZM6.30543 11.9002C6.30543 15.0513 8.89727 17.6056 12.0947 17.6056C15.2921 17.6056 17.8839 15.0513 17.8839 11.9002C17.8839 8.74906 15.2921 6.19475 12.0947 6.19475C8.89727 6.19475 6.30543 8.74906 6.30543 11.9002ZM16.7602 5.96853C16.7601 6.23224 16.8393 6.49005 16.9879 6.70938C17.1365 6.9287 17.3477 7.09968 17.5949 7.2007C17.842 7.30171 18.1141 7.32822 18.3765 7.27688C18.639 7.22554 18.8801 7.09864 19.0694 6.91225C19.2587 6.72585 19.3876 6.48833 19.4399 6.22971C19.4922 5.97108 19.4656 5.70299 19.3633 5.45931C19.261 5.21563 19.0876 5.00733 18.8652 4.86073C18.6428 4.71414 18.3812 4.63583 18.1137 4.63573H18.1131C17.7544 4.63589 17.4105 4.77635 17.1568 5.02625C16.9032 5.27614 16.7605 5.61505 16.7602 5.96853ZM7.53983 20.9443C6.44063 20.895 5.84318 20.7146 5.44614 20.5621C4.91976 20.3602 4.54419 20.1196 4.14932 19.731C3.75444 19.3424 3.51002 18.9726 3.30599 18.4539C3.15122 18.0627 2.96812 17.4738 2.91816 16.3905C2.8635 15.2193 2.85258 14.8675 2.85258 11.9003C2.85258 8.93306 2.8644 8.58222 2.91816 7.41004C2.96821 6.32675 3.15266 5.73893 3.30599 5.34666C3.51092 4.82791 3.75498 4.45777 4.14932 4.06862C4.54365 3.67946 4.91886 3.43857 5.44614 3.23751C5.843 3.08497 6.44063 2.90453 7.53983 2.85528C8.72824 2.80142 9.08523 2.79066 12.0947 2.79066C15.1041 2.79066 15.4615 2.80231 16.6509 2.85528C17.7501 2.90462 18.3465 3.0864 18.7446 3.23751C19.2709 3.43857 19.6465 3.68 20.0414 4.06862C20.4363 4.45724 20.6798 4.82791 20.8847 5.34666C21.0395 5.73777 21.2226 6.32675 21.2726 7.41004C21.3272 8.58222 21.3381 8.93306 21.3381 11.9003C21.3381 14.8675 21.3272 15.2183 21.2726 16.3905C21.2225 17.4738 21.0385 18.0626 20.8847 18.4539C20.6798 18.9726 20.4357 19.3428 20.0414 19.731C19.6471 20.1193 19.2709 20.3602 18.7446 20.5621C18.3477 20.7147 17.7501 20.8951 16.6509 20.9443C15.4625 20.9982 15.1055 21.009 12.0947 21.009C9.08388 21.009 8.72788 20.9982 7.53983 20.9443ZM7.44648 0.856351C6.24626 0.910218 5.42612 1.09777 4.70988 1.37244C3.96812 1.65608 3.34018 2.03662 2.71269 2.65404C2.08521 3.27146 1.70007 3.89128 1.41226 4.62231C1.13356 5.32862 0.943248 6.13644 0.88859 7.31928C0.83303 8.504 0.820312 8.88275 0.820312 11.9002C0.820312 14.9176 0.83303 15.2964 0.88859 16.4811C0.943248 17.664 1.13356 18.4717 1.41226 19.178C1.70007 19.9086 2.0853 20.5292 2.71269 21.1463C3.34009 21.7635 3.96812 22.1435 4.70988 22.4279C5.42747 22.7026 6.24626 22.8901 7.44648 22.944C8.64923 22.9979 9.03292 23.0113 12.0947 23.0113C15.1564 23.0113 15.5408 22.9987 16.7429 22.944C17.9432 22.8901 18.7628 22.7026 19.4795 22.4279C20.2208 22.1435 20.8492 21.7637 21.4767 21.1463C22.1041 20.5289 22.4885 19.9086 22.7771 19.178C23.0558 18.4717 23.247 17.6639 23.3008 16.4811C23.3554 15.2955 23.3681 14.9176 23.3681 11.9002C23.3681 8.88275 23.3554 8.504 23.3008 7.31928C23.2461 6.13635 23.0558 5.32817 22.7771 4.62231C22.4885 3.89173 22.1032 3.27244 21.4767 2.65404C20.8502 2.03564 20.2208 1.65608 19.4804 1.37244C18.7628 1.09777 17.9431 0.909329 16.7438 0.856351C15.5417 0.802485 15.1573 0.789062 12.0956 0.789062C9.03382 0.789062 8.64923 0.801596 7.44648 0.856351Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer text-slate-900 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 20 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.00626 18.8859V6.59092H0.909448V18.8859H5.00669H5.00626ZM2.95871 4.91254C4.38705 4.91254 5.27629 3.96844 5.27629 2.78857C5.24956 1.58182 4.38705 0.664062 2.98587 0.664062C1.58373 0.664062 0.667969 1.58182 0.667969 2.78846C0.667969 3.96833 1.55689 4.91244 2.93187 4.91244H2.95839L2.95871 4.91254ZM7.2739 18.8859H11.3704V12.0205C11.3704 11.6536 11.3971 11.2856 11.5054 11.0235C11.8014 10.289 12.4754 9.52875 13.6074 9.52875C15.0895 9.52875 15.6827 10.6561 15.6827 12.3091V18.8859H19.7791V11.8363C19.7791 8.05999 17.7583 6.30267 15.063 6.30267C12.8532 6.30267 11.8827 7.53471 11.3434 8.37384H11.3707V6.59135H7.27412C7.32759 7.74476 7.27379 18.8863 7.27379 18.8863L7.2739 18.8859Z"
                                                fill="currentColor"/>
                                        </svg>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="group w-full flex-wrap flex items-center gap-8  transition-all duration-500 p-8  lg:flex-nowrap">
                            <div class=" w-full lg:w-48 h-64">
                                <img src="{{ asset("/images/people/sayedul-haque-sarker.JPG") }}" alt="image"
                                     class="rounded-2xl h-full object-cover mx-auto lg:mx-0 lg:w-full">
                            </div>
                            <div class="text-center lg:text-left lg:max-w-xs flex-1">
                                <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                    <h6 class="text-lg text-slate-900 dark:text-gray-300 font-semibold mb-1">Sayedul
                                        Haque Sarker</h6>
                                    <span class="text-sm text-gray-500 group-hover:text-indigo-600">Team Lead, Software Development</span>
                                </div>
                                <p class="text-gray-500 leading-6 mb-7">
                                    In the dynamic realm of software development, Sayedul brings a wealth of expertise to guide our team towards new
                                    horizons. With a profound understanding of the software development life-cycle and a
                                    knack for harnessing cutting-edge technologies, Sayedul cultivates an environment
                                    where creativity flourishes and challenges are met with enthusiasm.
                                </p>
                                <div class="flex items-center gap-4 justify-center lg:justify-start">
                                    <p
                                        class="cursor-pointer  text-slate-900 dark:text-gray-300 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.1139 14.2985L26.3866 4.88892H24.4263L17.2431 13.0591L11.5059 4.88892H4.88867L13.5645 17.2437L4.88867 27.1111H6.84915L14.4348 18.4831L20.4937 27.1111H27.1109L18.1134 14.2985H18.1139ZM15.4288 17.3526L14.5497 16.1223L7.55554 6.333H10.5667L16.2111 14.2333L17.0902 15.4636L24.4272 25.7327H21.416L15.4288 17.3531V17.3526Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer  text-slate-900 dark:text-gray-300 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.33716 11.9002C8.33716 9.85475 10.0192 8.19617 12.0947 8.19617C14.1702 8.19617 15.8531 9.85475 15.8531 11.9002C15.8531 13.9456 14.1702 15.6042 12.0947 15.6042C10.0192 15.6042 8.33716 13.9456 8.33716 11.9002ZM6.30543 11.9002C6.30543 15.0513 8.89727 17.6056 12.0947 17.6056C15.2921 17.6056 17.8839 15.0513 17.8839 11.9002C17.8839 8.74906 15.2921 6.19475 12.0947 6.19475C8.89727 6.19475 6.30543 8.74906 6.30543 11.9002ZM16.7602 5.96853C16.7601 6.23224 16.8393 6.49005 16.9879 6.70938C17.1365 6.9287 17.3477 7.09968 17.5949 7.2007C17.842 7.30171 18.1141 7.32822 18.3765 7.27688C18.639 7.22554 18.8801 7.09864 19.0694 6.91225C19.2587 6.72585 19.3876 6.48833 19.4399 6.22971C19.4922 5.97108 19.4656 5.70299 19.3633 5.45931C19.261 5.21563 19.0876 5.00733 18.8652 4.86073C18.6428 4.71414 18.3812 4.63583 18.1137 4.63573H18.1131C17.7544 4.63589 17.4105 4.77635 17.1568 5.02625C16.9032 5.27614 16.7605 5.61505 16.7602 5.96853ZM7.53983 20.9443C6.44063 20.895 5.84318 20.7146 5.44614 20.5621C4.91976 20.3602 4.54419 20.1196 4.14932 19.731C3.75444 19.3424 3.51002 18.9726 3.30599 18.4539C3.15122 18.0627 2.96812 17.4738 2.91816 16.3905C2.8635 15.2193 2.85258 14.8675 2.85258 11.9003C2.85258 8.93306 2.8644 8.58222 2.91816 7.41004C2.96821 6.32675 3.15266 5.73893 3.30599 5.34666C3.51092 4.82791 3.75498 4.45777 4.14932 4.06862C4.54365 3.67946 4.91886 3.43857 5.44614 3.23751C5.843 3.08497 6.44063 2.90453 7.53983 2.85528C8.72824 2.80142 9.08523 2.79066 12.0947 2.79066C15.1041 2.79066 15.4615 2.80231 16.6509 2.85528C17.7501 2.90462 18.3465 3.0864 18.7446 3.23751C19.2709 3.43857 19.6465 3.68 20.0414 4.06862C20.4363 4.45724 20.6798 4.82791 20.8847 5.34666C21.0395 5.73777 21.2226 6.32675 21.2726 7.41004C21.3272 8.58222 21.3381 8.93306 21.3381 11.9003C21.3381 14.8675 21.3272 15.2183 21.2726 16.3905C21.2225 17.4738 21.0385 18.0626 20.8847 18.4539C20.6798 18.9726 20.4357 19.3428 20.0414 19.731C19.6471 20.1193 19.2709 20.3602 18.7446 20.5621C18.3477 20.7147 17.7501 20.8951 16.6509 20.9443C15.4625 20.9982 15.1055 21.009 12.0947 21.009C9.08388 21.009 8.72788 20.9982 7.53983 20.9443ZM7.44648 0.856351C6.24626 0.910218 5.42612 1.09777 4.70988 1.37244C3.96812 1.65608 3.34018 2.03662 2.71269 2.65404C2.08521 3.27146 1.70007 3.89128 1.41226 4.62231C1.13356 5.32862 0.943248 6.13644 0.88859 7.31928C0.83303 8.504 0.820312 8.88275 0.820312 11.9002C0.820312 14.9176 0.83303 15.2964 0.88859 16.4811C0.943248 17.664 1.13356 18.4717 1.41226 19.178C1.70007 19.9086 2.0853 20.5292 2.71269 21.1463C3.34009 21.7635 3.96812 22.1435 4.70988 22.4279C5.42747 22.7026 6.24626 22.8901 7.44648 22.944C8.64923 22.9979 9.03292 23.0113 12.0947 23.0113C15.1564 23.0113 15.5408 22.9987 16.7429 22.944C17.9432 22.8901 18.7628 22.7026 19.4795 22.4279C20.2208 22.1435 20.8492 21.7637 21.4767 21.1463C22.1041 20.5289 22.4885 19.9086 22.7771 19.178C23.0558 18.4717 23.247 17.6639 23.3008 16.4811C23.3554 15.2955 23.3681 14.9176 23.3681 11.9002C23.3681 8.88275 23.3554 8.504 23.3008 7.31928C23.2461 6.13635 23.0558 5.32817 22.7771 4.62231C22.4885 3.89173 22.1032 3.27244 21.4767 2.65404C20.8502 2.03564 20.2208 1.65608 19.4804 1.37244C18.7628 1.09777 17.9431 0.909329 16.7438 0.856351C15.5417 0.802485 15.1573 0.789062 12.0956 0.789062C9.03382 0.789062 8.64923 0.801596 7.44648 0.856351Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer  text-slate-900 dark:text-gray-300 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 20 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.00626 18.8859V6.59092H0.909448V18.8859H5.00669H5.00626ZM2.95871 4.91254C4.38705 4.91254 5.27629 3.96844 5.27629 2.78857C5.24956 1.58182 4.38705 0.664062 2.98587 0.664062C1.58373 0.664062 0.667969 1.58182 0.667969 2.78846C0.667969 3.96833 1.55689 4.91244 2.93187 4.91244H2.95839L2.95871 4.91254ZM7.2739 18.8859H11.3704V12.0205C11.3704 11.6536 11.3971 11.2856 11.5054 11.0235C11.8014 10.289 12.4754 9.52875 13.6074 9.52875C15.0895 9.52875 15.6827 10.6561 15.6827 12.3091V18.8859H19.7791V11.8363C19.7791 8.05999 17.7583 6.30267 15.063 6.30267C12.8532 6.30267 11.8827 7.53471 11.3434 8.37384H11.3707V6.59135H7.27412C7.32759 7.74476 7.27379 18.8863 7.27379 18.8863L7.2739 18.8859Z"
                                                fill="currentColor"/>
                                        </svg>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="group w-full flex-wrap flex items-center gap-8 flex-col md:flex-row transition-all duration-500 p-8 lg:flex-nowrap">
                            <div class=" w-full lg:w-48 h-64 max-lg:max-w-[204px] max-lg:mx-auto">
                                <img src="https://pagedone.io/asset/uploads/1696238869.png" alt="image"
                                     class="rounded-2xl h-full object-cover mx-auto lg:mx-0 lg:w-full">
                            </div>
                            <div class="text-center lg:text-left lg:max-w-xs flex-1 flex flex-col justify-between">
                                <div class="mb-5 pb-5 border-b border-solid border-gray-300">
                                    <h6 class="text-lg text-slate-900 dark:text-gray-300 font-semibold mb-1">Alexa
                                        Kimberly</h6>
                                    <span class="text-sm text-gray-500 group-hover:text-indigo-600">Lead Designer</span>
                                </div>
                                <p class="text-gray-500 leading-6 mb-7">
                                    I’ve been lead designer for pagedone since the beginning of it and enjoyed every
                                    bit.
                                </p>
                                <div
                                    class="flex items-center gap-4 justify-center lg:justify-start max-sm:bottom-0 relative">
                                    <p
                                        class="cursor-pointer  text-slate-900 dark:text-gray-300 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.1139 14.2985L26.3866 4.88892H24.4263L17.2431 13.0591L11.5059 4.88892H4.88867L13.5645 17.2437L4.88867 27.1111H6.84915L14.4348 18.4831L20.4937 27.1111H27.1109L18.1134 14.2985H18.1139ZM15.4288 17.3526L14.5497 16.1223L7.55554 6.333H10.5667L16.2111 14.2333L17.0902 15.4636L24.4272 25.7327H21.416L15.4288 17.3531V17.3526Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer  text-slate-900 dark:text-gray-300 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.33716 11.9002C8.33716 9.85475 10.0192 8.19617 12.0947 8.19617C14.1702 8.19617 15.8531 9.85475 15.8531 11.9002C15.8531 13.9456 14.1702 15.6042 12.0947 15.6042C10.0192 15.6042 8.33716 13.9456 8.33716 11.9002ZM6.30543 11.9002C6.30543 15.0513 8.89727 17.6056 12.0947 17.6056C15.2921 17.6056 17.8839 15.0513 17.8839 11.9002C17.8839 8.74906 15.2921 6.19475 12.0947 6.19475C8.89727 6.19475 6.30543 8.74906 6.30543 11.9002ZM16.7602 5.96853C16.7601 6.23224 16.8393 6.49005 16.9879 6.70938C17.1365 6.9287 17.3477 7.09968 17.5949 7.2007C17.842 7.30171 18.1141 7.32822 18.3765 7.27688C18.639 7.22554 18.8801 7.09864 19.0694 6.91225C19.2587 6.72585 19.3876 6.48833 19.4399 6.22971C19.4922 5.97108 19.4656 5.70299 19.3633 5.45931C19.261 5.21563 19.0876 5.00733 18.8652 4.86073C18.6428 4.71414 18.3812 4.63583 18.1137 4.63573H18.1131C17.7544 4.63589 17.4105 4.77635 17.1568 5.02625C16.9032 5.27614 16.7605 5.61505 16.7602 5.96853ZM7.53983 20.9443C6.44063 20.895 5.84318 20.7146 5.44614 20.5621C4.91976 20.3602 4.54419 20.1196 4.14932 19.731C3.75444 19.3424 3.51002 18.9726 3.30599 18.4539C3.15122 18.0627 2.96812 17.4738 2.91816 16.3905C2.8635 15.2193 2.85258 14.8675 2.85258 11.9003C2.85258 8.93306 2.8644 8.58222 2.91816 7.41004C2.96821 6.32675 3.15266 5.73893 3.30599 5.34666C3.51092 4.82791 3.75498 4.45777 4.14932 4.06862C4.54365 3.67946 4.91886 3.43857 5.44614 3.23751C5.843 3.08497 6.44063 2.90453 7.53983 2.85528C8.72824 2.80142 9.08523 2.79066 12.0947 2.79066C15.1041 2.79066 15.4615 2.80231 16.6509 2.85528C17.7501 2.90462 18.3465 3.0864 18.7446 3.23751C19.2709 3.43857 19.6465 3.68 20.0414 4.06862C20.4363 4.45724 20.6798 4.82791 20.8847 5.34666C21.0395 5.73777 21.2226 6.32675 21.2726 7.41004C21.3272 8.58222 21.3381 8.93306 21.3381 11.9003C21.3381 14.8675 21.3272 15.2183 21.2726 16.3905C21.2225 17.4738 21.0385 18.0626 20.8847 18.4539C20.6798 18.9726 20.4357 19.3428 20.0414 19.731C19.6471 20.1193 19.2709 20.3602 18.7446 20.5621C18.3477 20.7147 17.7501 20.8951 16.6509 20.9443C15.4625 20.9982 15.1055 21.009 12.0947 21.009C9.08388 21.009 8.72788 20.9982 7.53983 20.9443ZM7.44648 0.856351C6.24626 0.910218 5.42612 1.09777 4.70988 1.37244C3.96812 1.65608 3.34018 2.03662 2.71269 2.65404C2.08521 3.27146 1.70007 3.89128 1.41226 4.62231C1.13356 5.32862 0.943248 6.13644 0.88859 7.31928C0.83303 8.504 0.820312 8.88275 0.820312 11.9002C0.820312 14.9176 0.83303 15.2964 0.88859 16.4811C0.943248 17.664 1.13356 18.4717 1.41226 19.178C1.70007 19.9086 2.0853 20.5292 2.71269 21.1463C3.34009 21.7635 3.96812 22.1435 4.70988 22.4279C5.42747 22.7026 6.24626 22.8901 7.44648 22.944C8.64923 22.9979 9.03292 23.0113 12.0947 23.0113C15.1564 23.0113 15.5408 22.9987 16.7429 22.944C17.9432 22.8901 18.7628 22.7026 19.4795 22.4279C20.2208 22.1435 20.8492 21.7637 21.4767 21.1463C22.1041 20.5289 22.4885 19.9086 22.7771 19.178C23.0558 18.4717 23.247 17.6639 23.3008 16.4811C23.3554 15.2955 23.3681 14.9176 23.3681 11.9002C23.3681 8.88275 23.3554 8.504 23.3008 7.31928C23.2461 6.13635 23.0558 5.32817 22.7771 4.62231C22.4885 3.89173 22.1032 3.27244 21.4767 2.65404C20.8502 2.03564 20.2208 1.65608 19.4804 1.37244C18.7628 1.09777 17.9431 0.909329 16.7438 0.856351C15.5417 0.802485 15.1573 0.789062 12.0956 0.789062C9.03382 0.789062 8.64923 0.801596 7.44648 0.856351Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </p>
                                    <p
                                        class="cursor-pointer  text-slate-900 dark:text-gray-300 hover:text-white group w-12 h-12 rounded-full flex justify-center items-center bg-gray-100 transition-all duration-500 hover:bg-indigo-600">
                                        <svg class="w-5 h-5" viewBox="0 0 20 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.00626 18.8859V6.59092H0.909448V18.8859H5.00669H5.00626ZM2.95871 4.91254C4.38705 4.91254 5.27629 3.96844 5.27629 2.78857C5.24956 1.58182 4.38705 0.664062 2.98587 0.664062C1.58373 0.664062 0.667969 1.58182 0.667969 2.78846C0.667969 3.96833 1.55689 4.91244 2.93187 4.91244H2.95839L2.95871 4.91254ZM7.2739 18.8859H11.3704V12.0205C11.3704 11.6536 11.3971 11.2856 11.5054 11.0235C11.8014 10.289 12.4754 9.52875 13.6074 9.52875C15.0895 9.52875 15.6827 10.6561 15.6827 12.3091V18.8859H19.7791V11.8363C19.7791 8.05999 17.7583 6.30267 15.063 6.30267C12.8532 6.30267 11.8827 7.53471 11.3434 8.37384H11.3707V6.59135H7.27412C7.32759 7.74476 7.27379 18.8863 7.27379 18.8863L7.2739 18.8859Z"
                                                fill="currentColor"/>
                                        </svg>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="slider-button-left"
                        class="swiper-button-prev p-2.5 group flex justify-center items-center text-slate-900 dark:text-gray-300 w-full h-full transition-all rounded-full hover:text-indigo-600"
                        data-carousel-prev>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M8.38413 15.1022L3.33301 10.0511M3.33301 10.0511L8.38413 5M3.33301 10.0511L18.3329 10.0511"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </button>
                <button id="slider-button-right"
                        class="swiper-button-next p-2.5 group flex justify-center items-center text-slate-900 dark:text-gray-300 w-full h-full transition-all rounded-full hover:text-indigo-600"
                        data-carousel-next>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M11.6158 5L16.6669 10.0511M16.6669 10.0511L11.6158 15.1022M16.6669 10.0511L1.66699 10.0511"
                            stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>

                </button>

                <div class="swiper-pagination"></div>
                <div class="swiper-scrollbar"></div>
            </div>


        </div>
    </section>

    @push('styles')

        <style>
            .swiper-wrapper {
                height: max-content !important;

                width: max-content;
            }

            .swiper-button-next,
            .swiper-button-prev {
                top: 25%;
                z-index: 1000;
                width: auto !important;
                height: auto !important;
            }

            .swiper-button-next {
                right: -0px !important;
            }

            .swiper-button-prev {
                left: 0px !important;
            }

            .swiper-button-prev:after,
            .swiper-rtl .swiper-button-next:after {
                content: "" !important;
            }

            .about-us-client-round-image {
                max-width: 320px !important;
                margin: 0 auto !important;
            }

            .swiper-button-next:after,
            .swiper-rtl .swiper-button-prev:after {
                content: "" !important;
            }

            .about-us-client-round-image .swiper-slide.swiper-slide-thumb-active > .swiper-slide\:w-16 {
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            }

            .about-us-client-round-image .swiper-slide.swiper-slide-thumb-active > .swiper-slide\:border-indigo-600 {
                --tw-border-opacity: 1;
                border-color: rgb(79 70 229 / var(--tw-border-opacity));
            }

            .team-swiper .swiper-wrapper {
                height: max-content !important;
                padding-bottom: 64px !important;
            }

            .team-swiper .swiper-horizontal > .swiper-scrollbar,
            .team-swiper .swiper-scrollbar.swiper-scrollbar-horizontal {
                max-width: 140px !important;
                height: 3px !important;
                bottom: 25px !important;
                left: 50% !important;
                transform: translateX(-50%) !important;
            }

            .team-swiper .swiper-pagination-fraction {
                bottom: 0 !important;
                padding-top: 16px !important;
            }

            .team-swiper .swiper-slide.swiper-slide-active > .slide\:border-indigo-600 {
                --tw-border-opacity: 1;
                border-color: rgb(79 70 229 / var(--tw-border-opacity));
            }

            .team-swiper .swiper-pagination-current {
                color: rgb(79 70 229) !important;
            }

            .team-swiper .swiper-pagination-total {
                color: rgb(156 163 175) !important;
            }

            .team-swiper .swiper-scrollbar-drag {
                background: rgb(79 70 229);
            }

            .team-swiper .swiper-pagination-fraction {
                bottom: 0 !important;
            }

            .team-swiper .swiper-button-prev:after,
            .team-swiper .swiper-rtl .swiper-button-next:after {
                content: '' !important;
            }

            .team-swiper .swiper-button-prev {
                top: 93% !important;
                left: 35% !important;
                z-index: 100 !important;
            }

            .team-swiper .swiper-button-next {
                top: 93% !important;
                right: 35% !important;
                z-index: 100 !important;
            }

            .team-swiper .swiper-button-next:after,
            .team-swiper .swiper-rtl .swiper-button-prev:after {
                content: '' !important;
            }

            .team-swiper .swiper-button-next svg,
            .team-swiper .swiper-button-prev svg {
                width: 24px !important;
                height: 24px !important;
            }

            .swiper-pagination-current {

            }
        </style>

    @endpush

    @push('scripts')
        <script>

        </script>
    @endpush
</x-app-layout>
