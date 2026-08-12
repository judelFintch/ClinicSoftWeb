@props([
    'label' => null,
    'title',
    'subtitle' => null,
    'align' => 'left', // left | center
    'light' => false, // true when placed on a dark background
])

@php
    $alignClasses = $align === 'center' ? 'text-center mx-auto' : 'text-left';
    $labelColor = $light ? 'text-primary-200' : 'text-primary-700';
    $titleColor = $light ? 'text-white' : 'text-slate-900';
    $subtitleColor = $light ? 'text-primary-100' : 'text-slate-600';
@endphp

<div {{ $attributes->merge(['class' => "reveal max-w-2xl {$alignClasses}"]) }}>
    @if ($label)
        <p class="text-sm font-semibold tracking-wide {{ $labelColor }} uppercase">{{ $label }}</p>
    @endif
    <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight {{ $titleColor }}">{{ $title }}</h2>
    @if ($subtitle)
        <p class="mt-4 text-lg leading-relaxed {{ $subtitleColor }}">{{ $subtitle }}</p>
    @endif
</div>
