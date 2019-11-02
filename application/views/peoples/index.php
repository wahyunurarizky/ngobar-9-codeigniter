<div class="container">
	<div class="row">
		<div class="col-md-10">
		<h3 class="mt-1" >list of peoples</h3>
		<div class="row">
			<div class="col-md-5">
				<form action="<?= base_url('peoples'); ?>" method="post">
					<div class="input-group mb-3">
					  <input type="text" class="form-control" placeholder="Search keyord ..." name="keyword" autocomplete="off" autofocus>
					  <div class="input-group-append">
					    <input class="btn btn-primary" type="submit" id="input-addon2" name="submit">
					  </div>
					</div>
				</form>
			</div>
		</div>
		<h5>Result: <?= $total_rows; ?></h5>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>nama</th>
					<th>email</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(empty($peoples)): ?>
					<div class="alert alert-danger" role="alert">Data not found</div>
				<?php endif; ?>
				<?php foreach ($peoples as $people) :?>
					<tr>
						<th><?= ++$start; ?></th>
						<th><?= $people['name']; ?></th>
						<th><?= $people['email']; ?></th>
						<th>
							<a href="" class="badge badge-warning">detail</a>
							<a href="" class="badge badge-success">edit</a>
							<a href="" class="badge badge-danger">delete</a>
						</th>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?= $this->pagination->create_links(); ?>

		</div>
	</div>
</div>