<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li {{ Request::is('/')  ? 'class=active' : '' }}><a href="{{ url('/') }}">Dashboard</a></li>
        <li {{ Request::is('list*')  ? 'class=active' : '' }}><a href="{{ url('games') }}">Lists</a></li>
        <li><a href="javascript:;" class="coming-soon">Bands</a></li>
        <li><a href="javascript:;" class="coming-soon">Calendar</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::user())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">Your account</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="{{ url('auth/logout') }}">Logout</a></li>
          </ul>
        </li>
        @else
        <li><a href="{{ url('auth/register') }}">Register</a></li>
        <li><a href="{{ url('auth/login') }}">Login</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav><!--/.container-fluid -->
<!-- Modal -->
<div class="modal fade" id="comingSoon" tabindex="-1" role="dialog" aria-labelledby="comingSoonLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="comingSoonLabel">Coming Soon</h4>
      </div>
      <div class="modal-body">
        <p>This feature is currently in development</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>