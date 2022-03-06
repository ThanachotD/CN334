<?php
    $con = mysqli_connect("localhost","root","","portfolio");
    $query ="select * from posts";
    $result= mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teerachot Jaturatasanai</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Codrops">
    <link rel="shortcut icon" href="favicon.26242483.ico">
    <link rel="stylesheet" href="https://use.typekit.net/eqx3jwb.css">
    <link rel="stylesheet" type="text/css" href="base.98fd6c19.css">
    <link rel=" stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <style>
        .typewriter h1 {
            overflow: hidden; /* Ensures the content is not revealed until the animation */
            border-right: .15em solid orange; /* The typwriter cursor */
            white-space: nowrap; /* Keeps the content on a single line */
            margin: 0 auto; /* Gives that scrolling effect as the typing happens */
            letter-spacing: .15em; /* Adjust as needed */
            animation:
                typing 3.5s steps(40, end),
                blink-caret .75s step-end infinite;
        }

        /* The typing effect */
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        /* The typewriter cursor effect */
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: orange; }
        }
        p.one {
            border: 1px solid #2f2c2c;
            background-color: #ffffff;
            padding-top: 50px;
            padding-right: 800px;
            padding-bottom: 50px;
            padding-left: 80px;
            z-index: 99;
            border-radius: 8px;
        }
        .oak {
            position: absolute;
            padding-left: 20px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;

        }

        td, th {
            border: 1px solid #ffffff;
            text-align: left;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
    <script>document.documentElement.className = "js";

        var supportsCssVars = function supportsCssVars() {
            var e,
                t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e;
        };

        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

</head>
<body class="demo-1 loading">

<main>


    <div class="frame">
        <div class="frame__title-wrap">
            <h1 class="frame__title">
                <div class="typewriter">
                    <h1>Teerachot Jaturatasanai</h1>
                </div>
            </h1>
        </div>
        <div class="frame__links">
            <a href="http://127.0.0.1:8000/info">Information</a>
            <a href="http://127.0.0.1:8000/Diary">Diary</a>
            <a href="http://127.0.0.1:8000/">Main Page</a>
        </div>
        <div class="frame__demos">
            <h4 >CN 334 Template by Codrops </h4>

        </div>
    </div>
    <div class="content">
        <div class="grid">
            <div class="grid__item pos-1"><div class="grid__item-img" style="background-image:url(S__6602791.jpg);"></div></div>
            <div class="grid__item pos-2"><div class="grid__item-img" style="background-image:url(oak3.jpg);"></div></div>
            <div class="grid__item pos-3"><div class="grid__item-img" style="background-image:url(oak4.jpg);"></div></div>
            <div class="grid__item pos-4"><div class="grid__item-img" style="background-image:url(oak5.jpg);"></div></div>
            <div class="grid__item pos-5"><div class="grid__item-img" style="background-image:url(oak6.jpg);"></div></div>
            <div class="grid__item pos-6"><div class="grid__item-img" style="background-image:url(oak7.jpg);"></div></div>
            <div class="grid__item pos-7"><div class="grid__item-img" style="background-image:url(oak10.jpg);"></div></div>
            <div class="grid__item pos-8"><div class="grid__item-img" style="background-image:url(oak8.jpg);"></div></div>
            <div class="grid__item pos-9"><div class="grid__item-img" style="background-image:url(oak9.jpg);"></div></div>
            <div class="grid__item pos-10"><div class="grid__item-img" style="background-image:url(S__6602788.jpg);"></div></div>
        </div>



                <div class="container ;p.one" style="width: 700px; position: center">
                    <table class="table-responsive">
                    <table class="table">
                    <tr>
                        <th width="30%">Title</th>
                        <th width="70%">Description</th>
                    </tr>
                    <?php
                    while ($row=mysqli_fetch_array($result)){?>
                        <tr><td>
                               <?php echo $row["title"]?>
                            </td>
                            <td><input type="button" name="view" value="view" class="btn btn-info btn-xs view_data" id="<?php echo $row['id'];?>"/>
                            </td></tr>
                        <?php } ?>
                </table>

        </table>
    </div>






    </div>
</main>
<svg class="cursor" width="80" height="80" viewBox="0 0 80 80">
    <circle class="cursor__inner" cx="40" cy="40" r="20"></circle>
</svg>
<script src="demo1.151408fb.js"></script>
<?php require 'viewModal.php'?>
</body>
<script>
    $(document).ready(function (){
       $('.view_data').click(function () {

            var uid=$(this).attr("id");
            $.ajax({
                url:"select.php",
                method : "post",
                data : {id:uid},
                success:function (data){
                    $('#detail').html(data);
                    $('#dataModal').modal('show');
                }
            })
        })
    });
</script>
</html>
