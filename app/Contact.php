<?php 

    $name = ''; // input:text
    $email = ''; // input:email
    $type = ''; // Select
    $message = ''; // textarea

    // Process form
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        // Form has been submit
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

