@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/products.css')}}">
@endsection

@section('link')
<div class="hearder_logo">mogitate</div>
@endsection

@section('content')
<div class="register-form">
  <h2 class="register-form__heading content__heading">商品登録</h2>
  <div class="register-form__inner">
    <form class="register-form__form" action="/products" method="post">
      @csrf
      <div class="register-form__group">
        <label class="register-form__label" for="name">商品名</label>
        <br>
        <input class="register-form__input" type="text" name="name" id="name" placeholder="商品名を入力">
        <p class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
      <br>
        <label class="register-form__label" for="email">値段</label>
        <br>
        <input class="register-form__input" type="text" name="price" id="price" placeholder="値段を入力">
        <p class="register-form__error-message">
          @error('price')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
      <br>
        <label class="register-form__label" for="image">商品画像</label>
        <br>
        <input class="register-form__input" type="file" name="image" id="image">
        <p class="register-form__error-message">
          @error('image')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
      <br>
        <label class="register-form__label">
          <span class="register-form__required">季節</span>
        </label>
        <br>
        <div class="register-form__season-inputs">
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" name="season" type="radio" id="spring" value="1" {{
                old('season')==1 || old('season')==null ? 'checked' : '' }}>
              <span class="register-form__season-text">春</span>
            </label>
          </div>
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="summer" value="2" {{
                old('season')==2 ? 'checked' : '' }}>
              <span class="register-form__season-text">夏</span>
            </label>
          </div>
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="fall" value="3" {{
                old('season')==3 ? 'checked' : '' }}>
              <span class="register-form__season-text">秋</span>
            </label>
          </div>
          <div class="register-form__season-option">
            <label class="register-form__season-label">
              <input class="register-form__season-input" type="radio" name="season" id="winter" value="4" {{
                old('season')==4 ? 'checked' : '' }}>
              <span class="register-form__season-text">冬</span>
            </label>
          </div>
        </div>
        <p class="register-form__error-message">
          @error('season')
          {{ $message }}
          @enderror
        </p>
        <div class="register-form__group">
        <label class="register-form__label" for="description">商品説明</label>
        <form action="" method="get">
            <textarea name="description" cols="30" rows="5" placeholder="商品の説明を入力"></textarea>
        </form>
        <p class="register-form__error-message">
          @error('description')
          {{ $message }}
          @enderror
        </p>
      </div>
      </div>
      <br><br><br>
      <input class="register-form__btn__return btn" type="submit" value="戻る" name="back">
      <input class="register-form__btn btn" type="submit" value="登録" name="register">
    </form>
  </div>
</div>
@endsection('content')