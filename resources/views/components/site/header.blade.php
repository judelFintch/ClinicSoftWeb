<header x-data="{ open: false }" class="sticky top-0 z-40 border-b border-slate-200/80 bg-white/90 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-4 lg:px-8">
        <x-ui.logo tagline="Système d’information hospitalier" />

        <nav class="hidden items-center gap-8 lg:flex">
            <a href="#fonctionnement" class="text-sm font-medium text-slate-600 transition-colors hover:text-primary-800">Fonctionnement</a>
            <a href="#modules" class="text-sm font-medium text-slate-600 transition-colors hover:text-primary-800">Modules</a>
            <a href="#probleme" class="text-sm font-medium text-slate-600 transition-colors hover:text-primary-800">Pourquoi ClinicSoft</a>
            <a href="#tarifs" class="text-sm font-medium text-slate-600 transition-colors hover:text-primary-800">Tarifs</a>
            <a href="#demo" class="text-sm font-medium text-slate-600 transition-colors hover:text-primary-800">Démo</a>
            <a href="#contact" class="text-sm font-medium text-slate-600 transition-colors hover:text-primary-800">Contact</a>
        </nav>

        <div class="hidden lg:block">
            <x-ui.demo-cta size="sm" />
        </div>

        <button
            type="button"
            @click="open = !open"
            class="inline-flex items-center justify-center rounded-md p-2 text-slate-600 hover:bg-slate-100 lg:hidden"
            :aria-expanded="open"
            aria-label="Ouvrir le menu"
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" class="size-6">
                <path x-show="!open" d="M4 7h16M4 12h16M4 17h16" />
                <path x-show="open" x-cloak d="M6 6l12 12M18 6 6 18" />
            </svg>
        </button>
    </div>

    <div
        x-show="open"
        x-cloak
        x-transition
        @click.outside="open = false"
        class="border-t border-slate-200 bg-white lg:hidden"
    >
        <nav class="flex flex-col gap-1 px-6 py-4">
            <a @click="open = false" href="#fonctionnement" class="rounded-md px-2 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Fonctionnement</a>
            <a @click="open = false" href="#modules" class="rounded-md px-2 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Modules</a>
            <a @click="open = false" href="#probleme" class="rounded-md px-2 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Pourquoi ClinicSoft</a>
            <a @click="open = false" href="#tarifs" class="rounded-md px-2 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Tarifs</a>
            <a @click="open = false" href="#demo" class="rounded-md px-2 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Démo</a>
            <a @click="open = false" href="#contact" class="rounded-md px-2 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">Contact</a>
            <div class="mt-2">
                <x-ui.demo-cta size="sm" class="w-full justify-center" />
            </div>
        </nav>
    </div>
</header>
