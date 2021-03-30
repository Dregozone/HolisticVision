<?php 

    $treatmentName = $_GET["treatment"] ?? '';

    echo '
        <section class="treatment">
            <div>
                <img src="public/img/treatment.jpg" class="treatment" alt="' . $treatmentName . '" aria-label="' . $treatmentName . '" />
            </div>

            <div class="right">
                <h2>' . $treatmentName . '</h2>

                <p>
                    Description
                </p>

                <p>
                    Price: £0.00
                </p>

                <a href="?p=Contact&type=' . $treatmentName . '">
                    <div class="btn btn-primary">
                        Book an appointment
                    </div>
                </a>
            </div>
        </section>
    ';
