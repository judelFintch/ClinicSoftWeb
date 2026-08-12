@php
    $plans = [
        [
            'name' => 'Bronze',
            'price' => '100',
            'tagline' => "Formule d'entrée, l'essentiel pour démarrer",
            'featured' => false,
            'rows' => [
                'Fonctionnalités' => 'Accueil, consultations, caisse et facturation de base pour les patients au comptant.',
                'Couverture' => '1 établissement, jusqu’à 5 utilisateurs.',
                'Maintenance' => 'Mises à jour correctives et sauvegarde hebdomadaire.',
                'Réactivité' => 'Support par email, réponse sous 48h ouvrées.',
            ],
        ],
        [
            'name' => 'Argent',
            'price' => '220',
            'tagline' => 'Pour un établissement à plusieurs services',
            'featured' => true,
            'rows' => [
                'Fonctionnalités' => 'Bronze + laboratoire, imagerie, pharmacie, hospitalisation et gestion multidevise.',
                'Couverture' => '1 établissement, jusqu’à 20 utilisateurs, plusieurs services connectés.',
                'Maintenance' => 'Mises à jour régulières et sauvegarde quotidienne.',
                'Réactivité' => 'Support téléphone et email, réponse sous 24h ouvrées.',
            ],
        ],
        [
            'name' => 'Gold',
            'price' => '450',
            'tagline' => 'Pilotage complet, exigence et priorité',
            'featured' => false,
            'rows' => [
                'Fonctionnalités' => 'Suite complète : maternité, bloc opératoire, comptabilité, entreprises/abonnés et rapports avancés.',
                'Couverture' => 'Utilisateurs illimités, option multi-sites pour les groupes hospitaliers.',
                'Maintenance' => 'Mises à jour prioritaires, sauvegarde quotidienne et supervision proactive.',
                'Réactivité' => 'Ligne dédiée, réponse sous 4h ouvrées, chargé de compte attitré.',
            ],
        ],
    ];
@endphp

<section id="tarifs" class="scroll-mt-24 bg-slate-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <x-ui.section-heading
            title="Nos formules d’abonnement"
            subtitle="Trois formules pensées pour accompagner votre établissement selon sa taille et ses besoins : Bronze pour démarrer, Argent pour vos services étendus, Gold pour un pilotage complet et prioritaire."
            align="center"
        />

        <div class="mt-14 grid gap-8 lg:grid-cols-3 lg:items-start">
            @foreach ($plans as $plan)
                <div @class([
                    'reveal flex h-full flex-col rounded-2xl border p-8',
                    'border-primary-700 bg-white shadow-[0_8px_30px_-12px_rgba(16,38,54,0.25)] lg:-translate-y-3' => $plan['featured'],
                    'border-slate-200 bg-white' => ! $plan['featured'],
                ])>
                    @if ($plan['featured'])
                        <span class="mb-4 inline-flex w-fit items-center rounded-full bg-gradient-to-r from-primary-700 to-accent-600 px-3 py-1 text-xs font-semibold tracking-wide text-white uppercase">Le plus choisi</span>
                    @endif

                    <h3 class="text-lg font-semibold text-slate-900">{{ $plan['name'] }}</h3>
                    <p class="mt-1 text-sm text-slate-500">{{ $plan['tagline'] }}</p>

                    <p class="mt-6 flex items-baseline gap-1">
                        <span class="text-4xl font-semibold tracking-tight text-slate-900">{{ $plan['price'] }}&nbsp;$</span>
                        <span class="text-sm text-slate-500">USD / mois</span>
                    </p>

                    <dl class="mt-8 space-y-5 border-t border-slate-200 pt-6">
                        @foreach ($plan['rows'] as $label => $value)
                            <div>
                                <dt class="text-xs font-semibold tracking-wide text-primary-700 uppercase">{{ $label }}</dt>
                                <dd class="mt-1.5 text-sm leading-relaxed text-slate-600">{{ $value }}</dd>
                            </div>
                        @endforeach
                    </dl>

                    <div class="mt-8">
                        <x-ui.demo-cta
                            label="Demander une démo"
                            :variant="$plan['featured'] ? 'primary' : 'secondary'"
                            class="w-full justify-center"
                        />
                    </div>
                </div>
            @endforeach
        </div>

        <p class="reveal mx-auto mt-10 max-w-3xl rounded-xl border border-slate-200 bg-white px-6 py-5 text-center text-sm leading-relaxed text-slate-600">
            Installation en ligne (cloud) ou en local (sur vos serveurs)&nbsp;: réalisée sur devis, après vérification de votre infrastructure existante. Cela inclut le paramétrage initial, la reprise des données et la formation de vos équipes. Tarifs d’abonnement indicatifs, confirmés après échange sur le périmètre retenu.
        </p>
    </div>
</section>
