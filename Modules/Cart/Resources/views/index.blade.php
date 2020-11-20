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
                        <th>price </th>
                        <th>quantity </th>
                        <th>operations </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($items as $item)
	                      <tr>
	                        <td>{{ $item->id }}</td>
	                        <td>{{ $item->name }}</td>
	                        <td>{{ $item->price }}</td>
                          <td>
                            {{ $item->quantity }}
                          </td>
	                        <td style="display: inline-block;">
		                        <a href="{{url('cart/delete/' . $item->id)}}">
		                        	<button type="button" class="btn  btn-info btn-xs">delete</button>
		                        </a>
                            <a href="{{url('cart/edit/' . $item->id)}}">
                              <button type="button" class="btn  btn-info btn-xs">edit</button>
                            </a>	
	                        </td>
	                      </tr>
	                    @endforeach  
                    </tbody>
                  </table>
                  subtotal = {{\Cart::getSubTotal()}} <br> <br>
                  total    = {{\Cart::getTotal()}}
                </div>
              </div>
            </div>
          </div>
   
@endsection

