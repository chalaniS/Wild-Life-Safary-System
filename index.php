<!-- DIleep -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Quest</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/home.css">
    <script src="./js/home.js"></script>
</head>

<body>

    <!-- includeing header using php -->
    <?php include "./header.php" ?>

    <!-- Image slider code -->
    <div class="slideshow-container">
        <!-- Slide counter -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="images/slide-1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="images/slide-2.jpg" style="width:100%; height:100%;">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="images/slide-3.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="images/slide-4.jpg" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a id="prev" onclick="plusSlides(-1)" class="prev">&#10094;</a>
        <a id="next" onclick="plusSlides(1)" class="next">&#10095;</a>

        <!-- The dots/circles -->
        <div class="beacons" style="text-align:center">
            <span id="d-one" class="dot" onclick="currentSlide(1)"></span>
            <span id="d-two" class="dot" onclick="currentSlide(2)"></span>
            <span id="d-three" class="dot" onclick="currentSlide(3)"></span>
            <span id="d-four" class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>

    <div class="package-sector">
        <div class="pack-intro" style="font-weight: 300;">
            <p>Recommended Wildlife Tours in Sri Lanka, suited for anyone <br>who would like to feel beauty of the
                wildlife</p>
        </div>
        <div class="package-grid">
            <div class="pack" id="p1">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">01</p>
                        <p class="days">Night</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p2">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">02</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p3">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">05</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p4">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">07</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p5">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">10</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p6">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">06</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p7">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">04</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p8">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">02</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p9">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">08</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p10">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">20</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>

            <div class="pack" id="p11">
                <div class="pic-polygon">
                    <div class="night-count">
                        <p class="count">20</p>
                        <p class="days">Nights</p>
                    </div>
                </div>
                <div class="price">$120.00 PP</div>
                <div class="trip-det">
                    <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                    <p class="l2">Udawalawa NP & Yala NP</p>
                    <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
                </div>
            </div>
        </div>
</body>
<?php include "./footer.php" ?>
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
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
}

showSlides();
autoshowSlides();

function autoshowSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(autoshowSlides, 5000); // Change image every 5 seconds
}
</script>

</html>