//still in development, only work for description.input
function RecreateTinymceEditor(element_id){
	setTimeout(function(){
		if(document.getElementById("description_ifr")){
			document.getElementById("description_ifr")
					.contentWindow.document.getElementsByTagName('html')[0]
					.innerHTML = `<html><head><style id="mceDefaultStyles" type="text/css">.mce-content-body div.mce-resizehandle {position: absolute;border: 1px solid black;box-sizing: content-box;background: #FFF;width: 7px;height: 7px;z-index: 10000}.mce-content-body .mce-resizehandle:hover {background: #000}.mce-content-body img[data-mce-selected],.mce-content-body hr[data-mce-selected] {outline: 1px solid black;resize: none}.mce-content-body .mce-clonedresizable {position: absolute;outline: 1px dashed black;opacity: .5;filter: alpha(opacity=50);z-index: 10000}.mce-content-body .mce-resize-helper {background: #555;background: rgba(0,0,0,0.75);border-radius: 3px;border: 1px;color: white;display: none;font-family: sans-serif;font-size: 12px;white-space: nowrap;line-height: 14px;margin: 5px 10px;padding: 5px;position: absolute;z-index: 10001}
	.mce-visual-caret {position: absolute;background-color: black;background-color: currentcolor;}.mce-visual-caret-hidden {display: none;}*[data-mce-caret] {position: absolute;left: -1000px;right: auto;top: 0;margin: 0;padding: 0;}
	.mce-content-body .mce-offscreen-selection {position: absolute;left: -9999999999px;max-width: 1000000px;}.mce-content-body *[contentEditable=false] {cursor: default;}.mce-content-body *[contentEditable=true] {cursor: text;}
	</style><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" id="u0" href="https://cdn.jsdelivr.net/npm/tinymce@4.7.13/skins/lightgray/content.min.css"></head><body id="tinymce" class="mce-content-body " data-id="description" contenteditable="true" spellcheck="false"><p><br data-mce-bogus="1"></p></body></html>`;
			//var iframe_content = document.getElementById("description_ifr").contentWindow.document.getElementsByTagName('html')[0].innerHTML;
			//alert(iframe_content);
		}
		
	},100);
	
}

function GetTinymceContent(element_id){
	var iframe_content = document.getElementById(element_id+"_ifr")
								 .contentWindow.document
								 .getElementsByTagName('html')[0]
								 .getElementsByTagName('body')[0].innerHTML;
	return iframe_content;
}

function SetTinymceContent(element_id,content){
	
	if(document.getElementById("description_ifr")){
		setTimeout(function(){
			document.getElementById("description_ifr")
				.contentWindow.document.getElementsByTagName('html')[0]
				.getElementsByTagName('body')[0]
				.innerHTML = content;
		},100);
	}
}