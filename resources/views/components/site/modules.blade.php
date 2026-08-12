@php
    $modules = [
        ['icon' => 'reception', 'name' => 'Accueil', 'desc' => 'Enregistrement & rendez-vous'],
        ['icon' => 'doctor', 'name' => 'Médecin', 'desc' => 'Consultation & prescriptions'],
        ['icon' => 'nurse', 'name' => 'Soins infirmiers', 'desc' => 'Constantes & plans de soins'],
        ['icon' => 'lab', 'name' => 'Laboratoire', 'desc' => 'Analyses & résultats'],
        ['icon' => 'imaging', 'name' => 'Imagerie', 'desc' => 'Examens & comptes rendus'],
        ['icon' => 'pharmacy', 'name' => 'Pharmacie', 'desc' => 'Stocks, ventes & dettes'],
        ['icon' => 'maternity', 'name' => 'Maternité', 'desc' => 'Accouchement & nouveau-né'],
        ['icon' => 'cashier', 'name' => 'Caisse', 'desc' => 'Encaissements & cautions'],
        ['icon' => 'accounting', 'name' => 'Comptabilité', 'desc' => 'Journaux & états financiers'],
        ['icon' => 'direction', 'name' => 'Direction', 'desc' => 'Rapports & pilotage'],
    ];
@endphp

<section id="modules" class="scroll-mt-24 bg-primary-950 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <x-ui.section-heading
            label="Un système, tous les services"
            title="Un module pour chaque métier de votre établissement"
            align="center"
            light
        />

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
            @foreach ($modules as $module)
                <div class="reveal group rounded-3xl border border-white/10 bg-white/[.055] p-6 backdrop-blur transition hover:border-accent-400/40 hover:bg-white/[.09]">
                    <span class="flex size-11 items-center justify-center rounded-xl bg-white/10 text-accent-300 transition group-hover:scale-110 group-hover:bg-accent-400 group-hover:text-primary-950">
                        <x-ui.icon :name="$module['icon']" />
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-white">{{ $module['name'] }}</h3>
                    <p class="mt-1.5 text-sm leading-relaxed text-primary-200">{{ $module['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="reveal mt-10 rounded-3xl border border-accent-300/20 bg-gradient-to-r from-primary-800/80 to-accent-700/40 p-8 text-center sm:p-10">
            <p class="text-xl font-semibold text-white">Des modules connectés, pas juxtaposés.</p>
            <p class="mx-auto mt-2 max-w-2xl text-base leading-relaxed text-primary-100">
                Une prescription en consultation déclenche automatiquement le travail du laboratoire, de l’imagerie ou de la pharmacie — jusqu’à la facturation et l’encaissement, sans double saisie.
            </p>
        </div>
    </div>
</section>
