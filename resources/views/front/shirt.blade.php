@extends('layout.main')

@section('title','shirt')

@section('content')

    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{url('images',$shirt->image)}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <h2>
                           <strong> {{$shirt->name}} </strong>
                        </h2>
                     <span class="price-tag"> ${{$shirt->price}}</span>
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        
                         <h5>
                       {{$shirt->description}}
                    </h5>
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button  expanded">Thêm vào giỏ</a>
                    </div>
                </div>
                
                <div class="row">
                <p><strong>Sản phẩm bạn có thể thích </strong></p>

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
                        <h6>
                            {{$shirt->name}}
                        </h6>
                    </a>
                    <h6>
                        ${{$shirt->price}}
                    </h6>
                </div>
            </div>
            @empty
            <h4>No Shirts</h4>

            @endforelse
        </div>
                <p class="text-left subheader">
                    <small>* Designed by <a href="https://www.facebook.com/100010885129209">MasterAkasin</a></small>
                </p>

            </div>
        </div>
</div>


@endsection