<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<р1>ррпппп</р1>
    <р1>лрроржлщдольшщлд</р1>
</body>
</html><?php

CONST TOKEN = '5751752574:AAEchv-AMlPyOQf6l80LGdbbG9My0LlWZww';

$url = 'https://api.telegramm.org/bot'.TOKEN.'getMe';
$url = 'https://api.telegramm.org/bot'.TOKEN.'getUpdates';

$data = json_decode(file_get_contents('php://input'), true);
file_get_contents('file.txt', '$data'.print_r($data, 1)."\n", FILE_APPEND);
// https://api.telegram.org/bot5751752574:AAEchv-AMlPyOQf6l80LGdbbG9My0LlWZww/setwebhook?url=*ссылка на бота*;
$message = mb_strtolower(($data['text'] ? $data['text'] : $data['data']),'utf-8');