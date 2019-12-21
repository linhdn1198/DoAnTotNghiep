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
                        <p>{{ __('home.home') }} / {{ __('home.update_profille') }}</p>
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
                        <h3>{{ __('home.title_update_profille') }}</h3>
                        <form class="row contact_form" action="{{ route('update_profile') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ $user->name }}" required autocomplete="name" autofocus
                                placeholder="{{ __('home.name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="date" class="form-control @error('dateOfBirth') is-invalid @enderror" name="dateOfBirth"
                                value="{{ $user->dateOfBirth }}" required autocomplete="dateOfBirth" autofocus
                                placeholder="{{ __('home.dateOfBirth') }}">
                                @error('dateOfBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select type="date" class="form-control @error('gender') is-invalid @enderror" name="gender"
                                value="{{ $user->gender }}" required autocomplete="gender" autofocus>
                                    <option value="1">{{ __('home.gender_male') }}</option>
                                    <option value="0">{{ __('home.gender_female') }}</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <textarea type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                                required autocomplete="address" autofocus rows="5"
                                placeholder="{{ __('home.address') }}">{{ $user->address }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                value="{{ $user->phone }}" required autocomplete="phone" autofocus
                                placeholder="{{ __('home.phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ $user->email }}" required autocomplete="email" autofocus
                                placeholder="{{ __('home.email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn_3">
                                    {{ __('home.change_profile') }}
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
