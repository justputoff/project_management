        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu">
            <div class="app-brand demo">
              <a href="{{ route('landing') }}" class="app-brand-link">
                <span class="app-brand-logo demo">
                  <img src="{{ asset('frontend/assets/images/logo-white.svg') }}" style="max-width: 150px" alt="">
                </span>
              </a>
  
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>
  
            <div class="menu-inner-shadow"></div>
  
            <ul class="menu-inner py-1 mt-3">
              <!-- Dashboard -->
              <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-home"></i>
                  <div data-i18n="Dashboard">Dashboard</div>
                </a>
              </li>

              <!-- Project -->
              <li class="menu-item {{ Route::is(['projects*', 'chapters*', 'contributors*']) ? 'active' : '' }}">
                <a href="{{ route('projects.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book"></i>
                  <div data-i18n="Projects">Projects</div>
                </a>
              </li>

              <!-- Project List -->
              <li class="menu-item {{ Route::is('project.projectList') ? 'active' : '' }}">
                <a href="{{ route('project.projectList') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book"></i>
                  <div data-i18n="Project List">Project List</div>
                </a>
              </li> 

              <!-- Users -->
              <li class="menu-item {{ Route::is('users*') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-user"></i>
                  <div data-i18n="Users">Users</div>
                </a>
              </li>

              <!-- Students -->
              <li class="menu-item {{ Route::is('students*') ? 'active' : '' }}">
                <a href="{{ route('students.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-graduation"></i>
                  <div data-i18n="Students">Students</div>
                </a>
              </li>

              <!-- Lecturers -->
              <li class="menu-item {{ Route::is('lecturers*') ? 'active' : '' }}">
                <a href="{{ route('lecturers.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-chalkboard"></i>
                  <div data-i18n="Lecturers">Lecturers</div>
                </a>
              </li>

              <!-- Departments -->
              <li class="menu-item {{ Route::is('departments*') ? 'active' : '' }}">
                <a href="{{ route('departments.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-building"></i>
                  <div data-i18n="Departments">Departments</div>
                </a>
              </li>

              <!-- Study Programs -->
              <li class="menu-item {{ Route::is('study_programs*') ? 'active' : '' }}">
                <a href="{{ route('study_programs.index') }}" class="menu-link">
                  <i class="menu-icon tf-icons bx bxs-book"></i>
                  <div data-i18n="Study Programs">Study Programs</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->