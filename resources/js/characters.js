

$(document).ready(function(){           //Document ready


//---------------------------on load events ------------------------



//-------------------------on load handlers------------------------
$(".char_tab").on("click", function(){
  $(".char_tab").removeClass("active_tab");
  $(".tables").removeClass("active_table");
  $(this).addClass("active_tab");
  $("#"+$(this).attr("id")+"_table").addClass("active_table");
});

});
