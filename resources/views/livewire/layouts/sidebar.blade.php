<nav class="relative w-full pt-20 ml-16">
    <div class="w-full py-1 ">
        <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-responsive-nav-link>
    </div>
    <div class="w-full py-1 ">
        <x-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
            {{ __('welcome') }}
        </x-responsive-nav-link>
    </div>
    <div class="w-full py-1 ">
        <x-responsive-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
            {{ __('welcome') }}
        </x-responsive-nav-link>
    </div>
</nav>