$("button[name='user_figure_id']").each(function(){
  $(this).click(function(){
      if ($(this).val() == 1) {
        $("#class_figure_box").css('display','none');
        $("#tag_figure_box").css('display','');
      }else{
        $("#class_figure_box").css('display','');
        $("#tag_figure_box").css('display','none');
      }
    });
});
