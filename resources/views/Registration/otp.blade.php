@extends('layout')
@section('content')
    
<head> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{asset('assets')}}/css/util.css?{{time()}}" rel="stylesheet">



{{-- <script src="{asset('assets')}}/js\rejistrationjquery.min.js"></script>
<script src="{asset('assets')}}/js\registrationbootstrap.min.js"></script>
<script src="{asset('assets')}}/registrationbootstrap2.min.css"></script> --}}


<!------ Include the above in your HEAD tag ---------->
</head>


<body>
@csrf
<section class="bgloginimage" style="background-image: url('{{ asset('assets/img/slider-bg-1.png')}}'">

    <div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
                <p style="font-size: 30px;font-weight:600">Enter Your OTP</p>
					<input class="text email" type="number" id="user_otp" placeholder="Enter Your OTP" required="">
					<div class="wthree-text">
					
						<div class="clear"> </div>
                    </div>
                    <br>

                    <div class="text-center .text-white">
                        <button  type="button" id="otp" class="btn btn-warning">Submit</button>

                    </div>
                    
                </form>
                <br>
			</div>
		</div>
</section>

</body> 

@endsection