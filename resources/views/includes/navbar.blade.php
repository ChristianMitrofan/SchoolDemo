<nav class="navbar navbar-inverse navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">School Demo</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Homepage</a></li>
        <li class="{{Request::is('AboutMe') ? 'active' : ''}}"><a href="/AboutMe">About Me</a></li>
        <li class="{{Request::is('AddStudent') ? 'active' : ''}}"><a href="/AddStudent">Add Student</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>