<?php echo $this->_['htmlHeader']; ?>
<div class="container">

<?php echo $this->_['header']; ?>

<form class="form-register" method="POST" action="assets/register.php" >
  <div class="form-group">
    <label for="inputEmail">E-Mail Adresse</label>
    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="E-Mail" required>
  </div>
  <div class="form-group has-feedback">
    <label for="inputPassword">Passwort</label>
    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Passwort" onblur="checkPasswordPolicies(this)" required>
  </div>
  <div class="form-group has-feedback">
    <label for="inputPassword2">Passwort wiederholen</label>
    <input type="password" class="form-control" name="password2" id="inputPassword2" placeholder="Passwort wiederholen" onblur="checkPasswordMatch(this)" required>
  </div>
  <div class="form-group">
    <label for="inputStreet">Straße</label>
    <input type="text" class="form-control" name="street" id="inputStreet" placeholder="Straße" required>
  </div>
  <div class="form-group">
    <label for="inputNumber">Hausnummer</label>
    <input type="text" class="form-control" name="number" id="inputNumber" placeholder="Hausnummer" required>
  </div>
  <div class="form-group">
    <label for="inputPostalCode">PLZ</label>
    <input type="text" class="form-control" name="postal" id="inputPostalCode" placeholder="PLZ" required>
  </div>
  <div class="form-group">
    <label for="inputCity">Stadt</label>
    <input type="text" class="form-control" name="city" id="inputCity" placeholder="Stadt" required>
  </div>
  <div class="form-group">
    <label for="selectFW">Feuerwehr</label>
    <select class="form-control" name="fw" id="selectFW" required>
      <option>Feuerwehr A</option>
      <option>Feuerwehr B</option>
      <option>Feuerwehr C</option>
      <option>Feuerwehr D</option>
    </select>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" required> Ich akzeptiere die Datenschutzbestimmungen und so weiter.
    </label>
  </div>
  <button type="submit" class="btn btn-success">Registrieren</button>
</form>

<?php echo $this->_['footer']; ?>
<script type="text/javascript">
function checkPasswordPolicies(elem){
  var feedbackNode = elem.parentNode;
  var pw = elem.value;
  if(pw.length == 0){
    feedbackNode.classList.remove("has-success", "has-error");
    return;
  }
  if(!fulfillsPolicies(pw)){
    feedbackNode.classList.remove("has-success");
    feedbackNode.classList.add("has-error");
  }
  else {
    feedbackNode.classList.remove("has-error");
    feedbackNode.classList.add("has-success");
  }
}

function checkPasswordMatch(elem){
  var node = elem.parentNode;
  var pw = elem.value;
  if(pw.length == 0){
    node.classList.remove("has-success", "has-error");
    return;
  }
  if (!fulfillsPolicies(pw) || pw !== document.getElementById("inputPassword").value){
    node.classList.remove("has-success");
    node.classList.add("has-error");
  }
  else {
    node.classList.remove("has-error");
    node.classList.add("has-success");
  }
}

function fulfillsPolicies(pw){
  return pw.match(new RegExp('(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{8,10})$'));
}
</script>
</div> <!-- /container -->
<?php echo $this->_['htmlFooter'] ?>