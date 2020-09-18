<!DOCTYPE html>
<html>
<style>
    * {
        box-sizing: border-box;

    }

    div {
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-name: SkrrrPaPaPum;
        animation-name: SkrrrPapaPum;
    }

    @keyframes SkrrrPapaPum {
        0% {
            transform: scale(0.1);
            opacity: 0;
        }

        40% {
            transform: scale(1.02);
            opacity: 0.5;
        }

        60% {
            transform: scale(0.8);
            opacity: 0.1;
        }

        70% {
            transform: scale(1.05);
            opacity: 0.5;
        }

        100% {
            transform: scale(1);
        }
    }

    body {
        margin: 0;
        font-family: Comic Sans, Comic Sans MS, cursive;
        background-color: rgb(26, 2, 49);
        color: aliceblue
    }

    .header {
        text-align: center;
        padding: 32px;
    }

    .row {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column {
        -ms-flex: 25%;
        /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
        }
    }

    img:hover {
        box-shadow: 5px 10px #888888;
        padding: 2px 5px;
    }
</style>

<body>

    <!-- Header -->
    <div class="header">
        <center>
            <h1>Gallary</h1>
        </center>
        <p>VIT University</p>
    </div>

    <!-- Photo Grid -->
    <div class="row">
        <div class="column">
            <img src="images/14.jpg" style="width:100%">
            <img src="images/11.jpg" style="width:100%">
            <img src="images/12.jpg" style="width:100%">
            <img src="images/15.jpg" style="width:100%">
            <img src="images/17.jpg" style="width:100%">
            <img src="images/13.jpg" style=" width:100%">
            <img src="images/17.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="images/11.jpg" style="width:100%">
            <img src="images/12.jpg" style="width:100%">
            <img src="images/13.jpg" style="width:100%">
            <img src="images/14.jpg" style="width:100%">
            <img src="images/15.jpg" style="width:100%">
            <img src="images/16.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="images/12.jpg" style="width:100%">
            <img src="images/14.jpg" style="width:100%">
            <img src="images/11.jpg" style="width:100%">
            <img src="images/13.jpg" style="width:100%">
            <img src="images/15.jpg" style="width:100%">
            <img src="images/17.jpg" style="width:100%">
            <img src="images/16.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="images/16.jpg" style="width:100%">
            <img src="images/13.jpg" style="width:100%">
            <img src="images/11.jpg" style="width:100%">
            <img src="images/14.jpg" style="width:100%">
            <img src="images/15.jpg" style="width:100%">
            <img src="images/17.jpg" style="width:100%">
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

</script>

</html>