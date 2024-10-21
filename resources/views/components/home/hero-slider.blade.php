<!-- carousel -->
<div class="carousel">
    <!-- list item -->
    <div class="list">
        <div class="item">
            <img src="{{ asset("/images/Civil-engineers_0.jpg") }}"
                 class="blur-sm" alt="airport-1">
            <div class="content">
                {{--                <div class="author">LUNDEV</div>--}}
                <div class="title">Factory industrial</div>
                <div class="topic">leader in power</div>
                <div class="des p-5 mb-5 bg-[linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5))] rounded-md">
                    The great differentiator in business is when an organization steps out and creates value from
                    something never tried before.
                </div>
                {{--                <div class="buttons group">--}}
                {{--                    <a--}}
                {{--                        class="cursor-pointer relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900--}}
                {{--                            rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400--}}
                {{--                            hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800--}}
                {{--                            hover:bg-gradient-to-br shadow-lg shadow-red-500/50--}}
                {{--                            dark:shadow-lg dark:shadow-red-800/80">--}}
                {{--                            <span--}}
                {{--                                class="inline-flex relative px-5 py-2.5 transition-transform ease-in-out hover:translate-x-1 duration-150 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">--}}
                {{--                                Learn more--}}
                {{--                                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
                {{--                                     xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                    <path fill-rule="evenodd"--}}
                {{--                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"--}}
                {{--                                          clip-rule="evenodd"></path>--}}
                {{--                                </svg>--}}
                {{--                            </span>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
            </div>
        </div>
        <div class="item">
            <img class="blur-sm" src="{{ asset("/images/aviation-banner-pc.png") }}">
            <div class="content">
                <div class="title">Smart Airport</div>
                <div class="topic">Solution</div>
                <div class="des p-5 bg-[linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5))] rounded-md">
                    Implement global awareness, full connectivity, all-scenario services, and comprehensive
                    intelligence.
                </div>
            </div>
        </div>
        <div class="item">
            <img class="blur-sm" src="{{ asset('/images/construction-slider.jpg') }}">
            <div class="content">
                <div class="title">In the Construction Industry</div>
                <div class="topic">Experience counts</div>
                <div class="des p-5 bg-[linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5))] rounded-md">
                    Driven to safety and our clients' requirements, we are the low-risk option for turnkey construction
                    projects in Bangladesh.
                </div>
            </div>
        </div>
        <div class="item">
            <img class="blur-sm" src="{{ asset('/images/Shah Amanat airport mosque car park shade.png') }}">
            <div class="content">
                <div class="title">Interior &</div>
                <div class="topic">Landscape</div>
                <div class="des p-5 bg-[linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5))] rounded-md">
                    We provide expertise and experience across all phases in the architectural process.
                    We're a team of designers, architects, creative directors and engineers.
                </div>
            </div>
        </div>
    </div>

    <div class="arrow-thumbnail">
        <!-- list thumnail -->
        <div class="thumbnail">
            <div class="item">
                <img src="{{ asset("/images/Civil-engineers_0.jpg") }}">
                <div class="content">
                    <div class="title">
                        Factory industrial leader in power
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset("/images/aviation-banner-pc.png") }}">
                <div class="content">
                    <div class="title">
                        Smart Airport Solution
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/images/construction-slider.jpg') }}">
                <div class="content">
                    <div class="title">
                        Construction Industry
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/images/Shah Amanat airport mosque car park shade.png') }}">
                <div class="content">
                    <div class="title">
                        Interior & Landscape
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->

        <div class="arrows">
            <button id="prev" class="cursor-pointer rounded-full relative overflow-hidden text-gray-900 group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400
                            hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 shadow-lg shadow-red-500/50
                            dark:shadow-lg dark:shadow-red-800/80"><
            </button>
            <button id="next" class="cursor-pointer rounded-full relative overflow-hidden text-gray-900 group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400
                            hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 shadow-lg shadow-red-500/50
                            dark:shadow-lg dark:shadow-red-800/80">>
            </button>
        </div>
    </div>
    <!-- time running -->
    {{--    <div class="time"></div>--}}
</div>
