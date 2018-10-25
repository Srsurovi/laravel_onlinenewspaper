

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Busniess Ads</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Busniess Ads</li>
              <li><i class="fa fa-files-o"></i>Busniess Ads </li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Busniess Ads 
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" 
                  enctype="multipart/form-data" action="/admin/busniess">
                  	{{ csrf_field() }}
                    <div class="form-group ">
                      <label for="title" class="control-label col-lg-2">Title <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="title" name="title" minlength="5" type="text" required />
                      </div>
                    </div> 
                     <div class="form-group ">
                      <label for="image" class="control-label col-lg-2">File<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="image" name="image" minlength="5" type="file" required />
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


