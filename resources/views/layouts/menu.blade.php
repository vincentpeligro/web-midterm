<li class="nav-item">
    <a href="{{ route('albums.index') }}"
       class="nav-link {{ Request::is('albums*') ? 'active' : '' }}">
        <p>Albums</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


