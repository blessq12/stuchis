<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Заявка с сайта</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li>Имя: {{ $requestData['contact']['name'] }}</li>
                    <li>Телефон: {{ $requestData['contact']['phone'] }}</li>
                    <li>Ковер: {{ $requestData['carpet-type'] }}</li>
                    <li>Высота ворса: {{ $requestData['carpet-height'] }}</li>
                    <li>Опционально:<ul>
                        @foreach ($requestData['optional'] as $key => $value)
                            <li>
                                {{ $key }}
                            </li>
                        @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>