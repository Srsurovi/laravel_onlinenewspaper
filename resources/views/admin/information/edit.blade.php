@extends('layouts.adminLayout.admin_design')
   @section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Informatiom</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Informatiom</li>
              <li><i class="fa fa-files-o"></i>Eidt Informatiom</li>
            </ol>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Edit Informatiom
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{url('/admin/information', [$information->id])}}">
                  	<input type="hidden" name="_method" value="PUT">
				        	{{ csrf_field() }}
                    <div class="form-group ">
                      <label for="title" class="control-label col-lg-2">Title <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" value="{{ $information->title }}" id="title" name="title" type="text" />
                      </div>
                    </div> <div class="form-group ">
                      <label for="time" class="control-label col-lg-2">Time <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" value="{{ $information->time }}" id="time" name="time" type="text" />
                      </div>
                    </div> <div class="form-group ">
                      <label for="description" class="control-label col-lg-2">Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" value="{{ $information->description }}" id="description" name="description" type="text" />
                      </div>
                    </div> <div class="form-group ">
                      <label for="publication" class="control-label col-lg-2">Publication <span class="required">*</span></label>
                      <div class="col-lg-10">
                            <input class="form-control" value="{{ $information->publication }}" id="publication" name="publication" type="text" />
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
       
      </section>
    </section>


@endsection