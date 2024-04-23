

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
          <div class="content-body">
            <div class="content-overlay"></div>

<section class="row all-contacts">
	<div class="col-12">
		<div class="card">
			<div class="card-head">
				<div class="card-header">
					<h4 class="card-title">All Contacts</h4>
					<div class="heading-elements mt-0">
					 <a href="<?php echo base_url('index.php/contacts/create/');?>">
						<button class="btn btn-primary btn-md"><i class="d-md-none d-block feather icon-plus white"></i>
							<span class="d-md-block d-none">Add Contacts</span></button></a>
            </div>
				</div>
			</div>
			<div class="card-content">
				<div class="card-body">
					<!-- Task List table -->
					<div class="table-responsive">
						<table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>ID Number</th>
									<th>Phone</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
                <?php $i=1; foreach ($contacts as $contact): ?>
                  <tr>
                      <td><?php echo $i; $i++;?></td>
									    <td><?php echo $contact['name'];?></td>
                      <td><?php echo $contact['idnumber'];?></td>
									    <td><?php echo $contact['phone'];?></td>
    									<td>
                        <a href="<?php echo base_url('index.php/users/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                      </td>
								</tr>
                  <?php endforeach ?>
							</tbody>
							<tfoot>
								<tr>
									<th></th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Actions</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
          </div>
      </div>
    </div>
    <!-- END: Content-->
