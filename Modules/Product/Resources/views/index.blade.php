@extends('product::layouts.master')

@section('content')


          <div class="row" style="margin-top: 12px;">
            <div class="col-xs-12">
              <div class="box">
                @if(Session::has('success'))
				    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
		         @endif
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>name </th>
                        <th>description </th>
                        <th>price </th>
                        <th>add to cart </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
	                      <tr>
	                        <td>{{ $product->id }}</td>
	                        <td>{{ $product->name }}</td>
	                        <td>{{ $product->description }}</td>
                          <td>{{ $product->price }}</td>
	                        <td style="display: inline-block;">
		                        <a href="{{url('cart/add/'. $product->id)}}">
		                        	<button type="button" class="btn  btn-info btn-xs">add to cart  </button>
		                        </a>	
	                        </td>
	                      </tr>
	                    @endforeach  
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
   
@endsection
