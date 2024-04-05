<form action="form.php" method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="name"  name="user_name">
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
<a href="article.php?key=value&other_key=other_value">link</a>.
<?php
  echo $_GET;
?>
