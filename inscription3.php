<title>SuperVoyage</title>
        <!--header-->
        <?php 
        include("pages\header+footer\header.php");
        if (isset($_SESSION['pseudo'])) {
          header('Location: index.php');
        }
        else {
        ?>
        <br>
          <br>
            <br>
              <br>
        <!--formulaire-->
        <?php 
        include("pages\Formulaire\Newacc3.html");
        ?>
          <br>
        <!--footer-->
        <?php 
        include("pages\header+footer\Footer.html");
        }?>
