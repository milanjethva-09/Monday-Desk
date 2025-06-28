<?php
function is_active($file) {
    return basename($_SERVER['PHP_SELF']) === $file ? 'active' : '';
}
?>
