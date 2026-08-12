@props(['tagline' => null])

<a href="{{ url('/') }}" {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
    <span class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-primary-800 to-accent-500 text-white shadow-lg shadow-primary-900/15">
        <x-ui.icon name="cross" class="size-5" />
    </span>
    <span class="leading-tight">
        <span class="block text-lg font-bold tracking-[-.03em]">
            <span class="text-primary-800">Clinic</span><span class="text-accent-600">Soft</span>
        </span>
        @if ($tagline)
            <span class="block text-xs text-slate-500">{{ $tagline }}</span>
        @endif
    </span>
</a>
