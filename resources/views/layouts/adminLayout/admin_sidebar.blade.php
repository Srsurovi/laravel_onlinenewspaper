    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="dashboard">
                          <i class="fa fa-tachometer"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Category</span>
                <span class="menu-arrow arrow_carrot-right"></span>
            </a> 
            <ul class="sub">
              <li><a class="" href="{{url('/admin/categories/create')}}">Add Category</a></li>
              <li><a class="" href="{{url('/admin/categories')}}">Show Category</a></li>
            </ul>           
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                  <i class="icon_desktop"></i>
                  <span>Information</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="{{url('/admin/information/create')}}">Add Information</a></li>
              <li><a class="" href="{{url('/admin/information')}}">Show Information</a></li>
            </ul> 
            </li>

          <li>
            <a class="" href="{{url('/admin/breakingnews')}}">
                <i class="icon_piechart"></i>
                <span>Breaking News</span>
            </a>

          </li>

          <li class="sub-menu">
            <a href="{{url('/admin/namaj')}}" class="">
                <i class="icon_table"></i>
                <span>Salat Time</span>
                <span class="menu-arrow arrow_carrot-right"></span>
            </a>
          </li>     
         <li class="sub-menu">
            <a href="{{url('/admin/busniess')}}" class="">
                <i class="icon_table"></i>
                <span>Business Ad News</span>
                <span class="menu-arrow arrow_carrot-right"></span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Publication</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="#">BD-Publication</a></li>
              <li><a class="" href="#"><span>International-Publication</span></a></li>
              <li><a class="" href="#"><span>Sport-Publication</span></a></li>
              <li><a class="" href="#">Education-Publication</a></li>
              <li><a class="" href="#">Economy-Publication</a></li>
            </ul>
          </li>    
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->