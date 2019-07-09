<div class="harvee-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
       
        <div class="carousel-inner">
        @for($index = 0 ; $index < count($images); $index++)
            <div class="carousel-item <?php echo ($index == 0)?'active':'' ?>">
                <img class="harvee-slide" src="{{$images[$index]['imgUrl']}}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="font-weight-bold">
                        {{$images[$index]['name']}}
                        </h1>
                        <p>
                        {{$images[$index]['price']}} 
                        </p>
                        <p><a class="btn btn-lg harvee-btn" href="#" role="button">shop now!</a></p>
                    </div>
                </div>
            </div>

            @endfor
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>