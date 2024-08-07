@foreach (session('flash_notification', collect())->toArray() as $message)

<div x-data="{ show: true }" x-show="show" x-transition x-init="@if ($message['level'] === 'success')setTimeout(() => show = false, 5000)
    @endif" class="alert alert-{{ $message['level'] }} mt-3" role="alert">

    {{-- if the message level is info then show this icon --}}
    @if ($message['level'] === 'info')
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
    </svg>
    @endif

    @if ($message['level'] === 'success')
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    @endif

    {{-- if the message level is warning then show this icon --}}
    @if ($message['level'] === 'warning')
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
    </svg>
    @endif

    {{-- if the message level is error/danger then show this icon --}}
    @if ($message['level'] === 'danger')
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    @endif

    <span class="text-white">{!! $message['message'] !!}</span>
    <svg @click="show=false" class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
        <title>Close</title>
        <path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
    </svg>
</div>

@endforeach

{{ session()->forget('flash_notification') }}

@if (session('message'))
<div>
    {{ session('message') }}
</div>
@endif

@if (session('success'))
<div class="alert alert-green">
    {{ session('success') }}
</div>
@endif

@if (session('status'))
<div class="alert alert-primary">
    {{ session('status') }}
</div>
@endif