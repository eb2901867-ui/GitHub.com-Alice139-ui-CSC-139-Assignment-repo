<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Registration — AJAX SPA</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Student Registration</h1>
      <p class="subtitle">Fast, smooth, no page reloads.</p>
    </header>

    <section class="card">
      <h2>Register New Student</h2>
      <form id="registerForm" autocomplete="off">
        <div class="grid">
          <label>
            <span>Full Name</span>
            <input type="text" name="full_name" placeholder="e.g., Ada Lovelace" required />
          </label>
          <label>
            <span>Email</span>
            <input type="email" name="email" placeholder="e.g., ada@uni.edu" required />
          </label>
          <label>
            <span>Department</span>
            <input type="text" name="department" placeholder="e.g., Computer Science" required />
          </label>
          <label>
            <span>Matric Number</span>
            <input type="text" name="matric_number" placeholder="e.g., CSC/21/001" required />
          </label>
        </div>
        <button type="submit" class="btn">Register</button>
        <div id="formMsg" class="msg" role="alert" aria-live="polite"></div>
      </form>
    </section>

    <section class="card">
      <div class="list-header">
        <h2>Registered Students</h2>
        <button id="refreshBtn" class="btn btn-secondary" title="Refresh list">Refresh</button>
      </div>
      <div class="table-wrap">
        <table id="studentsTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Department</th>
              <th>Matric Number</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="studentsBody">
            <tr><td colspan="6" class="muted">Loading...</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <footer>
      <small>&copy; <?php echo date('Y'); ?> Testimony Student Registration. Built with PHP & Fetch API.</small>
    </footer>
  </div>

  <script src="assets/js/app.js"></script>
</body>
</html>
