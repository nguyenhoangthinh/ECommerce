<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','3T SHOP')
        </title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{route('home')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       3T SHOP
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="{{route('shirts')}}">
                            Sản phẩm
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" onclick="alert('Trang này đang xây dựng!!!')">
                            Liên hệ
                        </a>
                    </li>
                    <li>
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            Giỏ hàng
                            <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
        
@yield('content')
<div class='clear-fix'></div>
<footer class="footer">
  <div class="row full-width">
   <div id="copyright text-right">© Copyright 2016 - <?php echo date("Y");?> 3T</div>
  </div>
</footer>

    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
  Stripe.setPublishableKey('pk_test_6pRNASCoBOKtIshFeQd4XMUh');
</script>

    <script src="{{asset('dist/js/app.js')}}"></script>
    </body>
</html>
