<!-- filepath: c:\Users\joven\OneDrive\Desktop\global\gabi\resources\views\adminComponents\sidebar.blade.php -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('doctors') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('doctor.appointment') }}">
        <i class="mdi mdi-calendar-check menu-icon"></i>
        <span class="menu-title">Appointment List</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="mdi mdi-email menu-icon"></i>
        <span class="menu-title">Mails</span>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->