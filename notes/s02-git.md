# Session 02 - Git et GitHub

Réponses rédigées avec mes propres mots, puis comparées au corrigé de la page.

## 1. Index et commit
Réponse :
- `git add` permet de faire passer un fichier ou des modifications du répertoire de travail (working directory) vers l'index (staging area).
- `git commit` enregistre l'état préparé dans l'index sous forme d'un nouveau commit dans le dépôt local.
- `git push` envoie ensuite ces commits vers le dépôt distant (GitHub / origin).

## 2. Branche et tag
Réponse :
- Une **branche** (ex. `main`) est une étiquette mobile qui avance automatiquement à chaque nouveau commit pour désigner la pointe du travail en cours.
- Un **tag** (ex. `lab-01`) est une étiquette fixe et permanente associée à un commit précis. Il ne bouge pas lorsque de nouveaux commits sont ajoutés, permettant ainsi de marquer un jalon immuable (ex. la fin d'une session de TP pour évaluation).

## 3. Le fichier .env
Réponse :
- `.env` ne doit jamais être poussé sur GitHub car il contient des paramètres spécifiques à la machine locale, la clé de chiffrement de l'application (`APP_KEY`), et potentiellement des secrets ou identifiants sensibles en production.
- Pour obtenir son propre `.env`, un autre développeur copie le modèle `.env.example` (`cp .env.example .env` ou `copy .env.example .env`), puis génère une nouvelle clé applicative via `php artisan key:generate`.

## 4. Le dossier vendor/
Réponse :
- `vendor/` n'est pas versionné car il s'agit d'un répertoire très volumineux composé de milliers de fichiers de dépendances externes entièrement générés.
- Il peut être reconstruit à l'identique à tout moment en exécutant `composer install`, qui lit le fichier `composer.lock` pour installer les versions exactes de chaque paquet.

## 5. Git Credential Manager
Réponse :
- Git Credential Manager (GCM) enregistre le jeton d'authentification sécurisé dans le **Gestionnaire d'identification Windows** (Windows Credential Manager, entrée `git:https://github.com`).
- Sur un poste partagé de l'université ou du laboratoire, il faut obligatoirement supprimer ce jeton en fin de séance pour empêcher la personne suivante d'effectuer des push en notre nom. Sur un ordinateur personnel, on peut le conserver pour ne pas avoir à se réauthentifier à chaque fois.

## 6. Historique depuis lab-01

Nombre de commits depuis lab-01 : **4**

```
b4362e3 Ajouter le README du projet
165f405 Ajouter la capture de la page a-propos
2e593e6 Ajouter la page a-propos
0fbc088 Ajouter les notes Git de la session 02
```

Fichiers modifiés depuis lab-01 :

```
 README.md                          |  91 +++++++++++++++++++++++--------------
 notes/s02-git.md                   |  29 ++++++++++++
 resources/views/a-propos.blade.php |  23 ++++++++++
 routes/web.php                     |   7 +++
 screenshots/s02-a-propos.png       | Bin 0 -> 18411 bytes
 5 files changed, 116 insertions(+), 34 deletions(-)
```

Ce que git tag -n affiche pour lab-01 :

```
lab-01          lab-01
```

Le tag `lab-01` porte le même texte que son message de commit (`lab-01`). Il est fixé sur le commit de fin de la session 01 et ne bougera jamais, même si de nouveaux commits sont ajoutés sur `main`.
