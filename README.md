# ClinicSoft — Site vitrine

Site vitrine one-page de **ClinicSoft**, système d'information hospitalier édité par **DRC Care Medical**. Construit avec Laravel, Livewire et Tailwind CSS.

## Stack

- **Laravel 13** — backend et routage
- **Livewire 3** — composant interactif (formulaire de demande de démo)
- **Tailwind CSS v4** (via le plugin Vite officiel) — mise en forme
- **SQLite** — stockage local des demandes de démo

## Prérequis

- PHP ≥ 8.3 avec l'extension `sqlite3`
- Composer
- Node.js ≥ 20 et npm

## Installation

```bash
# 1. Dépendances PHP
composer install

# 2. Variables d'environnement
cp .env.example .env
php artisan key:generate

# 3. Base de données locale (SQLite)
touch database/database.sqlite
php artisan migrate

# 4. Dépendances front-end
npm install
```

> Astuce : `composer setup` enchaîne automatiquement les étapes 1 à 4 (installation, `.env`, clé d'application, base SQLite, migrations, build des assets).

## Lancer le projet en local

Deux terminaux sont nécessaires pendant le développement (le premier sert l'application PHP, le second compile et recharge les assets Tailwind/JS à chaud) :

```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

Le site est ensuite accessible sur **http://localhost:8000**.

Pour un build de production des assets (sans serveur de développement Vite) :

```bash
npm run build
```

### Raccourci

`composer run dev` (ou `php artisan dev`) démarre en une seule commande le serveur PHP, le worker de file d'attente et Vite en parallèle.

## Formulaire « Demander une démo »

Le composant Livewire `App\Livewire\DemoRequestForm` (vue : `resources/views/livewire/demo-request-form.blade.php`) :

- valide les champs (nom, établissement, téléphone, email, message optionnel) ;
- enregistre chaque demande dans la table `demo_requests` (toujours, quelle que soit la configuration email) ;
- tente d'envoyer un email de notification à l'adresse définie par `CLINICSOFT_DEMO_EMAIL` dans `.env` (par défaut `info@clinicsoft.tech`) via `Mail::`. Si aucun serveur SMTP n'est configuré, `MAIL_MAILER=log` (valeur par défaut du projet) écrit simplement le contenu de l'email dans `storage/logs/laravel.log`, sans faire échouer la soumission.

Pour activer un envoi d'email réel, renseigner dans `.env` les variables `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD` d'un fournisseur SMTP (Mailgun, SendGrid, Gmail SMTP, etc.).

## Lien de démo

Tant qu'aucune instance de démonstration réelle n'est en ligne, les boutons « Voir la démo » / « Demander une démo » renvoient vers la section `#demo` de la page, qui contient le formulaire ci-dessus. La route technique `/demo` affiche une page « Démo bientôt disponible ».

Dès qu'une démo réelle (vidéo ou instance ClinicSoft) sera disponible, il suffira de renseigner son URL dans `.env` :

```
CLINICSOFT_DEMO_URL=https://demo.clinicsoft.tech/
```

La démo est accessible à l’adresse [https://demo.clinicsoft.tech/](https://demo.clinicsoft.tech/). Tous les boutons de démo et la route `/demo` pointent automatiquement vers cette URL (nouvel onglet) — voir `config/clinicsoft.php`.

## Structure des vues

```
resources/views/
├── layouts/app.blade.php        # squelette HTML, SEO, favicon
├── welcome.blade.php            # page d'accueil one-page (assemble les sections)
├── demo-placeholder.blade.php   # page technique /demo
├── components/
│   ├── site/                    # une section de page par fichier (hero, modules, tarifs, ...)
│   └── ui/                      # composants réutilisables (bouton CTA, icônes, badge, titre de section)
└── livewire/
    └── demo-request-form.blade.php
```

## Assets de marque

Le favicon et l'image Open Graph (`public/favicon-*.png`, `public/apple-touch-icon.png`, `public/og-image.png`) sont générés localement (pas de dépendance externe) à partir de la palette de la marque.
