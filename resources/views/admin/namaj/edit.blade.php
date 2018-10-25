@extends('layouts.adminLayout.admin_design')
   @section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Category</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Category</li>
              <li><i class="fa fa-files-o"></i>Eidt Category</li>
            </ol>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Edit Category
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{url('/admin/categories', [$category->id])}}">
                  	<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}
                    <div class="form-group ">
                      <label for="name" class="control-label col-lg-2">Category Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" value="{{ $category->name }}" id="name" name="name" type="text" />
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
       
      </section>
    </section>


@endsection