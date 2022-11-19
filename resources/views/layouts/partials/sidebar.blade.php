<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{setActive('/')}}">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item {{setActive('space')}}{{setActive('space/*')}}">
        <a class="nav-link" href="{{route('space.index')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Parking Spaces</span>
        </a>
      </li>
      <li class="nav-item {{setActive('payment')}}">
        <a class="nav-link" href="{{route('payment.index')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Payments</span>
        </a>
      </li>
      <li class="nav-item {{setActive('setting')}} ">
        <a class="nav-link" href="{{route('setting.index')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </li>
    </ul>
  </nav>