<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .workspace {
                font-size: 48px;
            }

            #chart_div {
              width: 100%;
              height: 100%;
            }

            #submission_name {
              position: absolute;
              top: 5%;
              right: 5%;
            }

        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div id="submission_name">Your full name</div>

            <div class="content">
                <div class="workspace">

                    Your solution should appear here

                    <div id="chart_div"></div>

                </div>

            </div>
        </div>
    </body>

</html>
