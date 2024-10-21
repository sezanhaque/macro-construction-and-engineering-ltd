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


    <x-home.company-experience></x-home.company-experience>
    <x-home.partner></x-home.partner>
    <x-home.standard-we-follow></x-home.standard-we-follow>
    <x-home.aviation-partner />
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

