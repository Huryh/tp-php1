<?php
use App\Service\UserService;
require_once '../public/new.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta description="">
    <title>Voiture</title>
    <style>
body{ 
    margin: 0;
    background-image: url(auto.jpg);
    background-size: 100% auto;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}
header{ 
    height: 10vw; line-height: 10vw;
    position: fixed; z-index:1;
    background:transparent;
}
a:hover{ 
    text-decoration: underline; 
}    
.menu{
    display: flex;
    justify-content: space-between;
  }
.liens-menu{
    display: flex;
    justify-content: space-around;
    background-color: rgba(51,51,51,0.15);
    width: 50%;
    padding: 2vw;
    border-radius: 10px  10px 20px 20px;
}
.liens-menu a{
    color: white;
    font-family: 'Segoe UI';
    font-size: 1.2em;
    text-decoration: none;
}
.logo-menu{
    background-color: rgba(51,51,51,0.15);
    border-radius: 0px  0px 20px 0px;
}
.arrondie-d{
    border-radius: 10px  0px 0px 20px;
    width: 5vw;
    height: 5.5vw;
}
.arrondie-g{
    border-radius: 0px  10px 20px 0px;
    width: 5vw;
    height: 5.5vw;
}
#user-icon{
    margin-left: 30%;
    margin-top: 30%;
    width: 45%;
}
#logo-accueil{
    padding: 1.3vw;
    width: 45%;
}
.search-bar{
    display: flex;
    justify-content: center;
    margin-top: 15%;
}
#rechercher{
    color: white;
    font-family: 'Segoe UI';
}
#search{
    font-family: 'Segoe UI';
    width: 40vw;
    height: 1.5vw;
    border-radius: 5px  5px 5px 5px;
}
    </style>
  </head>
<body class="index">
  <div class="menu">
    <div class="logo-menu arrondie-g" >
      <a href="index.html"><img src="directions-arrows2.png" alt="logo" id="logo-accueil"></a>
    </div>
    <nav class="liens-menu">
      <a href="page2.html">Accueil</a>
      <a href="page3.html">Enregistrement</a>
      <a href="page4.html">Administration</a>
      <a href="page5.html">Modification</a>
    </nav>
      
    <div class="logo-menu arrondie-d">
        <img src="user.png" alt="logo user" id="user-icon">
    </div>
  </div>
  <div class="search-bar">
	<form id="form-search" class="form-search" method="GET" action="/app/Search/search.php">
    	<div>
  			<label id="rechercher">Rechercher :</label>
            <input id="search" name="q" type="text" placeholder="modèles, années ..." />
            <button id="button" type="button" class="btn btn-light">GO<a  href="#"></a></button>
		</div>
	</form>
</div>
</body>
</html>







