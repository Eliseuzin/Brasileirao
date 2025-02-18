<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brasileirão</title>
  <link rel="stylesheet" href="style02.css">
</head>
<header>Brasileirão</header>
<nav>
  <a href="#">Business</a>
  <a href="#">Science and Technology</a>
  <a href="#">Entertainment</a>
  <a href="#">Sports</a>
  <a href="#">Health</a>
</nav>

<body>
  <main>
    <?php 
  //variaveis do time 2000
    $Pts2000=9;
    $Pj2000=3;
    $Vit2000=3;
    $E2000=0;
    $Der2000=1;
    $GM2000=16; 
    $GS2000=14;
    $SG2000=$GM2000-$GS2000;

      //variaveis do time 1990
      $Pts1990=9;
      $Pj1990=3;
      $Vit1990=3;
      $E1990=0;
      $Der1990=1;
      $GM1990=27; 
      $GS1990=12;
      $SG1990=$GM1990-$GS1990;

    //variaveis do time Coroas
    $Ptscoroas=0;
    $Pjcoroas=3;
    $Vitcoroas=0;
    $Ecoroas=0;
    $Dercoroas=4;
    $GMcoroas=14; 
    $GScoroas=32;
    $SGcoroas=$GMcoroas-$GScoroas;




    //Best players
    $first="Gustavo";
    $second="Kleitinho";
    $third="João";
    ?>
    <h1>Classificação</h1>
    <div id="resp">
      <table>
        <tr>
          <td>Clubes</td>
          <td>Pts</td>
          <td>Pj</td>
          <td>Vit</td>
          <td>E</td>
          <td>Der</td>
          <td>GM</td>
          <td>GS</td>
          <td>SG</td>
        </tr>
        <tr>
          <td>1990</td>
          <td><?=$Pts1990?></td>
          <!--Pts-->
          <td><?=$Pj1990?></td>
          <!--Pj-->
          <td><?=$Vit1990?></td>
          <!--Vit-->
          <td><?=$E1990?></td>
          <!--E-->
          <td><?=$Der1990?></td>
          <!--Der-->
          <td><?=$GM1990?></td>
          <!--GM-->
          <td><?=$GS1990?></td>
          <!--GS-->
          <td><?=$SG1990?></td>
          <!--SG-->
        </tr>
        <tr>
          <td>2000</td>
          <td><?=$Pts2000?></td>
          <!--Pts-->
          <td><?=$Pj2000?></td>
          <!--Pj-->
          <td><?=$Vit2000?></td>
          <!--Vit-->
          <td><?=$E2000?></td>
          <!--E-->
          <td><?=$Der2000?></td>
          <!--Der-->
          <td><?=$GM2000?></td>
          <!--GM-->
          <td><?=$GS2000?></td>
          <!--GS-->
          <td><?=$SG2000?></td>
          <!--SG-->
        </tr>
        <tr>
          <td>Coroas</td>
          <td><?=$Ptscoroas?></td>
          <!--Pts-->
          <td><?=$Pjcoroas?></td>
          <!--Pj-->
          <td><?=$Vitcoroas?></td>
          <!--Vit-->
          <td><?=$Ecoroas?></td>
          <!--E-->
          <td><?=$Dercoroas?></td>
          <!--Der-->
          <td><?=$GMcoroas?></td>
          <!--GM-->
          <td><?=$GScoroas?></td>
          <!--GS-->
          <td><?=$SGcoroas?></td>
          <!--SG-->
        </tr>
      </table>
    </div>
    <h3>Melhor(es) jogador (es) da partida </h3>
    <ul>
      <li><?=$first?></li>
      <li><?=$second?></li>
      <li><?=$third?></li>
    </ul>
    <!-- <div>wef</div> -->
  </main>
  <footer>Seguir o lider</footer>
</body>

</html>