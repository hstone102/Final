<nav class="navbar" role="navigation" aria-label="main navigation">
  <div id="navbarBasicExample" class="navbar-menu container">
    <div class="navbar-start">
      <a href="/supervisorDashboard"class="navbar-item">
        Home
      </a>
      <a href="/employee/employeeUrgentNeeds" class="navbar-item">
        Urgent Needs
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a href="/reportIssue" class="navbar-item">
            Report an issue
          </a>
          <a  href="/contact" class="navbar-item">
            Contact
          </a>
          <a  href="/register" class="navbar-item">
            Add a user
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>

  </div>
</nav>
