@php
    $points = [
        'Une couverture fonctionnelle large réunie dans une seule application.',
        'Continuité complète : prescription, exécution, facturation, paiement.',
        'Dossier patient transversal, accessible selon le métier de chacun.',
        'Gestion approfondie des soins infirmiers et de la maternité.',
        'Pharmacie complète : stocks, crédits, dettes et dépenses.',
        'Entreprises, abonnés, familles et agents pris en charge nativement.',
        'Multidevise intégrée à tous les flux financiers (USD / CDF).',
        'Comptabilité intégrée et détection d’anomalies pour sécuriser la gestion.',
    ];
@endphp

<section class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <x-ui.section-heading title="Pourquoi choisir ClinicSoft" align="center" />

        <div class="mx-auto mt-14 grid max-w-4xl gap-x-10 gap-y-5 sm:grid-cols-2">
            @foreach ($points as $point)
                <div class="reveal flex items-start gap-3">
                    <span class="mt-0.5 flex size-6 shrink-0 items-center justify-center rounded-full bg-primary-50 text-primary-700">
                        <x-ui.icon name="check" class="size-3.5" />
                    </span>
                    <span class="text-base leading-relaxed text-slate-700">{{ $point }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
