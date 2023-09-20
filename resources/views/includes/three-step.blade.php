<fieldset>
    <h2 class="fs-title uppercase-text">All AIA Models are legal adults</h2>
    <div class="form-container model-ex">

        <div class="form-row row">
            <div class="input-group mb-3">
                <label> Are you over the age of 18?* </label><br />
                <label class="">
                    <input type="radio" name="over_eighteen" value="Yes" />
                    <span class="wpcf7-list-item-label">Yes</span>
                </label>

                <label>
                    <input type="radio" name="over_eighteen" value="No" />
                    <span class="wpcf7-list-item-label">No</span>
                </label>
            </div>
        </div>

        <div class="form-container">
            <div class="form-row row">
                <div class="input-group mb-3">
                    <label> Submit form of ID: Passport or Driver’s Licence for Proof of Age*</label><br />
                    <div class="file">
                        <input type="file" name="imageFileOfId" size="40" class="" accept=".jpg,.jpeg,.png" aria-required="true" aria-invalid="false" />
                    </div>
                </div>
            </div>

            <div class="form-row row">
                <div class="input-group mb-3">
                    <label> We must also have a picture of the back of your ID* </label><br />
                    <div class="file">
                        <input type="file" name="imageBackOfId" size="40" class="" accept="image/jpg,image/jpeg,image/png" aria-required="true" aria-invalid="false" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>