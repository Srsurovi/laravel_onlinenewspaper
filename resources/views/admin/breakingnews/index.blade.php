 @extends('layouts.adminLayout.admin_design')
 @section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif	

 @include('/admin/breakingnews.create')

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-offset-lg-2 col-lg-10">
            <h3 class="page-header-new"><i class="fa fa-table"></i> Table</h3>
           
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Breaking-News Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>                	
						<th><i class="icon_profile"></i>#</th>
						<th><i class="icon_calendar"></i>Title</th>
						<th><i class="icon_calendar"></i>Created At</th>
						<th><i class="icon_cogs"></i>Action</th>
					</tr>                   
                	@foreach($breakingnews as $breakingnew)
                  <tr>
                    <td>{{$breakingnew->id}}</td>
                    <td>{{$breakingnew->title}}</td>
                    <td>{{$breakingnew->created_at->toFormattedDateString()}}</td>
                    <td>
                      <div class="btn-group">               
                       
                        <form action="{{url('/admin/breakingnews',[$breakingnew->id])}}" method="POST">
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
		{!! $breakingnews->render() !!}
@endsection
