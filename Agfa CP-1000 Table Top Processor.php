<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agfa CP-1000 Table Top Processor</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" type="text/css" href="owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="owl.theme.default.css">
    <style type="text/css">
		.plus-minus-input {
		  -webkit-align-items: center;
			  -ms-flex-align: center;
				  align-items: center;
		}

		.plus-minus-input .input-group-field {
		  text-align: center;
		  margin-left: 0.5rem;
		  margin-right: 0.5rem;
		  padding: 1rem;
		}

		.plus-minus-input .input-group-field::-webkit-inner-spin-button,
		.plus-minus-input .input-group-field ::-webkit-outer-spin-button {
		  -webkit-appearance: none;
				  appearance: none;
		}

		.plus-minus-input .input-group-button .circle {
		  border-radius: 50%;
		  padding: 0.25em 0.8em;
		}
		
		.demo{
			float: right;
			width:50%;
			padding:auto;
			padding-left: 10em;
		}
		
		.demo1{
			float: left;
			width:50%;
			padding:auto;
			padding-left: 10em;
		}
		
		.demo2{
			float: left;
			width:15.7em;
			padding:auto;
			padding-left: 10em;
			height: 40px;
			padding: 0;
			font-size: 20px;
			color: #fff;
			text-align: center;
			background: #4ED8CA;
			border: 0;
			border-radius: 5px;
			cursor: pointer; 
			outline:0;
		}
		
		
    </style>
	<script>
		jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

	function myFunction() 
	{
		var x = document.getElementById("myDIV").innerHTML="Booking Successful!!! Please call 1-503-667-3000 to make payment.";	
	}

	</script>
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-md navigation-clean-button sticky-top" data-aos="fade-up" data-aos-duration="700">
        <div class="container"><a class="navbar-brand" href="index.html" data-bs-hover-animate="bounce"><i class="fas fa-home"></i> Home</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
           <div class="collapse navbar-collapse" id="navcol-1">
               <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html#equipments"> Equipment</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html#accessories"> Accessories</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html#supplies"> Supplies</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html#parts"> Parts</a></li>
                </ul>
                <span class="navbar-text actions"> 
                    <a href="1.Sign In.php" class="login">Log In</a>
                    <a class="btn btn-light action-button" role="button" href="2.Sign Up.php" data-bs-hover-animate="pulse">Sign Up</a>
                </span>
            </div>              
        </div>
    </nav>
	
	<br><br>

	<div class="container">
        <div class="row">
             <div class="item col-md-3">
                <div class="card">
                        <div class="card-head">
                            <img src="assets/img/Automatic Film Processor/01.jpg" alt="img" class="card-img-top">
                        </div>
                        <div class="card-body">
                            
                            <p class="text-center title">Agfa CP-1000 Table Top Processor</p>
                            
                        </div>
				</div>
			</div>			
		</div>
	</div> 
		<br>
		<p class="demo1" id="myDIV">The CP-1000 provides consistent, high-quality processing of film sizes ranging from 4" x 4" up to 14"W x 36"L for applications with moderate patient film volume. Fast Processing, 125-second cycle time (leading edge into developer to leading edge at dryer) for quick access to finished radiographs. Energy Efficient, the CP-1000 operates on only 400 watts of power. Economical stand-by mode reduces power to 100 watts when processor is idle. To further reduce power consumption, the processor may be turned off when not in active use, and quickly restarted because of its fast warm-up time. Advantages Over Typical Low-Volume Processors. The typical processing cycle for low-volume processors is 2.5 to 3 minutes, and you must remain in the darkroom until the film has completely entered the processor, which can take over a minute. The exclusive CP-1000 Feed Tray/Light Cover allows you to leave the darkroom in about 15 seconds.</p>
		
	<div class="demo">
	<div class="input-group plus-minus-input">
	  <div class="input-group-button">
		<button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
		  <i class="fa fa-minus" aria-hidden="true"></i>
		</button>
	  </div>
	  <input class="input-group-field" type="number" name="quantity" value="0">
	  <div class="input-group-button">
		<button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity">
		  <i class="fa fa-plus" aria-hidden="true"></i>
		</button>
	  </div>
	</div>
	<br>
	<button class="demo2" onclick="myFunction()">Place order</button>
	</div>


	

	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider1.js"></script>
    <script type="text/javascript" src="owl.carousel.js"></script>
</body>
</html>