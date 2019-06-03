<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
</head>
<body>
    <div class="main banner">
        <div class="section">
            <img src="football_small.jpg" alt="ball" class="image">
        </div>
        <div class="section-large">
            <div class="main column">
                <div class="main">
                    <div class="section">
                        <ul class="timer">
                            <li class="timer-item">
                                <div class="legend">
                                    DAYS
                                </div>
                                <div class="value" id="days">
                                    01
                                </div>
                            </li>
                            <li class="timer-item">
                            <div class="legend">
                                    HOURS
                                </div>
                                <div class="value" id="hours">
                                    22
                                </div>
                            </li>
                            <li class="timer-item">
                            <div class="legend">
                                    MIN
                                </div>
                                <div class="value" id="mins">
                                    55
                                </div>
                            </li>
                            <li class="timer-item">
                            <div class="legend">
                                    SEC
                                </div>
                                <div class="value" id="secs">
                                    32
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="section remaining">
                        Remaining time
                        <br>
                        To Place Bet
                    </div>
                </div>
                <div id="nfl-pick">
                    Our NFL Pick: Vikings +3
                </div>
                <div id="hurry">
                    Hurry up! 25 people have place this bet
                </div>
            </div>
        </div>
        <div class="section" id="bet">
            <button class="bet-button">
                BET & WIN
            </button>
            <br>
            <div class="centered">
                Trusted
                <br>
                Sportsbetting.ad
            </div>
        </div>
    </div>
    <script src="countdown.js"></script>
</body>
</html>