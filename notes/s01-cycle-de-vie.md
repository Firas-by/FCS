# S01 — Cycle de vie d'une requête `/heure`

## Chemin d'une requête GET `/heure`

Fichiers traversés, dans l'ordre :

1. **`public/index.php`** — point d'entrée HTTP. Charge l'autoloader Composer (`vendor/autoload.php`), crée l'application, capture la requête (`Request::capture()`), puis appelle `handleRequest()`.
2. **`bootstrap/app.php`** — configure l'application Laravel 13 : routes web, commandes, middleware, exceptions.
3. **`config/app.php`** — chargé au bootstrap (`LoadConfiguration`). C'est ici que `timezone` vaut `Africa/Tunis`, donc `now()` sera en heure de Tunis.
4. **`vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php`** — le kernel HTTP reçoit la requête, exécute le groupe de middleware `web`, puis dispatche vers le routeur.
5. **`routes/web.php`** — le routeur trouve `Route::get('/heure', ...)`. La closure s'exécute : elle calcule `now()->format('H:i')` et `now()->format('d/m/Y')`, puis appelle `view('heure', ...)`.
6. **`resources/views/heure.blade.php`** — Blade rend le HTML (heure `H:i`, date `d/m/Y`).
7. **`storage/framework/views/`** — Laravel compile la vue Blade en PHP, puis envoie la réponse HTTP au navigateur.

En résumé : **front controller → bootstrap → config → kernel / middleware → route → vue → réponse**.

## D3 — Page d'erreur (vue manquante)

Après renommage temporaire de `bienvenue.blade.php` en `bienvenu.blade.php`, un GET `/bienvenue` affiche une page d'erreur dont le **titre** est :

**`InvalidArgumentException`**

Message associé : `View [bienvenue] not found.`

La vue a ensuite été restaurée.
