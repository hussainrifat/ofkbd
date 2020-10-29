@extends('layout')
@section('content')
    
<head> 

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{asset('assets')}}/css/util.css?{{time()}}" rel="stylesheet">

</head>


<body>
@csrf
<section class="bgloginimage" style="background-image: url('{{ asset('assets/img/slider-bg-1.png')}}'">

    <div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
                <p style="font-size: 30px;font-weight:600">Hi Admin! Good to see you again! </p>
				<form action="#" method="post">
					<input class="text email" type="text" id="username" placeholder="Enter Your User Name" required="">
					<input class="text" type="password" id="password" placeholder="Password" required="">
					<div class="wthree-text">
					
						<div class="clear"> </div>
                    </div>
                    <br>

                    <div class="text-center .text-white">
                        <button   type="button" id="admin_login" class="btn btn-warning">Log In</button>

                    </div>
                    
                </form>
           
			</div>
		</div>
</section>

</body> 

@endsection