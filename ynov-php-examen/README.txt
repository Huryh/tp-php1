- Quelles sont les 2 méthodes HTTP utilisables dans un formulaire en PHP ?

Pour traiter un formulaire ont utilise : $_GET et $_POST

- Quelle est la différence entre include, include_once, require et require_once ?

Avec require(), il y aura une erreur fatale, et le script s'arrêtera
Avec include(), il y aura un avertissement, mais le script continuera, s'il le peut...
Et pour ce qui concerne les versions avec "once", dans les deux cas, le fichier ne sera inclu qu'une seule fois.

- Quelle fonction devez-vous appeler pour utiliser les sessions dans votre application ?

session_start(); ceci va démarrer une nouvelle session.

- Qu'est-ce qu'un DSN et à quoi sert-il dans le cadre de PDO 

DSN (Data Source Name) permet la déclaration de la source de données qui sera accessible par l'intermédiaire de PDO.
Dans le cadre de PDO, il sert à connecter la base de donnée (mysql) a l'aide du dbname, du host, du nom d'utilisateur et du mot de passe.

- Quelle est la différence entre une requête préparée et une requête non préparée ?

Ici nous nous interessons à PDO prepare et PDO query, PDO prepare va permettre de préparer une requête à l'exécution et de retourner un objet.
Or PDO query va exécuter une requête SQL et retourner un jeu de résultats en tant qu'objet PDOStatement

- Quelle est la différence entre la méthode GET et la méthode POST ?

Pour faire simple, car il y a beaucoup de différences, on utilise GET pour obtenir des données, et POST pour transmettre des données, même s'il est parfaitement possible d'envoyer des données avec GET et d'en recevoir avec POST, 
mais chacune est aujourd'hui utilisé dans un domaine précis.


(ynov-php-exam
C4FGGsIjqrjUoDqD)