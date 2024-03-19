<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="styles.css"> Add external CSS file -->
<style>
   body {
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #f4f4f4; /* Light gray background */
}

.form-container {
  max-width: 500px;
  width: 100%;
  background-color: #fff; /* White background */
  border-radius: 10px; /* Rounded corners */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
  padding: 40px;
}

h2 {
  text-align: center;
  margin-bottom: 30px;
}

.input-container {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
  border-radius: 5px; /* Rounded corners */
}

.input-field {
  flex: 1;
  padding: 10px;
  outline: none;
  border: 1px solid #ccc; /* Light gray border */
  border-radius: 5px; /* Rounded corners */
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 5px; /* Rounded corners */
  opacity: 0.9;
  transition: opacity 0.3s ease; /* Smooth transition */
}

.btn:hover {
  opacity: 1;
}

</style>
</head>
<body>

<form action="" method="post" class="form-container">
  <h2>LOGIN</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>&nbsp;&nbsp;
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>&nbsp;&nbsp;
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>&nbsp;&nbsp;
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Continue</button>
  <div style="text-align: center; margin-top: 10px;">
    <a href="signup">Not having an account? Register here.</a>
  </div>
</form>

</body>
</html>
