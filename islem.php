<?php
require_once "baglan.php";
//echo $_POST['ad']." " .$_POST['soyad'];
//echo $_GET["adi"]." " .$_GET["soyadi"]." Kullanıcı id'si: ".$_GET["kullanici_id"];
// formdan post edilen veriyi mysqle kaydetme 
if(isset($_POST['kayitekle'])) {
    $kayitekle = $baglanamk->prepare("INSERT INTO kayit SET 
        kayit_kadi=:kayit_kadi,
        kayit_adi=:kayit_adi,
        kayit_soyadi=:kayit_soyadi
    ");
    $insert = $kayitekle->execute(array(
        "kayit_kadi" => $_POST["kadi-ekle"],
        "kayit_adi" => $_POST["ad-ekle"],
        "kayit_soyadi" => $_POST["soyad-ekle"]
    ));
}
// mysql den veri silme
if(isset($_POST['kayitsilid'])) {
    $kayitsil = $baglanamk->prepare("DELETE FROM kayit WHERE kayit_id=:kayit_id");
    $silmekontrol = $kayitsil->execute(array(
        "kayit_id" => $_POST["kayitsilid"]
    ));
}
// formdan post edilen veriyi düzenleme -> düzenleme alanında verileri gösterme
$kayitduzenlesor=$baglanamk->prepare("SELECT * FROM kayit where kayit_id=:kayit_id");
$kayitduzenlesor->execute(array(
    'kayit_id' => $_POST["kayitduzenleid"]
));
$kayitduzenlecek = $kayitduzenlesor->fetch(PDO::FETCH_ASSOC);
$array = array(
    "kayitadi" => $kayitduzenlecek["kayit_adi"],
    "kayitsoyadi" => $kayitduzenlecek["kayit_soyadi"]
);
echo $json = json_encode($array);
// formdan post edilen veriyi düzenleme -> düzenleme alanından alınan verileri veritabanında güncelleme
if(isset($_POST['kayitduzenlendi'])) {
    $kayitduzenle = $baglanamk->prepare("UPDATE kayit SET
        kayit_adi=:kayit_adi,
        kayit_soyadi=:kayit_soyadi
    WHERE kayit_id = {$_POST['kayit_id']}");
    $update = $kayitduzenle->execute(array(
        "kayit_adi" => $_POST["ad_duzenle"],
        "kayit_soyadi" => $_POST["soyad_duzenle"]
    ));
}
?>