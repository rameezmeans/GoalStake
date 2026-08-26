<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-[#06100b] text-white antialiased">
        <div class="grid min-h-svh lg:grid-cols-[1.08fr_.92fr]">
            <aside class="relative hidden min-h-svh overflow-hidden border-r border-white/10 lg:block">
                <img src="{{ asset('images/lionel-messi-wc2022.jpg') }}" alt="Lionel Messi playing for Argentina" class="absolute inset-0 h-full w-full object-cover object-[52%_35%] grayscale-[18%] saturate-[.8]">
                <div class="absolute inset-0 bg-linear-to-t from-[#06100b] via-[#06100b]/25 to-[#06100b]/50"></div>
                <div class="absolute inset-0 bg-linear-to-r from-transparent to-[#06100b]/65"></div>
                <div class="absolute inset-0 opacity-20 football-grid"></div>

                <div class="relative z-10 flex min-h-svh flex-col justify-between p-10 xl:p-14">
                    <a href="{{ route('home') }}" class="flex w-fit items-center gap-3" wire:navigate>
                        <span class="flex size-11 items-center justify-center rounded-xl bg-lime-400 text-[#06100b]"><x-app-logo-icon class="size-8" /></span>
                        <span><span class="block text-xl font-black uppercase tracking-[-0.04em]">Goal<span class="text-lime-400">Stake</span></span><span class="block text-[9px] font-bold uppercase tracking-[0.28em] text-white/45">Football intelligence</span></span>
                    </a>

                    <div class="max-w-xl pb-8">
                        <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-lime-300/25 bg-black/25 px-3 py-2 text-[10px] font-black uppercase tracking-[0.2em] text-lime-300 backdrop-blur"><span class="size-1.5 rounded-full bg-lime-400"></span>Matchday intelligence</div>
                        <p class="text-5xl font-black uppercase leading-[0.88] tracking-[-0.06em] xl:text-7xl">Trust your eye.<br><span class="text-lime-400">Sharpen your edge.</span></p>
                        <p class="mt-6 max-w-md text-base leading-7 text-white/58">Premier League pace. La Liga technique. Messi-level vision. One smarter way to read football.</p>
                        <div class="mt-8 grid max-w-md grid-cols-3 gap-2">
                            <div class="rounded-xl border border-white/10 bg-black/25 p-3 backdrop-blur"><p class="text-lg font-black text-lime-300">EPL</p><p class="mt-1 text-[10px] uppercase tracking-wider text-white/40">Tracked</p></div>
                            <div class="rounded-xl border border-white/10 bg-black/25 p-3 backdrop-blur"><p class="text-lg font-black text-lime-300">La Liga</p><p class="mt-1 text-[10px] uppercase tracking-wider text-white/40">Tracked</p></div>
                            <div class="rounded-xl border border-white/10 bg-black/25 p-3 backdrop-blur"><p class="text-lg font-black text-lime-300">24/7</p><p class="mt-1 text-[10px] uppercase tracking-wider text-white/40">Signals</p></div>
                        </div>
                    </div>

                    <p class="text-[10px] text-white/30">Photo: <a href="https://commons.wikimedia.org/wiki/File:Lionel_Messi_WC2022.jpg" target="_blank" rel="noreferrer" class="underline">Hossein Zohrevand / Tasnim News Agency</a>, CC BY 4.0.</p>
                </div>
            </aside>

            <main class="relative flex min-h-svh items-center justify-center overflow-hidden px-5 py-10 sm:px-8 lg:px-14">
                <div class="pointer-events-none absolute inset-0 opacity-20 football-grid"></div>
                <div class="pointer-events-none absolute right-[-10rem] top-[-10rem] size-[30rem] rounded-full bg-lime-400/8 blur-[100px]"></div>
                <div class="relative z-10 w-full max-w-md">
                    <a href="{{ route('home') }}" class="mb-10 flex items-center justify-center gap-3 lg:hidden" wire:navigate><span class="flex size-10 items-center justify-center rounded-xl bg-lime-400 text-[#06100b]"><x-app-logo-icon class="size-7" /></span><span class="text-xl font-black uppercase tracking-[-0.04em]">Goal<span class="text-lime-400">Stake</span></span></a>
                    <div class="rounded-[2rem] border border-white/10 bg-white/[0.045] p-6 shadow-2xl shadow-black/30 backdrop-blur-sm sm:p-8">{{ $slot }}</div>
                    <p class="mt-6 text-center text-[11px] leading-5 text-white/30">18+ only. GoalStake provides information, not guarantees.<br>Stay in control and play responsibly.</p>
                </div>
            </main>
        </div>

        @persist('toast')
            <flux:toast.group><flux:toast /></flux:toast.group>
        @endpersist
        @fluxScripts
    </body>
</html>
