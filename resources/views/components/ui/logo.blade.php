@props(['tagline' => null])

<a href="{{ url('/') }}" {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
    <span class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-primary-700 to-accent-500 text-white">
        <x-ui.icon name="cross" class="size-5" />
    </span>
    <span class="leading-tight">
        <span class="block text-base font-semibold tracking-tight">
            <span class="text-primary-800">Clinic</span><span class="text-accent-600">Soft</span>
        </span>
        @if ($tagline)
            <span class="block text-xs text-slate-500">{{ $tagline }}</span>
        @endif
    </span>
</a>
