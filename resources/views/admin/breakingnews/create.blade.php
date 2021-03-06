

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Add Breaking-New</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Breaking_New</li>
              <li><i class="fa fa-files-o"></i>Add Breaking_New</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading create">
                Breaking_New
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="/admin/breakingnews">
                  	{{ csrf_field() }}
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Breaking_New Title<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="cname" minlength="5" type="text" required />
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


