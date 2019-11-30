<!DOCTYPE html>
<html>
  <head>
    <title>Lanco Site</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>
    <header>
      <h1>Projet numero 2 est cours en construction</h1>
    </header>
    <nav>
      <ul>
        <li><a href="/index.php">Accueil</a></li>
        <li><a href="/ProjetPeptide/PeptideCalculator.html">Peptide calculator</a></li>
        <li><a href="/ProjectNumber2/ProjectTest2.php">Projet numero 2</li>
          <li><a href="/ProjectNumber3/ProjectTest3.php">Projet numero 3</a></li>
          <li><a href="#">Projet numero 4</a></li>
        </ul>
      </nav>

      <section>
<p>Enter your peptide sequence in FASTA format</p>
<form action="record.php" method="get">
<select name="Nter">
  <option value="NH2">NH2</option>
  <option value="Ac">Ac</option>
  <option value="H2T">H2T</option>
</select>

<input type="text" name="sequence">
<select name="Cter">
  <option value="OH">OH</option>
  <option value="NH2">NH2</option>
  <option value="H2T">H2T</option>
</select><br>
<input type="submit">
</form>
      </section>

      <footer>
        <p><a href="http://www.lanco.ovh">http://www.lanco.ovh</a></p>
      </footer>
  </body>
  <!--Ne pas ecrire de code html sous cette ligne-->
<style>
  header {
    width:60%;
    text-align: center;
    background-color: rgb(130, 130, 130);
    color:#fff;
  }
  nav {
    float:left;
    line-height: 30px;
    color:blue;
  }
  section {
    font-family:monospace;
    box-sizing: border-box;
    padding:10px;
    font-size: 1.2em;
    line-height:30px;
    max-width:45%;
    background-color:rgb(200, 200, 200);
    border-left: solid rgb(130,130,130) 1px;
    margin-left:15% ;
    height: 12cm;
  }
  footer {
    width: 60%;
    text-align: center;
    background-color: rgb(130,130,130);
    color:#fff;
  }
</style>
</html>
