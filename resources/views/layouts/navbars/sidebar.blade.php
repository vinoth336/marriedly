<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/web/images/banner/banner1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a target="_blank" href="{{ config('app.url') }}" class="simple-text logo-normal">
      {{ __('Marriedly') }}
    </a>
  </div>
  
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'site_information' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_information') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Site Information') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'services' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_information') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Services') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'slider' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_information') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Slider') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'testimonial' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_information') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Testimonial') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'enquiries' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_information') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Enquiries') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'portfolio' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_information') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Portfolio') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'faqs' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('faqs.list') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Faq\'s') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'faqs' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('site_information') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Api\'s Integration') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>