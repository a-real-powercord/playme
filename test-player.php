<html lang="en-us"><head>
    <meta charset="utf-8">
    <title>Circle player (proof-of-concept)</title>
    <link rel="stylesheet" href="css/progres-bar.css">
</head>
<body>


<!-- Media Player-->
<div class="mediPlayer">
    <audio class="listen" preload="none" data-size="50" src="audio/Adore You.mp3" id="audio0"></audio>
</div>


<!-- Media Player / -->

<script src="https://code.jquery.com/jquery-1.11.2.min.js" integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=" crossorigin="anonymous"></script>
<script src="js/player.js"></script>

<script>
    $(document).ready(function () {
        $('.mediPlayer').mediaPlayer();
    });
</script>


</body></html>