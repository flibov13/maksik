<!-- http://37.8.214.76/~jacquar/_materialy/05_mySQL/05_filmy/ -->

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wyporzyczalnia filmów</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    	$(function(){

    	});//jq END

    </script>

  </head>
  <body>	
    <!-- navigacjia -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Wypożyczalnia filmów online</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php" class="glyphicon glyphicon-home"> Home</a></li>
            <li><a href="wyp.php" class="glyphicon glyphicon-tag"> Wypożyczenia</a></li>
            <li><a href="film.php" class="glyphicon glyphicon-film"> Filmy</a></li>
            <li><a href="stat.php" class="glyphicon glyphicon-signal"> Statystyki</a></li>
            <li class="dropdown">
              <a href="admin.php" class="dropdown-toggle glyphicon glyphicon-lock" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin.php#kli">Lista klientów</a></li>
                <li><a href="admin.php#rez">Lista reżyserów</a></li>
                <li><a href="admin.php#gat">Lista gatunków</a></li>
                <li><a href="admin.php#usr">Lista użytkowników</a></li>
                <li><a href="admin.php#inn">Inne</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- navigacjia END -->

    <!-- header -->
	<div class="container page-header">
	  <h1>Wypożyczalnia filmów online <small>Naj-baza filmów na maksiku</small></h1>
	</div>
	<!-- header END -->

	<!-- gluwna czesc  -->
    <!--  klienci -->
    <a name="kli"></a>

    <!--  rezyserowie -->
    <a name="rez"></a>

    <!--  gatunki -->
    <a name="gat"></a>

    <!--  uzytkownicy -->
    <a name="usr"></a>

    <!--  Inne  -->
    <a name="inn"></a>

	<!-- gluwana czesc END -->



  </body>
</html>