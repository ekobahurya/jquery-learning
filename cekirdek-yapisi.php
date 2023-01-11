<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - ÇEKİRDEK YAPISI</h1>
                <h2 id="secicibaslik">-> Length Kullanımı</h2>
                <p class="lengthkullanimi"></p>
                <code>
                <b>Length Kullanımı Kod Çıktısı</b><br>
                $(".lengthkullanimi").text("Body içindeki div sayısı: "+$("div").length);
                </code>
                <h2 id="secicibaslik">-> get() Kullanımı</h2>
                <ul>
                    <li class="getkullanimili">1. Ders</li>
                    <li class="getkullanimili">2. Ders</li>
                    <li class="getkullanimili">3. Ders</li>
                    <li class="getkullanimili">4. Ders</li>
                </ul>
                <p class="getkullanimi"></p>
                <code>
                <b>get() Kullanımı Kod Çıktısı</b><br>
                let elemanlaribul = $(".getkullanimili").get(); // elemanlar değişkene atandı<br>
                $(".getkullanimi").text("Bakılan elemanın içeriği: "+$(elemanlaribul).eq(3).text()); // eleman içeriği eq ile indis numarasına göre seçilip text ile .getkullanimi etiketine yazdırıldı
                </code>
                <h2 id="secicibaslik">-> index() Kullanımı</h2>
                <ul>
                    <li class="PHP">PHP</li>
                    <li class="JQUERY">JQUERY</li>
                    <li class="REACT">REACT</li>
                    <li class="PYTHON">PYTHON</li>
                </ul>
                <p class="indexkullanimi"></p>
                <code>
                <b>index() Kullanımı Kod Çıktısı</b><br>
                $(".indexkullanimi").text("Bakılan elemanın index numarası: "+$(".PYTHON").index());
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>