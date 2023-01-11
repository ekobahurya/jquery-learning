<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - ÖLÇÜLENDİRME DIMESIONS - (KONUMLANDIRMA) OFFSET KULLANIMI</h1>
                <h2 id="secicibaslik">Width, Height Kullanımı Nesneleri Ölçülendirme</h2>
                <input type="submit" class="btn btn-success heightwidthbutonu" value="Ölçüleri Getir">
                <b class="heightwidthsonucu"></b>
                <div class="heightwidthkullanimi">
                    <p class="positionkullanimi">Bu elemanın Konumu nedir?</p>
                </div>
                <br>
                <code>
                <b>Width, Height Kullanımı Kod Çıktısı</b><br>
                $(".heightwidthbutonu").click(function(){<br>
                    let yukseklik = $(".heightwidthkullanimi").height();<br>
                    let genislik = $(".heightwidthkullanimi").width();<br>
                    $(".heightwidthsonucu").text("Yükseklik: "+yukseklik+"px Genişlik: "+genislik+"px");<br>
                });
                </code>
                <h2 id="secicibaslik">Offset ile Kordinat Alıp Nesne Pozisyonladırma Kullanımı</h2>
                <input type="submit" class="btn btn-success offsetbutonu" value="Ölçüleri Getir">
                <b class="offsetsonucu"></b>
                <br>
                <code>
                <b>Offset Kullanımı Kod Çıktısı</b><br>
                $(".offsetbutonu").click(function(){<br>
                    let soldanuzaklik = $(".heightwidthkullanimi").offset().left;<br>
                    let yukaridanuzaklik = $(".heightwidthkullanimi").offset().top;<br>
                    $(".offsetsonucu").text("Soldan uzaklık: "+soldanuzaklik+"px Üstten Uzaklık: "+yukaridanuzaklik+"px");<br>
                    $(".heightwidthkullanimi").offset({ //offset ile konum değiştililebilir<br>
                        left:300,<br>
                        top:500<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">Position Kullanımı</h2>
                <input type="submit" class="btn btn-success positionbutonu" value="Ölçüleri Getir">
                <b class="positionsonucu"></b>
                <br>
                <code>
                <b>Position Kullanımı Kod Çıktısı</b><br>
                $(".positionbutonu").click(function(){<br>
                    let soldanuzaklikp = $(".positionkullanimi").position().left;<br>
                    let yukaridanuzaklikp = $(".positionkullanimi").position().top;<br>
                    $(".positionsonucu").text("Soldan uzaklık: "+soldanuzaklikp+"px Üstten Uzaklık: "+yukaridanuzaklikp+"px");<br>
                });
                </code>
                <h2 id="secicibaslik">ScrollTop, ScrollLeft Kullanımı</h2>
                <div class="scrollkullanimi">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti adipisci blanditiis eligendi eos laborum. Quis minus ab quo eum mollitia, minima, alias dignissimos, harum similique laudantium distinctio. Porro, iure!

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti adipisci blanditiis eligendi eos laborum. Quis minus ab quo eum mollitia, minima, alias dignissimos, harum similique laudantium distinctio. Porro, iure!

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti adipisci blanditiis eligendi eos laborum. Quis minus ab quo eum mollitia, minima, alias dignissimos, harum similique laudantium distinctio. Porro, iure!

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deleniti adipisci blanditiis eligendi eos laborum. Quis minus ab quo eum mollitia, minima, alias dignissimos, harum similique laudantium distinctio. Porro, iure!
                </div>
                <br>
                <code>
                <b>Position Kullanımı Kod Çıktısı</b><br>
                $(".positionbutonu").click(function(){<br>
                    let soldanuzaklikp = $(".positionkullanimi").position().left;<br>
                    let yukaridanuzaklikp = $(".positionkullanimi").position().top;<br>
                    $(".positionsonucu").text("Soldan uzaklık: "+soldanuzaklikp+"px Üstten Uzaklık: "+yukaridanuzaklikp+"px");<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>