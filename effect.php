<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - EFEKT (EFFECT) KULLANIMI</h1>
                <h2 id="secicibaslik">Show Kullanımı</h2>
                <input type="submit" class="btn btn-success showkullanimi" value="Göster">
                <b class="showsonucu">Bu alan gösterildi</b>
                <br>
                <code>
                <b>show Kullanımı Kod Çıktısı</b><br>
                $(".showsonucu").css({<br>
                    display:"none",<br>
                    fontFamily:"Cursive"<br>
                });<br>
                $(".showkullanimi").click(function(){<br>
                    $(".showsonucu").show(750,function(){<br>
                        $(".showkullanimi").val("Gizlendi");<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">Hide Kullanımı</h2>
                <input type="submit" class="btn btn-success hidekullanimi" value="Gizle">
                <b class="hidesonucu">Bu alan gizlenecek</b>
                <br>
                <code>
                <b>Hide Kullanımı Kod Çıktısı</b><br>
                $(".hidesonucu").css({<br>
                    fontFamily:"Cursive"<br>
                });<br>
                $(".hidekullanimi").click(function(){<br>
                    $(".hidesonucu").hide(750,function(){<br>
                        $(".hidekullanimi").val("Gizlendi");<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">Toggle (Göster/Gizle) Kullanımı</h2>
                <input type="submit" class="btn btn-success togglekullanimi" value="Gizle">
                <b class="togglesonucu">Bu alan gizlenecek</b>
                <br>
                <code>
                <b>Toggle Kullanımı Kod Çıktısı</b><br>
                $(".togglekullanimi").click(function () {<br>
                    let valdegerine = $(".togglekullanimi").val();<br>
                    let cssdegeri = $(".togglekullanimi").css("display");<br>
                    $(".togglesonucu").toggle(750, function () {<br>
                        if (valdegerine == "Gizle") {<br>
                            $(".togglekullanimi").val("Göster");<br>
                            $(".togglesonucu").text("Bu alan gizlendi");<br>
                        } else if (valdegerine == "Göster") {<br>
                            $(".togglekullanimi").val("Gizle");<br>
                            $(".togglesonucu").text("Bu alan gösterildi");<br>
                        }<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">Delay (Bekletme süresi) Kullanımı</h2>
                <input type="submit" class="btn btn-success delaykullanimi" value="Delay ile bekleterek Gizle">
                <b class="delaysonucu">Bu alan gizlenecek</b>
                <br>
                <code>
                <b>Delay (Bekletme süresi) Kullanımı Kod Çıktısı</b><br>
                $(".delaykullanimi").click(function () {<br>
                    $(".delaysonucu").delay(500).toggle(750, function () {<br>
                        $(".delaykullanimi").val("Delay'la bekleterek Göster / Gizle");<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">SlideDown Kullanımı</h2>
                <input type="submit" class="btn btn-success slidedownkullanimi" value="Göster">
                <div class="col-md-4 slidedownsonucu"></div>
                <br>
                <code>
                <b>SlideDown Kullanımı Kod Çıktısı</b><br>
                $(".slidedownsonucu").css({<br>
                    display:"none"<br>
                }).text("SlideDown ile efekt verildi");<br>
                $(".slidedownkullanimi").click(function(){<br>
                    $(".slidedownsonucu").slideDown(750).css({<br>
                        backgroundColor:"#abcdef",<br>
                        textAlign:"Center",<br>
                        fontFamily:"Cursive"<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">SlideUp Kullanımı</h2>
                <input type="submit" class="btn btn-success slideupkullanimi" value="Gizle">
                <div class="col-md-4 slideupsonucu"></div>
                <br>
                <code>
                <b>SlideUp Kullanımı Kod Çıktısı</b><br>
                $(".slideupsonucu").css({<br>
                    backgroundColor:"#abcdef",<br>
                    textAlign:"Center",<br>
                    fontFamily:"Cursive"<br>
                }).text("SlideUp ile efekt verildi");<br>
                $(".slideupkullanimi").click(function(){<br>
                    $(".slideupsonucu").slideUp(750);<br>
                });
                </code>
                <h2 id="secicibaslik">SlideToggle Kullanımı</h2>
                <input type="submit" class="btn btn-success slidetogglekullanimi" value="Göster / Gizle">
                <div class="col-md-4 slidetogglesonucu"></div>
                <br>
                <code>
                <b>SlideToggle Kullanımı Kod Çıktısı</b><br>
                $(".slidetogglesonucu").css({<br>
                    backgroundColor:"#abcdef",<br>
                    textAlign:"Center",<br>
                    fontFamily:"Cursive",<br>
                    height:"100px"<br>
                }).text("SlideToggle ile efekt verildi");<br>
                $(".slidetogglekullanimi").click(function(){<br>
                    $(".slidetogglesonucu").slideToggle(750);<br>
                });
                </code>
                <h2 id="secicibaslik">fadeIn Kullanımı</h2>
                <input type="submit" class="btn btn-success fadeinkullanimi" value="Göster">
                <div class="col-md-4 fadeinsonucu"></div>
                <br>
                <code>
                <b>fadeIn Kullanımı Kod Çıktısı</b><br>
                $(".fadeinsonucu").css({<br>
                    display:"none"<br>
                }).text("fadeIn ile efekt verildi");<br>
                $(".fadeinkullanimi").click(function(){<br>
                    $(".fadeinsonucu").fadeIn(750).css({<br>
                        backgroundColor:"#abcdef",<br>
                        textAlign:"Center",<br>
                        fontFamily:"Cursive"<br>
                    });<br>
                });
                </code>
                <h2 id="secicibaslik">fadeOut Kullanımı</h2>
                <input type="submit" class="btn btn-success fadeoutkullanimi" value="Gizle">
                <div class="col-md-4 fadeoutsonucu"></div>
                <br>
                <code>
                <b>fadeOut Kullanımı Kod Çıktısı</b><br>
                $(".fadeoutsonucu").css({<br>
                    backgroundColor:"#abcdef",<br>
                    textAlign:"Center",<br>
                    fontFamily:"Cursive"<br>
                }).text("fadeOut ile efekt verildi");<br>
                $(".fadeoutkullanimi").click(function(){<br>
                    $(".fadeoutsonucu").fadeOut(750);<br>
                });
                </code>
                <h2 id="secicibaslik">fadeTo Kullanımı</h2>
                <input type="submit" class="btn btn-success fadetokullanimi" value="Opaklaştır">
                <div class="col-md-4 fadetosonucu"></div>
                <br>
                <code>
                <b>fadeTo Kullanımı Kod Çıktısı</b><br>
                $(".fadetosonucu").css({<br>
                    backgroundColor:"#abcdef",<br>
                    textAlign:"Center",<br>
                    fontFamily:"Cursive",<br>
                    height:"100px"<br>
                }).text("fadeTo ile efekt verildi");<br>
                $(".fadetokullanimi").click(function(){<br>
                    $(".fadetosonucu").fadeTo("slow",0.38); // fadeTo 0 ile 1 arasında değer alır opacity değeri<br>
                });
                </code>
                <h2 id="secicibaslik">fadeTo Kullanarak Doğru Kutuyu Bulma</h2>
                <div class="col-md-3 fadeto1 kututikla"></div>
                <div class="col-md-3 fadeto2 kututikla"></div>
                <div class="col-md-3 fadeto3 kututikla"></div>
                <br>
                <code>
                <b>fadeTo Kullanımı Kod Çıktısı</b><br>
                $(".fadeto1,.fadeto2,.fadeto3").css({<br>
                    textAlign: "Center",<br>
                    fontFamily: "Cursive",<br>
                    opacity: "0.5",<br>
                    color: "White",<br>
                    fontWeight: "Bold",<br>
                    height: "100px",<br>
                    display: "inline-block",<br>
                    cursor: "pointer"<br>
                });<br>
                $(".fadeto1").css({<br>
                    backgroundColor: "red"<br>
                }).text("Kırmızı Kutu");<br>
                $(".fadeto2").css({<br>
                    backgroundColor: "green"<br>
                }).text("Yeşil Kutu");<br>
                $(".fadeto3").css({<br>
                    backgroundColor: "yellow"<br>
                }).text("Sarı Kutu");<br>
                $(".kututikla").click(function () {<br>
                    let ortakkutu = $(this).hasClass("kututikla");<br>
                    let dogrukutu = $(this).hasClass("fadeto3");<br>
                    if (dogrukutu == true && ortakkutu == true) {<br>
                        $(".fadeto3").fadeTo("slow", 0.9);<br>
                        $(".fadeto2,.fadeto1").fadeTo("slow", 0.1);<br>
                    } else {<br>
                        $(".fadeto2,.fadeto1,.fadeto3").fadeTo("slow", 0.25);<br>
                    }<br>
                });
                </code>
                <h2 id="secicibaslik">fadeToggle Kullanımı</h2>
                <input type="submit" class="btn btn-success fadetogglekullanimi" value="Göster / Gizle">
                <div class="col-md-4 fadetogglesonucu"></div>
                <br>
                <code>
                <b>fadeToggle Kullanımı Kod Çıktısı</b><br>
                $(".fadetogglesonucu").css({<br>
                    backgroundColor: "#abcdef",<br>
                    textAlign: "Center",<br>
                    fontFamily: "Cursive"<br>
                }).text("fadeToggle ile efekt verildi");<br>
                $(".fadetogglekullanimi").click(function () {<br>
                    $(".fadetogglesonucu").fadeToggle(750);<br>
                });
                </code>
                <h2 id="secicibaslik">Stop / Finish Kullanımı</h2>
                <input type="submit" class="btn btn-success fadeinstopkullanimi" value="Göster">
                <input type="submit" class="btn btn-success stopkullanimi" value="Durdur">
                <div class="col-md-4 stopsonucu"></div>
                <br>
                <code>
                <b>Stop / Finish Kullanımı Kod Çıktısı</b><br>
                $(".stosonucu").css({<br>
                    display: "none"<br>
                });<br>
                $(".fadeinstopkullanimi").click(function () {<br>
                    $(".stopsonucu").text("fadeIn ile efekt verildi").fadeIn(5550).css({<br>
                        backgroundColor: "#abcdef",<br>
                        textAlign: "Center",<br>
                        fontFamily: "Cursive"<br>
                    });<br>
                });<br>
                $(".stopkullanimi").click(function () {<br>
                     $(".stopsonucu").stop(); // birden fazla animasyon verilmişse ilk animasyonu tek bitiriyor sonrakiler devam ediyor.<br>
                    //$(".stopsonucu").finish(); // verilen bütün animasyonları durdurup animasyon sonunda belirtilen hale gelir.<br>
                });
                </code>
                <h2 id="secicibaslik">Queue / Dequeue / clearQeueue Kullanımı</h2>
                <input type="submit" class="btn btn-success queuekullanimi" value="Queue Kullanımı">
                <div class="col-md-4 queuesonucu"></div>
                <br>
                <code>
                <b>Queue / Dequeue / clearQeueue Kullanımı Kod Çıktısı</b><br>
                $(".queuesonucu").css({<br>
                    backgroundColor: "#abcdef",<br>
                    textAlign: "Center",<br>
                    fontFamily: "Cursive",<br>
                    height:"100px",<br>
                    width:"100px",<br>
                    borderRadius:"50%"<br>
                });
                $(".queuekullanimi").click(function () {<br>
                    $(".queuesonucu").animate({<br>
                        marginLeft:"+=85px"<br>
                    });<br>
                    $(".queuesonucu").animate({<br>
                        marginTop:"+=95px"<br>
                    });<br>
                    $(".queuesonucu").animate({<br>
                        marginLeft:"-=65px"<br>
                    }).queue(function(){<br>
                        $(".queuesonucu").text("Queue ile durduruldu");<br>
                        $(this).dequeue(); // Animasyonu devam ettiriyor<br>
                        $(".queuesonucu").clearQeueue(); // Animasyonu olduğu yerden bitirip en başa götürür.<br>
                    });<br>
                    $(".queuesonucu").animate({<br>
                        marginTop:"-=31px"<br>
                    });<br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>