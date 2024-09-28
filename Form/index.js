document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#myForm");
    const errorMessage = document.querySelector("#errorMessage");
  
    form.addEventListener("submit", function (event) {
      // Get form field values using querySelector
      const username = document.querySelector("#username").value;
      const email = document.querySelector("#email").value;
      const password = document.querySelector("#password").value;
      const photo = document.querySelector("#photo").value;
      const genderMale = document.querySelector("#male").checked;
      const genderFemale = document.querySelector("#female").checked;
      const religionIslam = document.querySelector("#islam").checked;
      const religionHindu = document.querySelector("#hindu").checked;
  
      // Basic validation logic
      if (username === "" || email === "" || password === "") {
        errorMessage.textContent = "All fields are required.";
        event.preventDefault(); // Prevent form submission if validation fails
        return;
      }
  
      // Validation for photo (file input)
      if (photo === "") {
        errorMessage.textContent = "Please upload a photo.";
        event.preventDefault();
        return;
      }
  
      // Validation for gender (radio buttons)
      if (!genderMale && !genderFemale) {
        errorMessage.textContent = "Please select your gender.";
        event.preventDefault();
        return;
      }
  
      // Validation for religion (checkboxes)
      if (!religionIslam && !religionHindu) {
        errorMessage.textContent = "Please select your religion.";
        event.preventDefault();
        return;
      }
  
      // If all validations pass
      errorMessage.textContent = ""; // Clear any previous error message
      alert("Form submitted successfully!");
    });
  });
  