<!-- dileep -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Camping</title>
    <link rel="stylesheet" href="./css/wildcamping.css">
    <!-- <link rel="stylesheet" href="./css/home.css" > -->
</head>

<body>
    <?php include "./header.php" ?>
    <div class="card-container">
        <div class="pack" id="p1">
            <div class="pic-polygon">
                <div class="night-count">
                    <p class="count">05</p>
                    <p class="days">Nights</p>
                </div>
            </div>
            <div class="price">$1200.00 PP</div>
            <div class="trip-det">
                <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                <p class="l2">Udawalawa NP & Yala NP</p>
                <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
            </div>
            <div class="descrip">
                <p class="l4">Udawalawe National Park lies on the boundary of Sabaragamuwa and Uva Provinces, in Sri
                    Lanka. The national park was created to provide a sanctuary for wild animals displaced by the
                    construction of the Udawalawe Reservoir on </p>
            </div>
            <a href="https://www.srilankansafari.com/general_safari_tours_option_01_1_night.php">
                <div class="read-more-btn">Read More</div>
            </a>
        </div>

        <div class="pack" id="p2">
            <div class="pic-polygon">
                <div class="night-count">
                    <p class="count">02</p>
                    <p class="days">Nights</p>
                </div>
            </div>
            <div class="price">$500.00 PP</div>
            <div class="trip-det">
                <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                <p class="l2">Wilpattu</p>
                <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
            </div>
            <div class="descrip">
                <p class="l4">Wilpattu National Park (Willu-pattu; Land of Lakes) is a park located on the island of Sri
                    Lanka. The unique feature of this park is the existence of "Willus" (natural lakes) - natural,
                    sand-rimmed water basins or depressions</p>
            </div>
            <a href="https://www.srilankansafari.com/general_safari_tours_option_05_1_night.php">
                <div class="read-more-btn">Read More</div>
            </a>
        </div>

        <div class="pack" id="p3">
            <div class="pic-polygon">
                <div class="night-count">
                    <p class="count">02</p>
                    <p class="days">Nights</p>
                </div>
            </div>
            <div class="price">$520.00 PP</div>
            <div class="trip-det">
                <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                <p class="l2">Wasgamuwa</p>
                <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
            </div>
            <div class="descrip">
                <p class="l4">Wasgamuwa National Park is a natural park in Sri Lanka situated in the Matale and
                    Polonnaruwa Districts . It was declared to protect and to make a refuge for the displaced wild
                    animals</p>
            </div>
            <a href="https://www.srilankansafari.com/general_safari_tours_option_05_1_night.php">
                <div class="read-more-btn">Read More</div>
            </a>

        </div>

        <div class="pack" id="p4">
            <div class="pic-polygon">
                <div class="night-count">
                    <p class="count">02</p>
                    <p class="days">Nights</p>
                </div>
            </div>
            <div class="price">$320.00 PP</div>
            <div class="trip-det">
                <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                <p class="l2">Udawalawa NP & Yala NP</p>
                <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
            </div>
            <div class="descrip">
                <p class="l4">Udawalawe National Park lies on the boundary of Sabaragamuwa and Uva Provinces, in Sri
                    Lanka. The national park was created to provide a sanctuary for wild animals displaced by the
                    construction of the Udawalawe Reservoir on </p>
            </div>
            <a href="https://www.srilankansafari.com/general_safari_tours_option_01_1_night.php">
                <div class="read-more-btn">Read More</div>
            </a>
        </div>
        <div class="pack" id="p5">
            <div class="pic-polygon">
                <div class="night-count">
                    <p class="count">02</p>
                    <p class="days">Nights</p>
                </div>
            </div>
            <div class="price">$420.00 PP</div>
            <div class="trip-det">
                <p class="l1">2 Days wildlife tour of <br>Sri Lanka</p>
                <p class="l2">Udawalawa NP & Yala NP</p>
                <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
            </div>
            <div class="descrip">
                <p class="l4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero commodi tempora recusandae,
                    non sequi molestiae maxime voluptatem a nostrum omnis nisi fugit, dicta rem id, architecto dolore.
                    Vel, iusto quod?</p>
            </div>
            <a href="https://www.srilankansafari.com/general_safari_tours_option_05_1_night.php"
                <?php if (isset($_SESSION['user_ID'])) { ?>>
                <div class="read-more-btn">Read More<?php } ?></div>
            </a>
        </div>
        <div class="pack" id="p6">
            <div class="pic-polygon">
                <div class="night-count">
                    <p class="count">02</p>
                    <p class="days">Nights</p>
                </div>
            </div>
            <div class="price">$820.00 PP</div>
            <div class="trip-det">
                <p class="l1">6 Days wildlife tour of <br>Sri Lanka</p>
                <p class="l2">Udawalawa NP & Yala NP</p>
                <p class="l3">Colombo - Udawalawe - Yala - Colombo</p>
            </div>
            <div class="descrip">
                <p class="l4">Udawalawe National Park lies on the boundary of Sabaragamuwa and Uva Provinces, in Sri
                    Lanka. The national park was created to provide a sanctuary for wild animals displaced by the
                    construction of the Udawalawe Reservoir on </p>
            </div>
            <a href="https://www.srilankansafari.com/general_safari_tours_option_01_1_night.php">
                <div class="read-more-btn">Read More</div>
            </a>
        </div>
    </div>



    </div>


    </div>

    </div>
    </div>
    </div>
    </div>

    </div>
    <?php include "./footer.php" ?>
</body>

</html>