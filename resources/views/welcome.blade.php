@extends('layouts.app')

@section('content')
    <x-site.header />

    <main id="contenu">
        <x-site.hero />
        <x-site.why />
        <x-site.benefits />
        <x-site.modules />
        <x-site.how-it-works />
        <x-site.differentiators />
        <x-site.pricing />
        <x-site.demo />
        <x-site.cta-contact />
    </main>

    <x-site.footer />
@endsection
