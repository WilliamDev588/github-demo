<html>
<head>

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


			$('button.row-remove').on("click", function(e) {
				e.preventDefault();

				var form = $(this).parents('form')
				$(this).parents('tr').remove();
				autoCalcSetup();

			});

			$('button.row-add').on("click", function(e) {
				e.preventDefault();

				var $table = $(this).parents('table');
				var $top = $table.find('tr.line_items').first();
				var $new = $top.clone(true);

				$new.jAutoCalc('destroy');
				$new.insertBefore($top);
				$new.find('input[type=text]').val('');
				autoCalcSetup();

			});
            $(document).on('change', '#foodName', function() {
                  var air_id =  $('#foodName').val();     // get id the value from the select
                  $('#foodCalorie').val(air_id);   // set the textbox value

              });
            //   var e = document.getElementById("foodName");
            //     var strUser = e.value;
            
            
		});
    //         $(document).ready(function() {
    //       $(document).on('change', '.foodName', function() {
    //           // var air_id =  $(this).val();
    //           var air_id =  $(this).val();

    //           var a = $(this).parent();

    //           console.log("Its Change !");

    //           var op = "";

    //           $.ajax({
    //               type: 'get',
    //               url: '/GetFoodCalorie',
    //               data: { 'id': air_id },
    //               dataType: 'json',      //return data will be json
    //               success: function(data) {
    //                   // console.log("price");
    //                   console.log(data.id);

    //                   a.find('.foodCalorie').val(data.foodCalorie); 
    //                   // do you want to display id or registration name?
    //               },
    //               error:function(){

    //               }
    //           });
    //       });
    //   });
        function getCalorie(){
                // if (document.getElementById("fc").checked) {
                //     var e = document.getElementById("foodName");
                //     var strUser = e.options[e.selectedIndex].text;

                //     document.getElementById("foodCalorie").value = strUser;
                // } 
                  document.getElementById("#foodCalorie").value = document.getElementById("#foodName").value  ;
                // selectElement = document.querySelector('#foodName');
                // output = selectElement.value;
                // document.querySelector('.calorie2').textContent = calorie2;
                // document.getElementById("foodName").value;
            }
		//-->
	</script>
</head>
<body>
<form id="cart">
	<table name="cart">
		<tr>
			<th></th>
			<th>Item</th>
			<th>Qty</th>
			<th>Calorie </th>
			<th>&nbsp;</th>
			<th>Item Total</th>
		</tr>
		<tr class="line_items">
			<td><button class="row-remove">Remove</button></td>
            <!-- <td><button onclick="getOption()" class="row-remove"> Check </button></td> -->

			<td>
            <select  id="foodName" onchange="getCalorie">
                                            <option > Please select your food</option>
                                            @foreach($foods as $food)
                                              <option value="{{$food->foodCalorie}}" >
                                                {{$food->foodName}}
                                              </option>
                                            @endforeach

                                        </select>
            </td>
			<td><input type="text" name="qty" value=""></td>
			<td><input type="text" name="calorie" class="calorie2"value="" id="foodCalorie"></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {calorie}"></td>
		</tr>
		<!-- <tr class="line_items">
			<td><button class="remove">Remove</button></td>
			<td>More Stuff</td>
			<td><input type="text" name="qty" value="2"></td>
			<td><input type="text" name="price" value="12.50"></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr>
		<tr class="line_items">
			<td><button class="remove">Remove</button></td>
			<td>And More Stuff</td>
			<td><input type="text" name="qty" value="3"></td>
			<td><input type="text" name="price" value="99.99"></td>
			<td>&nbsp;</td>
			<td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
		</tr> -->
		<tr>
			<td colspan="3">&nbsp;</td>
			<td>Total</td>
			<td>&nbsp;</td>
			<td><input type="text" name="sub_total" value="" jAutoCalc="SUM({item_total})"></td>
		</tr>
		<!-- <tr>
			<td colspan="3">&nbsp;</td>
			<td>
				Tax:
				<select name="tax">
					<option value=".06">CT Tax</option>
					<option selected value=".00">Tax Free</option>
				</select>
			</td>
			<td>&nbsp;</td>
			<td><input type="text" name="tax_total" value="" jAutoCalc="{sub_total} * {tax}"></td>
		</tr> -->
		<!-- <tr>
			<td colspan="3">&nbsp;</td>
			<td>Total</td>
			<td>&nbsp;</td>
			<td><input type="text" name="grand_total" value="" jAutoCalc="{sub_total} + {tax_total}"></td>
		</tr> -->
		<tr>
			<td colspan="99"><button class="row-add">Add Row</button></td>
		</tr>
	</table>
</form>
</body>
</html>