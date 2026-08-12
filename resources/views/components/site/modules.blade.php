@php
    $modules = [
        ['icon' => 'reception', 'name' => 'Accueil', 'desc' => 'Dossier patient, enregistrement & rendez-vous', 'available' => true],
        ['icon' => 'doctor', 'name' => 'Médecin', 'desc' => 'Consultations & prescriptions', 'available' => true],
        ['icon' => 'nurse', 'name' => 'Soins infirmiers', 'desc' => 'Constantes, soins & hospitalisation', 'available' => true],
        ['icon' => 'lab', 'name' => 'Laboratoire', 'desc' => 'Demandes, analyses & résultats', 'available' => true],
        ['icon' => 'imaging', 'name' => 'Imagerie', 'desc' => 'Examens, résultats & validations', 'available' => true],
        ['icon' => 'pharmacy', 'name' => 'Pharmacie', 'desc' => 'Produits, stocks & mouvements', 'available' => true],
        ['icon' => 'cashier', 'name' => 'Caisse', 'desc' => 'Facturation, paiements & cautions', 'available' => true],
        ['icon' => 'direction', 'name' => 'Direction', 'desc' => 'Tableau de bord & rapports', 'available' => true],
        ['icon' => 'maternity', 'name' => 'Maternité', 'desc' => 'Accouchement & nouveau-né', 'available' => false],
        ['icon' => 'accounting', 'name' => 'Comptabilité', 'desc' => 'Journaux & états financiers', 'available' => false],
    ];
@endphp

<section id="modules" class="scroll-mt-24 bg-primary-950 py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <x-ui.section-heading
            label="Un système, tous les services"
            title="Un module pour chaque métier de votre établissement"
            subtitle="Une vue transparente de ce qui est déjà utilisable dans la démo et de ce qui arrive prochainement."
            align="center"
            light
        />

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
            @foreach ($modules as $module)
                <div @class([
                    'reveal group relative rounded-3xl border p-6 backdrop-blur transition',
                    'border-white/10 bg-white/[.055] hover:border-accent-400/40 hover:bg-white/[.09]' => $module['available'],
                    'border-white/5 bg-white/[.025] opacity-75' => ! $module['available'],
                ])>
                    <span @class([
                        'absolute right-4 top-4 rounded-full px-2.5 py-1 text-[10px] font-bold uppercase tracking-wide',
                        'bg-emerald-400/15 text-emerald-300' => $module['available'],
                        'bg-white/10 text-primary-200' => ! $module['available'],
                    ])>{{ $module['available'] ? 'Disponible' : 'À venir' }}</span>
                    <span class="flex size-11 items-center justify-center rounded-xl bg-white/10 text-accent-300 transition group-hover:scale-110 group-hover:bg-accent-400 group-hover:text-primary-950">
                        <x-ui.icon :name="$module['icon']" />
                    </span>
                    <h3 class="mt-4 text-base font-semibold text-white">{{ $module['name'] }}</h3>
                    <p class="mt-1.5 text-sm leading-relaxed text-primary-200">{{ $module['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="reveal mt-8 flex flex-wrap justify-center gap-5 text-sm text-primary-100">
            <span class="flex items-center gap-2"><span class="size-2.5 rounded-full bg-emerald-400"></span>Disponible dans la démo</span>
            <span class="flex items-center gap-2"><span class="size-2.5 rounded-full bg-white/40"></span>En cours de développement</span>
        </div>

        <div class="reveal mt-10 rounded-3xl border border-accent-300/20 bg-gradient-to-r from-primary-800/80 to-accent-700/40 p-8 text-center sm:p-10">
            <p class="text-xl font-semibold text-white">Des modules connectés, pas juxtaposés.</p>
            <p class="mx-auto mt-2 max-w-2xl text-base leading-relaxed text-primary-100">
                Une prescription en consultation déclenche automatiquement le travail du laboratoire, de l’imagerie ou de la pharmacie — jusqu’à la facturation et l’encaissement, sans double saisie.
            </p>
        </div>
    </div>
</section>
