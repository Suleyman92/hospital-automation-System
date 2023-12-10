<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Anket</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: rgb(60, 60, 60)">
      <div class="container">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
              <div class="form-group">
                <label><span style="font-weight:bold;">Doktorunuz kimdir?</span></label><br>


                <input type="text" class="form-control" name="isim">
              </div>
              <br>


            <div class="form-check form-check-inline">
            <label> <span style="font-weight:bold;"> Memnun kaldınızmı?</span></label><br>
                <input class="form-check-input" type="checkbox" name="secim[]" value="">
                <label class="form-check-label">Evet</label>
                <img src="https://www.cambridge.org/elt/blog/wp-content/uploads/2019/07/Blushed-Smiling-Emoji-Free-Download-IOS-Emojis-480x480.png.webp" width="20x20" >
            </div>
           
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="secim[]" value="">
            <label class="form-check-label">Hayır</label>
            <img src="https://www.cambridge.org/elt/blog/wp-content/uploads/2019/07/Sad-Face-Emoji-480x480.png.webp" width="20x20" >

            </div><br>
              <button type="submit" name="kontrol" class="btn btn-default" >Gonder</button>
            </form>
        </div>
        
        <div class="container" >
           <table class="table table-striped">
                <?php
                $ad = $secim = null;
                if(isset($_POST["kontrol"]))
                {
                    $ad=$_POST["isim"];
                    $secim=$_POST["secim"];
                    echo "<h3 style>Doktor ismi: $ad</h3>";
                    echo "<h3>Anketiniz için teşekkürler iyi günler dileyiyle!!!</h3>";
                    foreach ($secim as $d) {
                        echo "<p>$d</p>";
                    }
                }     
                ?><br><br>

                
            </table>
            <a href="hos.php"><button type="submit" class="sub" id="uye">Ana Sayfa</button></a> <br><br>
       </div>

    </body>
</html>