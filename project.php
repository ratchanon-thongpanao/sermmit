<?php include("head.php") ?>

<body>
<?php include("nav.php") ?>

        <div class="row" style="background-color: rgb(250, 249, 247);  border-radius: 10px;">
            <div class="col-lg-2">
            <?php include("sidebar.php") ?>
            </div>

            <div class="col-lg-7">
                <br>
                <p style="display: flex; justify-content: center;">ยินดีต้อนรับเข้าสู่เว็บไซต์ โรงเรียนเสริมมิตรวิทยาค่ะ...</p>
                <!--Carousel-->
                <div style="display: flex; justify-content: center;">
                    <div id="carouselExampleIndicators" class="carousel slide" style="width: 500px; height: 400px;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/x01.jpg" style="width: 500px; height: 400px;" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/x02.jpg" style="width: 500px; height: 400px;" class="d-block" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/x03.jpg" style="width: 500px; height: 400px;" class="d-block" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; background-image: linear-gradient(90deg, rgba(25, 136, 247, 1) 0%, rgba(255, 255, 255, 1) 100%); border-radius: 10px; padding: 5px;">
                    <a>ข่าวประชาสัมพันธ์ </a>
                    <a href="news.php">อ่านทั้งหมด</a>
                </div>
                <br>
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; ">
                        <p>ข่าวสารประจำเดือนสิงหาคม </p>
                        <p>05 ส.ค. 67</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p>รับสมัครครูสอนภาษาจีน </p>
                        <p>19 ก.ค. 67</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p>ข่าวสารประจำเดือนกรกฏาคม </p>
                        <p>03 ก.ค. 67</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p>ข่าวสารประจำเดือนมิถุนายน </p>
                        <p>31 พ.ค. 67</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p>เปิดภาคเรียนที่ 1 ปีการศึกษา 2567 </p>
                        <p>17 พ.ค. 67</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p>ข่าวสารประชาสัมพันธ์กิจกรรมประจำเดือนพฤษภาคม 2567 </p>
                        <p>30 เม.ย. 67</p>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <p>รายละเอียดค่าเทอมปีการศึกษา 1/2567 (เด็กเก่า) </p>
                        <p>20 เม.ย. 67 </p>
                    </div>
                </div>

                <br>
                <div style="display: flex; justify-content: space-between; align-items: center; background-image: linear-gradient(90deg, rgba(92, 255, 141, 1) 1%, rgba(255, 255, 255, 1) 100%);border-radius: 10px; padding: 5px;">
                    <a>ภาพกิจกรรม </a>
                    <a href="#">ดูทั้งหมด</a>
                </div>
                <br>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="container">
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img1.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <p style="display: flex; justify-content: center;">กิจกรรมวันรักษ์ภาษาไทย</p>
                            <br>
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img2.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <p style="display: flex; justify-content: center;">กิจกรรมคุณพ่อคุณแม่หนูคุณครูเพื่อน</p>
                            <br>
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img3.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <p style="display: flex; justify-content: center;">กิจกรรมแห่เทียนพรรษา</p>
                            <br>
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img4.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <pre style="display: flex; justify-content: center; font-size: 80%;">โครงการ การศึกษาเพื่อต่อต้านการใช้ยาเสพติด
        ในเด็กนักเรียน D.A.R.E</pre>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="container">
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img5.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <p style="display: flex; justify-content: center;">กิจกรรมเฉลิมพระชนมพรรษารัชกาลที่ 10</p>
                            <br>
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img6.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <p style="display: flex; justify-content: center;">การประเมินงานประกันคุณภาพภายนอก</p>
                            <br>
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img7.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <p style="display: flex; justify-content: center;">นิเทศติดตามประกันคุณภาพการศึกษาภายในสถานศึกษา </p>
                            <br>
                            <div style="display: flex; justify-content: center;">
                                <img src="img/img8.jpg" style="  width: 150px; height: 150px; ">
                            </div>
                            <p style="display: flex; justify-content: center;">กิจกรรมวันสถาปนาลูกเสือ </p>
                            <br>
                        </div>
                    </div>

                </div>
                <br>
                <div style="display: flex; justify-content: space-between; align-items: center; background-image: linear-gradient(90deg, rgba(245, 112, 255, 1) 1%, rgba(255, 255, 255, 1) 100%);border-radius: 10px; padding: 5px;">
                    <a>ข่าวการศึกษา </a>
                    <a href="#">ดูทั้งหมด</a>
                </div>
                <br>
                <div style="display: flex; margin-bottom: 10px;">
                    <img src="img/news1.jpg" width="100px">
                    <p style="margin-left: 10px;">สาวขอความเป็นธรรม สอบติด
                        13 ก.ย. 67 | <span style="color: red;">อ่าน 181 ครั้ง </span></p>
                </div>
                <div style="display: flex; margin-bottom: 10px;">
                    <img src="img/news2.jpg" width="100px">
                    <p style="margin-left: 10px;">สพฐ. ดันผลงานดีเด่นด้าน Coding ชูศักยภาพนักเรียนไทยด้านการคิดสู่การศึกษาโลกดิจิทัล
                        09 ก.ย. 67 | <span style="color: red;">อ่าน 201 ครั้ง </span></p>
                </div>
                <br>
                <div style="display: flex; justify-content: center;">
                    <a href="#"><img src="img/135x90.jpg" style="  width: 150px; height: 150px; "></a>
                </div>



            </div>









            <div class="col-lg-3">
                <a href="#">
                    <img src="menu/menu01.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu02.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu03.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu04.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu05.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu06.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu07.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu08.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu09.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu10.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu11.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu12.png" style="width: 200px;">
                </a>
                <a href="#">
                    <img src="menu/menu13.png" style="width: 200px;">
                </a>

            </div>


        </div>
    </div>





    <?php include("footer.php") ?>


