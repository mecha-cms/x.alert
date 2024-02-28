<?php namespace x\alert;

function y__alert($y) {
    foreach ($y[1] as &$v) {
        $v[0] = 'p';
        $v[2]['role'] = 'alert';
        // This key will be ignored by the `HTML` class but it can be used by other hook(s) as a reference
        $v['type'] = $v[2]['type'];
        unset($v[2]['type']);
    }
    unset($v);
    return $y;
}

\Hook::set('y.alert', __NAMESPACE__ . "\\y__alert", 2);

// Set default alert layout if `.\lot\y\*\alert.php` file does not exist
if (\class_exists("\\Layout") && !\Layout::of('alert')) {
    \Layout::set('alert', static function (string $key, array $lot = []) {
        return new \HTML(\Hook::fire('y.' . $key, [[false, \Alert::get(), []], $lot]), true);
    });
}