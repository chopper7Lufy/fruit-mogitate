@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/products.css')}}">
@endsection

@section('link')
<div class="hearder_logo">mogitate</div>
@endsection

@section('content')
<div class="products-form">
    <h2 class="products-form__heading">商品一覧</h2>
    <div class="products-form__inner">
        <form class="products-search-form" action="/products/search" method="get">
            @csrf
            <div class="products-search-form___item">
                <input type="text" class="products-search-form__item-find" name="content" value="{{ old('content') }}" placeholder="商品名で検索">
                <br>
                <input class="search-form__btn btn" type="submit" value="検索" name="search">
            </div>
            <br><br>
            <div class="price-turn">
                <h3>価格順で表示</h3>
                <select class="search-form__item-select">
                <option value="">カテゴリ</option>
                <option value="1">高い順に表示</option>
                <option value="2">安い順に表示</option>
            </div>
        </form>
        <table class="admin__table">
            <tr class="admin__row">
                <th class="admin__label"></th>
                <th class="admin__label"></th>
                <th class="admin__label"></th>
            </tr>
            @foreach($products as $product)
            <tr class="admin__row">
                <td class="admin__data">{{$product->getName()}}</td>
                <td class="admin__data">{{$product->getPrice()}}</td>
                <td class="admin__data">{{$product->getImage()}}</td>
                <td class="admin__data">{{$product->getSeason()}}</td>
                <td class="admin__data">{{$product->getDescription()}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection