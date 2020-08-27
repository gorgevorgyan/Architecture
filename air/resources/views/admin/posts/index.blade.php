@extends('admin/layouts.app')
@section('content')
<div class="container">

	  	<div class="content-wrapper">
	  		
  	<h1>All Posts</h1>
  
		<table id='dtBasicExample' class='table table-striped table-borderd' cellspacing="0"width="100%">
			<thead>
				<tr>
					<th class="th-sm">Title</th>
					<th class="th-sm">Description</th>
					<th class="th-sm">Edit</th>
					<th class="th-sm">Delete</th>
				</tr>
			</thead>
			<tbody>
  			<?php foreach ($posts as $key => $value) {
  				?>
				<tr>
					<td><?php echo $value['title'] ?></td>
					<td><?php echo $value['description'] ?></td>
					<td><a class="btn btn-danger" href="{{ url('/admin/posts/edit/') }}/<?php echo $value['id'] ?>">Edit</a>
					</td>					
					<td><a class="btn btn-danger" href="{{ url('/admin/posts/delete/') }}/<?php echo $value['id'] ?>">Delete</a>
					</td>
				</tr>
				 <?php }?>
			</tbody>
		</table>








  </div>












@endsection
