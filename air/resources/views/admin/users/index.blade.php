@extends('admin/layouts.app')
@section('content')
<div class="container">

	  	<div class="content-wrapper">
	  		
  	<h1>All Users</h1>
  
		<table id='dtBasicExample' class='table table-striped table-borderd' cellspacing="0"width="100%">
			<thead>
				<tr>
					<th class="th-sm">Name</th>
					<th class="th-sm">Email</th>
					<th class="th-sm">Edit</th>
					<th class="th-sm">Delete</th>
				</tr>
			</thead>
			<tbody>
  			<?php foreach ($users as $key => $value) {
  				?>
				<tr>
					<td><?php echo $value['name'] ?></td>
					<td><?php echo $value['email'] ?></td>
					<td><a class="btn btn-danger" href="{{ url('/admin/users/edit/') }}/<?php echo $value['id'] ?>">Edit</a>
					</td>					
					<td><a class="btn btn-danger" href="{{ url('/admin/users/delete/') }}/<?php echo $value['id'] ?>">Delete</a>
					</td>
				</tr>
				 <?php }?>
			</tbody>
		</table>








  </div>












@endsection
