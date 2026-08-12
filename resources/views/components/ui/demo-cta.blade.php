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
        'primary' => 'bg-primary-950 text-white shadow-[0_12px_28px_-10px_rgba(20,29,74,.65)] hover:-translate-y-0.5 hover:bg-primary-800 hover:shadow-[0_16px_35px_-10px_rgba(20,29,74,.55)] focus-visible:outline-primary-700',
        'secondary' => 'border border-slate-300 bg-white text-slate-800 hover:-translate-y-0.5 hover:border-primary-300 hover:text-primary-800 focus-visible:outline-primary-700',
        'inverse' => 'bg-white text-primary-900 shadow-xl hover:-translate-y-0.5 hover:bg-primary-50 focus-visible:outline-white',
    ];

    $sizes = [
        'base' => 'px-6 py-3.5 text-sm',
        'sm' => 'px-5 py-2.5 text-sm',
    ];
@endphp

<a
    href="{{ $href }}"
    @if ($external) target="_blank" rel="noopener" @endif
    {{ $attributes->merge([
        'class' => "inline-flex items-center gap-2 rounded-full font-bold transition duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 {$variants[$variant]} {$sizes[$size]}",
    ]) }}
>
    {{ $label }}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" class="size-4">
        <path d="M5 12h14M13 6l6 6-6 6" />
    </svg>
</a>
