<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <footer class="relative bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        @if(storage_exists('images/logo.png'))
                            <img src="{{ storage_url('images/logo.png') }}" class="h-10 mr-3" alt="Logo"/>
                        @endif
                        <span
                            class="self-center text-sm sm:text-2xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span>
                    </a>
                    <div class="">
                        <p class="mx-2 my-4 text-sm text-gray-900 uppercase dark:text-gray-400 font-medium">
                            We provide engineering, management and specialist technical services <br> for public and private sector clients.
                        </p>
                    </div>
                    <address class="not-italic ml-2 mt-4 font-medium">
                        <p class="mb-3 text-sm text-gray-900 uppercase dark:text-white">
                            Address
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 mb-2">
                            House-1, Road-9, Sector-12
                            <br>
                            Uttara, Dhaka- 1230, Bangladesh
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 mb-2">
                            Trade License No.: TRAD/DNCC/138548/2022
                            <br>
                            TIN No.: 386980922062
                        </p>
                        <div class="flex text-gray-500 dark:text-gray-400 ">
                            <svg class="w-4 h-4 self-center mr-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                                <path
                                    d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z"/>
                            </svg>
                            Office:
                            <a class="ml-1 border-bottom-on-hover-dark" href="{{ config('app.mobile-href') }}">{{ config('app.mobile') }}</a>
                        </div>
                        <div class="flex text-gray-500 dark:text-gray-400 ">
                            <svg class="w-4 h-4 self-center mr-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                            Email:
                            <a class="ml-1 border-bottom-on-hover-dark" href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
                        </div>
                    </address>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">About Us</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Our History</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Projects</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
            <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
              {{ __('Copyright') }} &copy; {{ date('Y') }}
              <a href="{{ route('home') }}" class="hover:underline">
                  {{ config('app.name') }}™.
              </a>
              All Rights Reserved.
          </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                  d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                  d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                            <path fill-rule="evenodd"
                                  d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                                  clip-rule="evenodd"/>
                            <path d="M3 5.012H0V15h3V5.012Z"/>
                        </svg>
                        <span class="sr-only">LinkedIn page</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
