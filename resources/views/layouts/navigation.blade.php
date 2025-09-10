<nav x-data="{ 
        open: false, 
        activeSection: 'home',
        updateActiveSection() {
            let currentSection = 'home';
            const sections = ['home', 'about', 'blogs', 'project', 'services', 'contact'];
            
            for (const sectionId of sections) {
                const section = document.getElementById(sectionId);
                if (section && section.getBoundingClientRect().top < window.innerHeight / 2) {
                    currentSection = sectionId;
                }
            }
            this.activeSection = currentSection;
        }
    }" 
    @scroll.window.throttle.100ms="updateActiveSection()"
    class="bg-gray-800 text-white shadow-md sticky top-0 z-50">

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="/" class="text-xl font-bold">
                        <i class="fas fa-circle text-primary-500 mr-2"></i> Hamid Abdul Aziz
                    </a>
                </div>

                <div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex">
                    <a href="/#home" :class="{'text-primary-400 border-primary-400': activeSection === 'home'}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-primary-400 hover:border-primary-400 transition">Home</a>
                    <a href="/#about" :class="{'text-primary-400 border-primary-400': activeSection === 'about'}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-primary-400 hover:border-primary-400 transition">About</a>
                    <a href="/#blogs" :class="{'text-primary-400 border-primary-400': activeSection === 'blogs'}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-primary-400 hover:border-primary-400 transition">Journey</a>
                    <a href="/#project" :class="{'text-primary-400 border-primary-400': activeSection === 'project'}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-primary-400 hover:border-primary-400 transition">Project</a> 
                    <a href="/#services" :class="{'text-primary-400 border-primary-400': activeSection === 'services'}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-primary-400 hover:border-primary-400 transition">Services</a>
                    <a href="/#contact" :class="{'text-primary-400 border-primary-400': activeSection === 'contact'}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-primary-400 hover:border-primary-400 transition">Contact</a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 bg-gray-800 hover:text-white focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('dashboard')">Dashboard</x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-sm hover:text-primary-400">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ms-4 text-sm hover:text-primary-400">Register</a>
                    @endif
                @endauth
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            {{-- Mobile nav links can be updated similarly if they are Alpine components --}}
            <x-responsive-nav-link href="/home" :active="request()->is('/')">Home</x-responsive-nav-link>
            <x-responsive-nav-link href="/services">Services</x-responsive-nav-link>
            <x-responsive-nav-link href="/about">About</x-responsive-nav-link>
            <x-responsive-nav-link href="/project">Project</x-responsive-nav-link>
            <x-responsive-nav-link href="/blogs">Journey</x-responsive-nav-link>
            <x-responsive-nav-link href="/contact">Contact</x-responsive-nav-link>
        </div>

        <div class="pt-4 pb-1 border-t border-gray-600">
            @auth
                {{-- User auth info for mobile --}}
            @else
                {{-- Login/register for mobile --}}
            @endauth
        </div>
    </div>
</nav>