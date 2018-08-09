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
						<table class="table">
							<thead>
								<tr>
								    <th>Code</th>
									<th>Code Details</th>
								</tr>
							</thead>
							<tbody>	
						@foreach ($codes as $kk => $vv)
								<?php $details = unserialize($vv -> code_info); ?>
							 <tr>
							 <td>{{ $vv -> code }}</td>
							 <td>
								 <p><strong>Manage Name : </strong><?php echo $details['UserName']; ?></p>
								 <p><strong>Service Name : </strong><?php echo $details['serviceName']; ?></p>
								 <p><strong>Random Code : </strong><?php echo $details['randCode']; ?></p>
								 <p><strong>Lead Source : </strong><?php echo $details['leadSrc']; ?></p>
								  <p><strong>Logged User : </strong><?php echo $details['loginUser']; ?></p>
								 </td>
							 </tr>
						@endforeach
						  </tbody>
						 </table>
                   </div>
					
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
