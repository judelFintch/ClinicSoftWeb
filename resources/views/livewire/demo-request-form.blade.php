<div class="rounded-2xl border border-slate-200 bg-slate-50 p-8">
    @if ($submitted)
        <div class="flex flex-col items-center py-6 text-center" wire:key="confirmation">
            <span class="flex size-12 items-center justify-center rounded-full bg-primary-100 text-primary-700">
                <x-ui.icon name="check" class="size-6" />
            </span>
            <h3 class="mt-5 text-lg font-semibold text-slate-900">Demande envoyée</h3>
            <p class="mt-2 max-w-sm text-sm leading-relaxed text-slate-600">
                Merci&nbsp;! Votre demande de démo a bien été enregistrée. L’équipe DRC Care Medical vous recontactera prochainement.
            </p>
            <button
                type="button"
                wire:click="requestAnother"
                class="mt-6 text-sm font-medium text-primary-700 hover:text-primary-800"
            >
                Envoyer une nouvelle demande
            </button>
        </div>
    @else
        <form wire:submit="submit" class="space-y-5" wire:key="form">
            <div>
                <label for="name" class="block text-sm font-medium text-slate-700">Nom complet</label>
                <input
                    type="text"
                    id="name"
                    wire:model="name"
                    autocomplete="name"
                    class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-primary-600 focus:ring-1 focus:ring-primary-600 focus:outline-none"
                    placeholder="Votre nom"
                >
                @error('name') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="establishment" class="block text-sm font-medium text-slate-700">Établissement</label>
                <input
                    type="text"
                    id="establishment"
                    wire:model="establishment"
                    autocomplete="organization"
                    class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-primary-600 focus:ring-1 focus:ring-primary-600 focus:outline-none"
                    placeholder="Nom de votre clinique, centre ou hôpital"
                >
                @error('establishment') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="phone" class="block text-sm font-medium text-slate-700">Téléphone</label>
                    <input
                        type="tel"
                        id="phone"
                        wire:model="phone"
                        autocomplete="tel"
                        class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-primary-600 focus:ring-1 focus:ring-primary-600 focus:outline-none"
                        placeholder="+243 ..."
                    >
                    @error('phone') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                    <input
                        type="email"
                        id="email"
                        wire:model="email"
                        autocomplete="email"
                        class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-primary-600 focus:ring-1 focus:ring-primary-600 focus:outline-none"
                        placeholder="vous@etablissement.cd"
                    >
                    @error('email') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-slate-700">Message <span class="font-normal text-slate-400">(optionnel)</span></label>
                <textarea
                    id="message"
                    wire:model="message"
                    rows="4"
                    class="mt-1.5 block w-full rounded-lg border border-slate-300 px-3.5 py-2.5 text-sm text-slate-900 placeholder:text-slate-400 focus:border-primary-600 focus:ring-1 focus:ring-primary-600 focus:outline-none"
                    placeholder="Précisez vos besoins, vos services, votre nombre d’utilisateurs..."
                ></textarea>
                @error('message') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <button
                type="submit"
                wire:loading.attr="disabled"
                wire:target="submit"
                class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-primary-700 px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-primary-800 disabled:cursor-not-allowed disabled:opacity-70"
            >
                <span wire:loading.remove wire:target="submit">Demander une démo</span>
                <span wire:loading wire:target="submit">Envoi en cours...</span>
            </button>

            <p class="text-xs leading-relaxed text-slate-500">
                En soumettant ce formulaire, vous acceptez d’être recontacté par DRC Care Medical au sujet de votre demande.
            </p>
        </form>
    @endif
</div>
