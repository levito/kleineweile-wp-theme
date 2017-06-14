<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class('page'))>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="body" role="document">
      <div class="page-container page-container--main">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>