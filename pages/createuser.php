


<head>
<link rel="stylesheet" href="assets/css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>


</head>


<style>
  body.dark-mode .header {
  background-color: #21295c !important;
}


.header-right .theme-icon i {
  font-size: 24px;
  vertical-align: middle;
  line-height: 1;
  margin-top: 0px !important;
  padding: 0 !important;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 10px;
}
.theme-icon i {
  font-size: 24px;
  transform: translateY(8px); 
  display: inline-block;
  margin-left: 8px;
  font-weight: 400;
}
.theme-icon,
.theme-icon:focus,
.theme-icon i,
.theme-icon i:focus {
  outline: none !important;
  box-shadow: none !important;
  border: none !important;
  background: none !important;
  -webkit-tap-highlight-color: transparent; /* For mobile browsers */
}

.theme-icon:focus-visible,
.theme-icon i:focus-visible {
  outline: none !important;
  box-shadow: none !important;
}
.header-right:focus-within {
  outline: none !important;
  box-shadow: none !important;
}




.left-icon:hover {
    background: #dcdcdc; /* light background on hover */
}
#openSidebar i {
    cursor: pointer;
    font-size: 16px;
    color: #666;
}

#openSidebar:hover {
    background-color: #dcdcdc;
    border-radius: 5px;
}


  
  /* Right section of the header */
  .header-right {
    display: flex;
    align-items: center;
    gap: 40px;
    font-size: 18px;
    margin-right: 40px;
  }
  
  /* Light mode icon */
  .light-mode-icon {
    font-size: 30px;
    color: #666;
    cursor: pointer;
    margin-right: -20px;
    margin-top: 20px;
  }
  
  .profile-img {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    object-fit: cover;
    
  }
  .profile-wrapper {
    position: relative;
    display: inline-block;
  }
  
  .logout-popup {
    display: none;
    position: absolute;
    top: 110%; /* slightly below the image */
    right: 0;
    background: white;
    color: black;
    padding: 8px 16px;
    border-radius: 2px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    font-weight: 200;
    cursor: pointer;
    white-space: nowrap;
    z-index: 100;
  }
  
  .logout-popup::after {
    content: "";
    position: absolute;
    top: -10px;
    right: 10px;
    border-width: 6px;
    border-style: solid;
    border-color: transparent transparent white transparent;
  }
  


  


  
  
  
 
.theme-icon {
    background: none;
    border: none;
    font-size: 1.5rem;
    color: var(--text-color); /* or #666 */
    cursor: pointer;
    margin-right: 15px;
}

   body {
  font-family: 'Poppins', sans-serif;
  background-color: #fff;
  margin: 0;
  padding: 3px; 
  
   
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 3px; 

  /* Use CSS variables to support both light and dark themes */
  
  background-color: var(--bg-color);
  color: var(--text-color);
}

/* Light Mode Defaults (if no dark mode is applied)  */
:root {
  --bg-color: #fff;
  --text-color: #000;
}

/* Dark Mode */
 body.dark-mode {
  --bg-color: rgb(17, 17, 54);
  --text-color: #FFE3A3; 
}


#themeToggle,
#themeToggle:focus,
#themeToggle:active,
#themeToggle:focus-visible,
#themeToggle i,
#themeToggle i:focus,
#themeToggle i:active,
#themeToggle i:focus-visible {
  outline: none !important;
  box-shadow: none !important;
  border: none !important;
}



* {
  outline: none !important;
}


 
h5 {
  font-family: Poppins, sans-serif;
    font-size: 16px;
    
    line-height: 1.2;
    color: #33B0F7;
    font-weight: 700;
    margin-bottom: 5px;
}

p {
  
  font-family: Poppins, sans-serif;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.334;
    color: #33B0F7;
    margin-bottom: 30px;
}

/* .container {
  max-width: 1100px;
  margin: 0 auto;
  padding-top: 1px;
margin-top: 20px;
padding-left: 25px;
} */
.createuser-content{
  padding: 0 20px;
  margin-top: 20px;
}
form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-row {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.form-row.full-width {
  flex-direction: column;
}

.form-group {
  display: flex;
  flex-direction: column;
  flex: 1;
}

input,
select {
  background-color: #f2f2f2;
  border: none;
  border-bottom: 0.1px solid rgba(11, 10, 10, 0.87);
  border-radius: 10;
  padding: 18px 16px;
  font-size: 13.7143px;
  font-weight: 400;
  font-family: Poppins, sans-serif;
  width: 100%;
  /* line-height: 1.5; */
  box-sizing: border-box;
 color: #aaa!important;
}


input:hover,
select:hover,
textarea:hover {
  background-color: #e6e6e6!important; 
  border-bottom: 0.1px solid currentColor!important;
}

input:focus,
select:focus {
  outline: none;
  border-bottom-color: #999;
  box-shadow: none;
}

.form-group .error-message {
  color: #d32f2f;
 padding-left: 17px;
  font-size: 13px;
  margin-top: 4px;
  display: block;
}

.form-group.error input,
.form-group.error select {
  border-bottom: 2px solid #d32f2f;
}

.button-row {
  display: flex;
  justify-content: flex-end;
}

button {
  padding: 6px 16px;
  background-color: #33B0F7;
  border: none;
  color: #000000DE;
  font-weight: 500;
  border-radius: 4px;
  cursor: pointer;
  margin-bottom: 20px;
}

button:hover {
  background-color: #1f90c0;
}
.input-wrapper {
position: relative;
width: 100%;
}

.static-label {
position: absolute;
top: 6px;
left: 16px;
font-size: 12px;
color: rgba(0, 0, 0, 0.54);;
z-index: 1;
background-color:transparent;
padding: 0 ;
pointer-events: none;
user-select: none;
}
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
select:-webkit-autofill {
box-shadow: 0 0 0 1000px #f2f2f2 inset !important;
-webkit-box-shadow: 0 0 0 1000px #f2f2f2 inset !important;
-webkit-text-fill-color: #333 !important;
transition: background-color 5000s ease-in-out 0s;
}


.input-wrapper input {
width: 100%;
padding: 24px 16px 8px; /* top padding leaves room for label */
font-size: 14px;
background-color: #f2f2f2;
border: none;
border-bottom: 2px solid #ccc;
box-sizing: border-box;
border-radius: 3px;
}

.input-wrapper input:focus {
outline: none;
border-bottom: none;
/* border-bottom-color: #999; */
}
.input-wrapper select {
padding: 24px 16px 8px; /* Match the input padding */
font-size: 14px;
background-color: #f2f2f2;
border: none;
border-bottom: 2px solid #ccc;
box-sizing: border-box;
appearance: none; /* Optional: removes native dropdown arrow styling */
-webkit-appearance: none;
-moz-appearance: none;
line-height: 1.5;
border-radius: 3px;

}

.input-wrapper select:focus {
outline: none;
border-bottom-color: #999;
}

.required-star {
color: rgba(0, 0, 0, 0.54);; 
transition: color 0.2s;
}

.form-group.error .required-star {
color: #d32f2f;
}
.form-container {
background-color: var(--form-bg);
color: var(--text-color);
padding: 20px;
border-radius: 10px;
}
.form-container input,
.input-wrapper input,
.form-container select,
.input-wrapper select {
  color: #999 !important;
}

input::placeholder,
select::placeholder,
textarea::placeholder {
  color: #bbb !important;
  opacity: 1;
}
/* Make placeholder text light grey */
.input-wrapper input::placeholder,
.input-wrapper select::placeholder {
  color: #bbb !important;
  opacity: 1 !important;
}

/* Ensure user input text appears in black */
.input-wrapper input,
.input-wrapper select {
  color: #000 !important;
}

/* Fix autofill issue in Chrome */
input:-webkit-autofill {
  -webkit-box-shadow: 0 0 0 1000px #f2f2f2 inset !important;
  -webkit-text-fill-color: #000 !important;
}

input:-webkit-autofill {
  -webkit-text-fill-color: #999 !important;
  transition: background-color 9999s ease-out;
}

.form-container input,
.form-container select,
.form-container textarea {
background-color: var(--input-bg);
color: var(--input-color);
border: none;
border-bottom: 1px solid var(--input-color);
padding: 10px;
color: #999 !important;
}

.form-container input::placeholder,
.form-container textarea::placeholder {
color: var(--placeholder-color);
}
button#toggleDark:focus {
outline: none !important;
box-shadow: none !important;
}
* {
outline: none !important;
}
#country,
#state,
#city {

cursor: pointer;
}


#country option,
#state option,
#city option {
background-color: #fff !important;
color: #000 !important;
}

.custom-select-wrapper {
  position: relative;
  display: inline-block;
  width: 80px;
}

.custom-select-wrapper select {
  width: 100%;
  padding: 6px 26px 6px 10px;
  appearance: none;
  border: 1px solid #ccc;
  border-radius: 6px;
  background-color: #f2f2f2;
  font-size: 6px!important;
  cursor: pointer;
  color: #666;
  height: 10px;
}

.custom-arrow {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  transition: transform 0.3s ease;
  pointer-events: none;
  font-size: 10px;
  color: #aaa;
  line-height: 1!important;     
  height: auto!important; 
}

.custom-select-wrapper.open .custom-arrow {
  transform: translateY(-50%) rotate(180deg);
}
#country option[disabled],
#state option[disabled],
#city option[disabled] {
  color: #aaa !important; /* Light grey for 'Select ...' options */
}
select:invalid {
  color: #bbb !important; /* Placeholder-like color */
}

#country:invalid,
#state:invalid,
#city:invalid {
  color: rgba(0, 0, 0, 0.54);; /* Light grey for unselected dropdown */
}

/* When a real option is selected, show actual color */
#country:not(:invalid),
#state:not(:invalid),
#city:not(:invalid) {
  color: #000 !important; /* Normal text color after selection */
}

/* Style the actual disabled "Select ..." options inside the dropdown list */
#country option[disabled],
#state option[disabled],
#city option[disabled] {
  color: #bbb !important;
}

#country:hover,
#state:hover,
#city:hover {
  border-bottom: 0.1px solid #000 !important;
  background-color: #e6e6e6 !important;
}
.input-wrapper.open .custom-arrow {
  transform: translateY(-50%) rotate(180deg);
}
body.dark-mode .createuser-content h5 {
  color: #FFF6E0 !important;
}

body.dark-mode .createuser-content p {
  color: #FFF3A3 !important;
}

body.dark-mode .createuser-content button[type="submit"] {
  background-color:  #FFF6E0 !important;
  
}

/* Dark mode styles for CREATE USER page */
body.dark-mode #createUserPage h5 {
  color: #FFF6E0;
}

body.dark-mode #createUserPage p {
  color: #FFF3A3;
}

body.dark-mode #createUserPage button {
  background-color: #FFF6E0;
  color: #000;
}

/* Optional: button hover effect */
body.dark-mode #createUserPage button:hover {
  background-color: #f5e6b5;
}

body.dark-mode #userForm input,
body.dark-mode #userForm select,
body.dark-mode #userForm textarea {
  background-color: #191F45;     /* pale indigo */
  color: #000;                   /* black text */
  border-bottom: 1px solid #fff; /* white underline */
}

/* 2. HOVER — slightly darker background */
body.dark-mode #userForm input:hover,
body.dark-mode #userForm select:hover,
body.dark-mode #userForm textarea:hover {
  background-color: #191F45;
}

/* 3. “First Name *” static labels & stars */
body.dark-mode #userForm .static-label,
body.dark-mode #userForm .required-star {
  color: #000;
}

/* 4. Optional: arrow colour inside custom selects */
body.dark-mode #userForm .custom-arrow {
  color: #000;
}

body.dark-mode .custom-arrow {
  color: white !important;
}

body.dark-mode input:hover,
body.dark-mode select:hover,
body.dark-mode textarea:hover {
  background-color:rgb(20, 46, 103)!important; /* Slightly darker than #8691d1 */
}

input, select, textarea {
  transition: background-color 0.2s ease;
}
body.dark-mode .input-wrapper:has(input:focus) .required-star,
body.dark-mode .input-wrapper:has(select:focus) .required-star {
  color: #d32f2f;
}
body.dark-mode select:hover,
body.dark-mode #city:hover,
body.dark-mode #state:hover,
body.dark-mode #country:hover {
  background-color:rgb(20, 46, 103) !important;  /* Slightly darker than #8691d1 */
  border-bottom: 1px solid white !important;
  color: white !important;
}

body.dark-mode #city,
body.dark-mode #state,
body.dark-mode #country {
  background-color: #191F45!important;
  color: white !important;
  border-bottom: 1px solid white !important;
}
/* Global dark mode styles for all input/select/textarea */
body.dark-mode input,
body.dark-mode select,
body.dark-mode textarea {
  background-color:#191F45 !important;
  color: white !important;
  border: none;
  border-bottom: 1px solid white !important;
  border-radius: 0;
  transition: background-color 0.3s ease;
}

/* Maintain white border on hover */
body.dark-mode input:hover,
body.dark-mode select:hover,
body.dark-mode textarea:hover {
  /* background-color: #191F45 !important;  */
  border-bottom: 1px solid white !important;
}

/* Maintain white border on focus */
body.dark-mode input:focus,
body.dark-mode select:focus,
body.dark-mode textarea:focus {
  background-color:#191F45 !important;
  border-bottom: 1px solid white !important;
  outline: none !important;
  box-shadow: none !important;
}
body.dark-mode .static-label {
  color: white !important;
}

/* In dark mode */
body.dark-mode .required-star {
  color: white!important;
}

/* In dark mode + error */
body.dark-mode .form-group.error .required-star {
  color: red!important;
}
body.dark-mode .sidebar .menu li i {
  color: #33B0FF !important;
}

body.dark-mode .sidebar .menu li:hover i {
  color: #ffffff !important;
}


#themeToggle,
#themeToggle *,
#themeToggle:focus,
#themeToggle:active,
#themeToggle:focus-visible,
#themeToggle i,
#themeToggle i:focus,
#themeToggle i:active,
#themeToggle i:focus-visible {
  outline: none !important;
  box-shadow: none !important;
  border: none !important;
  -webkit-tap-highlight-color: transparent !important;
}

#themeToggle::-moz-focus-inner {
  border: 0 !important;
}
/* Shift the flag down a few pixels */
.iti__flag-container {
  top: 8px !important;  /* Adjust this value as needed */
  position: absolute !important;
}

/* Also make sure the input wrapper behaves consistently */
.iti {
  width: 100% !important;
  position: relative;
}

.iti input[type="tel"] {
  width: 100% !important;
  /* height: 44px;   */
  padding: 18px 16px;
  padding-left: 50px !important;  /* Ensure there's space for flag */
  font-size: 14px;
  background-color: #f2f2f2;
  border: none;
  border-bottom: 2px solid #ccc;
  box-sizing: border-box;
  padding-bottom: 8px!important;
  line-height: 1.9; 
  border-radius: 3px;
 
  
}

  .form-row.phone-number-row {
  margin-top: 20px;  /* or padding-top */
}

#phoneNumber {
  margin-top: 6px; /* Adjust the value as needed (e.g., 6px–10px) */
}




</style>

  
 
  <div class="createuser-content">
    <h5>CREATE USER</h5>
    <p>Create a New User Profile</p>
   
    <form id="userForm" method="POST" action="pages/insertuser.php" novalidate>

    <!-- <div class="createuser-form"> -->
    <div class="form-row">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">First Name <span class="required-star">*</span></span>
      <input type="text" name="firstname" />
    </div>
    <span class="error-message"></span>
  </div>
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Last Name <span class="required-star">*</span></span>
      <input type="text" name="lastname" />
    </div>
    <span class="error-message"></span>
  </div>
</div>

<div class="form-row">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">User Name <span class="required-star">*</span></span>
      <input type="text" name="username" />
    </div>
    <span class="error-message"></span>
  </div>
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Password <span class="required-star">*</span></span>
      <input type="password" name="password" />
    </div>
    <span class="error-message"></span>
  </div>
</div>

<div class="form-row">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Organization Name <span class="required-star">*</span></span>
      <input type="text" name="organization" />
    </div>
    <span class="error-message"></span>
  </div>
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Role <span class="required-star">*</span></span>
      <select name="role">
        <option value="" disabled selected></option>
        <option>Admin</option>
        <option>User</option>
      </select>
      <span class="custom-arrow">▼</span>
    </div>
    <span class="error-message"></span>
  </div>
</div>

<div class="form-row">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Status <span class="required-star">*</span></span>
      <select name="isActive">
        <option value="" disabled selected></option>
        <option>Active</option>
        <option>Inactive</option>
      </select>
      <span class="custom-arrow">▼</span>
    </div>
    <span class="error-message"></span>
  </div>
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Occupation</span>
      <input type="text" name="occupation" />
    </div>
    <span class="error-message"></span>
  </div>
</div>

<div class="form-row full-width">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Email <span class="required-star">*</span></span>
      <input type="email" name="email" />
    </div>
    <span class="error-message"></span>
  </div>
</div>

<div class="form-row full-width">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Phone Number <span class="required-star">*</span></span>
      <!-- <input type="tel" name="phoneNumber" /> -->
      <input type="tel" name="phoneNumber" id="phoneNumber" />

    </div>
    <span class="error-message"></span>
  </div>
</div>




<!-- City -->
<div class="form-row full-width">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">City</span>
         <!-- <select name="city" id="city" disabled>
        <option value="" disabled selected hidden></option>  -->
        <select name="city" id="city" required>
        <option value="" disabled selected>Select City</option>
      </select>
      <span class="custom-arrow">▼</span>
    </div>
    <span class="error-message"></span>
  </div>
</div>

<!-- State -->
<div class="form-row full-width">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">State</span>
      <select name="state" id="state" required onchange="fetchCities()">
        <option value="" disabled selected>Select State</option>
      </select>
      <span class="custom-arrow">▼</span>
       <!-- <select name="state" id="state" onchange="fetchCities()" disabled>
        <option value="" disabled selected hidden></option>
      </select> -->
    </div>
    <span class="error-message"></span>
  </div>
</div>

<!-- Country -->
<div class="form-row full-width">
  <div class="form-group">
    <div class="input-wrapper">
      <span class="static-label">Country</span>
      <select name="country" id="country" required onchange="fetchStates()">
      <option value="" disabled selected hidden>Loading countries...</option>
    </select>
    <span class="custom-arrow">▼</span>
    </div>
    <span class="error-message"></span>
  </div>
</div> 

<div class="form-row button-row">
  <!-- <button type="submit">CREATE NEW USER</button> -->
  <!-- <button type="submit" name="submit">CREATE NEW USER</button> -->
  <button type="submit" name="submitBtn">CREATE NEW USER</button>

</div>

  




<script>
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("userForm");

  const requiredFields = [
    { name: "firstname", message: "First Name is a required field" },
    { name: "lastname", message: "Last Name is a required field" },
    { name: "username", message: "User Name is required" },
    { name: "password", message: "Password is a required field" },
    { name: "organization", message: "Organization is a required field" },
    { name: "role", message: "Role is a required field" },
    { name: "isActive", message: "Status is a required field" },
    { name: "email", message: "Email is a required field" },
    { name: "phoneNumber", message: "Phone Number is a required field" }
  ];

  function showError(input, message) {
    const group = input.closest(".form-group");
    const error = group.querySelector(".error-message");
    group.classList.add("error");
    if (error) error.textContent = message;
  }

  function clearError(input) {
    const group = input.closest(".form-group");
    const error = group.querySelector(".error-message");
    group.classList.remove("error");
    if (error) error.textContent = "";
  }

  function validateEmail(input) {
    const emailRegex = /^[a-zA-Z](?:[a-zA-Z.]*[a-zA-Z])?@[a-zA-Z]+\.[a-zA-Z]{2,}$/;
    if (!input.value.trim()) {
      showError(input, "Email is a required field");
      return false;
    } else if (!emailRegex.test(input.value.trim())) {
      showError(input, "Invalid email");
      return false;
    } else {
      clearError(input);
      return true;
    }
  }

  function validatePassword(input) {
    const passRegex = /^(?=.*[A-Z])(?=.*[!@#$%^&*(),.?":{}|<>]).{8,}$/;
    if (!input.value.trim()) {
      showError(input, "Password is a required field");
      return false;
    } else if (!passRegex.test(input.value.trim())) {
      showError(input, "Password must contain atleast 8 characters, 1 uppercase and 1 specialcharacter");
      return false;
    } else {
      clearError(input);
      return true;
    }
  }

  // Add blur and input event listeners
  requiredFields.forEach(f => {
    const input = form.querySelector(`[name="${f.name}"]`);
    if (!input) return;

    input.addEventListener("blur", () => {
      if (f.name === "email") validateEmail(input);
      else if (f.name === "password") validatePassword(input);
      else if (!input.value.trim()) showError(input, f.message);
      else clearError(input);
    });

    input.addEventListener("input", () => {
      if (f.name === "email") validateEmail(input);
      else if (f.name === "password") validatePassword(input);
      else if (input.value.trim()) clearError(input);
    });
  });

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    let isValid = true;

    requiredFields.forEach(f => {
      const input = form.querySelector(`[name="${f.name}"]`);
      if (!input) return;

      if (f.name === "email" && !validateEmail(input)) isValid = false;
      else if (f.name === "password" && !validatePassword(input)) isValid = false;
      else if (!input.value.trim()) {
        showError(input, f.message);
        isValid = false;
      }
    });

    if (isValid) {
      document.getElementById('state').disabled = false;
      document.getElementById('city').disabled = false;
      form.submit();  // Actual form submission
    }
  });
});
// Dynamic country/state/city loading
document.addEventListener("DOMContentLoaded", fetchCountries);

async function fetchCountries() {
  const countrySelect = document.getElementById("country");
  try {
    const res = await fetch("https://countriesnow.space/api/v0.1/countries");
    const data = await res.json();
    countrySelect.innerHTML = '<option value="" disabled selected>Select Country</option>';
    data.data.forEach(c => {
      const option = document.createElement("option");
      option.value = c.country;
      option.textContent = c.country;
      countrySelect.appendChild(option);
    });
  } catch (err) {
    alert("Error loading countries: " + err.message);
  }
}

async function fetchStates() {
  const country = document.getElementById("country").value;
  const stateSelect = document.getElementById("state");
  const citySelect = document.getElementById("city");

  stateSelect.innerHTML = '<option value="" disabled selected>Loading States...</option>';
  stateSelect.disabled = true;
  citySelect.innerHTML = '<option value="" disabled selected>Select City</option>';
  citySelect.disabled = true;

  try {
    const res = await fetch("https://countriesnow.space/api/v0.1/countries/states", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ country }),
    });
    const data = await res.json();
    stateSelect.innerHTML = '<option value="" disabled selected>Select State</option>';
    data.data.states.forEach(state => {
      const option = document.createElement("option");
      option.value = state.name;
      option.textContent = state.name;
      stateSelect.appendChild(option);
    });
    stateSelect.disabled = false;
  } catch (err) {
    alert("Error loading states: " + err.message);
  }
}

async function fetchCities() {
  const country = document.getElementById("country").value;
  const state = document.getElementById("state").value;
  const citySelect = document.getElementById("city");

  citySelect.innerHTML = '<option value="" disabled selected>Loading Cities...</option>';
  citySelect.disabled = true;

  try {
    const res = await fetch("https://countriesnow.space/api/v0.1/countries/state/cities", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ country, state }),
    });
    const data = await res.json();
    citySelect.innerHTML = '<option value="" disabled selected>Select City</option>';
    data.data.forEach(city => {
      const option = document.createElement("option");
      option.value = city;
      option.textContent = city;
      citySelect.appendChild(option);
    });
    citySelect.disabled = false;
  } catch (err) {
    alert("Error loading cities: " + err.message);
  }
}
document.querySelectorAll('.input-wrapper select').forEach(select => {
    const wrapper = select.closest('.input-wrapper');

    // Track toggle state
    let isOpen = false;

    select.addEventListener('mousedown', (e) => {
      // Toggle class manually
      if (isOpen) {
        wrapper.classList.remove('open');
      } else {
        wrapper.classList.add('open');
      }
      isOpen = !isOpen;
    });

    // Optional: Reset when user clicks elsewhere
    select.addEventListener('blur', () => {
      wrapper.classList.remove('open');
      isOpen = false;
    });
  });
  // * to red
  document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll('.input-wrapper input, .input-wrapper select');

    inputs.forEach(input => {
      const requiredStar = input.closest('.input-wrapper')?.querySelector('.required-star');

      const updateStarColor = () => {
        if (document.body.classList.contains('dark-mode')) {
          if (input.value.trim() === "") {
            if (requiredStar) requiredStar.style.color = '#d32f2f'; // Stay red if empty
          } else {
            if (requiredStar) requiredStar.style.color = '#ccc'; // Dim it if filled
          }
        } else {
          if (requiredStar) requiredStar.style.color = ''; // Reset in light mode
        }
      };

      input.addEventListener('input', updateStarColor);
      input.addEventListener('blur', updateStarColor);
      input.addEventListener('focus', updateStarColor);

      // Run on page load
      updateStarColor();
    });
  });

  // phoneNumber 
 
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#phoneNumber");

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    preferredCountries: ["in", "us", "gb"],
    geoIpLookup: function (callback) {
      fetch('https://ipapi.co/json')
        .then(res => res.json())
        .then(data => {
          callback(data.country_code.toLowerCase());
        })
        .catch(() => {
          callback("us");
        });
    },
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.min.js"
  });

  // Validate phone number
  input.addEventListener("blur", function () {
    const formGroup = input.closest(".form-group");
    const error = formGroup.querySelector(".error-message");

    if (input.value.trim()) {
      if (!iti.isValidNumber()) {
        formGroup.classList.add("error");
        error.textContent = "Invalid phone number";
      } else {
        formGroup.classList.remove("error");
        error.textContent = "";
      }
    }
  });

  // Optional: You can access full international number like this
  window.getFullPhoneNumber = function () {
    return iti.getNumber();
  };
});


</script>

</body>
</html>