<!DOCTYPE HTML>
<html>
<header>
  <h1>Peptide converter / MW & GI calculator.</h1>
</header>
<body>
<form action="outPut.php" method="get">
  <div id="form">
    <p id="p1"> Enter the peptide sequence in FASTA format (eg: PEPTIDE).</p>
    <select name="Nter">
      <option>NH2</option>
      <option>Ac</option>
      <option>H2T</option>
    </select>
    <input type = "text" name="l1seq">
    <select name="Cter">
      <option>OH</option>
      <option>NH2</option>
      <option>H2T</option>
    </select>
<input type="submit">
</form>
</body>
<footer>
  <h2><a href="http://www.lanco.ovh/index.php">
    http://www.lanco.ovh</a></h2>
</footer>
<style>
#p1{
  font-family:sans-serif;
  font-size:0.8em;
}
h1 {
  text-align: center;
  background-color:rgb(200,130,50);
  width:80%;
  color:#FFF;
  padding-top: 0.5cm;
  padding-bottom: 0.5cm;
}
body {
  margin-left: 1cm;
  width: 60%;
}
footer {
  font-size: 0.5em;
  padding-top: 0.2cm;
  padding-bottom: 0.2cm;
  margin-top: 2cm;
  background-color:rgb(200,130,50);
  width: 80%;
  text-align: center;
  color:#fff;
}
</style>
</html>
