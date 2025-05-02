<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>CREATE USER</h2>
    <p>Create a New User Profile</p>
    <form id="createUserForm" novalidate>
      <div class="form-row">
        <input type="text" name="firstName" placeholder="First Name *" required>
        <input type="text" name="lastName" placeholder="Last Name *" required>
      </div>
      <div class="form-row">
        <input type="text" name="username" placeholder="User Name *" required>
        <input type="password" name="password" placeholder="Password *" required>
      </div>
      <div class="form-row">
        <input type="text" name="organization" placeholder="Organization Name *" required>
        <select name="role" required>
          <option value="">Role *</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
      <div class="form-row">
        <select name="status" required>
          <option value="">Status *</option>
          <option value="active">Active</option>
          <option value="inactive">Inactive</option>
        </select>
        <input type="text" name="occupation" placeholder="Occupation">
      </div>
      <div class="form-row">
        <input type="email" name="email" placeholder="Email *" required>
      </div>
      <div class="form-row">
        <input type="tel" name="phone" placeholder="Phone Number *" required>
      </div>
      <div class="form-row">
        <input type="text" name="city" placeholder="City *" required>
      </div>
      <div class="form-row">
        <select name="country" required>
          <option value="">Country *</option>
          <option value="india">India</option>
          <option value="usa">USA</option>
          <option value="uk">UK</option>
        </select>
      </div>
      <div class="form-row">
        <select name="state" required>
          <option value="">State *</option>
          <option value="ap">Andhra Pradesh</option>
          <option value="ts">Telangana</option>
          <option value="ka">Karnataka</option>
        </select>
      </div>
      <div class="form-row button-row">
        <button type="submit">CREATE NEW USER</button>
      </div>
    </form>
  </div>
</body>
</html>
