@extends('layout.main')

@section('title','Danh sách sản phẩm')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
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
        <h3>Không có sản phẩm để hiển thị</h3>
       @endforelse
    </div>
@endsection