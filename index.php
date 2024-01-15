<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $allFilters = $hotels;

    $parking = $_GET['parking'];

    if($parking == true) {
        $hotelsWithParking = [];
        foreach($hotels as $hotel) {
            if ($hotel['parking']) {
                $hotelsWithParking[] = $hotel;
            }
        }

        $allFilters = $hotelsWithParking;
    };

    


    // $vote = $_GET["vote"];

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <div class="container">

        <h1 class="text-center mt-5 mb-5">
            Hotels
        </h1>

        <div class="">
            <h3>
                Filters
            </h3>
            <form action="./index.php" method="$_GET" class="mb-5">
                <!-- Disponibilità parcheggio -->
                <select class="mb-3" name="parking">
                    <option selected>All</option>
                    <option value=true>With parking</option>
                    <option value=false>No parking</option>
                </select>

                <!-- Voto dell'hotel -->
                <label for="vote">Vote:</label>
                <select class="mb-3" name="vote">
                    <option selected>All votes </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <div>
                    <button type="submit">Submit</button>
                </div>


            </form>
        </div>

        <table class="table table-striped table-bordered container">
            <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Parking
                    </th>
                    <th>
                        Vote
                    </th>
                    <th>
                        Distance to center
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $hotels as $hotel ) { ?>
                <tr>
                    <td>
                        <?php echo $hotel['name']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['description']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['parking']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['vote']; ?>
                    </td>
                    <td>
                        <?php echo $hotel['distance_to_center']; ?>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>