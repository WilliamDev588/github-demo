@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="./calculator/style.css" rel="stylesheet">
  <div class="px-4 px-lg-0">
    <!-- For demo purpose -->
    <!-- End -->
    <!-- Calculator -->
    <div class="container calculate">
            <div class="row">
            <div class="col-lg-2">
                  
                  </div>
                  <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">
                <img src="./calculator/food.png" border="0">
                                <h2 class="text-center">Calories Calculator</h2>
                                <p>Calculate your food's calories here.</p>
                                <form id="cart" role="form" autocomplete="off" class="form" method="post">
                                    <table name="cart" >
                                    <tr>
                                        <th></th>
                                        <th>Food</th>
                                        <th>Calorie</th>
                                        <th>Gram</th>
                                        <th>Sub Total </th>
                                    </tr>
                                     <tr class="line_items">
                                        <td><button class="row-remove btn btn-danger">Remove</button></td>
                                    
                        {{-- <!-- <>{{$food->foodCalorie}}</> --> --}}
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>

                                        <div class="form-group">
                                        <div class="input-group">  
                                            <td>
                                            <select class="form-control" id="foodName" onchange="getCalorie" style="width: 140px;">
                                            
                                            <option > Food</option>
                                            @foreach($foods as $food)
                                              <option value="{{$food->foodCalorie}}" >
                                                {{$food->foodName}}
                                              </option>
                                            @endforeach
                                        </select>
                                            </td>
                                            
                                            
                                        </div>
                                        
                                    </div>
                        
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <td>
                                            <input  name="calorie"  placeholder="per 100g"  disabled class="form-control calorie2" type="text" value="" id="foodCalorie" size="10">
                                            
                                            </td>
                                            
                                        </div>
                                    </div>
                                        
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <td>
                                                <input type="text" name="qty" placeholder="Gram"value="" class="form-control" size="9">                                        
                                            
                                            </td>
                                    </div>
                                    </div>
                                    <div class="form-group" >
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <td>
                                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="gram" value="100"  size="5" style="font-weight: bold; font-size: smaller;"</h5>

                                                <h5 class="font-weight-bold"><input type="text" id="subTotal"name="item_total" placeholder="Sub Total"value="" jAutoCalc="{qty} * {calorie} / {gram}" class="form-control" size="8">  </h5>     
                                                <h5 class="font-weight-bold"><input type="text" id="subTotal"name="itemGram" hidden value="" jAutoCalc="{qty}" class="form-control" size="7">  </h5>                                  
                             
                                            </td>
                                        </div>
                                    </div>
                                    
                                    
                                        
                                    



                                    <!-- {{-- add another keep looping --}}
                                    <p class="addMore" onclick="">Add Another</p>
                                    {{-- <button class="addMore">Add Another</button> --}} -->
                                    <div class="form-group">
                                    <tr>
                                    <td><h6 style="color:white">sd</h6></td>
                                    </tr>

                                    <tr>
                                    <td style="align-items: center;" colspan="5"><button id="addRow"class="row-add btn btn-primary btn-lg">Add Row</button></td>
                                    <!-- <td><button  type="submit">Get Value</button></td> -->
                                    </tr>
                                    

                                        <!-- <input name="btnCalculate" class="btn btn-lg btn-primary btn-block btnCalculate" value="Calculate" type="submit"> -->
                                        <!-- <button class="row-remove btn btn-lg btn-primary btn-block btnCalculate">Remove</button> -->
                                    </div>
                                    </tr>
                        <div class="text-center">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Calorie's Details </div>
                            <div class="p-4">
                            
                              <p class="font-italic">Every details of your food calorie is here.</p>
                              <ul class="list-unstyled mb-4">
                              
                                
                                
                               
                                

                                
                                
                                <!-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">
                                <input id="totalCalorie"type="number"  hidden name="male1" value="1400"  size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <input id="totalCalorie"type="number"  hidden name="male2" value="2200"  size="5" style="font-weight: bold; font-size: smaller;"</h5>

                                <input id="totalCalorie"type="number"  hidden name="male3" value="2800"  size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <input id="totalCalorie"type="number"  hidden name="male4" value="2800"  size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                    Daily's Calories Needed (Male)
                                    <select id="ddlModel" name="ddlModel">
                                    <option jAutoCalc="{male1} - {sub_total}">0 - 6 years</option>
                                    <option jAutoCalc="{male2} - {sub_total}">7 - 18 years</option>
                                    <option jAutoCalc="{male3} - {sub_total}">18 - 30 years</option>
                                    <option jAutoCalc="{male4} - {sub_total}">>30 years</option>

                                    </select>
                                </strong>
                                
                                    <h5 class="font-weight-bold"><input id="genderCalorie"type="text" name="sub_total" value=""  size="7" style="font-weight: bold; font-size: smaller;color:red;border:none;"</h5>

                                </li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">
                                <input id="totalCalorie"type="number"  hidden name="female1" value="1200"  size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <input id="totalCalorie"type="number"  hidden name="female2" value="2000"  size="5" style="font-weight: bold; font-size: smaller;"</h5>

                                <input id="totalCalorie"type="number"  hidden name="female3" value="2200"  size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <input id="totalCalorie"type="number"  hidden name="female4" value="2200"  size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                    Daily's Calories Needed (Female)
                                    <select id="ddlModel2" name="ddlModel2">
                                    <option jAutoCalc="{female1} - {sub_total}">0 - 6 years</option>
                                    <option jAutoCalc="{female2} - {sub_total}">7 - 18 years</option>
                                    <option jAutoCalc="{female3} - {sub_total}">18 - 30 years</option>
                                    <option jAutoCalc="{female4} - {sub_total}">>30 years</option>

                                    </select>
                                </strong>
                                
                                    <h5 class="font-weight-bold"><input id="genderCalorie2"type="text" name="sub_total" value=""  size="7" style="font-weight: bold; font-size: smaller;color:red;border:none;"</h5>

                                </li> -->
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Age</strong>
                                    
                                    <h5 class="font-weight-bold"><input id="totalCalorie"type="text" name="age" value="" size="5" style="font-weight: bold; font-size: smaller;color:red;"</h5>
                                    

                                </li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Height</strong>
                                    
                                    <h5 class="font-weight-bold"><input id="totalCalorie"type="text" name="height" value="" size="5" style="font-weight: bold; font-size: smaller;color:red;"</h5>
                                    

                                </li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Weight</strong>
                                    
                                    <h5 class="font-weight-bold"><input id="totalCalorie"type="text" name="weight" value="" size="5" style="font-weight: bold; font-size: smaller;color:red;"</h5>
                                    

                                </li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Daily Activity Level</strong>
                                    
                                    <h5 class="font-weight-bold"><input id="totalCalorielevel"type="text"hidden name="level" value="" size="5" style="font-weight: bold; font-size: smaller;color:red;"</h5>
                                    <select id="level" name="level">
                                    <option selected>Choose level</option>
                                    <option value="1.2">1.2 - no exercise</option>
                                    <option value="1.37">1.37 - slight active (1-3 days/week)</option>
                                    <option value="1.55">1.55 - moderate active (3-5 days/week)</option>
                                    <option value="1.725">1.725 - very active (6-7 days/week)</option>
                                    <option value="1.9">1.9 - extra active </option>


                                    </select>

                                </li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">                                    Basal Metabolic Rate (BMR)
                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constInch" value="0.393701" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constPound" value="2.20462" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>

                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constMale" value="66" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constMale2" value="6.2" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constMale3" value="12.7" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constMale4" value="6.76" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>

                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constFemale" value="655.1" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constFemale2" value="4.35" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                <h5 class="font-weight-bold"><input id="totalCalorie"type="number"  hidden name="constFemale3" value="4.7" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                    <select id="BMR" name="BMR">
                                    <option jAutoCalc="({constMale} + (({weight} * {constPound})  * {constMale2}) + (({height} * {constInch}) * {constMale3}) - ({age} * {constMale4})) * {level}">Male</option>
                                    <option jAutoCalc="({constFemale} + (({weight} * {constPound})  * {constFemale2}) + (({height} * {constInch}) * {constFemale3}) - ({age} * {constFemale3})) * {level}">Female</option>
                                    

                                    </select>
                                    </strong>
                                    <h5 class="font-weight-bold"><input id="totalBMR"type="text" name="totalBMR" value=""  size="7" style="color: red; font-weight: bold; font-size: smaller;"</h5>


                                </li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Weight (in grams)</strong>
                                    <h5 class="font-weight-bold"><input id="totalCalorie"type="text"  hidden name="sub" value="" jAutoCalc="" size="5" style="font-weight: bold; font-size: smaller;"</h5>
                                    
                                    <h5 class="font-weight-bold"><input id="totalCalorie" type="text" name="sub_total2" value="" jAutoCalc="SUM({itemGram})" size="5" style="font-weight: bold; font-size: smaller;color:red; border:none;"</h5>

                                </li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total Calories Gained</strong>
                                    <h5 class="font-weight-bold"><input id="totalCalorie"type="text" name="sub_total" value="" jAutoCalc="SUM({item_total})" size="5" style="font-weight: bold; font-size: smaller;color:red;border:none;"</h5>

                                
                                </li>
                               
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Daily Calories Needed to gain to maintain weight</strong>

                                    <h5 class="font-weight-bold"><input id="totalCalorie"type="text" name="calburned" value="" size="7" jAutoCalc="{BMR} -{sub_total}" style="font-weight: bold; font-size: smaller;color:red;"</h5>
                                    

                                </li>
                          </div>
                        </div>
                                    </table>
                                    </form>
                                    
                                        <!-- @if(isset($_POST['submit'])){
                                            $textValue = $_POST['sub_total'];
                                            echo $textValue;
                                        }
                                        @endif -->
                                    
                                    

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                  
                </div>

            </div>
        </div>
        
  <!-- End -->
  @endsection
