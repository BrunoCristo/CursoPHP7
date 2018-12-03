<?php

$json = '[{"nome":"Bruno","idade":21},{"nome":"BruHe","idade":23}]';

$data = json_decode($json, true);

var_dump($data);