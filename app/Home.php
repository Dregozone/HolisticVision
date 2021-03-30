<?php 

    echo '
        <section class="splash">
            <img src="public/img/splash.jpg" id="splash" class="splash" alt="splash" title="splash" aria-label="splash" />

            <div class="callToAction">
                <a href="?p=Contact">
                    <div class="btn btn-primary">
                        Book an appointment
                    </div>
                </a>
            </div>
        </section>

        <hr />

        <section class="slider">
    ';

    $treatments = [
        1 => [
            "name" => "1",
            "alt" => "First",
            "desc" => "First description",
            "link" => "First"
        ],
        2 => [
            "name" => "2",
            "alt" => "Second",
            "desc" => "Second description",
            "link" => "Second"
        ],
        3 => [
            "name" => "3",
            "alt" => "Third",
            "desc" => "Third description",
            "link" => "Third"
        ]
    ];

    foreach ( $treatments as $treatment ) {

        echo '
            <a href="?p=Treatment&treatment=' . $treatment["link"] . '">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="public/img/' . $treatment["name"] . '.jpg" alt="' . $treatment["alt"] . '">

                    <div class="card-body">
                        <p class="card-text">' . $treatment["desc"] . '</p>
                    </div>
                </div>
            </a>
        ';
    }

    echo '
        </section>
    ';
