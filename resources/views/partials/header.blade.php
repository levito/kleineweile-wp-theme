<header class="header">
  <div class="brand">
    <a class="brand-name" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <div class="brand-description">{{ get_bloginfo('description', 'display') }}</div>
  </div>
  <div class="container container--header">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']) !!}
      @endif
    </nav>
    {!! get_search_form() !!}
  </div>
</header>
