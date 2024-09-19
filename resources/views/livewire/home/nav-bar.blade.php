<?php

//use function Livewire\Volt\{state};
use Livewire\Volt\Component;

//
new class extends Component {

}
?>

<div>
    <nav
        class="bg-white top-0 lg:top-10 drop-shadow-xl border-gray-200 w-full dark:bg-gradient-to-r dark:from-slate-900 dark:to-slate-700 fixed top-0 z-20 transition-all duration-300">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="{{ route('home') }}" class="flex items-center">
                @if(storage_exists('images/logo.png'))
                    <img src="{{ storage_url('images/logo.png') }}" class="h-10 mr-3" alt="Logo"/>
                @endif
                <span class="hidden md:block self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                    {{ config('app.name') }}
                </span>
            </a>
            <button data-collapse-toggle="mega-menu-full-image" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mega-menu-full-image" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div id="mega-menu-full-image"
                 class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col md:items-center items-start mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                    <li class="border-bottom-on-hover-dark w-full text-left md:text-center">
                        <a href="{{ route('home') }}"
                           class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700"
                           aria-current="page">Home</a>
                    </li>
                    <li class="border-bottom-on-hover-dark w-full text-left md:text-center">
                        <button id="mega-menu-full-cta-image-button"
                                data-collapse-toggle="mega-menu-full-image-dropdown"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">
                            Company
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                    </li>
                    <li class="border-bottom-on-hover-dark w-full text-left md:text-center">
                        <a href="{{ route('projects') }}"
                           class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">Projects</a>
                    </li>
                    <li class="border-bottom-on-hover-dark w-full text-left md:text-center">
                        <a href="{{ route('services') }}"
                           class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li class="border-bottom-on-hover-dark w-full text-left md:text-center">
                        <a href="{{ route('contact-us') }}"
                           class="w-full md:w-max block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent dark:border-gray-700">Contact
                            Us</a>
                    </li>
                    <li>
                        <button id="theme-toggle" type="button"
                                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 md:mt-0 mt-2">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div id="mega-menu-full-image-dropdown"
             class="mt-1 bg-white border-gray-200 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600 hidden">
            <div
                class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6">
                <ul class="hidden mb-4 space-y-4 md:mb-0 md:block" aria-labelledby="mega-menu-full-image-button">
                    <li class="flex">
                        <a href="{{ route('about-us') }}" class="border-bottom-on-hover-dark">
                            About Us
                        </a>
                    </li>
                    <li class="flex">
                        <a href="#" class="border-bottom-on-hover-dark">
                            Our Clients
                        </a>
                    </li>
                    <li class="flex">
                        <a href="#" class="border-bottom-on-hover-dark">
                            Our Team
                        </a>
                    </li>
                    <li class="flex">
                        <a href="#" class="border-bottom-on-hover-dark">
                            Our Process
                        </a>
                    </li>
                </ul>
                <ul class="mb-4 space-y-4 md:mb-0">
                    <li class="flex">
                        <a href="#" class="border-bottom-on-hover-dark">
                            Our Blog
                        </a>
                    </li>
                    <li class="flex">
                        <a href="#" class="border-bottom-on-hover-dark">
                            Testimonials
                        </a>
                    </li>
                    <li class="flex">
                        <a href="#" class="border-bottom-on-hover-dark">
                            Terms & Conditions
                        </a>
                    </li>
                    <li class="flex">
                        <a href="#" class="border-bottom-on-hover-dark">
                            License
                        </a>
                    </li>
                </ul>
                <a href="{{ route("contact-us") }}"
                   class="p-8 text-left bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken"
                   style="background-image: url({{ asset('/images/dashboard-overview.png') }})">
                    <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Stay Connected with us.</p>
                    <button type="button"
                            class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                        Get started
                        <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </nav>

    @push('scripts')

        <script>
            // console.log('nav-bar');
        </script>

    @endpush
</div>

