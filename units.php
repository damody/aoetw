<!DOCTYPE html>
<html lang="zh-tw">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Aoetw</title>
    <style>
      body {            padding-top: 0px;            font-family: "微軟正黑體";            background-color: #f5f5f5;            font-size: 18px;        }        .unit h3{            text-align: center;        }        .unit a{           color: #fff;        }        .unititle{          text-align: center;          padding: 10px;        }        .unitcontent{          padding: 10px;        }
    </style>
  </head>
  
  <body>
    <?php include( "head.php"); ?>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container" style="margin-top:50px">
      <!-- Example row of columns -->
       <h1>單位</h1> 
       <h3></h3> 
      <div class="row">
        <div class="col-md-12">
          <p>若是依照類型分類請詳見：</p>
          <ul>
            <li> <a href="Infantry_Units.php">步兵單位</a>
            </li>
            <li> <a href="Archer_Units.php">遠距離單位</a>
            </li>
            <li> <a href="Cavalry_Units.php">騎兵單位</a>
            </li>
            <li> <a href="Naval_Vessels.php">海軍單位</a>
            </li>
            <li> <a href="Siege_Weapons.php">攻城器單位</a>
            </li>
            <li> <a href="Unique_Unit.php">特殊單位</a>
            </li>
            <li> <a href="Gunpowder_Unit.php">火藥單位</a>
            </li>
          </ul>
        </div>
        <div class="col-md-12" style="">英雄單位請見此：<a href="heros.php">英雄列表</a>
        </div>
        <div class="col-md-12" style="">野生動物請見此：<a href="ann.php">動物列表</a>
        </div>
        <div class="col-md-12" style="">地圖編輯器類請見此：<a href="edmap.php">地圖編輯器單位列表</a>
        </div>
        <div class="col-md-12" style="margin-top: 10px;">
          <h3>若是依照建築分，則有9種可以訓練單位的建築</h3>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Town_Center.php">城鎮中心</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Towncentericon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/VillagerMaleIcon.jpg" alt=""> <a href="Villager.php">村民</a> 
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Barracks.php">軍營</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Barracks-logo.jpg" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/MilitiaIcon.jpg" alt=""> <a href="Militia.php">民兵</a>→
                  <img class="gg" src="img/ManAtArmsIcon.jpg"
                  width="22" alt=""> <a href="Man-at-Arms.php">裝甲步兵</a>→
                  <img class="gg" src="img/LongswordsManIcon.jpg"
                  alt=""> <a href="Long_Swordsman.php">長劍兵</a>→
                  <img class="gg" src="img/2HandedswordsmanIcon.jpg"
                  alt=""> <a href="Two-Handed_Swordsman.php">雙手劍兵</a>→
                  <img class="gg" src="img/ChampionIcon.jpg"
                  alt=""> <a href="Champion.php">劍兵勇士</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/SpearmanIcon.jpg" alt=""> <a href="Spearman.php">長槍兵</a>→
                  <img class="gg" src="img/PikemanIcon.jpg"
                  alt=""> <a href="Pikeman.php">重裝長槍兵</a>→
                  <img class="gg" src="img/HalberdierIcon.jpg"
                  alt=""> <a href="Halberdier.php">戟兵</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/EagleScoutIcon.jpg" alt=""> <a href="Eagle_Scout.php">鷹斥侯</a>→
                  <img class="gg" src="img/EagleWarriorIcon.jpg"
                  alt=""> <a href="Eagle_Warrior.php">鷹勇士</a>→
                  <img class="gg" src="img/EliteEagleWarriorIcon.jpg"
                  alt=""> <a href="Elite_Eagle_Warrior.php">精銳鷹勇士</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/CondottieroNewIcon.jpg" alt=""> <a href="Condottiero.php">傭兵</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/HuskarlIcon.jpg" alt=""> <a href="Huskarl.php">哥德衛隊</a> (<a href="Goths.php">哥德</a>研發<a href="Anarchy.php">無政府狀態</a>後)</div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Archery_Range.php">射箭場</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Acheryrangeicon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/ArcherIcon.jpg" alt=""> <a href="Archer.php">弓兵</a>→
                  <img class="gg" src="img/CrossbowmanIcon.jpg"
                  alt=""> <a href="Crossbowman.php">弩兵</a>→
                  <img class="gg" src="img/ArbalestIcon.jpg"
                  alt=""> <a href="Arbalest.php">強弩兵</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/SkirmisherIcon.jpg" alt=""> <a href="Skirmisher.php">戰矛兵</a>→
                  <img class="gg" src="img/EliteSkirmisherIcon.jpg"
                  alt=""> <a href="Elite_Skirmisher.php">精銳戰矛兵</a>→
                  <img class="gg" src="img/Imperialskirmishericon.png"
                  alt=""> <a href="Imperial_Skirmisher.php">帝王戰矛兵</a> (<a href="Vietnamese.php">越南</a>及其同盟限定)</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/CavalryArcherIcon.jpg" alt=""> <a href="Cavalry_Archer.php">馬弓騎兵</a>→
                  <img class="gg" src="img/HeavyCavArcherIcon.jpg"
                  alt=""> <a href="Heavy_Cavalry_Archer.php">重裝馬弓騎兵</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/HandCannoneerIcon.jpg" alt=""> <a href="Hand_Cannoneer.php">火槍兵</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/Slingericon.png" alt=""> <a href="Slinger.php">投石手</a> (<a href="">印加</a>限定)</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/GenitourIcon.jpg" alt=""> <a href="Genitour.php">標槍騎兵</a>→
                  <img class="gg" src="img/GenitourIcon.jpg"
                  alt=""> <a href="Genitour.php">精銳標槍騎兵</a> (<a href="Berbers.php">柏柏</a>及其同盟限定)</div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Stable.php">馬廄</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Stableicon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/ScoutCavalryIcon.jpg" alt=""> <a href="Scout_Cavalry.php">斥侯</a>→
                  <img class="gg" src="img/LightCavalryIcon.jpg"
                  alt=""> <a href="Light_Cavalry.php">輕騎兵</a>→
                  <img class="gg" src="img/HussarIcon.jpg"
                  alt=""> <a href="Hussar.php">匈牙利輕騎兵</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/KnightIcon.jpg" alt=""> <a href="Knight.php">騎士</a>→
                  <img class="gg" src="img/CavalierIcon.jpg"
                  alt=""> <a href="Cavalier.php">騎兵</a>→
                  <img class="gg" src="img/PaladinIcon.jpg"
                  alt=""> <a href="Paladin.php">遊俠</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/CamelIcon.jpg" alt=""> <a href="Camel.php">駱駝騎兵</a>→
                  <img class="gg" src="img/HeavyCamelIcon.jpg"
                  alt=""> <a href="Heavy_Camel.php">重裝駱駝騎兵</a>→
                  <img class="gg" src="img/ImperialCamelIcon.jpg"
                  alt=""> <a href="Imperial_Camel.php">帝王駱駝騎兵</a>(<a href="Indians.php">印度</a>限定)</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/Battleelephanticon.png" alt=""> <a href="Battle_Elephant.php">矛象伕</a>→
                  <img class="gg" src="img/Elitebattleelephanticon.png"
                  alt=""> <a href="Elite_Battle_Elephant.php">精銳矛象伕</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/TarkanIcon.jpg" alt=""> <a href="Tarkan.php">韃靼騎兵</a> (<a href="Huns.php">匈奴</a>研發<a href="Marauders.php">掠奪者</a>後)</div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Siege_Workshop.php">攻城器製造所</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Siegeworkshopicon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/BatteringRamIcon.jpg" alt=""> <a href="Battering_Ram.php">輕型衝撞車</a>→
                  <img class="gg" src="img/CappedRamIcon.jpg"
                  alt=""> <a href="Capped_Ram.php">裝甲衝撞車</a>→
                  <img class="gg" src="img/SiegeRamIcon.jpg"
                  alt=""> <a href="Siege_Ram.php">重型衝撞車</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/MangonelIcon.jpg" alt=""> <a href="Mangonel.php">投石車</a>→
                  <img class="gg" src="img/OnagerIcon.jpg"
                  alt=""> <a href="Onager.php">中型投石車</a>→
                  <img class="gg" src="img/SiegeOnagerIcon.jpg"
                  alt=""> <a href="Siege_Onager.php">重型投石車</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/ScorpionIcon.jpg" alt=""> <a href="Scorpion.php">弩砲</a>→
                  <img class="gg" src="img/HeavyScorpionIcon.jpg"
                  alt=""> <a href="Heavy_Scorpion.php">重裝弩砲</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/BombardCannonIcon.jpg" alt=""> <a href="Bombard_Cannon.php">火砲</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/Siegetowericon.png" alt=""> <a href="Siege_Tower.php">攻城塔</a> 
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Monastery.php">修道院</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Monasteryicon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/MonkIcon.jpg" alt=""> <a href="Monk.php">僧侶</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/MissionaryIcon.jpg" alt=""> <a href="Missionary.php">傳教士</a>(<a href="Spanish.php">西班牙</a>限定)</div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Market.php">市集</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Marketicon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/TradeCartIcon.jpg" alt=""> <a href="Trade_Cart.php">貿易車隊</a> 
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Castle.php">城堡</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Castleicon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/Elite-unique-research.jpg" alt=""> <a href="Unique_Unit.php">特殊單位</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/PetardIcon.jpg" alt=""> <a href="Petard.php">破壞者</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/TrebuchetPackedIcon.jpg" alt=""> <a href="Trebuchet.php">投石機</a> 
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" style=" background-color:#636c72;">
                <div class="unititle"><a href="Dock.php">碼頭</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unititle">
                  <img src="img/Dockicon.png" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/FishingShipIcon.jpg" alt=""> <a href="Fishing_Ship.php">漁船</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/TransportShipIcon.jpg" alt=""> <a href="Transport_Ship.php">運輸船</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/TradeCogIcon.jpg" alt=""> <a href="Trade_Cog.php">貿易商旅</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/Galley.jpg" alt=""> <a href="Galley.php">戰船</a>→
                  <img class="gg" src="img/WarGalley.jpg" alt=""> <a href="War_Galley.php">弩砲戰船</a>→
                  <img class="gg" src="img/GalleonAoE2.jpg"
                  alt=""> <a href="Galleon.php">重裝弩砲戰船</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/FireGalleyIcon.jpg" alt=""> <a href="Fire_Galley.php">火蒙衝</a>→
                  <img class="gg" src="img/FireShipIcon.jpg"
                  alt=""> <a href="Fire_Ship.php">火戰船</a>→
                  <img class="gg" src="img/FastFireShipIcon.jpg"
                  alt=""> <a href="Fast_Fire_Ship.php">快速火戰船</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/DemoRaftIcon.jpg" alt=""> <a href="Demolition_Raft.php">自爆伐</a>→
                  <img class="gg" src="img/DemoShipIcon.jpg"
                  alt=""> <a href="Demolition_Ship.php">神風船</a>→
                  <img class="gg" src="img/HeavyDemoShipIcon.jpg"
                  alt=""> <a href="Heavy_Demolition_Ship.php">重型神風船</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/CannonGalleonIcon.jpg" alt=""> <a href="Cannon_Galleon.php">火砲戰船</a>→
                  <img class="gg" src="img/CannonGalleonIcon.jpg"
                  alt=""> <a href="Elite_Cannon_Galleon.php">精銳火砲戰船</a> 
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/LongboatIcon.jpg" alt=""> <a href="Longboat.php">維京大戰船</a>→
                  <img class="gg" src="img/LongboatIcon.jpg"
                  alt=""> <a href="Elite_Longboat.php">精銳維京大戰船</a>(<a href="Vikings.pgp">維京</a>限定)</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/TurtleShipIcon.jpg" alt=""> <a href="Turtle_Ship.php">龜甲船</a>→
                  <img class="gg" src="img/TurtleShipIcon.jpg"
                  alt=""> <a href="Elite_Turtle_Ship.php">精銳龜甲船</a>(<a href="Koreans.php">韓國</a>限定)</div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="unitcontent">
                  <img class="gg" src="img/CaravelIcon2.jpg" alt=""> <a href="Caravel.php">卡拉維爾戰船</a>→
                  <img class="gg" src="img/CaravelIcon2.jpg"
                  alt=""> <a href="Elite_Caravel.php">精銳卡拉維爾戰船</a>(<a href="Portuguese.php">葡萄牙</a>限定)</div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <hr>
    </div>
    <!-- /container -->
    <?php include( "footn.php"); ?>
  </body>

</html>