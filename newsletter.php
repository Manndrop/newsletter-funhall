<!DOCTYPE html>
<html lang="da">
<style>
    body {
        font-family: serif;
    }

    form {
        border: 3px solid #37374c;
        font-family: sans-serif;
        width: 500px;
    }

    .txt_container .fill_container .submit {
        padding: 20px;
        background-color: #f1f1f1;
    }

    input[type=text],
    input[type=submit] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    input[type=submit] {
        background-color: green;
    }

    input[type=submit]:hover {
        opacity: 0.5;
        cursor: grab;
    }

    p {
        padding: 7px;
    }

    p:first-letter {
        font-size: 1.5em;
    }

    h2 {
        padding-left: 75px;
    }

    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 190px;
    }


    .form-popup {
        display: none;
        position: fixed;
        bottom: 75px;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }




    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }


    .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
    }


    .form-container .cancel {
        background-color: red;
    }

    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }

    #x {
        position: absolute;
        background: red;
        color: white;
        top: -10px;
        right: -10px;
    }

</style>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
</head>

<body>

    <h1>Newsletter, Interaktiv Opgave</h1>



    <button class="open-button" onclick="openForm()">Notifikationer</button>


    <div class="form-popup" id="MyForm">
        <form action="newsletter_info.php" method="post" class="form-container"> <!-- form, som henter information fra PHP filen newsletter_info, som hentes ved hjælp af en "post-method" -->
            <div class="txt_container">
                <h2>Abonnér på vores Newsletter!</h2>
                <p>Her kan du blive opdateret med helt nye tilbud og specielle aktiviteter året rundt for Viborg Events. Ved at abonnere på dette newsletter, får du dermed den bedste oplevelse muligt og misser ikke chancen for en unik oplevelse her hos os!</p>
            </div>

            <div class="fill_container">
                <input type="text" placeholder="e-mailadresse" name="mail" required> <!-- name="mail" gemmer det indtastede mailadresse, som derefter gemmes i variablen $mail -->

            </div>


            <div class="submit">
                <input type="submit" value="Abonner">
            </div>

            <button type="button" id="x" onclick="closeForm()">X</button> <!-- lukke knap, onclick = closeForm() funktion intialiseres -->
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("MyForm").style.display = "block"; // funktion til få formularen vist, når funktionen intialiseres
        }

        function closeForm() {
            document.getElementById("MyForm").style.display = "none"; // funtion til at lukke formularen, når luk knappen trykkes
        }

    </script>

</body>

</html>
