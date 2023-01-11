<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - FORM OLAYLARI (FORM EVENTS) KULLANIMI</h1>
                <h2 id="secicibaslik">Blur Kullanımı</h2>
                <input type="text" class="form-control blurkullanimi" placeholder="Adınızı Giriniz">
                <b class="blursonucu"></b>
                <br>
                <code>
                <b>Blur Kullanımı Kod Çıktısı</b><br>
                $(".blurkullanimi").blur(function(){<br>
                    let bluradkontrol = "Hasan";<br>
                    let blurgirilenad = $(".blurkullanimi").val();<br>
                    if(bluradkontrol == blurgirilenad) {<br>
                        $(".blursonucu").text("Tebrikler Adınızı doğru girdiniz: "+blurgirilenad);<br>
                    } else {<br>
                        $(".blursonucu").text("Adınızı yanlış girdiniz: "+blurgirilenad);<br>
                    }  <br>
                });
                </code>
                <h2 id="secicibaslik">Change Kullanımı</h2>
                <input type="text" class="form-control changekullanimi" placeholder="Birşeyler Giriniz">
                <b class="changesonucu"></b>
                <br>
                <code>
                <b>Change Kullanımı Kod Çıktısı</b><br>
                $(".changekullanimi").change(function(){<br>
                    let cgd = $(".changekullanimi").val();<br>
                    $(".changesonucu").text("Değiştirilen nesene karakter sayısı: "+(cgd.length));<br>
                });
                </code>
                <h2 id="secicibaslik">Focus Kullanımı</h2>
                <input type="text" class="form-control focusadkullanimi" placeholder="Ad Giriniz">
                <br>
                <input type="text" class="form-control focussoyadkullanimi" placeholder="Soyad Giriniz">
                <b class="focussonucu"></b>
                <br>
                <code>
                <b>Focus Kullanımı Kod Çıktısı</b><br>
                $(".focusadkullanimi").focus(function(){<br>
                    let focugirilenad = $(".focusadkullanimi").val();<br>
                    $(".focussonucu").text("Odaklanılan Alan Ad alanı: "+(focugirilenad));  <br> 
                });<br>
                $(".focussoyadkullanimi").focus(function(){<br>
                    let focugirilensoyad = $(".focussoyadkullanimi").val();<br>
                    $(".focussonucu").text("Odaklanılan Alan Soyad alanı: "+(focugirilensoyad));   <br>
                });
                </code>
                <h2 id="secicibaslik">Select Kullanımı</h2>
                <input type="text" class="form-control selectkullanimi" placeholder="Birşeyler Giriniz">
                <b class="selectsonucu"></b>
                <br>
                <code>
                <b>Select Kullanımı Kod Çıktısı</b><br>
                $(".selectkullanimi").select(function(){<br>
                    document.execCommand("copy"); // Seçili alanın kopyalanmasını sağlar<br>
                    $(".selectsonucu").text("Kopyalama Başarılı");<br>
                });
                </code>
                <h2 id="secicibaslik">Submit Kullanımı</h2>
                <form action="https://www.google.com.tr/" id="submitkullanimi">
                    <input type="text" class="form-control submitkullanimiad" placeholder="Adınızı Giriniz">
                    <input type="text" class="form-control submitkullanimisoyad" placeholder="Soyadınızı Giriniz">
                    <input type="submit" class="btn btn-success submitkullanimi" value="Gönder">
                </form>
                
                <b class="submitsonucu"></b>
                <br>
                <code>
                <b>Select Kullanımı Kod Çıktısı</b><br>
                $("#submitkullanimi").submit(function(event){<br>
                    let adsubmit = $(".submitkullanimiad").val();<br>
                    let soyadsubmit = $(".submitkullanimisoyad").val();<br>
                    let adkarakter = adsubmit.length;<br>
                    let soyadkarakter = soyadsubmit.length;<br>
                    if (adkarakter>=6 && soyadkarakter>=8) {<br>
                        $(".submitsonucu").text("Veriler istenilen uzunlukta");<br>
                    } else {<br>
                        <br>  $(".submitsonucu").text("Ad uzunluğu: "+adkarakter+" Soyad Uzunluğu: "+soyadkarakter+" ad 6 karakterden kısa ve şifre 8 karakterden kısa olamaz");
                        event.preventDefault();<br>
                    }<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>