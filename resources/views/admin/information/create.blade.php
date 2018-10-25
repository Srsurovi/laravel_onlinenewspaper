@extends('layouts.adminLayout.admin_design')
   @section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Create Information</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Information</li>
              <li><i class="fa fa-files-o"></i>Create Information</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Information
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" enctype="multipart/form-data" method="post" action="/admin/information">
                  	{{ csrf_field() }}
                    <div class="form-group ">
                      <label for="title" class="control-label col-lg-2">Title<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="title" name="title" minlength="5" type="text" required />
                      </div>
                    </div>      
                    <div class="form-group ">
                      <label for="time" class="control-label col-lg-2">Time<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="time" name="time" minlength="5" type="time" required />
                      </div>
                    </div>           
                     <div class="form-group ">
                      <label for="image" class="control-label col-lg-2">File<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="form-control" id="image" name="image" minlength="5" type="file" required />
                      </div>
                    </div> 
                     <div class="form-group des">
                      <label for="description" class="control-label col-lg-2">Description<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <textarea  class="form-control" id="description" name="description" minlength="5"
                         type="text"  required></textarea> 
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="category" class="control-label col-lg-2">Category<span class="required">*</span></label>
                      <div class="col-lg-8">
                      <select name="category">
                         @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>                        
                          @endforeach
                      </select>
                      </div>
                    </div>                  
                    <div class="form-group ">
                      <label for="publication" class="control-label col-lg-2">Publication<span class="required">*</span></label>
                      <div class="col-lg-8">                        
                         <input  type="radio" name="publication" value="publish" minlength="5"/>yes
                          <input  type="radio" name="publication" value="unpulish" minlength="5"/>No
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


@endsection