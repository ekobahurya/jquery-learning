<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12">
                <h1>JQUERY DERSLERİ</h1>
                <p id="anapgizle">Tıklayınca Gizle</p>
                <p id="anapgizle">Tıklayınca Gizle1</p>
                <code>
                <b>Yazıya Tıklayınca Gizleme Kod Çıktısı</b><br>
                $("p#anapgizle").css({<br>
                    "font-family":"Cursive",<br>
                    "font-weight":"bold",<br>
                    "font-size":"15px",<br>
                    "color":"#3a6b9c",<br>
                    "cursor":"pointer"<br>
                });<br>
                <br>//Tıklayınca yazıyı gizleyen kod bloğu<br>
                $("p#anapgizle").click(function(){<br>
                    $(this).hide();    <br>
                });
                </code>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>