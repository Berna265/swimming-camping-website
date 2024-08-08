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
                        <form id="searchForm" action="" method="post">
                            <input type="text" placeholder="Search" name="query">
                            <button>
                                Search
                            </button>
                        </form>

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
                    <select form="searchForm" name="destination" id="destination">
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
                        <input form="searchForm" name="min-price" min="50000" max="500000" type="number" placeholder="Min Price">
                    </div>
                    <div>-</div>
                    <div><label class="d-block py-3" for="max-price">Max Price</label>
                        <input form="searchForm" name="max-price" min="500000" max="1000000" type="number" placeholder="Max Price">
                    </div>
                </div>
            </div>
            <div class="col-md-4 m-auto justify-content-center">
                <div>
                    <label class="d-block py-3" for="destination">Services</label>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select services
                        </button>
                        <div class="dropdown-menu px-3" id="servicesForm">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="output"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
        var selectedItems = [];

        const form = document.getElementById('servicesForm');

        campingServices.forEach((service, index) => {
            const sanitizedService = service.replace(/\s+/g, '');

            const checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.id = `service-${index}`;
            checkbox.name = `service-${sanitizedService}`;
            checkbox.value = service;
            checkbox.form = 'searchForm';

            const label = document.createElement('label');
            label.htmlFor = `service-${index}`;
            label.textContent = service;
            label.classList.add('px-2');

            const br = document.createElement('br');

            form.appendChild(checkbox);
            form.appendChild(label);
            form.appendChild(br);
        });

        function select(checkboxId) {
            const selectedItem = document.getElementById(checkboxId);
            selectedItems.push(selectedItem.value)
            console.log('selectedItem', selectedItem.value);
            document.getElementById('output').innerHTML = selectedItems;
        }

        const selectedCheckbox = document.getElementsByTagName('input');

        for (const element of selectedCheckbox) {
            if (element.type == 'checkbox') {
                element.addEventListener("click", () => {
                    select(element.id)
                });
            }
        }
    </script>
</body>

</html>