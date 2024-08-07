<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <header>
        <nav>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3">
                        <div>
                            Logo
                        </div>
                    </div>
                    <div class="col-md-9 d-flex justify-content-end">
                        <div class="d-flex d-flex justify-content-around w-50">
                            <a>Link 1</a>
                            <a>Link 2</a>
                            <a>Link 3</a>
                            <a>Link 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Style the section tag height -->
    <section style="height: 200px; width:100%" class="">
        <div class="row h-100">
            <div class="col align-self-center">
                <div class="m-auto justify-content-center">
                    <div class="d-flex">
                        <img class="m-auto justify-content-center" style="width: 100px;" src="https://e7.pngegg.com/pngimages/577/99/png-clipart-summer-camp-logo-summer-camp-child-camping-learning-summer-camp-child-text-thumbnail.png" alt="GWSC">
                    </div>

                    <div class="d-flex justify-content-center pt-3">
                        <!-- Search bar -->
                        <input type="text" placeholder="Search" name="query">
                        <button>
                            Search
                        </button>
                    </div>
                    </s>

                </div>
            </div>
        </div>


    </section>
    <section class="container">
        <!-- Search Filters -->
        <div class="row">
            <h3>Find Exactly What You Want</h3>
        </div>
        <div class="row" style="height: 150px;">
            <div class="col-md-4 m-auto justify-content-center">
                <div>
                    <label class="d-block py-3" for="destination">Destination</label>
                    <select name="destination" id="destination">
                        <option value="lilongwe">Lilongwe</option>
                        <option value="dowa">Dowa</option>
                        <option value="dedza">Dedza</option>
                        <option value="blantyre">Blantyre</option>
                        <option value="likoma">Likoma</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 m-auto justify-content-center">
                <div class="d-flex align-items-center">
                    <div><label class="d-block py-3" for="min-price">Min Price</label>
                        <input name="min-price" min="50000" max="500000" type="number" placeholder="Min Price">
                    </div>
                    <div>-</div>
                    <div><label class="d-block py-3" for="max-price">Max Price</label>
                        <input name="max-price" min="500000" max="1000000" type="number" placeholder="Max Price">
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-auto justify-content-center">
                <div>
                    <label class="d-block py-3" for="destination">Destination</label>
                    <select id="services" name="services">
                        <option value=""> select destination</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Array of camping site services
        const campingServices = [
            "Tent Rentals",
            "RV Hookups",
            "Firewood Supply",
            "Guided Tours",
            "Hiking Trails",
            "Fishing Access",
            "Restrooms",
            "Showers",
            "Laundry Facilities",
            "WiFi"
        ];

        // Get the dropdown element
        const servicesDropdown = document.getElementById('services');

        // Loop through the array and create option elements
        campingServices.forEach(service => {
            console.log(service);

            // Create a container for each service
            const container = document.createElement('option');

            // Create the checkbox
            const checkBox = document.createElement('input');
            checkBox.type = 'checkbox';
            checkBox.id = service.toLowerCase().replace(/ /g, '-');

            // Create a label for the checkbox
            const label = document.createElement('label');
            label.htmlFor = checkBox.id;
            label.textContent = service;

            // Append the checkbox and label to the container
            container.appendChild(checkBox);
            container.appendChild(label);

            // Append the container to the dropdown's parent container
            servicesDropdown.appendChild(container);
        });
    </script>
</body>

</html>