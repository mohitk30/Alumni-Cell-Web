<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/date-picker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/pages-css/team.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Team @Alumni Cell</title>
</head>

<body>
    <header class="header-area">

        <?php
        include_once("header.php");
        ?>
        </div>


        <div class="navbar-area">

            <?php
            include_once("menu.php");
            ?>

    </header>


    <div class="modal fade search-modal-area" id="exampleModalsrc">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" data-bs-dismiss="modal" class="closer-btn">
                    <i class="ri-close-line"></i>
                </button>
                <div class="modal-body">
                    <form class="search-box">
                        <div class="search-input">
                            <input type="text" name="Search" placeholder="Search for..." class="form-control">
                            <button type="submit" class="search-btn">
                                <i class="ri-search-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="team-container">
        <div class="row mt-2 text-center">
            <div class="col-md-10 mx-auto team-inner-container text-center my-3 shadow">
                <div class="row">
                    <div class="col-12 my-2">
                        <h1>The TEAM 2022</h1>
                        <hr>
                    </div>
                </div>
                <div class="row d-flex justify-content-evenly team-member-block">
                    <!-- HERE TEAM CARD WILL BE DISPLAYED  -->
                    <!--    DEMOCARD
                    <div class="col-md-3 col-11 my-4 mx-md-3">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/team/yash.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center">
                                <div id="member-name">Deepak Sharma</div>
                                <div id="member-occupation">(Web Head)</div>
                                </p>
                                <div class="social-link-container">
                                    <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a href="tel:+91-9992912345" target="_blank"><i class="bi bi-telephone-fill"></i></a>
                                    <a href="mailto:123@gmail.com" target="_blank"><i class="bi bi-envelope-fill"></i></a>
                                    <a href="#" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="p-5">
        <div class="team-card" style="width:300px;height:500px;padding:5px;">
            <img src="assets/images/team/yash.jpg" alt="team" class="team-img" height="400px" width="300px">
            <div class="team-card-detail" style="height:100px;">
                <h1 style="text-align: center;">Yash Phogat</h1>
                <p style="font-size: 1rem;text-align: center;">President</p>
                <p style="font-size: 1rem;text-align: center;">Contact No:-9667650530</p>
            </div>
        </div>
    </div> -->

</body>

<script>
    const TeamArr = [{
            name: 'Deepak Sharma',
            occupation: 'Web Head',
            imglink: 'https://drive.google.com/open?id=12ER_XjALlvBNvik1wsbNnPHdUujALXVX',
            linkdin: '#',
            phone: '+91-9992912345',
            email: '123@gmail.com',
            instagram: '#'
        },
        {
            name: 'Deepak Sharma',
            occupation: 'Web Head',
            imglink: 'assets/images/team/yash.jpg',
            linkdin: '#',
            phone: '+91-9992912345',
            email: '123@gmail.com',
            instagram: '#'
        },
        {
            name: 'Deepak Sharma',
            occupation: 'Web Head',
            imglink: 'assets/images/team/yash.jpg',
            linkdin: '#',
            phone: '+91-9992912345',
            email: '123@gmail.com',
            instagram: '#'
        },
        {
            name: 'Deepak Sharma',
            occupation: 'Web Head',
            imglink: 'assets/images/team/yash.jpg',
            linkdin: '#',
            phone: '+91-9992912345',
            email: '123@gmail.com',
            instagram: '#'
        },
        {
            name: 'Deepak Sharma',
            occupation: 'Web Head',
            imglink: 'assets/images/team/yash.jpg',
            linkdin: '#',
            phone: '+91-9992912345',
            email: '123@gmail.com',
            instagram: '#'
        }
    ]

    const TeamContainer = document.querySelector('.team-member-block');

    TeamArr.map((obj) => {
        const litral = `<div class="col-md-3 col-11 my-4 mx-md-3">
                        <div class="card">
                            <img class="card-img-top" src='${obj.imglink}' alt="Card image cap" onerror=this.src="assets/images/team/Alternate.jpg">
                            <div class="card-body">
                                <p class="card-text text-center">
                                <div id="member-name">${obj.name}</div>
                                <div id="member-occupation">(${obj.occupation})</div>
                                </p>
                                <div class="social-link-container">
                                    <a href='${obj.linkdin}' target="_blank"><i class="bi bi-linkedin"></i></a>
                                    <a href="tel:${obj.phone}" target="_blank"><i class="bi bi-telephone-fill"></i></a>
                                    <a href="mailto:${obj.email}ank"><i class="bi bi-envelope-fill"></i></a>
                                    <a href="${obj.instagram}" target="_blank"><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>`

        TeamContainer.innerHTML += litral;
    });
</script>

</html>