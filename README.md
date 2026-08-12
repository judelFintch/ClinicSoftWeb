# ClinicSoft — Site vitrine

Site vitrine one-page de **ClinicSoft**, système d'information hospitalier édité par **DRC Care Medical**. Construit avec Laravel, Livewire et Tailwind CSS.

## Stack

- **Laravel 13** — backend et routage
- **Livewire 3** — composants interactifs Laravel
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

## Lien de démo

Tous les appels à la démo et la route `/demo` redirigent directement vers l'instance publique. L'URL peut être personnalisée dans `.env` :

```
CLINICSOFT_DEMO_URL=https://demo.clinicsoft.tech/
```

Par défaut, la démo est accessible à l’adresse [https://demo.clinicsoft.tech/](https://demo.clinicsoft.tech/). La section Modules distingue les fonctionnalités disponibles dans la démo de celles encore en développement.

## Structure des vues

```
resources/views/
├── layouts/app.blade.php        # squelette HTML, SEO, favicon
├── welcome.blade.php            # page d'accueil one-page (assemble les sections)
├── components/
│   ├── site/                    # une section de page par fichier (hero, modules, tarifs, ...)
│   └── ui/                      # composants réutilisables (bouton CTA, icônes, badge, titre de section)
```

## Assets de marque

Le favicon et l'image Open Graph (`public/favicon-*.png`, `public/apple-touch-icon.png`, `public/og-image.png`) sont générés localement (pas de dépendance externe) à partir de la palette de la marque.
