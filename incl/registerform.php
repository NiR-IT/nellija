<div class="container" style="padding-top:50px;">
        <div class="card">
            <div class="card-header">
                Registration
            </div>
            <div class="card-block">
                <form method="POST" action="<?php echo $current_file; ?>">
                    <?php include 'regphp.php'; ?>
                    <label for="firstName" class="control-label">Name:</label>
                    <div class="row">
                        <div class="col-md-6" style="padding-top:10px;">
                            <input type="text" class="form-control" name="firstName" placeholder="First" maxlength="40" value="<?php if(isset($firstname)) { echo $firstname; } ?>"/>
                        </div>
                        <div class="col-md-6" style="padding-top:10px;">
                            <input type="text" class="form-control" name="lastName" placeholder="Last" maxlength="40" value="<?php if(isset($lastname)) { echo $lastname; } ?>"/>
                        </div>
                    </div><br/>
                    <label for="email" class="control-label">Email Address:</label>
                    <div class="row">
                        <div class="col-md-6" style="padding-top:10px;">
                            <input type="text" class="form-control" name="email" placeholder="Email" maxlength="40" value="<?php if(isset($email)) { echo $email; } ?>"/>
                        </div>
                    </div><br/>
                    <label for="address1" class="control-label" >Adress:</label>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Address line 1" maxlength="50" value="<?php if(isset($address)) { echo $address; }?>" />
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-md-6" style="padding-top:10px;">
                            <label for="country" class="control-label">Country:</label>
                            <input type="text" class="form-control" name="country" placeholder="Your country" maxlength="20" value="<?php if(isset($country)) { echo $country; } ?>"/>
                        </div>
                        <div class="col-md-2" style="padding-top:10px;">
                            <label for="city" class="control-label">City:</label>
                            <input type="text" class="form-control" name="city" placeholder="Your city" maxlength="20" value="<?php if(isset($city)) { echo $city; } ?>" />
                        </div>
                        <div class="col-md-4" style="padding-top:10px;">
                            <label for="postcode" class="control-label">Postcode:</label>
                            <input type="text" class="form-control" name="postcode" placeholder="Your postcode" maxlength="7" value="<?php if(isset($postcode)) { echo $postcode; } ?>"/>
                        </div>
                    </div><br/>
                     <div class="row">
                        <div class="col-md-6" style="padding-top:10px;">
                            <label for="phone" class="control-label">Phone number:</label>
                            <input type="text" class="form-control" name="phone" placeholder="Your phone number" maxlength="20" value="<?php if(isset($phone)) { echo $phone; } ?>"/>
                        </div>
                        <div class="col-md-6" style="padding-top:10px;">
                            <label for="age" class="control-label">Age:</label>
                            <input type="number" class="form-control" name="age" placeholder="How old are you?" maxlength="2" value="<?php if(isset($age)) { echo $age; } ?>"/>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-md-6" style="padding-top:10px;">
                            <label for="password" class="control-label">Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" />
                        </div>
                        <div class="col-md-6" style="padding-top:10px;">
                            <label for="confirmpassword" class="control-label">Confirm Password:</label>
                            <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm your password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-check col-md-6" style="padding-top:20px;">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="agree" name="agree">
                            I agree with terms and conditions.
                          </label>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-success" name="registerUser" value="Sign Up">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    