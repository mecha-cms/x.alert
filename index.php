<?php namespace x\alert;

function y__alert($alert) {
    foreach ($alert[1] as &$v) {
        $v[0] = 'p';
        $v[2]['role'] = 'alert';
        // This key will be ignored by `HTML` class but can be used by other hook(s) as a reference.
        $v['type'] = $v[2]['type'];
        unset($v[2]['type']);
    }
    unset($v);
    return $alert;
}

\Hook::set('y.alert', __NAMESPACE__ . "\\y__alert", 2);

// Set default alert layout if `.\lot\y\*\alert.php` file does not exist.
if (\class_exists("\\Layout") && !\Layout::path('alert')) {
    \Layout::set('alert', __DIR__ . \D . 'engine' . \D . 'y' . \D . 'alert.php');
}