<li class="{{ $active === 'true' ? 'active' : '' }}">
    <a href="{{ $url ?? '#' }}">
        <i class="{{ $icon  }}"></i>
        <p>{{ $name }}</p>
    </a>
</li>
