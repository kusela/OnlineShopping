<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
</head>
<body>


<div class="container">
      <div class="signup-container">
        <h2>Sign Up</h2>

        <form action="signup_script.php" method="post">
          <div class="form-group">
            <label for="eMail">Email:</label>
            <input
              type="email"
              class="form-control"
              name="eMail"
              placeholder="Enter email"
              required
            />
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              placeholder="Password"
              required
            />
          </div>
          <div class="form-group">
            <label for="validation1">First Name</label>
            <input
              type="text"
              class="form-control"
              id="validation1"
              name="firstName"
              placeholder="First Name"
              required
            />
          </div>
          <div class="form-group">
            <label for="validation2">Last Name</label>
            <input
              type="text"
              class="form-control"
              id="validation2"
              name="lastName"
              placeholder="Last Name"
            />
          </div>
          <div class="form-group">
            <input
              type="checkbox"
              class="form-check-input"
              id="checkbox"
              required
            />
            <label for="checkbox" class="form-check-label"
              >Agree terms and Condition</label
            >
          </div>
          <button
            type="button"
            class="btn btn-primary btn-block"
            onclick="window.location.href='index.php'"
          >
            Sign Up
          </button>
        </form>
        <p>Already registered? <a href="login.html">Login</a></p>
      </div>
    </div>
</body>
</html>
