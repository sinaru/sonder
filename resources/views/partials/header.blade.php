<header class="banner site-header" role="banner">
  <div class="container">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <div class="col-xs-12 col-sm-3 col-md-2 no-l-padding">
      <div class="col-xs-12 col-sm-12 no-l-padding">
        <div class="logo">
          @if ($sf_logo_url)
          <a href="{{ $sf_action }}" rel="home">
            <img src="{{ $sf_logo_url  }}"/>
          </a>
          @else
          <a class="header-logo-link" href="{{ $sf_action }}" rel="home">
            <span class='site-title'>{{ $sf_name }}</span>
          </a>
          @endif
        </div>
        <div class="description"><?php bloginfo('description'); ?></div>
      </div>
      <div class="visible-xs-block col-xs-12 contact-section">
        <div class="contact-bar">
         <span class="contact-item">
           email@site.com
         </span>
        </div>
        <div class="social-bar">
          <a class="social-icon fa fa-github" target="_blank" title="GitHub Profile" href="{{ $sf_github_link }}"></a>
          <a class="social-icon fa fa-linkedin" target="_blank" title="LinkedIn Profile" href="{{ $sf_github_link }}"></a>
        </div>
      </div>
      <div class="banner navbar navbar-default navbar-right" role="banner">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target=".navbar-collapse">
            <span class="sr-only"><?php _e('Toggle navigation', 'sage'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <nav class="collapse navbar-collapse" role="navigation">
          @if (has_nav_menu('primary_navigation')) :
            wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'walker' => new wp_bootstrap_navwalker(),
              'menu_class' => 'nav navbar-nav'
            ]);
          @endif
        </nav>
      </div>
    </div>
  </div>
</header>