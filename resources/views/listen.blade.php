<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>


<script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
<script>
    function myFunction() {
        var pusher = new Pusher('79e5f820256c1e16560b', {
            cluster: 'mt1',
        });

        var channel = pusher.subscribe('notif');
        channel.bind('new-event', (data) => {
            text = data;
            console.log(data);
        });
    }
myFunction();
</script>


</body>
</html>