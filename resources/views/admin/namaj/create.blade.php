

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Namaj Schedule</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Namaj</li>
              <li><i class="fa fa-files-o"></i>Namaj Schedule</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Namaj Schedule
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/admin/namaj">
                  	{{ csrf_field() }}
                    <div class="form-group ">
                      <label for="fozor" class="control-label col-lg-2">Fozor <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="fozor" name="fozor" minlength="5" type="time" required />
                      </div>
                    </div> 
                     <div class="form-group ">
                      <label for="zohor" class="control-label col-lg-2">Zohor <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="zohor" name="zohor" minlength="5" type="time" required />
                      </div>
                    </div> 
                     <div class="form-group ">
                      <label for="asor" class="control-label col-lg-2">Asor <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="asor" name="asor" minlength="5" type="time" required />
                      </div>
                    </div>
                      <div class="form-group ">
                      <label for="magrib" class="control-label col-lg-2">Magrib <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="magrib" name="magrib" minlength="5" type="time" required />
                      </div>
                    </div> 
                     <div class="form-group ">
                      <label for="esha" class="control-label col-lg-2">Esha <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="esha" name="esha" minlength="5" type="time" required />
                      </div>
                    </div>                  
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>


