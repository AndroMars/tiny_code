<html>
    <head>
    <link rel="stylesheet" href="style.css"> 
</head>

<body>

    <section class="container">
        <form action="ausgabe.php" method="post" >
        <section>
            <div id="input">
                <div>
                    <h1>Ihre Bestellung</h1>

                    <div class="form-group">
                        <input type="text" name="prename" required="required" />
                        <label for="input" class="control-label">Vorname:</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" name="surename" required="required" />
                        <label for="input" class="control-label">Nachname:</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" name="street" required="required" />
                        <label for="input" class="control-label">Straße:</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" name="plz" required="required" />
                        <label for="input" class="control-label">Postleitzahl:</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" name="location" required="required" />
                        <label for="input" class="control-label">Wohnort:</label><i class="bar"></i>
                    </div>
</div>

            </div>
        </section>
    

        <section>
            <p>Zu welchen Produkten wünschen Sie Informationen?</p>
           
                <div class="checkbox" id="checkboxes">
                    <label>
                        <input type="checkbox" /><i class="helper"></i>Flyer/Broschüren
                    </label>
                    <label>
                        <input type="checkbox" /><i class="helper"></i>Kalender
                    </label>
                    <label>
                        <input type="checkbox" /><i class="helper"></i>Aufkleber
                    </label>
                    <label>
                        <input type="checkbox" /><i class="helper"></i>Außenwerbung
                    </label>
                </div>
        
        </section>

        <section>
            <p>Wählen Sie die gewünschte Zahlungsart</p>

            <div id="payment">
                <div class="form-radio">
                    <div class="radio">
                        <label>
                            <input type="radio" name="radio" checked="checked" /><i class="helper"></i>Paypal
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="radio" checked="checked" /><i class="helper"></i>Rechnung
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="radio" checked="checked" /><i class="helper"></i>Überweisung
                        </label>
                    </div>
                </div>
</div>

        </section>

        <section>
            <p>Wählen Sie die gewünschte Informationsart</p>
            <div id="select">
                <div class="form-group">
                    <select>
                        <option>Bitte wählen</option>
                        <option>Bitte wählen</option>
                    </select>
                    <label for="select" class="control-label">Bitte wählen</label><i class="bar"></i>
                </div>
</div>
        </section>

        <section>

            <div id="tel">
                <div class="form-group">
                    <input type="text" required="required" />
                    <label for="input" class="control-label">Tel.-Nr</label><i class="bar"></i>
                </div>
</div>
            <div id="comment">
                <div class="form-group">
                    <textarea required="required"></textarea>
                    <label for="textarea" class="control-label">Kommentar/Details:</label><i class="bar"></i>
                </div>
</div>
            <div class="button-container">
                <p><button class="button" type="submit"><span>senden</span></button>
                    <button class="button" type="reset"><span>löschen</span></button></p>
            </div>
        </section>
        </form>
    </section>


</body>