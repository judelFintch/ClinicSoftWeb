@php
    $steps = [
        ['icon' => 'reception', 'name' => 'Accueil', 'desc' => 'Recherche ou enregistrement du patient'],
        ['icon' => 'doctor', 'name' => 'Consultation', 'desc' => 'Diagnostic, prescriptions et demandes'],
        ['icon' => 'tasks', 'name' => 'Exécution', 'desc' => 'Labo, imagerie, pharmacie, soins'],
        ['icon' => 'accounting', 'name' => 'Facturation', 'desc' => 'Consolidation des prestations'],
        ['icon' => 'cashier', 'name' => 'Paiement', 'desc' => 'Encaissement & justificatifs'],
    ];

    $implementation = [
        ['n' => '1', 'name' => 'Cadrage', 'desc' => 'Recette fonctionnelle, choix des modules et des workflows adaptés à votre établissement.'],
        ['n' => '2', 'name' => 'Déploiement', 'desc' => 'Paramétrage, reprise des données existantes et mise en production sécurisée.'],
        ['n' => '3', 'name' => 'Formation & support', 'desc' => 'Accompagnement de vos équipes et assistance continue après le lancement.'],
    ];
@endphp

<section id="fonctionnement" class="scroll-mt-24 bg-white py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <x-ui.section-heading
            title="Le parcours d’un patient, de l’accueil au paiement"
            align="center"
        />

        <div class="mt-16 flex flex-col items-stretch gap-6 lg:flex-row lg:items-start lg:gap-0">
            @foreach ($steps as $index => $step)
                <div class="reveal flex flex-1 flex-col items-center text-center">
                    <span class="flex size-16 items-center justify-center rounded-2xl border border-primary-100 bg-primary-50 text-primary-700 shadow-sm">
                        <x-ui.icon :name="$step['icon']" class="size-6" />
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-slate-900">{{ $step['name'] }}</h3>
                    <p class="mt-1.5 max-w-[14rem] text-sm leading-relaxed text-slate-600">{{ $step['desc'] }}</p>
                </div>

                @if (!$loop->last)
                    <div class="hidden items-center justify-center px-2 pt-7 lg:flex" aria-hidden="true">
                        <x-ui.icon name="arrow-right" class="size-5 text-accent-300" />
                    </div>
                @endif
            @endforeach
        </div>

        <div class="mt-20 grid gap-6 sm:grid-cols-3">
            @foreach ($implementation as $step)
                <div class="reveal rounded-3xl border border-slate-200 bg-[#f8faff] p-8">
                    <span class="flex size-9 items-center justify-center rounded-full bg-primary-800 text-sm font-semibold text-white">{{ $step['n'] }}</span>
                    <h3 class="mt-5 text-base font-semibold text-slate-900">{{ $step['name'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
