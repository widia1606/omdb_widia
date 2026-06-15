<!-- resources/views/auth/login.blade.php -->

<section class="section">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-md-6 col-lg-5">

        <!-- LANGUAGE SWITCHER -->
        <div class="text-center mb-3">
            <div class="dropdown d-inline-block">
                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                    <i class="fas fa-globe"></i>
                    {{ app()->getLocale() == 'id' ? 'ID' : 'EN' }}
                </button>

                <div class="dropdown-menu">
                    <a href="{{ url('lang/en') }}" class="dropdown-item">English</a>
                    <a href="{{ url('lang/id') }}" class="dropdown-item">Bahasa Indonesia</a>
                </div>
            </div>
        </div>

        <!-- CARD LOGIN -->
        <div class="card card-primary">

          <div class="card-header">
            <h4>{{ __('messages.login') }}</h4>
          </div>

          <div class="card-body">

            <form method="POST" action="{{ route('signin') }}">
              @csrf

              <!-- EMAIL -->
              <div class="form-group">
                <label>{{ __('messages.email') }}</label>
                <input type="email" name="email" class="form-control" required>

                @error('email')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <!-- PASSWORD -->
              <div class="form-group">
                <label>{{ __('messages.password') }}</label>
                <input type="password" name="password" class="form-control" required>

                @error('password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <!-- BUTTON -->
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  {{ __('messages.login') }}
                </button>
              </div>

            </form>

          </div>
        </div>

        <!-- FOOTER -->
        <div class="mt-5 text-muted text-center">
          {{ __('messages.dont_have_account') }}
          <a href="{{ url('/register') }}">
            {{ __('messages.create_one') }}
          </a>
        </div>

        <div class="simple-footer">
          Copyright &copy; Stisla
        </div>

      </div>
    </div>
  </div>
</section>