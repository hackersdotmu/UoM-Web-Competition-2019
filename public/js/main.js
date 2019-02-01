function nextpage(){
	var position=window.location.href.indexOf("page=");
	var current_page_num=window.location.href.substring(position+5);
	var next_page_num=Number(current_page_num)+1;
	var next_link=(window.location.href.substring(0, position+5)+next_page_num);
	window.location.href=next_link;

};
function previouspage(){
	var position=window.location.href.indexOf("page=");
	var current_page_num=window.location.href.substring(position+5);
	var previous_page_num=Number(current_page_num)-1;
	var previous_link=(window.location.href.substring(0, position+5)+previous_page_num);
	window.location.href=previous_link;

};