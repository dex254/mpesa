
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Bank Registration Form</h3>
      </div>
    </div>
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="basic-form-layouts">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" id="basic-layout-colored-form-control">Bank form</h4>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">
                <?php echo form_open_multipart('bank/store',$attributes); ?>
                <div class="form-body">
                  <h4 class="form-section"><i class="fa fa-rss"></i> Bank info</h4>
                    <div class="col-md-10">
                      <div class="form-group">
                        <label for="userinput1">Bank Name</label>
                        <input type="text" id="name" class="form-control border-primary" placeholder=" Bank Name" name="name">
                      </div>
                      <span class="help-block"><?php echo form_error('name'); ?></span>
                    </div>
                    <div class="col-md-10">
                      <div class="form-group">
                        <label for="userinput1">Bank Number</label>
                        <input type="text" id="number" class="form-control border-primary" placeholder=" Bank Number" name="number">
                      </div>
                      <span class="help-block"><?php echo form_error('number'); ?></span>
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
