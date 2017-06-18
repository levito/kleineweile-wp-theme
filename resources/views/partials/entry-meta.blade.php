<p class="byline author vcard">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>
<time class="updated" datetime="{{ get_post_time('c', true) }}">
  <span class="updated-date">{{ get_the_date('j') }}</span>
  <span class="updated-month">{{ get_the_date('M') }}</span>
  <span class="updated-year">{{ get_the_date('Y') }}</span>
</time>
