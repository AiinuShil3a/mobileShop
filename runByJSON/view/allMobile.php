<div class="col mb-5">
    <div class="card h-150">
        <a href="controller/detailMobile.php?id=<?=$result2->id;?>" class="card-link">
            <!-- Product image-->
            <img class="card-img-top" src="assets/img/<?=$result2->imgMobile;?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-left">
                    <!-- Product name-->
                    <h5 class="fw-bolder course-name">
                        <center>
                            <?=$result2->nameMobile;?>
                        </center>
                    </h5>
                    <!-- course tag line-->
                    <div class="course-note"><i class="fa fa-shield"></i> ราคา: &nbsp;
                        <?=$result2->seleMobile;?>
                    </div>
                    <!-- <div class="course-note"><i class="fas fa-graduation-cap"></i> - </div> -->
                    <div class="course-note"><i class="fa fa-futbol-o"></i> รุ่นโทรศัพท์: &nbsp;
                        <?=$result2->osMobile;?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>