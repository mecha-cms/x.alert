<?php

echo new HTML(Hook::fire('y.alert', [[false, Alert::get(), []], $lot]), true);