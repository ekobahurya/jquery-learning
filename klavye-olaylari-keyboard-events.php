<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - KLAVYE OLAYLARİ (KEYBOARD EVENTS)</h1>
                <h2 id="secicibaslik">Keydown Kullanımı</h2>
                <input class="keydownkullanimi" type="text" placeholder="Bir Tuşa basın">
                <p class="keydownkullanimisonuc"></p>
                <code>
                <b>Keydown Kullanimi Kod Çıktısı</b><br>
                $(".keydownkullanimi").keydown(function(){<br>
                    $(".keydownkullanimisonuc").text("Tuşa Basıldı");<br>
                });<br><br>
                $(".keydownkullanimi").keydown(function (hangiharf) {<br>
                    $(".keydownkullanimisonuc").text("Tuşa Basıldı" + hangiharf.keyCode);<br>
                    if (hangiharf.keyCode == 37) {<br>
                        $(".keypressanimasyonkutusu").fadeIn(1000).animate({<br>
                            "marginLeft": "-=10px"<br>
                        });<br>
                    } else if (hangiharf.keyCode == 38) {<br>
                        $(".keypressanimasyonkutusu").fadeIn(1000).animate({<br>
                            "margin-top": "-=10px"<br>
                        });<br>
                    } else if (hangiharf.which == 39) {<br>
                        $(".keypressanimasyonkutusu").fadeIn(1000).animate({<br>
                            "margin-left": "+=10px"<br>
                        });<br>
                    } else if (hangiharf.keyCode == 40) {<br>
                        $(".keypressanimasyonkutusu").fadeIn(1000).animate({<br>
                            "marginTop": "+=10px"<br>
                        });<br>
                    }<br>
                });
                </code>
                <h2 id="secicibaslik">Keypress Kullanımı</h2>
                <div class="keypressanimasyonkutusu"></div>
                <p class="keypresskullanimisonuc"></p>
                <code>
                <b>Keypress Kullanimi Kod Çıktısı</b><br>
                $(".keydownkullanimi").keypress(function(event){<br>
                // $(".keypresskullanimisonuc").append("Tuşu Bırak");<br>
                $(".keypressanimasyonkutusu").fadeIn(2000).animate({<br>
                        "margin-left":"+=10px"<br>
                });<br>
                });
                </code>
                <h2 id="secicibaslik">Keyup Kullanımı</h2>
                <code>
                <b>Keyup Kullanimi Kod Çıktısı</b><br>
                $(".keydownkullanimi").keyup(function(){<br>
                    $(".keypressanimasyonkutusu").text("The End");<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>