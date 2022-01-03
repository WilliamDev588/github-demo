@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="./calculator/style.css" rel="stylesheet">
  <div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <!-- End -->
    <!-- Calculator -->
    <div class="container calculate">
      <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-center">
                <img src="./calculator/food.png" border="0">
                <h2 class="text-center">Calories Calculator</h2>
                <p>Calculate your Workout's calories here.</p>
                <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <select class="form-control" id="sel1">
                        <option selected="true" disabled="disabled">Please select your Workout</option>
                        @foreach($workouts as $workout)
                        <option>{{$workout->workoutName}}</option>
                        @endforeach

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                      <input id="calculte" name="calculate" type="text" placeholder="Gram, ex. 100" class="form-control" type="text">


                </form>
              </div>
            </div>

            <div class="form-group">
              <input name="btnCalculate" class="btn btn-lg btn-primary btn-block btnCalculate" value="Calculate" type="submit">
            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="text-center">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Food's Details </div>
            <div class="p-4">
              <p class="font-italic">Every details of your food is here.</p>
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Name </strong><strong>Egg</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Weight</strong><strong>50 gr</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Calories Ratio</strong><strong>1:2</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Calories</strong>
                  <h5 class="font-weight-bold">50 Calories</h5>
                </li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End -->
  @endsection
