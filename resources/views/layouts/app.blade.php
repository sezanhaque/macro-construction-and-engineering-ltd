<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Macro Construction And Engineering LTD.') }}</title>

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ storage_url('images/favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @stack('styles')
    <livewire:styles/>
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
{{--<div class="min-h-screen bg-gray-100 dark:bg-gray-900">--}}
{{--</div>--}}
{{--    <livewire:layout.navigation />  --}}
<livewire:home.header-top/>
<livewire:home.nav-bar/>

<!-- Page Heading -->
@if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
@endif

<!-- Page Content -->
<main>
    {{ $slot }}
</main>

{{--  Bottom navigation button  --}}
<button x-cloak x-data="{scroll : false}"
        @scroll.window="document.documentElement.scrollTop > 20 ? scroll = true : scroll = false" x-show="scroll"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})" type="button" data-mdb-ripple="true"
        data-mdb-ripple-color="light"
        class="fixed inline-block p-3 bottom-24 text-xs font-medium leading-tight text-white uppercase transition duration-150 ease-in-out bg-blue-600 rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg right-5"
        id="btn-back-to-top" x-transition.opacity>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
              d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
              clip-rule="evenodd"/>
    </svg>
</button>
{{--  Bottom navigation button  --}}
<livewire:home.footer/>
<livewire:scripts/>
@stack('scripts')
<script type="text/javascript">
</script>
</body>
</html>
