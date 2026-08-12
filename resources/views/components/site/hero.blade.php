<section class="hero-grid relative overflow-hidden bg-[#f7f9ff] pb-20 pt-36 sm:pt-40 lg:min-h-[800px] lg:pb-28 lg:pt-44">
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute -left-48 top-24 size-[34rem] rounded-full bg-primary-200/45 blur-[110px]"></div>
        <div class="absolute -right-48 -top-20 size-[38rem] rounded-full bg-accent-200/40 blur-[120px]"></div>
    </div>

    <div class="shell relative">
        <div class="grid items-center gap-14 lg:grid-cols-[.9fr_1.1fr] lg:gap-16">
            <div class="reveal max-w-2xl">
                <div class="inline-flex items-center gap-2 rounded-full border border-primary-200/80 bg-white/80 px-3.5 py-2 text-xs font-bold tracking-[.14em] text-primary-800 uppercase shadow-sm backdrop-blur">
                    <span class="relative flex size-2"><span class="absolute inline-flex size-full animate-ping rounded-full bg-accent-400 opacity-60"></span><span class="relative inline-flex size-2 rounded-full bg-accent-500"></span></span>
                    Système d’information hospitalier
                </div>

                <h1 class="mt-7 text-[clamp(3.2rem,7vw,5.8rem)] font-semibold leading-[.92] tracking-[-.055em] text-primary-950">
                    Soignez mieux.<br>
                    <span class="gradient-text">Gérez plus juste.</span>
                </h1>
                <p class="mt-7 max-w-xl text-lg leading-8 text-slate-600 sm:text-xl">
                    ClinicSoft connecte vos équipes, vos soins et vos finances dans une plateforme hospitalière unique, pensée pour la réalité des établissements africains.
                </p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row sm:items-center">
                    <x-ui.demo-cta label="Découvrir ClinicSoft" class="justify-center" />
                    <a href="#fonctionnement" class="group inline-flex items-center justify-center gap-2 rounded-full px-6 py-3.5 text-sm font-bold text-primary-950 transition hover:bg-white">
                        Voir comment ça marche
                        <x-ui.icon name="arrow-right" class="size-4 transition group-hover:translate-x-1" />
                    </a>
                </div>

                <div class="mt-10 flex flex-wrap items-center gap-x-7 gap-y-3 border-t border-slate-200/80 pt-6 text-sm font-medium text-slate-600">
                    <span class="flex items-center gap-2"><x-ui.icon name="check" class="size-4 text-accent-600" /> Déploiement accompagné</span>
                    <span class="flex items-center gap-2"><x-ui.icon name="check" class="size-4 text-accent-600" /> Support local</span>
                    <span class="flex items-center gap-2"><x-ui.icon name="check" class="size-4 text-accent-600" /> Cloud ou local</span>
                </div>
            </div>

            <div class="reveal relative mx-auto w-full max-w-2xl lg:mx-0" aria-label="Aperçu de l’interface ClinicSoft">
                <div class="absolute -inset-5 rounded-[2.5rem] bg-gradient-to-br from-primary-400/20 to-accent-300/25 blur-2xl"></div>
                <div class="dashboard-frame relative overflow-hidden rounded-[1.75rem] border border-white/80 bg-white p-2 shadow-[0_35px_90px_-30px_rgba(20,29,74,.38)]">
                    <div class="overflow-hidden rounded-[1.35rem] bg-[#f5f7fb]">
                        <div class="flex items-center justify-between border-b border-slate-200/70 bg-white px-4 py-3">
                            <div class="flex items-center gap-2"><span class="size-2.5 rounded-full bg-red-300"></span><span class="size-2.5 rounded-full bg-amber-300"></span><span class="size-2.5 rounded-full bg-emerald-300"></span></div>
                            <span class="rounded-full bg-slate-100 px-4 py-1 text-[9px] font-semibold text-slate-400">clinicsoft.tech/dashboard</span>
                            <span class="size-6 rounded-full bg-primary-100"></span>
                        </div>
                        <div class="grid min-h-[390px] grid-cols-[58px_1fr] sm:grid-cols-[130px_1fr]">
                            <aside class="bg-primary-950 px-2 py-5 text-white sm:px-3">
                                <div class="mb-7 flex items-center gap-2 px-1"><span class="grid size-7 place-items-center rounded-lg bg-accent-400"><x-ui.icon name="cross" class="size-4" /></span><span class="hidden text-xs font-bold sm:block">ClinicSoft</span></div>
                                @foreach (['direction', 'reception', 'doctor', 'lab', 'pharmacy', 'cashier'] as $icon)
                                    <div @class(['mb-2 flex items-center gap-2 rounded-lg p-2', 'bg-white/12' => $loop->first, 'text-primary-300' => !$loop->first])><x-ui.icon :name="$icon" class="size-4 shrink-0" /><span class="hidden h-1.5 rounded-full bg-current opacity-50 sm:block" style="width: {{ 35 + $loop->index * 5 }}px"></span></div>
                                @endforeach
                            </aside>
                            <div class="p-4 sm:p-6">
                                <div class="flex items-start justify-between"><div><p class="text-[10px] font-semibold text-slate-400">Vue d’ensemble</p><h2 class="mt-1 text-base font-bold text-primary-950">Bonjour, Dr. Kabeya</h2></div><span class="rounded-lg bg-white px-2 py-1 text-[9px] text-slate-500 shadow-sm">Aujourd’hui</span></div>
                                <div class="mt-5 grid grid-cols-3 gap-2 sm:gap-3">
                                    @foreach ([['24','Patients','bg-primary-400'],['8','En attente','bg-accent-400'],['$ 2 840','Recettes','bg-primary-400']] as $stat)
                                        <div class="rounded-xl bg-white p-3 shadow-[0_4px_18px_-8px_rgba(15,23,42,.15)]"><span class="mb-3 block size-2 rounded-full {{ $stat[2] }}"></span><p class="text-sm font-bold text-primary-950 sm:text-lg">{{ $stat[0] }}</p><p class="mt-1 text-[8px] text-slate-400 sm:text-[10px]">{{ $stat[1] }}</p></div>
                                    @endforeach
                                </div>
                                <div class="mt-3 grid gap-3 sm:grid-cols-[1.35fr_.65fr]">
                                    <div class="rounded-xl bg-white p-4 shadow-sm"><div class="flex justify-between"><p class="text-[10px] font-bold text-slate-700">Activité des services</p><span class="text-[8px] text-accent-600">Cette semaine</span></div><div class="mt-5 flex h-28 items-end gap-2">@foreach ([42,70,54,88,64,94,74,82] as $height)<span class="flex-1 rounded-t bg-gradient-to-t from-primary-700 to-accent-400" style="height: {{ $height }}%"></span>@endforeach</div></div>
                                    <div class="rounded-xl bg-primary-950 p-4 text-white"><p class="text-[10px] font-semibold text-primary-200">Flux patient</p><div class="mx-auto mt-4 grid size-20 place-items-center rounded-full border-[9px] border-accent-400 border-r-primary-700"><span class="text-lg font-bold">86%</span></div><p class="mt-4 text-center text-[8px] text-primary-200">Parcours complétés</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-medium absolute -bottom-7 -left-3 flex items-center gap-3 rounded-2xl border border-white bg-white/95 p-3.5 shadow-xl sm:-left-8">
                    <span class="grid size-10 place-items-center rounded-xl bg-emerald-50 text-emerald-600"><x-ui.icon name="shield-check" class="size-5" /></span><div><p class="text-xs font-bold text-primary-950">Données sécurisées</p><p class="text-[10px] text-slate-500">Accès & traçabilité maîtrisés</p></div>
                </div>
            </div>
        </div>

        <div class="mt-24 grid grid-cols-2 gap-6 border-t border-slate-200/80 pt-8 sm:grid-cols-4">
            @foreach ([['10+','modules connectés'],['360°','vision du patient'],['2','devises USD / CDF'],['24/7','continuité opérationnelle']] as $item)
                <div class="reveal"><p class="text-2xl font-bold tracking-tight text-primary-950">{{ $item[0] }}</p><p class="mt-1 text-xs font-medium text-slate-500 sm:text-sm">{{ $item[1] }}</p></div>
            @endforeach
        </div>
    </div>
</section>
