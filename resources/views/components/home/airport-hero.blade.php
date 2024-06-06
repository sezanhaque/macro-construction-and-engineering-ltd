
<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
         aria-hidden="true">
        <div
            class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    {{--            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">--}}
    {{--                <div class="hidden sm:mb-8 sm:flex sm:justify-center">--}}
    {{--                    <div--}}
    {{--                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">--}}
    {{--                        Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span--}}
    {{--                                class="absolute inset-0" aria-hidden="true"></span>Read more <span--}}
    {{--                                aria-hidden="true">&rarr;</span></a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="text-center">--}}
    {{--                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">--}}
    {{--                        Your trusted Airport Solution Provider.--}}
    {{--                    </h1>--}}
    {{--                    <p class="mt-6 text-lg leading-8 text-gray-600">We provide engineering, management and specialist--}}
    {{--                        technical services for public and private sector clients.--}}
    {{--                    </p>--}}
    {{--                    <div class="mt-10 flex items-center justify-center gap-x-6">--}}
    {{--                        <a href="#"--}}
    {{--                           class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get--}}
    {{--                            started</a>--}}
    {{--                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span--}}
    {{--                                aria-hidden="true">→</span></a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    <div class="relative flex flex-col-reverse mt-2 sm:mt-10 py-16 lg:pt-0 lg:flex-col lg:pb-0">
        <div
            class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
            <svg
                class="absolute left-0 hidden h-full text-white dark:bg-gradient-to-r dark:from-slate-900 dark:to-slate-700 dark:bg-clip-text dark:text-transparent transform -translate-x-1/2 lg:block"
                viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                <path d="M50 0H100L50 100H0L50 0Z"></path>
            </svg>

            @if(storage_exists('images/airport.jpg'))
                <img src="{{ storage_url('images/airport.jpg') }}"
                     class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full dark:rounded-lg"
                     alt="Logo"/>
            @endif
        </div>
        <div
            class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
            <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5 ">
                {{--                    <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">--}}
                {{--                        Brand new--}}
                {{--                    </p>--}}
                <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-none">
                    Your trusted Airport <br class="hidden md:block"/>
                    Solution Provider.
                </h2>
                <p class="pr-5 mb-5 text-base text-gray-700 dark:text-gray-200 md:text-lg">
                    We provide engineering, management and specialist technical services for public and private
                    sector clients.
                </p>
                <div class="flex items-center">
                    {{--                        <a--}}
                    {{--                            href="/"--}}
                    {{--                            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"--}}
                    {{--                        >--}}
                    {{--                            Get started--}}
                    {{--                        </a>--}}
                    {{--                        <a href="#"--}}
                    {{--                           class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">--}}
                    {{--                            Learn more--}}
                    {{--                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"--}}
                    {{--                                 xmlns="http://www.w3.org/2000/svg">--}}
                    {{--                                <path fill-rule="evenodd"--}}
                    {{--                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"--}}
                    {{--                                      clip-rule="evenodd"></path>--}}
                    {{--                            </svg>--}}
                    {{--                        </a>--}}

                    {{-- Gradient outline Button --}}
                    <a
                        class="cursor-pointer relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900
                            rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400
                            hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800
                            hover:bg-gradient-to-br shadow-lg shadow-red-500/50
                            dark:shadow-lg dark:shadow-red-800/80">
                            <span
                                class="inline-flex relative px-5 py-2.5 transition-transform ease-in-out hover:translate-x-1 duration-150 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Learn more
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    </a>
                    {{-- Gradient outline Button --}}

                    {{--                        <a href="/" aria-label=""--}}
                    {{--                           class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Learn--}}
                    {{--                            more</a>--}}
                </div>
            </div>
        </div>
    </div>
    <div
        class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        aria-hidden="true">
        <div
            class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>

{{--    <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0 top-16">--}}
{{--        <div--}}
{{--            class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">--}}
{{--            <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block"--}}
{{--                 viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">--}}
{{--                <path d="M50 0H100L50 100H0L50 0Z"></path>--}}
{{--            </svg>--}}

{{--            @if(storage_exists('images/airport.jpg'))--}}
{{--                <img src="{{ storage_url('images/airport.jpg') }}" class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" alt="Logo"/>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">--}}
{{--            <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">--}}
{{--                <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">--}}
{{--                    Brand new--}}
{{--                </p>--}}
{{--                <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">--}}
{{--                    Everything you<br class="hidden md:block"/>--}}
{{--                    can imagine--}}
{{--                    <span class="inline-block text-deep-purple-accent-400">is real</span>--}}
{{--                </h2>--}}
{{--                <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">--}}
{{--                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,--}}
{{--                    totam rem aperiam, eaque ipsa quae. explicabo.--}}
{{--                </p>--}}
{{--                <div class="flex items-center">--}}
{{--                    <a--}}
{{--                        href="/"--}}
{{--                        class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"--}}
{{--                    >--}}
{{--                        Get started--}}
{{--                    </a>--}}
{{--                    <a href="/" aria-label=""--}}
{{--                       class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Learn--}}
{{--                        more</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
