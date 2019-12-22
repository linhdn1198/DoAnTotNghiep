@extends('clients.master')

@section('style')
<style>
.section_padding {
    padding: 0px !important;
}
</style>
@endsection
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>{{ __('home.home') }} / {{ __('home.change_password') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================login_part Area =================-->
<section class="login_part section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-2">
            </div>
            <div class="col-lg-8 col-md-2">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>{{ __('home.title_change_password') }}</h3>
                        <form class="row contact_form" action="{{ route('update_password') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password"
                                required autocomplete="old_password" autofocus
                                placeholder="{{ __('home.old_password') }}">
                                @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                required autocomplete="password" autofocus
                                placeholder="{{ __('home.password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                            <input type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password" autofocus
                                placeholder="{{ __('home.confirm_password') }}">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn_3">
                                    {{ __('home.change_password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->
@endsection
@section('script')
<script>

</script>
@endsection
