(function() {
  tinymce.PluginManager.add('gavickpro_tc_button', function( editor, url ) {
    editor.addButton( 'gavickpro_tc_button', {
      title: 'Opacity',
      type: 'menubutton',
      icon: '',
      image: 'http://mysuite.loc/wp-content/plugins/visual-editor-custom-buttons/js/icons/tag.png',
      menu: [
        {
          text: '0.1',
          value: '0.1',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_01">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.2',
          value: '0.2',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_02">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.3',
          value: '0.3',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_03">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.4',
          value: '0.4',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_04">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.5',
          value: '0.5',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_05">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.6',
          value: '0.6',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_06">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.7',
          value: '0.7',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_07">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.8',
          value: '0.8',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_08">' + editor.selection.getContent() + '</span>');
          }
        },
        {
          text: '0.9',
          value: '0.9',
          onclick: function() {
            editor.focus();
            editor.selection.setContent('<span class="af_opacity_09">' + editor.selection.getContent() + '</span>');
          }
        },
      ]
    });
  });
})();