<?php include "head.php"; ?>

<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - JQuery UI (User Interface)</h1>
                <h2 id="secicibaslik">-> Accordion Kullanımı</h2>
                <div class="col-md-12 accordionkullanimi">
                    <h4>BAŞLIK 1</h4>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deleniti accusamus
                            recusandae, reprehenderit sequi ex harum qui quis repellendus, minus fuga deserunt,
                            perspiciatis similique maxime consequatur cumque mollitia commodi suscipit.</p>
                    </div>
                    <h4>BAŞLIK 2</h4>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor optio saepe similique, facere
                            explicabo dignissimos vero. Dolor et ipsa suscipit hic velit eligendi vero alias tempore
                            adipisci est, nemo ex.</p>
                    </div>
                    <h4>BAŞLIK 3</h4>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta voluptatem a architecto
                            asperiores hic, quisquam quae, facilis, laudantium aut voluptatum necessitatibus dolorum
                            tenetur minima. Consequatur laborum aspernatur beatae exercitationem doloremque.</p>
                    </div>
                    <h4>BAŞLIK 4</h4>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio iusto praesentium sint dolore
                            eum rem dicta. Non quidem iure necessitatibus debitis odit repellat ipsa neque, culpa,
                            architecto qui est tenetur.</p>
                    </div>
                </div>
                <code>
                    <b>Accordion Kullanımı Kod Çıktısı</b><br>
                    $(".accordionkullanimi").accordion();
                </code>
                <br><br>
                <h2 id="secicibaslik">-> Autocomplate Kullanımı</h2>
                <div class="col-md-12">
                    <input class="form-control autocompletekullanimi">
                </div>
                <code>
                    <b>Autocomplate Kod Çıktısı</b><br>
                    let otomatikAlinacakKelimeler = [<br>
                    "ActionScript",<br>
                    "AppleScript",<br>
                    "Asp",<br>
                    "BASIC",<br>
                    "C",<br>
                    "C++",<br>
                    "Clojure",<br>
                    "COBOL",<br>
                    "ColdFusion",<br>
                    "Erlang",<br>
                    "Fortran",<br>
                    "Groovy",<br>
                    "Haskell",<br>
                    "Java",<br>
                    "JavaScript",<br>
                    "Lisp",<br>
                    "Perl",<br>
                    "PHP",<br>
                    "Python",<br>
                    "Ruby",<br>
                    "Scala",<br>
                    "Scheme"<br>
                    ];<br>
                    $(".autocompletekullanimi").autocomplete({<br>
                    source: otomatikAlinacakKelimeler,<br>
                    minLength: 2 // en az kaç karakter girileceğini belirtir belirtilmezse ilk harften başlar<br>
                    });
                </code><br><br>
                <h2 id="secicibaslik">-> Datepicker Kullanımı</h2>
                <div class="col-md-12">
                    <input class="form-control datepickerkullanimi">
                    <br>
                    <input class="form-control datepickerkullanimiayrinti">
                </div>
                <code>
                    <b>Datepicker Kullanımı Kod Çıktısı</b><br>
                    $(".datepickerkullanimi").datepicker({<br>
                    monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül",
                    "Ekim", "Kasım", "Aralık" ],<br>
                    dayNames: [ "Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi" ],<br>
                    dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],<br>
                    firstDay:1,<br>
                    showButtonPanel:true, // Butonları gösterme<br>
                    changeMonth:true, // üstte ay gösterme<br>
                    changeYear:true, // yıl gösterme<br>
                    numberOfMonths:2, // iki ayı birden gösterir<br>
                    showWeek:true,<br>
                    altField:".datepickerkullanimiayrinti",<br>
                    altFormat:"DD, d MM, yy",<br>
                    });
                </code><br><br>
                <h2 id="secicibaslik">-> Dialog Kullanımı</h2>
                <div class="col-md-12">
                    <input type="button" class="form-control dialogkullanimigoster" value="Aç">
                    <div title="Dialog Penceresi" class="form-control dialogkullanimi">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat atque facere, ipsum quis
                        illum rem, quam culpa amet sequi nostrum tempore! Officiis nihil aliquid dicta, tempora
                        perferendis cupiditate reprehenderit deleniti.
                    </div>
                </div>
                <code>
                    <b>Dialog Kullanımı Kod Çıktısı</b><br>
                    $(".dialogkullanimi").css({display:"none"});<br>
                    $(".dialogkullanimigoster").click(function(){<br>
                    $(".dialogkullanimi").dialog();<br>
                    });
                </code><br><br>
                <h2 id="secicibaslik">-> Progress Kullanımı</h2>
                <div class="col-md-12">
                    <div class="form-control progressbarkullanimi"></div>
                </div>
                <code>
                    <b>Progress Kullanımı Kod Çıktısı</b><br>
                    $(".progressbarkullanimi").progressbar({<br>
                    value:78<br>
                    });
                </code><br><br>
                <h2 id="secicibaslik">-> Tabs Kullanımı</h2>
                <div class="col-md-12">
                    <div class="form-control tabskullanimi">
                        <ul>
                            <li><a href="#birincibolum">Birinci Bölüm</a></li>
                            <li><a href="#ikincibolum">İkinci Bölüm</a></li>
                            <li><a href="#ucuncubolum">Üçüncü Bölüm</a></li>
                            <li><a href="#dorduncubolum">Dördüncü Bölüm</a></li>
                        </ul>
                        <div id="birincibolum">
                            <p>
                                <b>Birinci Bölüm</b>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate expedita at sequi
                                reprehenderit, voluptates adipisci! Eius provident rerum exercitationem, corporis itaque
                                numquam consectetur natus vero eum iste ad illum est.
                            </p>
                        </div>
                        <div id="ikincibolum">
                            <p>
                                <b>İkinci Bölüm</b>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, non cumque
                                laborum alias nobis nam quia corrupti dolore, voluptas at ipsum officia odio doloribus
                                quo ad earum temporibus quae eum?
                            </p>
                        </div>
                        <div id="ucuncubolum">
                            <p>
                                <b>Üçüncü Bölüm</b>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo officia impedit, aut
                                corrupti at temporibus! Itaque, facere qui rem, dolorum est quasi sequi, placeat
                                molestiae numquam cumque iusto illum beatae?
                            </p>
                        </div>
                        <div id="dorduncubolum">
                            <p>
                                <b>Dördüncü Bölüm</b>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nihil quis veniam
                                voluptas id perspiciatis et facilis voluptatum suscipit nostrum natus ipsam in eum
                                totam, obcaecati atque earum. Dignissimos, ea.
                            </p>
                        </div>
                    </div>
                </div>
                <code>
                    <b>Tabs Kullanımı Kod Çıktısı</b><br>
                    $(".tabskullanimi").tabs({<br>
                    //event:"mouseover" // tıklama yerine mouse ile üzerine gidince komut çalışır<br>
                    });
                </code><br><br>
                <h2 id="secicibaslik">-> draggable Nesneye Hareket Kazandırma Kullanımı</h2>
                <div class="col-md-12">
                    <div class="col-md-2 draggablekullanimi"></div>
                </div>
                <code>
                    <b>draggable Kullanımı Kod Çıktısı</b><br>
                    $(".draggablekullanimi").css({<br>
                    backgroundColor:"#faa216",<br>
                    height:"100px"<br>
                    });<br>
                    $(".draggablekullanimi").draggable();
                </code><br><br>
                <h2 id="secicibaslik">-> droppable Nesneye Hareketini Konumlandırma ve Olay Oluşturma Kullanımı</h2>
                <div class="col-md-12">
                    <b class="droppablekullanimisonuc"></b>
                    <div class="col-md-3 droppablekullanimi"></div>
                    <div class="col-md-1 droppablekullanimi2"></div>
                </div>
                <code>
                    <b>droppable Kullanımı Kod Çıktısı</b><br>
                    $(".droppablekullanimi").css({<br>
                    backgroundColor:"#581216",<br>
                    height:"150px"<br>
                    });<br>
                    $(".droppablekullanimisonuc").text("Mavi Kutuyu Kahverengi Kutuya Sürükle..");<br><br>
                    $(".droppablekullanimi").droppable({<br>
                    accept:".droppablekullanimi2", // sadece belirtilen nesneye izin verir accept kullanılmazsa
                    draggable özelliği olan bütün nesneleri kabul eder<br>
                    drop:function() {<br>
                    $(".droppablekullanimi").css({<br>
                    backgroundColor:"#342165",<br>
                    height:"150px",<br>
                    });<br>
                    $(".droppablekullanimisonuc").css({<br>
                    fontSize:"Bold"<br>
                    }).text("Mavi Kutu Kahverengi Kutunun Üzerine Geldi Kutunun Rengi Değişti..");<br>
                    }<br>
                    });<br>
                    $(".droppablekullanimi2").css({<br>
                    backgroundColor:"#216faa",<br>
                    height:"50px"<br>
                    });<br>
                    $(".droppablekullanimi2").draggable({<br>
                    revert:"invalid" // draggable ile revert kullanıldığında nesneyi hedefe gitmeden bıraktığında
                    başladığı yere geri gider<br>
                    });
                </code><br><br>
                <h2 id="secicibaslik">-> Resizable Kullanımı</h2>
                <div class="col-md-12">
                    <div class="resizablekullanimi">
                        <p>
                            <b>Resizable kullanarak kutunun boyutu değiştiriliyor</b><br>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque vitae minima illum,
                            deleniti maxime impedit, magni natus dolores quam quae repellat nemo labore expedita
                            possimus non adipisci enim voluptatum? Error?
                        </p>
                    </div>
                </div>
                <code>
                    <b>Resizable Kullanımı Kod Çıktısı</b><br>
                    $(".resizablekullanimi").css({<br>
                    backgroundColor:"#313131",<br>
                    color:"white",<br>
                    padding:"15px"<br>
                    });<br>
                    $(".resizablekullanimi").resizable();
                </code><br><br>
                <h2 id="secicibaslik">-> selectable Kullanımı</h2>
                <div class="col-md-12">
                    <ol class="selectablekullanimi">
                        <li>Java</li>
                        <li>Python</li>
                        <li>Ruby</li>
                        <li>Go</li>
                    </ol>
                </div>
                <code>
                    <b>selectable Kullanımı Kod Çıktısı
                        <br>CSS KODLARI
                    </b><br>
                    .selectablekullanimi .ui-selecting {<br>
                    background-color:#af2165;<br>
                    color:black;<br>
                    }<br>

                    .selectablekullanimi .ui-selected {<br>
                    background-color:#2ac9ae;<br>
                    color:black;<br>
                    }<br>
                    <b>JQUERY KODLARI</b><br>
                    $(".selectablekullanimi").selectable();
                </code>
                <br><br>
                <h2 id="secicibaslik">-> sortable Kullanımı</h2>
                <div class="col-md-12">
                    <ol class="sortablekullanimi">
                        <li>Java</li>
                        <li>Python</li>
                        <li>Ruby</li>
                        <li>Go</li>
                        <li>PHP</li>
                        <li>HTML</li>
                        <li>REACT</li>
                    </ol>
                </div>
                <code>
                    <b>sortable Kullanımı Kod Çıktısı</b><br>
                    $(".sortablekullanimi").sortable(); // listedeki elemanların yerini sürükleyerek değişitirmek
                </code><br><br>
                <h2 id="secicibaslik">-> 140 karakter Mesaj Alanı Oluşturma</h2>
                <div class="col-md-12">
                    <textarea class="form-control yuzkirkkarakter" cols="30" rows="10"></textarea>
                    <b class="karaktersayisi"></b>
                </div>
                <code>
                    <b>140 karakter Mesaj Alanı Oluşturma Kod Çıktısı</b><br>
                    $(".yuzkirkkarakter").keyup(function() {<br>
                    let karatersiniri=140;<br>
                    let metin = $(this).val();<br>
                    let bosluksuzmetin = metin.replace(/ /g,'').trim().length;<br>
                    $(".karaktersayisi").text(bosluksuzmetin);<br>
                    if(karatersiniri >= bosluksuzmetin) {<br>
                        <br>
                    } else {<br>
                    $(".karaktersayisi").text(bosluksuzmetin+" > 140 Karakteri aşamazsınız");<br>
                    }<br>
                    });
                </code>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>