

<div class="container" style="margin-top: 60px;">
      <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend><br/>
                        <?php

                        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) && isset($_POST['human'])) {
                            $fname = addslashes($_POST['fname']);
                            $lname = addslashes($_POST['lname']);
                            $email = addslashes($_POST['email']);
                            $phone = addslashes($_POST['phone']);
                            $message = addslashes($_POST['message']);
                            $human = addslashes($_POST['human']);
                            
                            if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($message) && !empty($human)){
                                if($human != 5) {
                                    echo "<div id=\"container\">
                                			<div class=\" row\">
                                			    <div class=\"col-sm-10\">
                                			        <div class=\"alert alert-info\" role=\"alert\">
                                			        3 + 2 is obviously not $human. Try again!
                                			        </div>
                                			     </div>
                                			 </div>
                                		</div><br/>";
                                } else {
                                    $to = 'nikitaribakovs96@gmail.com';
                                    $subject = 'Contact form submitted';
                                    $body = "$fname $lname <br/> $message";
                                    $headers = 'From: '.$email;
                                    
                                    if(mail($to, $subject, $body, $headers)){
                                        echo "<div id=\"container\">
                                			<div class=\" row\">
                                			    <div class=\"col-sm-10\">
                                			        <div class=\"alert alert-info\" role=\"alert\">
                                			        Thanks for contacting us. We\'ll be in touch soon.
                                			        </div>
                                			     </div>
                                			 </div>
                                		</div><br/>";
                                    } else {
                                        echo "<div id=\"container\">
                                			<div class=\" row\">
                                			    <div class=\"col-sm-10\">
                                			        <div class=\"alert alert-info\" role=\"alert\">
                                			        Something went wrong. Try again!
                                			        </div>
                                			     </div>
                                			 </div>
                                		</div><br/>";
                                    }
                                }
                            } else {
                                echo "<div id=\"container\">
                                			<div class=\" row\">
                                			    <div class=\"col-sm-10\">
                                			        <div class=\"alert alert-info\" role=\"alert\">
                                			        All fields are required!
                                			        </div>
                                			     </div>
                                			 </div>
                                		</div><br/>";
                            }
                        }
                        
                        ?>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control" maxlength="20" value="<?php echo $fname; ?>"><br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control" maxlength="20" value="<?php echo $lname; ?>"><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="email" placeholder="Email Address" class="form-control" maxlength="40" value="<?php echo $email; ?>"><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" maxlength="15" value="<?php echo $phone; ?>"><br/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" maxlength="1500" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7"><?php echo $message ?></textarea><br/>
                            </div>
                        </div>
                        
                        <div class="form-group">
              		        <div class="col-sm-10">
              			        <input type="number" class="form-control" id="human" name="human" placeholder="2 + 3 = Your Answer" maxlength="1" value="<?php echo $human; ?>"><br/>
              		        </div>
              	        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button><br/><br/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Location</div>
                    <div class="panel-body">
                        <br/>
                        <div>
                        <br/>
                        Dzelzcela street 16<br />
                        Jurmala, Latvia<br />
                        #(703) 1234 1234<br />
                        nellijaartgallery@gmail.com<br />
                        </div><br/><br/><br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Opening times</div>
                    <div class="panel-body">
                        <div>
                        <br/><br/>
                        <strong>Monday</strong> (9:00 - 18:00)<br />
                        <strong>Tuesday</strong> (9:00 - 18:00)<br />
                        <strong>Wednesday</strong> (9:00 - 18:00)<br />
                        <strong>Thursday</strong> (9:00 - 18:00)<br />
                        <strong>Friday</strong> (9:00 - 18:00)<br />
                        <strong>Saturday</strong> (9:00 - 18:00)<br />
                        <strong>Sunday</strong> (9:00 - 18:00)<br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>