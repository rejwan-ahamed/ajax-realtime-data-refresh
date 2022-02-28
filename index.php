<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax test</title>
</head>

<body>

    <h3>random people name</h3>

    <div id="r_name">



        <!-- <h4>r1</h4>
        <h4>r1</h4>
        <h4>r1</h4> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        // $('document').ready(function() {
        //     setInterval(function() {
        //         loadtable()
        //     }, 1000); //request every x seconds

        // });


        $(document).ready(function() {
            function loadtable() {
                $.ajax({
                    url: "show.php",
                    type: "GET",
                    success: function(data) {
                        $("#r_name").html(data);
                    }
                });
            }

            setInterval(function() {
                loadtable()
            }, 1000); 


      

            // loadtable()
        });
    </script>
</body>

</html>