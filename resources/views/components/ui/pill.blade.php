@props(['light' => false])

<span {{ $attributes->merge([
    'class' => $light
        ? 'inline-flex items-center rounded-full border border-white/20 bg-white/10 px-3.5 py-1.5 text-sm text-white'
        : 'inline-flex items-center rounded-full border border-accent-200 bg-accent-50 px-3.5 py-1.5 text-sm text-primary-800',
]) }}>
    {{ $slot }}
</span>
