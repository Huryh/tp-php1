- Quelles sont les 2 m�thodes HTTP utilisables dans un formulaire en PHP ?

Pour traiter un formulaire ont utilise : $_GET et $_POST

- Quelle est la diff�rence entre include, include_once, require et require_once ?

Avec require(), il y aura une erreur fatale, et le script s'arr�tera
Avec include(), il y aura un avertissement, mais le script continuera, s'il le peut...
Et pour ce qui concerne les versions avec "once", dans les deux cas, le fichier ne sera inclu qu'une seule fois.

- Quelle fonction devez-vous appeler pour utiliser les sessions dans votre application ?

session_start(); ceci va d�marrer une nouvelle session.

- Qu'est-ce qu'un DSN et � quoi sert-il dans le cadre de PDO 

DSN (Data Source Name) permet la d�claration de la source de donn�es qui sera accessible par l'interm�diaire de PDO.
Dans le cadre de PDO, il sert � connecter la base de donn�e (mysql) a l'aide du dbname, du host, du nom d'utilisateur et du mot de passe.

- Quelle est la diff�rence entre une requ�te pr�par�e et une requ�te non pr�par�e ?

Ici nous nous interessons � PDO prepare et PDO query, PDO prepare va permettre de pr�parer une requ�te � l'ex�cution et de retourner un objet.
Or PDO query va ex�cuter une requ�te SQL et retourner un jeu de r�sultats en tant qu'objet PDOStatement

- Quelle est la diff�rence entre la m�thode GET et la m�thode POST ?

Pour faire simple, car il y a beaucoup de diff�rences, on utilise GET pour obtenir des donn�es, et POST pour transmettre des donn�es, m�me s'il est parfaitement possible d'envoyer des donn�es avec GET et d'en recevoir avec POST, 
mais chacune est aujourd'hui utilis� dans un domaine pr�cis.


(ynov-php-exam
C4FGGsIjqrjUoDqD)