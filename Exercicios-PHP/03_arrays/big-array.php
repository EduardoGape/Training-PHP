<?php
    $brothers = array( 
        'Joe' => array( 
            'age' => 34,
            'job' => 'teacher',
            'state' => 'PA',
        ),
        'Phil' => array( 
            'age' => 33,
            'job' => 'photographer',
            'state' => 'NY',
        ),
        'Mike' => array( 
            'age' => 32,
            'job' => 'logistics',
            'state' => 'NY',
        ),
        'Rob' => array( 
            'age' => 29,
            'job' => 'manager',
            'state' => 'FL',
        ),
    );

    echo '<pre>';
    print_r( $brothers );
    echo '</pre>';

    echo '<p>'. $brothers['Rob']['state'] . '</p>';