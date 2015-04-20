<div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarouse2" data-slide-to="1"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
        <img src="{{ asset('images/carousel.png') }}" alt="Chania" class="imgcarousel img-responsive">
      <div class="carousel-caption">
        <h3>Chania</h3>
       <p class="pcarousel">The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>

    <div class="item">

      <img src="{{ asset('images/carousel.png') }}" alt="Chania" class="imgcarousel img-responsive">
      <div class="carousel-caption">
        <h3>Chania</h3>
        <p class="pcarousel">The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style>

    .imgcarousel{

        width: 1520px;
    }

    .carousel-caption{
        margin-left: -20%;
        width: 100%;
        margin-bottom: -2%;
        background-color: rgba(0, 0, 0, 0.7);
        text-align: center;

    }

    .pcarousel{
        text-align: center;
        margin-bottom: 0;
    }

    .carousel-indicators{
        visibility: hidden;
    }

    h3{
        margin-top: 1px;
        margin-bottom: 5px;
    }
</style>