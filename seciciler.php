<?php include "head.php"; ?>

<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - SEÇİCİLER</h1>
                
                <h2 id="secicibaslik">Tag Seçiciler</h2>
                <legend>
                    <p id="tagseciciaciklama"></p>
                </legend>
                <code>
                <b>TAG SEÇİCİ JQUERY KOD ÇIKTISI</b><br>
                $("legend").css("color","gray"); // $("legend") ile tag seçilip css işlemi yaıldı
                </code>
                <h2 id="secicibaslik2">-> id ve class Seçiciler</h2>
                <p  class="classsecici" id="idclassseciciaciklama"></p>
                <code>
                <b>id ve class Seçici JQUERY KOD ÇIKTISI</b><br>
                $("#idclassseciciaciklama").html("id tanımlanmışsa #ornek yazıp ilgili id'ideki tag seçilir, class tanımlanmışsa .ornek yazıp tag seçilir");<br>
                $(".classsecici,#tagseciciaciklama").css({ 
                    "color":"gray",
                    "font-weight":"bold",
                    "text-shadow":"3px 3px gold",
                    "font-size":"18px"
                }); <br>
                 $("#tagseciciaciklama").html("a, b, p, span, form, ul, vb. tag'ları yazarsak sayfadaki aynı elementlerin tamamına uygulanır.");
                </code>
                <br><br>
                <input type="text" placeholder="Kullanıcı Adı">
                <br><br>
                <input type="password" placeholder="Şifre">
                <br><br>
                <code>
                <b>İnput type göre seçim yapma JQUERY KOD ÇIKTISI</b><br>
                $("input[type='text']").css("width","200px"); // 1. yol<br>
                $("input:password").css("width","220px"); // 2. yol
                </code> 
                <br><br>
                <h2 id="secicibaslik">-> Sıralı Seçiciler</h2>
                <li class="siralisecici">HTML</li>
                <li class="siralisecici">CSS</li>
                <li class="siralisecici">JAVASCRIPT</li>
                <li class="siralisecici">JQUERY</li>
                <li class="siralisecici">PHP</li>
                <li class="siralisecici">PYTHON</li>
                <li class="siralisecici">C++</li>
                <code>
                    <b>LİSTE JQUERY KOD ÇIKTISI</b><br>
                    $(".siralisecici:odd").css("color","orange"); // Tek indis numaralı elementleri seçer.<br>
                    $(".siralisecici:even").css("color","purple"); // Çift indis numaralı elementleri seçer.<br>
                    $(".siralisecici:first").css("color","#284486"); // ilk indis numaralı elementi seçer.<br>
                    $(".siralisecici:last").css("color","#abcd15"); // Son indis numaralı elementi seçer.<br>
                </code>
                <br>
                <table>
                    <tr>
                        <th>Sıra</th>
                        <th>Kurs</th>
                        <th>Başarı</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>HTML</td>
                        <td>Başarılı</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>CSS</td>
                        <td>Başarılı</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PYTHON</td>
                        <td>Başarılı</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>PHP</td>
                        <td>Başarılı</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>JQUERY</td>
                        <td>Başarılı</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>C++</td>
                        <td>Başarısız</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>REACT</td>
                        <td>Başarısız</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>ANGULAR JS</td>
                        <td>Başarılı</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>C#</td>
                        <td>Başarısız</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>VUE</td>
                        <td>Başarısız</td>
                    </tr>
                </table>
                <code>
                <b>TABLO JQUERY KOD ÇIKTISI</b><br>
                    $("tr:odd").css("color","orange"); // Tek indis numaralı elementleri seçer.<br>
                    $("tr:even").css("color","purple"); // Çift indis numaralı elementleri seçer.<br>
                    $("tr:last").css("color","red"); // Son indis numaralı elementi seçer.<br>
                    $("tr:first").css("color","#284486"); // ilk indis numaralı elementi seçer.<br>
                    $("tr:nth(3)").css("color","pink"); // indis numarası 3 olan elementi seçer.<br>
                    $("tr:eq(4)").css("color","#abcd15"); // indis numarası 4 olan elementi seçer.<br>
                    $("tr").slice(7,9).css("color","#21ef69"); // indis numarası 7 dahil  başlayıp 9 a kadar olan  9 hariç elementi seçer.<br>
                    $("tr,td,th").css({
                        "border":"1px solid #abcdef",
                        "padding":"5px"
                    }); // Elemenler arasında virgül bırakarak çoklu seçim yapılır
                </code>
                <h2 id="secicibaslik">-> Çocuk Seçiciler</h2>
                
                <p>
                    <span>

                    </span>
                </p>
                <code>
                <b>JQUERY KOD ÇIKTISI</b><br>
                $("p span").html("Çocuk seçiler $(\"p span\") şeklinde seçilir");<br>
                $("p span").css({
                    "color":"#abcd15"
                }); 
                </code>
                <h2 id="secicibaslik">-> Eleman Bulup Seçme</h2>
                <p class="pelementi">
                    <b class="betiketi">
                        b etiketi
                    </b><br>
                    <i class="ietiketi">
                        i etiketi
                    </i><br>
                </p>
                <code>
                <b>ELEMAN BULMA JQUERY KOD ÇIKTISI</b><br>
                $(".petiketi").find(".betiketi").css("color":"yellow");<br>
                $("p").find(".ietiketi").css("color":"green");
                </code>
                <br>
                <h2 id="secicibaslik">-> each Döngüsü</h2>
                <ul>
                    <li>PEOGEOUT</li>
                    <li>RENAULT</li>
                    <li>CİTRÖEN</li>
                    <li>PORSCHE</li>
                    <li>WOLKSVAGEN</li>
                </ul>  
                <p class="eachdongusonucu"> <p> 
                <code>
                <b>EACH DÖNGÜSÜ JQUERY KOD ÇIKTISI</b><br>
                $("ul li").each(function(index){ <br>
                &nbsp;&nbsp;$(".eachdongusonucu").html(index+". eleman:"+$(this).text());<br>
                &nbsp;&nbsp;//alert(index+". eleman:"+$(this).text());<br>
                });
                </code> 
                <h2 id="secicibaslik">-> is kullanarak eleman var mı yok mu bulma</h2>
                <p class="iskullanimi"></p>
                <code>
                <b>is KULLANIMI JQUERY KOD ÇIKTISI</b><br>
                if($("p").is(".iskullanimi")) { <br>
                &nbsp;&nbsp;$(".iskullanimi").html("P Elementinde .iskullanimi adında class tanımlıdır"); <br>
                } else { <br>
                &nbsp;&nbsp;$(".iskullanimi").html("Böyle bir element yok"); <br>
                }
                </code>
            </div>
        </div>
    </div>
    <br><br><br>
    <?php include "footer.php"; ?>