@extends('layouts.app')

@section('style')
<style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: Ubuntu;
}
.container {
    width: 96%;
    margin: 0 auto;
}

.error{
    color: red;
}

.header-container {
    width: 100%;
    display: flex;
    flex-direction: row;
    margin: 0 auto;
    height: 8vh;
}
.header-container h4 {
    flex: 2;
    text-align: center;
    padding-top: 2.4vh;
    border-bottom: 1px solid #C4C4C4;
}
.back-close {
    display: flex;
    margin: 0;
    padding: 0;
}
.back-close button {
    color: #C4C4C4;
    border: none;
}
.header-container img {
    border: 0;
}
.header-container button:hover {
    transition: border 1s;
    border: none;
}
#create, #bottom-create {
    width: 12em;
    background-color: #091429;
    font-size: 14px;
    color: #fff;
}
#create {
    border: none;
}
.form {
    position: relative;
    top: 6vh;
    width: 90%;
    margin: 0 auto;
    left: 1.2em;
}
h1, h3, h4 {
    font-family: "Ubuntu";
    padding-bottom: 0.3em;
}
h3, h4 {
    text-align: center;
}
h1 {
    position: relative;
}
form {
    border: 1px solid #C4C4C4;
    width: 90%;
    padding: 1em;
    padding-bottom: 10em;
}
#bottom-create {
    position: relative;
    top: 4em;
    height: 8vh;
    border: none;
    width: 70%;
    margin-bottom: 2em;
}
#bottom-create:hover {
    font-weight: bolder;
    transition: font-weight 1s, background-color 1s;
}
footer {
    width: 30%;
    margin-top: 2em;
    margin-bottom: 2em;
    padding-bottom: 2em;
    margin-left: calc(50%);
    transform: translateX(-50%);
}
label, input, select {
    display: block;
    width: 70%;
    margin: 0 auto 0.2em auto;
}
label{
    font-size: 16px;
    color: #262626;
}
input {
    padding: 0.2em;
    margin-bottom: 0.5em;
}
input{
    border: 1px solid #919191;
}
input::placeholder{
    color: #B1B1B1;
}
select{
    padding: 0.2em;
    margin-bottom: 0.5em;
    background-color: #ffffff;
}
#close{
    background-color: #ffffff;
    border:1px solid #C4C4C4 ;
    border-top: none;
    font-size: 30px;
    width: 2em;
}
#back{
    background-color: #ffffff;
    border:1px solid #C4C4C4 ;
    border-left: none;
    border-top: none;
    font-size: 30px;
    width: 2em;
}
#back i {
    margin-right: -10px;
}
#addcontact {
    width: 40%;
    background-color: #fff;
    border: 0;
    font-weight: bolder;
    margin-top: 1em;
    margin-bottom: 1em;
    margin-left: calc(25%);
}
#add-other-contacts i {
    vertical-align: middle;
    font-size: 20px;
    color: inherit;
}
h3:last-of-type {
    padding-top: 2em;
}
@media screen and (min-width: 700px) {

    input, select {
        display: inline-block;
        width: 40%;
        padding: 0.5em;
    }
    label {
        margin-left: 0.2em;
    }
    #addcontact {

        margin-left: 0;
        text-align: left;
    }
    footer {

        margin-left: calc(50% + 4rem);
        transform: translateX(-50%);
    }
}
@media screen and (min-width: 900px) {
    body {
        max-width: 1020px;
        margin: 0 auto;
    }
    label {
        display: inline-block;
        margin-right: 10px;
        width: 20%;
    }

    form h3, form h4 {
        text-align: left;
        margin-bottom: 1em;
    }
    input, select {
        margin-left: 1.5em;
        width: 30%;
    }
}
</style>
@endsection

@section('content')
<nav>
    <div class="header-container">
        <div class="back-close">
            <button id="close"><i class="material-icons">clear</i></button>
            <button id="back"><i class="material-icons">arrow_back_ios</i></button>
        </div>

        <h4>Client</h4>
        <button id="create">Create Invoice</button>
    </div>
</nav>

<div class="container">
    <div class="form">
        <h1>Client Information</h1>
        <form autocomplete="on" action="" method="post" onsubmit="return checkForm()">
        <div>
                <p class="error" id="errorMsg">All Fields Required</p>
        <h3> Business Information</h3>

            <label for="company-name">Company name</label>
            <input type="text" id="companyname" name="company" placeholder="e.g. Sunshine Studio">
            <br><br>
            <h4>Business Address</h4>
            <label for="Street">Street & Number</label>
            <input type="text" id="streetname" name="streetname" placeholder="Street">
            <input type="number" id="strnumber" name="strnumber" placeholder="Number">
            <br>

            <label for="city">City & ZIP Code</label>
            <input type="text" id="city" name="city" placeholder="City">
            <input type="text" id="postalcode" name="postalcode" placeholder="Postal code">
            <br>
            <label for="Country-state">Country & State</label>
            <!--country drop down list-->
            <select id="country" name="country">
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote DIvoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="Indonesia">Indonesia</option>
                <option value="India">India</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>
                <input type="text" id="state" name="state" placeholder="State">
        </div>
        <div>
            <h3>Contact Information</h3>
            <label for="contact-name">Contact name</label>
            <input type="text" id="contactname" name="contactname" placeholder="e.g. Ben Davies">
            <br>
            <label for="contact-email">Contact email</label>
            <input type="email" id="contactemail" name="contactemail" placeholder="e.g. email@domain.com">
            <br>
            <p class="error" id="errorEmail"></p>
            <br>
            <div id="add-other-contacts">
                <h4>Add other contacts <i class="material-icons">add</i></h4>
            </div>
        </div>


        </form>

    </div>
</div>

<footer> 
    <button id="bottom-create" type="submit">Create Invoice</button>
</footer>

@endsection

@section('script')
<script>

        var companyname = document.getElementById("companyname");
        var streetname = document.getElementById("streetname");
        var strnumber = document.getElementById("strnumber");
        var city = document.getElementById("city");
        var postalcode = document.getElementById("postalcode");
        var country = document.getElementById("country");
        var state = document.getElementById("state");
        var contactme = document.getElementById("contactname");
        var contactemail = document.getElementById("contactemail");
        
        // check if any input is empty.
        function checkForm() {
            if((companyname.value == 0 && streetname.value == 0 &&
                strnumber.value == 0 && city.value == 0 &&
                postalcode.value == 0 && state.value == 0
                && contactme.value == 0 && contactemail.value == 0)){
    
                document.getElementById("errorMsg").style.display ="block";
            }
            else {
                document.getElementById("errorMsg").style.display ="none";
            }
        }
        
        function removeNameErrorWhenCorrecting() {
    
            document.getElementById("errorMsg").style.display = "none";
        }
        if (companyname.addEventListener) {
            companyname.addEventListener('blur', checkForm, false);
            companyname.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (streetname.addEventListener) {
            streetname.addEventListener('blur', checkForm, false);
            streetname.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (strnumber.addEventListener) {
            strnumber.addEventListener('blur', checkForm, false);
            strnumber.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (city.addEventListener) {
            city.addEventListener('blur', checkForm, false);
            city.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (postalcode.addEventListener) {
            postalcode.addEventListener('blur', checkForm, false);
            postalcode.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (country.addEventListener) {
            country.addEventListener('blur', checkForm, false);
            country.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (state.addEventListener) {
            state.addEventListener('blur', checkForm, false);
            state.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (contactme.addEventListener) {
            contactme.addEventListener('blur', checkForm, false);
            contactme.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
        else if (contactemail.addEventListener) {
            contactemail.addEventListener('blur', checkForm, false);
            contactemail.addEventListener('focus', removeNameErrorWhenCorrecting, false);
        }
    
    
        // If email is the right format
        function checkEmailField() {
            // format for email validation
            var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (contactemail.value.indexOf("@", 0) < 0) {
                document.getElementById("errorEmail").style.display = "block";
                document.getElementById("errorEmail").textContent = "Your email address does not have an '@' symbol!";
    
    
            }
            else if (contactemail.value.indexOf(".", 0) < 0) {
                document.getElementById("errorEmail").style.display = "block";
                document.getElementById("errorEmail").textContent = "A '.' symbol is missing in your email address, please check!";
    
            }
            else if (mailFormat.test(contactemail.value) == false) {
                document.getElementById("errorEmail").style.display = "block";
                document.getElementById("errorEmail").textContent = "Wrong email format, please try again!";
    
            }
            else {
                document.getElementById("errorEmail").style.display = "none";
                country.removeAttribute('disabled');
                contactemail.removeAttribute('disabled');
            }
        }
        function removeEmailErrorWhenCorrecting() {
            document.getElementById("errorEmail").style.display = "none";
        }
        if (contactemail.addEventListener) {
            contactemail.addEventListener('blur', checkEmailField, false);
            contactemail.addEventListener('focus', removeEmailErrorWhenCorrecting, false);
        }
    
    </script>
    
    
@endsection