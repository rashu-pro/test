<?php// Prayer Time Widget - Hero Section
function prayer_times_widget_shortcode() {
    ob_start(); // Start output buffering
    ?>

    <style>
        /* prayer times */
.time-list3 {
    margin: 0;
    padding: 0;
}
.time-list3 > li {
    padding: 10px 10px !important;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 145px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    flex: 1;
}
.time-list3 > li.error-li {
    width: 100%;
    flex: 0 0 100%;
    max-width: 100%;
}
.time-list3 > li span {
    display: block;
    width: 100%;
    text-align: center;
    z-index: 1;
    color:#fff;
}
.time-list3 > li span.ntime {
    margin-bottom: 0;
}
.time-list3 > li span.ntime.jummah {
    margin-top: 0;
}
.time-list3 > li span.start-time.jummah-l:not(:first-child) {
    padding-top: 10px;
    border-top: 1px solid #465d4b;
    margin-top: 5px;
}
@media (min-width: 768px) {
    .time-list3 > li {
        padding: 10px 25px;
   }
}
@media (min-width: 1071px) {
    .time-list3li {
        flex: 0 0 16.66667% !important;
        max-width: 16.66667% !important;
   }
}
div#countdown-container {
    margin-top: -30px !important;
}
div#countdown-container #namaz-counter > p {
    font-size: 16px;
}
.prayer-times-floating {
    max-width: 300px;
    background-color: #fff;
    border-radius: 5px 0 0 5px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
    position: fixed;
    bottom: 0;
    right: 0;
    z-index: 99999;
    overflow: hidden;
}
@media (min-width: 768px) {
    .prayer-times-floating {
        min-width: 340px;
   }
}
.prayer-times-floating .table {
    margin-bottom: 0;
}
.prayer-times-floating .table .tr-heading {
    background: #c6d1f3;
    font-weight: 600;
    text-transform: uppercase;
}
.prayer-times-floating .table td {
    width: 50%;
}
.prayer-times-floating.toggled {
    z-index: 9999999;
}
.prayer-times-head {
    padding: 10px 20px;
   /* text-align: center;
    */
    background: #9c27b0;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
}
.prayer-times-head h3 {
    margin: 0;
    font-size: 20px;
}
.prayer-times-head h3 span {
    display: none;
}
.prayer-times-head.toggled h3 span {
    display: inline-block;
}
.prayer-times-head.toggled .prayer-times-toggle-icon i:before {
    content: '\f078';
}
.prayer-times-body {
    padding: 0;
    display: none;
    border-top: 1px solid #ddd;
}
.prayer-times-toggle-icon {
    width: 25px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #222;
    -webkit-border-radius: 0.2rem;
    -moz-border-radius: 0.2rem;
    border-radius: 0.2rem;
    color: #fff;
    margin-left: 20px;
}
.jummah-row {
    background-color: #ebf0ff;
}
.daily-namaz-row {
    background-color: #fff;
}
@media (max-width: 767px) {
    .time-wrap3.overlap245 {
        margin-top: -9.3125rem !important;
   }
    .time-wrap3.overlap245 .sec-title {
        margin-bottom: 1.8125rem;
   }
    .time-wrap3.overlap245 .sec-title-inner > h2 {
        font-size: 24px !important;
   }
    .time-wrap3.overlap245 div#countdown-container {
        margin-top: -15px !important;
   }
    .time-wrap3.overlap245 div#countdown-container #namaz-counter > p {
        padding: 0px 5px 0px 0;
   }
}
.jummah-time {
    color: #fff;
    display: flex;
    justify-content: center;
    padding: 10px 15px;
   /* display: inline-block;
    */
   /* min-width: 300px;
    */
   /* border-radius: 30px;
    */
    margin-top: 0px;
    z-index: 111;
    position: relative;
   /* margin: 0 auto;
    */
    text-align: center;
    align-self: center;
   /* margin-left: 319px;
    */
    top: -10px;
   /* box-shadow: 0 0 5px;
    */
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
}
.jummah-time-wrapper {
    background: #283b6f;
    text-align: center;
}
.jummah-time-wrapper .jummah-section-title {
    color: #fff;
    margin: 0;
    padding: 15px 0 30px 0;
    display: inline-block;
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    position: relative;
}
.jummah-time-wrapper .jummah-section-title:after {
    content: '';
    position: absolute;
    bottom: 18px;
    left: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: #fff;
}
.jummah-time-block {
    padding: 5px 10px;
   /* background: #fff;
    */
    line-height: 1;
    border-radius: 30px;
    padding-right: 30px;
    position: relative;
}
.jummah-time-block:after {
    content: "/";
    position: absolute;
    right: 8px;
    font-size: 32px;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif;
    top: 50%;
    transform: translateY(-46%);
}
.jummah-time-block:last-child {
    padding-right: 0;
}
.jummah-time-block:last-child:after {
    display: none;
}
.time-list3>li{
    position: relative;
}
.time-list3>li:before{
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: #9C27B0;
    opacity: 0.5;
}
.time-list3>li {
    background-color: #147736
}

.time-list3>li:nth-child(2n),
.time-list3 .grn-layer2:before {
    background-color: #0a993c
}

div#countdown-container #namaz-counter {
    background: #fff;
    width: 260px;
    border-radius: 20px;
    padding: 0px 0px;
    margin: 0 auto;
}
div#countdown-container #namaz-counter > p {
    font-size: 1rem;
    display: inline-block;
    padding:5px 5px 5px 0;
    font-family: Poppins;
    font-weight: 600;
	margin:0;
	line-height:1.2;
}
div#countdown-container #namaz-counter span {
    font-size: 11px;
    font-family: Poppins;
    font-weight: 400;
}
center{
	position:absolute;
	left:0;
	right:0;
	margin-left:auto;
	margin-right:auto;
	z-index:99;
}
.time-wrap3 {
    position: relative;
}
div#countdown-container {
    margin-top: -15px;
}
    </style>

<section class="namaz-times-wrapper">
        <div class="w-100 position-relative">
            <div class="container">
                <div class="time-wrap3 overlap245 overlap-60 position-relativ w-100">
                    <div class="sec-title text-center w-100">
                        <div class="sec-title-inner d-inline-block">
                            <h2 class="mb-0 text-white">Today's Prayer Times</h2>
                            <!--                                <p class="mb-0 thm-clr">-->
                            <!--</p>-->
                        </div>
                    </div><!-- Sec Title -->

                    <center>
                        <div id="countdown-container">
                            <!--                                <div id="namaz-counter"><p>Next In: </p><span id="hours">1 Hours </span><span id="minutes">32 Minutes </span><span id="seconds">51 Seconds</span></div>-->
                            <div id="namaz-counter">
                                <p class="mb-0 thm-clr">Sun, 24 December, 2023</p>
                            </div>
                        </div>
                    </center>

                    <ul class="time-list3 d-flex flex-wrap mb-0 list-unstyled namaz-time-api">
                        <li class="pat-bg thm-layer opc7 back-blend-multiply thm-bg" data-offset="0"
                            style="background-image: url(https://azharindy.org/wp-content/themes/tabligh/assets/images/pattern-bg_small.jpg);">
                            <span class="start-time">FAJR</span>
                            <span class="ntime">7:00AM</span>
                        </li>
                        <li class="pat-bg grn-layer2 opc7 back-blend-multiply bg-color2" data-offset="0"
                            style="background-image: url(https://azharindy.org/wp-content/themes/tabligh/assets/images/pattern-bg_small.jpg);">
                            <span class="start-time">DHUHR</span>
                            <span class="ntime">1:00PM</span>
                        </li>
                        <li class="pat-bg thm-layer opc7 back-blend-multiply thm-bg" data-offset="0"
                            style="background-image: url(https://azharindy.org/wp-content/themes/tabligh/assets/images/pattern-bg_small.jpg);">
                            <span class="start-time">ASR</span>
                            <span class="ntime">3:30PM</span>
                        </li>
                        <li class="pat-bg grn-layer2 opc7 back-blend-multiply bg-color2" data-offset="0"
                            style="background-image: url(https://azharindy.org/wp-content/themes/tabligh/assets/images/pattern-bg_small.jpg);">
                            <span class="start-time">MAGHRIB</span>
                            <span class="ntime">5:30PM</span>
                        </li>
                        <li class="pat-bg thm-layer opc7 back-blend-multiply thm-bg" data-offset="0"
                            style="background-image: url(https://azharindy.org/wp-content/themes/tabligh/assets/images/pattern-bg_small.jpg);">
                            <span class="start-time">ISHA</span>
                            <span class="ntime">7:30PM</span>
                        </li>
                    </ul>
                    <div class="jummah-time-wrapper text-center">
                        <p class="jummah-section-title">Friday (Jummah) Prayer</p>
                        <div class="jummah-time">
                            <div class="jummah-time-block jummah-I">
                                <span>Jummah I - </span>
                                <span>01:30 PM - 02:00 PM</span>
                            </div>
                            <div class="jummah-time-block jummah-II">
                                <span>Jummah II - </span>
                                <span>02:30 PM - 02:45 PM</span>
                            </div>
                        </div>
                    </div>

                </div><!-- Time Wrap -->
            </div>
        </div>
    </section>

     <?php
    return ob_get_clean(); // Return the buffered content
}