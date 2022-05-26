<!DOCTYPE html>

<!-- Kelsey Nyman -->
<!-- Midterm Project -->
<!-- Reservation -->

<html>
    <head>
        <title>Recipt</title>
    </head>
    <body>
        <?php
            $firstname = $_POST['First-name'];
            $lastname = $_POST['Last-name'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $roomtype = $_POST['roomtype'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $numOfPeople = $_POST['people'];
            $payment = $_POST['payment'];
            $cardNum = $_POST['cardnum'];
        ?>

        <h1>Thank you <?php echo $firstname?><?php echo $lastname?>for your reservation</h1>
        <p>The followings are the information you entered.</p>

        <table>
            <tr>
                <td>Address 1</td>
                <td><?php echo $address1?></td>
            </tr>

            <tr>
                <td>Address 2</td>
                <td><?php echo $address2?></td>
            </tr>

            <tr>
                <td>City</td>
                <td><?php echo $city?></td>
            </tr>

            <tr>
                <td>State</td>
                <td><?php echo $state?></td>
            </tr>

            <tr>
                <td>Zip</td>
                <td><?php echo $zip?></td>
            </tr>

            <tr>
                <td>Check-in</td>
                <td><?php echo $checkin?></td>
            </tr>

            <tr>
                <td>Check-out</td>
                <td><?php echo $checkout?></td>
            </tr>

            <tr>
                <td>Room type</td>
                <td><?php echo $roomtype?></td>
            </tr>

            <tr>
                <td>Phone number</td>
                <td><?php echo $phone?></td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td><?php echo $email?></td>
            </tr>

            <tr>
                <td>Number of people</td>
                <td><?php echo $numOfPeople?></td>
            </tr>

            <tr>
                <td>Payment type</td>
                <td><?php echo $payment?></td>
            </tr>

            <tr>
                <td>Card number</td>
                <td><?php echo $cardNum?></td>
            </tr>
        </table>
    </body>
</html>