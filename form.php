<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label for="phone">Enter your phone number:</label>

        <input type="tel" id="phone" name="phone">
    </div>
    <div>
        <label for="subjet">Champs</label>

        <select name="Menud" id="subject">
            <option value="">--sélectionnez le champs--</option>
            <option value="choix 1">choix 1</option>
            <option value="choix 2">choix 2</option>
            <option value="choix 3">choix 3</option>
            <option value="choix 4">choix 4</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>
