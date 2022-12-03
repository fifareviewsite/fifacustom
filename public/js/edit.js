$(function(){
$(".toggle").on("click", function() {
    $(".toggle").toggleClass("checked");
    if(!$('input[name="check"]').prop("checked")) {
      $(".toggle input").prop("checked", true);
    } else {
      $(".toggle input").prop("checked", false);
    }
  });

  var select = $('[name="formation"]');
  select.on('change', function(){
    var formation_val = $('[name=formation]').val(); // 選択されたフォーメーション番号
    for (let count = 1; count < 9; count++) {
        var positionId = "#position_" + count;
        var targetClass = document.querySelector(positionId).classList;
        var strHead  = targetClass[0].slice( 0, 13 );
        var replaceClass = strHead + formation_val;
        document.querySelector(positionId).classList.replace(targetClass[0],replaceClass);
      }
    });
});
