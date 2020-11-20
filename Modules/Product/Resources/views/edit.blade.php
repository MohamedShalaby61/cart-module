@extends('product::layouts.master')

@section('content')


          <div class="row" style="margin-top: 12px;">
            <div class="col-xs-12">
              <div class="box">
                @if(Session::has('success'))
      				    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
		            @endif
                <div class="box-body">
                  <form action="{{url('cart/edit/'.$id)}}" method="POST" >
                    @CSRF
                    @method('PUT')
                    <input type="text" name="quantity">
                    <input type="submit" value="edit">
                  </form>   
                </div>
              </div>
            </div>
          </div>
   
@endsection

