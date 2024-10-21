<div
    class="relative flex-col justify-center overflow-hidden bg-stone-100 dark:bg-gradient-to-r dark:from-slate-900 dark:to-slate-700 py-20 mx-3 md:mx-20 my-20 rounded-lg">
    <div class="w-full items-center mx-auto max-w-screen-lg">
        <div class="group grid w-full grid-cols-1 md:grid-cols-2">
            <div
                class="pl-12 md:pl-16 relative flex items-start md:items-end flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-blue-500 before:bottom-0 before:left-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300">
                <div
                    class="relative md:absolute top-0 left-0 bg-gradient-to-r from-green-400 to-blue-500 w-auto md:w-4/6 mr-6 md:mr-0 px-10 py-14 flex flex-col justify-center rounded-xl group-hover:from-pink-500 group-hover:to-yellow-500 transition-all">
                    <span class="block mb-5 font-bold group-hover:text-orange-300">HERE WE ARE</span>
                    <h2 class="text-white font-bold text-xl md:text-2xl">
                        We started as a tiny team dedicated to
                        <a class="mt-5 hover:cursor-pointer relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 dark:hover:before:bg-white dark:hover:text-gray-900 text-slate-900 dark:text-gray-100 sm:text-3xl hover:text-slate-100 before:hover:bg-slate-800">
                            <span class="relative skew-y-3">Aviation Sector</span>
                        </a>
                    </h2>
                </div>
                {{--                <a class="font-bold text-sm flex my-4 md:mb-8 items-center gap-2 transition-all hover:translate-x-1"--}}
                {{--                   href="">--}}
                {{--                    <span class="dark:text-gray-400">MORE ABOUT US</span>--}}
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
                {{--                         stroke-width="1.5"--}}
                {{--                         stroke="currentColor" class="dark:text-gray-400 w-6 h-6">--}}
                {{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>--}}
                {{--                    </svg>--}}
                {{--                </a>--}}

                <a href="{{ route('about-us') }}"
                   class="sm:w-fit w-full group px-3.5 py-2 md:mb-8 rounded-lg transition-all justify-center items-center flex">
                        <span
                            class="px-1.5 text-indigo-600 text-sm font-medium leading-6 group-hover:-translate-x-0.5 transition-all">More About Us</span>
                    <svg class="group-hover:translate-x-0.5 transition-all"
                         xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="#4F46E5" stroke-width="1.6"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="rounded-xl overflow-hidden hidden md:block">
                    <img src="{{ storage_url("images/airport-4.jpg") }}" alt="">
                </div>
            </div>

            <div>
                <div class="pl-12 pr-12 md:pr-0">
                    <p class="peer mb-6 text-gray-400">
                        We are the people who provide innovative solutions to industrial sectors, enabling them to
                        achieve greater efficiencies and ultimately increase their profitability. MCEL is a
                        multidisciplined engineering, installation and maintenance company with extensive experience
                        working on sites throughout the country. We provide services by three distinct means;
                        consultancy, projects and ongoing operations.

                    </p>
                    <h3 class="mb-4 font-semibold text-xl text-gray-400">Our key areas of expertise include</h3>
                    <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-500">
                        <li class="uppercase">AVIATION CONSULTANCY</li>
                        <li class="uppercase">CIVIL ENGINEERING</li>
                        <li class="uppercase">MECHANICAL ENGINEERING</li>
                        <li class="uppercase">SOFTWARE ENGINEERING & IT DEVELOPMENT</li>
                        <li class="uppercase">FIRE SAFETY ENGINEERING</li>
                        <li class="uppercase">HVAC, Water and Waste Treatment</li>
                        <li class="uppercase">ENERGY GENERATION, POWER DISTRIBUTION</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
