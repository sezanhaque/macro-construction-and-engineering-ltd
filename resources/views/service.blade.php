<x-app-layout>

    @section('title', 'Service')

    <section class="hero h-screen flex items-center justify-center text-center">
        <div class="text-center px-6">
            <h1 class="text-5xl font-extrabold text-white">Our Services</h1>
            <p class="text-xl text-gray-300 mt-4">Excellence from concept to completion, with modern engineering
                solutions.</p>
            <a href="#WhateWeAre"
               class="mt-8 inline-block text-lg font-medium bg-gradient-to-r from-purple-500 to-indigo-600 text-white py-3 px-6 rounded-lg shadow-lg hover:from-indigo-600 hover:to-purple-500 hover:-translate-y-1 transition-all duration-500">Explore
                Services</a>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section id="WhateWeAre" class="max-w-7xl mx-auto py-16 px-6">
        <div class="text-center mb-16 mt-16">
            <h2 class="text-4xl font-bold text-gray-800 gradient-text">What We Offer</h2>
            <p class="mt-4 text-lg text-gray-600">Comprehensive solutions tailored to your needs.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Electrical Engineering -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?electrical"
                     alt="Electrical Engineering">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Electrical Engineering</h3>
                    <p class="mt-4 text-gray-600">Innovative electrical solutions, ensuring efficiency, safety, and
                        sustainability in modern infrastructure.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- Civil Engineering -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?civil"
                     alt="Civil Engineering">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Civil Engineering</h3>
                    <p class="mt-4 text-gray-600">Designing and constructing the foundations of tomorrow with innovative
                        civil engineering solutions.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- Mechanical Engineering -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?mechanical"
                     alt="Mechanical Engineering">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Mechanical Engineering</h3>
                    <p class="mt-4 text-gray-600">Engineering mechanical systems that power industries with precision
                        and reliability.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- Software Engineering -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?software"
                     alt="Software Engineering">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Software Engineering</h3>
                    <p class="mt-4 text-gray-600">Developing robust and scalable software solutions tailored to your
                        business needs.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- IT Development and Security System -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?security"
                     alt="IT Development and Security System">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">IT Development and Security System</h3>
                    <p class="mt-4 text-gray-600">Implementing cutting-edge IT solutions and security systems to protect
                        your digital assets.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- Fire Safety Engineering -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?fire-safety"
                     alt="Fire Safety Engineering">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Fire Safety Engineering</h3>
                    <p class="mt-4 text-gray-600">Designing fire safety systems that protect lives and property with
                        precision and care.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- Piping Network -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?piping"
                     alt="Piping Network">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Piping Network</h3>
                    <p class="mt-4 text-gray-600">Engineering and maintaining efficient piping networks for various
                        industries.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- Fire Detection & Protection, HVAC, Water and Waste Treatment -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?hvac"
                     alt="Fire Detection & Protection, HVAC, Water and Waste Treatment">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Fire Detection & Protection, HVAC, Water and Waste
                        Treatment</h3>
                    <p class="mt-4 text-gray-600">Comprehensive environmental and safety systems for optimal operational
                        efficiency.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>

            <!-- Energy Generation, Power Distribution -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                <img class="w-full h-64 object-cover" src="https://source.unsplash.com/random/800x600?energy"
                     alt="Energy Generation, Power Distribution">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Energy Generation, Power Distribution</h3>
                    <p class="mt-4 text-gray-600">Innovative solutions in energy generation and power distribution for
                        sustainable development.</p>
                    {{--                    <a href="#" class="mt-6 inline-block text-indigo-600 hover:text-indigo-800">Learn more &rarr;</a>--}}
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 px-6">
        <div class="max-w-7xl mx-auto text-center px-6">
            <h2 class="text-4xl font-bold text-gray-800 gradient-text">Why Choose Us?</h2>
            <p class="mt-4 text-lg text-gray-600">Expertise, innovation, and a proven track record in delivering
                excellence.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mt-16">
                <!-- Feature 1 -->
                <div class="p-8 bg-white rounded-lg shadow-lg transition-all card-hover">
                    <svg class="w-16 h-16 text-indigo-600 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8c1.38 0 2.5-1.12 2.5-2.5S13.38 3 12 3 9.5 4.12 9.5 5.5 10.62 8 12 8zM5 21a7 7 0 017-7h0a7 7 0 017 7H5z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-800">Expert Team</h3>
                    <p class="mt-4 text-gray-600">Highly qualified professionals delivering top-tier engineering
                        solutions.</p>
                </div>
                <!-- Feature 2 -->
                <div class="p-8 bg-white rounded-lg shadow-lg transition-all card-hover">
                    <svg class="w-16 h-16 text-indigo-600 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12h6m-3-3v6m-6 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-800">Cutting-Edge Technology</h3>
                    <p class="mt-4 text-gray-600">Using the latest tools to ensure efficiency and accuracy.</p>
                </div>
                <!-- Feature 3 -->
                <div class="p-8 bg-white rounded-lg shadow-lg transition-all card-hover">
                    <svg class="w-16 h-16 text-indigo-600 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 10l1.4 2.8c.2.4.6.7 1.1.7h2.2c.5 0 .9-.3 1.1-.7L11 10H9l-1.4-2.8c-.2-.4-.6-.7-1.1-.7H4.3c-.5 0-.9.3-1.1.7L2 10h1zM21 10l-1.4-2.8c-.2-.4-.6-.7-1.1-.7h-2.2c-.5 0-.9.3-1.1.7L13 10h2l1.4 2.8c.2.4.6.7 1.1.7h2.2c.5 0 .9-.3 1.1-.7L22 10h-1z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-800">Innovative Solutions</h3>
                    <p class="mt-4 text-gray-600">Delivering creative and efficient solutions for complex
                        challenges.</p>
                </div>
                <!-- Feature 4 -->
                <div class="p-8 bg-white rounded-lg shadow-lg transition-all card-hover">
                    <svg class="w-16 h-16 text-indigo-600 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4v16m-4-4l4-4 4 4"/>
                    </svg>
                    <h3 class="text-xl font-bold text-gray-800">Proven Track Record</h3>
                    <p class="mt-4 text-gray-600">Successfully completing projects that exceed client expectations.</p>
                </div>
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


    @push('styles')

        <style>
            .hero {
                background: linear-gradient(90deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('https://picsum.photos/1280/800') center/cover no-repeat;
            }

            .card-hover:hover {
                transform: translateY(-10px);
                box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.1);
            }

            .transition-all {
                transition: all 0.3s ease-in-out;
            }

            .gradient-text {
                background: linear-gradient(90deg, #667eea, #764ba2);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
        </style>
    @endpush


</x-app-layout>
