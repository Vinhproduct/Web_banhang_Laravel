<div class="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          @foreach ($list_slider as $row_slider)
          @if ($loop->first)
          <div class="carousel-item active">
              <img src="{{asset('images/banner/'.$row_slider->image)}}" class="d-block w-100" alt="{{$row_slider->image}}">
          </div>
          @else
          <div class="carousel-item">
              <img src="{{asset('images/banner/'.$row_slider->image)}}" class="d-block w-100" alt="{{$row_slider->image}}">
          </div>
          @endif
          @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
      $('#carouselExampleIndicators').carousel({
          interval: 3000
      });
  });
</script>