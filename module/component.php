<?php

function alert($type, $msg) {
    return '<div class="alert alert-'.$type.'" role="alert">
    '.$msg.'
  </div>';
}

?>