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
                                    <a href="tel:" target="_blank"><i class="bi bi-telephone-fill"></i></a>
                                    <a href="mailto:" target="_blank"><i class="bi bi-envelope-fill"></i></a>
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
            name: 'Ayushi Arya',
            occupation: 'General Secretary',
            imglink: 'assets/team/Ayushi_Arya.jpeg',
            linkdin: 'https://www.linkedin.com/in/ayushi-arya-89705b210/',
            phone: '9311432678',
            email: '201210012@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Deepak Gupta',
            occupation: 'General Secretary',
            imglink: 'assets/team/DEEPAK GUPTA.jpg',
            linkdin: 'https://www.linkedin.com/in/deepak-gupta-b244391b9/',
            phone: '9694318396',
            email: '201220017@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Deepak Sharma',
            occupation: 'Development Head',
            imglink: 'assets/team/DEEPAK SHARMA.jpeg',
            linkdin: 'https://www.linkedin.com/in/deepak-sharma-66968120a/',
            phone: '8306868921',
            email: '201210014@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Dev Srivastava',
            occupation: 'Development Head',
            imglink: 'assets/team/Dev Srivastava.jpg',
            linkdin: 'https://www.linkedin.com/in/dev-srivastava-76ba31222',
            phone: '6387660520',
            email: 'devsrivastava898@gmail.com',
            instagram: '#'
        },
        {
            name: 'Devansh Gahlawat',
            occupation: 'Designer Head',
            imglink: 'assets/team/DEVANSH GAHLAWAT.jpg',
            linkdin: 'https://www.linkedin.com/in/devansh-gahlawat-461838239',
            phone: '9817728471',
            email: '211220017@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Dhruv Tyagi',
            occupation: 'Database Head',
            imglink: 'assets/team/DHRUV TYAGI.jpg',
            linkdin: 'https://www.linkedin.com/in/dhruv-tyagi-58a9aa22a',
            phone: '8800377612',
            email: '211220018@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'K Siddharth',
            occupation: 'PR Head',
            imglink: 'assets/team/K SIDDHARTH.jpg',
            linkdin: 'https://www.linkedin.com/in/siddharth-k-3009b4172',
            phone: '7907148789',
            email: '211230027@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Mohit kumar',
            occupation: 'Coordinator',
            imglink: 'assets/team/Mohit Kumar.jpeg',
            linkdin: 'https://www.linkedin.com/in/mohit-kumar-605669202/',
            phone: '9829906261',
            email: 'themohitkumarmk@gmail.com',
            instagram: '#'
        },
        {
            name: 'Moulik Sharma',
            occupation: 'Coordinator',
            imglink: 'assets/team/Moulik Sharma.jpeg',
            linkdin: 'www.linkedin.com/in/m--1b3586221',
            phone: '7303557727',
            email: '211210039@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Rakshit Singh',
            occupation: 'Coordinator',
            imglink: 'assets/team/Alternate.jpg',
            linkdin: '#',
            phone: '7462012290',
            email: '201220036@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Rishabh Raj',
            occupation: 'Coordinator',
            imglink: 'assets/team/RISHABH RAJ.jpg',
            linkdin: '#https://www.linkedin.com/in/rishabh-raj-1235771a2',
            phone: '6395628967',
            email: '211230046@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Sajal Sahu',
            occupation: 'Coordinator',
            imglink: 'assets/team/SAJAL SAHU.jpeg',
            linkdin: ' https://www.linkedin.com/in/sajalsahu8',
            phone: '8349881787',
            email: '211210056@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Sanskar Kumar',
            occupation: 'Coordinator',
            imglink: 'assets/team/Alternate.jpg',
            linkdin: 'https://www.linkedin.com/in/sanskar-kumar-52aa551a9/',
            phone: '9667650530',
            email: '201220039@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Shreyansh Raj',
            occupation: 'Coordinator',
            imglink: 'assets/team/SHREYANSH RAJ.jpeg',
            linkdin: 'https://www.linkedin.com/in/shreyansh-raj-9bbba5226',
            phone: '9798530423',
            email: '211230051@nitdelhi.ac.in ',
            instagram: '#'
        },
        {
            name: 'Shweta Rana',
            occupation: 'Coordinator',
            imglink: 'assets/team/SHWETA RANA.jpg',
            linkdin: 'www.linkedin.com/in/shweta-rana-sr04',
            phone: '9810916185',
            email: '211210063@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Sonali Kashyap',
            occupation: 'Coordinator',
            imglink: 'assets/team/SONALI KASHYAP.jpeg',
            linkdin: 'www.linkedin.com/in/sonali-kashyap-6a2b7422b',
            phone: '7970760168',
            email: '211210065@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Sunny Maurya',
            occupation: 'Coordinator',
            imglink: 'assets/team/SUNNY MAURYA.jpg',
            linkdin: 'https://www.linkedin.com/in/sunnymaurya6327/',
            phone: '9610583077',
            email: '211230056@nitdelhi.ac.in',
            instagram: '#'
        },
        {
            name: 'Umang Kumar',
            occupation: 'Coordinator',
            imglink: 'assets/team/Umang Kumar.jpeg',
            linkdin: 'https://www.linkedin.com/in/umangkumarr',
            phone: '9634916827',
            email: '201210051@nitdelhi.ac.in',
            instagram: '#'
        },
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