<footer class="bg-[#f7f9fc]">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
        <div class="flex flex-col gap-8 border-t border-slate-200 pt-10 sm:flex-row sm:items-start sm:justify-between">
            <div>
                <x-ui.logo tagline="Édité par DRC Care Medical" />
                <a href="mailto:info@clinicsoft.tech" class="mt-4 block text-sm text-slate-600 hover:text-primary-800">info@clinicsoft.tech</a>
            </div>

            <nav class="grid grid-cols-2 gap-x-10 gap-y-2 sm:flex sm:gap-8">
                <a href="#fonctionnement" class="text-sm text-slate-600 hover:text-primary-800">Fonctionnement</a>
                <a href="#modules" class="text-sm text-slate-600 hover:text-primary-800">Modules</a>
                <a href="#tarifs" class="text-sm text-slate-600 hover:text-primary-800">Tarifs</a>
                <a href="#demo" class="text-sm text-slate-600 hover:text-primary-800">Démo</a>
                <a href="#contact" class="text-sm text-slate-600 hover:text-primary-800">Contact</a>
            </nav>
        </div>

        <div class="mt-10 flex flex-col gap-2 text-xs text-slate-400 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} DRC Care Medical — Tous droits réservés.</p>
            <p>Conçu avec exigence pour les professionnels de santé.</p>
        </div>
    </div>
</footer>
