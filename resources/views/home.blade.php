<x-app-layout>

    @section('title', 'Home')

    <x-home.hero-slider></x-home.hero-slider>

    {{--    Swiper js slider--}}
    {{--    <div class="swiper-container home-hero-section-swiper">--}}
    {{--        <div class="swiper-wrapper">--}}
    {{--            <div class="swiper-slide">--}}
    {{--                <x-home.swiper-slider></x-home.swiper-slider>--}}
    {{--            </div>--}}
    {{--            <div class="swiper-slide">--}}
    {{--                <x-home.swiper-slider></x-home.swiper-slider>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="swiper-button-next"><i class="fa-solid fa-circle-chevron-right fa-2x"></i></div>--}}
    {{--        <div class="swiper-button-prev"><i class="fa-solid fa-circle-chevron-left fa-2x"></i></div>--}}
    {{--        <div class="swiper-pagination"></div>--}}
    {{--    </div>--}}
    {{--    Swiper js slider--}}
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800">Our Services</h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">We offer a wide range of services to help you achieve your goals. From construction management to general contracting, we've got you covered.</p>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex justify-center mb-4">
                        <svg class="h-16 w-16 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.38 0 2.5-1.12 2.5-2.5S13.38 3 12 3 9.5 4.12 9.5 5.5 10.62 8 12 8zM5 21a7 7 0 017-7h0a7 7 0 017 7H5z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800">Construction</h3>
                    <p class="mt-4 text-gray-600">We provide comprehensive construction services from planning to execution.</p>
                </div>
                <!-- Repeat similar blocks for other services -->
            </div>
        </div>
    </section>


    <x-home.company-experience></x-home.company-experience>
    <x-home.partner></x-home.partner>
    <x-home.about-us></x-home.about-us>
    <x-home.features></x-home.features>
    <x-home.our-clients></x-home.our-clients>
    <livewire:contact-form/>
    {{--    <x-home.get-a-quote></x-home.get-a-quote>--}}

    {{--    <x-home.airport-hero></x-home.airport-hero>--}}

    {{--    @push('scripts')--}}
    {{--        <script>--}}
    {{--            console.log('pushed');--}}
    {{--        </script>--}}
    {{--    @endpush--}}
</x-app-layout>

