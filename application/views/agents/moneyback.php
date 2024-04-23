<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">List of All Agent Numbers</h3>
      </div>
    </div>
    <div class="content-body"><!-- Multi-column ordering table -->
<section id="multi-column">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agents</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <a href="<?php echo base_url('index.php/agents/create/');?>">
                 						<button class="btn btn-primary btn-md">
                            <li><i class="fa fa-plus-circle"></i>Add Agent</li></button></a>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <table class="table table-striped table-bordered multi-ordering">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Agent name</th>
                                    <th>Agent Number</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $i=1; foreach ($statement as $contact): ?>
                                <tr>
                                  <td><?php echo $i; $i++;?></td>
                                  <td><?php echo $contact['moneyFrom'];?></td>
                                  <td><?php echo $contact['moneyTo'];?></td>
                                  <td><?php echo $contact['moneyIn'];?></td>
                                  <td><?php echo $contact['ledge'];?></td>
                                  <td>
                                    <a href="<?php echo base_url('index.php/agents/view/'.$contact['id']);?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                                  </td>
                                </tr>
                              <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Multi-column ordering table -->
</div>
</div>
</div>
