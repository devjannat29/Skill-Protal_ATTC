<nav class="sidebar">
    <div class="sidebar-header">
      <a href="{{ route('admin.dashboard') }}" class="sidebar-brand">
        ATTC<span>SkillProtal</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_about') }}" class="nav-link">
            <i class="link-icon" data-feather="user"></i>
            <span class="link-title">About</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_certificate') }}" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Certificate</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.view_faq') }}" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">FAQ</span>
          </a>
        </li>
      </ul>
    </div>
</nav>
