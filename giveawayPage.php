<?php include "includes/head.php"; ?>
<?php include "includes/nav.php"; ?>


<div class="main-container">

    <?php include "includes/aside.php"; ?>


    <main>
        <div class="card text-white bg-warning mb-3 card-custom" style="max-width: 70rem;">
            <div class="card-header">Give away your Parking Space</div>
            <div class="card-body">
                <h5 class="card-title text-custom">give away your parking Space to earn extra credits</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">License</th>
                            <th scope="col">Parking Spot</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row"></th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>AHJ-9086</td>
                            <td>#4</td>

                        </tr>
                        <div class="form-group">
                            <label for="date-time-interval-select">Select a date and time interval:</label>
                            <div class="input-group">
                                <input type="date" id="selected-date" class="form-control" required>
                                <input type="time" id="start-time" class="form-control" required>
                                <span class="input-group-text">to</span>
                                <input type="time" id="end-time" class="form-control" required>
                            </div>
                        </div>

                    </tbody>
                </table>
                <button type="button" class="btn btn-danger">GIVE AWAY</button>

            </div>
        </div>
    </main>
</div>

<?php include "includes/footer.php"; ?>