<?php

class PreviewfilesField extends BaseField {
  static public $uuid = 0;
  static public $domNamespace = '__kirby__field__previewfiles';
  static public $assets = ['js' => ['script.js']];

  public function input() {
    $id = self::$domNamespace . '__' . ++self::$uuid;
    $var = 'window' . '.' . self::$domNamespace;
    $opts = json_encode((object) []);
    $javascript = "
      (function () {
        if (${var}) ${var}.init(${opts})
        var self = document.getElementById('${id}')
        self.parentNode.removeChild(self)
      })()
    ";
    return brick('script', $javascript, ['id' => $id]);
  }
}
