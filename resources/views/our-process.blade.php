<x-app-layout>
    @section("title", "Our Process")


    <section class="hero h-screen flex items-center justify-center text-center">
        <div class="text-center px-6">
            <h1 class="text-5xl font-extrabold text-white">Our Process</h1>
            <p class="text-xl text-gray-300 mt-4">You can dream,
                create, design, and build the most wonderful place in the world.
                <br> But it requires people to make the dream a reality.</p>
            <a href="#our-process"
               class="mt-8 inline-block text-lg font-medium bg-gradient-to-r from-purple-500 to-indigo-600 text-white py-3 px-6 rounded-lg shadow-lg hover:from-indigo-600 hover:to-purple-500 hover:-translate-y-1 transition-all duration-500">More
                About Our Process</a>
        </div>
    </section>

    {{-- process 1 --}}
    <section id="our-process" class="grid grid-cols-1 lg:grid-cols-2 relative">

        {{--        Image div--}}
        <div class="">
            <img class="bg-center bg-cover" src="{{ asset("/images/process-1st-stage.jpg") }}" alt="">
        </div>

        {{--        Text content div--}}
        <div class="p-16 md:p-20 flex flex-col justify-center">
            <div>
                <h2 class="mb-4 text-xl md:text-2xl lg:text-3xl font-extrabold text-gray-900 dark:text-white">
                    <span
                        class="uppercase text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">The First Stage
                    </span>
                </h2>
                <h1 class="mb-4 text-2xl md:text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white">
                    Client’s briefing & technical task
                </h1>
            </div>

            <blockquote class="p-4 my-4 border-s-4 border-blue-300 bg-gray-50 dark:border-blue-500 dark:bg-gray-800">
                <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">You'll lose a few
                    here and there, but every time you will learn something of your opposition, and of
                    yourself.</p>
            </blockquote>
        </div>
    </section>

    {{-- process 2 --}}
    <section id="our-process" class="grid grid-cols-1 lg:grid-cols-2 relative">

        {{--        Image div--}}
        <div class="order-1 lg:order-2">
            <img class="bg-center bg-cover w-full h-auto" src="{{ asset("/images/process-2d-stage.jpg") }}" alt="">
        </div>

        {{--        Text content div--}}
        <div class="p-16 md:p-20 flex flex-col justify-center order-2 lg:order-1">
            <div>
                <h2 class="mb-4 text-xl md:text-2xl lg:text-3xl font-extrabold text-gray-900 dark:text-white">
                <span class="uppercase text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                    The Second Stage
                </span>
                </h2>
                <h1 class="mb-4 text-2xl md:text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white">
                    Productive and effective workflow
                </h1>
            </div>

            <blockquote class="p-4 my-4 border-s-4 border-blue-300 bg-gray-50 dark:border-blue-500 dark:bg-gray-800">
                <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">
                    You'll lose a few here and there, but every time you will learn something of your opposition, and of
                    yourself.
                </p>
            </blockquote>
        </div>
    </section>

    {{-- process 3 --}}
    <section id="our-process" class="grid grid-cols-1 lg:grid-cols-2 relative">

        {{--        Image div--}}
        <div class="">
            <img class="bg-center bg-cover" src="{{ asset("/images/process-3rd-stage.jpg") }}" alt="">
        </div>

        {{--        Text content div--}}
        <div class="p-16 md:p-20 flex flex-col justify-center">
            <div>
                <h2 class="mb-4 text-xl md:text-2xl lg:text-3xl font-extrabold text-gray-900 dark:text-white">
                    <span
                        class="uppercase text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">The Final Stage
                    </span>
                </h2>
                <h1 class="mb-4 text-2xl md:text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white">
                    Project fulfillment & fruitful completion
                </h1>
            </div>

            <blockquote class="p-4 my-4 border-s-4 border-blue-300 bg-gray-50 dark:border-blue-500 dark:bg-gray-800">
                <p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">You'll lose a few
                    here and there, but every time you will learn something of your opposition, and of
                    yourself.</p>
            </blockquote>
        </div>
    </section>


    @push("styles")
        <style>
            .hero {
                background: linear-gradient(90deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url("{{ asset("/images/our-process.jpg") }}") center/cover no-repeat;
            }
        </style>
    @endpush
</x-app-layout>
