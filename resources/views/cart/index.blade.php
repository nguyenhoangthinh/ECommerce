@extends('layout.main')

@section('content')
    <div class="row">
        <h3>Giỏ hàng</h3>


        <table class="table table-hover">
            <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Kích cỡ</th>
                <th>Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{$cartItem->name}}</td>
                    <td>{{$cartItem->price}}</td>
                    <td width="50px">
                        {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                        <input name="qty" type="text" value="{{$cartItem->qty}}">
                    </td>
                    <td>
                        <div > {!! Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}
                           </div>

                    </td>

                    <td>
                        <input style="float: left"  type="submit" class="button success small" value="Ok">
                        {!! Form::close() !!}

                        <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                           {{csrf_field()}}
                           {{method_field('DELETE')}}
                           <input class="button small alert" type="submit" value="Delete">
                         </form>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td></td>
                <td>
                    Thuế: ${{Cart::tax()}} <br>
                    Tổng tiền: $ {{Cart::subtotal()}} <br>
                    Tổng thanh toán: $ {{Cart::total()}}
                </td>
                <td>Số lượng: {{Cart::count()}}

                </td>
                <td></td>
                <td></td>

            </tr>
            </tbody>
        </table>
        @if(Cart::count() > 0)
        <a href="{{route('checkout.shipping')}}" class="button">Thanh toán</a>
        @endif
        
    </div>



@endsection