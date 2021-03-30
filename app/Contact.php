<?php 

    $name = ''; // input:text
    $email = ''; // input:email
    $type = ''; // Select
    $message = ''; // textarea

    function checkform() { // Mock function for demo

        return true;
    }

    function sendEmail() { // Mock function for demo

        // Sending email

        return true;
    }

    // Process form
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        // Form has been submit

        $hours = 72;

        if ( checkForm() && sendEmail() ) { // Check the form values are valid and check that the email has been sent successfully
            echo "Form has been submit! Please allow {$hours} hours for somebody to get back to you. Thank you.";
        } else { // Otherwise display an error message and re-populate the form to allow the user to try again
            echo "Form failed to send, please try again!";

            $name = $_POST["name"] ?? '';
            $email = $_POST["email"] ?? '';
            $type = $_POST["type"] ?? '';
            $message = $_POST["message"] ?? '';
        }
    }

    echo '
        <h1>
            Contact
        </h1>
    ';

    echo '
        <section>
            <form id="contactForm" action="?p=Contact" method="POST" autocomplete="off">
                <fieldset>

                    <legend>Email contact form</legend>

                    <div>
                        <label for="name">Your name:</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Your name" value="' . $name . '" />
                    </div>

                    <div>
                        <label for="email">Your email:</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Your email" value="' . $email . '" />
                    </div>

                    <div>
                        <label for="type">Enquiry type:</label>

                        <select class="form-control" name="type" id="type">
                            <option value="none"> - Please select - </option>
                        </select>
                    </div>

                    <div>
                        <label for="message">Message:</label>
                        <textarea class="form-control" name="message" id="message" placeholder="Type your message here..." value="' . $message . '"></textarea>
                    </div>

                    <div>
                        <input class="btn btn-primary" type="submit" id="formSubmit" value="Send" aria-label="Submit button" />
                    </div>

                </fieldset>
            </form>
        </section>
    ';

