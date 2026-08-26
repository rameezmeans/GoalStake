<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="GoalStake turns football data into clear, match-ready intelligence across the Premier League, La Liga and the world's biggest players.">
        <title>{{ config('app.name', 'GoalStake') }} — Football intelligence, sharpened</title>
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#06100b] font-sans text-white antialiased selection:bg-lime-400 selection:text-[#06100b]">
        <div class="relative isolate overflow-hidden">
            <div class="pointer-events-none absolute inset-0 opacity-25 football-grid"></div>
            <div class="pointer-events-none absolute left-[-15rem] top-24 h-[34rem] w-[34rem] rounded-full bg-lime-400/10 blur-[120px]"></div>

            <header class="relative z-30 border-b border-white/8 bg-[#06100b]/75 backdrop-blur-xl">
                <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 lg:px-8" aria-label="Main navigation">
                    <a href="{{ route('home') }}" class="group flex items-center gap-3">
                        <span class="flex size-10 items-center justify-center rounded-xl bg-lime-400 text-[#06100b] shadow-[0_0_32px_rgba(163,230,53,.24)] transition-transform group-hover:-rotate-3">
                            <x-app-logo-icon class="size-7" />
                        </span>
                        <span>
                            <span class="block text-lg font-black uppercase tracking-[-0.04em]">Goal<span class="text-lime-400">Stake</span></span>
                            <span class="block text-[9px] font-bold uppercase tracking-[0.28em] text-white/40">Football intelligence</span>
                        </span>
                    </a>

                    <div class="hidden items-center gap-8 text-sm font-semibold text-white/60 md:flex">
                        <a href="#intelligence" class="transition hover:text-lime-300">Intelligence</a>
                        <a href="#leagues" class="transition hover:text-lime-300">Leagues</a>
                        <a href="#messi" class="transition hover:text-lime-300">Messi watch</a>
                    </div>

                    <div class="flex items-center gap-2">
                        @auth
                            <a href="{{ route('dashboard') }}" class="rounded-xl bg-lime-400 px-4 py-2.5 text-sm font-black text-[#06100b] transition hover:bg-lime-300">Open dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="hidden rounded-xl px-4 py-2.5 text-sm font-bold text-white/75 transition hover:bg-white/5 hover:text-white sm:block">Log in</a>
                            <a href="{{ route('register') }}" class="rounded-xl bg-lime-400 px-4 py-2.5 text-sm font-black text-[#06100b] shadow-[0_0_28px_rgba(163,230,53,.16)] transition hover:-translate-y-0.5 hover:bg-lime-300">Get your edge</a>
                        @endauth
                    </div>
                </nav>
            </header>

            <main>
                <section class="relative mx-auto min-h-[760px] max-w-[1600px] overflow-hidden lg:min-h-[820px]">
                    <div class="absolute inset-y-0 right-0 w-full lg:w-[58%]">
                        <img src="{{ asset('images/lionel-messi-wc2022.jpg') }}" alt="Lionel Messi playing for Argentina at the 2022 FIFA World Cup" class="h-full w-full object-cover object-[58%_35%] grayscale-[12%] saturate-[.85]">
                        <div class="absolute inset-0 bg-linear-to-r from-[#06100b] via-[#06100b]/55 to-[#06100b]/10"></div>
                        <div class="absolute inset-0 bg-linear-to-t from-[#06100b] via-transparent to-[#06100b]/30"></div>
                        <div class="absolute inset-0 bg-lime-400/6 mix-blend-color"></div>
                    </div>

                    <div class="relative z-10 mx-auto flex min-h-[760px] max-w-7xl items-center px-5 py-24 lg:min-h-[820px] lg:px-8">
                        <div class="max-w-3xl">
                            <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-lime-300/20 bg-lime-300/8 px-4 py-2 text-[11px] font-black uppercase tracking-[0.2em] text-lime-300 backdrop-blur">
                                <span class="relative flex size-2"><span class="absolute inline-flex size-full animate-ping rounded-full bg-lime-400 opacity-75"></span><span class="relative inline-flex size-2 rounded-full bg-lime-400"></span></span>
                                The game, decoded
                            </div>
                            <p class="mb-4 text-sm font-black uppercase tracking-[0.3em] text-white/45">Football · Betting · Intelligence</p>
                            <h1 class="max-w-3xl text-6xl font-black uppercase leading-[0.84] tracking-[-0.075em] text-white sm:text-7xl lg:text-[7.2rem]">Read the<br>game <span class="text-lime-400">better.</span></h1>
                            <p class="mt-8 max-w-xl text-lg leading-8 text-white/62">Data-led football insight built for sharper decisions. Track the Premier League, decode La Liga, and follow the genius of Messi—all in one intelligent matchday hub.</p>
                            <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                                <a href="{{ route('register') }}" class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-lime-400 px-7 py-4 text-sm font-black uppercase tracking-wider text-[#06100b] transition hover:-translate-y-1 hover:bg-lime-300">Start reading the game <span aria-hidden="true" class="transition-transform group-hover:translate-x-1">→</span></a>
                                <a href="#intelligence" class="inline-flex items-center justify-center rounded-2xl border border-white/15 bg-white/5 px-7 py-4 text-sm font-bold text-white backdrop-blur transition hover:border-white/30 hover:bg-white/10">Explore the model</a>
                            </div>
                            <div class="mt-12 flex flex-wrap items-center gap-x-7 gap-y-4 text-xs font-bold uppercase tracking-wider text-white/42">
                                <span class="flex items-center gap-2"><span class="text-lime-400">✓</span> Form signals</span>
                                <span class="flex items-center gap-2"><span class="text-lime-400">✓</span> xG context</span>
                                <span class="flex items-center gap-2"><span class="text-lime-400">✓</span> Value alerts</span>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-7 right-6 z-20 hidden max-w-xs rounded-2xl border border-white/10 bg-black/35 p-4 backdrop-blur-md lg:block">
                        <div class="flex items-center gap-3"><span class="flex size-10 items-center justify-center rounded-xl bg-white/10 text-lg">🐐</span><div><p class="text-xs font-black uppercase tracking-[0.18em] text-lime-300">Messi intelligence</p><p class="mt-1 text-sm text-white/58">Vision, movement and match impact—tracked.</p></div></div>
                    </div>
                </section>

                <section id="intelligence" class="border-y border-white/8 bg-white/[0.025]">
                    <div class="mx-auto grid max-w-7xl gap-px bg-white/8 md:grid-cols-3">
                        <article class="bg-[#08130d] p-8 lg:p-10"><span class="text-4xl font-black tracking-tighter text-lime-400">01</span><h2 class="mt-7 text-xl font-black uppercase tracking-tight">Signal over noise</h2><p class="mt-3 leading-7 text-white/50">Form, chance quality, tactical matchups and market movement distilled into a cleaner read.</p></article>
                        <article class="bg-[#08130d] p-8 lg:p-10"><span class="text-4xl font-black tracking-tighter text-lime-400">02</span><h2 class="mt-7 text-xl font-black uppercase tracking-tight">Context wins</h2><p class="mt-3 leading-7 text-white/50">Numbers meet the reality of the match: injuries, fatigue, momentum and the way teams actually play.</p></article>
                        <article class="bg-[#08130d] p-8 lg:p-10"><span class="text-4xl font-black tracking-tighter text-lime-400">03</span><h2 class="mt-7 text-xl font-black uppercase tracking-tight">Your final call</h2><p class="mt-3 leading-7 text-white/50">GoalStake brings the intelligence. You stay in control of every decision and every stake.</p></article>
                    </div>
                </section>

                <section id="leagues" class="mx-auto max-w-7xl px-5 py-24 lg:px-8 lg:py-32">
                    <div class="flex flex-col justify-between gap-8 md:flex-row md:items-end">
                        <div><p class="text-xs font-black uppercase tracking-[0.28em] text-lime-400">Built for the big leagues</p><h2 class="mt-4 max-w-3xl text-4xl font-black uppercase leading-none tracking-[-0.05em] sm:text-6xl">Two leagues.<br>Thousands of signals.</h2></div>
                        <p class="max-w-md text-base leading-7 text-white/48">A dedicated intelligence layer for the pace of England and the technical detail of Spain.</p>
                    </div>

                    <div class="mt-14 grid gap-5 lg:grid-cols-2">
                        <article class="group relative min-h-[390px] overflow-hidden rounded-[2rem] border border-white/10 bg-[#0c1720] p-8 transition hover:-translate-y-1 hover:border-lime-300/35 lg:p-10">
                            <div class="absolute -right-16 -top-16 size-60 rounded-full bg-[#6b21a8]/25 blur-3xl transition group-hover:bg-[#6b21a8]/35"></div>
                            <div class="relative flex h-full flex-col"><div class="flex items-start justify-between"><span class="flex size-16 items-center justify-center rounded-2xl bg-linear-to-br from-purple-500 to-fuchsia-700 text-2xl font-black italic shadow-xl">PL</span><span class="rounded-full border border-white/10 px-3 py-1.5 text-[10px] font-black uppercase tracking-widest text-white/55">England</span></div><div class="mt-auto pt-20"><p class="text-xs font-black uppercase tracking-[0.25em] text-purple-300">Premier League</p><h3 class="mt-3 text-3xl font-black uppercase tracking-tight">Pace. Pressure. Fine margins.</h3><div class="mt-6 flex flex-wrap gap-2 text-xs font-semibold text-white/55"><span class="rounded-lg bg-white/6 px-3 py-2">Pressing data</span><span class="rounded-lg bg-white/6 px-3 py-2">xG trends</span><span class="rounded-lg bg-white/6 px-3 py-2">Market movement</span></div></div></div>
                        </article>
                        <article class="group relative min-h-[390px] overflow-hidden rounded-[2rem] border border-white/10 bg-[#15120d] p-8 transition hover:-translate-y-1 hover:border-lime-300/35 lg:p-10">
                            <div class="absolute -right-16 -top-16 size-60 rounded-full bg-orange-500/20 blur-3xl transition group-hover:bg-orange-500/30"></div>
                            <div class="relative flex h-full flex-col"><div class="flex items-start justify-between"><span class="flex size-16 items-center justify-center rounded-2xl bg-linear-to-br from-orange-400 to-red-600 text-2xl font-black italic text-white shadow-xl">LL</span><span class="rounded-full border border-white/10 px-3 py-1.5 text-[10px] font-black uppercase tracking-widest text-white/55">Spain</span></div><div class="mt-auto pt-20"><p class="text-xs font-black uppercase tracking-[0.25em] text-orange-300">La Liga</p><h3 class="mt-3 text-3xl font-black uppercase tracking-tight">Technique. Control. The killer pass.</h3><div class="mt-6 flex flex-wrap gap-2 text-xs font-semibold text-white/55"><span class="rounded-lg bg-white/6 px-3 py-2">Possession value</span><span class="rounded-lg bg-white/6 px-3 py-2">Chance creation</span><span class="rounded-lg bg-white/6 px-3 py-2">Form intelligence</span></div></div></div>
                        </article>
                    </div>
                </section>

                <section id="messi" class="mx-3 mb-3 overflow-hidden rounded-[2rem] border border-lime-300/15 bg-lime-300 text-[#07110b] sm:mx-5 lg:mx-8">
                    <div class="mx-auto grid max-w-7xl items-center gap-10 px-6 py-16 md:grid-cols-[1fr_auto] lg:px-10 lg:py-20">
                        <div><p class="text-xs font-black uppercase tracking-[0.28em] opacity-55">Player intelligence · Messi</p><h2 class="mt-4 max-w-4xl text-4xl font-black uppercase leading-[0.9] tracking-[-0.055em] sm:text-6xl">Greatness looks like magic.<br>We track the details.</h2><p class="mt-6 max-w-2xl text-base font-semibold leading-7 opacity-65">Movement between lines, chance creation, shot selection and influence—the patterns behind the player who changed the game.</p></div>
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center rounded-2xl bg-[#07110b] px-7 py-4 text-sm font-black uppercase tracking-wider text-white transition hover:-translate-y-1 hover:bg-black">Create free account →</a>
                    </div>
                </section>
            </main>

            <footer class="relative border-t border-white/8 px-5 py-10 lg:px-8">
                <div class="mx-auto flex max-w-7xl flex-col justify-between gap-6 text-xs text-white/35 md:flex-row md:items-center">
                    <div><p class="font-black uppercase tracking-[0.22em] text-white/60">GoalStake</p><p class="mt-2">Football intelligence for informed decisions. Always play responsibly.</p></div>
                    <p>Messi photo: <a href="https://commons.wikimedia.org/wiki/File:Lionel_Messi_WC2022.jpg" target="_blank" rel="noreferrer" class="underline decoration-white/20 underline-offset-4 hover:text-white">Hossein Zohrevand / Tasnim News Agency</a>, CC BY 4.0. Visual treatment applied.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
