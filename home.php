<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Just chill.com</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      .index {
         max-width: 1200px;
         margin: auto;
         background: color #f2f2f2;
         ;
         overflow: auto;
      }

      .first {
         margin: 20px;
         border: 1px solid #ccc;
         float: left;
         width: 250px;
      }

      .first img {
         width: 100%;
         height: auto%;
      }

      .des {
         padding: 15px;
         text-align: center;

      }
   </style>
</head>

<body>
   <nav>
      <div class="logo">
         Just Chill
      </div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
      </label>
      <ul>
         <li><a class="active" href="home.php">Home</a></li>
         <li><a href="Animation.html">Animation</a></li>
         <li><a href="bollywood.html">Bollywood</a></li>
         <li><a href="hollywood.html">Hollywood</a></li>
         <li><a href="webseries.html">WebSeries</a></li>
         <li><a href="contact1.php">contact us </a></li>
         <li><a href="logout.php">Logout </a></li>
      </ul>
   </nav>
   <div class="index">

      <div class="first">
         <a href="https://mega.nz/file/UyISRKCJ#GlA4wtWyhi8KhnGR2x711O5EEnp3CHJ5UT6rO9Iqlg0"><img src="homeimage/batman.jfif"></a>
         <div class="des"> download batman movie 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/N7oHiCjQ#RuJdWgGVfVM80hSuQUEdkCgNN7GLOh0FAmbRDewu-1A"><img src="homeimage/black adam.jfif"></a>
         <div class="des"> download black adam movie 720p</div>
      </div>

      <!-- <div class="first">
         <img src="homeimage/family man.jfif">
         <div class="des"> download family man WebSeries 720p</div>
      </div> -->


      <div class="first">
         <a href="https://mega.nz/file/cm520DxD#gLmyFVbdpk4K-ean2r3PSO4BtJg6ZflQLVf9ImuKiS0"><img src="homeimage/prey.jfif"></a>
         <div class="des"> download prey movie 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/A6xXwTiZ#-oS-qbeSIITAN8feYqjPWEv57XbMW-AgCkcac8KXYJg"><img src="homeimage/sg.jfif"></a>
         <div class="des"> download Sacred game movie 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/JqYxGSyK#oaJG_DexcJlMCMe_98AlHZxIa4Vw7j5_ZngPvTpCwIE"><img src="homeimage/superman.jpeg"></a>
         <div class="des"> download superman movie 720p</div>
      </div>

      <div class="first">
        <a href="https://mega.nz/file/l3p1FCwI#LJ1ZC05a3Wch09-k9OxGnXyV8mE235e2wbNzCnvViE4"><img src="homeimage/Attack 2022.jpg"></a></a>
         <div class="des"> download Attack movie 720p</div>
      </div>

      <div class="first">
        <a href="https://mega.nz/file/Zn4ymIpb#5P7dlxJdmJOYjfJf5otFCv4PY_9T-9PSm7TamkkqwQE"> <img src="homeimage/Bhool Bhulaiyaa 2 (2022).jpg"></a>
         <div class="des"> download Bhool Bhulaiyaa 2 movie 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/tiJ31DbY#l7vbENuMShn1rFEYuKoa269C_52hchSi-gwGir9MXFU"><img src="homeimage/Rocketry 2022.jpg"></a>
         <div class="des"> download Rocketry movie 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/ZioDybKT#hGn5Y0ytJkBb_kaEp_bh0LYW_QcpDkZU86z61VcwGBQ"><img src="homeimage/Stree 2018.jpg"></a>
         <div class="des"> download Stree movie 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/cuJW0KLa#Gae1_fyVLGgqoa6A6GLx9XNpei9rUl8ic82Aq-4pNL8"><img src="homeimage/Runway 34 (2022).jpg"></a>
         <div class="des"> download Runway 34 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/U7Ax3STD#tkcl3mcz3j_r5HNpo5OPq2RXlo6432S0Xpqsmw1celI"><img src="homeimage/Freaky 2020.jpg"></a>
         <div class="des"> download Freaky 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/4mAHga5T#PMoS3iBgJ1rAiXiICvyDYDPYPgV8yB9PhXQH9X8PkQE"><img src="homeimage/Game of Thrones Season 1.jpg"></a>
         <div class="des"> download Game of Thrones Season 1 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/RyYGkLhD#edrkl5jNLeIV_Ks_sMAxDO3DcZ-to-N_XhoSqQIrxx8"><img src="homeimage/Game of Thrones Season 2.jpg"></a>
         <div class="des"> download game of Thrones Season 2 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/wzhWVRRC#0VX8026GQxeJgghoht3SOJr6E1aK2eL23SZ_SeGbwoY"><img src="homeimage/Game of Thrones Season 5.jpg"></a>
         <div class="des"> house of dragon720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/ZzgCgCoA#TaR22fEOlhjOtkniqmC9cugsie2H9wjOeX3ADd9cSRE"><img src="homeimage/Harry Potter and the Deathly Hallows - Part 2 (2011).jpg"></a>
         <div class="des"> download Harry Potter and the Deathly Hallows - Part 2 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/QiB3EABD#RlK9UA8EgArLcnw8TKxmAaSfpN1nyodI1AqRfel9AYI"><img src="homeimage/Harry Potter And The Half Blood Prince 2009.jpg"></a>
         <div class="des"> download Harry Potter And The Half Blood Prince 2009 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/Vm4iybgR#T1oFsSqdlfg59-v2tlGNNN6HBQUt-riil9FWE1Dl1iU"><img src="homeimage/Harry Potter and the Order of the Phoenix 2007.jpg"></a>
         <div class="des"> download Harry Potter and the Order of the Phoenix 2007 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/p6oCmZAR#u556MCNKEI_l1-HwTNTWxmreu_PG3uEOCsd2z__NSyw"><img src="homeimage/Harry Potter and the Sorcerer's Stone 2001.jpg"></a>
         <div class="des"> download Harry Potter and the Sorcerer's Stone 2001 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/Q2AHia7Y#FBfpNP8DuCKXoU2ACMAQ3qieWMasongCCAO6EAEDgNk"><img src="homeimage/How-to-Train-Your-Dragon-2-2014-200x300.jpg"></a>
         <div class="des"> download How-to-Train-Your-Dragon-2 720p</div>
      </div>

      <div class="first">
         <a href="https://mega.nz/file/huQlTTSY#qsOuedJakJVs_1zGDZpLUn_Y6s9lNLE82fqfc7jt62M"><img src="homeimage/How-to-Train-Your-Dragon-2010-202x300.jpg"></a>
         <div class="des"> download How-to-Train-Your-Dragon 720p</div>
      </div>
   </div>
</body>

</html>
