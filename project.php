<?php include('header.php') ?>
<style>
    * {
        box-sizing: border-box;
    }

    .row>.items {
        padding: 0 8px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .items {
        float: left;
        width: 25%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        position: fixed;
        /* z-index: 1; */
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        background-color: black;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
        text-align: center;
    }

    /* The Close Button */
    .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
    }

    .mySlides {
        display: none;
    }

    .cursor {
        cursor: pointer;
    }

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
        background-color: white;
    }

    /* Number text (1/3 etc) */
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    img {
        margin-bottom: -4px;
    }

    .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
    }

    .demo {
        opacity: 0.6;
    }

    .active,
    .demo:hover {
        opacity: 1;
    }

    img.hover-shadow {
        transition: 0.3s;
    }

    .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<!-- ==================== Start Slider ==================== -->

<header class="pages-header work-header bg-img valign" data-background="img/bg/bg3.jpg" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Our Project</h1>
                    <div class="path">
                        <a href="index.php">Home</a><span>/</span><a href="#0" class="active">Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Slider ==================== -->



<!-- ==================== Start works ==================== -->

<section class="portfolio section-padding">
    <div class="container">
        <div class="row">

            <!-- filter links -->
            <!-- <div class="filtering text-center col-12">
                    <div class="filter box">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.interior'>Interior</span>
                        <span data-filter='.theaters'>Theaters</span>
                        <span data-filter='.residential'>Residential</span>
                    </div>
            </div> -->

            <!-- gallery -->
            <div class="gallery twsty inf-lit full-width">
                <div class="row">

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/1.webp" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Er.Sathymoorthy</h5>
                                <span>Structural design</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/2.webp" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr. Chelladurai</h5>
                                <span>Renovation, Construction, Architectural Drawings</span><br>
                                <span>Thuraiyur</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/3.webp" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr.Jeffrey</h5>
                                <span>Construction, Architectural Elevation</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/4.webp" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr.Ragupathi</h5>
                                <span>Construction, Architectural Elevation, Interior design</span><br>
                                <span>Chennai</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/5.webp" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr.Antony</h5>
                                <span>Civil Construction, Structural design</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/6.webp" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr.Peter</h5>
                                <span>Civil Construction, Structural design</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/7.webp" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Truhomes Promoters</h5>
                                <span>Civil Construction</span><br>
                                <span>Thanjavur</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/8.webp" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Truhomes Promoters</h5>
                                <span>Civil Construction, Structural design</span><br>
                                <span>Thanjavur</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/9.webp" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mrs. Asma</h5>
                                <span>Civil Construction, Structural design</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/10.webp" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr.Rafeek</h5>
                                <span>Civil Construction</span><br>
                                <span>Thanjavur</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/11.webp" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mrs. Kavitha</h5>
                                <span>Civil Construction</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/12.webp" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr. Unoose Ayoob</h5>
                                <span>Bhavish Architect</span><br>
                                <span>Adithanar</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/13.webp" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Mr. Balaji</h5>
                                <span>Civil Construction</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/14.webp" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Residence</h5>
                                <span>Gowtham Srinath Architects</span><br>
                                <span>Theni</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/15.webp" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Dalmia Gateway</h5>
                                <span>Pragadeesh Architect, Studio Think</span><br>
                                <span>Lalgudi</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/16.webp" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Apartment</h5>
                                <span>Vedha Kumaran Architect</span><br>
                                <span>Navalpattu</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/17.webp" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Dr. Justin Residence</h5>
                                <span>Vishnu and Bhavish Architect</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/18.webp" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Chandran Residence</h5>
                                <span>Gayathri Architect, Sarah Design Scape</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/19.webp" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Gowranga Illam</h5>
                                <span>Karthick Architect</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/20.webp" style="width:100%; height: 450px;" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Residence</h5>
                                <span>Vedha Kumaran Architect</span><br>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img">
                            <img src="img/portfolio/mas/21.webp" style="width:100%; height:450px;" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Eden Garden</h5>
                                <span>Sekkizhar Architect</span><br>
                                <span>Trichy</span>
                            </div>
                        </div>
                    </div>

                    <div class="items theaters three-column mt-50">
                        <div class="item-img bg-img" style="height: 300px; width: 500px;">
                            <img src="img/portfolio/mas/22.webp" style="width:100%;" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
                            <div class="info mt-10">
                                <h5>Residence</h5>
                                <span>Ar.K K.Karthick, ADS Architecture</span><br>
                                <span>Perambalur</span>
                            </div>
                        </div>
                    </div>


                    <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">
                            <div class="mySlides">
                                <img src="img/portfolio/mas/1.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/2.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/3.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/4.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/5.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/6.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/7.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/8.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/9.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/10.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/11.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/12.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/13.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/14.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/15.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/16.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/17.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/18.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/19.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/20.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/21.webp" style="width:40%">
                            </div>
                            <div class="mySlides">
                                <img src="img/portfolio/mas/22.webp" style="width:40%">
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- ==================== End works ==================== -->

<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>


<?php include('footer.php') ?>