@extends('layout.main')

@section('content')
	<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to 3T-Shop
                </strong>
            </h2>
            <br>
            <a href="{{url('/shirts')}}"><button class="button large">Đi tới sản phẩm</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
          <strong>  3T-Shop&rsquo;s Sản phẩm gần đây </strong>
        </h2>
        </div>

        <div class="container">
  <br>
  @include('partials._slider', ['prods' => $shirts])

        <!-- Latest SHirts -->
        <br>
        <div class="row">

            @forelse($shirts as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Thêm vào giỏ
                        </a>
                        <a href="{{route('shirt.Item',$shirt->id)}}">
                            <img src="{{url('images',$shirt->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt.Item',$shirt->id)}}">
                        <h3>
                            {{$shirt->name}}
                        </h3>
                    </a>
                    <h5>
                        ${{$shirt->price}}
                    </h5>
                    <p>
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
            @empty
            <h4>No Shirts</h4>

            @endforelse
        </div>
        <!-- Footer -->
        <br>
@endsection