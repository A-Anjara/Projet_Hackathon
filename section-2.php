<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="section-2.css">
    <link rel="stylesheet" href="font/css/all.css">
    <title>Document</title>
</head>
<body>
    <section class="section-2">
        <div class="section-2-1">
            <div class="meteo">
                <div class="weather-image">
                    <img src="Images/Soleil.png" alt="">
                </div>
                <div class="country">
                    ANTANANARIVO
                </div>
                <div class="degree">
                    <b>31<?php echo htmlentities("°");?></b>
                </div>
                <div class="tomorrow">
                    <div class="left">
                        <div class="day">
                            Demain
                        </div>
                        <div class="degree">
                            <b>24<?php echo htmlentities("°")?></b>
                        </div>
                    </div>
                    <div class="right">
                        <div class="next-weather-image">
                            <img src="Images/Pluvieux.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="time">12h:05</div>
            </div>
            <div class="calendar">
                <div class="up">
                    <div class="date">15 Février 2025</div>
                    <div class="moves">
                        <div class="left">&lt;</div>
                        <div class="righ">&gt;</div>
                    </div>
                </div>
                <div class="option">
                    <div active>Jour</div>
                    <div>Mois</div>
                    <div>Année</div>
                </div>
                <div class="day-calendar">
                    <div>Lun</div>
                    <div>Mar</div>
                    <div>Mer</div>
                    <div>Jeu</div>
                    <div>Ven</div>
                    <div>Sam</div>
                    <div>Dim</div>
                </div>
            </div>
        </div>
        <div class="section-2-2">
            <div class="agenda">
                <div class="agenda-title">Agenda</div>
                <div class="agenda-search"><i class="fas fa-search"></i></div>
                <div class="agenda-more">+</div>
            </div>
            <div class="daily">
                 <div class="day-card">
                    <div class="day-card-day">
                        12 Février 2025
                    </div>
                    <div class="day-card-label">
                        <div class="dot"></div>
                        <div class="day-card-text">
                            <div class="day-card-text-label">
                                Météo:
                            </div>
                            <div class="day-card-text-text">
                                Ensoleillé, 31<?php htmlentities("°");?>C
                            </div>
                        </div>
                    </div>
                    <div class="day-card-label">
                        <div class="dot"></div>
                        <div class="day-card-text">
                            <div class="day-card-text-label">
                                Conseil: 
                            </div>
                            <div class="day-card-text-text">
                                Arroser le matin pour éviter l'évaporation rapide
                            </div>
                        </div>
                    </div>
                 </div>

                 <div class="day-card">
                    <div class="day-card-day">
                        13 Février 2025
                    </div>
                    <div class="day-card-label">
                        <div class="dot"></div>
                        <div class="day-card-text">
                            <div class="day-card-text-label">
                                Météo:
                            </div>
                            <div class="day-card-text-text">
                                Pluvieux, 24<?php htmlentities("°");?>C
                            </div>
                        </div>
                    </div>
                    <div class="day-card-label">
                        <div class="dot"></div>
                        <div class="day-card-text">
                            <div class="day-card-text-label">
                                Conseil:
                            </div>
                            <div class="day-card-text-text">
                                Éviter de travailler un sol trop humide pour ne pas le compacter
                            </div>
                        </div>
                    </div>
                 </div>

                 <div class="day-card">
                    <div class="day-card-day">
                        15 Février 2025
                    </div>
                    <div class="day-card-label">
                        <div class="dot"></div>
                        <div class="day-card-text">
                            <div class="day-card-text-label">
                                Météo:
                            </div>
                            <div class="day-card-text-text">
                                Nuageux, 25<?php htmlentities("°");?>C
                            </div>
                        </div>
                    </div>
                    <div class="day-card-label">
                        <div class="dot"></div>
                        <div class="day-card-text">
                            <div class="day-card-text-label">
                                Conseil:
                            </div>
                            <div class="day-card-text-text">
                                Utiliser des outils désinfectés pour éviter les maladies
                            </div>
                        </div>
                    </div>
                 </div>


            </div>
        </div>
    </section>
</body>
</html>