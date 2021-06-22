<nav class="navbar navbar-inverse">
  <div class="container">
      <div class="navbar-header">
          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="/">Acme</a>
      </div>

      <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
              <a href="/">Home</a>
            </li>
            <li class="{{ Request::is('about') ? 'active' : '' }}">
              <a href="/about">About</a>
            </li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}">
              <a href="/contact">Contact</a>
            </li>
            <li class="{{ Request::is('messages') ? 'active' : '' }}">
              <a href="/messages">Messages</a>
            </li>
          </ul>
      </div>
  </div>
</nav>