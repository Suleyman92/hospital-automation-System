<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Hastane Otomasyon Sistemi</title>
</head>
<body>

    <header>
    <div class="dr"><img src="dr.png" width="150x150" style="float: left;"></div>

        <h2>Sağlığınız için yanınızdayız!</h2>
    </header><br>

    <div class="tableOuter"><br>
        <h1>Lütfen yeni kayıt oluşturun</h1>
        <form action="islem.php" method="post">
        <div class="user">
                <input type="text" name="ad" placeholder="Adınız">
            </div>
            <div class="user">
                <input type="text" name="soyad" placeholder="Soyadnız">
            </div>

            <div class="user" >                 
                <select name="Sehir" type="text">

                    <option value="0">Şehir</option><br><br>
                    <option value="1">Adana</option>
                    <option value="2">Adıyaman</option>
                    <option value="3">Afyonkarahisar</option>
                    <option value="4">Ağrı</option>
                    <option value="5">Amasya</option>
                    <option value="6">Ankara</option>
                    <option value="7">Antalya</option>
                    <option value="8">Artvin</option>
                    <option value="9">Aydın</option>
                    <option value="10">Balıkesir</option>
                    <option value="11">Bilecik</option>
                    <option value="12">Bingöl</option>
                    <option value="13">Bitlis</option>
                    <option value="14">Bolu</option>
                    <option value="15">Burdur</option>
                    <option value="16">Bursa</option>
                    <option value="17">Çanakkale</option>
                    <option value="18">Çankırı</option>
                    <option value="19">Çorum</option>
                    <option value="20">Denizli</option>
                    <option value="21">Diyarbakır</option>
                    <option value="22">Edirne</option>
                    <option value="23">Elazığ</option>
                    <option value="24">Erzincan</option>
                    <option value="25">Erzurum</option>
                    <option value="26">Eskişehir</option>
                    <option value="27">Gaziantep</option>
                    <option value="28">Giresun</option>
                    <option value="29">Gümüşhane</option>
                    <option value="30">Hakkâri</option>
                    <option value="31">Hatay</option>
                    <option value="32">Isparta</option>
                    <option value="33">Mersin</option>
                    <option value="34">İstanbul</option>
                    <option value="35">İzmir</option>
                    <option value="36">Kars</option>
                    <option value="37">Kastamonu</option>
                    <option value="38">Kayseri</option>
                    <option value="39">Kırklareli</option>
                    <option value="40">Kırşehir</option>
                    <option value="41">Kocaeli</option>
                    <option value="42">Konya</option>
                    <option value="43">Kütahya</option>
                    <option value="44">Malatya</option>
                    <option value="45">Manisa</option>
                    <option value="46">Kahramanmaraş</option>
                    <option value="47">Mardin</option>
                    <option value="48">Muğla</option>
                    <option value="49">Muş</option>
                    <option value="50">Nevşehir</option>
                    <option value="51">Niğde</option>
                    <option value="52">Ordu</option>
                    <option value="53">Rize</option>
                    <option value="54">Sakarya</option>
                    <option value="55">Samsun</option>
                    <option value="56">Siirt</option>
                    <option value="57">Sinop</option>
                    <option value="58">Sivas</option>
                    <option value="59">Tekirdağ</option>
                    <option value="60">Tokat</option>
                    <option value="61">Trabzon</option>
                    <option value="62">Tunceli</option>
                    <option value="63">Şanlıurfa</option>
                    <option value="64">Uşak</option>
                    <option value="65">Van</option>
                    <option value="66">Yozgat</option>
                    <option value="67">Zonguldak</option>
                    <option value="68">Aksaray</option>
                    <option value="69">Bayburt</option>
                    <option value="70">Karaman</option>
                    <option value="71">Kırıkkale</option>
                    <option value="72">Batman</option>
                    <option value="73">Şırnak</option>
                    <option value="74">Bartın</option>
                    <option value="75">Ardahan</option>
                    <option value="76">Iğdır</option>
                    <option value="77">Yalova</option>
                    <option value="78">Karabük</option>
                    <option value="79">Kilis</option>
                    <option value="80">Osmaniye</option>
                    <option value="81">Düzce</option>

                 </select>                
            </div> 
            
            <div class="user"  >

                <select name="doctor" id="" type="text">

                    <option value="0">Doktor Seçin</option><br><br>
                    <option value="1">İbrahim Duman</option>
                    <option value="2">Kemal Kalkan</option>
                    <option value="3">Ahmet Koç</option>
                    <option value="4">Enes günhan</option>
                    <option value="5">Uğurcan Coşar</option>
                    <option value="6">Musa Temel</option>
                    <option value="7">Halil Kirazlı</option>
                    <option value="8">Ceyda Özyamaç</option>
                    <option value="9">Nihan Kırçıl Akyüz</option>
                    <option value="10">Mustafa Dilmaç</option>
                    <option value="11">Gültekin Saglam</option>
                    <option value="12">Güngör Bingöl</option>
                    <option value="13">Burak Yıldız</option>
                    <option value="14">İlhan Küçükkaya</option>
                    <option value="15">İbrahim Özyamaç</option>
                    <option value="16">Bülent Erdem</option>
                    <option value="17">Kamile Öter</option>
                    <option value="18">Muhammet Salih Ateş</option>
                    <option value="19">Anıl Akcıl</option>
                    <option value="20">Gönül Gülen</option>
                    
                </select>

            </div>

            <div class="user" >
                 <input type="date" type="Doğum tarihiniz" name="dt" placeholder="Doğum tarihiniz" >   
            </div>
            <div class="user">
                <input type="text" name="kimlik" placeholder="Kimlik numaranız">
            </div>
            <div class="pass">
                <input type="password" name="sifre" placeholder= "Şifrenizi giriniz ">
            </div>
            <div class="pass">
                <input type="password" name="sifret" placeholder= "Şifrenizi tekrar giriniz ">
            </div>
            <div><br><br>
                <input type="radio" name="cinsiyet" checked value="Erkek">Erkek 
                <input type="radio" name="cinsiyet" value="Kadın">Kadın
            </div>
            <br>
            <div>
                <input type="submit" class="kt" id="kt" value="Kaydınızı tamamlayın">
            </div>

            <br><br><br>
            
            
        </form>
        <a href="hos.php"><button type="submit" class="sub" id="uye">Ana sayfa</button></a> <br><br>
        <div style="float: left;">
            İletisim için:           
        </div><br><br> 

        <div style="float: left;">
            Telefon: +90 555 555 55 55 <br>
            Fax: +212 555 555 55 55 <br>
            Mail: hastane@gmail.com <br>
        </div>
    
    </div>

</body>
</html>