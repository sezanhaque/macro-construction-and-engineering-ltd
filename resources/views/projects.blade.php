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
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300" alt="Project 1">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Project Title 1</h3>
                        <p class="text-gray-600 mt-4">A brief description of the project goes here, highlighting the key
                            points and features.</p>
                        <a href="#"
                           class="relative inline-block mt-4 before:absolute before:-inset-1 before:block before:-skew-y-3 dark:hover:text-white text-indigo-600 dark:text-indigo-600 hover:text-slate-100 before:hover:bg-slate-800">
                            <span class="relative skew-y-3">View Details</span>
                        </a>
                    </div>
                </div>

                <!-- Project Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300" alt="Project 2">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Project Title 2</h3>
                        <p class="text-gray-600 mt-4">A brief description of the project goes here, highlighting the key
                            points and features.</p>
                        <a href="#"
                           class="relative inline-block mt-4 before:absolute before:-inset-1 before:block before:-skew-y-3 dark:hover:text-white text-indigo-600 dark:text-indigo-600 hover:text-slate-100 before:hover:bg-slate-800">
                            <span class="relative skew-y-3">View Details</span>
                        </a>
                    </div>
                </div>

                <!-- Project Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-all card-hover">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300" alt="Project 3">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Project Title 3</h3>
                        <p class="text-gray-600 mt-4">A brief description of the project goes here, highlighting the key
                            points and features.</p>
                        <a href="#"
                           class="relative inline-block mt-4 before:absolute before:-inset-1 before:block before:-skew-y-3 dark:hover:text-white text-indigo-600 dark:text-indigo-600 hover:text-slate-100 before:hover:bg-slate-800">
                            <span class="relative skew-y-3">View Details</span>
                        </a>
                    </div>
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

</x-app-layout>
