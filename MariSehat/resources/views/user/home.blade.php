@extends('layouts.main')
@section('container')

<style>
  #jdl {
    font-weight: bold;
    font-size: 3rem;
  }
  #jdl2 {
    font-size: 1.5rem;
  }
</style>

<body>


  <div class="bgimg-1">
    <div class="caption">
      <section>
        <h2 id="text"><span>It's time for a healty</span><br>Lifestyle</h2>
      </section>
    </div>
  </div>

  <div id='white_Box'>
    {{-- <h3 style="text-align:center; "></h3> --}}
    <p>
    <div id="jdl" class="mb-3">Mari Sehat</div>
    A useful app for more healty life. <br>Managing your life isn't a tedious task anymore. Simply use our feature and it will lessen your burdens.
    <br>We have Calories Calculator, Workout Regiment and Marketplace.
    </p>
  </div>

  <div class="bgimg-2">
    <div class="caption">
      <div class="caption">
        <span class="border">Calories Calculator</span>
      </div>
    </div>
  </div>

  <div id='black_Box' style="background-color:#343A40">
    <div class="row">
      <div class="col-sm-8">
        <p>
        <div id="jdl" class="mb-5">Calories Calculator</div>
        Calculate your food's calory. <br>Junk food, Traditional food, and Modern food, we will calculate it for you.
        </p>
        <button type="button" class="btn btn-info btn-lg btn-block py-4 mt-5"><a href="{{url('caloriesCalculator')}}" style="text-decoration: none; color:black" id="jdl2">Calories Calculator</a></button>
      </div>
      <div class="col-sm-4">
        <img src="home1/food.png" alt="" srcset="" style="max-width: 100% ; max-height: 100%">
      </div>
    </div>
    <br>
  </div>

  <div class="bgimg-3">
    <div class="caption">
      <span class="border">Workout Calculator</span>
    </div>
  </div>

  <div id='black_Box' style="background-color:#343A40">
    <div class="row">
      <div class="col-sm-4">
        <img src="home1/exercise.png" alt="" style="max-width: 100% ; max-height: 100%">

      </div>
      <div class="col-sm-8 mt-5">
        <p>
        <div id="jdl">Workout Calculator</div>
        <br><br>
        Calculate your burned calories from your workout. <br>Sit up, Back up, Push up, know your gain for today.
        </p>
        <button type="button" class="btn btn-info btn-lg btn-block py-4 mt-5"><a href="{{url('workoutCalculator')}}" style="text-decoration: none; color:black">Workout Calculator</a></button>
      </div>
    </div>

  </div>

  <div class="bgimg-4">
    <div class="caption">
      <span class="border">Marketplace</span>
    </div>
  </div>

  <div id='black_Box' style="background-color:#343A40">
    <div class="row">
      <div class="col-12 col-md-8">
        <p>
        <div id="jdl">Marketplace</div>
        <br>
        Wondering where to get your vitamin? Or rather your soon to be equipment?
        <br>
        Afraid of subpar quality?
        <br>
        Fear nothing as we also provide a regulated marketplace for high quality products.
        </p>
        <button type="button" class="btn btn-info btn-lg btn-block py-4 mt-5"><a href="{{url('product')}}" style="text-decoration: none; color:black">Market</a></button>
      </div>
      <div class="col-6 col-md-4">
        <img src="home1/market.png" alt="" style="max-width: 100% ; max-height: 100%">
      </div>
    </div>

  </div>
  </div>
</body>

@endsection