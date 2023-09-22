<fieldset>
    <h2 class="fs-title uppercase-text">Please answer these following questions</h2>

    <div class="form-container">
        <div class="form-row">
            <div class="input-group mb-3">
                <label> 1. What is your primary focus in the companion?* </label><br />
                <select name="marital_status" class="" aria-required="true" aria-invalid="false">
                    <option value="">---</option>
                    <option value="Pornstar">Pornstar</option>
                    <option value="Cam Model">Cam Model</option>
                    <option value="MILF">MILF</option>
                    <option value="HOT Wife">HOT Wife</option>
                    <option value="Dominatrix">Dominatrix</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <label> 2. What is your secondary focus in the companion? </label><br />
                <input type="text" name="secondary_focus" class="form-control" placeholder="Type Here"
                    aria-label="Username" size="40">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <label> 3. What fetishes do you entertain?* </label><br />
                <select name="entertain" class="qa-select" id="fetishEntertain" aria-required="true" aria-invalid="false">
                    <option value="">---</option>
                    <option value="Femdome">Femdome</option>
                    <option value="Submissive">Submissive</option>
                    <option value="Bondages">Bondages</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="form-row" id="fetishEntertainDiv">
            <div class="input-group mb-3 stat-input">
                <input type="text" name="others_fetiches" class="form-control" placeholder="Others fetishes do you entertain" aria-label="Username" size="40">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3 stat-input">
                <label> 4. Do you have any racial objections?* </label><br />
                <input type="text" name="racial_objections" class="form-control" placeholder="Type Here" aria-label="Username" size="40">
            </div>
        </div>

        <div class="form-row row">
            <div class="input-group mb-3">
                <label> 5. Do you only see:* </label><br />
                <label class="model-ex">
                    <input type="checkbox" name="men" value="Men" />
                    <span class="wpcf7-list-item-label">Men</span>
                </label>

                <label class="model-ex">
                    <input type="checkbox" name="women" value="Women" />
                    <span class="wpcf7-list-item-label">Women</span>
                </label>
                <label class="model-ex">
                    <input type="checkbox" name="couple" value="Couple" />
                    <span class="wpcf7-list-item-label">Couple</span>
                </label>
                <label class="model-ex">
                    <input type="checkbox" name="transgender" value="Transgender" />
                    <span class="wpcf7-list-item-label">Transgender</span>
                </label>
            </div>
        </div>
        <div class="form-row row">
            <div class="upload-container">
                <h1>Upload Your Photos</h1>
                <p>
                    High resolution & professionally shot photos are preferred. No Selfies Please.<br>
                    <small>Minimun 10 photos is mandatory and Maximum 30</small>
                </p>
                <input type="file" name="image_multiple" id="image_multiple" accept="image/*" multiple>
                <div id="image-preview"></div>
            </div>
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>