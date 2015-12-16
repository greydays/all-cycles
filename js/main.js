
function editGoogleForm() {
  //add placeholder text to Google Form inputs
  var firstNamePlaceholder = document.getElementById('entry_1303048756');
  firstNamePlaceholder.setAttribute('placeholder', 'First Name');

  var lastNameAttrPlaceholder = document.getElementById('entry_260560078');
  lastNamePlaceholder.setAttribute('placeholder', 'Last Name');

  var emailPlaceholder = document.getElementById('entry_931370931');
  firstNamePlaceholder.setAttribute('placeholder', 'Email Address');

  // add happy face to Google Form submit button
  var submitButtonFace = document.querySelector('[type=submit]');

  var addSpan = document.createElement('span');
  addSpan.className = "fa fa-smile-o";
  submitButtonFace.appendChild(addSpan);
};
