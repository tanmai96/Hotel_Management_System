<?php
    include_once 'header.php';
?>
<h2 style="color: green">Hotel management System.</h2>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/hotel1.jpg" alt="Los Angeles" style="width:100%;height: 20%;">
        </div>

        <div class="item">
            <img src="images/hotel2.jpg" alt="Chicago" style="width:100%;height:20%;">
        </div>

        <div class="item">
            <img src="images/hotel3.jpg" alt="New york" style="width:100%;height: 20%;">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php
include_once 'footer.php';
?>
