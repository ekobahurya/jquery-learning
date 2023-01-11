<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - DOM MANİPÜLASYON</h1>
                <h2 id="secicibaslik">-> AddClass - Elemente Class Ekleme</h2>
                <div id="addClassEkleme"></div>
                <code>
                <b>addClass Kod Çıktısı</b><br>   
                $("#addClassEkleme").addClass("addclass").css({ <br>
                    "color":"orange",  <br> 
                    "font-family":"Cursive", <br>
                    "font-weight":"bold" <br>
                }).html("Burası addClass ile yapıldı");
                </code><br><br>
                <h2 id="secicibaslik">-> RemoveClass - Elementten Class Silme</h2>
                <button onclick="removeClassSilme()" class="btn btn-danger">Remove Class Silme</button>
                <div id="removeClassSilme" class="removeClassSilme"></div>
                <code>
                <b>removeClass Kod Çıktısı</b><br>   
                function removeClassSilme(){<br>  
                    $("#removeClassSilme").removeClass("removeClassSilme").html("removeClassSilme class'ı slindi").css({
                        <br>  "color":"red",<br>  
                        "font-family":"Cursive"<br>  
                    });<br>  
                }
                </code><br><br>
                <h2 id="secicibaslik">-> hasClass - Elementte Aranan Class Var mı Yok mu? </h2>
                <p id="hasclassvarmi" class="hasclassvarmi"></p>
                <code>
                <b>hasClass Kod Çıktısı</b><br> 
                // -> hasClass - elementte aranan class var mı yokmu bulur <br>
                let hasclassvarmi = $("#hasclassvarmi").hasClass("hasclassvarmi")<br>
                if (hasclassvarmi==true) {<br>
                    $(".hasclassvarmi").css({<br>
                        "color":"orange",<br>
                        "font-family":"Cursive",<br>
                        "font-weight":"bold"<br>
                    }).html("P elementinde .hasclassvarmi class'ı tanımlıdır");<br>
                } else {<br>
                    $(".hasclassvarmi").css({<br>
                        "color":"red",<br>
                        "font-family":"Cursive",<br>
                        "font-weight":"bold"<br>
                    }).html("P elementinde .hasclassvarmi class'ı yok");<br>
                }
                </code>
                <h2 id="secicibaslik">-> Metod Zincirlemesi</h2>
                <p class="metodzincirlemesi"></p>
                <code>
                <b>Metod Zincirlemesi Kod Çıktısı</b><br> 
                $(".metodzincirlemesi").html("Metod Zincirlemesi . ile aynı seçicide özellik kullanmadır.").css({<br>
                    "background-color":"#abccde",<br>
                    "padding":"12px",<br>
                    "font-family":"Cursive"<br>
                }).fadeOut(1000).fadeIn(1000);
                </code>
                <h2 id="secicibaslik">-> toggleClass</h2>
                <button onclick="toggleClassEkleCikar()" class="btn btn-success">toggleClass class ekle çıkar</button>
                <p id="toggleClassEkleCikar"></p>
                <code>
                <b>toggleClass Kod Çıktısı</b><br> 
                function toggleClassEkleCikar() {<br> 
                    $("#toggleClassEkleCikar").toggleClass("toggleClassEkleCikar");<br> 
                    let tgcvarmi = $("#toggleClassEkleCikar").hasClass("toggleClassEkleCikar");<br> 
                    if(tgcvarmi==true) {<br> 
                        $(".toggleClassEkleCikar").html("Bu bir Toggle Class olayıdır").css({<br> 
                            "margin-top":"15px",<br> 
                            "background-color":"#abcd15",<br> 
                            "color":"white",<br> 
                        " font-family":"Cursive",<br> 
                        "padding":"12px"<br> 
                        });<br> 
                    } else if(tgcvarmi==false) {<br> 
                        $("#toggleClassEkleCikar").html("").css({<br> 
                            "background-color":"transparent",<br> 
                            "padding":"0px",<br> 
                            "margin-top":"0px"<br> 
                        });<br> 
                    }<br> 
                    
                }
                </code>
                <h2 id="secicibaslik">-> Append & Prepend Kullanımı - Nesnelere Ekleme Yapma</h2>
                <div id="eklememetodu">
                <select class="eklemelistesi">
                    <option>Html</option>
                    <option>Css</option>
                </select>
                <input type="text" class="appendprependkursekle" placeholder="Kurs Ekle">
                <input type="radio" id="appendmetodu" class="eklememetodu" name="metod" value="append">
                <label for="appendmetodu">Append</label>
                <input type="radio" id="prependmetodu" class="eklememetodu" name="metod" value="prepend">
                <label for="prependmetodu">Prepend</label>
                <button onclick="nesneekleme()" class="btn btn-success">Kurs Ekle</button><br>
                </div>
                
                <code>
                <b>Append & Prepend Kullanım Kod Çıktısı</b><br> 
                function nesneekleme(){<br> 
                    let kursadi = $(".appendprependkursekle").val();<br> 
                    let eklememetodu = $("#eklememetodu input[type='radio']:checked").val(); // metod seçme hatalı<br> 
                    
                    if(eklememetodu == "append") {<br> 
                        $(".eklemelistesi").append("<option>"+kursadi+"</option>");<br> 
                    } <br> 
                    
                    else if(eklememetodu == "prepend") {<br> 
                        $(".eklemelistesi").prepend("<option>"+kursadi+"</option>");<br> 
                    }<br> 
                }
                </code>
                <h2 id="secicibaslik">-> AppendTo & PrependTo Kullanımı - Nesnelere Ekleme Yapma</h2>
                <p class="appendtoprapendtop">1</p>
                <p class="appendtoprapendtop">2</p>
                <p class="appendtoprapendtop">3</p>
                <a href="#" class="appendtoprapendtoaarka"> Ön</a>
                <a href="#" class="appendtoprapendtoaon">Arka</a>
            </div>
            <code>
            <b>AppendTo & PrependTo Kullanım Kod Çıktısı</b><br> 
            $(".appendtoprapendtoaon").appendTo($(".appendtoprapendtop"));<br> 
            $(".appendtoprapendtoaarka").prependTo($(".appendtoprapendtop"));
            </code><br><br>
            <h2 id="secicibaslik">-> Before & After Kullanımı - Nesnelere Ekleme Yapma</h2>
            <ul>
                <li class="afterbeforeli">1</li>
                <li class="afterbeforeli">2</li>
                <li class="afterbeforeli">3</li>
            </ul>
            <code>
            <b>Before & After Kullanım Kod Çıktısı</b><br> 
            $(".afterbeforeli").after("< li>Hepsinin Arkasına Ekle< /li>");<br> 
            $(".afterbeforeli:first").after("< li>İlk sıranın arkasına Ekle< /li>");<br> 
            $(".afterbeforeli:last").after("< li>Son sıranın önüne Ekle< /li>");<br> 
            $(".afterbeforeli").before("< li>Hepsinin Önüne Ekle< /li>");<br> 
            $(".afterbeforeli:first").before("< li>İlk sıranın Önüne Ekle< /li>");<br> 
            $(".afterbeforeli:last").before("< li>Son sıranın Önüne Ekle< /li>");
            </code>
            <h2 id="secicibaslik">-> İsteğe Bağlı Sürekli Çoğalan Dosya Yükleme Alanı Yapımı Uygulaması</h2>
            <?php
            echo "<pre>";
            echo print_r($_POST['yukle']);
            echo "</pre>";
            ?>
            <form action="" method="post">
                <input type="file" class="inputalaniac" name="yukle[]">
                <button type="submit"  onclick="dosyagonder()" class="btn btn-primary">Gönder</button><br><br>
            </form>
            <div class="col-md-6">
            <button onclick="dosyaalaniekle()" class="btn btn-success">Dosya Alani Ekle</button>
            <button onclick="dosyaalanisil()" class="btn btn-danger">Dosya Alani Sil</button>
            </div>
            <code><br>
            function dosyaalaniekle(){<br>
                $(".inputalaniac").before("< input type='file' name='yukle[]'>< br>< br>");<br>
            }<br>
            function dosyaalanisil(){<br>
                $(".inputalaniac").eq(0).remove();<br>
            }
            </code><br><br>
            <h2 id="secicibaslik">-> Clone Kullanımı - Nesneleri Kopyalama</h2>
            <p class="clonekullanimip">Deneme P elementi</p>
            <b class="clonekullanimib">Deneme B elementi</b>
            <code>
            <b>Clone Kullanımı - Nesneleri Kopyalama Kullanım Kod Çıktısı</b><br> 
            $(".clonekullanimip").clone().insertAfter(".clonekullanimib"); // P elementini b elementinden sonra kopyala<br> 
            //$(".clonekullanimib").clone().insertBefore(".clonekullanimip");
            </code>
            <h2 id="secicibaslik">-> Text Kullanımı - Nesneleri Değiştirme</h2>
            <p class="textilenesnedegistir"></p>
            <code>
            <b>Text Kullanımı - Nesneleri Değiştirme Kod Çıktısı</b><br>
            $(".textilenesnedegistir").text("Bu metinde text metodu kullanılarak nesnenin içeriği değiştirilmiştir.").css({<br>
                "margin-top":"15px",<br>
                "background-color":"#581a21",<br>
                "color":"white",<br>
                " font-family":"Cursive",<br>
                "padding":"12px"<br>
            });
            </code>
            <h2 id="secicibaslik">-> Replace Kullanımı</h2>
            <p class="replacekullanimi"></p>
            <code>
            <b>Replace Kullanımı - Nesneleri Değiştirme Kod Çıktısı</b><br>
            $(".replacekullanimi").replaceWith("Bu içerik replaceWith methodu ile değiştirilmiştir.");
            </code>
            <h2 id="secicibaslik">-> Empty Kullanımı</h2>
            <p class="emptykullanimi">Burası Silindi.</p>
            <code>
            <b>Empty Kullanımı Kod Çıktısı</b><br>
            < p class="emptykullanimi">Burası Silindi.< /p> // silinen içerik<br>
            $(".emptykullanimi").empty().text("İçeriği empty ile silindi");
            </code>
            <h2 id="secicibaslik">-> Remove Kullanımı</h2>
            <p class="removekullanimi">Bu element Komple Silinecek</p>
            <code>
            <b>Remove Kullanımı Kod Çıktısı</b><br>
            $(".removekullanimi").remove();
            </code>
            <h2 id="secicibaslik">-> Attr Kullanımı</h2>
            <a href="https:google.com" target="_blank" class="attrkullanimi">Google</a>
            <code>
            <b>Attr Kullanımı Kod Çıktısı</b><br>
            $(".attrkullanimi").attr("href","https:www.google.com.tr/").css({
                "text-decoration":"none"
            }).text("Google'a Git");
            </code>
            <h2 id="secicibaslik">-> HTML Kullanımı</h2>
            <p class="htmlkullanimi">Html İle elementin içeriğini alma</p>
            <b class="htmlkullanimi"></b>
            <code>
            <b>Html Kullanımı Kod Çıktısı</b><br>
            let elementicerigi = $(".htmlkullanimi").html(); // Element içeriği alma<br>
            $("b.htmlkullanimi").html("html metodu kullanılarak yukarıdaki içerik alınıp b elementine yapıştırıldı: "+elementicerigi);
            </code>
            <h2 id="secicibaslik">-> VAL Kullanımı</h2>
            <div class="col-md-6">
            <select class="valselectkullanimi" onchange="olay()">
                <option value="JAVASCRİPT">JAVASCRİPT</option>
                <option value="PHP">PHP</option>
                <option value="JAVA">JAVA</option>
                <option value="PYTHON">PYTHON</option>
                <option value="C++">C++</option>
                <option value="JQUERY">JQUERY</option>
            </select>
                <b class="valkullanimi"></b>
            </div>
            <code>
            <b>Val Kullanımı Kod Çıktısı</b><br>
            function olay() {<br>
                let valicerigi = $(".valselectkullanimi").val(); <br>
                $(".valkullanimi").html(valicerigi);<br>
            }
            </code>
        </div>
    </div>
    <br><br><br><br>
<?php include "footer.php"; ?>