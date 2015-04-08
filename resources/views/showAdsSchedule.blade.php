@extends('app')

@section('content')
<div class="row col-md-10 col-md-offset-1" > 
	<div class="panel panel-default">
  		<div class="panel-heading">Advertiment Schedule</div>
		  <table class="table" style="width:83.33%">
		    <thead>
		    	<td>Advertisement</td>
		    	<td>1:00</td>
		    	<td>2:00</td>
		    	<td>3:00</td>
		    	<td>4:00</td>
		    	<td>5:00</td>
		    	<td>6:00</td>
		    	<td>7:00</td>
		    	<td>8:00</td>
		    	<td>9:00</td>
		    	<td>10:00</td>
		    	<td>11:00</td>
		    	<td>12:00</td>
		    	<td>13:00</td>
		    	<td>14:00</td>
		    	<td>15:00</td>
		    	<td>16:00</td>
		    	<td>17:00</td>
		    	<td>18:00</td>
		    	<td>19:00</td>
		    	<td>20:00</td>
		    	<td>21:00</td>
		    	<td>22:00</td>
		    	<td>23:00</td>
		    	<td>24:00</td>
		    			    	<td>Action</td>
		    </thead>

		    <tbody>
		    	{!! Form::open(['method' => 'GET', 'action' => 'AdsScheduleController@store']) !!}
		    	@foreach ($adsArray as $ads)
		    	<tr>
		    		<td>{!! Form::text('$ads->ads_id',$ads->ads_id, ['class' => 'form-control'])!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T01','', $ads->T01);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T02','', $ads->T02);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T03','', $ads->T03);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T04','',$ads->T04);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T05','',$ads->T05);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T06','',$ads->T06);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T07','',$ads->T07);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T08','',$ads->T08);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T09','',$ads->T09);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T10','',$ads->T10);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T11','',$ads->T11);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T12','',$ads->T12);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T13','',$ads->T13);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T14','',$ads->T14);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T15','',$ads->T15);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T16','',$ads->T16);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T17','',$ads->T17);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T18','',$ads->T18);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T19','',$ads->T19);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T20','',$ads->T20);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T21','',$ads->T21);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T22','',$ads->T22);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T23','',$ads->T23);!!}</td>
		    		<td>{!! Form::checkbox('$ads->ads_id'.'T24','',$ads->T24);!!}</td>
		    		<td>{!! Form::submit('Delete',['class' => 'btn btn-danger']);!!}</td>
		    	</tr>
		    	@endforeach

			</tbody>

		 <!--   <tr>
		    		<td>Second Ads</td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    		<td><input type="checkbox"></td>
		    </tr> -->
		  </table>

		  	<div class="col-md-1 col-md-offset-11">
							 <br>	<button type="submit" class="btn btn-primary">Save</button>
							 {!! \Form::close() !!}
			</div>
		</div>
	</div>

@endsection