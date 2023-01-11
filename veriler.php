<?php include "head.php"; ?>
<body>
    <div class="container">
        <div class="row">
            <?php include "ders-menu.php"; ?>
            <div class="col-md-12 ajaxloadsetintervalcekilecekveriler">
                <h1>JQUERY DERSLERİ</h1>
                <h4>AJAX</h4>
                <h4>JQUERY</h4>
                <h4>php</h4>

            </div>
            <div id="bunucekload">
                <ul>
                    <li>HTML</li>
                    <li>CSS3</li>
                    <li>PYTHON</li>
                </ul>
            </div>
            <div class="tabloyucek">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>İD</th>
                            <th>KULLANICI ADI</th>
                            <th>AD</th>
                            <th>SOYAD</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $kayitsor=$baglanamk->prepare("SELECT * FROM kayit order by kayit_id DESC");
                            $kayitsor->execute();
                            while($kayitcek=$kayitsor->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $kayitcek["kayit_id"]; ?></td>
                            <td><?php echo $kayitcek["kayit_kadi"]; ?></td>
                            <td><?php echo $kayitcek["kayit_adi"]; ?></td>
                            <td><?php echo $kayitcek["kayit_soyadi"]; ?></td>
                            <td width="25"><button id="<?php echo $kayitcek["kayit_id"]; ?>" class="btn btn-primary kayitduzenle">Düzenle</button></td>
                            <td width="25"><button id="<?php echo $kayitcek["kayit_id"]; ?>" class="btn btn-danger kayitsil">Sil</button></td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php include "footer.php"; ?>