<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo enviar correo</title>
</head>
<body>
    
    <form action="enviar-mail.php" method="POST">

        <div>
            <label for="subject">Asunto</label>
            <input type="text" name="subject" id="subject" />
        </div>
        <div>
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>
</html>