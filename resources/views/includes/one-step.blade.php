<fieldset>
    <h2 class="fs-title">New Model Application Form</h2>
    <h3 class="fs-subtitle uppercase-text">Kindly fill out the form with your details.</h3>
    <div class="form-row">
        <div class="input-group mb-3">
            <label> Profession* </label><br />
        </div>
    </div>
    <div class="flex-container">
        <div class="form-check">
            <input id="pornStar" class="form-check-input" name="pornstar" type="checkbox" value="Pornstar">
            <label class="form-check-label" for="pornStar"> Pornstar </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="cam_model" type="checkbox" value="Cam Model" id="camModel">
            <label class="form-check-label" for="camModel"> Cam Model </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="social_media_star" type="checkbox" value="Social Media Star" id="socialMediaStar">
            <label class="form-check-label" for="socialMediaStar"> Social Media Star </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="magazine_model" type="checkbox" value="Magazine Model" id="magazineModel">
            <label class="form-check-label" for="magazineModel">
                Magazine Model
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="other" type="checkbox" value="Others" id="otherProfession">
            <label class="form-check-label" for="otherProfession">
                Others
            </label>
        </div>

        <div class="form-row mx-auto" id="othersProfessionDiv">
            <div class="input-group mb-3">
                <input type="text" name="others_profession" class="form-control others_input_field" placeholder="Others profession name" aria-label="Username" size="40">
            </div>
        </div>
    </div>

    <div class="form-container">
        <div class="form-row">
            <div class="input-group mb-3">
                <label> Your Legal First Name* </label><br />
                <input type="text" name="legal_first_name" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>
            <div class="input-group mb-3">
                <label> Your Legal Last Name* </label><br />
                <input type="text" name="legal_last_name" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>
        </div>

        <div class="form-row">
            <div class="input-group mb-3">
                <label> Your Stage First Name* </label><br />
                <input type="text" name="stage_first_name" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>
            <div class="input-group mb-3">
                <label> Your Stage Last Name* </label><br />
                <input type="text" name="stage_last_name" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>
        </div>

        <div class="form-row">
            <div class="input-group mb-3">
                <label> Email* </label><br />
                <input type="email" name="email" class="form-control" placeholder="example@domain.com" aria-label="Username" size="40">
            </div>
            <div class="input-group mb-3">
                <label> Phone* </label><br />
                <input type="tel" name="phone" class="form-control" placeholder="+1-999-999-9999" aria-label="Username" size="40">
            </div>
        </div>

        <div class="form-row">
            <div class="input-group mb-3">
                <label> Nationality* </label><br />
                <input type="text" name="nationality" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>
            <div class="input-group mb-3">
                <label> Age* </label><br />
                <input type="number" name="age" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>
        </div>
        
        <div class="form-row">
            <div class="input-group mb-3">
                <label> Date of birth </label><br />
                <input type="date" name="dob" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>

            <div class="input-group mb-3">
                <label> Gender* </label><br />
                <select name="marital_status" class="" aria-required="true" aria-invalid="false">
                    <option value="">---</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Transgender Female">Transgender Female</option>
                    <option value="Transgender Male">Transgender Male</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="input-group mb-3">
                <label> Ethnicities* </label><br />
                <select name="ethnicities" class="" aria-required="true" aria-invalid="false">
                    <option value="">---</option>
                    <option value="Asian">Asian</option>
                    <option value="Black">Black</option>
                    <option value="Caucasian">Caucasian</option>
                    <option value="White">White</option>
                </select>
            </div>
        </div>
    </div>

    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
