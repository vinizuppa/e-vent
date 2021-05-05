<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-danger text-light">
                        <h3>Esqueci a senha</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </p>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row mb-3 mx-1">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control" />
                            </div>
                            <button type="submit" class="btn btn-danger">{{ __('Email Password Reset Link') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
