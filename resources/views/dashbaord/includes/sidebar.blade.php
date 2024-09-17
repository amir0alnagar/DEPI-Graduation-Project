<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link " href="{{route("home")}}">
          <i class="fa-solid fa-globe"></i>
          <span>Website</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="fa-solid fa-user-tie fs-6"></i><span>Admin</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="fa-solid fa-chalkboard-user fs-6"></i></i><span>Moderator</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="fa-solid fa-image-portrait fs-6"></i><span>Customer</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="fa-solid fa-address-book fs-6"></i></i><span>Index</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="fa-solid fa-user-plus fs-6"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#product" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="product" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="fa-solid fa-address-book fs-6"></i></i><span>Index</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="fa-solid fa-user-plus fs-6"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End products Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="fa-solid fa-address-book fs-6"></i></i><span>Index</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="fa-solid fa-user-plus fs-6"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Category Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sub_category" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sub Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sub_category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="fa-solid fa-address-book fs-6"></i></i><span>Index</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="fa-solid fa-user-plus fs-6"></i><span>Create</span>
            </a>
          </li>
        </ul>
      </li><!-- End Sub_Category Nav -->

   {{-- Category  --}}
   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
    <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('categories') }}">
                <i class="fa-solid fa-user-tie fs-5"></i><span>Index</span>
            </a>
        </li>
        <li>
            <a href="{{ route('categories.create') }}">
                <i class="fa-brands fa-monero fs-5"></i><span>Create</span>
            </a>
        </li>
        <li>
            <a href="{{ route('categories.delete') }}">
                <i class="fa-solid fa-trash-alt p-1 fs-4" ></i><span>Trash</span>
            </a>
        </li>
    </ul>
</li>
  {{-- Category  end sara  --}}



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/resources/views/dashbaord/pages/profile.blade.php') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->






    </ul>

  </aside><!-- End Sidebar-->
