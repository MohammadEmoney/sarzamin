<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <span>{{ $settings['title'] ?? env('APP_NAME') }}</span>
          </a>
          <p>{!! $settings['about_us'] ?? "" !!}</p>
          <div class="social-links d-flex mt-4">
            @foreach ($socialMedia as $item)
              <a href="{{ $item->link }}" class="twitter"><i class="{{ $item->icon }}"></i></a>
            @endforeach
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>{{ __('global.useful_links') }}</h4>
          <ul>
            @foreach ($menu as $item)
                <li><a href="{{ $item->link }}">{{ $item->title }}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>{{ __('global.recent_news') }}</h4>
          <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('front.blog.show', ['post' => $post->slug]) }}">{{ $post->title }}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>{{ __('global.contact_us') }}</h4>
          <p>
            {!! $settings['address'] ?? "" !!}
            <br>
            @if ($phone = $settings['phone'] ?? null)
              <strong>{{ __('global.phone_number') }}:</strong> <span dir="ltr">{{ $phone }}</span><br>
            @endif
            @if ($landline = $settings['landline'] ?? null)
              <strong>{{ __('global.landlines') }}:</strong> <span dir="ltr">{{ $landline }}</span><br>
            @endif
            @if ($secondLandline = $settings['second_landline'] ?? null)
              <strong>{{ __('global.landlines') }}:</strong> <span dir="ltr">{{ $secondLandline }}</span><br>
            @endif
            @if ($thirdLandline = $settings['third_landline'] ?? null)
              <strong>{{ __('global.landlines') }}:</strong> <span dir="ltr">{{ $thirdLandline }}</span><br>
            @endif
            @if ($forthLandline = $settings['forth_landline'] ?? null)
              <strong>{{ __('global.landlines') }}:</strong> <span dir="ltr">{{ $forthLandline }}</span><br>
            @endif
            @if ($email = $settings['email'] ?? null)  
              <strong>{{ __('global.email') }}:</strong> {{ $email }}<br>
            @endif
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ env('APP_NAME')  }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        {{-- Designed by <a href="https://emcode.ir/">Emcode</a> --}}
      </div>
    </div>

</footer><!-- End Footer -->
 