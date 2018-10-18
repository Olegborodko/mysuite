// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button3', {
        init : function(ed, url) {
            ed.addButton('vecb_button3', {
                title : 'h3',image : url+'/icons/tag.png',onclick : function() {
                     ed.selection.setContent('<h3 class="af_h3">' + ed.selection.getContent() + '</h3>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button3', tinymce.plugins.vecb_button3);
})();