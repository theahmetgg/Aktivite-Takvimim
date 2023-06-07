<!DOCTYPE html>
<html>

<head>
    <title>Etkinlik Takvimim | ahmetgulmez.com</title>
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/tr.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <script src="assets/js/event.js"></script>

    <style>
    .btn-event-delete {
        font-size: 0.85em;
        margin: 0px 10px 0px 5px;
        font-weight: bold;
        color: #959595;
    }
    </style>
</head>

<body>
    <div class="ahmet-container">
        <h1>Etkinlik Takvimim</h1>
        <div class="response"></div>
        <div class="row">
            <input type="text" name="filter" id="filter" placeholder="Tarih Seç" />
            <button type="button" id="button-filter" onClick="filterEvent();">Filtrele</button>
            <a href="https://www.ahmetgulmez.com/">
                <button>ahmetgulmez.com</button>
            </a>
        </div>
        <div class="row">
            <div id='calendar'></div>
        </div>
    </div>
</body>

</html>