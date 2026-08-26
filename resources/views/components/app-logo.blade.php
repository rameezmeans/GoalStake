@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand :name="config('app.name', 'GoalStake')" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-9 items-center justify-center rounded-xl bg-lime-400 text-[#06100b]">
            <x-app-logo-icon class="size-6" />
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand :name="config('app.name', 'GoalStake')" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-9 items-center justify-center rounded-xl bg-lime-400 text-[#06100b]">
            <x-app-logo-icon class="size-6" />
        </x-slot>
    </flux:brand>
@endif
