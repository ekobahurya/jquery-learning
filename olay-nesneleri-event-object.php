<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - OLAY NESNELERİ (EVENT OBJECT)</h1>
                <h2 id="secicibaslik">pageX / pageY - screenX / screenY Kullanımı</h2>
                <b class="kordinatiii">Kordinatlar:</b><b class="kordinatsonucu"></b>
                <div class="col-md-12 kordinatanakutu">
                    <div class="col-md-3 kordinatkutu1"></div>
                    <div class="col-md-3 kordinatkutu2"></div>
                    <div class="col-md-3 kordinatkutu3"></div>
                </div>
                <code>
                <b>pageX / pageY - screenX / screenY Kullanımı Kod Çıktısı</b><br>
                $(".kordinatkutu1").css({<br>
                        "height":"150px",<br>
                        backgroundColor:"green",<br>
                        display:"inline-block"<br>
                    });<br><br>
                    $(".kordinatkutu2").css({<br>
                        "height":"150px",<br>
                        backgroundColor:"red",<br>
                        display:"inline-block"<br>
                    });<br><br>
                    $(".kordinatkutu3").css({<br>
                        "height":"150px",<br>
                        backgroundColor:"yellow",<br>
                        display:"inline-block"<br>
                    });<br><br>
                    $(".kordinatanakutu").mousemove(function(k){<br>
                        $(".kordinatsonucu").text("X kordinatı: "+k.pageX+" Y kordinatı"+k.pageY);<br>
                        if((k.pageX > 117 && k.pageX < 395) && (k.pageY > 227 && k.pageY < 377)) {<br>
                            $(".kordinatsonucu").text("Yeşil Kutunun üzerindesin");<br>
                        } else if((k.pageX > 399 && k.pageX < 678) && (k.pageY > 227 && k.pageY < 377)) {<br>
                            $(".kordinatsonucu").text("Kırmızı Kutunun üzerindesin");<br>
                        } else if((k.pageX > 684 && k.pageX < 962) && (k.pageY > 227 && k.pageY < 377)) {<br>
                            $(".kordinatsonucu").text("Sarı Kutunun üzerindesin");<br>
                        } else {<br>
                            $(".kordinatsonucu").text("Kutuların üzerinde değilsin, Mouseın ekrandaki kordinatı: ScreenX: "+k.screenX+" ScreenY: "+k.screenY);<br>
                        }<br>
                    });
                </code>
                <h2 id="secicibaslik">event.currentTarget / event.relatedTarget / event.target Kullanımı</h2>
                <p class="currentTargetkullanimi" href="amk">Elementin adını öğrenmek için tıkla / öncesinde fare ile üzerinde geçtiğin elementi öğrenmek için üzerine gel</p>
                <b class="currentTargetkullanimisonuc"></b><br>
                <b class="eventTargetkullanimisonuc"></b>
                <br>
                <code>
                <b>event.currentTarget Kullanımı Kod Çıktısı</b><br>
                $(".currentTargetkullanimi").click(function(event){<br>
                    $(".currentTargetkullanimisonuc").text("Tıklanan element etiketi: "+event.currentTarget.nodeName).css({
                        <br> "color":"darkblue",<br>
                        "font-family":"cursive"<br>
                    });<br>
                });<br><br>
                <b>event.relatedTarget Kullanımı Kod Çıktısı</b><br>
                $(".currentTargetkullanimi").mouseover(function(event){<br>
                    $(".currentTargetkullanimisonuc").text("P elementine gelmeden hemen önce üzerinden geçilen element etiketi: "+event.relatedTarget.nodeName).css({
                        <br> "color":"darkblue",<br>
                        "font-family":"cursive"<br>
                    });<br>
                });<br><br>
                <b>event.target Kullanımı Kod Çıktısı</b><br>
                $(".currentTargetkullanimi").click(function(event){<br>
                    $(".eventTargetkullanimisonuc").text("Tıklanan elementin adı: "+event.target.nodeName).css({<br>
                        "color":"darkblue",<br>
                        "font-family":"cursive"<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">altKey, ctrlKey, shiftKey Kullanımı</h2>
                <input type="text" class="tuskontrol">
                <b class="tuskontrolsonucu"></b>
                <br>
                <code>
                <b>altKey, ctrlKey, shiftKey Kullanımı Kod Çıktısı</b><br>
                $(".tuskontrol").keydown(function(hangitus){<br>
                    if(hangitus.altKey){<br>
                        $(".tuskontrolsonucu").text("Alt tuşuna basıldı");<br>
                    } else if(hangitus.shiftKey){<br>
                        $(".tuskontrolsonucu").text("Shift tuşuna basıldı");<br>
                    } else if(hangitus.ctrlKey){<br>
                        $(".tuskontrolsonucu").text("Ctrl tuşuna basıldı");<br>
                    } else {<br>
                        $(".tuskontrolsonucu").text("Alt, Shift veya Ctrl tuşuna basın");<br>
                    }<br>
                });
                </code>
                <h2 id="secicibaslik">namespace Kullanımı</h2>
                <button type="submit" class="namespacekullanimi btn btn-danger">Tıkla</button>
                <b class="namespacesonucu"></b>
                <br>
                <code>
                <b>namespace Kullanımı Kod Çıktısı</b><br>
                $(".namespacesonucu").on("anaolay.tetiklenecekolay",function(event){<br>
                    $(".namespacesonucu").text(event.namespace);<br>
                });<br>
                $(".namespacekullanimi").click(function(event){<br>
                    $(".namespacesonucu").trigger("anaolay.tetiklenecekolay");<br>
                });
                </code>
                <h2 id="secicibaslik">timeStamp Kullanımı</h2>
                <div class="col-md-12 timestampkullanimi"></div>
                <b class="timestampsonucu"></b>
                <br>
                <code>
                <b>timeStamp Kullanımı Kod Çıktısı</b><br>
                $(".timestampkullanimi").css({<br>
                    height:"150px",<br>
                    backgroundColor:"purple",<br>
                    fontFamily:"Cursive",<br>
                    fontWeight:"Bold",<br>
                    textAlign:"Center",<br>
                    color:"white"<br>
                });<br>
                let simdi,gecensure;<br>
                $(".timestampkullanimi").click(function(event){<br>
                    gecensure=event.timeStamp-simdi;<br>
                    if(simdi) {<br>
                        $(".timestampsonucu").append("İlk Tıklama Zamanı "+event.timeStamp+"< br>");<br>
                        $(".timestampsonucu").append("İlk tıklamadan şuana gecen süre: "+gecensure+"< br>");<br>
                    } else {<br>
                        $(".timestampkullanimi").append("İki Tıklama arasındaki süre farkı için tıkla");<br>
                    }<br>
                    simdi=event.timeStamp;<br>
                    $(".timestampsonucu").append("Olay Türü tipi: "+event.type+"< br>");<br>
                });
                </code>
                <h2 id="secicibaslik">which Kullanımı</h2>
                <input type="text" class="form-control whichkullanimi" placeholder="Ascii kodunu öğrenmek istediğiniz tuşa basın">
                <b class="whichsonucu"></b>
                <br>
                <code>
                <b>which Kullanımı Kod Çıktısı</b><br>
                $(".whichkullanimi").on("keydown",function(event){<br>
                    $(".whichsonucu").text(event.which);<br>
                });
                </code>
                <h2 id="secicibaslik">preventDefault Kullanımı</h2>
                <a href="index.php" class="preventDefaultkullanimi">Anasayfa'ya git</a>
                <b class="preventDefaultsonucu"></b>
                <br>
                <code>
                <b>which Kullanımı Kod Çıktısı</b><br>
                $(".preventDefaultkullanimi").click(function(event){<br>
                    event.preventDefault();<br>
                    $(".preventDefaultsonucu").text("Link preventDeafault fonksiyonu ile pasif hale getirldi..");<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>