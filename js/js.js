/*
1. Yöntem
$(document).ready(function(){
    // Sayfa yüklendikten sonra çalışmasını istediğin kodları buraya yazarsın
});

2. Yöntem
$().ready(function(){
    // Sayfa yüklendikten sonra çalışmasını istediğin kodları buraya yazarsın
});

3. Yöntem
$(function(){
    // Sayfa yüklendikten sonra çalışmasını istediğin kodları buraya yazarsın
});
*/

// p elementlerini tıklayınca gizleme başlangıç
$("p#anapgizle").css({
    "font-family": "Cursive",
    "font-weight": "bold",
    "font-size": "15px",
    "color": "#3a6b9c",
    "cursor": "pointer"
});

$("p#anapgizle").click(function () {
    $(this).hide();
});
// p elementlerini tıklayınca gizleme bitiş

/* 1) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// JQUERY FONKSİYON VE YAZIM KURALLARI BAŞLANGIÇ
$("p#yazimKurallarip").html("Lorem ipsum dolor sit amet consectetur adipisicing elit.");
// fonksiyonla tıklayınca yazdırma başlangıç
function spanayazdir() {
    $("p#yazimKurallarip2").html("Tıklayınca gelen yazı");
}

$("span#yazimKurallariptiklama").click(spanayazdir);
// fonksiyonla tıklayınca yazdırma bitiş
// toggle göster gizle başlangıç

function gostergizle() {
    $("#reklamackapa").toggle();
}

// toggle göster gizle bitiş
// JQUERY FONKSİYON VE YAZIM KURALLARI BİTİŞ

/* 2) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => JQUERY SEÇİCİLER BAŞLANGIÇ
// -> Tag, id ve class Seçiciler
// id tanımlanmış #ornek yazıp tagı seçilir, class tanımlanmışsa .ornek yazıp tagseçilir
// a, b, p, span, form, ul, vb. yazarsak sayfadaki aynı elementlerin tamamına uygulanır.

$("legend").css("color", "gray"); // $("legend") ile tag seçilip css işlemi yaıldı
$("#tagseciciaciklama").html("a, b, p, span, form, ul, vb. tag'ları yazarsak sayfadaki aynı elementlerin tamamına uygulanır."); // html içeriği değiştiriliyor
$("#secicibaslik,#secicibaslik2").css({
    "color": "red",
    "font-family": "Cursive",
    "font-size": "22px",
    "font-weight": "bold"
}); // $("#secicibaslik") ile id seçilip css olaylarına müdahale edildi
//$("#secicibaslik").html("-> Tag Seçiciler"); // html içeriği değiştiriliyor
$("#idclassseciciaciklama").html("id tanımlanmışsa #ornek yazıp ilgili id'ideki tag seçilir, class tanımlanmışsa .ornek yazıp tag seçilir");
$(".classsecici,#tagseciciaciklama").css({ //birden fazla element seçmek için taglar arasında virgül kullanılır
    "color": "gray",
    "font-weight": "bold",
    "text-shadow": "3px 3px gold",
    "font-size": "18px"
}); // $(".classsecici") ile class seçilip css olayına müdahale edildi
// $("code").html("Başlık içeriğini id seçici ile değştiren kod: $(\"#secicibaslik\").html(\"-> Tag Seçiciler\");");
//$("input").css("width","320px"); // Bütün inputlara etki eder
// İnput type göre seçim yapma
//$("input[type='text']").css("width", "200px"); // 1. yol
//$("input:password").css("width", "220px"); // 2. yol
// -> Sıralı seçiciler <-
$(".siralisecici:odd").css("color", "orange"); // Tek indis numaralı elementleri seçer.
$(".siralisecici:even").css("color", "purple"); // Çift indis numaralı elementleri seçer.
$(".siralisecici:first").css("color", "#284486"); // ilk indis numaralı elementi seçer.
$(".siralisecici:last").css("color", "#abcd15"); // Son indis numaralı elementi seçer.

$("tr:odd").css("color", "orange"); // Tek indis numaralı elementleri seçer.
$("tr:even").css("color", "purple"); // Çift indis numaralı elementleri seçer.
$("tr:last").css("color", "red"); // Son indis numaralı elementi seçer.
$("tr:first").css("color", "#284486"); // ilk indis numaralı elementi seçer.
$("tr:nth(3)").css("color", "pink"); // indis numarası 3 olan elementi seçer.
$("tr:eq(4)").css("color", "#abcd15"); // indis numarası 4 olan elementi seçer.
$("tr").slice(7, 9).css("color", "#21ef69"); // indis numarası 7 dahil  başlayıp 9 a kadar olan  9 hariç elementi seçer.
$("tr,td,th").css({
    "border": "1px solid #abcdef",
    "padding": "5px"
});
// -> Çocuk Seçiciler <-
$("p span").html("Çocuk seçiler $(\"p span\") şeklinde seçilir");
$("p span").css({
    "color": "#abcd15"
});
// -> Eleman Bulup Seçme
$(".pelementi").find(".betiketi").css("color", "gold");
$("p").find(".ietiketi").css("color", "green");
// -> each döngüsü
$("ul li").each(function (index) {
    $(".eachdongusonucu").html(index + ". eleman:" + $(this).text());
    //alert(index+". eleman:"+$(this).text());
});
// -> is döngüsü
if ($("p").is(".iskullanimi")) {
    $(".iskullanimi").html("P Elementinde .iskullanimi adında class tanımlıdır");
} else {
    $(".iskullanimi").html("Böyle bir element yok");
}
// JQUERY SEÇİCİLER BİTİŞ <=

/* 3) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => DOM MANİPÜLASYON BAŞLANGIÇ
// -> AddClass - Class Özelliklerine Müdahale elemente class ekleme yapılır
/*("addclass").css({
    "color":"orange",
    "font-family":"Cursive",
    "font-weight":"bold"
}).html("Burası addClass ile yapıldı"); */
$("#addClassEkleme").addClass("addclass"); // class ekleme
$(".addclass").css({
    "color": "orange",
    "font-family": "Cursive",
    "font-weight": "bold"
}).html("Burası addClass ile yapıldı");
// -> RemoveClass - Class Özelliklerine Müdahale elemente class silme yapılır
function removeClassSilme() {
    $("#removeClassSilme").removeClass("removeClassSilme");
    $("#removeClassSilme").html("removeClassSilme class'ı silindi").css({
        "color": "red",
        "font-family": "Cursive"
    });
}
// -> hasClass - Class Özelliklerine Müdahale elementte aranan class var mı yokmu bulur
let hasclassvarmi = $("#hasclassvarmi").hasClass("hasclassvarmi");
if (hasclassvarmi == true) {
    $(".hasclassvarmi").css({
        "color": "light-black",
        "background-color": "#abcdef",
        "padding": "12px",
        "font-family": "Cursive",
        "font-weight": "bold"
    }).html("P elementinde .hasclassvarmi class'ı tanımlıdır");
} else {
    $(".hasclassvarmi").css({
        "color": "red",
        "background-color": "#abcdef",
        "padding": "12px",
        "font-family": "Cursive",
        "font-weight": "bold"
    }).html("P elementinde .hasclassvarmi class'ı yok");
}
// -> Metod Zincirlemesi
$(".metodzincirlemesi").html("Metod Zincirlemesi . ile aynı seçicide özellik kullanmadır.").css({
    "background-color": "#abccde",
    "padding": "12px",
    "font-family": "Cursive"
}).fadeOut(1000).fadeIn(1000);
// -> toggleClass
function toggleClassEkleCikar() {

    $("#toggleClassEkleCikar").toggleClass("toggleClassEkleCikar");
    let tgcvarmi = $("#toggleClassEkleCikar").hasClass("toggleClassEkleCikar");
    if (tgcvarmi == true) {
        $(".toggleClassEkleCikar").html("Bu bir Toggle Class olayıdır").css({
            "margin-top": "15px",
            "background-color": "#abcd15",
            "color": "white",
            " font-family": "Cursive",
            "padding": "12px"
        });
    } else if (tgcvarmi == false) {
        $("#toggleClassEkleCikar").html("").css({
            "background-color": "transparent",
            "padding": "0px",
            "margin-top": "0px"
        });
    }

}
// -> Append & Prepend Kullanımı - Nesnelere Ekleme Yapma
function nesneekleme() {
    let kursadi = $(".appendprependkursekle").val();
    let eklememetodu = $("#eklememetodu input[type='radio']:checked").val();

    if (eklememetodu == "append") {
        $(".eklemelistesi").append("<option>" + kursadi + "</option>");
    } else if (eklememetodu == "prepend") {
        $(".eklemelistesi").prepend("<option>" + kursadi + "</option>");
    }
}
// -> AppendTo & PrependTo Kullanımı - Nesnelere Ekleme Yapma
$(".appendtoprapendtoaon").appendTo($(".appendtoprapendtop"));
$(".appendtoprapendtoaarka").prependTo($(".appendtoprapendtop"));
// -> Before & After Kullanımı - Nesnelere Ekleme Yapma
$(".afterbeforeli").after("<li>Hepsinin Arkasına Ekle</li>");
$(".afterbeforeli:first").after("<li>İlk sıranın arkasına Ekle</li>");
$(".afterbeforeli:last").after("<li>Son sıranın önüne Ekle</li>");
$(".afterbeforeli").before("<li>Hepsinin Önüne Ekle</li>");
$(".afterbeforeli:first").before("<li>İlk sıranın Önüne Ekle</li>");
$(".afterbeforeli:last").before("<li>Son sıranın Önüne Ekle</li>");
// ->  İsteğe Bağlı Sürekli Çoğalan Dosya Yükleme Alanı Yapımı Uygulaması
function dosyaalaniekle() {
    $(".inputalaniac").before("<input type='file' name='yukle[]'><br><br>");
}

function dosyaalanisil() {
    $(".inputalaniac").eq(0).remove();
}
// -> Clone Kullanımı - Nesneleri Kopyalama
$(".clonekullanimip").clone().insertAfter(".clonekullanimib");
//$(".clonekullanimib").clone().insertBefore(".clonekullanimip");
// -> Text Kullanımı - Nesneleri Değiştirme
$(".textilenesnedegistir").text("Bu metinde text metodu kullanılarak nesnenin içeriği değiştirilmiştir.").css({
    "margin-top": "15px",
    "background-color": "#581a21",
    "color": "white",
    " font-family": "Cursive",
    "padding": "12px"
});
// -> Replace Kullanımı
$(".replacekullanimi").replaceWith("Bu içerik replaceWith methodu ile değiştirilmiştir.");
// -> Replace Kullanımı
$(".emptykullanimi").empty().text("İçeriği empty ile silindi");
// -> Remove Kullanımı
$(".removekullanimi").remove();
// -> Attr Kullanımı
$(".attrkullanimi").attr("href", "https:www.google.com.tr/").css({
    "text-decoration": "none"
}).text("Google'a Git");
// -> Html Kullanımı
let elementicerigi = $(".htmlkullanimi").html(); // Element içeriği alma
$("b.htmlkullanimi").html("html metodu kullanılarak yukarıdaki içerik alınıp b elementine yapıştırıldı: " + elementicerigi);
// -> val Kullanımı
// $(".valselectkullanimi").onChange(function(){
//     let valicerigi = $(".valselectkullanimi").val();
//     $(".valkullanimi").text(valicerigi);
//   });
function olay() {
    let valicerigi = $(".valselectkullanimi").val();
    $(".valkullanimi").html(valicerigi);
}
// DOM MANİPÜLASYON BİTİŞ <=

/* 4) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => ÇEKİRDEK YAPISI BAŞLANGIÇ
// -> length Kullanımı
$(".lengthkullanimi").text("Body içindeki div sayısı: " + $("div").length);
// -> get() Kullanımı
let elemanlaribul = $(".getkullanimili").get(); // elemanlar değişkene atandı
$(".getkullanimi").text("Bakılan elemanın içeriği: " + $(elemanlaribul).eq(3).text()); // eleman içeriği eq ile indis numarasına göre seçilip text ile .getkullanimi etiketine yazdırıldı
// -> index() Kullanımı
$(".indexkullanimi").text("Bakılan elemanın index numarası: " + $(".PYTHON").index());
// ÇEKİRDEK YAPISI BİTİŞ <=

/* 5) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => JQUERY OLAYLAR - EVENTS BAŞLANGIÇ
// -> On Olay Yakalayıcı Kullanımı
$("#butonalani").on('click', 'button', function () {
    $(".onolayi").after("<button class='btn btn-success'>Buton Oluştur</button>");
});
// -> Off Olay Sonlandırıcı Kullanımı
$("#butonalani").on('click', '#offolayi', function () {
    $("#butonalani").off();
});
// -> One Olay Kısıtlayıcı Kullanımı
$(".oneinputolustur").one('click', function () {
    $(".oneolayi").after("<br><br><input type='file' class='form-control col-md-4'>");
});
// -> Trigger Kullanımı
$("#btn1").click(function () {
    $(".triggeryazdir").text("Buton bire tıkladın");
});
$("#btn2").click(function () {
    $("#btn1").trigger('click');
});
// JQUERY OLAYLAR - EVENTS BİTİŞ <=

/* 6) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => KLAVYE OLAYLARI - KEYBOARDS EVENTS BAŞLANGIÇ
// -> Keydown Kullanımı
$(".keydownkullanimi").keydown(function (hangiharf) {
    $(".keydownkullanimisonuc").text("Tuşa Basıldı" + hangiharf.keyCode);
    if (hangiharf.keyCode == 37) {
        $(".keypressanimasyonkutusu").fadeIn(1000).animate({
            "marginLeft": "-=10px"
        });
    } else if (hangiharf.keyCode == 38) {
        $(".keypressanimasyonkutusu").fadeIn(1000).animate({
            "margin-top": "-=10px"
        });
    } else if (hangiharf.which == 39) {
        $(".keypressanimasyonkutusu").fadeIn(1000).animate({
            "margin-left": "+=10px"
        });
    } else if (hangiharf.keyCode == 40) {
        $(".keypressanimasyonkutusu").fadeIn(1000).animate({
            "marginTop": "+=10px"
        });
    }
});
// -> Keypress Kullanımı
$(".keypressanimasyonkutusu").css({
    "width": "100px",
    "height": "100px",
    "border-radius": "50%",
    "background-color": "gold",
    "margin-left": "350px",
    //"display": "none",

});
$(".keydownkullanimi").keypress(function (event) {
    // $(".keypresskullanimisonuc").append("Tuşu Bırak");
    // $(".keypressanimasyonkutusu").fadeIn(1000).animate({
    //    "margin-left": "+=10px"
    // });

});
// Keyup Kullanımı
$(".keydownkullanimi").keyup(function () {
    $(".keypressanimasyonkutusu").text("The End");
});
// KLAVYE OLAYLARI - KEYBOARDS EVENTS BİTİŞ <=

/* 7) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => FARE OLAYLARI - MOUSE EVENTS BAŞLANGIÇ
// -> Click Kullanımı
$(".clickkullanimi").click(function () {
    $(".clickkullanimisonuc").text("Butona Tıklanıldı..").css({
        "color": "orange",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
});
// -> Dblclick Kullanımı
$(".dblclickkullanimi").dblclick(function () {
    $(".dblclickkullanimisonuc").text("Butona Çift Tıklanıldı..").css({
        "color": "green",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
});
// -> Hover Kullanımı
$(".hoverkullanimi").hover(uzerinde, cekildiginde);

function uzerinde() {
    $(".hoverkullanimisonuc").text("Butonun üzerine geldin..").css({
        "color": "purple",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
}

function cekildiginde() {
    $(".hoverkullanimisonuc").text("Butonun üzerinden gittin..").css({
        "color": "brown",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
}
// -> Mousedown Kullanımı
$(".mousedownkullanimi").mousedown(function (event) {

    $(".mousedownkullanimisonuc").css({
        "color": "green",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });

    switch (event.which) {
        case 1:
            $(".mousedownkullanimisonuc").text("Sol mouse tuşuna basıldı..");
            break;

        case 2:
            $(".mousedownkullanimisonuc").text("Orta mouse tuşuna basıldı..");
            break;

        case 3:
            $(".mousedownkullanimisonuc").text("Sağ mouse tuşuna basıldı..");
            break;
    }
});
// Mouseup / Mouseout Kullanımı
$(".mouseupkullanimi").mousedown(function () {
    $(".mouseupkullanimisonuc").text("Butona Basıldı..").css({
        "color": "darkgray",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
});

$(".mouseupkullanimi").mouseup(function () {
    $(".mouseupkullanimisonuc").text("Buton Bırakıldı..").css({
        "color": "darkblue",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
});

$(".mouseupkullanimi").mouseout(function () {
    $(".mouseupkullanimisonuc").text("Butonun üzerinden çekildin..").css({
        "color": "darkgreen",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
});

$(".mouseupkullanimi").mouseenter(function () {
    $(".mouseupkullanimisonuc").text("Butonun üzerine geldin..").css({
        "color": "brown",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
});

$(".mouseupkullanimi").mousemove(function (kordinat) {
    $(".mousemovekullanimisonuc").text(kordinat.pageX + " " + kordinat.pageY).css({
        "color": "pink",
        "font-family": "Cursive",
        "font-weight": "Bold"
    });
});
// FARE OLAYLARI - MOUSE EVENTS BİTİŞ <=

/* 8) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => OLAY NESNELERİ - EVENT OBJECT BAŞLANGIÇ
// -> event.currentTarget Kullanımı
$(".currentTargetkullanimi").click(function (event) {
    $(".currentTargetkullanimisonuc").text("Tıklanan element etiketi: " + event.currentTarget.nodeName).css({
        "color": "darkblue",
        "font-family": "cursive"
    });
});
// -> event.relatedTarget Kullanımı
$(".currentTargetkullanimi").mouseover(function (event) {
    $(".currentTargetkullanimisonuc").text("P elementine gelmeden hemen önce üzerinden geçilen element etiketi: " + event.relatedTarget.nodeName).css({
        "color": "darkblue",
        "font-family": "cursive"
    });
});
// -> event.target Kullanımı
$(".currentTargetkullanimi").click(function (event) {
    $(".eventTargetkullanimisonuc").text("Tıklanan elementin adı: " + event.target.nodeName).css({
        "color": "darkblue",
        "font-family": "cursive"
    });
});
// pageX / pageY - screenX / screenY kullanımı
$(".kordinatkutu1").css({
    "height": "150px",
    backgroundColor: "green",
    display: "inline-block"
});
$(".kordinatkutu2").css({
    "height": "150px",
    backgroundColor: "red",
    display: "inline-block"
});
$(".kordinatkutu3").css({
    "height": "150px",
    backgroundColor: "yellow",
    display: "inline-block"
});
$(".kordinatanakutu").mousemove(function (k) {
    $(".kordinatiii").text("Kordinatlar: X kordinatı: " + k.pageX + " Y kordinatı" + k.pageY + " =>");
    if ((k.pageX > 117 && k.pageX < 395) && (k.pageY > 227 && k.pageY < 377)) {
        $(".kordinatsonucu").text("Yeşil Kutunun üzerindesin");
    } else if ((k.pageX > 399 && k.pageX < 678) && (k.pageY > 227 && k.pageY < 377)) {
        $(".kordinatsonucu").text("Kırmızı Kutunun üzerindesin");
    } else if ((k.pageX > 684 && k.pageX < 962) && (k.pageY > 227 && k.pageY < 377)) {
        $(".kordinatsonucu").text("Sarı Kutunun üzerindesin");
    } else {
        $(".kordinatsonucu").text("Kutuların üzerinde değilsin, Mouseın ekrandaki kordinatı: ScreenX: " + k.screenX + " ScreenY: " + k.screenY);
    }
});
// -> altKey, shiftKey, ctrlKey Kullanımı
$(".tuskontrol").keydown(function (hangitus) {
    if (hangitus.altKey) {
        $(".tuskontrolsonucu").text("Alt tuşuna basıldı");
    } else if (hangitus.shiftKey) {
        $(".tuskontrolsonucu").text("Shift tuşuna basıldı");
    } else if (hangitus.ctrlKey) {
        $(".tuskontrolsonucu").text("Ctrl tuşuna basıldı");
    } else {
        $(".tuskontrolsonucu").text("Alt, Shift veya Ctrl tuşuna basın, basılan tuş: " + hangitus.keyCode);
    }
});
// nameSpace Kullanımı
$(".namespacesonucu").on("anaolay.tetiklenecekolay", function (event) {
    $(".namespacesonucu").text(event.namespace);
});
$(".namespacekullanimi").click(function (event) {
    $(".namespacesonucu").trigger("anaolay.tetiklenecekolay");
});
// timeStamp kullanımı
$(".timestampkullanimi").css({
    height: "150px",
    backgroundColor: "purple",
    fontFamily: "Cursive",
    fontWeight: "Bold",
    textAlign: "Center",
    color: "white"
});
let simdi, gecensure;
$(".timestampkullanimi").click(function (event) {
    gecensure = event.timeStamp - simdi;
    if (simdi) {
        $(".timestampsonucu").append("İlk Tıklama Zamanı " + event.timeStamp + "<br>");
        $(".timestampsonucu").append("İlk tıklamadan şuana gecen süre: " + gecensure + "<br>");
    } else {
        $(".timestampkullanimi").append("İki Tıklama arasındaki süre farkı için tıkla");
    }
    simdi = event.timeStamp;
    $(".timestampsonucu").append("Olay Türü tipi: " + event.type + "<br>");
});
// which kullanımı 
$(".whichkullanimi").on("keydown", function (event) {
    $(".whichsonucu").text(event.which);
});
// preventDefault Kullanımı
$(".preventDefaultkullanimi").click(function (event) {
    event.preventDefault();
    $(".preventDefaultsonucu").text("Link preventDeafault fonksiyonu ile pasif hale getirldi..");
});
// OLAY NESNELERİ - EVENT OBJECT BİTİŞ <=

/* 9) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => JQUERY EFEKT - EFFECT BAŞLANGIÇ
// -> Show Kullanımı
$(".showsonucu").css({
    display: "none",
    fontFamily: "Cursive"
});
$(".showkullanimi").click(function () {
    $(".showsonucu").show(750, function () {
        $(".showkullanimi").val("Gösterildi");
    });
});
// -> Hide Kullanımı
$(".hidesonucu").css({
    fontFamily: "Cursive"
});
$(".hidekullanimi").click(function () {
    $(".hidesonucu").hide(750, function () {
        $(".hidekullanimi").val("Gizlendi");
    });
});
// -> Toggle Kullanımı
$(".togglekullanimi").click(function () {
    let valdegerine = $(".togglekullanimi").val();
    let cssdegeri = $(".togglekullanimi").css("display");
    $(".togglesonucu").toggle(750, function () {
        if (valdegerine == "Gizle") {
            $(".togglekullanimi").val("Göster");
            $(".togglesonucu").text("Bu alan gizlendi");
        } else if (valdegerine == "Göster") {
            $(".togglekullanimi").val("Gizle");
            $(".togglesonucu").text("Bu alan gösterildi");
        }
    });
});
// -> Delay (Bekletme süresi) Kullanımı
$(".delaykullanimi").click(function () {
    $(".delaysonucu").delay(500).toggle(750, function () {
        $(".delaykullanimi").val("Delay'la bekleterek Göster / Gizle");
    });
});
// -> SlideDown Kullanımı
$(".slidedownsonucu").css({
    display: "none"
}).text("SlideDown ile efekt verildi");
$(".slidedownkullanimi").click(function () {
    $(".slidedownsonucu").slideDown(750).css({
        backgroundColor: "#abcdef",
        textAlign: "Center",
        fontFamily: "Cursive"
    });
});
// -> SlideUp Kullanımı
$(".slideupsonucu").css({
    backgroundColor: "#abcdef",
    textAlign: "Center",
    fontFamily: "Cursive"
}).text("SlideUp ile efekt verildi");
$(".slideupkullanimi").click(function () {
    $(".slideupsonucu").slideUp(750);
});
// -> SlideToggle Kullanımı
$(".slidetogglesonucu").css({
    backgroundColor: "#abcdef",
    textAlign: "Center",
    fontFamily: "Cursive",
    height: "100px"
}).text("SlideToggle ile efekt verildi");
$(".slidetogglekullanimi").click(function () {
    $(".slidetogglesonucu").slideToggle(750);
});
// -> fadeIn Kullanımı
$(".fadeinsonucu").css({
    display: "none"
}).text("fadeIn ile efekt verildi");
$(".fadeinkullanimi").click(function () {
    $(".fadeinsonucu").fadeIn(750).css({
        backgroundColor: "#abcdef",
        textAlign: "Center",
        fontFamily: "Cursive"
    });
});
// -> fadeOut Kullanımı
$(".fadeoutsonucu").css({
    backgroundColor: "#abcdef",
    textAlign: "Center",
    fontFamily: "Cursive"
}).text("fadeOut ile efekt verildi");
$(".fadeoutkullanimi").click(function () {
    $(".fadeoutsonucu").fadeOut(750);
});
// -> fadeTo Kullanımı
$(".fadetosonucu").css({
    backgroundColor: "#abcdef",
    textAlign: "Center",
    fontFamily: "Cursive",
    height: "100px"
}).text("fadeTo ile efekt verildi");
$(".fadetokullanimi").click(function () {
    $(".fadetosonucu").fadeTo('slow', 0.38); // fadeTo 0 ile 1 arasında değer alır opacity değeri
});
// -> fadeTo Kullanımı ile doğru kutuyu bulma
$(".fadeto1,.fadeto2,.fadeto3").css({
    textAlign: "Center",
    fontFamily: "Cursive",
    opacity: "0.5",
    color: "White",
    fontWeight: "Bold",
    height: "100px",
    display: "inline-block",
    cursor: "pointer"
});
$(".fadeto1").css({
    backgroundColor: "red"
}).text("Kırmızı Kutu");
$(".fadeto2").css({
    backgroundColor: "green"
}).text("Yeşil Kutu");
$(".fadeto3").css({
    backgroundColor: "yellow"
}).text("Sarı Kutu");
$(".kututikla").click(function () {
    let ortakkutu = $(this).hasClass("kututikla");
    let dogrukutu = $(this).hasClass("fadeto3");
    if (dogrukutu == true && ortakkutu == true) {
        $(".fadeto3").fadeTo("slow", 0.9);
        $(".fadeto2,.fadeto1").fadeTo("slow", 0.1);
    } else {
        $(".fadeto2,.fadeto1,.fadeto3").fadeTo("fast", 0.25);
    }
});
// -> FadeToggle Kullanımı
$(".fadetogglesonucu").css({
    backgroundColor: "#abcdef",
    textAlign: "Center",
    fontFamily: "Cursive"
}).text("fadeToggle ile efekt verildi");
$(".fadetogglekullanimi").click(function () {
    $(".fadetogglesonucu").fadeToggle(750);
});
// -> Stop Kullanımı
$(".stosonucu").css({
    display: "none"
});
$(".fadeinstopkullanimi").click(function () {
    $(".stopsonucu").text("fadeIn ile efekt verildi").fadeIn(5550).css({
        backgroundColor: "#abcdef",
        textAlign: "Center",
        fontFamily: "Cursive"
    });
});
$(".stopkullanimi").click(function () {
    $(".stopsonucu").stop(); // birden fazla animasyon verilmişse ilk animasyonu tek bitiriyor sonrakiler devam ediyor.
    //$(".stopsonucu").finish(); // verilen bütün animasyonları durdurup animasyon sonunda belirtilen hale gelir.
});
// -> Queue / dequeue / clearQueue Kullanımı
$(".queuesonucu").css({
    backgroundColor: "#abcdef",
    textAlign: "Center",
    fontFamily: "Cursive",
    height: "100px",
    width: "100px",
    borderRadius: "50%"
});
$(".queuekullanimi").click(function () {
    $(".queuesonucu").animate({
        marginLeft: "+=85px"
    });
    $(".queuesonucu").animate({
        marginTop: "+=121px"
    });
    $(".queuesonucu").animate({
        marginLeft: "-=65px"
    }).queue(function () {
        $(".queuesonucu").text("Queue ile durduruldu");
        $(this).dequeue(); // Animasyonu devam ettiriyor
        $(".queuesonucu").clearQeueue(); // Animasyonu olduğu yerden bitirip en başa götürür.
    });
    $(".queuesonucu").animate({
        marginTop: "-=105px"
    });
    $(".queuesonucu").animate({
        marginLeft: "-=105px"
    });
});
// JQUERY EFEKT - EFFECT BİTİŞ <=

/* 10) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => FORM OLAYLARI - (FORM EVENTS) BAŞLANGIÇ
// -> Blur Kullanımı nesneden başka bir nesneye geçildiğinde olay gerçekleşir
$(".blurkullanimi").blur(function () {
    let bluradkontrol = "Hasan";
    let blurgirilenad = $(".blurkullanimi").val();
    if (bluradkontrol == blurgirilenad) {
        $(".blursonucu").text("Tebrikler Adınızı doğru girdiniz: " + blurgirilenad);
    } else {
        $(".blursonucu").text("Adınızı yanlış girdiniz: " + blurgirilenad);
    }
});
// -> Change Kullanımı nesne içeriği değiştirilip çıkıldığında olay gerçekleşir
$(".changekullanimi").change(function () {
    let cgd = $(".changekullanimi").val();
    $(".changesonucu").text("Değiştirilen nesne karakter sayısı: " + (cgd.length));
});
// -> Focus Kullanımı nesneye odaklandığında olay gerçekleşir
$(".focusadkullanimi").focus(function () {
    let focugirilenad = $(".focusadkullanimi").val();
    $(".focussonucu").text("Odaklanılan Alan Ad alanı: " + (focugirilenad));
});
$(".focussoyadkullanimi").focus(function () {
    let focugirilensoyad = $(".focussoyadkullanimi").val();
    $(".focussonucu").text("Odaklanılan Alan Soyad alanı: " + (focugirilensoyad));
});
// -> Select Kullanımı nesne içeriği seçildiğinde olay gerçekleşir
$(".selectkullanimi").select(function () {
    document.execCommand("copy"); // Seçili alanın kopyalanmasını sağlar
    $(".selectsonucu").text("Kopyalama Başarılı");
});
// -> Submit Kullanimi
$("#submitkullanimi").submit(function (event) {
    let adsubmit = $(".submitkullanimiad").val();
    let soyadsubmit = $(".submitkullanimisoyad").val();
    let adkarakter = adsubmit.length;
    let soyadkarakter = soyadsubmit.length;
    if (adkarakter >= 6 && soyadkarakter >= 8) {
        $(".submitsonucu").text("Veriler istenilen uzunlukta");
    } else {
        $(".submitsonucu").text("Ad uzunluğu: " + adkarakter + " Soyad Uzunluğu: " + soyadkarakter + " ad 6 karakterden kısa ve şifre 8 karakterden kısa olamaz");
        event.preventDefault();
    }
});
// FORM OLAYLARI - (FORM EVENTS) BİTİŞ <= 

/* 11) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => ÖLÇÜLENDİRME DIMESIONS - (KONUMLANDIRMA) OFFSET BAŞLANGIÇ
// -> Width, Height Kullanımı Nesneleri Ölçülendirme
$(".heightwidthkullanimi").css({
    height: "50px",
    width: "200px",
    backgroundColor: "purple",
    marginTop: "15px",
    marginLeft: "98px"
});
$(".heightwidthbutonu").click(function () {
    let yukseklik = $(".heightwidthkullanimi").height();
    let genislik = $(".heightwidthkullanimi").width();
    $(".heightwidthsonucu").text("Yükseklik: " + yukseklik + "px Genişlik: " + genislik + "px");
});
// -> Offset ile Kordinat Alıp Nesne Pozisyonladırma Kullanımı
$(".offsetbutonu").click(function () {
    let soldanuzaklik = $(".heightwidthkullanimi").offset().left;
    let yukaridanuzaklik = $(".heightwidthkullanimi").offset().top;
    $(".offsetsonucu").text("Soldan uzaklık: " + soldanuzaklik + "px Üstten Uzaklık: " + yukaridanuzaklik + "px");
    $(".heightwidthkullanimi").offset({ //offset ile konum değiştililebilir
        left: 300,
        top: 500
    });
});
// -> Position Kullanımı içinde bulunduğu neseneye göre konumu
$(".positionkullanimi").css({
    marginLeft: "25px",
    marginTop: "15px"
});
$(".positionbutonu").click(function () {
    let soldanuzaklikp = $(".positionkullanimi").position().left;
    let yukaridanuzaklikp = $(".positionkullanimi").position().top;
    $(".positionsonucu").text("Soldan uzaklık: " + soldanuzaklikp + "px Üstten Uzaklık: " + yukaridanuzaklikp + "px");
});
// -> ScrollTop, ScrollLeft Kullanımı
$(".scrollkullanimi").css({
    width: "250px",
    height: "150px",
    overflow: "scroll"
});
$(".scrollkullanimi").scrollTop(559);
$(".scrollkullanimi").scrollLeft(55);
// ÖLÇÜLENDİRME DIMESIONS - (KONUMLANDIRMA) OFFSET BİTİŞ <=

/* 12) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => JQUERY AJAX BAŞLANGIÇ
// -> $.POST Metoduyla Veri Gönderme ve Alma İşlemi
$("#ajaxformgonderpost").click(function () {
    $.ajax({
        type: "post", // veri gönderim şekli post ve get
        url: "islem.php", // verinin gönderileceği yer
        data: $("#ajax_islemipost").serialize(), // çoklu veri gönderiminde serialize kullanılır
        success: function (cevap) { //işlem başarılı ise fonsiyonu çalıştır
            $(".ajaxsonucupost").text("Formdan Gelenler: " + cevap);
        }
    });
});
// -> $.GET Metoduyla Veri Gönderme ve Alma İşlemi
$("#ajaxformgonderget").click(function () {
    $.ajax({
        type: "get",
        url: "islem.php?kullanici_id=21",
        data: $("#ajaxislemiget").serialize(),
        success: function (sonucget) {
            $(".ajaxsonucuget").text("Formdan Gelenler: " + sonucget);
            if (sonucget) { // işlem gerçekleştikten sonra form içeriğini siler
                $("#ajaxadi").val("");
                $("#ajaxsoyadi").val("");
            }
        }
    });
});
// load / SetInterval Süreli Süresiz Veri Çekme
setInterval(function () { // Belirli bir süre ile aralıklı olarak belirtilen sayfadan veri çeker
    $(".ajaxloadsetintervalsonucu").load("veriler.php .ajaxloadsetintervalcekilecekveriler,#bunucekload");
}, 3000);
$("#alsverigetir").click(function () {
    $(".ajaxloadsonucu").load("veriler.php #bunucekload");
});
// => JQUERY AJAX BİTİŞ

/* 12) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => JQUERY, AJAX, PHP VE BOOTSTRAP İLE ÜYE KAYIT, DÜZENLEME VE SİLME BAŞLANGIÇ
// -> Kayıt oluşturma
$("#liste").load("veriler.php .tabloyucek"); // veriler.php sayfasından .tabloyucek classının içindeki verileri #liste elementinin içine ekle
$("#kayitformu").hide();
$("#kayitduzenlekutu").hide();
$(".bosalert").hide();
$(".kayitbasarili").hide();
$("#silmebasarili").hide();
$(".yenikayit").click(function () {
    $("#liste").fadeOut(500);
    $("#kayitformu").fadeIn(500);
    $("#kayitduzenlekutu").hide();
    $(".bosalert").hide();
    $(".kayitbasarili").hide();
    $("#silmebasarili").hide();
});
$(".geridon").click(function () {
    $("#liste").fadeIn(500);
    $("#kayitformu").fadeOut(500);
    $("#kayitduzenlekutu").hide();
    $(".bosalert").hide();
    $(".kayitbasarili").hide();
});
$("#kayitekle").click(function (event) {
    if ($(".ad-ekle").val() == "" || $(".soyad-ekle").val() == "" || $(".kadi-ekle").val() == "") {
        $(".kayitbasarili").hide();
        $(".bosalert").fadeIn(500);
        $(".bosalert").text("Kayıt alanlarını boş bırakamazsınız...").delay(5000).fadeOut(500);
        event.preventDefault();
    } else {
        $.ajax({
            type: "post",
            url: "islem.php",
            data: $("#yenikayit").serialize(),
            success: function (kayitsonuc) {
                $(".bosalert").hide();
                $(".kayitbasarili").fadeIn(500);
                $(".kayitbasarili").text("Kayıt başarıyla veritabınına eklendi...").delay(5000).fadeOut(500); // alert delay ile 5 saniye bekledikten sonra yarım saniyede kaybolur
                $("#liste").load("veriler.php .tabloyucek"); // verilere geri döndüğünde yeni eklenen nesneleride göstersin
                if (kayitsonuc) { // işlem gerçekleştikten sonra form içeriğini siler
                    $(".ad-ekle").val("");
                    $(".soyad-ekle").val("");
                    $(".kadi-ekle").val("");
                }
            }
        });
    }
});
// -> Kayıt Silme
$("body").on("click", ".kayitsil", function () { //tablo dışarıdan load ile dahil edildiği için on fonksiyonu ile body alanı seçilip ilgili nesne seçilip dahil edilen nesneye click özelliği veriliyor
    let kayitsilid = $(this).attr("id");
    //let parent = $(this).parent(".tabloyucek").parent("tr").parent("td");
    $.ajax({
        type: "post",
        url: "islem.php",
        data: {
            'kayitsilid': kayitsilid
        },
        success: function (silmesonuc) {
            $("#silmebasarili").fadeIn(500);
            $("#silmebasarili").text("Kayıt başarıyla veritabanından silindi...").delay(5000).fadeOut(500);
            //parent.fadeOut("slow",1000);
            $("#liste").load("veriler.php .tabloyucek");
        }
    });
});
// -> Kayıt Düzenlememe formuna verileri getirme
$("body").on("click", ".kayitduzenle", function (event) {
    let kayitduzenleid = $(this).attr("id");
    $("#liste").fadeOut(500);
    $("#kayitduzenlekutu").fadeIn(500);
    $.ajax({
        type: "post",
        url: "islem.php",
        data: {
            'kayitduzenleid': kayitduzenleid
        },
        success: function (duzenlemesonuc) {
            let obj = JSON.parse(duzenlemesonuc);
            $("#ad_duzenle").val(obj.kayitadi);
            $("#soyad_duzenle").val(obj.kayitsoyadi);
            $("#idduzenle").val(kayitduzenleid);
        }
    });
});
// -> Kayıt Düzenleme form veritabanını güncelleme alanı
$("#duzenlebuton").click(function (event) {
    if ($(".ad_duzenle").val() == "" || $(".soyad_duzenle").val() == "") {
        $(".kayitbasarili").hide();
        $(".bosalert").fadeIn(500);
        $(".bosalert").text("Alanları boş bırakamazsınız...").delay(5000).fadeOut(500);
        event.preventDefault();
    } else {
        $.ajax({
            type: "post",
            url: "islem.php",
            data: $("#duzenlemeform").serialize(),
            success: function (duzenlesonuc) {
                $(".bosalert").hide();
                $(".kayitbasarili").fadeIn(500);
                $(".kayitbasarili").text("Kayıt başarıyla güncellendi...").delay(5000).fadeOut(500);
                $("#liste").load("veriler.php .tabloyucek");
            }
        });
    }
});
// JQUERY, AJAX, PHP VE BOOTSTRAP İLE ÜYE KAYIT, DÜZENLEME VE SİLME BİTİŞ <=

/* 13) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// => JQuery UI (User Interface) BAŞLANGIÇ
// -> JQuery UI Accordion
$(".accordionkullanimi").accordion();
// -> JQuery UI Autocomplate
let otomatikAlinacakKelimeler = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"
];
$(".autocompletekullanimi").autocomplete({
    source: otomatikAlinacakKelimeler,
    minLength: 2 // en az kaç karakter girileceğini belirtir belirtilmezse ilk harften başlar
});
// -> JQuery UI Datapicker tarih seçme aracı
$(".datepickerkullanimi").datepicker({
    monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
    dayNames: [ "Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi" ],
    dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
    firstDay:1,
    showButtonPanel:true, // Butonları gösterme
    changeMonth:true, // üstte ay gösterme
    changeYear:true, // yıl gösterme
    numberOfMonths:1, // iki ayı birden gösterir
    showWeek:true,
    altField:".datepickerkullanimiayrinti",
    altFormat:"DD, d MM, yy",
});
// -> JQuery UI Dialog
$(".dialogkullanimi").css({display:"none"});
$(".dialogkullanimigoster").click(function(){
    $(".dialogkullanimi").dialog();
});
// -> JQuery UI Progressbar
$(".progressbarkullanimi").progressbar({
    value:78
});
// -> JQuery UI Tabs
$(".tabskullanimi").tabs({
    //event:"mouseover" // tıklama yerine mouse ile üzerine gidince komut çalışır
});
// -> JQuery UI draggable Nesneye Hareket Kazandırma
$(".draggablekullanimi").css({
    backgroundColor:"#faa216",
    height:"100px"
});
$(".draggablekullanimi").draggable();
// -> droppable Nesneye Hareketini Konumlandırma ve Olay Oluşturma
$(".droppablekullanimi").css({
    backgroundColor:"#581216",
    height:"150px"
});
$(".droppablekullanimisonuc").text("Mavi Kutuyu Kahverengi Kutuya Sürükle..");
$(".droppablekullanimi").droppable({
    accept:".droppablekullanimi2", // sadece belirtilen nesneye izin verir accept kullanılmazsa draggable özelliği olan bütün nesneleri kabul eder
    drop:function() {
        $(".droppablekullanimi").css({
            backgroundColor:"#342165",
            height:"150px",
        });
        $(".droppablekullanimisonuc").css({
            fontSize:"Bold"
        }).text("Mavi Kutu Kahverengi Kutunun Üzerine Geldi Kutunun Rengi Değişti..");
    }
});
$(".droppablekullanimi2").css({
    backgroundColor:"#216faa",
    height:"50px"
});
$(".droppablekullanimi2").draggable({
    revert:"invalid" // draggable ile revert kullanıldığında nesneyi hedefe gitmeden bıraktığında başladığı yere geri gider
});
// -> JQuery UI Resizeable
$(".resizablekullanimi").css({
    backgroundColor:"#313131",
    color:"white",
    padding:"15px"
});
$(".resizablekullanimi").resizable();
// -> JQuery UI selectable
$(".selectablekullanimi").selectable();
// -> JQuery UI sortable
$(".sortablekullanimi").sortable(); // listedeki elemanların yerini sürükleyerek değişitirmek
// JQuery UI (User Interface) BİTİŞ <=

/* PROJE) >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
// 140 KARAKTER SINIRLI MESAJ ALANI YAPIMI BAŞLANGIÇ
$(".yuzkirkkarakter").keyup(function() {
    let karatersiniri=140;
    let metin = $(this).val();
    let bosluksuzmetin = metin.replace(/ /g,'').trim().length;
    $(".karaktersayisi").text(bosluksuzmetin);
    if(karatersiniri >= bosluksuzmetin) {

    } else {
        if(bosluksuzmetin>=140){
           // $(".yuzkirkkarakter").attr("maxlength", metin.length);
        }
        $(".karaktersayisi").text(bosluksuzmetin+" > 140 Karakteri aşamazsınız");
        
    }
});
// 140 KARAKTER SINIRLI MESAJ ALANI YAPIMI BİTİŞ