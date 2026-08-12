@extends('layouts.app')

@section('title', 'Démo bientôt disponible | ClinicSoft')

@section('content')
    <main class="flex min-h-screen items-center justify-center bg-white px-6">
        <div class="max-w-md text-center">
            <span class="mx-auto flex size-12 items-center justify-center rounded-full bg-gradient-to-br from-primary-700 to-accent-500 text-white">
                <x-ui.icon name="cross" class="size-6" />
            </span>
            <h1 class="mt-6 text-2xl font-semibold tracking-tight text-slate-900">Démo bientôt disponible</h1>
            <p class="mt-3 text-base leading-relaxed text-slate-600">
                Cette instance de démonstration n’est pas encore en ligne. En attendant, demandez une démonstration personnalisée de ClinicSoft avec l’équipe DRC Care Medical.
            </p>
            <div class="mt-8 flex flex-col items-center gap-3 sm:flex-row sm:justify-center">
                <a href="https://demo.clinicsoft.tech/" class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-primary-700 to-accent-600 px-5 py-3 text-sm font-medium text-white transition-colors hover:from-primary-800 hover:to-accent-700">
                    Accéder à la démo
                </a>
                <a href="{{ url('/') }}" class="text-sm font-medium text-slate-600 hover:text-primary-800">Retour à l’accueil</a>
            </div>
        </div>
    </main>
@endsection
