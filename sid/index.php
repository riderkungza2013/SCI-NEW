<!doctype html>
<html lang="en">

<head>

    <?php include('../components/style.php'); ?>
</head>

<body>
<div class="menu">
            <div class="toggle">
                <ion-icon name="share-social"></ion-icon>
            </div>

            <li style="--i:0;--clr:#1877f2">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            </li>
            <li style="--i:1;--clr:#25d366">
                <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
            </li>
            <li style="--i:2;--clr:#1da1f2">
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
            </li>
            <li style="--i:3;--clr:#FF5733">
                <a href="#"><ion-icon name="logo-reddit"></ion-icon></a>
            </li>
            <li style="--i:4;--clr:#0a66c2">
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
            </li>
            <li style="--i:5;--clr:#c32aa3">
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </li>
            <li style="--i:6;--clr:#1b1e21">
                <a href="#"><ion-icon name="logo-github"></ion-icon></a>
            </li>
            <li style="--i:7;--clr:#ff0000">
                <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
            </li>
        </div>
    <?php include('../components/navbar.php'); ?>
    <div style="
        background-color:white;
        padding: 50px;
        margin: 20px;
        margin-top: 30px;
        width: 90%;
        margin-left: 5%;
        border-radius: 50px;
      ">
        
        <div class="container">

            <!-- content here -->
            <div class="pricing-header px-3 py-3 pt-md-5 mx-auto text-center">
                <img src="https://cdn.pic.in.th/file/picinth/90-years-VALAYA2-scaledac5da246faa2e4d5.png" style=" height:100px;">
                <h4 class="display-8">ปริญญาเอก</h4>
                <h1 class="display-4">สาขาวิชาวิทยาศาสตร์และนวัตกรรมเพื่อการพัฒนา</h1>
                <a class="navbar-brand" href="#">
                    <img src="http://agri.vru.ac.th/img/divider-short.png" alt="Logo" width="150" height="20">
                </a>
            </div>
            <!-- Nav -->
            <div class="center-text">

                <div class="tx1">วิชาเอก</div>
                <div class="tx2">-</div>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="ภาพรวม-tab-pane" aria-selected="true">ภาพรวม</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="โครงสร้าง-tab-pane" aria-selected="false">โครงสร้าง</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="แผนการเรียน-tab-pane" aria-selected="false">แผนการเรียน</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="อาจารย์-tab" data-bs-toggle="tab" data-bs-target="#อาจารย์-tab-pane" type="button" role="tab" aria-controls="อาจารย์-tab-pane" aria-selected="false">อาจารย์</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><?php include('../sid/overview.php'); ?></div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?php include('../sid/structure.php'); ?></div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0"><?php include('../sid/plan.php'); ?></div>
                <div class="tab-pane fade" id="อาจารย์-tab-pane" role="tabpanel" aria-labelledby="อาจารย์-tab" tabindex="0"><?php include('../sid/teacher.php'); ?></div>
            </div>


            <!-- end content here -->
        </div>
    </div>
    <?php include('../components/footer.php'); ?>
    <?php include('../components/script.php'); ?>
</body>

</html>