<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
  @foreach( $prods as $prod )
  <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
  @endforeach
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
 @foreach( $prods as $prod )
 <div class="tales item {{ $loop->first ? ' active' : '' }}" >
  <img src="images/{{ $prod->image }}" alt="{{ $prod->image }}">
  <div class="carousel-caption">
    <h3>{{$prod->name}}</h3>
    <p>{{$prod->description}}</p>
  </div>
</div>
@endforeach
<br>
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
</div>