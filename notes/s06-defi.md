# Session 06 - Défi : publier et dépublier

La route posts.publication apparaît dans route:list avec le verbe PATCH : oui
Le bouton affiche « Publier » sur un brouillon et « Dépublier » sur un article publié : oui
published_at est rempli à la publication et vidé à la dépublication : oui
Le nouveau test passe et php artisan test est vert : oui

Pourquoi PATCH et pas PUT ni GET pour ce bouton ?
GET ne doit jamais modifier l'état des données. PUT est destiné à remplacer l'intégralité de la ressource. PATCH est conçu pour modifier partiellement une ressource en ciblant un changement d'état précis, ici l'état de publication (is_published et published_at).
