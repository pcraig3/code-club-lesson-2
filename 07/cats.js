window.onload = init;

function init() {
  var hide_list_class = 'hide_list'
  var div = document.getElementById("list_container");

  div.onclick = function(e){
    if (hasClass(div, hide_list_class))
      removeClass(div, hide_list_class);
    else
      addClass(div, hide_list_class);
  };
}
