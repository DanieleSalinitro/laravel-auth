<nav id="sidebar" class="bg-dark navbar-dark">
    <a href="/" class="nav-link text-white"><h2 class="p-2">
        <i class="fa-solid fa-square-rss"></i> Portfolio</h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white {{Route::currentRouteName() == 'admin.posts.index' ? 'active' : ''}}" href="{{route('admin.posts.index')}}"> <i class="fa-solid fa-newspaper fa-lg fa-fw"></i>Posts</a>
        </li>

      </ul>
    </nav>