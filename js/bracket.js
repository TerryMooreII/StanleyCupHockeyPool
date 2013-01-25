 

(function($){
 $.fn.contextMenu = function(options) {

  var defaults = {
   height: 200,
   width: 200
  };
  var options = $.extend(defaults, options);
    
 	 return this.each(function() {

  });
 };
})(jQuery);




/*

function cw_gridMenu(event, columnHeader) {
    event.preventDefault();
   
    var columnName = columnHeader.attr("id").substring(6);
    var contents = "<div class=\"popupEnable hideCol\" onclick=\"cw_hideColumn('" + columnName + "')\">Hide Column</div>";
    contents = contents + "<div class=\"popupEnable\" onclick=\"cw_showHide()\">Display Columns</div>";
    contents = contents + "<hr />";
    contents = contents + "<div class=\"popupEnable\" onclick=\"cw_sortColumn('" + columnName + "', 'asc')\">Sort Ascending</div>";
    contents = contents + "<div class=\"popupEnable\" onclick=\"cw_sortColumn('" + columnName + "', 'desc')\">Sort Descending</div>";
    var top = event.pageY;
    var left = event.pageX;
    cw_showPopup(contents, top, left);
   
}
 
function cw_showPopup(contents, top, left) {
    var menu = $("div.popup").get(0);
    menu.innerHTML = contents;
    if (menu.offsetWidth + left > document.body.offsetWidth) {
        left -= menu.offsetWidth;
        if (left < 0) left = 0;
    }
    if (menu.offsetHeight + top > document.body.offsetHeight) {
        top -= menu.offsetHeight;
        if (top < 0) top = 0;
    }
    menu.style.top = top + "px";
    menu.style.left = left + "px";
    menu.style.visibility = "visible";
    menu.focus();
}
 
function cw_hidePopup() {
    $("div.popup").get(0).style.visibility = "hidden";
}
*/