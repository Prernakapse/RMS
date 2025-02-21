<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Booking List</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>No. of Person</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Messages</th>
                    <th>Requests</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($bookings)) { 
                    $sr_no = 1;
                    foreach ($bookings as $booking) { ?>
                        <tr>
                            <td><?= $sr_no++; ?></td>
                            <td><?= htmlspecialchars($booking['name']); ?></td>
                            <td><?= htmlspecialchars($booking['email']); ?></td>
                            <td><?= htmlspecialchars($booking['no_of_person']); ?></td>
                            <td><?= htmlspecialchars($booking['date']); ?></td>
                            <td><?= htmlspecialchars($booking['time']); ?></td>
                            <td><?= htmlspecialchars($booking['messages']); ?></td>
                            <td><?= htmlspecialchars($booking['requests']); ?></td>
                        </tr>
                <?php } } else { ?>
                    <tr>
                        <td colspan="8" class="text-center">No records found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
