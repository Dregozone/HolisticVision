<?php 

    echo '
        <h1>
            Treatments
        </h1>

        <section>
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
            <div class="treatment">
                <a href="?p=treatment&treatment=' . $treatment["link"] . '">
                    <img src="public/img/' . $treatment["name"] . '.jpg" class="treatment" />
                </a>

                <p class="treatment">
                    ' . $treatment["desc"] . '
                </p>
            </div>
        ';
    }
            
    echo '
        </section>
    ';
