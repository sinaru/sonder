<header class="banner site-header" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-2">
        <div class="col-xs-12 col-sm-12 no-l-padding">
          <div class="logo">
            <a class="header-logo-link" href="{{ $sf_action }}" rel="home">
              <span class='site-title'>{{ get_bloginfo('name')  }}</span>
            </a>
          </div>
          <div class="description"><?php bloginfo('description'); ?></div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-9 col-md-10">
        <div class="visible-xs-block col-xs-12 contact-section">
          <div class="social-bar">
            @if($sf_twitter_url)
              <a class="social-icon fa fa-twitter" target="_blank" title="Twitter Profile"
                 href="{{ $sf_twitter_url }}"></a>
            @endif

            @if($sf_github_url)
              <a class="social-icon fa fa-github" target="_blank" title="GitHub Profile"
                 href="{{ $sf_github_url }}"></a>
            @endif

            @if($sf_linkedin_url)
              <a class="social-icon fa fa-linkedin" target="_blank" title="LinkedIn Profile"
                 href="{{ $sf_linkedin_url }}"></a>
            @endif
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav mr-auto']) !!}
              @endif
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>