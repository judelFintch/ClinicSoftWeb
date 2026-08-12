<header
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 16"
    :class="scrolled ? 'py-2' : 'py-4'"
    class="fixed inset-x-0 top-0 z-40 transition-all duration-300"
>
    <div class="shell">
        <div class="flex items-center justify-between rounded-2xl border border-white/70 bg-white/88 px-4 py-3 shadow-[0_12px_45px_-22px_rgba(15,23,42,.35)] backdrop-blur-xl sm:px-5">
            <x-ui.logo tagline="Un produit de DRC Care Medical" />

            <nav class="hidden items-center gap-1 lg:flex" aria-label="Navigation principale">
                @foreach ([
                    '#fonctionnement' => 'Fonctionnement',
                    '#modules' => 'Solutions',
                    '#probleme' => 'Pourquoi nous',
                    '#tarifs' => 'Tarifs',
                ] as $href => $label)
                    <a href="{{ $href }}" class="rounded-full px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-primary-50 hover:text-primary-900">{{ $label }}</a>
                @endforeach
            </nav>

            <div class="hidden items-center gap-3 lg:flex">
                <a href="#contact" class="text-sm font-semibold text-slate-700 transition hover:text-primary-800">Nous contacter</a>
                <x-ui.demo-cta size="sm" />
            </div>

            <button type="button" @click="open = !open" class="grid size-10 place-items-center rounded-xl bg-primary-950 text-white lg:hidden" :aria-expanded="open" aria-controls="mobile-menu" aria-label="Afficher le menu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-5">
                    <path x-show="!open" d="M5 7h14M5 12h14M5 17h14" />
                    <path x-show="open" x-cloak d="m6 6 12 12M18 6 6 18" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" x-show="open" x-cloak x-transition.origin.top @click.outside="open = false" class="mt-2 overflow-hidden rounded-2xl border border-white/70 bg-white p-3 shadow-2xl lg:hidden">
            <nav class="grid gap-1">
                @foreach ([
                    '#fonctionnement' => 'Fonctionnement', '#modules' => 'Solutions', '#probleme' => 'Pourquoi ClinicSoft', '#tarifs' => 'Tarifs', '#contact' => 'Contact',
                ] as $href => $label)
                    <a @click="open = false" href="{{ $href }}" class="rounded-xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-primary-50">{{ $label }}</a>
                @endforeach
                <x-ui.demo-cta class="mt-2 justify-center" />
            </nav>
        </div>
    </div>
</header>
