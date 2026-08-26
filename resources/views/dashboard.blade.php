<x-layouts::app :title="__('Dashboard')">
    <div class="mx-auto flex w-full max-w-7xl flex-1 flex-col gap-6 p-1 sm:p-3">
        <section class="relative overflow-hidden rounded-[1.75rem] border border-lime-300/15 bg-[#0a1710] p-6 sm:p-8">
            <div class="pointer-events-none absolute inset-0 opacity-20 football-grid"></div>
            <div class="pointer-events-none absolute -right-20 -top-32 size-96 rounded-full bg-lime-400/12 blur-3xl"></div>
            <div class="relative flex flex-col justify-between gap-8 md:flex-row md:items-end">
                <div>
                    <div class="inline-flex items-center gap-2 rounded-full border border-lime-300/20 bg-lime-300/8 px-3 py-1.5 text-[10px] font-black uppercase tracking-[0.2em] text-lime-300"><span class="size-1.5 rounded-full bg-lime-400"></span>Intelligence centre</div>
                    <p class="mt-6 text-sm font-semibold text-white/45">Good to see you, {{ auth()->user()->name }}.</p>
                    <h1 class="mt-2 text-4xl font-black uppercase tracking-[-0.05em] text-white sm:text-5xl">Your football,<br><span class="text-lime-400">clearly read.</span></h1>
                </div>
                <div class="rounded-2xl border border-white/10 bg-black/20 px-5 py-4 backdrop-blur"><p class="text-[10px] font-black uppercase tracking-[0.2em] text-white/35">Model status</p><p class="mt-2 flex items-center gap-2 text-sm font-bold text-white"><span class="size-2 rounded-full bg-lime-400 shadow-[0_0_12px_rgba(163,230,53,.8)]"></span>Ready for matchday</p></div>
            </div>
        </section>

        <section class="grid gap-4 md:grid-cols-3">
            <article class="rounded-2xl border border-white/8 bg-[#0b1410] p-5">
                <div class="flex items-center justify-between"><span class="flex size-11 items-center justify-center rounded-xl bg-purple-500/15 text-sm font-black text-purple-300">EPL</span><span class="text-[10px] font-bold uppercase tracking-widest text-white/25">League feed</span></div>
                <h2 class="mt-7 text-lg font-black uppercase text-white">Premier League</h2><p class="mt-2 text-sm leading-6 text-white/42">High-tempo form, pressing and chance-quality signals.</p><div class="mt-5 h-1.5 overflow-hidden rounded-full bg-white/5"><div class="h-full w-[86%] rounded-full bg-purple-400"></div></div>
            </article>
            <article class="rounded-2xl border border-white/8 bg-[#0b1410] p-5">
                <div class="flex items-center justify-between"><span class="flex size-11 items-center justify-center rounded-xl bg-orange-500/15 text-sm font-black text-orange-300">LL</span><span class="text-[10px] font-bold uppercase tracking-widest text-white/25">League feed</span></div>
                <h2 class="mt-7 text-lg font-black uppercase text-white">La Liga</h2><p class="mt-2 text-sm leading-6 text-white/42">Possession value, creativity and tactical-control reads.</p><div class="mt-5 h-1.5 overflow-hidden rounded-full bg-white/5"><div class="h-full w-[78%] rounded-full bg-orange-400"></div></div>
            </article>
            <article class="relative overflow-hidden rounded-2xl border border-lime-300/15 bg-lime-300 p-5 text-[#07110b]">
                <div class="absolute -bottom-12 -right-8 text-9xl font-black opacity-[.07]">10</div><div class="relative"><div class="flex items-center justify-between"><span class="flex size-11 items-center justify-center rounded-xl bg-[#07110b] text-lg">🐐</span><span class="text-[10px] font-black uppercase tracking-widest opacity-40">Player watch</span></div><h2 class="mt-7 text-lg font-black uppercase">Messi intelligence</h2><p class="mt-2 text-sm font-semibold leading-6 opacity-55">Movement, creativity and match influence in focus.</p><p class="mt-5 text-xs font-black uppercase tracking-wider">Open player feed →</p></div>
            </article>
        </section>

        <section class="grid gap-4 lg:grid-cols-[1.35fr_.65fr]">
            <article class="rounded-[1.5rem] border border-white/8 bg-[#0b1410] p-5 sm:p-6">
                <div class="flex items-center justify-between"><div><p class="text-[10px] font-black uppercase tracking-[0.22em] text-lime-400">Demo intelligence feed</p><h2 class="mt-2 text-xl font-black uppercase text-white">Matches to read</h2></div><span class="rounded-lg border border-white/8 px-3 py-2 text-[10px] font-bold uppercase tracking-wider text-white/35">Preview</span></div>
                <div class="mt-6 divide-y divide-white/7">
                    <div class="grid grid-cols-[1fr_auto] items-center gap-4 py-5 pt-0 sm:grid-cols-[1fr_120px_auto]"><div><p class="font-bold text-white">Arsenal <span class="mx-2 text-white/20">vs</span> Liverpool</p><p class="mt-1 text-xs text-white/35">Premier League · Tactical matchup</p></div><div class="hidden sm:block"><p class="text-[10px] uppercase tracking-wider text-white/30">Model lean</p><p class="mt-1 text-sm font-bold text-lime-300">Goals market</p></div><span class="rounded-lg bg-lime-300/10 px-3 py-2 text-xs font-black text-lime-300">View read</span></div>
                    <div class="grid grid-cols-[1fr_auto] items-center gap-4 py-5 sm:grid-cols-[1fr_120px_auto]"><div><p class="font-bold text-white">Barcelona <span class="mx-2 text-white/20">vs</span> Atlético</p><p class="mt-1 text-xs text-white/35">La Liga · Control battle</p></div><div class="hidden sm:block"><p class="text-[10px] uppercase tracking-wider text-white/30">Model lean</p><p class="mt-1 text-sm font-bold text-lime-300">Home pressure</p></div><span class="rounded-lg bg-lime-300/10 px-3 py-2 text-xs font-black text-lime-300">View read</span></div>
                    <div class="grid grid-cols-[1fr_auto] items-center gap-4 py-5 pb-0 sm:grid-cols-[1fr_120px_auto]"><div><p class="font-bold text-white">Chelsea <span class="mx-2 text-white/20">vs</span> Newcastle</p><p class="mt-1 text-xs text-white/35">Premier League · Transition watch</p></div><div class="hidden sm:block"><p class="text-[10px] uppercase tracking-wider text-white/30">Model lean</p><p class="mt-1 text-sm font-bold text-lime-300">Chance quality</p></div><span class="rounded-lg bg-lime-300/10 px-3 py-2 text-xs font-black text-lime-300">View read</span></div>
                </div>
            </article>

            <aside class="rounded-[1.5rem] border border-white/8 bg-[#0b1410] p-5 sm:p-6">
                <p class="text-[10px] font-black uppercase tracking-[0.22em] text-lime-400">The GoalStake way</p><h2 class="mt-3 text-xl font-black uppercase text-white">Intelligence, not certainty.</h2><p class="mt-4 text-sm leading-6 text-white/42">Use the data to ask better questions. Context matters, outcomes vary, and the final decision is always yours.</p>
                <div class="mt-7 space-y-3 text-xs font-bold text-white/55"><p class="flex items-center gap-3"><span class="flex size-6 items-center justify-center rounded-full bg-lime-300/10 text-lime-300">✓</span>Check the team news</p><p class="flex items-center gap-3"><span class="flex size-6 items-center justify-center rounded-full bg-lime-300/10 text-lime-300">✓</span>Set your limits</p><p class="flex items-center gap-3"><span class="flex size-6 items-center justify-center rounded-full bg-lime-300/10 text-lime-300">✓</span>Never chase losses</p></div>
            </aside>
        </section>
    </div>
</x-layouts::app>
