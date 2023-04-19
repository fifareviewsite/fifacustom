$(function(){
  $(".toggle").on("click", function() {
    $(".toggle").toggleClass("checked");
    if(!$('input[name="check"]').prop("checked")) {
      $(".toggle input").prop("checked", true);
    } else {
      $(".toggle input").prop("checked", false);
    }
  });
const select5foward1Options = [
    { value: 0, name: 'サポートラン'},
    { value: 1, name: 'バランスワイド'},
    { value: 2, name: 'ワイドに開く'},
    { value: 3, name: '中央に留まる'},
]
const select5foward2Options = [
    { value: 0, name: 'アタッキングラン'},
    { value: 1, name: 'ミックスアタック'},
    { value: 2, name: '裏に抜ける'},
    { value: 3, name: 'ターゲットマン'},
    { value: 4, name: 'フォルス9'},
]
const select5foward3Options = [
    { value: 0, name: 'インターセプト'},
    { value: 1, name: '通常のインターセプト'},
    { value: 2, name: '積極的なインターセプト'},
    { value: 3, name: '受動的なインターセプト'},
]
const select5foward4Options = [
    { value: 0, name: 'DFサポート'},
    { value: 1, name: 'ベーシックDFサポート'},
    { value: 2, name: 'ディフェンスに戻る'},
    { value: 3, name: '前線を張る'},
]
const select5foward5Options = [
    { value: "", name: '-'},
]

const select5wing1Options = [
    { value: 0, name: 'DFサポート'},
    { value: 1, name: 'ベーシックDFサポート'},
    { value: 2, name: 'デフェンスに戻る'},
    { value: 3, name: '前線を張る'},
]
const select5wing2Options = [
    { value: 0, name: 'チャンスメイク'},
    { value: 1, name: 'バランスワイド'},
    { value: 2, name: '中へ切り込む'},
    { value: 3, name: 'サイドに張る'},
    { value: 4, name: '自由に動く'},
]
const select5wing3Options = [
    { value: 0, name: 'サポートラン'},
    { value: 1, name: 'バランスサポート'},
    { value: 2, name: '裏に抜ける'},
    { value: 3, name: '積極的に上がらない'},
    { value: 4, name: 'ターゲットマン'},
]
const select5wing4Options = [
    { value: 0, name: 'クロス時のサポート'},
    { value: 1, name: 'バランスクロスラン'},
    { value: 2, name: 'PA内でクロスに合わせる'},
    { value: 3, name: 'サイドのケア'},
]
const select5wing5Options = [
    { value: 0, name: 'インターセプト'},
    { value: 1, name: '通常のインターセプト'},
    { value: 2, name: '積極的なインターセプト'},
    { value: 3, name: '受動的なインターセプト'},
]
/*
  var select = $('[name="formation"]');
  //select.on('change', function(){
    var formation_val = $('[name=formation]').val(); // 選択されたフォーメーション番号
    for (let count = 1; count < 9; count++) {
        var positionId = "#position_" + count;
        var targetClass = document.querySelector(positionId).classList;
        var strHead  = targetClass[0].slice( 0, 13 );
        var replaceClass = strHead + formation_val;
        document.querySelector(positionId).classList.replace(targetClass[0],replaceClass);
        switch (formation_val){
            case "0":
                switch (count){
                    case 1:
                        var selecterNo = "#selecter_1";
                        var selectNo = ["#select_1_1","#select_1_2","#select_1_3","#select_1_4","#select_1_5"]
                        var replaceClassName1 = "select-incontent-5selecter";
                        var replaceClassName2 = "selectbox-5selecter";
                        var targetClass1 = document.querySelector(selecterNo).classList;
                        document.querySelector(selecterNo).classList.replace(targetClass1[0],replaceClassName1);
                        for (let no = 0; no < 5; no++) {
                            noUp = no + 1; // nameに付けるため１プラスして持っておく。
                            var element = selectNo[no];
                            $(element).children().remove();
                            var targetClass2 = document.querySelector(selectNo[no]).classList;
                            document.querySelector(selectNo[no]).classList.replace(targetClass2[0],replaceClassName2);
                            switch (no){
                                case 0:
                                    select5wing1Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 1:
                                    select5wing2Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 2:
                                    select5wing3Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 3:
                                    select5wing4Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 4:
                                    select5wing5Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                            }
                        }
                    break;
                    case 2:
                        var selecterNo = "#selecter_2";
                        var selectNo = ["#select_2_1","#select_2_2","#select_2_3","#select_2_4","#select_2_5"]
                        var replaceClassName1 = "select-incontent-5selecter";
                        var replaceClassName2 = "selectbox-5selecter";
                        var targetClass1 = document.querySelector(selecterNo).classList;
                        document.querySelector(selecterNo).classList.replace(targetClass1[0],replaceClassName1);
                        for (let no = 0; no < 5; no++) {
                            noUp = no + 1; // nameに付けるため１プラスして持っておく。
                            var element = selectNo[no];
                            $(element).children().remove();
                            var targetClass2 = document.querySelector(selectNo[no]).classList;
                            document.querySelector(selectNo[no]).classList.replace(targetClass2[0],replaceClassName2);
                            switch (no){
                                case 0:
                                    select5wing1Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 1:
                                    select5wing2Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 2:
                                    select5wing3Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 3:
                                    select5wing4Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 4:
                                    select5wing5Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                            }
                        }
                    break;
                    case 3:
                        var selecterNo = "#selecter_3";
                        var selectNo = ["#select_3_1","#select_3_2","#select_3_3","#select_3_4","#select_3_5"]
                        var replaceClassName1 = "select-incontent-5selecter";
                        var replaceClassName2 = "selectbox-5selecter";
                        var targetClass1 = document.querySelector(selecterNo).classList;
                        document.querySelector(selecterNo).classList.replace(targetClass1[0],replaceClassName1);
                        for (let no = 0; no < 5; no++) {
                            noUp = no + 1; // nameに付けるため１プラスして持っておく。
                            var element = selectNo[no];
                            $(element).children().remove();
                            var targetClass2 = document.querySelector(selectNo[no]).classList;
                            document.querySelector(selectNo[no]).classList.replace(targetClass2[0],replaceClassName2);
                            switch (no){
                                case 0:
                                    select5foward1Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 1:
                                    select5foward2Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 2:
                                    select5foward3Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 3:
                                    select5foward4Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                                case 4:
                                    select5foward5Options.forEach((v) => {
                                        $(element).append($("<option>").attr({ value: v.value}).text(v.name));
                                    });
                                    break;
                            }
                        }
                    break;

                }
          }
        if (count < 4) {
            if (formation_val == 0){
                var cbId = "#cb_" + count;
                var cbClass = document.querySelector(cbId).classList;
                var replaceClass = "box-cb" + count + "-0";
                document.querySelector(cbId).classList.replace(cbClass[0],replaceClass);
            } else {
                var cbId = "#cb_" + count;
                var cbClass = document.querySelector(cbId).classList;
                var replaceClass = "box-cb" + count + "-1";
                document.querySelector(cbId).classList.replace(cbClass[0],replaceClass);
            }
        }
      }*/
    //});
    var modal = document.querySelector("#modal");
    var modalOverlay = document.querySelector("#modal-overlay");
    var closeButton = document.querySelector("#close-button");
    var openButton = document.querySelector("#open-button");

    //閉じるボタン
    closeButton.addEventListener("click", function () {
        modal.classList.toggle("closed");
        modalOverlay.classList.toggle("closed");
    });

    //開くボタン
    openButton.addEventListener("click", function () {
        modal.classList.toggle("closed");
        modalOverlay.classList.toggle("closed");
    });
});
