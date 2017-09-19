
<?php



/*
Brief

//affichechage de la liste des articles sous forme de liens
//affichichage du contenu d'un article en appuyant sur le lien.

Conception :

1.Informations sur la base : La base de données est : newsdb

2. les articles sont affichés au moyen d'un Modèle-vue-contrôleur 'MVC', avec :

              Post.php comme Modele : il contient les données à afficher
              view_xxx comme View : contient la logique pour l'affichage
              index.php comme Controller : il est le lien entre le Modele et le View

l'objet : Post

methode de la classe :
on a comme attributs :
  -titre de l'article :  nom
  -contenu
  -id
  -

*/

$link1 = 'bd_news1?id=1.php';

echo ' <b> Actualités en continu et en direct <br> </b>';
//connection à la base de donnée :
$mysqli=new mysqli('localhost', 'root','','newsdb');



// requete MySQL 1 : echo 'SELECT name FROM tablepost';


// requete MySQL 2 : echo 'SELECT content FROM tablepost WHERE id= ' .$id); avec $id=$_GET['id'];



//

class Post
{
function affichage ($id, $action)
{

  if ($action==1)
{
  $id=$_GET['id'];
  $name= ' echo . 'SELECT name FROM tablepost'';
  return $name ;
}

else
{
    $id=$_GET['id'];
    $content= 'echo . 'SELECT content FROM tablepost WHERE id=' . $id';
    return $name ;
}
}
}


$action = new Post;

var_dump($action);


echo $action->affichage(1,2);

/*
class Post

{
function affichage ($id, $name, $content)
{
   $id=$_GET['id'];
   $name= 'SELECT name FROM tablepost';
   $content= 'SELECT content FROM tablepost WHERE id= ' .$id)';

{
   ;
}

else
{
  ;
}
}
}






*/








?>
