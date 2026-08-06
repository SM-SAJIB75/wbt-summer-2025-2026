<?php require_once "form2_process.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <!-- ?v=2 forces the browser to reload the updated stylesheet instead of a cached copy -->
  <link rel="stylesheet" href="form2.css?v=2">
</head>

<body>
  <!-- novalidate turns off the browser's own checks so the PHP validation runs -->
  <form class="card" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
    <header class="card-header">
      <h1>Registration</h1>
      <p>Please complete all fields below.</p>
    </header>

    <div class="field">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Jane Doe" value="<?= $name ?>">
      <?php if ($nameErr): ?><span class="error"><?= $nameErr ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="postal">Postal Code</label>
      <input type="text" id="postal" name="postal" inputmode="numeric" placeholder="10001" value="<?= $postal ?>">
      <?php if ($postalErr): ?><span class="error"><?= $postalErr ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="dob">Date of Birth</label>
      <input type="date" id="dob" name="dob" value="<?= $dob ?>">
      <?php if ($dobErr): ?><span class="error"><?= $dobErr ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="jane@example.com" value="<?= $email ?>">
      <?php if ($emailErr): ?><span class="error"><?= $emailErr ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="At least 8 characters">
      <?php if ($passwordErr): ?><span class="error"><?= $passwordErr ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="" disabled <?= ($country === "") ? "selected" : "" ?>>Select a country...</option>
        <?php foreach ($countries as $c): ?>
          <option value="<?= $c ?>" <?= ($country === $c) ? "selected" : "" ?>><?= $c ?></option>
        <?php endforeach; ?>
      </select>
      <?php if ($countryErr): ?><span class="error"><?= $countryErr ?></span><?php endif; ?>
    </div>

    <div class="buttons">
      <button type="submit" class="btn-primary">Submit</button>
      <button type="reset" class="btn-secondary">Reset</button>
    </div>
  </form>

  <?php if ($isValid): ?>
    <section class="card summary">
      <h2>Registration received</h2>
      <table class="result-table">
        <tr><td>Full Name</td><td><?= $name ?></td></tr>
        <tr><td>Postal Code</td><td><?= $postal ?></td></tr>
        <tr><td>Date of Birth</td><td><?= $dob ?></td></tr>
        <tr><td>Email Address</td><td><?= $email ?></td></tr>
        <tr><td>Country</td><td><?= $country ?></td></tr>
      </table>
    </section>
  <?php endif; ?>
</body>

</html>
