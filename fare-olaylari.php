<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - FARE OLAYLARI (MOUSE EVENTS)</h1>
                <h2 id="secicibaslik">Click Kullanımı</h2>
                <button class="clickkullanimi btn btn-warning">Tıkla</button>
                <!-- <input class="clickkullanimi" type="submit" value="Tıkla"> -->
                <b class="clickkullanimisonuc"></b>
                <br>
                <code>
                <b>Click Kullanımı Kod Çıktısı</b><br>
                $(".clickkullanimi").click(function(){<br>
                    $(".clickkullanimisonuc").text("Butona Tıklanıldı..").css({<br>
                        "color":"orange",<br>
                        "font-family":"Cursive",<br>
                        "font-weight":"Bold"<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">Dblclick Kullanımı</h2>
                <input class="dblclickkullanimi btn btn-warning" type="submit" value="Çift Tıkla">
                <b class="dblclickkullanimisonuc"></b>
                <br>
                <code>
                <b>Dbllick Kullanımı Kod Çıktısı</b><br>
                $(".dblclickkullanimi").dblclick(function(){<br>
                    $(".dblclickkullanimisonuc").text("Butona Çift Tıklanıldı..").css({<br>
                        "color":"orange",<br>
                        "font-family":"Cursive",<br>
                        "font-weight":"Bold"<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">Hover Kullanımı</h2>
                <input class="hoverkullanimi btn btn-warning" type="submit" value="Üzerine Gel..">
                <b class="hoverkullanimisonuc"></b>
                <br>
                <code>
                <b>Hover Kullanımı Kod Çıktısı</b><br>
                $(".hoverkullanimi").hover(function(){<br>
                    $(".hoverkullanimisonuc").text("Butonun üzerine gelindi..").css({<br>
                        "color":"purple",<br>
                        "font-family":"Cursive",<br>
                        "font-weight":"Bold"<br>
                    });<br>
                });<br><br>
                $(".hoverkullanimi").hover(uzerinde, cekildiginde);
                <br><br>
                function uzerinde() {<br>
                    $(".hoverkullanimisonuc").text("Butonun üzerine geldin..").css({<br>
                        "color": "purple",<br>
                        "font-family": "Cursive",<br>
                        "font-weight": "Bold"<br>
                    });<br>
                }<br><br>

                function cekildiginde() {<br>
                    $(".hoverkullanimisonuc").text("Butonun üzerinden gittin..").css({<br>
                        "color": "brown",<br>
                        "font-family": "Cursive",<br>
                        "font-weight": "Bold"<br>
                    });<br>
                }
                </code>
                <h2 id="secicibaslik">MouseDown Kullanımı</h2>
                <input class="mousedownkullanimi btn btn-warning" type="submit" value="Tıkla">
                <b class="mousedownkullanimisonuc"></b>
                <br>
                <code>
                <b>MouseDown Kullanımı Kod Çıktısı</b><br>
                $(".mousedownkullanimi").mousedown(function (event) {<br><br>

                $(".mousedownkullanimisonuc").css({<br>
                    "color": "green",<br>
                    "font-family": "Cursive",<br>
                    "font-weight": "Bold"<br>
                });<br><br>

                switch (event.which) {<br>
                    case 1:<br>
                    $(".mousedownkullanimisonuc").text("Sol mouse tuşuna basıldı..");<br>
                    break;<br><br>

                    case 2:<br>
                    $(".mousedownkullanimisonuc").text("Orta mouse tuşuna basıldı..");<br>
                    break;<br><br>

                    case 3:<br>
                    $(".mousedownkullanimisonuc").text("Sağ mouse tuşuna basıldı..");<br>
                    break;<br><br>
                }<br>
                });
                </code>
                <h2 id="secicibaslik">Mouseup / Mouseout / Mouseenter / Mousemove Kullanımı</h2>
                <input class="mouseupkullanimi btn btn-warning" type="submit" value="Butona Basılı Tut">
                <b class="mouseupkullanimisonuc"></b>
                <p class="mousemovekullanimisonuc"></p>
                <code>
                <b>Mouseup / Mouseout / Mouseenter / Mousemove Kullanımı Kod Çıktısı</b><br>
                $(".mouseupkullanimi").mousedown(function(){<br>
                    $(".mouseupkullanimisonuc").text("Butona Basıldı..").css({<br>
                        "color": "darkgray",<br>
                        "font-family": "Cursive",<br>
                        "font-weight": "Bold"<br>
                    });<br>
                });<br><br>

                $(".mouseupkullanimi").mouseup(function(){<br>
                    $(".mouseupkullanimisonuc").text("Buton Bırakıldı..").css({<br>
                        "color": "darkblue",<br>
                        "font-family": "Cursive",<br>
                        "font-weight": "Bold"<br>
                    });<br>
                });<br><br>

                $(".mouseupkullanimi").mouseout(function(){<br>
                    $(".mouseupkullanimisonuc").text("Butonun üzerinden çekildin..").css({<br>
                        "color": "darkgreen",<br>
                        "font-family": "Cursive",<br>
                        "font-weight": "Bold"<br>
                    });<br>
                });<br<br>

                $(".mouseupkullanimi").mouseenter(function(){<br>
                    $(".mouseupkullanimisonuc").text("Butonun üzerine geldin..").css({<br>
                        "color": "brown",<br>
                        "font-family": "Cursive",<br>
                        "font-weight": "Bold"<br>
                    });<br>
                });<br><br>

                $(".mouseupkullanimi").mousemove(function(kordinat){<br>
                    $(".mousemovekullanimisonuc").text(kordinat.pageX+" "+kordinat.pageY).css({<br>
                        "color": "pink",<br>
                        "font-family": "Cursive",<br>
                        "font-weight": "Bold"<br>
                    });<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>