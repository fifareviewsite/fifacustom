@extends('layout.common')
 
@section('title', 'FIFA TACTICS COMMUNITY')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link href="/css/page.css" rel="stylesheet">
@endsection
 
@include('layout.head')
 
@include('layout.header')
 
@section('content')
<div class="mypage_header">
    <div class="select_mypage">
        <div class="user_icon"></div>
        <div class="save_icon"></div>
        <div class="select_top_mypage">
            <div class="cp_ipselect_mypage cp_sl04">
            <select required>
                <option value="0"">登録日が新しい</option>
                <option value="1">登録日が古い</option>
                <option value="2">評価が高い</option>
                <option value="3">rabbit</option>
                <option value="4">squirrel</option>
            </select>
            </div>
        </div>
    </div>
    </div>
<div class="container">
    <div class="box-container">
        <div class="box-container-all">
            <div class="box-container-top">
                <div class="box-container-top-formation">4-3-1-2</div>
            </div>
            <div class="box-container-title">
                CF20連勝達成フォーメーション
            </div>
            <div class="box-container-date">
                2022/10/10~2022/11/10
            </div>
            <div class="box-container-copy">
                <p>COPY</p>
            </div>
            <div class="box-container-create">
                By ロビン
            </div>
            <div class="box-container-goodcount">
            <label for="like"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></label>
                <p>50</p>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box-container-all">
            <div class="box-container-top">
                <div class="box-container-top-formation">4-3-1-2</div>
            </div>
            <div class="box-container-title">
                CF20連勝達成フォーメーション
            </div>
            <div class="box-container-date">
                2022/10/10~2022/11/10
            </div>
            <div class="box-container-copy" onClick>
                <p>COPY</p>
            </div>
            <div class="box-container-create">
                By ロビン
            </div>
            <div class="box-container-goodcount">
            <label for="like"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></label>
                <p>50</p>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box-container-all">
            <div class="box-container-top">
                <div class="box-container-top-formation">4-3-1-2</div>
            </div>
            <div class="box-container-title">
                CF20連勝達成フォーメーション
            </div>
            <div class="box-container-date">
                2022/10/10~2022/11/10
            </div>
            <div class="box-container-copy" onClick>
                <p>COPY</p>
            </div>
            <div class="box-container-create">
                By ロビン
            </div>
            <div class="box-container-goodcount">
            <label for="like"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></label>
                <p>50</p>
            </div>
        </div>
    </div>
    <div class="box-container">
        <div class="box-container-all">
            <div class="box-container-top">
                <div class="box-container-top-formation">4-3-1-2</div>
            </div>
            <div class="box-container-title">
                CF20連勝達成フォーメーション
            </div>
            <div class="box-container-date">
                2022/10/10~2022/11/10
            </div>
            <div class="box-container-copy" onClick>
                <p>COPY</p>
            </div>
            <div class="box-container-create">
                By ロビン
            </div>
            <div class="box-container-goodcount">
            <label for="like"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></label>
                <p>50</p>
            </div>
        </div>
    </div>
</div>
<div>
<a href="/register" class="btn btn--orange btn--circle btn--circle-a btn--shadow">+</a>
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