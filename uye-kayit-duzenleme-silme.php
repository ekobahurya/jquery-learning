<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - JQUERY, AJAX, PHP VE BOOTSTRAP İLE ÜYE KAYIT, DÜZENLEME VE SİLME</h1>
                <h2 id="secicibaslik">-> Jquery CRUD İşlemleri</h2>
                <div class="col-md-12">
                    <button class="btn btn-warning mb-4 mt-3 yenikayit">YENİ KAYIT</button>
                    <div id="silmebasarili" class="alert alert-danger"><!-- Silme Başarılıysa --></div>
                    <div class="alert alert-danger bosalert"><!-- İşlem Başarısızsa --></div>
                    <div class="alert alert-success kayitbasarili"><!-- Kayıt Başarılıysa --></div>
                </div>
                
                <div class="col-md-12" id="liste"><!-- Kayıt tablosunu veriler.php sayfasından load ile alıyoruz  --></div>
                <div class="col-md-12" id="kayitformu">
                    <h2 id="secicibaslik">YENİ KAYIT</h2>
                    <form action="" method="post" id="yenikayit">
                        <div class="form-group">
                            <label>AD</label>
                            <input type="text" name="ad-ekle" class="form-control mb-2 ad-ekle">
                        </div>
                        <div class="form-group">
                            <label>SOYAD</label>
                            <input type="text" name="soyad-ekle" class="form-control mb-2 soyad-ekle">
                        </div>
                        <div class="form-group">
                            <label>KULLANICI ADI</label>
                            <input type="text" name="kadi-ekle" class="form-control kadi-ekle">
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-success mt-3" id="kayitekle" value="Kayıt Ekle">
                            <input type="button" class="btn btn-info mt-3 geridon" value="Geri Dön">
                        </div>
                        <input type="hidden" name="kayitekle">
                    </form>
                </div>

                <div class="col-md-12" id="kayitduzenlekutu">
                    <h2 id="secicibaslik">KAYIT DÜZENLEME</h2>
                    <form method="post" id="duzenlemeform">
                        <input type="hidden" name="kayitduzenlendi">
                        <input type="hidden" id="idduzenle" name="kayit_id" value="">
                        <div class="form-group">
                            <label>AD</label>
                            <input type="text" name="ad_duzenle" id="ad_duzenle" class="form-control mb-2 ad_duzenle" value="">
                        </div>
                        <div class="form-group">
                            <label>SOYAD</label>
                            <input type="text" name="soyad_duzenle" id="soyad_duzenle" class="form-control mb-2 soyad_duzenle" value="">
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn btn-success mt-3" id="duzenlebuton" value="DÜZENLE">
                            <input type="button" class="btn btn-info mt-3 geridon"  value="Geri Dön">
                        </div>
                    </form>
                </div>
                <br>
                <code>
                <b>Jquery ve PHP ile CRUD İşlemleri Kod Çıktısı<br>
                    JQUERY ALANI BAŞLANGIÇ <br>
                    // -> Kayıt oluşturma<br></b>
$("#liste").load("veriler.php .tabloyucek"); // veriler.php sayfasından .tabloyucek classının içindeki verileri #liste elementinin içine ekle<br>
$("#kayitformu").hide();<br>
$("#kayitduzenlekutu").hide();<br>
$(".bosalert").hide();<br>
$(".kayitbasarili").hide();<br>
$("#silmebasarili").hide();<br>
$(".yenikayit").click(function () {<br>
    $("#liste").fadeOut(500);<br>
    $("#kayitformu").fadeIn(500);<br>
    $("#kayitduzenlekutu").hide();<br>
    $(".bosalert").hide();<br>
    $(".kayitbasarili").hide();<br>
    $("#silmebasarili").hide();<br>
});<br>
$(".geridon").click(function () {<br>
    $("#liste").fadeIn(500);<br>
    $("#kayitformu").fadeOut(500);<br>
    $("#kayitduzenlekutu").hide();<br>
    $(".bosalert").hide();<br>
    $(".kayitbasarili").hide();<br>
});<br>
$("#kayitekle").click(function (event) {<br>
    if ($(".ad-ekle").val() == "" || $(".soyad-ekle").val() == "" || $(".kadi-ekle").val() == "") {<br>
        $(".kayitbasarili").hide();<br>
        $(".bosalert").fadeIn(500);<br>
        $(".bosalert").text("Kayıt alanlarını boş bırakamazsınız...").delay(5000).fadeOut(500);<br>
        event.preventDefault();<br>
    } else {<br>
        $.ajax({<br>
            type: "post",<br>
            url: "islem.php",<br>
            data: $("#yenikayit").serialize(),<br>
            success: function (kayitsonuc) {<br>
                $(".bosalert").hide();<br>
                $(".kayitbasarili").fadeIn(500);<br>
                $(".kayitbasarili").text("Kayıt başarıyla veritabınına eklendi...").delay(5000).fadeOut(500); // alert delay ile 5 saniye bekledikten sonra yarım saniyede kaybolur<br>
                $("#liste").load("veriler.php .tabloyucek"); // verilere geri döndüğünde yeni eklenen nesneleride göstersin<br>
                if (kayitsonuc) { // işlem gerçekleştikten sonra form içeriğini siler<br>
                    $(".ad-ekle").val("");<br>
                    $(".soyad-ekle").val("");<br>
                    $(".kadi-ekle").val("");<br>
                }<br>
            }<br>
        });<br>
    }<br>
});<br><br>
// -> Kayıt Silme<br>
$("body").on("click", ".kayitsil", function () { //tablo dışarıdan load ile dahil edildiği için on fonksiyonu ile body alanı seçilip ilgili nesne seçilip dahil edilen nesneye click özelliği veriliyor<br>
    let kayitsilid = $(this).attr("id");<br>
    //let parent = $(this).parent(".tabloyucek").parent("tr").parent("td");<br>
    $.ajax({<br>
        type: "post",<br>
        url: "islem.php",<br>
        data: {<br>
            'kayitsilid': kayitsilid<br>
        },<br>
        success: function (silmesonuc) {<br>
            $("#silmebasarili").fadeIn(500);<br>
            $("#silmebasarili").text("Kayıt başarıyla veritabanından silindi...").delay(5000).fadeOut(500);<br>
            //parent.fadeOut("slow",1000);<br>
            $("#liste").load("veriler.php .tabloyucek");<br>
        }<br>
    });<br>
});<br><br>
// -> Kayıt Düzenlememe formuna verileri getirme<br>
$("body").on("click", ".kayitduzenle", function (event) {<br>
    let kayitduzenleid = $(this).attr("id");<br>
    $("#liste").fadeOut(500);<br>
    $("#kayitduzenlekutu").fadeIn(500);<br>
    $.ajax({<br>
        type: "post",<br>
        url: "islem.php",<br>
        data: {<br>
            'kayitduzenleid': kayitduzenleid<br>
        },<br>
        success: function (duzenlemesonuc) {<br>
            let obj = JSON.parse(duzenlemesonuc);<br>
            $("#ad_duzenle").val(obj.kayitadi);<br>
            $("#soyad_duzenle").val(obj.kayitsoyadi);<br>
            $("#idduzenle").val(kayitduzenleid);<br>
        }<br>
    });<br>
});<br>
// -> Kayıt Düzenleme form veritabanını güncelleme alanı<br>
$("#duzenlebuton").click(function (event) {<br>
    if ($(".ad_duzenle").val() == "" || $(".soyad_duzenle").val() == "") {<br>
        $(".kayitbasarili").hide();<br>
        $(".bosalert").fadeIn(500);<br>
        $(".bosalert").text("Alanları boş bırakamazsınız...").delay(5000).fadeOut(500);<br>
        event.preventDefault();<br>
    } else {<br>
        $.ajax({<br>
            type: "post",<br>
            url: "islem.php",<br>
            data: $("#duzenlemeform").serialize(),<br>
            success: function (duzenlesonuc) {<br>
                $(".bosalert").hide();<br>
                $(".kayitbasarili").fadeIn(500);<br>
                $(".kayitbasarili").text("Kayıt başarıyla güncellendi...").delay(5000).fadeOut(500);<br>
                $("#liste").load("veriler.php .tabloyucek");<br>
            }<br>
        });<br>
    }<br>
});<br><br>
                  <b> JQUERY ALANI BİTİŞ <br><br>
                   PHP ALANI BAŞLANGIÇ<br></b>
                   // formdan post edilen veriyi mysqle kaydetme <br>
if(isset($_POST['kayitekle'])) {<br>
    $kayitekle = $baglanamk->prepare("INSERT INTO kayit SET <br>
        kayit_kadi=:kayit_kadi,<br>
        kayit_adi=:kayit_adi,<br>
        kayit_soyadi=:kayit_soyadi<br>
    ");<br>
    $insert = $kayitekle->execute(array(<br>
        "kayit_kadi" => $_POST["kadi-ekle"],<br>
        "kayit_adi" => $_POST["ad-ekle"],<br>
        "kayit_soyadi" => $_POST["soyad-ekle"]<br>
    ));<br>
}<br><br>
// mysql den veri silme<br>
if(isset($_POST['kayitsilid'])) {<br>
    $kayitsil = $baglanamk->prepare("DELETE FROM kayit WHERE kayit_id=:kayit_id");<br>
    $silmekontrol = $kayitsil->execute(array(<br>
        "kayit_id" => $_POST["kayitsilid"]<br>
    ));<br>
}<br><br>
// formdan post edilen veriyi düzenleme -> düzenleme alanında verileri gösterme<br>
$kayitduzenlesor=$baglanamk->prepare("SELECT * FROM kayit where kayit_id=:kayit_id");<br>
$kayitduzenlesor->execute(array(<br>
    'kayit_id' => $_POST["kayitduzenleid"]<br>
));<br><br>
$kayitduzenlecek = $kayitduzenlesor->fetch(PDO::FETCH_ASSOC);<br>
$array = array(<br>
    "kayitadi" => $kayitduzenlecek["kayit_adi"],<br>
    "kayitsoyadi" => $kayitduzenlecek["kayit_soyadi"]<br>
);<br>
echo $json = json_encode($array);<br><br>
// formdan post edilen veriyi düzenleme -> düzenleme alanından alınan verileri veritabanında güncelleme<br>
if(isset($_POST['kayitduzenlendi'])) {<br>
    $kayitduzenle = $baglanamk->prepare("UPDATE kayit SET<br>
        kayit_adi=:kayit_adi,<br>
        kayit_soyadi=:kayit_soyadi<br>
    WHERE kayit_id = {$_POST['kayit_id']}");<br>
    $update = $kayitduzenle->execute(array(<br>
        "kayit_adi" => $_POST["ad_duzenle"],<br>
        "kayit_soyadi" => $_POST["soyad_duzenle"]<br>
    ));<br>
}
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>