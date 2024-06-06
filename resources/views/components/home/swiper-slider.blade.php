<div>
    <div class="relative isolate top-10 px-6 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
             aria-hidden="true">
            <div
                class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
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
                    <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-none">
                        Your trusted Airport <br class="hidden md:block"/>
                        <span>
                            <a href="#"
                               class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 dark:hover:before:bg-white dark:hover:text-gray-900 text-slate-900 dark:text-gray-100 sm:text-4xl hover:text-slate-100 before:hover:bg-slate-800">
                                <span class="relative skew-y-3">Solution</span>
                            </a>
                        Provider.
                        </span>
                    </h2>
                    <p class="pr-5 mb-5 text-base text-gray-700 dark:text-gray-200 md:text-lg">
                        We provide engineering, management and specialist technical services for public and private
                        sector clients.
                    </p>
                    <div class="flex items-center">
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
                    </div>
                </div>
            </div>
        </div>
        {{--        <div--}}
        {{--            class="absolute inset-x-0 top-[calc(100%-45rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"--}}
        {{--            aria-hidden="true">--}}
        {{--            <div--}}
        {{--                class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"--}}
        {{--                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>--}}
        {{--        </div>--}}
    </div>
</div>
