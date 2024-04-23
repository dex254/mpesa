
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
      </div>
    </div>
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="basic-form-layouts">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" id="basic-layout-colored-form-control">Buying Float form</h4>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">
                <?php echo form_open_multipart('Agents/buyfloatstore',$attributes); ?>
                <div class="form-body">
                  <h4 class="form-section"><i class="fa fa-rss"></i> Buying Float Registration info</h4>

                  <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Bank Account Name</label>
                        <div class="col-md-6">
                        <div class="position-relative has-icon-left">
                          <?php $banks = array('' => 'Select an option') + $banks; echo form_dropdown('bank', $banks,NULL,$prop); ?>
                          <span class="help-block"><?php echo form_error('bank'); ?></span>
                          <div class="form-control-position">
                              <i class="fa fa-university"></i>
                          </div>
                        </div>
                        </div>
                    </div>

                  <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Mpesa Agent Name</label>
                        <div class="col-md-6">
                        <div class="position-relative has-icon-left">
                          <?php $agents = array('' => 'Select an option') + $agents; echo form_dropdown('agent', $agents,NULL,$prop); ?>
                          <span class="help-block"><?php echo form_error('agent'); ?></span>
                          <div class="form-control-position">
                              <i class="fa fa-signal"></i>
                          </div>
                        </div>
                        </div>
                    </div>

                  <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Amount to Buy</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Ksh</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Amount to Buy" aria-label="Amount (to the nearest dollar)" name="amount">
                            <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
                <div class="form-actions right">
                  <button type="reset" class="btn btn-danger mr-1">
                    <i class="fa fa-times"></i> Cancel
                  </button>
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check-square-o"></i> Save
                  </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>
