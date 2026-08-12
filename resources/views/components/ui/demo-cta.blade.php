@props([
    'label' => 'Demander une démo',
    'variant' => 'primary', // primary | secondary | inverse
    'anchor' => 'demo',
    'size' => 'base', // base | sm
])

@php
    $external = filled(config('clinicsoft.demo_url'));
    $href = $external ? config('clinicsoft.demo_url') : '#' . $anchor;

    $variants = [
        'primary' => 'bg-gradient-to-r from-primary-700 to-accent-600 text-white hover:from-primary-800 hover:to-accent-700 focus-visible:outline-primary-700',
        'secondary' => 'border border-slate-300 text-slate-800 hover:border-primary-300 hover:text-primary-800 focus-visible:outline-primary-700',
        'inverse' => 'bg-white text-primary-800 hover:bg-primary-50 focus-visible:outline-white',
    ];

    $sizes = [
        'base' => 'px-5 py-3 text-sm',
        'sm' => 'px-4 py-2 text-sm',
    ];
@endphp

<a
    href="{{ $href }}"
    @if ($external) target="_blank" rel="noopener" @endif
    {{ $attributes->merge([
        'class' => "inline-flex items-center gap-2 rounded-full font-medium transition-colors duration-150 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 {$variants[$variant]} {$sizes[$size]}",
    ]) }}
>
    {{ $label }}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4">
        <path d="M5 12h14M13 6l6 6-6 6" />
    </svg>
</a>
