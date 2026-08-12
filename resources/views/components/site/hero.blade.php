<section class="relative overflow-hidden bg-white">
    {{-- Décor : dégradés doux et motif de croix discret, à la manière de l'identité ClinicSoft --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        <div class="absolute -top-40 -right-32 size-[34rem] rounded-full bg-gradient-to-br from-primary-100 to-accent-100 opacity-70 blur-3xl"></div>
        <div class="absolute -bottom-48 -left-32 size-[28rem] rounded-full bg-gradient-to-tr from-accent-50 to-primary-50 opacity-70 blur-3xl"></div>

        <x-ui.icon name="cross" class="absolute left-[9%] top-[18%] size-8 -rotate-12 text-primary-100" />
        <x-ui.icon name="cross" class="absolute left-[68%] top-[10%] size-6 rotate-6 text-accent-200" />
        <x-ui.icon name="cross" class="absolute left-[22%] top-[80%] size-9 rotate-12 text-accent-100" />
        <x-ui.icon name="cross" class="absolute left-[85%] top-[65%] size-7 -rotate-6 text-primary-100" />
    </div>

    <div
        x-data="heroSlider(3)"
        @mouseenter="stop()"
        @mouseleave="restart()"
        @keydown.left="prev(); restart()"
        @keydown.right="next(); restart()"
        tabindex="0"
        role="region"
        aria-roledescription="carrousel"
        aria-label="Présentation de ClinicSoft"
        class="relative mx-auto max-w-7xl px-6 pt-16 pb-20 outline-none lg:px-8 lg:pb-28 lg:pt-24"
    >
        <div class="grid gap-16 lg:grid-cols-2 lg:items-center">
            {{-- Contenu glissant --}}
            <div class="relative min-h-[30rem] sm:min-h-[26rem] lg:min-h-[30rem]">
                {{-- Diapositive 1 : vue d'ensemble --}}
                <div
                    x-show="active === 0"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-3"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0 max-w-xl"
                >
                    <p class="text-sm font-semibold tracking-wide text-primary-700 uppercase">Système d’information hospitalier</p>
                    <h1 class="mt-4 text-4xl font-semibold tracking-tight sm:text-5xl lg:text-6xl">
                        <span class="text-slate-900">Clinic</span><span class="bg-gradient-to-r from-primary-700 to-accent-500 bg-clip-text text-transparent">Soft</span>
                    </h1>
                    <p class="mt-6 text-xl leading-relaxed text-slate-700">
                        La plateforme qui connecte tout votre établissement de santé, de l’accueil du patient jusqu’à l’encaissement.
                    </p>
                    <p class="mt-5 max-w-2xl text-base leading-relaxed text-slate-600">
                        ClinicSoft centralise en un seul outil l’accueil, la consultation médicale, les soins infirmiers, le laboratoire, l’imagerie, la pharmacie, la maternité, la caisse et la direction. Un dossier patient unique, une facturation maîtrisée et des rapports en temps réel&nbsp;: tout ce qu’il faut pour soigner mieux, sécuriser vos recettes et piloter votre établissement avec confiance.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-2.5">
                        <x-ui.pill>Dossier patient unifié</x-ui.pill>
                        <x-ui.pill>Facturation intégrée</x-ui.pill>
                        <x-ui.pill>Multidevise USD / CDF</x-ui.pill>
                        <x-ui.pill>Contrôle &amp; traçabilité</x-ui.pill>
                        <x-ui.pill>Rapports en temps réel</x-ui.pill>
                    </div>

                    <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center">
                        <x-ui.demo-cta label="Voir la démo" anchor="demo" variant="primary" />
                        <a href="#fonctionnement" class="inline-flex items-center gap-2 rounded-lg px-5 py-3 text-sm font-medium text-slate-700 transition-colors hover:text-primary-800">
                            Découvrir le fonctionnement
                            <x-ui.icon name="arrow-right" class="size-4" />
                        </a>
                    </div>
                </div>

                {{-- Diapositive 2 : pourquoi ClinicSoft --}}
                <div
                    x-show="active === 1"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-3"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0 max-w-xl"
                >
                    <p class="text-sm font-semibold tracking-wide text-primary-700 uppercase">Une plateforme unique</p>
                    <h1 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        De la prescription <span class="bg-gradient-to-r from-primary-700 to-accent-500 bg-clip-text text-transparent">au paiement</span>
                    </h1>
                    <p class="mt-6 text-xl leading-relaxed text-slate-700">
                        « ClinicSoft connecte tous les services d’un établissement de santé dans une plateforme unique afin d’améliorer la qualité des soins, la maîtrise des recettes, la traçabilité des opérations et la prise de décision. »
                    </p>
                    <p class="mt-5 max-w-2xl text-base leading-relaxed text-slate-600">
                        Donner à chaque établissement de santé — centre médical, clinique, polyclinique, maternité ou hôpital — un système unique qui relie l’accueil, les soins, la logistique et la finance, pour que rien ne se perde entre la prescription et le paiement.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-2.5">
                        <x-ui.pill>Dossier patient unique</x-ui.pill>
                        <x-ui.pill>Prescription → paiement</x-ui.pill>
                        <x-ui.pill>Contrôle &amp; traçabilité totale</x-ui.pill>
                        <x-ui.pill>Multidevise USD / CDF</x-ui.pill>
                    </div>

                    <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center">
                        <x-ui.demo-cta label="Voir la démo" anchor="demo" variant="primary" />
                        <a href="#probleme" class="inline-flex items-center gap-2 rounded-lg px-5 py-3 text-sm font-medium text-slate-700 transition-colors hover:text-primary-800">
                            Pourquoi ClinicSoft
                            <x-ui.icon name="arrow-right" class="size-4" />
                        </a>
                    </div>
                </div>

                {{-- Diapositive 3 : tous les modules --}}
                <div
                    x-show="active === 2"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-3"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute inset-0 max-w-xl"
                >
                    <p class="text-sm font-semibold tracking-wide text-primary-700 uppercase">Un système, tous les services</p>
                    <h1 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                        Un module pour <span class="bg-gradient-to-r from-primary-700 to-accent-500 bg-clip-text text-transparent">chaque métier</span> de votre établissement
                    </h1>
                    <p class="mt-6 text-xl leading-relaxed text-slate-700">
                        Des modules connectés, pas juxtaposés.
                    </p>
                    <p class="mt-5 max-w-2xl text-base leading-relaxed text-slate-600">
                        Une prescription en consultation déclenche automatiquement le travail du laboratoire, de l’imagerie ou de la pharmacie — jusqu’à la facturation et l’encaissement, sans double saisie.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-2.5">
                        <x-ui.pill>Accueil</x-ui.pill>
                        <x-ui.pill>Médecin</x-ui.pill>
                        <x-ui.pill>Laboratoire</x-ui.pill>
                        <x-ui.pill>Pharmacie</x-ui.pill>
                        <x-ui.pill>Caisse</x-ui.pill>
                        <x-ui.pill>Direction</x-ui.pill>
                    </div>

                    <div class="mt-10 flex flex-col gap-4 sm:flex-row sm:items-center">
                        <x-ui.demo-cta label="Voir la démo" anchor="demo" variant="primary" />
                        <a href="#modules" class="inline-flex items-center gap-2 rounded-lg px-5 py-3 text-sm font-medium text-slate-700 transition-colors hover:text-primary-800">
                            Explorer les modules
                            <x-ui.icon name="arrow-right" class="size-4" />
                        </a>
                    </div>
                </div>
            </div>

            {{-- Illustration décorative --}}
            <div class="relative hidden lg:block" aria-hidden="true">
                <div class="relative mx-auto aspect-square w-full max-w-md">
                    <div class="absolute inset-6 rounded-full bg-gradient-to-br from-primary-200 via-accent-100 to-accent-200 opacity-60 blur-3xl"></div>

                    <div class="relative flex h-full items-center justify-center">
                        <div class="float-slow flex size-40 items-center justify-center rounded-[2rem] bg-gradient-to-br from-primary-700 to-accent-500 shadow-xl shadow-primary-900/20">
                            <x-ui.icon name="cross" class="size-20 text-white" />
                        </div>

                        <div class="float-fast absolute left-2 top-8 flex size-14 items-center justify-center rounded-2xl bg-white shadow-lg ring-1 ring-slate-100">
                            <x-ui.icon name="shield-check" class="size-6 text-accent-600" />
                        </div>
                        <div class="float-medium absolute bottom-6 right-0 flex size-16 items-center justify-center rounded-2xl bg-white shadow-lg ring-1 ring-slate-100">
                            <x-ui.icon name="trending" class="size-7 text-primary-700" />
                        </div>
                        <div class="float-slow absolute right-8 top-0 flex size-11 items-center justify-center rounded-xl bg-white shadow-lg ring-1 ring-slate-100">
                            <x-ui.icon name="layers" class="size-5 text-accent-600" />
                        </div>
                        <div class="float-medium absolute bottom-16 left-0 flex size-12 items-center justify-center rounded-xl bg-white shadow-lg ring-1 ring-slate-100">
                            <x-ui.icon name="exchange" class="size-5 text-primary-700" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Contrôles du slider --}}
        <div class="relative mt-8 flex items-center gap-4 lg:mt-4">
            <button
                type="button"
                @click="prev(); restart()"
                class="flex size-9 items-center justify-center rounded-full border border-slate-200 text-slate-500 transition-colors hover:border-primary-300 hover:text-primary-800"
                aria-label="Diapositive précédente"
            >
                <x-ui.icon name="chevron-left" class="size-4" />
            </button>

            <div class="flex items-center gap-2" role="tablist" aria-label="Diapositives">
                <template x-for="i in count" :key="i">
                    <button
                        type="button"
                        role="tab"
                        @click="goTo(i - 1)"
                        :aria-selected="active === i - 1"
                        :aria-label="'Aller à la diapositive ' + i"
                        class="h-1.5 rounded-full transition-all"
                        :class="active === i - 1 ? 'w-6 bg-primary-700' : 'w-1.5 bg-slate-200 hover:bg-slate-300'"
                    ></button>
                </template>
            </div>

            <button
                type="button"
                @click="next(); restart()"
                class="flex size-9 items-center justify-center rounded-full border border-slate-200 text-slate-500 transition-colors hover:border-primary-300 hover:text-primary-800"
                aria-label="Diapositive suivante"
            >
                <x-ui.icon name="chevron-right" class="size-4" />
            </button>
        </div>

        <div class="relative mt-10 border-t border-slate-200 pt-6">
            <p class="text-xs font-semibold tracking-wide text-slate-500 uppercase">Conçu pour</p>
            <p class="mt-2 text-sm text-slate-600">Centres médicaux &middot; Cliniques &amp; polycliniques &middot; Maternités &middot; Hôpitaux</p>
        </div>
    </div>
</section>
