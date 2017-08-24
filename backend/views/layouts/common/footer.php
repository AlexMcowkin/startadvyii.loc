<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>lib/select2/select2.js"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>lib/jquery-toggles/toggles.js"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>js/quirk.js"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>js/jquery.nestable.js"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>js/js.cookie.js"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>js/admin.cookies.js"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>js/loaders.css.js"></script>
<script src="<?=Yii::$app->params['adminHomeUrl'];?>js/adminka.js" charset="utf-8"></script>
<script>
$(function() {

  // Select2 Box
  // $('#select1, #select2, #select3').select2();
  // $("#select4").select2({ maximumSelectionLength: 2 });
  // $("#select5").select2({ minimumResultsForSearch: Infinity });
  // $("#select6").select2({ tags: true });

  $('#select-ns').select2({
    minimumResultsForSearch: Infinity
  });

  // Toggles
  $('.toggle').toggles({
    on: true,
    height: 26
  });

});
</script>