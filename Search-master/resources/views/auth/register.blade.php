@extends('layouts.logout')

@section('content')

<!-- change code when error has occurred -->
@if ($errors->any())
<div class="alert alert-danger">
        <ul>
           @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
        </ul>
</div>
@endif

{!! Form::open(['url' => '/register']) !!}

<h2 class="register">Register</h2>

<div class="form-content">
  <div class="name-group">
    <h3 class="form-label">USERNAME</h3>
    <div class="flexStyle">
      <div class="family username">
        {{ Form::label('Family') }}
        {{ Form::text('last',null,['class' => 'input']) }}
      </div>
      <div class="first username">
        {{ Form::label('First') }}
        {{ Form::text('first',null,['class' => 'input']) }}
      </div>
    </div>
    <h3 class="form-label">KANA</h3>
    <div class="flexStyle">
      <div class="family username">
        {{ Form::label('Family') }}
        {{ Form::text('last_kana',null,['class' => 'input']) }}
      </div>
      <div class="first username">
        {{ Form::label('First') }}
        {{ Form::text('first_kana',null,['class' => 'input']) }}
      </div>
    </div>
  </div>

  <div class="date-group">
    <h3 class="form-label">BIRTHDAY</h3>
    <div class="flexStyle">
      <div class="birth_year yyyy">
        {{ Form::label('Year') }}
        {{ Form::text('birth_year',null,['class' => 'input']) }}
      </div>
      <div class="birth_month date">
        {{ Form::label('Month') }}
        {{ Form::text('birth_month',null,['class' => 'input']) }}
      </div>
      <div class="birth_day date">
        {{ Form::label('DAY') }}
        {{ Form::text('birth_day',null,['class' => 'input']) }}
      </div>
    </div>
    <h3 class="form-label">ADMINISTERED</h3>
    <div class="flexStyle">
      <div class="admission_year yyyy">
        {{ Form::label('Year') }}
        {{ Form::text('admission_year',null,['class' => 'input']) }}
      </div>
      <div class="admission_month date">
        {{ Form::label('Month') }}
        {{ Form::text('admission_month',null,['class' => 'input']) }}
      </div>
      <div class="admission_date date">
        {{ Form::label('Day') }}
        {{ Form::text('admission_date',null,['class' => 'input']) }}
      </div>
    </div>
  </div>

  <div class="gender-group row">
    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

    <div class="col-md-6" style="padding-top: 8px">
        <input id="gender-m" type="radio" name="gender" value="male">
        <label for="gender-m">Male</label>
        <input id="gender-f" type="radio" name="gender" value="female">
        <label for="gender-f">Female</label>

        @if ($errors->has('gender'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
    </div>
</div>

  <div class="mail-group others">
    {{ Form::label('MailAddress') }}
    {{ Form::text('email',null,['class' => 'input']) }}
  </div>

  <div class="password-group others">
    {{ Form::label('Password') }}
    {{ Form::text('password',null,['class' => 'input']) }}

    {{ Form::label('Password Confirm') }}
    {{ Form::text('password_confirmation',null,['class' => 'input']) }}
  </div>

  {{ Form::submit('CONFIRM', ['class' => 'submit']) }}
</div>

<p class="moveBtn"><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
