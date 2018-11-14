// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button10', {
        init : function(ed, url) {
            ed.addButton('vecb_button10', {
                title : 'founder 11px lyon opacity',image : url+'/icons/tag.png',onclick : function() {
                     ed.selection.setContent('<span class="af_founder_11px">' + ed.selection.getContent() + '</span>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button10', tinymce.plugins.vecb_button10);
})();