<header class="page-header">
  <div class="page-brand">
    <a class="page-brand-name" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <div class="page-brand-description">{{ get_bloginfo('description', 'display') }}</div>
  </div>
  <div class="page-container page-container--header">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    {!! get_search_form() !!}
  </div>
</header>
