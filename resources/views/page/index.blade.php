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
<div class="select_top">
    <div class="cp_ipselect cp_sl04">
    <select required>
        <option value="" hidden>4-3-1-2</option>
        <option value="1">cat</option>
        <option value="2">dog</option>
        <option value="3">rabbit</option>
        <option value="4">squirrel</option>
    </select>
    </div>
    <div class="cp_ipselect cp_sl04">
    <select required>
        <option value="" hidden>評価が高い順</option>
        <option value="1">cat</option>
        <option value="2">dog</option>
        <option value="3">rabbit</option>
        <option value="4">squirrel</option>
    </select>
    </div>
</div>
<div class="box-row">
<div class="box-parent">
    <div class="box">
        <div class="box-content1">
            <div class="box-title1">CF20連勝達成フォーメーション</div>
            <div class="text-parent">
                <div class="box-formation">4-3-1-2</div>
                <div class="box-regist1">2022/10/21</div>
            </div>
        </div>
        <div class="box-content2">
            <div class="box-select1">
                <p class="select-text">ワイドに開く</p>
                <p class="select-text">裏に抜ける</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">前線を張る</p>
            </div>
            <div class="box-select2">
                <p class="select-text-5">ワイドに開く</p>
                <p class="select-text-5">裏に抜ける</p>
                <p class="select-text-5">前線にとどまる</p>
                <p class="select-text-5">攻撃時に上がらない</p>
                <p class="select-text-5">オーバーラップ</p>
            </div>
            <div class="box-select3">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select4">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select5">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select6">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select7">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select8">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-cb1">
                <p class="cb">CB</p>
            </div>
            <div class="box-cb2">
                <p class="cb">CB</p>
            </div>
        </div>
        <div class="defense">
            <p class="defense-title">DEFENSE</p>
            <p class="defense-tac">バランス</p>
            <div class="graph-defense-parent">
            <p class="graph-defense-title">幅</p>
                <div class="graph-defense">
                    <span class="bar" style="width: 70%;">70</span>
                </div>
            </div>
            <div class="graph-defense-parent2">
            <p class="graph-defense-title2">深さ</p>
                <div class="graph2-defense">
                    <span class="bar" style="width: 40%;">40</span>
                </div>
            </div>
        </div>
        <div class="offense">
            <p class="offense-title">OFFENSE</p>
            <p class="offense-tac1">高速ビルドアップ</p>
            <p class="offense-tac2">バランス</p>
            <div class="graph-offense-parent">
            <p class="graph-offense-title">幅</p>
                <div class="graph-offense">
                    <span class="bar" style="width: 70%;">70</span>
                </div>
            </div>
            <div class="graph-offense-parent2">
            <p class="graph-offense-title2">深さ</p>
                <div class="graph2-offense">
                    <span class="bar" style="width: 40%;">40</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-parent">
    <div class="box">
        <div class="box-content1">
            <div class="box-title1">CF20連勝達成フォーメーション</div>
            <div class="text-parent">
                <div class="box-formation">4-3-1-2</div>
                <div class="box-regist1">2022/10/21</div>
            </div>
        </div>
        <div class="box-content2">
            <div class="box-select1">
                <p class="select-text">ワイドに開く</p>
                <p class="select-text">裏に抜ける</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">前線を張る</p>
            </div>
            <div class="box-select2">
                <p class="select-text-5">ワイドに開く</p>
                <p class="select-text-5">裏に抜ける</p>
                <p class="select-text-5">前線にとどまる</p>
                <p class="select-text-5">攻撃時に上がらない</p>
                <p class="select-text-5">オーバーラップ</p>
            </div>
            <div class="box-select3">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select4">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select5">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select6">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select7">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select8">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-cb1">
                <p class="cb">CB</p>
            </div>
            <div class="box-cb2">
                <p class="cb">CB</p>
            </div>
        </div>
        <div class="defense">
            <p class="defense-title">DEFENSE</p>
            <p class="defense-tac">バランス</p>
            <div class="graph-defense-parent">
            <p class="graph-defense-title">幅</p>
                <div class="graph-defense">
                    <span class="bar" style="width: 70%;">70</span>
                </div>
            </div>
            <div class="graph-defense-parent2">
            <p class="graph-defense-title2">深さ</p>
                <div class="graph2-defense">
                    <span class="bar" style="width: 40%;">40</span>
                </div>
            </div>
        </div>
        <div class="offense">
            <p class="offense-title">OFFENSE</p>
            <p class="offense-tac1">高速ビルドアップ</p>
            <p class="offense-tac2">バランス</p>
            <div class="graph-offense-parent">
            <p class="graph-offense-title">幅</p>
                <div class="graph-offense">
                    <span class="bar" style="width: 70%;">70</span>
                </div>
            </div>
            <div class="graph-offense-parent2">
            <p class="graph-offense-title2">深さ</p>
                <div class="graph2-offense">
                    <span class="bar" style="width: 40%;">40</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-parent">
    <div class="box">
        <div class="box-content1">
            <div class="box-title1">CF20連勝達成フォーメーション</div>
            <div class="text-parent">
                <div class="box-formation">4-3-1-2</div>
                <div class="box-regist1">2022/10/21</div>
            </div>
        </div>
        <div class="box-content2">
            <div class="box-select1">
                <p class="select-text">ワイドに開く</p>
                <p class="select-text">裏に抜ける</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">前線を張る</p>
            </div>
            <div class="box-select2">
                <p class="select-text-5">ワイドに開く</p>
                <p class="select-text-5">裏に抜ける</p>
                <p class="select-text-5">前線にとどまる</p>
                <p class="select-text-5">攻撃時に上がらない</p>
                <p class="select-text-5">オーバーラップ</p>
            </div>
            <div class="box-select3">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select4">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select5">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select6">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select7">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-select8">
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
                <p class="select-text">初期設定</p>
            </div>
            <div class="box-cb1">
                <p class="cb">CB</p>
            </div>
            <div class="box-cb2">
                <p class="cb">CB</p>
            </div>
        </div>
        <div class="defense">
            <p class="defense-title">DEFENSE</p>
            <p class="defense-tac">バランス</p>
            <div class="graph-defense-parent">
            <p class="graph-defense-title">幅</p>
                <div class="graph-defense">
                    <span class="bar" style="width: 70%;">70</span>
                </div>
            </div>
            <div class="graph-defense-parent2">
            <p class="graph-defense-title2">深さ</p>
                <div class="graph2-defense">
                    <span class="bar" style="width: 40%;">40</span>
                </div>
            </div>
        </div>
        <div class="offense">
            <p class="offense-title">OFFENSE</p>
            <p class="offense-tac1">高速ビルドアップ</p>
            <p class="offense-tac2">バランス</p>
            <div class="graph-offense-parent">
            <p class="graph-offense-title">幅</p>
                <div class="graph-offense">
                    <span class="bar" style="width: 70%;">70</span>
                </div>
            </div>
            <div class="graph-offense-parent2">
            <p class="graph-offense-title2">深さ</p>
                <div class="graph2-offense">
                    <span class="bar" style="width: 40%;">40</span>
                </div>
            </div>
        </div>
    </div>
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