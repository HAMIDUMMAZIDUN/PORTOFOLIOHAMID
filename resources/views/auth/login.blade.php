<x-guest-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-6 p-4 rounded-xl bg-emerald-50 dark:bg-emerald-950/30 border border-emerald-250 dark:border-emerald-800 text-xs font-medium text-emerald-700 dark:text-emerald-400">
            {{ session('status') }}
        </div>
    @endif

    <div class="mb-8">
        <h2 class="text-xl font-bold text-premium-navy dark:text-white">Selamat Datang Kembali</h2>
        <p class="text-xs text-slate-450 dark:text-slate-400 mt-1.5 font-light leading-relaxed">
            Silakan masukkan akun admin Anda untuk mengelola konten website, portofolio, dan paket harga.
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-5">
            <label for="email" class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Email Administrator</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                   placeholder="admin@hacreative.com"
                   class="w-full mt-2 px-4 py-3.5 bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-850 rounded-xl text-xs font-medium text-slate-800 dark:text-slate-100 placeholder-slate-400/70 focus:outline-none focus:border-premium-emerald focus:ring-1 focus:ring-premium-emerald transition duration-150">
            @error('email')
                <p class="text-red-500 text-[10px] mt-1.5 font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-5">
            <div class="flex justify-between items-center">
                <label for="password" class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Password</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-[10px] font-semibold text-slate-400 hover:text-premium-navy dark:hover:text-emerald-400 transition duration-150">
                        Lupa Password?
                    </a>
                @endif
            </div>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                   placeholder="••••••••"
                   class="w-full mt-2 px-4 py-3.5 bg-slate-50 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-850 rounded-xl text-xs font-medium text-slate-800 dark:text-slate-100 placeholder-slate-400/70 focus:outline-none focus:border-premium-emerald focus:ring-1 focus:ring-premium-emerald transition duration-150">
            @error('password')
                <p class="text-red-500 text-[10px] mt-1.5 font-semibold">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mb-6">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember" 
                       class="rounded border-slate-350 dark:border-slate-800 text-premium-emerald focus:ring-premium-emerald dark:bg-slate-900 w-4 h-4 transition">
                <span class="ms-2.5 text-xs text-slate-550 dark:text-slate-400 font-light">Ingat saya di perangkat ini</span>
            </label>
        </div>

        <!-- Action Button -->
        <button type="submit" 
                class="w-full py-3.5 bg-premium-navy dark:bg-emerald-600 hover:bg-slate-800 dark:hover:bg-emerald-500 text-white text-xs font-bold uppercase tracking-widest rounded-xl transition duration-200 shadow-sm">
            Masuk Ke Dashboard
        </button>
    </form>
</x-guest-layout>
