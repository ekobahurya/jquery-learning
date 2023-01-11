<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
        <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ - YAZIM KURALLARI</h1>
                <p id="yazimKurallarip"></p>
                <p id="yazimKurallarip2"></p>
                <span id="yazimKurallariptiklama">Tıklama</span>
            </div>

            <div  class="col-md-12">
                <div class="col-md-3">
                    <button onclick="gostergizle()">Reklam Aç/Kapa</button>
                </div>
                <div class="col-md-9">
                    <img src="img/resim.jpg" id="reklamackapa"  width="250" height="250">
                </div>
            </div>

            <div class="col-md-12">
                <code>
                <b>Reklam Aç/Kapa JQUERY KOD ÇIKTISI</b><br>
                <\button onclick="gostergizle()">Reklam Aç/Kapa<\/button> <br>
                <\img src="img/resim.jpg" id="reklamackapa"  width="250" height="250"> <br>
                function gostergizle(){ <br>
                    $("#reklamackapa").toggle(); <br>
                }
                </code>
            </div>
            
        </div>
    </div>
<?php include "footer.php"; ?>