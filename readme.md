Ajout de l'Administration:

- Création des controllers home et app dans la partie Admin
- Création de la page home + affichage des infos général -> Controller / Admin / HomeController -> index
- Maj Core / Table -> Ajout méthode count()
- Maj App / Table / CommentTable -> Ajout méthode signaled -> récupére les commentaires signalé
- Maj App / Table / PostTable -> Ajout méthode allPrivate -> récupére seulement les articles non publié
- Création template admin + vue admin / home / index
- Maj App / Entity / PostEntity -> ajout méthode getStatus -> affiche le status des posts (Public / Private)
- Maj app.css -> ajout du style de l'admin + mise en place d'un loader
- Maj Public / index -> prise en charge de la partie admin

Ajout de l'authentification:

- Création Core / Auth / DbAuth -> loggin, logged, logout -> gestion de la connexion
- Création App / Table / UserTable
- Création template login + vue users / login
- Maj template default -> ajout des liens connections, déconnexion, dashboard
