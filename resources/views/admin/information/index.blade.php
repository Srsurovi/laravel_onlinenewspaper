 @extends('layouts.adminLayout.admin_design')
 @section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif  

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-offset-lg-2 col-lg-10">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Information Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>                  
                    <th><i class="icon_profile"></i>#</th>
                    <th>Title</th>                    
                    <th>Image</th>
                    <th>Time</th>
                    <th>Category</th>
                    <th>Created At</th>
                    <th>Publication</th>
                    <th>Action</th>
                  </tr>                   
                  @foreach($informations as $information)
                  <tr>
                    <td>{{$information->id}}</td>
                    <td>{{$information->title}}</td>                    
                    <td><img width='80' src='../images/{{$information->image}}' /></td>
                    <td>{{$information->time}}</td>
                    <td>{{$information->categories_name}}</td>                    
                    <td>{{$information->created_at->toFormattedDateString()}}</td>
                    <td>{{$information->publication}}</td>
                    <td>
                    <div class="btn-group">                      
                        <a href="{{ URL::to('/admin/information/' . $information->id . '/edit') }}">
                        <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{url('/admin/information',[$information->id])}}" method="POST">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                      </div>                    
                    </td>
                  </tr>       
                    @endforeach           
                  </tbody>
              </table>
            </section>
               </div>
        </div>
 </section>
  </section>
    {!! $informations->render() !!}
@endsection
