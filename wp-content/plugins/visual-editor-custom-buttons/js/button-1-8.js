// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button8', {
        init : function(ed, url) {
            ed.addButton('vecb_button8', {
                title : 'Kalam 18px',image : url+'/icons/tag.png',onclick : function() {
                     ed.selection.setContent('<span class="af_kalam_18">' + ed.selection.getContent() + '</span>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button8', tinymce.plugins.vecb_button8);
})();