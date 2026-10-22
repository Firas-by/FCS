# Session 05 - Défi : articles récents sur l'accueil

latestPosts contient au plus 3 articles : oui
Seuls les articles publiés sont transmis à la vue : oui
home.blade.php utilise x-post-card et @forelse : oui
Le nouveau test passe et php artisan test est vert : oui

Pourquoi get() et pas paginate(3) sur la page d'accueil ?
Sur la page d'accueil, l'objectif est d'afficher un aperçu statique et compact des derniers articles (au plus 3 éléments) sans pagination ni contrôles de navigation vers des pages suivantes. La méthode get() exécute la requête avec la clause LIMIT (take(3)) et renvoie directement la collection. À l'inverse, paginate() effectue des requêtes supplémentaires (dont un COUNT) et est conçue pour des pages de listing complètes nécessitant une navigation page par page (comme /posts).
