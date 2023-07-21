<?php
$images = [
    "https://lh3.googleusercontent.com/p/AF1QipMDKZyppMX1_h9QST-D73MM6iXWtmYvRFwJWFh6=s1360-w1360-h1020",
    "https://lh3.googleusercontent.com/p/AF1QipPyKyZdGvanLE0K9JEgMjfllKOoHGKWCI2631V-=s1360-w1360-h1020",
    "https://lh3.googleusercontent.com/p/AF1QipNLKjubUAntKpFlGmOAa2ZBFos24MvYXFHEwIKV=s1360-w1360-h1020",
];
?>

<section id="slider-part" class="slider-active">
    <?php foreach ($images as $image) { ?>
    <div class="single-slider bg_cover pt-150" style="background-image: url(<?php echo $image; ?>)" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">SMK BUDHI DHARMA BOARDING SCHOOL PIYUNGAN</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>