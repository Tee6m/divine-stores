<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="Shortcut Icon" type="image/png" href="{{url('/images/logoo.png')}}" type="" />
<title>Divine Stores</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">




<link rel="stylesheet" type="text/css" href="{{url('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{url('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/preloader.css')}}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>



</head>
<body>

    
    @include('partials.header');

    <div class="super_container"> 

    @yield('content')
    <input type="hidden" id="base_url" value="{{url('')}}">

    @include('partials.footer')
    <input type="hidden" id="base" value="{{url('')}}">

    </div>











<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{url('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{url('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{url('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{url('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{url('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{url('plugins/easing/easing.js')}}"></script>
<script src="{{url('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{url('plugins/parallax-js-master/parallax.min.js')}}"></script>

<script src="{{url('js/custom.js')}}"></script>
<script src="{{url('js/product.js')}}"></script>
<script src="{{url('plugins/flexslider/jquery.flexslider-min.js')}}"></script>
<script src="{{url('js/category.js') }}"></script>
<script src="{{url('js/preloader.js') }}"></script>

<script>
    var path ="{{route('autocomplete')}}";

    $('input.typehead').typeahead({
        source:function(terms,process){
            return $.get(path,{terms:terms}, function(data){
                return process(data);
            })
        }
    })
</script>

<script type="text/javascript">
    $("document").ready(function (){
        setTimeout(function(){ 
            $("div.alert").remove();
        }, 6000);

    });
</script>



 
        {{-- <script>
            $('div.text-success').not('.alert-important').delay(10000).fadeOut(350);
        </script> --}}

   
<script>
            const baseUrl = document.getElementById('base_url').value;
            const base = document.getElementById('base').value;
            console.log(base);
            $('document').ready(function() {
                cart_count();
                let time = setInterval(function() {
                    $('#cart_count').load(base+'/cart/counter?randval='+Math.random());
                }, 2000);
            })
            function cart_count() 
            {
               $('#cart_count').load(base+'/cart/counter');
            }

            function addcart(product_id) {
            console.log(product_id);
            let feedback = document.getElementById('cart_feedback'+product_id);
            feedback.innerHTML = '<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Processing...</div>';
            $('#cart_feedback'+product_id).load(base+"/product/cart/"+product_id);
            cart_count();
            }
        </script>
@yield('scripts')

</body>
</html>