// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button9', {
        init : function(ed, url) {
            ed.addButton('vecb_button9', {
                title : 'quote',image : url+'/icons/tag.png',onclick : function() {
                     ed.selection.setContent('<span class="af_quote">' + ed.selection.getContent() + '</span>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button9', tinymce.plugins.vecb_button9);
})();