<header class="site-header">
  <div class="site-brand">
    <a class="site-brand-name" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <div class="site-brand-description">{{ get_bloginfo('description', 'display') }}</div>
  </div>
  <div class="site-container site-container--header">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    {!! get_search_form() !!}
  </div>
</header>
