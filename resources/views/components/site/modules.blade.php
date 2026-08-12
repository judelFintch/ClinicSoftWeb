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

<section id="modules" class="scroll-mt-24 bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <x-ui.section-heading
            label="Un système, tous les services"
            title="Un module pour chaque métier de votre établissement"
            align="center"
        />

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
            @foreach ($modules as $module)
                <div class="reveal rounded-2xl border border-slate-200 p-6 transition-colors hover:border-primary-200">
                    <span class="flex size-10 items-center justify-center rounded-lg bg-primary-50 text-primary-700">
                        <x-ui.icon :name="$module['icon']" />
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-slate-900">{{ $module['name'] }}</h3>
                    <p class="mt-1.5 text-sm leading-relaxed text-slate-600">{{ $module['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="reveal mt-10 rounded-2xl border border-primary-100 bg-primary-50 p-8 text-center sm:p-10">
            <p class="text-lg font-semibold text-primary-900">Des modules connectés, pas juxtaposés.</p>
            <p class="mx-auto mt-2 max-w-2xl text-base leading-relaxed text-primary-800">
                Une prescription en consultation déclenche automatiquement le travail du laboratoire, de l’imagerie ou de la pharmacie — jusqu’à la facturation et l’encaissement, sans double saisie.
            </p>
        </div>
    </div>
</section>
