@extends('layout.common')
 
@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link href="/css/page.css" rel="stylesheet">
@endsection
 
@include('layout.head')
 
@include('layout.header')
 
@section('content')
<div class="box-parent">
    <div class="box">
        <div class="box-title1">CF20連勝達成フォーメーション</div>
        <div class="text-parent">
            <div class="box-formation">4-3-1-2</div>
            <div class="box-regist1">2022/10/21</div>
        </div>
        <div class="box-select1"></div>
        <div class="box-select2"></div>
        <div class="box-select3"></div>
        <div class="box-select4"></div>
        <div class="box-select5"></div>
        <div class="box-select6"></div>
    </div>
</div>
@endsection
{{--
@include('layout.sub')
 
@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection
--}}
@section('pageJs')
<script src="/js/page.js"></script>
@endsection
{{--
@include('layout.footer')
--}}