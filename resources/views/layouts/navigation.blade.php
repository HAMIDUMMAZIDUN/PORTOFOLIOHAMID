<!-- Backdrop for Mobile Sidebar -->
<div
    x-show="sidebarMobileOpen"
    @click="sidebarMobileOpen = false"
    class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 lg:hidden"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
></div>

<!-- Hover Trigger Zone (Desktop only) -->
<div
    @mouseenter="hovered = true"
    class="hidden lg:block fixed left-0 top-0 bottom-0 w-3.5 z-40 bg-transparent"
></div>

<!-- Sidebar Container -->
<div
    @mouseenter="hovered = true"
    @mouseleave="hovered = false"
    class="fixed inset-y-0 left-0 z-50 flex"
>
    <div
        class="h-full bg-white dark:bg-[#0c1120] border-r border-slate-200/80 dark:border-slate-800/80 shadow-xl transition-all duration-300 transform flex flex-col justify-between"
        :class="(hovered || sidebarOpen || sidebarMobileOpen) ? 'w-64 translate-x-0' : 'w-0 -translate-x-full lg:-translate-x-full lg:w-0'"
        style="overflow: hidden;"
    >
        <div class="w-64 h-full flex flex-col justify-between">
            <div>
                <!-- Brand Logo — same as public site -->
                <div class="h-16 flex items-center px-6 border-b border-slate-200/60 dark:border-slate-800/80 bg-white dark:bg-[#0c1120]">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-1 text-xl font-bold tracking-tight text-slate-900 dark:text-white font-display">
                        <span class="font-extrabold">Hamid</span><span class="text-sky-400">.</span>
                    </a>
                    <span class="ml-auto text-[9px] font-bold uppercase tracking-widest text-slate-400 dark:text-slate-600 bg-slate-100 dark:bg-slate-800 px-2 py-0.5 rounded-full">CMS</span>
                </div>

                <!-- Navigation Menu Links -->
                <div class="px-3 py-5 space-y-1 overflow-y-auto">
                    @php
                        $navLinks = [
                            ['route' => 'dashboard',              'match' => 'dashboard',              'icon' => 'grid',      'label' => 'Dashboard'],
                            ['route' => 'admin.portfolios.index', 'match' => 'admin.portfolios.*',     'icon' => 'image',     'label' => 'Portofolio Projek'],
                            ['route' => 'admin.timelines.index',  'match' => 'admin.timelines.*',      'icon' => 'clock',     'label' => 'Pengalaman & Riwayat'],
                        ];
                    @endphp

                    @foreach($navLinks as $nav)
                        @php $active = request()->routeIs($nav['match']); @endphp
                        <a href="{{ route($nav['route']) }}"
                           class="flex items-center px-3 py-2.5 text-sm font-semibold rounded-xl transition duration-150
                                  {{ $active
                                     ? 'bg-slate-900 dark:bg-indigo-600 text-white shadow-sm'
                                     : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800/70 hover:text-slate-900 dark:hover:text-white' }}">

                            <!-- Icon -->
                            <span class="mr-3 flex-shrink-0 {{ $active ? 'text-white' : 'text-slate-400 dark:text-slate-600' }}">
                                @if($nav['icon'] === 'grid')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z" /></svg>
                                @elseif($nav['icon'] === 'image')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                @elseif($nav['icon'] === 'tag')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z" /></svg>
                                @elseif($nav['icon'] === 'document')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                                @elseif($nav['icon'] === 'briefcase')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                @elseif($nav['icon'] === 'clock')
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                @endif
                            </span>

                            {{ $nav['label'] }}

                            @if($active)
                                <span class="ml-auto w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0"></span>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Footer: User Info + Logout -->
            <div class="p-4 border-t border-slate-200/60 dark:border-slate-800/80 bg-slate-50/50 dark:bg-[#0b0f19]">
                <div class="flex items-center mb-3">
                    <div class="h-9 w-9 rounded-xl bg-gradient-to-br from-indigo-500 to-indigo-700 text-white flex items-center justify-center font-bold text-sm shadow-sm flex-shrink-0">
                        {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                    </div>
                    <div class="ml-3 min-w-0">
                        <p class="text-xs font-bold text-slate-800 dark:text-slate-100 truncate">{{ Auth::user()->name }}</p>
                        <p class="text-[10px] text-slate-400 dark:text-slate-500 truncate">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center px-3 py-2 border border-slate-200 dark:border-slate-800 hover:bg-red-50 dark:hover:bg-red-950/30 hover:border-red-200 dark:hover:border-red-800 text-xs font-semibold rounded-xl text-slate-600 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 transition duration-150">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Keluar dari Sistem
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
