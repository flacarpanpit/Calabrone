<?php

$users = [
    ['id' => 1, 'name' => 'Johnny Klebitz'],
    ['id' => 2, 'name' => 'Niko Bellic'],
    ['id' => 3, 'name' => 'Luis Lopez'],
    ['id' => 4, 'name' => 'Patrick McReary'],
];

$data = [
    "status" => 200,
    "message" => "OK",
    "payload" => $users
];

http_response_code(200);
header('Content-Type: application/json');
echo json_encode($data);
exit;

?>
