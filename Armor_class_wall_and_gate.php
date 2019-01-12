<!DOCTYPE html>
<html lang="zh-tw">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Aoetw</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <style>
      body {      padding-top: 0px;      font-family: "微軟正黑體";      background-color: #f5f5f5;      font-size: 18px;    }
    </style>
  </head>
  <body>
    <?php include( "head.php"); ?>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row" style=" margin-top: 50px;">
        <div class="col-md-12">
           <h1>城牆和城門</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-12">
          <div class="spw"><em>這篇文章是將有關於城牆和城門的裝甲。</em>
          </div>
        </div>
        <div class="col-md-12">
          <div class="n1">
            <p>城牆和城門裝甲是一個防禦裝甲類別，所有在這個系列的建築都會被對該裝甲的有攻擊加成的兵種或科技有額外的傷害。</p>
          </div>
           <h3>城牆和城門單位</h3> 
          <div class="hrn1"></div>
          <div class="n1">下列的單位都是城牆和城門單位
            <ul>
              <li>
                <img class="gg" width="25px" src="img/Palisadewallicon.png" alt=""><a href="Palisade_Wall.php">木牆</a>
              </li>
              <li>
                <img class="gg" width="25px" src="img/Stonewallicon.png" alt=""><a href="Stone_Wall.php">石牆</a>
              </li>
              <li>
                <img class="gg" width="25px" src="img/Stonewallicon.png" alt=""><a href="Fortified_Wall.php">垛牆</a>
              </li>
              <li>
                <img class="gg" width="25px" src="img/Gateicon.png" alt=""><a href="Gateicon_Gate.php">城門</a>
              </li>
            </ul>
          </div>
           <h3>剋城門和城牆單位的單位與建築</h3> 
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對城門和城牆單位的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div style="margin:12px 0px;"><strong>+900攻擊</strong>
              </div>
              <ul>
                <li>
                  <img class="gg" src="img/PetardIcon.jpg" alt=""><a href="Petard.php">爆炸桶</a>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+10攻擊</strong>
              </div>
              <ul>
                <li>
                  <img class="gg" src="img/TarkanIcon.jpg" alt=""><a href="Tarkan.php">精銳韃靼騎兵</a>(<a href="Huns.php">匈奴</a>限定)</li>
              </ul>
              <div style="margin:12px 0px;"><strong>+8攻擊</strong>
              </div>
              <ul>
                <li>
                  <img class="gg" src="img/TarkanIcon.jpg" alt=""><a href="Tarkan.php">韃靼騎兵</a>(<a href="Huns.php">匈奴</a>限定)</li>
              </ul>
            </div>
            <!-- /container -->
            <?php include( "alllarmor.php"); ?>
            <?php include( "foot.php"); ?>
            <!-- Bootstrap core JavaScript==================================================-
            ->            <!-- Placed at the end of the document so the pages load faster -->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>