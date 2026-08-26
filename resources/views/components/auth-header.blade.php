@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-left">
    <p class="mb-3 text-[10px] font-black uppercase tracking-[0.24em] text-lime-400">GoalStake access</p>
    <flux:heading size="xl" level="1" class="!text-3xl !font-black !uppercase !tracking-[-0.035em] !text-white">{{ $title }}</flux:heading>
    <flux:subheading class="mt-2 !leading-6 !text-white/45">{{ $description }}</flux:subheading>
</div>
