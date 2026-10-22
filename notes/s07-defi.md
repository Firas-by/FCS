# Session 07 - Défi : articles de la même catégorie

La section « Dans la même catégorie » apparaît sous un article publié qui a une catégorie : oui
L'article affiché n'apparaît pas dans sa propre section : oui
Un brouillon de la même catégorie n'apparaît pas : oui
La page s'ouvre sans LazyLoadingViolationException : oui
Le nouveau test passe et php artisan test est vert : oui

Combien de requêtes SQL charge la section, et pourquoi pas une par carte ?
La section charge 4 requêtes : une requête pour récupérer les 3 articles associés (Post), puis 3 requêtes supplémentaires pour le chargement anticipé (eager loading avec with('user', 'category', 'tags')) afin de récupérer les auteurs (users), les catégories (categories) et les tags (post_tag et tags) de ces 3 articles en une seule fois via des clauses WHERE IN. Il n'y a donc pas de requête exécutée par carte (évitement du problème N+1).
