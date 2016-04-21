<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/app.css"/>

    <script
        src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.18/angular-ui-router.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.2/ui-bootstrap.min.js"></script>
    <script src="js/app.js"></script>

</head>
<body ng-app="chatApp">

<div class="container">
    <div class="panel panel-default" id="chat-window">
        <div class="panel-heading">Header</div>
        <div class="panel-body"></div>
        <div class="panel-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12">
                        <textarea class="form-control"  placeholder="Message"></textarea>
                    </div>
                    <div class="col-xs-1 pull-right">
                        <input type="button" class="btn btn-default" value="Send"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>