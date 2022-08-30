<?php

echo new HTML(Hook::fire('y.alert', [[false, (array) Alert::get(), []], $lot]), true);