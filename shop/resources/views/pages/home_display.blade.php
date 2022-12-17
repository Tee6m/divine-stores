@extends('layout.admin')

@section('content')

@if (session()->has('slider'))
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('slider')}}
      </div>
      
  @endif

  {{-- Site name --}}

  @if (session()->has('site')) 
    
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('site')}}
      </div>
      
  @endif

    <br>
  <div>
    <h1 style="font-weight:bolder; margin-left:5px">Edit Home Page</h1>
  </div>
  <br>

    <section style="background-color: #FFF">

        <div>
            <form class="row" method="post" action="{{url('logo_change')}}">
                	@csrf

                    <div style="margin-left: 3rem">
                        <h1 style="font-weight: bolder">LOGO</h1>
                        <img src="#" alt="" id="newImg" width="100" height="100" onerror="this.src='./images/blank3.png' " style="margin-bottom: 1rem">
                                    <input type="file" name="shoplogo" id="InpImg" class="form-input-styled" data-fouc required> <br>
                                    <button type="submit">Change</button>
                                    <br>
                    </div>

            </form>        
        </div> <br><br><br><br>



        <div>
            <form method="post" action="{{url('site_name')}}">
                @csrf

                <div style="margin-left: 2rem">
                    <h1 style="font-weight: bolder">Site Name</h1>
                    @foreach ($shopname as $shop)
                        
                    
                    <input type="text" value="{{$shop->shopname}}" placeholder="Give Site Name" name="site_name">
                    <button type="submit">Change</button>

                    @endforeach
                </div>

            </form>
        </div>
        <br><br><br>


        <div>
            <form method="post" action="{{url('slider_update')}}">
                @csrf

                <div style="margin-left: 2rem">
                    <h1 style="font-weight: bolder">Slider Texts</h1>
                    
                        @foreach ($texts as $text)
                            
                        
                    
                    <input type="text" value="{{$text->text1}}" placeholder="Text-head" name="text1">
                    <input type="text" value="{{$text->text2}}" placeholder="Text-Body" name="text2"> <br><br>
                    <button type="submit">Change</button>

                    

                    @endforeach
                </div>

            </form>
        </div>
        <br><br><br>



    </section>





    <script>
        InpImg.onchange= evt => {
            const[file]=InpImg.files

            if(file){
                newImg.src=URL.createObjectURL(file)
            }
        }
    </script>

@endsection