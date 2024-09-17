<x-app-layout>

    @section('title', 'Projects')

    <section class="hero h-screen flex items-center justify-center text-center">
        <div class="text-center px-6">
            <h1 class="text-5xl font-extrabold text-white">Our Projects</h1>
            <p class="text-xl text-gray-300 mt-4">Excellence from concept to completion, with modern engineering
                solutions.</p>
            <a href="#projects"
               class="mt-8 inline-block text-lg font-medium bg-gradient-to-r from-purple-500 to-indigo-600 text-white py-3 px-6 rounded-lg shadow-lg hover:from-indigo-600 hover:to-purple-500 hover:-translate-y-1 transition-all duration-500">Explore
                Projects</a>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="max-w-7xl mx-auto py-16 px-6">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 mt-16">
                <h2 class="text-4xl font-bold text-gray-800 gradient-text">Our Recent Works</h2>
                <p class="mt-4 text-lg text-gray-600">Comprehensive solutions tailored to your needs.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                <!-- Project Card -->

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/security-pass-saidpur-airport.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Security Pass System Works At Saidpur Airport Under Civil Aviation Authority Bangladesh</p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/security-pass-ctg-airport.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Security Pass System Works At Shah Amanat International Airport Under Civil Aviation Authority Bangladesh
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/security-pass-jassore-airport.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Security Pass System Works At Jassore Airport Under Civil Aviation Authority Bangladesh
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/security-pass-coxs-bazar-airport.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Security Pass System Works At Cox's Bazar Airport Under Civil Aviation Authority Bangladesh
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/coxs-bazar-resort-project.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Cox's Bazar Resort Project Consultancy</p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Monument-Project-BAF.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Monument Project Consultancy  (Bangladesh Air Force)
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Office-Interior-Project-Consultancy-2.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Office Interior Project Consultancy
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Apartment-Interior-Project-Consultancy-2.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Apartment Interior Project Consultancy
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Dhaka-Resort-Project-Consultancy.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Dhaka Resort Project Consultancy
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Jamuna-Railway-Project.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Wire Mash Design, Supply at jamuna railway bridge construction project Under Ministry of Railways
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Full-Floor-Epoxy-Project.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Full Floor Epoxy Project (Client -ZHAOFENG GELATIN LTD.)
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Renovation-and-Development-Work-BSMMU.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Renovation and Development Works Under BSMMU
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Civil-material-BSMMU.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Civil Material Supply and Installation at Super Specialized Hospital Under BSMMU, Dhaka.
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Civil-material-Matarbari.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Civil Material  Supply at Matarbari 1200 mw Coal power Plant  Project At Cox's Bazar
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Maintenance-Supply-Acorn.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Maintenance  Supply at Acorn Infrastructure Services At Chittagong
                        </p>
                    </figcaption>
                </figure>




                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Building-Project-Uttara.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Seven Storied Building Project Design and Execution At Uttara, Dhaka
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Renovation-CAAB.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Full Renovation Works and Interior Development At Dhaka Airport Under Civil Aviation Authority Bangladesh
                        </p>
                    </figcaption>
                </figure>

                <figure class="relative max-w-md transition-all duration-300 hover:translate-y-[-10px] cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg w-full h-48" src="{{ asset("/images/completed-projects/Civil-material-Wusdom-Hotel.png") }}" alt="">
                    </a>
                    <figcaption class="mt-4 text-lg text-gray-600">
                        <p>Civil Material  Supply at  Wisdom 5-Star Hotel , Sylhet
                        </p>
                    </figcaption>
                </figure>


                {{--                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">--}}
{{--                    <img class="w-full h-48 object-cover" src="{{ asset("/images/completed-projects/coxs-bazar-resort-project.png") }}" alt="Project 1">--}}
{{--                    <div class="p-6">--}}
{{--                        <h3 class="text-2xl font-semibold text-gray-800">Coxs Bazar Resort Project Consultancy</h3>--}}
{{--                        <p class="text-gray-600 mt-4">Coxs Bazar Resort Project Consultancy</p>--}}
{{--                        <a href="#"--}}
{{--                           class="relative inline-block mt-4 before:absolute before:-inset-1 before:block before:-skew-y-3 dark:hover:text-white text-indigo-600 dark:text-indigo-600 hover:text-slate-100 before:hover:bg-slate-800">--}}
{{--                            <span class="relative skew-y-3">View Details</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-indigo-600 to-purple-600 py-16">
        <div class="max-w-7xl mx-auto text-center text-white">
            <h2 class="text-4xl font-bold">Ready to Get Started?</h2>
            <p class="mt-6 text-lg">Contact us today to discuss your next project, and let's bring your vision to
                life.</p>
            <a href="{{ route('contact-us') }}"
               class="mt-8 inline-block bg-white text-indigo-600 font-semibold py-3 px-6 rounded-lg shadow-lg hover:bg-indigo-100 hover:-translate-y-1 transition-all duration-500">Contact
                Us</a>
        </div>
    </section>

</x-app-layout>
