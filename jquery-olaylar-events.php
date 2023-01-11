<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - OLAYLAR - EVENTS</h1>
                <h2 id="secicibaslik">-> On Olay Yakalayıcı ve Olay Sonlandırıcı Kullanımı</h2>
                <div class="col-md-12" id="butonalani">
                <button class="btn btn-success onolayi" id="onolayi">Buton Oluştur</button>
                <hr>
                <button class="btn btn-danger" id="offolayi">Buton Pasif Hale Grtir</button>
                </div>
                <br>
                <code>
                <b>On Olay Yakalayıcı Kullanımı Kod Çıktısı</b><br>
                $("#butonalani").on('click','button', function(){<br>
                    $(".onolayi").after("< button class='btn btn-success'>Buton Oluştur</ button>");<br>
                });<br>
                <b>On Olay Sonlandırıcı Kullanımı Kod Çıktısı</b><br>
                $("#butonalani").on('click','#offolayi', function(){ <br>
                    $("#butonalani").off(); <br>
                });
                </code>
                <h2 id="secicibaslik">-> One Olay Kısıtlayıcı Kullanımı</h2>
                <div class="col-md-12" id="inputalani">
                <input type="file" class="form-control col-md-4 oneolayi">
                <br>
                <button class="btn btn-success oneinputolustur">İnput Oluştur</button>
                </div>
                <code>
                <b>One Olay Kısıtlayıcı Kullanımı Kod Çıktısı</b><br>
                $(".oneinputolustur").one('click', function(){<br>
                    $(".oneolayi").after("< br>< br>< input type='file' class='form-control col-md-4'>");<br>
                });
                </code>
                <h2 id="secicibaslik">-> Trigger Kullanımı</h2>
                <button class="btn btn-success" id="btn1">Buton 1</button>
                <button class="btn btn-success" id="btn2">Buton 2</button>
                <p class="triggeryazdir"></p>
                <code>
                <b>Trigger Kullanımı Kod Çıktısı</b><br>
                $("#btn1").click(function(){<br>
                    $(".triggeryazdir").text("Buton bire tıkladın");<br>
                });<br>
                $("#btn2").click(function(){<br>
                    $("#btn1").trigger('click');<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>