function copy(obj) {
  navigator.clipboard.writeText(jQuery(obj).html().replace('#','').replace(/<\/?span[^>]*>/g,'')).then(function() {
    setTimeout(function() { jQuery('.copied').remove(); }, 1000);
	jQuery(obj).append("<div class='copied'>Copied</div>");
  }, function() {
    alert("failed");
  });
}