<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mari Sehat</title>
    <link href="./script/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="antialiased">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img src="\header\Health Plus Logo.png" alt="Logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold " href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold" href="/about">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white font-weight-bold dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Calculator
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/caloriesCalculator">Calories</a>
                    <a class="dropdown-item" href="/workoutCalculator">Exercise Regiment</a>
                </div>
            </li>
            <!-- Dropdown -->
            <li class="nav-item ">
                <a class="nav-link text-white font-weight-bold" href="/product" >
                    Market
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold" href="/mycart">My Cart</a>
            </li>
        </ul>
        <!-- Login Regist -->
        <ul class="navbar-nav ms-auto text-center">
            @guest
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold" href="/register">Register</a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
                <a class="nav-link text-white font-weight-bold" href="/logout"><i class="fas fa-sign-out-alt"></i></a>
            </li>
            @endauth
        </ul>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Content -->
    <div>
        @yield('container')
    </div>
    <!-- Akhir Content -->
    <!-- Footer -->
    <footer class="bg-dark text-white pt-4 pb-2">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold ">About Us</h5>
                    <p>MariSehat was founded with the idea of being able to give Everyone the best Food Calculator, Fitness Gear and other Healthy Things possible.  </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold  "> Calculator</h5>
                    <p>
                        <a href="/caloriesCalculator" class="text-white" style="text-decoration : none;">Calorie Calculator</a>
                    </p>
                    <p>
                        <a href="/workoutCalculator" class="text-white " style="text-decoration : none; ">Excercise Regiment</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold  ">Product</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration : none;">Food</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration : none;">Equipment</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration : none; ">Vitamin</a>
                    </p>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold ">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>Jakarta, Indonesia
                    </p>
                    <i class="fas fa-envelope mr-3"></i>CS@MariSehat.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>14045
                    </p>
                </div>





                <div class="row align-items-cente mt-5">
                    <div class="text-center p-3">
                        <p> Copyright ©2022 All rights reserved by: MariSehat</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Akhir Footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
	<script type="text/javascript">
		$(function() {

			function autoCalcSetup() {
				$('form#cart').jAutoCalc('destroy');
				$('form#cart tr.line_items').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
				$('form#cart').jAutoCalc({decimalPlaces: 2});
			}
			autoCalcSetup();
            var x = 1;

			$('button.row-remove').on("click", function(e) {
				e.preventDefault();

				var form = $(this).parents('form')
                if(x > 1) {
                    $(this).parents('tr').remove();
                    x--;
                }
				autoCalcSetup();

			});

			$('button.row-add').on("click", function(e) {
				e.preventDefault();

				var $table = $(this).parents('table');
				var $top = $table.find('tr.line_items').first();
                x++;
				var $new = $top.clone(true);
                $("#foodName"). attr("disabled", true);

				$new.jAutoCalc('destroy');
				$new.insertBefore($top);
				$new.find('input[type=text]').val('');
				autoCalcSetup();

			});
            $(document).on('change', '#foodName', function() {
                  var air_id =  $('#foodName').val();     // get id the value from the select
                  $('#foodCalorie').val(air_id);   // set the textbox value

              });
              $(document).on('change', '#workoutName', function() {
                  var air_id =  $('#workoutName').val();     // get id the value from the select
                  $('#workoutCalorie').val(air_id);   // set the textbox value

              });
              $(document).on('change', '#totalCalori', function() {
                  var air_id =  $('#totalCalorie').val();     // get id the value from the select
                  $('#totalCalorie2').val(air_id);   // set the textbox value

              });
            //   var e = document.getElementById("foodName");
            //     var strUser = e.value;


		});

        function getValue(){

                  document.getElementById('subTotal').innerHTML = 5;


        }
        function getSum(){
            var x = document.getElementById("subTotal").value;
            document.getElementById("totalCalorie").innerHTML = x;
        }
		//-->
        $("#ddlModel").on("change",function(){
        var GetValue=$("#ddlModel").val();
        $("#genderCalorie").val(GetValue);
        });
        $("#ddlModel2").on("change",function(){
        var GetValue=$("#ddlModel2").val();
        $("#genderCalorie2").val(GetValue);
        });
        $("#BMR").on("change",function(){
        var GetValue=$("#BMR").val();
        $("#totalBMR").val(GetValue);
        });
        $("#level").on("change",function(){
        var GetValue=$("#level").val();
        $("#totalCalorielevel").val(GetValue);
        });
	</script>

</html>
