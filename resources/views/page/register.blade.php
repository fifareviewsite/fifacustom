@extends('layout.common')
 
@section('title', 'FIFA TACTICS COMMUNITY')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
<link href="/css/page.css" rel="stylesheet">
<link href="/css/register.css" rel="stylesheet">
<link href="/css/boxselect.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('/js/edit.js') }}">
</script>
@endsection
 
@include('layout.head')
 
@include('layout.header')
 
@section('content')
<div class="form_formation">
<div class="form_formation_parent">
    <div class="form_formation_box">
            <div class="form_formation_title">FORMATION</div>
            <div class="cp_ipselect_register cp_sl04">
                <select name="formation" required>
                    <option value="0" selected>3-4-3</option>
                    <option value="1">3-5-2</option>
                    <option value="2">3-4-1-2</option>
                    <option value="3">3-4-2-1</option>
                    <option value="4">4-3-3</option>
                    <option value="5">4-3-3(2)</option>
                    <option value="6">4-3-3(4)</option>
                    <option value="7">4-3-3(5)</option>
                    <option value="8">4-4-2</option>
                    <option value="9">4-4-2(2)</option>
                    <option value="10">4-5-1</option>
                    <option value="11">4-5-1(2)</option>
                    <option value="12">4-1-4-1</option>
                    <option value="14">4-2-2-2</option>
                    <option value="15">4-2-3-1</option>
                    <option value="16">4-2-3-1(2)</option>
                    <option value="17">4-3-1-2</option>
                    <option value="18">4-3-2-1</option>
                    <option value="19">4-4-1-1</option>
                    <option value="20">4-1-2-1-2</option>
                    <option value="21">4-1-2-1-2(2)</option>
                    <option value="22">5-2-1-2</option>
                    <option value="23">5-2-2-1</option>
                    <option value="24">5-1-2-2</option>
                    <option value="25">5-4-1</option>
                    <option value="26">4-2-4</option>
                    <option value="27">4-1-3-2</option>
                    <option value="28">3-1-4-2</option>
                </select>
            </div>
            <div class="box-select-content">
                <!--
            <div class="modal-overlay closed" id="modal-overlay"></div>
                <div class="modal closed" id="modal">
                <button class="close-button" id="close-button">close</button>
                <div class="modal-guts">
                    <h4>ST Direction</h4>
                    <input type="select">
                </div>
-->
<button id="button-1-1" class="button-1-1" name="button_form">ST</button>
<button class="button-1-2" name="button_form">LW</button>
<button class="button-1-3" name="button_form">RW</button>
<button class="button-1-4" name="button_form">LM</button>
<button class="button-1-5" name="button_form">CM</button>
<button class="button-1-6" name="button_form">CM</button>
<button class="button-1-7" name="button_form">RM</button>
<button class="button-1-8" name="button_form">CB</button>
<button class="button-1-9" name="button_form">CB</button>
<button class="button-1-10" name="button_form">CB</button>

                </div>
                <!--<button id="open-button-1" class="open-button">ST</button>-->
                <p class="institution_form_1">※各ポジションをタップすると入力フォームが表示されます</p>
                <p class="institution_form_2">※CBは選択できません</p>
        </div>
    </div>
</div>
</div>
<div class="form_defense">
<div class="form_defense_parent">
    <div class="form_defense_box">
            <div class="form_defense_title">DEFENSE</div>
            <div class="cp_ipselect_register cp_sl04">
                <select required>
                    <option value="0"">バランス</option>
                    <option value="1">ロスト後即プレス</option>
                </select>
            </div>
            <div class="range-container">
            <label for="length">幅</label>
                <input type="range" id="range" min="0" max="100">50
            </div>
            <div class="range-container2">
            <label for="length">深さ</label>
                <input type="range" id="range" min="0" max="100">50
            </div>
    </div>
</div>
</div>
<div class="form_offense">
<div class="form_offense_parent">
    <div class="form_offense_box">
            <div class="form_offense_title">OFFENSE</div>
            <div class="cp_ipselect_register cp_sl04">
                <select required>
                    <option value="0"">バランス</option>
                    <option value="1">ロスト後即プレス</option>
                </select>
            </div>
            <div class="cp_ipselect_register cp_sl04">
                <select required>
                    <option value="0"">バランス</option>
                    <option value="1">ロスト後即プレス</option>
                </select>
            </div>
            <div class="range-container2">
            <label for="length">幅</label>
                <input type="range" id="range" min="0" max="100">50
            </div>
            <div class="range-container2">
            <label for="length">深さ</label>
                <input type="range" id="range" min="0" max="100">50
            </div>
            <div class="range-container2">
            <label for="length">CK</label>
                <input type="range" id="range" min="0" max="100">50
            </div>
            <div class="range-container2">
            <label for="length">FK</label>
                <input type="range" id="range" min="0" max="100">50
            </div>
    </div>
</div>
</div>
<div class="form_offense">
<div class="form_offense_parent">
    <div class="form_offense_box">
            <div class="form_offense_title">COMMENT</div>
            <textarea></textarea>
    </div>
</div>
</div>
<div class="form_setting">
<div class="form_setting_parent">
    <div class="form_setting_box">
            <div class="form_setting_title">SETTING</div>
            <div class="form_setting_content">
            <div class="form_setting_open">公開する</div>
                <div class="toggle">
                <input type="checkbox" name="check1" />
                </div>
            </div>
            <div class="form_setting_text1">トップ画面、検索で表示されるようになります</div>
            <div class="form_setting_content">
            <div class="form_setting_copy">コピーを許可する</div>
                <div class="toggle">
                <input type="checkbox" name="check2" />
                </div>
            </div>
            <div class="form_setting_text2">コピーボタンが表示されるようになります</div>
    </div>
</div>
</div>
<div class="form_save">
<div class="btn-wrap btn-wrap-pc-sp">
  <a href="" class="btn btn-pc-sp btn-pc-sp--3 btn-pc-sp--contact">
    戻る
    <i class="fas fa-angle-right fa-position-right"></i>
  </a>
  <a href="" class="btn btn-pc-sp btn-pc-sp--3 btn-pc-sp--tel">
    保存する
    <i class="fas fa-angle-right fa-position-right"></i>
  </a>
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