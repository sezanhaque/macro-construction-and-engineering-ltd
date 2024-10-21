<?php

use function Livewire\Volt\{state};

//

?>

<div>
    {{--    <div--}}
    {{--        class="hidden lg:flex items-center h-10 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 transition transform motion-reduce:transition-none motion-reduce:hover:transform-none ">--}}

    <header
        class="hidden relative lg:flex items-center z-10 h-10 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 transition-color delay-200 transition-all duration-300">
        <div class="container max-w-[90%] my-0 mx-auto">
            <div class="flex justify-between">
                <div class="flex justify-between">
                    <div class="pl-0">
                        <div class="relative">
                            <a href="{{ config('app.facebook_url') }}" target="_blank" class="inline-block text-gray-100 hover:text-gray-900 mr-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="currentColor"
                                     viewBox="0 0 8 19">
                                    <path fill-rule="evenodd"
                                          d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
{{--                            <a href="#" class="inline-block text-gray-100 hover:text-gray-900 mr-5">--}}
{{--                                <svg class="w-4 h-4" aria-hidden="true"--}}
{{--                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">--}}
{{--                                    <path fill="currentColor"--}}
{{--                                          d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
                            <a href="{{ config('app.linkedin_url') }}" target="_blank" class="inline-block text-gray-100 hover:text-gray-900 mr-5">
                                <svg class="w-4 h-4" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                                    <path fill-rule="evenodd"
                                          d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                                          clip-rule="evenodd"/>
                                    <path d="M3 5.012H0V15h3V5.012Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-info flex justify-between">
                    <div class="content flex justify-center items-center text-gray-100">
                        <svg class="w-4 h-4 text-gray-100 dark:text-white mr-2" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                            <path
                                d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z"/>
                        </svg>
                        <a class="border-bottom-on-hover" href="{{ config('app.mobile-href') }}">{{ config('app.mobile') }}</a>
                    </div>
                    <div class="content flex justify-center items-center text-gray-100">
                        <svg class="w-4 h-4 text-gray-100 dark:text-white mr-2" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                        </svg>
                        <a class="border-bottom-on-hover" href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
