{{-- Icônes fines (line icons), dessinées à partir de formes géométriques simples --}}
@props(['name'])

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" {{ $attributes->merge(['class' => 'size-6']) }}>
    @switch($name)
        @case('reception')
            <path d="M3 21h18" />
            <path d="M5 21V10l7-5 7 5v11" />
            <path d="M10 21v-6h4v6" />
            <circle cx="12" cy="8.5" r="1.2" fill="currentColor" stroke="none" />
            @break

        @case('doctor')
            <path d="M8 3v6a4 4 0 0 0 8 0V3" />
            <path d="M12 13v3a5 5 0 0 0 5 5 5 5 0 0 0 5-5v-1.5" />
            <circle cx="19" cy="7.5" r="1.75" />
            <path d="M4 3v9a4 4 0 0 0 4 4" />
            @break

        @case('nurse')
            <path d="M12 20.5s-6.5-4.1-9-8.4C1.2 8.9 2.6 5.5 6 5c2-.3 3.7.9 6 3.6C14.3 5.9 16 4.7 18 5c3.4.5 4.8 3.9 3 7.1-2.5 4.3-9 8.4-9 8.4Z" />
            <path d="M4.5 12h3l1.5-2.5 2 4L12.5 10l1.5 2h5" />
            @break

        @case('lab')
            <path d="M9 3h6" />
            <path d="M10 3v6.5L4.8 18a2 2 0 0 0 1.7 3h11a2 2 0 0 0 1.7-3L14 9.5V3" />
            <path d="M7 15h10" />
            @break

        @case('imaging')
            <path d="M4 8V5a1 1 0 0 1 1-1h3" />
            <path d="M20 8V5a1 1 0 0 0-1-1h-3" />
            <path d="M4 16v3a1 1 0 0 0 1 1h3" />
            <path d="M20 16v3a1 1 0 0 1-1 1h-3" />
            <circle cx="12" cy="12" r="3.5" />
            <path d="M14.5 14.5 17 17" />
            @break

        @case('pharmacy')
            <rect x="3.5" y="3.5" width="17" height="17" rx="3" />
            <path d="M12 8v8M8 12h8" />
            @break

        @case('maternity')
            <circle cx="9" cy="7" r="3" />
            <path d="M4 20c0-3 2.2-5 5-5s5 2 5 5" />
            <circle cx="18" cy="16.5" r="2.5" />
            <path d="M18 19v2m-1.5-1h3" />
            @break

        @case('cashier')
            <rect x="3" y="6" width="18" height="13" rx="2" />
            <path d="M3 10h18" />
            <circle cx="8" cy="14.5" r="1.75" />
            <path d="M14 14.5h4" />
            @break

        @case('accounting')
            <path d="M6 3h9l4 4v14a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z" />
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path d="M8 13l2.2 2.2L15.5 10" />
            @break

        @case('direction')
            <circle cx="12" cy="12" r="8.5" />
            <path d="M12 12 16 8.5" />
            <circle cx="12" cy="12" r="1.3" fill="currentColor" stroke="none" />
            <path d="M12 5.5v1.2M18.5 12h-1.2M12 18.5v-1.2M5.5 12h1.2" />
            @break

        @case('layers')
            <path d="M12 3 21 8l-9 5-9-5 9-5Z" />
            <path d="M3 12l9 5 9-5" />
            <path d="M3 16l9 5 9-5" />
            @break

        @case('link')
            <path d="M9.5 14.5 14.5 9.5" />
            <path d="M11 7.5 13 5.4a3.5 3.5 0 0 1 5 5L16 12.4" />
            <path d="M13 16.5 11 18.6a3.5 3.5 0 0 1-5-5L8 11.6" />
            @break

        @case('document-check')
            <path d="M7 3h7l4 4v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z" />
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path d="M9 13.5l2 2 4.5-4.5" />
            @break

        @case('shield-check')
            <path d="M12 3.5 19 6.5v5.2c0 4.4-3 7.6-7 8.8-4-1.2-7-4.4-7-8.8V6.5L12 3.5Z" />
            <path d="M9 12.2l2.1 2.1L15.5 10" />
            @break

        @case('trending')
            <path d="M4 16.5 10 10l3.5 3.5L20 6.5" />
            <path d="M15 6.5h5v5" />
            @break

        @case('history')
            <circle cx="12" cy="13" r="8" />
            <path d="M12 9v4.2l3 1.8" />
            <path d="M7.5 3.5 4 6M16.5 3.5 20 6" />
            @break

        @case('exchange')
            <circle cx="9" cy="9" r="5.5" />
            <circle cx="15" cy="15" r="5.5" />
            @break

        @case('flow')
            <circle cx="5" cy="12" r="2.2" />
            <circle cx="19" cy="12" r="2.2" />
            <path d="M7.2 12h9.6" />
            <path d="M14 9l3 3-3 3" />
            @break

        @case('tasks')
            <rect x="4" y="4" width="7" height="7" rx="1.2" />
            <rect x="13" y="4" width="7" height="7" rx="1.2" />
            <rect x="4" y="13" width="7" height="7" rx="1.2" />
            <path d="M15.5 16.5l1.6 1.6 3-3.4" />
            @break

        @case('check')
            <path d="M5 12.5 9.5 17 19 7" />
            @break

        @case('arrow-right')
            <path d="M5 12h14M13 6l6 6-6 6" />
            @break

        @case('cross')
            <rect x="3.5" y="3.5" width="17" height="17" rx="4" />
            <path d="M12 8v8M8 12h8" />
            @break
    @endswitch
</svg>
