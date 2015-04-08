@extends('app')

@section('content')
<div class="row col-md-10 col-md-offset-1" > 
	<div class="panel panel-default">
  		<div class="panel-heading">Create Ads in Ads Schedule</div>
		  <table class="table" style="width:100%">
		    
		    <tr>
		    	<td>Advertisement</td>
		    	<td>1</td>
		    	<td>2</td>
		    	<td>3</td>
		    	<td>4</td>
		    	<td>5</td>
		    	<td>6</td>
		    	<td>7</td>
		    	<td>8</td>
		    	<td>9</td>
		    	<td>10</td>
		    	<td>11</td>
		    	<td>12</td>
		    	<td>13</td>
		    	<td>14</td>
		    	<td>15</td>
		    	<td>16</td>
		    	<td>17</td>
		    	<td>18</td>
		    	<td>19</td>
		    	<td>20</td>
		    	<td>21</td>
		    	<td>22</td>
		    	<td>23</td>
		    	<td>24</td>
		    </tr>

		    <tr>
		    	<!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/adsschedule/store') }}">
		    		<td><input type="text" class="form-control" name="ads_id" placeholder="Ads ID"></td>
		    		<td><input type="checkbox" name="T01" checked="checked"></td>
		    		<td><input type="checkbox" name="T02" checked="checked"></td>
		    		<td><input type="checkbox" name="T03" checked="checked"></td>
		    		<td><input type="checkbox" name="T04" checked="checked"></td>
		    		<td><input type="checkbox" name="T05" checked="checked"></td>
		    		<td><input type="checkbox" name="T06" checked="checked"></td>
		    		<td><input type="checkbox" name="T07" checked="checked"></td>
		    		<td><input type="checkbox" name="T08" checked="checked"></td>
		    		<td><input type="checkbox" name="T09" checked="checked"></td>
		    		<td><input type="checkbox" name="T10" checked="checked"></td>
		    		<td><input type="checkbox" name="T11" checked="checked"></td>
		    		<td><input type="checkbox" name="T12" checked="checked"></td>
		    		<td><input type="checkbox" name="T13" checked="checked"></td>
		    		<td><input type="checkbox" name="T14" checked="checked"></td>
		    		<td><input type="checkbox" name="T15" checked="checked"></td>
		    		<td><input type="checkbox" name="T16" checked="checked"></td>
		    		<td><input type="checkbox" name="T17" checked="checked"></td>
		    		<td><input type="checkbox" name="T18" checked="checked"></td>
		    		<td><input type="checkbox" name="T19" checked="checked"></td>
		    		<td><input type="checkbox" name="T20" checked="checked"></td>
		    		<td><input type="checkbox" name="T21" checked="checked"></td>
		    		<td><input type="checkbox" name="T22" checked="checked"></td>
		    		<td><input type="checkbox" name="T23" checked="checked"></td>
		    		<td><input type="checkbox" name="T24" checked="checked"></td> -->
		    		{!! Form::open(['method' => 'GET', 'action' => 'AdsScheduleController@store']) !!}
		    		<td>{!! Form::text('ads_id',null, ['class' => 'form-control'])!!}</td>
		    		<td>{!! Form::checkbox('T01','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T02','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T03','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T04','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T05','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T06','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T07','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T08','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T09','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T10','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T11','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T12','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T13','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T14','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T15','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T16','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T17','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T18','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T19','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T20','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T21','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T22','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T23','1', true);!!}</td>
		    		<td>{!! Form::checkbox('T24','1', true);!!}</td>
		    </tr>

		  </table>

		  	<div class="col-md-1 col-md-offset-11">
							 <br>	<button type="submit" class="btn btn-primary">Create Advertisment</button>
			</div>
				<!--</form>-->
				{!! \Form::close() !!}
		</div>
	</div>

@endsection