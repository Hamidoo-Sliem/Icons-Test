@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
					<div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ route('getCode') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="services" class="col-md-4 control-label">Services</label>

                            <div class="col-md-4">
                                <select name="services" class="form-control">
									   @foreach ($services as $k => $v)
										   <option value="{{ $v -> id }}">{{ $v -> service_name }}</option>
									   @endforeach
								</select>
                           </div>
                        </div>
                   <div class="form-group">
						<label for="leadsrc" class="col-md-4 control-label">Lead Source</label>
                          <div class="col-md-4">
                                <select name="leadsrc" class="form-control">
										@foreach ($sources as $kk => $vv)
											   <option value="{{ $vv -> id }}">{{ $vv -> name }}</option>
										 @endforeach
								</select>
                           </div>
                     </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Get Code
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
					@if (Session::has('code'))
                        <h2>{{Session::get('code')}}</h2>
						<strong><a href="{{route('viewCodes')}}">View Code Report</a></strong>
					@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
