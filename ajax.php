<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - AJAX</h1>
                <h2 id="secicibaslik">-> $.POST Metoduyla Veri Gönderme ve Alma İşlemi</h2>
                <form action="" method="post" id="ajax_islemipost">
                    <input type="text" name="ad" class="form-control" placeholder="adınızı girin">
                    <br>
                    <input type="text" name="soyad" class="form-control" placeholder="soyadınızı girin">
                    <br>
                    <input type="button" class="btn btn-success" id="ajaxformgonderpost" value="Gönder">
                </form>
                <b class="ajaxsonucupost"></b>
                <br>
                <code>
                <b>$.POST Metoduyla Veri Gönderme ve Alma İşlemi Kod Çıktısı</b><br>
                $("#ajaxformgonder").click(function(){<br>
                    $.ajax({<br>
                        type:"post", // veri gönderim şekli post ve get<br>
                        url:"islem.php", // verinin gönderileceği yer<br>
                        data:$("#ajax_islemi").serialize(), // çoklu veri gönderiminde serialize kullanılır<br>
                        success:function(cevap){ //işlem başarılı ise fonsiyonu çalıştır<br>
                            $(".ajaxsonucu").text(cevap);<br>
                        }<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">-> $.GET Metoduyla Veri Gönderme ve Alma İşlemi</h2>
                <form action="" method="get" id="ajaxislemiget">
                    <input type="text" id="ajaxadi" name="adi" class="form-control" placeholder="adınızı girin">
                    <br>
                    <input type="text" id="ajaxsoyadi" name="soyadi" class="form-control" placeholder="soyadınızı girin">
                    <br>
                    <input type="button" class="btn btn-success" id="ajaxformgonderget" value="Gönder">
                </form>
                <b class="ajaxsonucuget"></b>
                <br>
                <code>
                <b>$.GET Metoduyla Veri Gönderme ve Alma İşlemi Kod Çıktısı</b><br>
                $("#ajaxformgonderget").click(function(){<br>
                    $.ajax({<br>
                        type:"get",<br>
                        url:"islem.php?kullanici_id=21",<br>
                        data:$("#ajaxislemiget").serialize(),<br>
                        success:function(sonucget){<br>
                            $(".ajaxsonucuget").text("Formdan Gelenler: "+sonucget);<br>
                            if (sonucget) { // işlem gerçekleştikten sonra form içeriğini siler<br>
                                $("#ajaxadi").val("");<br>
                                $("#ajaxsoyadi").val("");<br>
                            }<br>
                        }<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">-> load / SetInterval Süreli Süresiz Veri Çekme</h2>
                <button class="btn btn-success" id="alsverigetir">Veriyi Çek</button>
                <b class="ajaxloadsonucu"></b>
                <br>
                <b class="ajaxloadsetintervalsonucu"></b>
                <br>
                <code>
                <b>load / SetInterval Süreli Süresiz Veri Çekme Kod Çıktısı</b><br>
                setInterval(function () { // Belirli bir süre ile aralıklı olarak belirtilen sayfadan veri çeker<br>
                    $(".ajaxloadsetintervalsonucu").load("veriler.php .ajaxloadsetintervalcekilecekveriler,#bunucekload");<br>
                }, 3000);<br>
                $("#alsverigetir").click(function () {<br>
                    $(".ajaxloadsonucu").load("veriler.php #bunucekload");<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>