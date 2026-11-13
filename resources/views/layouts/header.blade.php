<header class="bg-white dark:bg-[#0f1422] border-b border-slate-200/60 dark:border-slate-800/80 sticky top-0 z-30 h-16 flex items-center shadow-sm transition-colors duration-300">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <!-- Left: Hamburger + Dynamic Page Title -->
        <div class="flex items-center gap-4">
            <!-- Hamburger Button -->
            <button
                @click="if (window.innerWidth >= 1024) { sidebarOpen = !sidebarOpen } else { sidebarMobileOpen = !sidebarMobileOpen }"
                class="p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800/80 focus:outline-none transition duration-150"
                title="Toggle Sidebar"
            >
                <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Separator -->
            <div class="hidden sm:block h-5 w-px bg-slate-200 dark:bg-slate-700"></div>

            <!-- Dynamic Breadcrumb / Page Title -->
            <div class="hidden sm:flex items-center gap-2 text-xs font-medium">
                <a href="{{ route('dashboard') }}" class="text-slate-400 dark:text-slate-500 hover:text-slate-700 dark:hover:text-slate-200 transition duration-150">
                    Portfolio CMS
                </a>
                <svg class="w-3.5 h-3.5 text-slate-300 dark:text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="font-semibold text-slate-700 dark:text-slate-200">
                    @if(request()->routeIs('dashboard'))
                        Dashboard
                    @elseif(request()->routeIs('admin.portfolios.*'))
                        Kelola Portofolio
                    @elseif(request()->routeIs('admin.packages.*'))
                        Paket Harga
                    @elseif(request()->routeIs('admin.posts.*'))
                        Artikel Blog
                    @elseif(request()->routeIs('admin.services.*'))
                        Layanan & Pilar
                    @elseif(request()->routeIs('admin.timelines.*'))
                        Milestone Studio
                    @elseif(request()->routeIs('profile.*'))
                        Profil Akun
                    @else
                        Halaman Admin
                    @endif
                </span>
            </div>
        </div>

        <!-- Right: Actions -->
        <div class="flex items-center gap-2 sm:gap-3">
            <!-- View Public Site Link -->
            <a href="{{ route('home') }}"
               target="_blank"
               class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800 border border-transparent hover:border-slate-200 dark:hover:border-slate-700 transition duration-150"
               title="Lihat Website Publik">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                <span>Website</span>
            </a>

            <!-- Dark Mode Toggle -->
            <button id="admin-theme-toggle" type="button"
                class="p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:text-slate-800 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none transition duration-150"
                title="Ubah Tema">
                <!-- Moon Icon (shown in light mode) -->
                <svg id="admin-theme-dark-icon" class="hidden w-4.5 h-4.5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <!-- Sun Icon (shown in dark mode) -->
                <svg id="admin-theme-light-icon" class="hidden w-4.5 h-4.5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.46 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Profile Dropdown -->
            <x-dropdown align="right" width="52">
                <x-slot name="trigger">
                    <button class="flex items-center gap-2.5 px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-800/60 hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-200 transition duration-150 focus:outline-none">
                        <!-- Avatar Initial -->
                        <div class="h-7 w-7 rounded-lg bg-gradient-to-br from-indigo-500 to-indigo-700 text-white flex items-center justify-center font-bold text-xs shadow-sm">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div class="hidden sm:block text-left">
                            <p class="text-xs font-semibold text-slate-700 dark:text-slate-200 leading-tight truncate max-w-[120px]">{{ Auth::user()->name }}</p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500 leading-tight">Administrator</p>
                        </div>
                        <svg class="w-3.5 h-3.5 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-800">
                        <p class="text-xs font-semibold text-slate-700 dark:text-slate-200 truncate">{{ Auth::user()->name }}</p>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-0.5 truncate">{{ Auth::user()->email }}</p>
                    </div>
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profil Akun') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('home')" target="_blank">
                        {{ __('Lihat Website Publik') }}
                    </x-dropdown-link>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Keluar / Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</header>

<!-- Admin Dark Mode Toggle Script -->
<script>
    (function() {
        const darkIcon = document.getElementById('admin-theme-dark-icon');
        const lightIcon = document.getElementById('admin-theme-light-icon');
        const html = document.documentElement;

        function applyTheme(theme) {
            if (theme === 'dark') {
                html.classList.add('dark');
                darkIcon && darkIcon.classList.add('hidden');
                lightIcon && lightIcon.classList.remove('hidden');
            } else {
                html.classList.remove('dark');
                lightIcon && lightIcon.classList.add('hidden');
                darkIcon && darkIcon.classList.remove('hidden');
            }
        }

        const saved = localStorage.getItem('color-theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(saved ? saved : (prefersDark ? 'dark' : 'light'));

        const btn = document.getElementById('admin-theme-toggle');
        if (btn) {
            btn.addEventListener('click', function () {
                const isDark = html.classList.contains('dark');
                const newTheme = isDark ? 'light' : 'dark';
                localStorage.setItem('color-theme', newTheme);
                applyTheme(newTheme);
            });
        }
    })();
</script>
