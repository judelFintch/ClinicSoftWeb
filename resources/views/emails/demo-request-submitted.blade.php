<x-mail::message>
# Nouvelle demande de démo

Une demande de démo ClinicSoft vient d’être soumise depuis le site.

<x-mail::table>
| Champ | Valeur |
| :---- | :----- |
| Nom | {{ $demoRequest->name }} |
| Établissement | {{ $demoRequest->establishment }} |
| Téléphone | {{ $demoRequest->phone }} |
| Email | {{ $demoRequest->email }} |
</x-mail::table>

@if ($demoRequest->message)
**Message**

{{ $demoRequest->message }}
@endif

Reçue le {{ $demoRequest->created_at->format('d/m/Y à H:i') }}.

Cordialement,<br>
{{ config('app.name') }}
</x-mail::message>
