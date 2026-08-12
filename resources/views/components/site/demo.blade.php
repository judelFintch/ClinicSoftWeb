<section id="demo" class="scroll-mt-24 bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-2 lg:gap-20">
            <div class="reveal">
                <x-ui.section-heading
                    label="Démonstration"
                    title="Voir ClinicSoft en action"
                    subtitle="Aucune démonstration en libre accès n’est publiée pour l’instant. L’équipe DRC Care Medical organise avec vous une démonstration personnalisée de ClinicSoft, adaptée aux services de votre établissement."
                />

                <ul class="mt-8 space-y-3 text-sm text-slate-600">
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex size-6 shrink-0 items-center justify-center rounded-full bg-primary-50 text-primary-700">
                            <x-ui.icon name="check" class="size-3.5" />
                        </span>
                        Un parcours guidé sur les modules qui vous concernent le plus.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex size-6 shrink-0 items-center justify-center rounded-full bg-primary-50 text-primary-700">
                            <x-ui.icon name="check" class="size-3.5" />
                        </span>
                        Des réponses concrètes sur le déploiement dans votre établissement.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex size-6 shrink-0 items-center justify-center rounded-full bg-primary-50 text-primary-700">
                            <x-ui.icon name="check" class="size-3.5" />
                        </span>
                        Sans engagement de votre part.
                    </li>
                </ul>
            </div>

            <div class="reveal">
                @livewire('demo-request-form')
            </div>
        </div>
    </div>
</section>
