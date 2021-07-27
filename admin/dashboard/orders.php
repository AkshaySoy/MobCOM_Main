<!doctype html>
<html lang="en">

<head>

    <?php

    require('../admin-modules/header.php');

    ?>

</head>

<body>

    <?php

    require('../admin-modules/navbar.php');

    ?>

    <div class="container-fluid">

        <div class="row">

            <?php

            require('../admin-modules/sidebar.php');

            ?>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Manage Orders</h1>
                </div>

                <!-- Main Content Start -->

                <div class="container-fluid p-2">

                    <!-- Table Start -->

                    <table class="table table-hover table-bordered table-responsive-sm shadow">

                        <thead class="text-center thead-light">
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Customer Address</th>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Date Purchased</th>
                                <th scope="col">Track Order</th>
                            </tr>
                        </thead>

                        <!-- Table Content Start -->

                        <tbody class="text-center">

                            <tr>
                                <th scope="row">1</th>
                                <td>John Doe</td>
                                <td>The Village</td>
                                <td>24</td>
                                <td>iPhone 7</td>
                                <td>21 July 2021</td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-primary">Track</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>Ethan Hunters</td>
                                <td>The Village</td>
                                <td>24</td>
                                <td>iPhone 7</td>
                                <td>21 July 2021</td>
                                <td class="align-middle">
                                    <button type="button" class="btn btn-primary">Track</button>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                    <!-- Table End -->

                </div>

                <!-- Main Content End -->

            </main>

        </div>

    </div>

    <?php

    require('../admin-modules/footer.php');

    ?>

</body>

</html>