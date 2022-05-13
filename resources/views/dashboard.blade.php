@extends('layouts.master')

@section('content')
<div class="content">
	<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
              		<div class="card-header border-0">
                		<h3 class="card-title">Products</h3>
                		<div class="card-tools">
                  			<a href="#" class="btn btn-tool btn-sm">
                    			<i class="fas fa-download"></i>
                  			</a>
                  			<a href="#" class="btn btn-tool btn-sm">
                    			<i class="fas fa-bars"></i>
                  			</a>
                		</div>
              		</div>
	              	<div class="card-body table-responsive p-0">
		                <table class="table table-striped table-valign-middle" style="width:100%">
	                  		<thead>
		                  		<tr>
				                    <th>Product</th>
				                    <th>Price</th>
				                    <th>Sales</th>
				                    <th>More</th>
		                  		</tr>
		                  	</thead>
		                  	<tbody>
		                  		<tr>
		                    		<td>
		                      			<img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
				                      	Some Product
				                    </td>
		                    		<td>$13 USD</td>
				                    <td>
				                      	<small class="text-success mr-1">
				                        	<i class="fas fa-arrow-up"></i>
				                        	12%
				                      	</small>
				                      	12,000 Sold
				                    </td>
		                    		<td>
		                      			<a href="#" class="text-muted">
		                        			<i class="fas fa-search"></i>
		                      			</a>
		                    		</td>
		                  		</tr>
		                  
		                  	</tbody>
		                </table>
	              	</div>
	            </div>
            </div>
        </div>
    </div>
</div>
@endsection